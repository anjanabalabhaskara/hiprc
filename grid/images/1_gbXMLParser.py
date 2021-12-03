import os.path
import glob
import sys
import xml.etree.cElementTree as ET
import re
import math
from sys import argv

#### SYNATX ANALYSER ####
class SYNTAX_ANALYSER(object) :
    def __init__(self):
        self._tree=None
        self.exception = None
    
    def prepareTree(self ,InputFile): 
        try:
            self._tree = ET.parse(InputFile)
            return self._tree   
        except Exception as e:
            self.exception = e
            return None
      
    def printError( self) :
        print "\nSyntax Error ...can't parse file\n"
        print self.exception
           
#### SEMANTIC ANALYSER #### 
class SEMANTIC_ANALYSER(object):
    def __init__(self , tree):
        self._tree = tree
        self.Units_Dict = {}
        self.Buildings = [] # Building - ID , storeyindices , storeycount
        self.Storeys = []  # Storey - level , index , roomCount , roomindices , wallCount , wallindices 
        self.rooms = [] #  E_room - index,l,b,h,ID ,name , T , EwallIDs , IwallIDs
        self.Exwalls = [] # wall - index , ID , name , width , height , thick , h , k , az , roomIDs ( found from reps)
        self.Inwalls = [] # 
        self.Reps = {} # ID : index
        self.Const_Values = {} 
    
    def process_Tree(self):    
        try:        
            _root = ( self._tree ).getroot() 
      
            if not _root.tag == '{http://www.gbxml.org/schema}gbXML':
                  print "\nNot a valid root. Parsing Failed\n"              
                  return False
                  
            self.Units_Dict [ 'Temp' ] = _root.attrib[ 'temperatureUnit' ]
            self.Units_Dict [ 'Area' ] = _root.attrib[ 'areaUnit' ]
            self.Units_Dict [ 'Length' ] = _root.attrib[ 'lengthUnit'  ]
            self.Units_Dict [ 'Volume' ] = _root.attrib[ 'volumeUnit' ]       
            
            _campus = _root.find('{http://www.gbxml.org/schema}Campus') 
            if not self.validate(_campus , 'Campus') : return False
            
            L_E_building = _campus.findall('{http://www.gbxml.org/schema}Building') 
            if not len(L_E_building)  : return False            
            self.enter_Buildings_Data(L_E_building)            
                 
            L_E_wall = _campus.findall('{http://www.gbxml.org/schema}Surface')
            if not len(L_E_wall) : return False
            self.enter_Walls_Data(L_E_wall)
            return True
        except Exception as e:
            print "\nError in process_Tree function of SEMANTIC ANALYSER \n"  , e        
      
    def enter_Buildings_Data(self , L_E_building):
        try:
            N_Buildings = 0
            for E_building in L_E_building :       
                ID = None
                Name = None
                index = None
                StoreyIDs = []

                ID = E_building.attrib.get('id' , None)
                E_Name = E_building.find('{http://www.gbxml.org/schema}Name')
                if E_Name :
                    Name = E_Name.text
                index = N_Buildings
                
                L_E_storey = E_building.findall('{http://www.gbxml.org/schema}BuildingStorey')
                if len(L_E_storey)==0:                
                    StoreyIDs.append( "SingleStorey" )
                    storey = {}
                    storey[ "ID" ] = "SingleStorey"
                    storey[ "Level" ] = 0
                    storey[ "index" ] = 0
                    storey[ "Name" ] = None
                    self.Reps[ "SingleStorey" ] = 0
                    self.Storeys.append(storey)
                else :
                    StoreyIDs =  self.enter_Storeys_Data(L_E_storey)
                
                building = {}
                building[ "ID" ] = ID
                building[ 'index' ] = N_Buildings
                building[ "Name" ] = Name 
                building[ "StoreyIDs" ] = StoreyIDs                 
                
                self.Buildings.append(building)
                N_Buildings += 1
                
                L_E_room = E_building.findall('{http://www.gbxml.org/schema}Space')
                if not len(L_E_room) : return False
                
                self.enter_Rooms_Data(L_E_room)  
                self.Reps[ ID ] = index                
        except Exception as e:
            print e        
       
    def enter_Storeys_Data(self , L_E_storey):        
        N_Storeys = 0  
        L_StoreyID = [] 
        for E_storey in L_E_storey:
            Level = None
            ID = None
            index = None
            Name = None
            Storey = {}
            
            ID = E_storey.attrib[ 'id' ]
            Level = E_storey.find('{http://www.gbxml.org/schema}Level').text
            E_Name = E_storey.find('{http://www.gbxml.org/schema}Name')
            if E_Name :
                Name = E_Name.text
            index = N_Storeys
             
            Storey[ "ID" ] = ID     
            Storey[ "Name" ] = Name
            Storey[ "Level" ] = Level
            Storey[ "index" ] = N_Storeys
  
            self.Storeys.append(Storey)
            N_Storeys += 1            
            
            self.Reps[ ID ] = index
            L_StoreyID.append(ID)
        return L_StoreyID     
    
    def enter_Rooms_Data( self , L_E_room):   
        roomCount = 0 
        for E_room in L_E_room:
            E_Name = E_room.find('{http://www.gbxml.org/schema}Name')
            if E_Name :
                Name = E_Name.text
            ID = E_room.attrib[ 'id' ]
            
            l = 0 ; b = 0 ; h= 0            
            _Shellg =  E_room.find('{http://www.gbxml.org/schema}ShellGeometry')
            if not self.validate( _Shellg , 'ShellGeometry' ) : return False
            _ClosedShell = _Shellg.find('{http://www.gbxml.org/schema}ClosedShell')
            if not self.validate(_ClosedShell, 'ClosedShell' ) : return False
            surfaceList = _ClosedShell.findall('{http://www.gbxml.org/schema}PolyLoop')
            for surface in surfaceList :
                if l*b*h==0:        
                    Points = surface.findall('{http://www.gbxml.org/schema}CartesianPoint')   
                    p = [ ] 
                    for point in Points:
                        Tuple = point.findall('{http://www.gbxml.org/schema}Coordinate')
                        p.append( ( (float)(Tuple[0].text) , (float)(Tuple[1].text) ,(float)(Tuple[2].text ) )  )                     
                    xd1 = p[0][0] - p[1][0] ;    yd1 = p[0][1] - p[1][0] ;   zd1 = p[0][2] - p[1][2]
                    xd2 = p[1][0]-p[2][0] ;  yd2 = p[1][1] -p[2][1] ;   zd2 = p[1][2]-p[2][2]
                    if zd1==0 and zd2==0:
                        slope1 = None ; slope2 = None
                        if not xd1==0 and not xd2==0 : 
                            slope1 = float(yd1 / xd1)  ;  slope2 = float(yd2/xd2)                           
                            if (int)( slope1*slope2) == -1 :
                                if l==0 : l = math.sqrt( yd1**2 + xd1**2)                            
                                if b== 0 : b = math.sqrt( yd2**2 + xd2**2) 
                        else :  
                            if  xd1==0 and yd2==0 :   
                                if not l : l = abs(xd2) 
                                if not b : b = abs(yd1)
                            elif xd2==0  and yd1==0  : 
                                if not l: l= abs(xd1) 
                                if not b : b = abs(yd2)
                    else :
                        if zd1==0 and not zd2==0 : 
                            if not h : h = abs(zd2)
                            distance = math.sqrt( yd1**2 + xd1**2)
                            if not l and not b==distance :
                                l = distance
                            elif not b and not l==distance:
                                b = distance  
                        elif zd2==0 and not zd1==0 :
                            distance =  math.sqrt( yd2**2 + xd2**2) 
                            if not h :  h= abs(zd1)
                            if not l and not b==distance:
                                l =   distance
                            elif not b and not l==distance:
                                b = distance      
                        if  xd1==0 and yd2==0 :   
                            if not l : l = xd2 
                            if not b : b = yd1
                        elif xd2==0  and yd1==0  : 
                            if not l: l= xd1 
                            if not b : b = yd2
                else : break   
            room  = {}
            room[ 'index' ] = roomCount
            room[ "ID" ]  = ID
            room[ 'length'] = l ;   room['breadth'] = b ;   room['height'] = h 

            self.Reps[ ID ] = roomCount           
            
            StoreyID = E_room.attrib.get("buildingStoreyIdRef",None)
            if not StoreyID:
                if len(self.Storeys)==1:
                    if self.Storeys[0][ "ID" ]== "SingleStorey" :
                        room[ "StoreyID" ] = "SingleStorey"   
                        StoreyIndex = 0
                else : print "StoreyID not found..parsing failed" ; return False              
            else:            
                StoreyIndex = self.Reps[ StoreyID ]               
                room[ "StoreyID" ] = StoreyID
            
            if self.Storeys[ StoreyIndex].get("roomIDs", None) : self.Storeys[ StoreyIndex ]["roomIDs"].append(ID)
            else : self.Storeys[ StoreyIndex ][ "roomIDs" ] = [ ID ] 
            
            self.rooms.append(room)             
            roomCount += 1             
    
    def enter_Walls_Data(self,L_E_wall):
        try:
            ExwallCount = 0
            InwallCount = 0
            for E_wall in L_E_wall:
                SurfaceType = E_wall.get('surfaceType' , None)
                if not SurfaceType :
                    print " wall Type not specified , check gbxml file "
                    return False
                if SurfaceType=="ExteriorWall" or SurfaceType=="InteriorWall" :                        
                    Name = None
                    ID = E_wall.get('id',None)
                    if not ID : 
                        print "wall ID not found , check gbxml file" 
                        return False
                                       
                    E_Name = E_wall.find('{http://www.gbxml.org/schema}Name')
                    if E_Name :
                        Name = E_Name.text      
                        
                    RecGeoEl = E_wall.find('{http://www.gbxml.org/schema}RectangularGeometry')
                    if not self.validate( RecGeoEl , "RectangularGeometry") : return False
                    E_tilt = RecGeoEl.find('{http://www.gbxml.org/schema}Tilt')
                    E_height = RecGeoEl.find('{http://www.gbxml.org/schema}Height')
                    E_width = RecGeoEl.find('{http://www.gbxml.org/schema}Width')
                    
                    if not self.validate(E_tilt ,"Tilt" ) : return False
                    if not self.validate(E_height,"Height" ) : return False
                    if not self.validate(E_width ,"Width" ) : return False          
                    
                    wall= {}
                    wall[ "ID" ] = ID
                    wall[ "Name" ] = Name
                    wall[ "tilt" ] = E_tilt.text
                    wall[ "height" ] = E_height.text
                    wall[ "width" ] = E_width.text
                    
                    L_E_Adj_Sp_ID = E_wall.findall('{http://www.gbxml.org/schema}AdjacentSpaceId')
                    if not self.validate(L_E_Adj_Sp_ID , "AdjacentSpaceId"):
                        return False
                    wall[ "ARI" ] = []
                    roomIndices = []
                    for E_Adj_Sp_ID in L_E_Adj_Sp_ID:
                        R_ID = E_Adj_Sp_ID.attrib.get( "spaceIdRef" , None)
                        if not R_ID:
                            print "information insufficient"
                            return False
                        index = self.Reps.get(R_ID , None)
                        if index == None:
                            print "wrong roomID"
                            return False
                        roomIndices.append(index)                                   
                        wall[ "ARI" ].append(R_ID)       
                    if  SurfaceType == "ExteriorWall":
                        wall[ "index" ] = ExwallCount  
                        
                        azimuth = RecGeoEl.find('{http://www.gbxml.org/schema}Azimuth').text
                        
                        azimuth  = (float)( azimuth)
                        direc = None
                        if( azimuth > 0 and ( azimuth <45 or azimuth>315) ) : direc = "N"
                        elif (azimuth>45 and azimuth<135) : direc = "E"
                        elif (azimuth>135 and azimuth<225) : direc = "S"
                        elif (azimuth>225 and azimuth<315)  : direc = "W"
                        
                        wall[ "direc" ] = direc    
                                             
                        self.Exwalls.append(wall)
                        self.Reps[ ID ] = ExwallCount
                        for roomID in wall[ "ARI" ] :
                            index = self.Reps.get(roomID,None) 
                            if index==None :
                                 print "error"
                            else:     
                                room = self.rooms[ index ]                              
                                flag = room.get("EWIDs" ,None)
                                if flag==None:
                                    room[ "EWIDs" ] = [ ID ]
                                else : room[ "EWIDs"].append(ID)  
                        ExwallCount += 1
                    elif SurfaceType == "InteriorWall":
                        wall[ "index" ] = InwallCount     
                        
                        rID1 = wall[ "ARI" ][0]
                        rID2 = wall[ "ARI" ][1]
                        r1 = self.rooms[ self.Reps[ rID1] ]
                        r2 = self.rooms[ self.Reps[ rID2 ] ]
                        
                        if  r1[ "StoreyID" ] == r2[ "StoreyID" ] : 
                                          
                            self.Inwalls.append(wall)
                            self.Reps[ ID ] = InwallCount
                            
                            flag = self.rooms[ roomIndices[0] ].get( "IWIDs" , None) 
                            
                            if flag :
                                self.rooms[ roomIndices[0] ][ "IWIDs" ].append(ID) 
                            else : self.rooms[ roomIndices[0] ][ "IWIDs" ] = [ ID ]                
                            
                            flag = self.rooms[ roomIndices[1] ].get( "IWIDs" , None)  
                            if flag :
                                self.rooms[ roomIndices[1] ][ "IWIDs" ].append(ID) 
                            else : self.rooms[ roomIndices[1] ][ "IWIDs" ] = [ ID ] 

                            InwallCount += 1   
            count = 0    
            for storey in self.Storeys:
                roomIDs = storey[ "roomIDs" ]
                for ID in roomIDs:
                    Rindex = self.Reps[ ID ]
                    room = self.rooms[ Rindex ]                       
                    EWIDs = room.get("EWIDs" , None)
                    if not EWIDs==None:
                        flag = storey.get("EWIDs" , None)
                        if flag==None:
                             storey[ "EWIDs" ] = []
                             for elem in EWIDs:
                                storey[ "EWIDs" ].append(elem)
                        else :
                            for elem in EWIDs:
                                self.Storeys[ self.Storeys.index(storey) ][ "EWIDs" ].append(elem)   
                    IWIDs = room.get("IWIDs" , None)
                    if not IWIDs==None:
                        flag = storey.get("IWIDs" , None)
                        if flag==None:
                            storey[ "IWIDs" ] = []
                            for elem in IWIDs:
                                storey[ "IWIDs" ].append(elem)
                        else :
                            for elem in IWIDs:                                
                                if elem not in storey[ "IWIDs"] :
                                    self.Storeys[ self.Storeys.index(storey) ][ "IWIDs" ].append(elem)   
        except Exception as e:
            print "error in walls" ,e 
        
        
    def addParams(self, ParamFile):
        try:
            Sup_FObj = open(ParamFile,"r")
        except :
            print "Error Finding Input File\n.Matrix generation failed"
            sys.exit()
                
        content = Sup_FObj.read()
        content = content.strip()
        params = re.split(";\s*",content)
        for elem in params:
            elem = elem.strip()
            Seperate = re.split("=",elem)
            Keyword = Seperate[0].strip()
            value = Seperate[1].strip()
            self.Const_Values[ Keyword ] = (float)(value)

        Sup_FObj.close()

        try :
            hi = self.Const_Values[ 'hi' ]
            k = self.Const_Values[ 'k' ]
            ho = self.Const_Values[ 'ho' ]
            for elem in self.Exwalls:
                elem[ "h" ] = ho
                elem[ "k" ] = k
            for elem in self.Inwalls:
                elem[ "h" ] = hi
                elem[ "k" ] = k    
            for elem in self.rooms:
                ID = elem[ "ID"]
                index = self.rooms.index(elem)
                self.rooms[ index ][ "IT" ]  = self.Const_Values.get( ID , 0)    
                                       
        except KeyError as e:
            print e , " Constant parameter missing"
            sys.exit()   
            
    def gen_Layout( self , fileObj):
        fileObj.write( "BUILDING "+ self.Buildings[0][ "ID" ] + "\n\n" )
        
        for storey in self.Storeys:
            fileObj.write( "STOREY " + storey["ID"] + " [ \n\n" )
            fileObj.write("Rooms [ \n")
            for roomID in storey[ "roomIDs" ]:
                roomIndex = self.Reps[ roomID ]
                fileObj.write( roomID + "( room" + str(roomIndex+1) + " )\n" )
            fileObj.write(" ] \n\n")  
            
            fileObj.write("Exwalls [ \n")      
            for EWID in storey[ "EWIDs"]:
                wallIndex = self.Reps[ EWID ]
                fileObj.write( EWID + "( e" + str(wallIndex+1) + " )\n" )
            fileObj.write(" ] \n\n")   
            
            fileObj.write("Inwalls [ \n")      
            for IWID in storey[ "IWIDs"]:
                wallIndex = self.Reps[ IWID ]
                fileObj.write( IWID + "( i" + str(wallIndex+1) + " )\n" )
            fileObj.write(" ] \n\nConnections [ \n\n room-wall : ") 
            
            
            for roomID in storey[ "roomIDs" ]:
                roomIndex = self.Reps[ roomID ]
                fileObj.write( "room"+ str(roomIndex+1) + "-[ " )
                wallSet = self.rooms[ roomIndex ].get("EWIDs",None)
                if wallSet :
                    for EWID in wallSet :
                        index = self.Reps[ EWID ]
                        fileObj.write( "e" + str(index+1) + ",")
                wallSet = self.rooms[ roomIndex ].get("IWIDs",None)   
                if wallSet:     
                    for IWID in  wallSet :
                        index = self.Reps[ IWID ]
                        fileObj.write( "i" + str(index+1) + ",")
                    fileObj.write( " ] \n")
            
            fileObj.write( "\nExwall - room\n")    
            for EWID in storey[ "EWIDs" ]:
                wallIndex = self.Reps[ EWID]
                wall = self.Exwalls[ wallIndex ]
                fileObj.write( "e" + str(wallIndex+1) + " - [ ")
                for roomID in wall[ "ARI" ]:
                    index = self.Reps[ roomID ]
                    fileObj.write( "room" + str(index+1) + ",")
                fileObj.write( " ] \n")  
            
            fileObj.write( "\nInwall - room\n")    
            for IWID in storey[ "IWIDs" ]:
                wallIndex = self.Reps[ IWID]
                wall = self.Inwalls[ wallIndex ]
                fileObj.write( "i" + str(wallIndex+1) + " - [ ")
                for roomID in wall[ "ARI" ]:
                    index = self.Reps[ roomID ]
                    fileObj.write( "room" + str(index+1) + ",")
                fileObj.write( " ] \n")      
            fileObj.write("\n")         
                    
    def validate(self, extract , gbXMLElement):
        if extract==None:
            print "parsing failed... Required %s element , not found \n" % gbXMLElement
            return False         
        return True    


