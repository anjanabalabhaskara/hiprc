#forked from pipe2.py
#updates for running on cluster

import time
from z3 import *
#sys.path.append("/home/sumana/Installed_Tools/z3/bin")
import numpy as np

no_of_task=2
jobs_per_task=[1, 1]
operations_per_job=[45, 45]

z=0 #zero value
opt = Optimize()

set_option(max_args=10000000000, max_lines=1000000000, max_depth=10000000000, max_visited=1000000000)
set_option(rational_to_decimal=True)
#set_option("smt.timeout", 10000) # 10s timeout

set_option("verbose", 2)
#set_option(precision=30)

#Function to return Z3 expression for max operation
def max(x,y):
  return(If( x >= y, x, y ))


#Two Boolean variable for every compute operation (i,k,x)
# b1_i_k_x == denotes mapping for high priority streams
# b2_i_k_x == denotes mapping for low priority streams
b1 = []
b2 = []
for i in range(no_of_task):#Number of tasks
    b1.append([])
    b2.append([])
    for k in range(jobs_per_task[i]):#Number of jobs in atask
        b1[i].append([])
        b2[i].append([])
        for x in range(2,operations_per_job[i],2):# for only compute operations only
            b1[i][k].append([])
            b2[i][k].append([])
            b1[i][k][x//2 -1].append(Bool("b1_%i_%i_%i" % (i, k, x)))
            b2[i][k][x//2- 1].append(Bool("b2_%i_%i_%i" % (i, k, x)))

#Deadlines of each task Di
D=[Real("D_%i"%i) for i in range(no_of_task)]
#print(D)

#times[i][k][x][0]= Z3 variable for Arrival time a_i_k_x
#times[i][k][x][1]= Z3 variable for execution time c_i_k_x
times = []
for i in range(no_of_task):#Number of tasks
    times.append([])
    for k in range(jobs_per_task[i]):#Number of jobs in atask
        times[i].append([])
        for x in range(operations_per_job[i]):#Number of operations
            times[i][k].append([])
            times[i][k][x].append(Real("a_%i_%i_%i" % (i, k, x)))
            times[i][k][x].append(Real("c_%i_%i_%i" % (i, k, x)))


#Initialize Arrival time:  execution time
#file1=open('/home/danny/smt/input/newtoyex11.txt','r')  #for toy example 1
#file1=open('/home/danny/smt/input/newtoyex22.txt','r')  #for toy example 1
file1=open('/home/danny/smt/input/freship.txt','r')  #for toy example 1

Ftimes=[]
for i in range(no_of_task):#Number of tasks
    Ftimes.append([])
    for k in range(jobs_per_task[i]):#Number of jobs in a task
        Ftimes[i].append([])
        for x in range(operations_per_job[i]):#Number of operations per task
            Ftimes[i][k].append([])
            line=file1.readline()
            a,e=line.strip().split(" ")
            #print(eval(a),eval(e))
            Ftimes[i][k][x].append(eval(a))
            Ftimes[i][k][x].append(eval(e))
            #print(times[i][k][x][0], times[i][k][x][1], times[i][k][x][2])
file1.close()

#ST and FT variable for every operation (i,k,x)
#  ST_i_k_x
#  FT_i_k_x

ST = []
FT = []
for i in range(no_of_task):#Number of tasks
    ST.append([])
    FT.append([])
    for k in range(jobs_per_task[i]):#Number of jobs in atask
        ST[i].append([])
        FT[i].append([])
        for x in range(operations_per_job[i]):#Number of operations
            ST[i][k].append([])
            FT[i][k].append([])
            ST[i][k][x].append(Real("ST_%i_%i_%i" % (i, k, x)))
            FT[i][k][x].append(Real("FT_%i_%i_%i" % (i, k, x)))
#print(STFT)

#Precedence of Memory operation P(i,k,x)(i,k,x)
#Ipm[i1][k1][x1][i2][k2][x2]=P_i1_k1_x1_i2_k2_x2
IPm=[[[[[[Bool("P_%i_%i_%i_%i_%i_%i" % (p,q,r,i,k,x)) for x in [0]+list(range(1,operations_per_job[i],2))]  for k in range(jobs_per_task[i]) ] for i in range(no_of_task)] for r in [0]+ list(range(1,operations_per_job[p],2))]  for q in range(jobs_per_task[p]) ] for p in range(no_of_task)]

#Precedence of compute operations bound to low priority stream:Pl(i1,k1,x1)(i2,k2,x2)
IPl=[[[[[[Bool("PL_%i_%i_%i_%i_%i_%i" % (p,q,r,i,k,x)) for x in range(2,operations_per_job[i],2)]  for k in range(jobs_per_task[i]) ] for i in range(no_of_task)] for r in range(2,operations_per_job[p],2)]  for q in range(jobs_per_task[p]) ] for p in range(no_of_task)]

#Precedence of compute operations bound to high priority stream:Ph(i1,k1,x1)(i2,k2,x2)
IPh=[[[[[[Bool("PH_%i_%i_%i_%i_%i_%i" % (p,q,r,i,k,x)) for x in range(2,operations_per_job[i],2)]  for k in range(jobs_per_task[i]) ] for i in range(no_of_task)] for r in range(2,operations_per_job[p],2)]  for q in range(jobs_per_task[p]) ] for p in range(no_of_task)]

#Precedence of compute operations bound to high and low priority stream:Phl(i1,k1,x1)(i2,k2,x2)
IPhl=[[[[[[Bool("PHL_%i_%i_%i_%i_%i_%i" % (p,q,r,i,k,x)) for x in range(2,operations_per_job[i],2)]  for k in range(jobs_per_task[i]) ] for i in range(no_of_task)] for r in range(2,operations_per_job[p],2)]  for q in range(jobs_per_task[p]) ] for p in range(no_of_task)]

#Overlapping of two operations O(i1,k1,x1)(i2,k2,x2)
O=[[[[[[Bool("O_%i_%i_%i_%i_%i_%i" % (p,q,r,i,k,x)) for x in range(2,operations_per_job[i],2)]  for k in range(jobs_per_task[i]) ] for i in range(no_of_task)] for r in range(2,operations_per_job[p],2)]  for q in range(jobs_per_task[p]) ] for p in range(no_of_task)]

#Co-Scheduling lookup table S(i1,x1)(i2,x2)
#S[i1][x1][i2][x2]=S_i1_x1_i2_x2
S=[[[[Bool("S_(%i %i)(%i %i)" % (p,r,i,x)) for x in range(2,operations_per_job[i],2)] for i in range(no_of_task)] for r in range(2,operations_per_job[p],2)] for p in range(no_of_task)]
#print(S)


#sL and sL variable for every operation (i,k,x)
# sLsH[i][k][x][0]=sL_i_k_x
# sLsH[i][k][x][1]=sH_i_k_x
sL = []
sH = []
for i in range(no_of_task):#Number of tasks
    sL.append([])
    sH.append([])
    for k in range(jobs_per_task[i]):#Number of jobs in atask
        sL[i].append([])
        sH[i].append([])
        for x in range(2,operations_per_job[i],2):#Number of operations
            sL[i][k].append([])
            sH[i][k].append([])
            sL[i][k][x//2-1].append(Real("sL_%i_%i_%i" % (i, k, x)))
            sH[i][k][x//2-1].append(Real("sH_%i_%i_%i" % (i, k, x)))

#Open file for wring constraints into it
#cFile=open("/home/danny/smt/toy_constraints.txt", "w")
#cFileunsat=open("/content/drive/MyDrive/unsat.txt", "w")

# Adding constraints for initialization of co-scheduling lookup table S(i,x)
#cFile.write(" Constraints for initialization of co-scheduling lookup table S(i,x)\n")
#for i1 in range(no_of_task):
#  for x1 in range(2,operations_per_job[i1],2):
#    for i2 in range(no_of_task):
#      for x2 in range(2,operations_per_job[i2],2):
#        if (i1!=i2 or x1 != x2 ): #S(0,2)(0,2) can not be coscheduled together
#          #print(i1,x1,i2,x2)
#          opt.add(S[i1][x1//2-1][i2][x2//2-1] == True)
#          #cFile.write(str( S[i1][x1//2-1][i2][x2//2-1] == True    ))
#          #cFile.write("\n")
#        else:
#          opt.add(S[i1][x1//2-1][i2][x2//2-1] == False)
#          #cFile.write(str( S[i1][x1//2-1][i2][x2//2-1] == False    ))
#          #cFile.write("\n")


#   New block added to process Co-Scheduling lookup table ####

shl=numpy.empty((operations_per_job[0]//2, operations_per_job[1]//2)) #(22,22)
file1=open("/home/danny/smt/input/coSched1.txt", "r")
#filling entries of Shl
for x1 in range(2,operations_per_job[0],2):
    line=file1.readline()
    h=line.strip().split(" ")
    for x2 in range(2,operations_per_job[1],2):
          if (eval(h[x2//2-1])== 1):
            shl[x1//2-1][x2//2-1]=1
          else:
            shl[x1//2-1][x2//2-1]=0
file1.close()

slh=numpy.empty((operations_per_job[1]//2, operations_per_job[0]//2)) #(22,22)
file2=open("/home/danny/smt/input/coSched2.txt", "r")
for x1 in range(2,operations_per_job[0],2):
    line=file2.readline()
    h=line.strip().split(" ")
    for x2 in range(2,operations_per_job[1],2):
          if (eval(h[x2//2-1])== 1):
            slh[x1//2-1][x2//2-1]=1
          else:
            slh[x1//2-1][x2//2-1]=0
file2.close()

for i1 in range(no_of_task):
 for x1 in range(2,operations_per_job[i1],2):
   for i2 in range(no_of_task):
     for x2 in range(2,operations_per_job[i2],2):
       if (i1==i2 ): #S(0,2)(0,2) can not be coscheduled together
         opt.add(S[i1][x1//2-1][i2][x2//2-1] == False)
       else:
          if (i1==0  and i2==1):
            if (shl[x1//2-1][x2//2-1]==1):
              opt.add(S[i1][x1//2-1][i2][x2//2-1] == True)
            else:
              opt.add(S[i1][x1//2-1][i2][x2//2-1] == False)
          else:
            if (i1==1 and i2==0):
              if (slh[x1//2-1][x2//2-1]==1):
                opt.add(S[i1][x1//2-1][i2][x2//2-1] == True)
              else:
                opt.add(S[i1][x1//2-1][i2][x2//2-1] == False)
#New block ended here #####


#:Adding constraints to initialize deadline (Di)
#cFile.write("Constraints to initialize Deadline (Di)\n" )
#d=[16.0, 10.0]  # for toyexample11 
#d=[18.0, 11.0] #  for toyexample21
d=[80.0,80.0]
for i in range(no_of_task):
  opt.add(D[i]==d[i])
  #cFile.write(str(D[i]==d[i]))
  #cFile.write("\n")

#1.Arrival time of Memory Operations:
#cFile.write("#1.Arrival time of Memory Operations:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in [0] + list(range(1,operations_per_job[i],2)): #For memory operations   If(x>y,x,y)
          if (i==0 and k==0): #for the first job, arrival time of all operations will be arrival time of first operation
            opt.add(times[i][k][x][0] == Ftimes[i][k][z][0])
            #cFile.write(  str(times[i][k][x][0] == Ftimes[i][k][z][0]   ))
            #cFile.write("\n")
          else:
            if (k==0):
              opt.add(times[i][k][x][0] ==  Ftimes[i][k][z][0])
              #cFile.write(str( times[i][k][x][0] ==  Ftimes[i][k][z][0]  ))
              #cFile.write("\n")
            else:
              opt.add(times[i][k][x][0] == max( FT[i][k-1][operations_per_job[i]-2][0], Ftimes[i][k][z][0] ))
              #cFile.write(str( times[i][k][x][0] == max( FT[i][k-1][operations_per_job[i]-2][0], Ftimes[i][k][z][0] )       ))
              #cFile.write("\n")


#2.Arrival time of Compute Operations:
#cFile.write("#2.Arrival time of Compute Operations:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in range(2,operations_per_job[i],2): #For compute operations 
          opt.add(times[i][k][x][0] == max(FT[i][k][x-1][0], FT[i][k][x-2][0]))
          #cFile.write(str(times[i][k][x][0] == max(FT[i][k][x-1][0], FT[i][k][x-2][0])   ))
          #cFile.write("\n")

#3:Adding constraint for ST and FT values : these values are  positive
#cFile.write("#3.Constraint specifying ST and FT values are positive\n")
terms1=[]
terms2=[]
for i in range(no_of_task):
  for k in range(jobs_per_task[i]):
    for x in range(operations_per_job[i]):
      terms2.append(FT[i][k][x][0] > ST[i][k][x][0]) 
opt.add(And(terms2))
#cFile.write(str(And(terms2)))
#cFile.write("\n")


#4.Lower bound on start time of memory operation:
#cFile.write("#4.Lower bound on start time of memory operation:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in [0] + list(range(1,operations_per_job[i],2)):
          if(x==0):
            opt.add(ST[i][k][x][0] >= times[i][k][x][0])
            #cFile.write(str(  ST[i][k][x][0] >= times[i][k][x][0]  ))
            #cFile.write("\n")
          elif (x==1):
            opt.add(ST[i][k][x][0] >= ST[i][k][x-1][0] + Ftimes[i][k][x-1][1])
            #cFile.write(str(  ST[i][k][x][0] >= ST[i][k][x-1][0] + Ftimes[i][k][x-1][1]   ))
            #cFile.write("\n")
          else:
            opt.add(ST[i][k][x][0] >= ST[i][k][x-2][0] + Ftimes[i][k][x-2][1])
            #cFile.write(str(  ST[i][k][x][0] >= ST[i][k][x-2][0] + Ftimes[i][k][x-2][1]   ))
            #cFile.write("\n")

#5.Lower bound on start time of compute operation:
#cFile.write("#5.Lower bound on start time of compute operation:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in range(2,operations_per_job[i],2): #For compute operations
          opt.add( ST[i][k][x][0] >= max( ST[i][k][x-1][0] + Ftimes[i][k][x-1][1] , ST[i][k][x-2][0] + Ftimes[i][k][x-2][1] ))
          #cFile.write(str(   ST[i][k][x][0] >= max( ST[i][k][x-1][0] + Ftimes[i][k][x-1][1] , ST[i][k][x-2][0] + Ftimes[i][k][x-2][1] )    ))
          #cFile.write("\n")


#6. Finish time of all operations:
#cFile.write("#6. Finish time of all operations:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in range(0,operations_per_job[i]):
          opt.add(FT[i][k][x][0] == ST[i][k][x][0] + Ftimes[i][k][x][1])
          #cFile.write(str(FT[i][k][x][0] == ST[i][k][x][0] + Ftimes[i][k][x][1]))
          #cFile.write("\n")


#7.Upper bound on Finish time: -----
#cFile.write("#7.Upper bound of Finish time:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in range(0,operations_per_job[i]):       
          if (x==operations_per_job[i]-1):
            opt.add(FT[i][k][x][0] <= (k+1)*D[i])
            #cFile.write(str(FT[i][k][x][0] <= (k+1)*D[i]))
            #cFile.write("\n")
          else:
            sumterms=[]
            for r in range(x+1,operations_per_job[i]):
              sumterms.append(Ftimes[i][k][r][1])
            opt.add(FT[i][k][x][0] <= (k+1)*D[i] -Sum(sumterms))
            #cFile.write(str((FT[i][k][x][0] <= (k+1)*D[i] -Sum(sumterms))))
            #cFile.write("\n")

#8:Inter-job Start and Finish Time constraints:
#cFile.write("#8.Inter-job Start and Finish Time constraints::\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
          if(k>0):
            opt.add(ST[i][k][z][0] >= FT[i][k-1][operations_per_job[i]-1][0])
            #cFile.write(str( ST[i][k][z][0] >= FT[i][k-1][operations_per_job[i]-1][0]   ))
            #cFile.write("\n")

# #9:Constraint stating no two memory operations starts at the same time
# #cFile.write("\n10: No two memory operations starts at the same time:\n")
# #ss=[]
# for i1 in range(no_of_task):
#     for k1 in range(jobs_per_task[i1]):
#         for x1 in [0] + list(range(1,operations_per_job[i1],2)): #For memory operations   
#           for i2 in range(no_of_task):
#             for k2 in range(jobs_per_task[i2]):
#               for x2 in [0] + list(range(1,operations_per_job[i2],2)):#for memory operations only
#                 if(i1!=i2 or k1!=k2 or x1!=x2):
#                   #print(i1,k1,x1,i2,k2,x2)
#                   opt.add(ST[i1][k1][x1][0] != ST[i2][k2][x2][0], "9 ")
#                   # cFile.write(str( ST[i1][k1][x1][0] != ST[i2][k2][x2][0]   ))
#                   # cFile.write("\n")

# #10:Constraint stating no two compute operations starts at the same time
# # cFile.write("11,12: No two compute operations starts at the same time:\n")
# for i1 in range(no_of_task):
#     for k1 in range(jobs_per_task[i1]):
#         for x1 in range(2,operations_per_job[i1],2): #Forcompute operations 
#           for i2 in range(no_of_task):
#             for k2 in range(jobs_per_task[i2]):
#               for x2 in range(2,operations_per_job[i2],2): #Forcompute operations 
#                 if(i1!=i2 or k1!=k2 or x1!=x2):
#                   opt.add( If(And(b1[i1][k1][(x1//2)-1][0],b1[i2][k2][(x2//2)-1][0]), ST[i1][k1][x1][0] != ST[i2][k2][x2][0], True  ),"10")
#                   opt.add( If(And(b2[i1][k1][(x1//2)-1][0],b2[i2][k2][(x2//2)-1][0]), ST[i1][k1][x1][0] != ST[i2][k2][x2][0], True ),"10")
#                   # cFile.write(str(  If(And(b1[i1][k1][(x1//2)-1][0],b1[i2][k2][(x2//2)-1][0]), ST[i1][k1][x1][0] != ST[i2][k2][x2][0], True  )    ))
#                   # cFile.write("\n")
#                   # cFile.write(str(  If(And(b2[i1][k1][(x1//2)-1][0],b2[i2][k2][(x2//2)-1][0]), ST[i1][k1][x1][0] != ST[i2][k2][x2][0], True )  ))
#                   # cFile.write("\n")




#11. Overlapping constraint:O((i1,k1,x1), (i2,k2,x2)): whether (i1,k1,x1) mapped to high prioriy compute stream overlapes with (i2,k2,x2) mapped to low priority stream.
#cFile.write("#9. Constraint on Overlapping of execution intervals:\n")
for i1 in range(no_of_task):
    for k1 in range(jobs_per_task[i1]):
        for x1 in  range(2,operations_per_job[i1],2):
          for i2 in range(no_of_task):
            for k2 in range(jobs_per_task[i2]):
              for x2 in range(2,operations_per_job[i2],2):
                if(i1 != i2): # or k1!=k2 or x1!=x2):
                  #print(i1,k1,x1,i2,k2,x2)
                  opt.add(
                      
                      If(    Or(And(ST[i1][k1][x1][0] < ST[i2][k2][x2][0], FT[i2][k2][x2][0] < FT[i1][k1][x1][0]),
                                And(ST[i1][k1][x1][0] > ST[i2][k2][x2][0], FT[i2][k2][x2][0] > FT[i1][k1][x1][0]),
                                And(ST[i1][k1][x1][0] < ST[i2][k2][x2][0], FT[i1][k1][x1][0] < FT[i2][k2][x2][0], ST[i2][k2][x2][0] < FT[i1][k1][x1][0] ),
                                And(ST[i1][k1][x1][0] > ST[i2][k2][x2][0], FT[i1][k1][x1][0] > FT[i2][k2][x2][0], ST[i1][k1][x1][0] < FT[i2][k2][x2][0]),
                                And(ST[i1][k1][x1][0] == ST[i2][k2][x2][0], Or( FT[i1][k1][x1][0] >=FT[i2][k2][x2][0],   FT[i1][k1][x1][0] < FT[i2][k2][x2][0] )),
                                And(FT[i1][k1][x1][0] == FT[i2][k2][x2][0],  Or(ST[i1][k1][x1][0] >= ST[i2][k2][x2][0], ST[i1][k1][x1][0] < ST[i2][k2][x2][0]))
                               ),
                                O[i1][k1][x1//2-1][i2][k2][x2//2-1] == True, 
                                O[i1][k1][x1//2-1][i2][k2][x2//2-1] == False,
                      ),
                      )
               #   cFile.write(str(
               #       If(    Or(And(ST[i1][k1][x1][0] < ST[i2][k2][x2][0], FT[i2][k2][x2][0] < FT[i1][k1][x1][0]),
               #                 And(ST[i1][k1][x1][0] > ST[i2][k2][x2][0], FT[i2][k2][x2][0] > FT[i1][k1][x1][0]),
               #                 And(ST[i1][k1][x1][0] < ST[i2][k2][x2][0], FT[i1][k1][x1][0] < FT[i2][k2][x2][0], ST[i2][k2][x2][0] < FT[i1][k1][x1][0] ),
               #                 And(ST[i1][k1][x1][0] > ST[i2][k2][x2][0], FT[i1][k1][x1][0] > FT[i2][k2][x2][0], ST[i1][k1][x1][0] < FT[i2][k2][x2][0]),
               #                 And(ST[i1][k1][x1][0] == ST[i2][k2][x2][0], Or( FT[i1][k1][x1][0] >=FT[i2][k2][x2][0],   FT[i1][k1][x1][0] < FT[i2][k2][x2][0] )),
               #                 And(FT[i1][k1][x1][0] == FT[i2][k2][x2][0],  Or(ST[i1][k1][x1][0] >= ST[i2][k2][x2][0], ST[i1][k1][x1][0] < ST[i2][k2][x2][0] ))
               #                ),
               #                 O[i1][k1][x1//2-1][i2][k2][x2//2-1] == True, 
               #                 O[i1][k1][x1//2-1][i2][k2][x2//2-1] == False,
               #       )
               #   ))
               #   cFile.write("\n")
                else:
                  opt.add(O[i1][k1][x1//2-1][i2][k2][x2//2-1] == False)
                  #cFile.write(str( O[i1][k1][x1//2-1][i2][k2][x2//2-1] == False   ))
                  #cFile.write("\n")

#12. Non overlapping of memory operation
#cFile.write("#12. No two memory operations overlaps:\n")
for i1 in range(no_of_task):
    for k1 in range(jobs_per_task[i1]):
        for x1 in [0] + list(range(1,operations_per_job[i1],2)): #For memory operations   
          for i2 in range(no_of_task):
            for k2 in range(jobs_per_task[i2]):
              for x2 in [0] + list(range(1,operations_per_job[i2],2)):#for memory operations only
                if(i1!=i2):
                  opt.add( Or( ST[i1][k1][x1][0]>=FT[i2][k2][x2][0], ST[i2][k2][x2][0] >= FT[i1][k1][x1][0]  ))
                  #cFile.write(str(       If(ST[i1][k1][x1][0]<=ST[i2][k2][x2][0], (ST[i2][k2][x2][0] < FT[i1][k1][x1][0] ) == False , (ST[i1][k1][x1][0] < FT[i2][k2][x2][0]) == False )  ))
                  #cFile.write("\n")

#13-14 Overlapping of compute operation in the same stream: No two compute operations should overlap in the same compute stream
#cFile.write("#13-14 No two compute operations overlaps:\n")
for i1 in range(no_of_task):
    for k1 in range(jobs_per_task[i1]):
        for x1 in range(2,operations_per_job[i1],2): #Forcompute operations 
          for i2 in range(no_of_task):
            for k2 in range(jobs_per_task[i2]):
              for x2 in range(2,operations_per_job[i2],2): #Forcompute operations 
                if(i1!=i2):# or k1!=k2 or x1!=x2):
                  opt.add( If(And(b1[i1][k1][(x1//2)-1][0],b1[i2][k2][(x2//2)-1][0]), And( O[i1][k1][(x1//2)-1][i2][k2][(x2//2)-1] == False,O[i2][k2][(x2//2)-1][i1][k1][(x1//2)-1] == False) , True))
                  #cFile.write(str( If(And(b1[i1][k1][(x1//2)-1][0],b1[i2][k2][(x2//2)-1][0]), O[i1][k1][(x1//2)-1][i2][k2][(x2//2)-1] == False, True)   ))
                  #cFile.write("\n")
                  opt.add( If(And(b2[i1][k1][(x1//2)-1][0],b2[i2][k2][(x2//2)-1][0]), And( O[i1][k1][(x1//2)-1][i2][k2][(x2//2)-1] == False, O[i2][k2][(x2//2)-1][i1][k1][(x1//2)-1] == False)  , True ))
                  #cFile.write(str( If(And(b2[i1][k1][(x1//2)-1][0],b2[i2][k2][(x2//2)-1][0]), O[i1][k1][(x1//2)-1][i2][k2][(x2//2)-1] == False , True )   ))
                  #cFile.write("\n")

#15: Compute operation is mapped to either high priority or low priority compute stream:(b1+b2=1)
#if(x==True,1,0 )+ if(y==True,1,0 ) == 1
#cFile.write("#15: Compute operation is mapped to either high priority or low priority com-pute stream:(b1+b2=1):\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in range(2,operations_per_job[i],2):
          opt.add((If(b1[i][k][x//2-1][0],1,0) + If(b2[i][k][x//2-1][0],1,0)) == 1)
          #cFile.write(str( (If(b1[i][k][x//2-1][0],1,0) + If(b2[i][k][x//2-1][0],1,0))== 1 ))
          #cFile.write("\n")

#for IPm operations only
def func1(i1,k1,x1,i2,k2,x2,i3,k3,x3):
  return And(ST[i3][k3][x3][0] >= FT[i1][k1][x1][0], FT[i3][k3][x3][0] <= ST[i2][k2][x2][0])

#16: Immediatley Preceding memeory operation IPm(i1,k1,x1)(i2,k2,x2):
#cFile.write("#16: Precedence of memeory operation IPm(i1,k1,x1)(i2,k2,x2):\n")
for i1 in range(no_of_task):
    for k1 in range(jobs_per_task[i1]):
        for x1 in [0] + list(range(1,operations_per_job[i1],2)):#for memory operations only
          for i2 in range(no_of_task):
            for k2 in range(jobs_per_task[i2]):
              for x2 in [0] + list(range(1,operations_per_job[i2],2)):#for memory operations only
                if (i1 != i2 or k1 !=k2 or x1 !=x2):
                  sterms=[]
                  for i3 in range(no_of_task):
                    for k3 in range(jobs_per_task[i3]):
                      for x3 in [0] + list(range(1,operations_per_job[i3],2)):#for memory operations only
                       if ((i3 !=i1 or k3!=k1 or x3 !=x1) and (i3 !=i2 or k3!=k2 or x3 !=x2)):
                          sterms.append(func1(i1,k1,x1,i2,k2,x2,i3,k3,x3))
                  opt.add( If( And( FT[i1][k1][x1][0] <= ST[i2][k2][x2][0],  Not(Or(sterms))), IPm[i1][k1][(x1-1)//2 + 1][i2][k2][(x2-1)//2 + 1] == True, IPm[i1][k1][(x1-1)//2 + 1][i2][k2][(x2-1)//2 + 1] == False))
                  #cFile.write(str(  If( And( FT[i1][k1][x1][0] <= ST[i2][k2][x2][0],  Not(Or(sterms))), IPm[i1][k1][(x1-1)//2 + 1][i2][k2][(x2-1)//2 + 1] == True, IPm[i1][k1][(x1-1)//2 + 1][i2][k2][(x2-1)//2 + 1] == False)   ))
                  #cFile.write("\n")
                else:
                  opt.add( IPm[i1][k1][(x1-1)//2 + 1][i2][k2][(x2-1)//2 + 1] ==False) 
                  #cFile.write(str(      IPm[i1][k1][(x1-1)//2 + 1][i2][k2][(x2-1)//2 + 1] ==False  ))
                  #cFile.write("\n")

#For IPh operations only
def func2(i1,k1,x1,i2,k2,x2,i3,k3,x3):
  return If( And (b1[i1][k1][x1//2-1][0], b1[i2][k2][x2//2-1][0], b1[i3][k3][x3//2-1][0]), And(ST[i3][k3][x3][0] >= FT[i1][k1][x1][0], FT[i3][k3][x3][0] <= ST[i2][k2][x2][0]), False )

#17 Immediately Preceding compute operation mapped to high priority stream IPh(i1,k1,x1)(i2,k2,x2)
#cFile.write("#17: Immediate Precedence of compute operation mapped to high priority stream IPh(i1,k1,x1)(i2,k2,x2):\n")
for i1 in range(no_of_task):
    for k1 in range(jobs_per_task[i1]):
        for x1 in  list(range(2,operations_per_job[i1],2)):#for compute operations only
          for i2 in range(no_of_task):
            for k2 in range(jobs_per_task[i2]):
              for x2 in  list(range(2,operations_per_job[i2],2)):#for compute operations only
                if (i1 != i2 or k1 !=k2 or x1 !=x2):
                  sterms=[]
                  for i3 in range(no_of_task):
                    for k3 in range(jobs_per_task[i3]):
                      for x3 in  list(range(2,operations_per_job[i3],2)):#for compute operations only
                        if ((i3 !=i1 or k3!=k1 or x3 !=x1) and (i3 !=i2 or k3!=k2 or x3 !=x2)):
                          sterms.append(func2(i1,k1,x1,i2,k2,x2,i3,k3,x3))
                  opt.add( If( And (b1[i1][k1][x1//2-1][0], b1[i2][k2][x2//2-1][0], FT[i1][k1][x1][0] <= ST[i2][k2][x2][0], Not(Or(sterms))), IPh[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] ==True, IPh[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] == False )) 
                  #cFile.write(str(  If( And (b1[i1][k1][x1//2-1][0], b1[i2][k2][x2//2-1][0], FT[i1][k1][x1][0] <= ST[i2][k2][x2][0], Not(Or(sterms))), IPh[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] ==True, IPh[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] == False )    ))
                  #cFile.write("\n")
                else:
                  opt.add( IPh[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] ==False) 
                  #cFile.write(str(      IPh[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] ==False  ))
                  #cFile.write("\n")

#For IPl operations only
def func3(i1,k1,x1,i2,k2,x2,i3,k3,x3):
  return If( And(b2[i1][k1][x1//2-1][0], b2[i2][k2][x2//2-1][0], b2[i3][k3][x3//2-1][0]), And(ST[i3][k3][x3][0] >= FT[i1][k1][x1][0], FT[i3][k3][x3][0] <= FT[i2][k2][x2][0]), False )

#18 Immediate Precedence of compute operation mapped to low priority stream IPl(i1,k1,x1)(i2,k2,x2):
#cFile.write("#18.Immediate Precedence of compute operation mapped to low priority stream IPl(i1,k1,x1)(i2,k2,x2):\n")
for i1 in range(no_of_task):
    for k1 in range(jobs_per_task[i1]):
        for x1 in  list(range(2,operations_per_job[i1],2)):#for compute operations only
          for i2 in range(no_of_task):
            for k2 in range(jobs_per_task[i2]):
              for x2 in  list(range(2,operations_per_job[i2],2)):#for compute operations only
                if (i1 != i2 or k1 !=k2 or x1 !=x2):
                  sterms=[] 
                  for i3 in range(no_of_task):
                    for k3 in range(jobs_per_task[i3]):
                      for x3 in  list(range(2,operations_per_job[i3],2)):#for compute operations only
                        if((i3 !=i1 or k3!=k1 or x3 !=x1) and (i3 !=i2 or k3!=k2 or x3 !=x2)):
                          sterms.append(func3(i1,k1,x1,i2,k2,x2,i3,k3,x3))
                  opt.add( If(And(b2[i1][k1][x1//2-1][0], b2[i2][k2][x2//2-1][0], FT[i1][k1][x1][0] <= ST[i2][k2][x2][0],  Not(Or(sterms))),IPl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] ==True, IPl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] == False ))
                  #cFile.write(str( If(And(b2[i1][k1][x1//2-1][0], b2[i2][k2][x2//2-1][0], FT[i1][k1][x1][0] <= ST[i2][k2][x2][0],  Not(Or(sterms))),IPl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] ==True, IPl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] == False )      ))
                  #cFile.write("\n")
                else:
                  opt.add( IPl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] ==False) 
                  #cFile.write(str(      IPl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] ==False  ))
                  #cFile.write("\n")

#Function for IPhl constraint
def func4(i1,k1,x1,i2,k2,x2,i3,k3,x3):
  return If( And(b1[i1][k1][x1//2-1][0], b2[i2][k2][x2//2-1][0], O[i1][k1][x1//2-1][i2][k2][x2//2-1], FT[i1][k1][x1][0] < FT[i2][k2][x2][0]), And( O[i3][k3][x3//2-1][i2][k2][x2//2-1], b1[i3][k3][x3//2-1][0], ST[i3][k3][x3][0] >= FT[i1][k1][x1][0] , FT[i3][k3][x3][0] < FT [i2][k2][x2][0]), False)
  #return  And(O[i1][k1][x1//2-1][i2][k2][x2//2-1], O[i3][k3][x3//2-1][i2][k2][x2//2-1], FT[i1][k1][x1][0] < ST[i3][k3][x3][0])

#19: Immediately Preceding Compute Operation(IPHL) bound to high priority stream IPhl(i1,k1,x1)(i2,k2,x2)
#cFile.write("#19. Immediately Preceding Compute Operation  IPhl(i1,k1,x1)(i2,k2,x2)\n")
for i1 in range(no_of_task):
    for k1 in range(jobs_per_task[i1]):
        for x1 in range(2,operations_per_job[i1],2):#for compute operations only
          for i2 in range(no_of_task):
            for k2 in range(jobs_per_task[i2]):
              for x2 in range(2,operations_per_job[i2],2):#for compute operations only
                if (i1 != i2 or k1 !=k2 or x1 !=x2): # 1st and 2nd operation must be different
                  sterms=[]
                  for i3 in range(no_of_task):
                    for k3 in range(jobs_per_task[i3]):
                      for x3 in  list(range(2,operations_per_job[i3],2)):#for compute operations only
                         if ((i3 !=i1 or k3!=k1 or x3 !=x1) and (i3 !=i2 or k3!=k2 or x3 !=x2)):# Correct: 3rd operation should not match 1st and 2nd operation
                            sterms.append(func4(i1,k1,x1,i2,k2,x2,i3,k3,x3))
                  opt.add( If (Or( And( b1[i1][k1][(x1//2)-1][0], b2[i2][k2][(x2//2)-1][0], O[i1][k1][(x1//2)-1][i2][k2][(x2//2)-1] , Not(Or(sterms))), And( b1[i1][k1][(x1//2)-1][0], b2[i2][k2][(x2//2)-1][0], O[i1][k1][(x1//2)-1][i2][k2][(x2//2)-1], FT[i1][k1][x1][0] >= FT[i2][k2][x2][0])), IPhl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] == True , IPhl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] == False))
                  #cFile.write(str(  If (Or( And( b1[i1][k1][(x1//2)-1][0], b2[i2][k2][(x2//2)-1][0], O[i1][k1][(x1//2)-1][i2][k2][(x2//2)-1] , Not(Or(sterms))), And( b1[i1][k1][(x1//2)-1][0], b2[i2][k2][(x2//2)-1][0], O[i1][k1][(x1//2)-1][i2][k2][(x2//2)-1], FT[i1][k1][x1][0] >= FT[i2][k2][x2][0])), IPhl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] == True , IPhl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] == False) ))
                  #cFile.write("\n")
                else:
                  opt.add( IPhl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] == False) 
                  #cFile.write(str(      IPhl[i1][k1][x1//2 - 1][i2][k2][x2//2 - 1] == False   ))
                  #cFile.write("\n")

#20 Start time of memory operation:
#cFile.write("#20. Start time of memory operation:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in [0] + list(range(1,operations_per_job[i],2)): #For memory operations   
          sumterms=[0] #check
          for i1 in range(no_of_task):
            for k1 in range(jobs_per_task[i1]):
              for x1 in [0] + list(range(1,operations_per_job[i1],2)):#for memory operations only
                      sumterms.append( If(IPm[i1][k1][(x1-1)//2+1][i][k][(x-1)//2+1] , FT[i1][k1][x1][0] ,0))
          opt.add( ST[i][k][x][0] == max(times[i][k][x][0], Sum(sumterms) ) )
          #cFile.write(str(  ST[i][k][x][0] == max(times[i][k][x][0], Sum(sumterms) )    ))
          #cFile.write("\n")

#Updated
#21: Start time of High priority stream bound compute operation
#cFile.write("#21: Start time of High priority stream bound compute operation:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in range(2,operations_per_job[i],2): #Forcompute operations 
          sumterms=[0]
          for i1 in range(no_of_task):
            for k1 in range(jobs_per_task[i1]):
              for x1 in range(2,operations_per_job[i1],2):#for compute operations only
                #if (i!=i1 or k!=k1 or x !=x1):#verify this
                  sumterms.append( If(And(b1[i1][k1][(x1//2)-1][0], b1[i][k][(x//2)-1][0], IPh[i1][k1][(x1//2)-1][i][k][(x//2)-1]), FT[i1][k1][x1][0],0) )
          opt.add( ST[i][k][x][0] == max(times[i][k][x][0], Sum(sumterms)) )
          #cFile.write(str(  ST[i][k][x][0] == max(times[i][k][x][0], Sum(sumterms))     ))
          #cFile.write("\n")

"""opt.check()
m1=opt.model()
"""

#22: Finishing time of last compute operation in low priority stream just pre-ceding lower priority stream bound compute operationi,k,2x
#cFile.write("#22: Start time of compute operation bound to low priority stream with pre-ceding compute operation in low priority stream:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in range(2,operations_per_job[i],2): #Forcompute operations 
          sumterms=[0]
          for i1 in range(no_of_task):
            for k1 in range(jobs_per_task[i1]):
              for x1 in range(2,operations_per_job[i1],2):#for compute operations only
                #if (i!=i1 or k!=k1 or x !=x1): #verify this
                  #sumterms.append(If(IPl[i1][k1][(x1//2)-1][i][k][(x//2)-1] , FT[i1][k1][x1][0] ,0 ))
                  sumterms.append(If( And(b2[i1][k1][(x1//2)-1][0], b2[i][k][(x//2)-1][0], IPl[i1][k1][(x1//2)-1][i][k][(x//2)-1]) , FT[i1][k1][x1][0] ,0 ))
          opt.add( If(b2[i][k][(x//2)-1][0], sL[i][k][(x//2)-1][0] ==  max (times[i][k][x][0], Sum(sumterms) ), sL[i][k][(x//2)-1][0] == 0))
          #cFile.write(str(  If(b2[i][k][(x//2)-1][0], sL[i][k][(x//2)-1][0] ==  max (times[i][k][x][0], Sum(sumterms) ), sL[i][k][(x//2)-1][0] == 0)     ))
          #cFile.write("\n")

#23: 
#cFile.write("#23: Start time of compute operation bound to low priority stream with pre-ceding compute operation in high priority stream which does not overlapwith this compute operation:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in range(2,operations_per_job[i],2): #Forcompute operations 
          sumterms=[0]
          for i1 in range(no_of_task):
            for k1 in range(jobs_per_task[i1]):
              for x1 in range(2,operations_per_job[i1],2):#for compute operations only
                      sumterms.append( If( And(b1[i1][k1][(x1//2)-1][0], b2[i][k][(x//2)-1][0], Not(S[i1][x1//2-1][i][x//2-1]), IPhl[i1][k1][(x1//2)-1][i][k][(x//2)-1]), FT[i1][k1][x1][0], 0 ))
          opt.add(   If(b2[i][k][(x//2)-1][0], sH[i][k][(x//2)-1][0] == max(times[i][k][x][0] ,Sum(sumterms)), sH[i][k][(x//2)-1][0] ==0))  
          #cFile.write(str(  If(b2[i][k][(x//2)-1][0], sH[i][k][(x//2)-1][0] == max(times[i][k][x][0] ,Sum(sumterms)), sH[i][k][(x//2)-1][0] ==0)    ))
          #cFile.write("\n")

#24  Start time of Low priority stream bound compute operation
#cFile.write("#24  Start time of Low priority stream bound compute operation:\n")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in range(2,operations_per_job[i],2): #For compute operations 
          opt.add( If(b2[i][k][x//2-1][0], ST[i][k][x][0]== max(sL[i][k][x//2-1][0] , sH[i][k][x//2-1][0]),True))
          #cFile.write(str(   If(b2[i][k][x//2-1][0], ST[i][k][x][0]== max(sL[i][k][x//2-1][0] , sH[i][k][x//2-1][0]),True)    ))
          #cFile.write("\n")

#Objective function

#opt.set("smt.core.minimize","true")
print("\nOptimal solution is\n")

terms=[]
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
      #terms.append((1/D[i]) * (FT[i][k][operations_per_job[i]-1][0]- ST[i][k][0][0]))
      #terms.append((FT[i][k][operations_per_job[i]-1][0]- ST[i][k][0][0]))
      terms.append((1/D[i]) * (FT[i][k][operations_per_job[i]-1][0]- times[i][k][0][0]))
      #terms.append( (FT[i][k][operations_per_job[i]-1][0]- ST[i][k][0][0]))
obj_fn=Sum(terms)

opt_wcrt = Real('opt_wcrt')
opt.add(obj_fn==opt_wcrt)
opt.add( opt_wcrt > 0.0)
opt_val=opt.minimize(opt_wcrt)

start=time.time()
print(opt.check())
end=time.time()-start

m2=opt.model()
print("\n\nOptimal Weighted WCRT")
#print(m2)
print(str(opt_val.value()))


file=open("/home/danny/smt/output/timings.txt","w");
print("Total time taken to search optimal solution is: "+str(end))
file.write("\n")
file.write("Optimal Weighted WCRT is: "+str(opt_val.value()))
file.write("\n")
file.write("Start and finish time of all Operations\n")
for i in range(no_of_task):#Number of tasks
    for k in range(jobs_per_task[i]):#Number of jobs in atask
        for x in range(operations_per_job[i]):
            n1= m2[ST[i][k][x][0]].numerator_as_long()
            d1=m2[ST[i][k][x][0]].denominator_as_long()
            num1=float(n1/d1)
            n2= m2[FT[i][k][x][0]].numerator_as_long()
            d2=m2[FT[i][k][x][0]].denominator_as_long()
            num2=float(n2/d2)
            file.write("%d %d %d %f %f" %(i,k,x,num1,num2))
            file.write("\n")


print("Start and finish time of Compute Operations")
for i in range(no_of_task):
    for k in range(jobs_per_task[i]):
        for x in range(2,operations_per_job[i],2): #For compute operatio
            print(i, k, x, m2[ST[i][k][x][0]],m2[FT[i][k][x][0]])

print("Start  and finish time of memory operations")
for i in range(no_of_task):#Number of tasks
    for k in range(jobs_per_task[i]):#Number of jobs in atask
        for x in [0] + list(range(1,operations_per_job[i],2)):
          print(i, k, x, m2[ST[i][k][x][0]],m2[FT[i][k][x][0]])

print("Printing boolean variables b1(CSh), b2(CSl)")
for i in range(no_of_task):#Number of tasks
    for k in range(jobs_per_task[i]):#Number of jobs in atask
        for x in range(2,operations_per_job[i],2):# for only compute operations only
          print(i,k,x,m2[b1[i][k][x//2 -1][0]],m2[b2[i][k][x//2 -1][0]])

#Close the constraints file
#cFile.close()

file.write("Printing boolean variables b1(CSh), b2(CSl)\n")
for i in range(no_of_task):#Number of tasks
    for k in range(jobs_per_task[i]):#Number of jobs in atask
        for x in range(2,operations_per_job[i],2):# for only compute operations only
            if (m2[b1[i][k][x//2 -1][0]]):
                b11=1
            else:
                b11=0
            if (m2[b2[i][k][x//2 -1][0]]):
                b22=1
            else:
                b22=0
            file.write("%d %d %d %d %d" %(i,k,x,b11,b22))
            file.write("\n");

file.close()