class MG(object):
    def __init__(self):
        self.var_list = {}
    
    def populate_var_list(self):
        self.var_list[ 'pkg_name' ] = "Modelica.Media.Air.SimpleAir"
        self.var_list[ 'pkg_var_name' ] = "Medium"
        self.var_list[ 'W_Speed' ] = "Wind_Speed"
        self.var_list[ 'W_dir' ] = "Wind_Direction"
        self.var_list[ 'OT' ] = "Outside_Temperature"
        self.var_list[ 'presc_OT' ] = "presc_Outside_Temp"    
    
    def generate_Modelica( self , Ph2obj , tfobj):
          
         self.populate_var_list() 
         
         rooms = Ph2obj.rooms
         Buildings = Ph2obj.Buildings
         Storeys = Ph2obj.Storeys
         var_list = self.var_list
         Reps = Ph2obj.Reps
         Exwalls = Ph2obj.Exwalls
         Inwalls = Ph2obj.Inwalls
         
         for storey in Storeys:
                ID = storey[ "ID" ]
                
                statement = "model %s\n\n" % ID
                tfobj.write(statement)
                
                statement = "replaceable package {pkg_var_name} = {pkg_name} ; \n\n".format(**(self.var_list))
                tfobj.write(statement) 
                
                for roomID in storey[ "roomIDs" ]:
                    roomIndex = Reps[ roomID ]           
                    room = rooms[ roomIndex ]                   
                    statement = "Room {ID} (breadth = {breadth}, height = {height}, init_Temp = {IT}, length = {length} ) ;\n".format(**room)   
                    tfobj.write(statement)
                tfobj.write("\n")                

                for EWID in storey[ "EWIDs" ]:                   
                    wallIndex = Reps[ EWID ]
                    wall = Exwalls[ wallIndex ]                    
                    statement = "Partition_EX {ID} (az = Buildings.Types.Azimuth.{direc}, h = {h}, height = {height}, k = 100, length = {width}, thick = 0.3) ;\n".format(**wall)
                    tfobj.write(statement)
                tfobj.write("\n")                
                    
                for IWID in storey[ "IWIDs" ]:
                    wallIndex = Reps[ IWID ]
                    wall = Inwalls[ wallIndex ]                 
                    statement = "Partition_IN {ID} ( h = {h}, height = {height}, k = 100, length = {width}, thick = 0.3) ; \n".format(**wall)
                    tfobj.write(statement)
                tfobj.write("\n")             
                
                for roomID in storey[ "roomIDs" ]:
                    index = Reps[ roomID ]           
                    temp = "prescribedTemperature%d" % index
                    statement = "Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  %s ; \n" % temp
                    tfobj.write(statement)
                tfobj.write("\n")     
                
                statement = "Modelica.Blocks.Interfaces.RealInput {W_Speed} ;\n".format(**var_list)
                tfobj.write(statement)

                statement = "Modelica.Blocks.Interfaces.RealInput {W_dir} ;\n".format(**var_list)
                tfobj.write(statement)

                statement = "Modelica.Blocks.Interfaces.RealInput {OT} ;\n".format(**var_list)
                tfobj.write(statement)

                statement = "Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature {presc_OT} ; \n".format(**var_list)
                tfobj.write(statement)
                tfobj.write("\n")  
                
                for roomID in storey[ "roomIDs" ]:
                    index = Reps[ roomID ]      
                    temp = "in_R%d" % index
                    Ph2obj.rooms[ index ][ "port_a" ] = temp
                    statement = "Modelica.Fluid.Interfaces.FluidPort_a %s(redeclare package Medium = %s) ; \n" % ( temp , var_list[ 'pkg_var_name' ] )
                    tfobj.write(statement)
                tfobj.write("\n")   
                    
                for roomID in storey[ "roomIDs" ]:
                    index = Reps[ roomID ]      
                    temp = "out_R%d" % index
                    Ph2obj.rooms[ index ][ "port_b" ] = temp
                    statement = "Modelica.Fluid.Interfaces.FluidPort_b %s(redeclare package Medium = %s) ; \n" % ( temp , var_list[ 'pkg_var_name' ] )
                    tfobj.write(statement)
                tfobj.write("\n")  
                
                TotalCount = len(storey["roomIDs"]) + len(storey[ "EWIDs"]) + len(storey[ "IWIDs" ])
                mux_name = "mux%d1" % TotalCount
                #statement = "Multiplex%d %s ;\n" % ( TotalCount ,mux_name)
                #tfobj.write(statement)
                tfobj.write("\n")

                tfobj.write("equation\n\n")
                
                mux_port_num = 1
                for roomID in storey["roomIDs"]:
                    index = Reps[ roomID]
                    room = rooms[ index ]
                    statement = "connect( %s.R_temp , %s.u%d[1] ) ;\n" % ( room[ 'ID' ] , mux_name , mux_port_num)
                    Ph2obj.rooms[ index ][ 'mux_port_no'] = mux_port_num
                    tfobj.write(statement)
                    mux_port_num += 1 
                tfobj.write("\n")

                for EWID in storey[ "EWIDs" ]:
                    index = Reps[ EWID]
                    wall = Exwalls[ index ]
                    Ph2obj.Exwalls[ index ][ 'mux_port_no'] = mux_port_num
                    statement = "connect( %s.TW , %s.u%d[1] ) ;\n" % ( wall["ID"] , mux_name , mux_port_num)
                    tfobj.write(statement )
                    mux_port_num += 1   
                tfobj.write("\n")  
                
                for IWID in storey[ "IWIDs" ]:
                    index = Reps[ IWID]
                    wall = Inwalls[ index ]
                    Ph2obj.Inwalls[ index ][ 'mux_port_no'] = mux_port_num
                    statement = "connect( %s.TW , %s.u%d[1] ) ;\n" % ( wall[ "ID" ] , mux_name , mux_port_num)
                    tfobj.write(statement )
                    mux_port_num += 1 
                tfobj.write("\n")                
                
                for roomID in storey[ "roomIDs" ]:
                    room = rooms[ Reps[ roomID ] ]
                    statement = "connect({port_b}, {ID}.out_flow) ;\n".format(**room)
                    tfobj.write( statement )
                tfobj.write("\n")           
               
                for roomID in storey[ "roomIDs" ]:
                    room = rooms[ Reps[ roomID] ]
                    statement = "connect({port_a}, {ID}.in_flow) ;\n".format(**room)
                    tfobj.write( statement )              
                tfobj.write("\n") 
         
                tfobj.write( "connect({OT}, {presc_OT}.T) ;\n\n".format(**var_list)) 
         
                for EWID in storey[ "EWIDs" ]:
                    wall = Exwalls[ Reps[ EWID] ]
                    statement = "  connect(%s.port, %s.OutSide_Temp_a) ;\n" % ( var_list[ 'presc_OT' ] , wall[ 'ID' ] )
                    tfobj.write( statement)
                tfobj.write("\n") 
                    
                for EWID in storey[ "EWIDs" ]:
                    wall = Exwalls[ Reps[ EWID] ]
                    statement = "  connect(%s, %s.W_Direction) ;\n" % ( var_list[ 'W_dir' ] , wall[ 'ID' ] )
                    tfobj.write( statement)
                tfobj.write("\n")

                for EWID in storey[ "EWIDs" ]:
                    wall = Exwalls[ Reps[ EWID] ]
                    statement = "  connect(%s, %s.W_Speed) ;\n" % ( var_list[ 'W_Speed' ] , wall[ 'ID' ] )
                    tfobj.write( statement)
                tfobj.write("\n") 

                for roomID in storey[ "roomIDs" ]:
                    index = Reps[ roomID ] 
                    room = rooms[ index ]
                    statement = "connect( %s.R_temp, %s.T) ;\n" % ( room[ 'ID' ] , ("prescribedTemperature%d" % index ) )
                    tfobj.write( statement)
                tfobj.write("\n") 

                #RW_Conns = Ph2obj.RW_Conns
                Reps = Ph2obj.Reps

                for EWID in storey[ "EWIDs" ]:
                    wall = Exwalls[ Reps[ EWID] ]
                    attachedRoomID = wall[ 'ARI' ][0]
                    roomindex = Ph2obj.Reps[ attachedRoomID ]
                    temp = "prescribedTemperature%d" % roomindex  
                    statement = "connect(%s.port.T, %s.port_b.T ) ; \n" % (temp , wall[ "ID" ] )
                    tfobj.write( statement)
                tfobj.write("\n")
                       
                for IWID in storey[ "IWIDs" ]:
                    wall = Inwalls[ Reps[ IWID] ]
                    roomID1 = wall[ 'ARI' ][0]
                    roomID2 = wall[ 'ARI' ][1]
                    roomindex1 = Reps[ roomID1 ]
                    roomindex2  = Reps[ roomID2 ]
                    temp1 = "prescribedTemperature%d" % roomindex1
                    temp2 = "prescribedTemperature%d" % roomindex2
                    statement1 = "connect (%s.port.T, %s.port_a.T ) ; \n" % ( temp1 , wall[ "ID" ]) 
                    statement2 = "connect (%s.port.T, %s.port_b.T )  ; \n" % ( temp2 , wall[ "ID" ])  
                    tfobj.write( statement1)
                    tfobj.write( statement2)
                    tfobj.write("\n")
                tfobj.write("\n")
                         
                for EWID in storey[ "EWIDs" ]:
                    wall = Exwalls[ Reps[ EWID] ]
                    attachedRoomID = wall[ 'ARI' ][0]
                    statement = "connect( %s.port_b.Q_flow, %s.port_a.Q_flow) ; \n" % (  wall[ 'ID' ], attachedRoomID )
                    tfobj.write( statement)
                tfobj.write("S\n")
                       
                for IWID in storey[ "IWIDs" ]:
                    wall = Inwalls[ Reps[ IWID] ]                   
                    roomID1 = wall[ 'ARI' ][0]
                    roomID2 = wall[ 'ARI' ][1]
                    statement1 = "connect (%s.port_a.Q_flow, %s.port_a.Q_flow) ; \n" % (  wall[ 'ID' ], roomID1 ) 
                    statement2 = "connect (%s.port_b.Q_flow, %s.port_a.Q_flow) ; \n\n" % (  wall[ 'ID' ], roomID2 )  
                    tfobj.write( statement1)
                    tfobj.write( statement2)

                tfobj.write("\n")
                tfobj.write("end %s;\n\n"%storey["ID"]) 
                    
####MAIN FUNCTION #######

# helper function 1
def list_xml_files():
    print "\nList of xml files that exist in this directory\n"
    for f in glob.glob("*.xml"):
        print f 
        
# helper function 2         
def file_exists( FileName) :    
    try :
        FileObj = open( FileName ,"r")
        return True
    except:
        return False   

# helper function 3
def is_xml_file(FileName):    
    return FileName.endswith(".xml")

# helper func'n 4
def get_input_file() :
    FileName = raw_input("Input an xml file (.xml extension) for parsing : ")
    while ( ( not file_exists(FileName))) :
        FileName = raw_input("\n FILE NOT FOUND... Enter a valid file name : ")
  
    while ( (not is_xml_file(FileName))) :
        FileName = raw_input("\nNot an XML file... Enter a valid xml file for parsing : \n")
        
    return FileName

# helper func'n 5
def query():
    command = raw_input( "\n\n DO YOU WANT TO EXIT (Y/N) ? ")    
    if command.strip() == "Y" : return False
    else : return True
    
# statement execution start point 
              
list_xml_files() 
InputFileName = get_input_file() 
    
Ph1Obj = SYNTAX_ANALYSER()
_tree = Ph1Obj.prepareTree(InputFileName)     
if not _tree:
    Ph1Obj.printError()

Ph2Obj = SEMANTIC_ANALYSER(_tree) 
if not Ph2Obj.process_Tree():   
        sys.exit()    
Ph2Obj.addParams("S1_Thermal_Paramters.txt")               

name = os.path.splitext(InputFileName)[0]

LayOutFile =  "LAYOUT_" + name + ".txt"
IFObj = open( LayOutFile , "w")
Ph2Obj.gen_Layout(IFObj)
IFObj.close()

ModelicaFile = name + ".mo"
print ModelicaFile
targetFile_Obj = open( ModelicaFile , "w")    
Ph3Obj = MG()
Ph3Obj.generate_Modelica(Ph2Obj , targetFile_Obj)
targetFile_Obj.close()

fobj = open("in.txt", "w")
fobj.write(ModelicaFile)
fobj.close()
sys.exit()
         
