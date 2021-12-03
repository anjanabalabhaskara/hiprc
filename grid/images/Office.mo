model SingleStorey

replaceable package Medium = Modelica.Media.Air.SimpleAir ; 

Room sp-1-Open (breadth = 3.107406, height = 11.0, init_Temp = 0, length = 17.880208 ) ;
Room sp-2-Open (breadth = 3.107406, height = 12.0, init_Temp = 0, length = 17.880208 ) ;
Room sp-3-Office (breadth = 50.352198, height = 11.0, init_Temp = 0, length = 14.963542 ) ;
Room sp-4-Office (breadth = 34.352198, height = 11.0, init_Temp = 0, length = 14.963542 ) ;
Room sp-5-Office (breadth = 18.477198, height = 11.0, init_Temp = 0, length = 14.963542 ) ;
Room sp-6-Office (breadth = 52.352198, height = 12.0, init_Temp = 0, length = 14.953125 ) ;
Room sp-7-Office (breadth = 32.352198, height = 12.0, init_Temp = 0, length = 14.953125 ) ;
Room sp-8-Office (breadth = 18.477198, height = 12.0, init_Temp = 0, length = 14.953125 ) ;
Room sp-9-Office (breadth = 1.685531, height = 11.0, init_Temp = 0, length = 14.291667 ) ;
Room sp-10-Office (breadth = 13.022802, height = 11.0, init_Temp = 0, length = 14.083334 ) ;
Room sp-11-Office (breadth = 27.522802, height = 11.0, init_Temp = 0, length = 19.458334 ) ;
Room sp-12-Office (breadth = 49.022802, height = 11.0, init_Temp = 0, length = 1.791667 ) ;
Room sp-13-Office (breadth = 64.522802, height = 11.0, init_Temp = 0, length = 13.958334 ) ;
Room sp-14-Office (breadth = 83.522802, height = 11.0, init_Temp = 0, length = 13.958334 ) ;
Room sp-15-Stairwell (breadth = 98.522802, height = 12.0, init_Temp = 0, length = 13.958334 ) ;
Room sp-16-Office (breadth = 117.397802, height = 11.0, init_Temp = 0, length = 15.458334 ) ;
Room sp-17-Office (breadth = 101.397802, height = 11.0, init_Temp = 0, length = 15.583334 ) ;
Room sp-18-Office (breadth = 85.522802, height = 11.0, init_Temp = 0, length = 15.458334 ) ;
Room sp-19-Mens_Room (breadth = 5.314469, height = 11.0, init_Temp = 0, length = 16.583333 ) ;
Room sp-20-Ladies_Room (breadth = 18.685531, height = 11.0, init_Temp = 0, length = 16.583333 ) ;
Room sp-21-MechanicalElectrical (breadth = 8.685531, height = 11.0, init_Temp = 0, length = 16.583333 ) ;
Room sp-22-Mens_Room (breadth = 5.314469, height = 12.0, init_Temp = 0, length = 16.583333 ) ;
Room sp-23-Ladies_Room (breadth = 18.685531, height = 12.0, init_Temp = 0, length = 16.583333 ) ;
Room sp-24-MechanicalElectrical (breadth = 8.685531, height = 12.0, init_Temp = 0, length = 16.583333 ) ;
Room sp-25-Lounge (breadth = 1.685531, height = 12.0, init_Temp = 0, length = 27.791667 ) ;
Room sp-26-Office (breadth = 31.189468, height = 12.0, init_Temp = 0, length = 20.458334 ) ;
Room sp-27-Office (breadth = 51.022802, height = 12.0, init_Temp = 0, length = 13.958334 ) ;
Room sp-28-Office (breadth = 64.522802, height = 12.0, init_Temp = 0, length = 13.958334 ) ;
Room sp-29-Office (breadth = 83.522802, height = 12.0, init_Temp = 0, length = 13.958334 ) ;
Room sp-30-Stairwell (breadth = 97.022802, height = 12.0, init_Temp = 0, length = 15.458334 ) ;
Room sp-31-Conference_Room (breadth = 117.397802, height = 12.0, init_Temp = 0, length = 15.458334 ) ;
Room sp-32-Office (breadth = 101.397802, height = 12.0, init_Temp = 0, length = 15.583334 ) ;
Room sp-33-Office (breadth = 85.522802, height = 12.0, init_Temp = 0, length = 15.458334 ) ;

Partition_EX su-1 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 12.000000, k = 100, length = 18.291667, thick = 0.3) ;
Partition_EX su-2 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 8.500000, thick = 0.3) ;
Partition_EX su-3 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.000000, thick = 0.3) ;
Partition_EX su-4 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.000000, thick = 0.3) ;
Partition_EX su-5 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 8.500000, thick = 0.3) ;
Partition_EX su-6 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-7 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.041512, thick = 0.3) ;
Partition_EX su-8 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-9 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.041509, thick = 0.3) ;
Partition_EX su-10 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-11 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-12 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-13 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-14 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.041509, thick = 0.3) ;
Partition_EX su-15 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 2.041512, thick = 0.3) ;
Partition_EX su-16 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-17 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-18 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-19 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-20 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-21 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-22 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-23 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-24 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-25 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-27 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 12.000000, k = 100, length = 6.208333, thick = 0.3) ;
Partition_EX su-28 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 4.666667, thick = 0.3) ;
Partition_EX su-55 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 13.000000, k = 100, length = 18.296875, thick = 0.3) ;
Partition_EX su-56 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 8.500000, thick = 0.3) ;
Partition_EX su-57 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.000000, thick = 0.3) ;
Partition_EX su-58 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.000000, thick = 0.3) ;
Partition_EX su-59 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 8.505208, thick = 0.3) ;
Partition_EX su-60 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-61 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.041512, thick = 0.3) ;
Partition_EX su-62 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-63 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.041509, thick = 0.3) ;
Partition_EX su-64 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-65 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-66 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-67 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-68 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.041509, thick = 0.3) ;
Partition_EX su-69 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 2.041512, thick = 0.3) ;
Partition_EX su-70 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-71 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-72 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-73 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-74 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-75 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-76 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-77 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.041511, thick = 0.3) ;
Partition_EX su-78 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-79 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 2.041510, thick = 0.3) ;
Partition_EX su-80 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 13.000000, k = 100, length = 6.208333, thick = 0.3) ;
Partition_EX su-101 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 12.000000, k = 100, length = 15.500000, thick = 0.3) ;
Partition_EX su-102 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ;
Partition_EX su-107 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ;
Partition_EX su-111 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ;
Partition_EX su-112 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 15.500000, thick = 0.3) ;
Partition_EX su-116 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 13.000000, k = 100, length = 15.494792, thick = 0.3) ;
Partition_EX su-117 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 14.000000, thick = 0.3) ;
Partition_EX su-120 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 20.000000, thick = 0.3) ;
Partition_EX su-123 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 14.000000, thick = 0.3) ;
Partition_EX su-124 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 15.494792, thick = 0.3) ;
Partition_EX su-126 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 12.000000, k = 100, length = 14.708333, thick = 0.3) ;
Partition_EX su-128 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 6.208333, thick = 0.3) ;
Partition_EX su-132 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 12.000000, k = 100, length = 14.500000, thick = 0.3) ;
Partition_EX su-137 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 12.000000, k = 100, length = 20.000000, thick = 0.3) ;
Partition_EX su-138 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 12.000000, k = 100, length = 11.799479, thick = 0.3) ;
Partition_EX su-144 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 12.000000, k = 100, length = 18.200521, thick = 0.3) ;
Partition_EX su-149 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 12.000000, k = 100, length = 15.500000, thick = 0.3) ;
Partition_EX su-154 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 12.000000, k = 100, length = 19.000000, thick = 0.3) ;
Partition_EX su-158 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 12.000000, k = 100, length = 20.000000, thick = 0.3) ;
Partition_EX su-163 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 12.000000, k = 100, length = 15.500000, thick = 0.3) ;
Partition_EX su-164 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ;
Partition_EX su-168 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ;
Partition_EX su-172 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ;
Partition_EX su-173 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 12.000000, k = 100, length = 15.500000, thick = 0.3) ;
Partition_EX su-179 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 12.000000, k = 100, length = 17.000000, thick = 0.3) ;
Partition_EX su-184 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 12.000000, k = 100, length = 4.666667, thick = 0.3) ;
Partition_EX su-188 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 13.000000, k = 100, length = 17.000000, thick = 0.3) ;
Partition_EX su-192 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 13.000000, k = 100, length = 4.666667, thick = 0.3) ;
Partition_EX su-194 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 13.000000, k = 100, length = 28.208333, thick = 0.3) ;
Partition_EX su-196 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 6.208333, thick = 0.3) ;
Partition_EX su-197 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 4.666667, thick = 0.3) ;
Partition_EX su-199 (az = Buildings.Types.Azimuth.None, h = 10.0, height = 13.000000, k = 100, length = 21.000000, thick = 0.3) ;
Partition_EX su-200 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 13.000000, k = 100, length = 18.666667, thick = 0.3) ;
Partition_EX su-203 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 13.000000, k = 100, length = 13.333333, thick = 0.3) ;
Partition_EX su-206 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 13.000000, k = 100, length = 13.500000, thick = 0.3) ;
Partition_EX su-209 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 13.000000, k = 100, length = 19.000000, thick = 0.3) ;
Partition_EX su-212 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 13.000000, k = 100, length = 15.000000, thick = 0.3) ;
Partition_EX su-215 (az = Buildings.Types.Azimuth.E, h = 10.0, height = 13.000000, k = 100, length = 20.500000, thick = 0.3) ;
Partition_EX su-216 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 16.000000, thick = 0.3) ;
Partition_EX su-219 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 16.000000, thick = 0.3) ;
Partition_EX su-222 (az = Buildings.Types.Azimuth.S, h = 10.0, height = 13.000000, k = 100, length = 16.000000, thick = 0.3) ;
Partition_EX su-223 (az = Buildings.Types.Azimuth.W, h = 10.0, height = 13.000000, k = 100, length = 15.500000, thick = 0.3) ;

Partition_IN su-30 ( h = 5.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ; 
Partition_IN su-31 ( h = 5.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ; 
Partition_IN su-32 ( h = 5.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ; 
Partition_IN su-33 ( h = 5.0, height = 11.950980, k = 100, length = 8.500000, thick = 0.3) ; 
Partition_IN su-34 ( h = 5.0, height = 12.000000, k = 100, length = 14.500000, thick = 0.3) ; 
Partition_IN su-35 ( h = 5.0, height = 12.000000, k = 100, length = 5.500000, thick = 0.3) ; 
Partition_IN su-36 ( h = 5.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ; 
Partition_IN su-37 ( h = 5.0, height = 12.000000, k = 100, length = 15.500000, thick = 0.3) ; 
Partition_IN su-38 ( h = 5.0, height = 12.000000, k = 100, length = 19.000000, thick = 0.3) ; 
Partition_IN su-39 ( h = 5.0, height = 12.000000, k = 100, length = 15.000000, thick = 0.3) ; 
Partition_IN su-40 ( h = 5.0, height = 12.000000, k = 100, length = 4.000000, thick = 0.3) ; 
Partition_IN su-41 ( h = 5.0, height = 12.000000, k = 100, length = 5.000000, thick = 0.3) ; 
Partition_IN su-42 ( h = 5.0, height = 12.000000, k = 100, length = 5.500000, thick = 0.3) ; 
Partition_IN su-43 ( h = 5.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ; 
Partition_IN su-44 ( h = 5.0, height = 12.000000, k = 100, length = 16.000000, thick = 0.3) ; 
Partition_IN su-45 ( h = 5.0, height = 12.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-46 ( h = 5.0, height = 12.000000, k = 100, length = 17.000000, thick = 0.3) ; 
Partition_IN su-47 ( h = 5.0, height = 12.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-48 ( h = 5.0, height = 12.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-49 ( h = 5.0, height = 12.000000, k = 100, length = 10.000000, thick = 0.3) ; 
Partition_IN su-50 ( h = 5.0, height = 11.921875, k = 100, length = 5.333333, thick = 0.3) ; 
Partition_IN su-82 ( h = 5.0, height = 13.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-83 ( h = 5.0, height = 13.000000, k = 100, length = 20.000000, thick = 0.3) ; 
Partition_IN su-84 ( h = 5.0, height = 13.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-85 ( h = 5.0, height = 13.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-86 ( h = 5.0, height = 13.000000, k = 100, length = 17.000000, thick = 0.3) ; 
Partition_IN su-87 ( h = 5.0, height = 13.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-88 ( h = 5.0, height = 13.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-89 ( h = 5.0, height = 13.000000, k = 100, length = 10.000000, thick = 0.3) ; 
Partition_IN su-90 ( h = 5.0, height = 13.000000, k = 100, length = 5.333333, thick = 0.3) ; 
Partition_IN su-91 ( h = 5.0, height = 13.000000, k = 100, length = 22.000000, thick = 0.3) ; 
Partition_IN su-92 ( h = 5.0, height = 13.000000, k = 100, length = 6.500000, thick = 0.3) ; 
Partition_IN su-93 ( h = 5.0, height = 13.000000, k = 100, length = 13.333333, thick = 0.3) ; 
Partition_IN su-94 ( h = 5.0, height = 13.000000, k = 100, length = 13.500000, thick = 0.3) ; 
Partition_IN su-95 ( h = 5.0, height = 13.000000, k = 100, length = 19.000000, thick = 0.3) ; 
Partition_IN su-96 ( h = 5.0, height = 13.000000, k = 100, length = 1.500000, thick = 0.3) ; 
Partition_IN su-97 ( h = 5.0, height = 13.000000, k = 100, length = 15.000000, thick = 0.3) ; 
Partition_IN su-98 ( h = 5.0, height = 13.000000, k = 100, length = 5.000000, thick = 0.3) ; 
Partition_IN su-99 ( h = 5.0, height = 13.000000, k = 100, length = 16.000000, thick = 0.3) ; 
Partition_IN su-100 ( h = 5.0, height = 13.000000, k = 100, length = 16.000000, thick = 0.3) ; 
Partition_IN su-104 ( h = 5.0, height = 12.000000, k = 100, length = 15.500000, thick = 0.3) ; 
Partition_IN su-109 ( h = 5.0, height = 12.000000, k = 100, length = 15.500000, thick = 0.3) ; 
Partition_IN su-119 ( h = 5.0, height = 13.000000, k = 100, length = 15.494792, thick = 0.3) ; 
Partition_IN su-122 ( h = 5.0, height = 13.000000, k = 100, length = 15.494792, thick = 0.3) ; 
Partition_IN su-129 ( h = 5.0, height = 12.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-130 ( h = 5.0, height = 12.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-134 ( h = 5.0, height = 12.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-140 ( h = 5.0, height = 12.000000, k = 100, length = 12.708333, thick = 0.3) ; 
Partition_IN su-141 ( h = 5.0, height = 12.000000, k = 100, length = 2.200521, thick = 0.3) ; 
Partition_IN su-142 ( h = 5.0, height = 12.000000, k = 100, length = 1.791667, thick = 0.3) ; 
Partition_IN su-146 ( h = 5.0, height = 12.000000, k = 100, length = 14.500000, thick = 0.3) ; 
Partition_IN su-151 ( h = 5.0, height = 12.000000, k = 100, length = 14.500000, thick = 0.3) ; 
Partition_IN su-156 ( h = 5.0, height = 12.000000, k = 100, length = 14.500000, thick = 0.3) ; 
Partition_IN su-160 ( h = 5.0, height = 12.000000, k = 100, length = 10.500000, thick = 0.3) ; 
Partition_IN su-166 ( h = 5.0, height = 12.000000, k = 100, length = 15.500000, thick = 0.3) ; 
Partition_IN su-170 ( h = 5.0, height = 12.000000, k = 100, length = 15.500000, thick = 0.3) ; 
Partition_IN su-177 ( h = 5.0, height = 12.000000, k = 100, length = 17.000000, thick = 0.3) ; 
Partition_IN su-181 ( h = 5.0, height = 12.000000, k = 100, length = 17.000000, thick = 0.3) ; 
Partition_IN su-187 ( h = 5.0, height = 13.000000, k = 100, length = 17.000000, thick = 0.3) ; 
Partition_IN su-190 ( h = 5.0, height = 13.000000, k = 100, length = 17.000000, thick = 0.3) ; 
Partition_IN su-191 ( h = 5.0, height = 13.000000, k = 100, length = 14.000000, thick = 0.3) ; 
Partition_IN su-198 ( h = 5.0, height = 13.000000, k = 100, length = 18.666667, thick = 0.3) ; 
Partition_IN su-202 ( h = 5.0, height = 13.000000, k = 100, length = 14.500000, thick = 0.3) ; 
Partition_IN su-205 ( h = 5.0, height = 13.000000, k = 100, length = 14.500000, thick = 0.3) ; 
Partition_IN su-208 ( h = 5.0, height = 13.000000, k = 100, length = 14.500000, thick = 0.3) ; 
Partition_IN su-211 ( h = 5.0, height = 13.000000, k = 100, length = 14.500000, thick = 0.3) ; 
Partition_IN su-214 ( h = 5.0, height = 13.000000, k = 100, length = 16.000000, thick = 0.3) ; 
Partition_IN su-218 ( h = 5.0, height = 13.000000, k = 100, length = 15.500000, thick = 0.3) ; 
Partition_IN su-221 ( h = 5.0, height = 13.000000, k = 100, length = 15.500000, thick = 0.3) ; 

Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature0 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature1 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature2 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature3 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature4 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature5 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature6 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature7 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature8 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature9 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature10 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature11 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature12 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature13 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature14 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature15 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature16 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature17 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature18 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature19 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature20 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature21 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature22 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature23 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature24 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature25 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature26 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature27 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature28 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature29 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature30 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature31 ; 
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature  prescribedTemperature32 ; 

Modelica.Blocks.Interfaces.RealInput Wind_Speed ;
Modelica.Blocks.Interfaces.RealInput Wind_Direction ;
Modelica.Blocks.Interfaces.RealInput Outside_Temperature ;
Modelica.Thermal.HeatTransfer.Sources.PrescribedTemperature presc_Outside_Temp ; 

Modelica.Fluid.Interfaces.FluidPort_a in_R0(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R1(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R2(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R3(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R4(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R5(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R6(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R7(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R8(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R9(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R10(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R11(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R12(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R13(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R14(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R15(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R16(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R17(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R18(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R19(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R20(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R21(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R22(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R23(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R24(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R25(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R26(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R27(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R28(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R29(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R30(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R31(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_a in_R32(redeclare package Medium = Medium) ; 

Modelica.Fluid.Interfaces.FluidPort_b out_R0(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R1(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R2(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R3(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R4(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R5(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R6(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R7(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R8(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R9(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R10(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R11(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R12(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R13(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R14(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R15(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R16(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R17(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R18(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R19(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R20(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R21(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R22(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R23(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R24(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R25(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R26(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R27(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R28(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R29(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R30(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R31(redeclare package Medium = Medium) ; 
Modelica.Fluid.Interfaces.FluidPort_b out_R32(redeclare package Medium = Medium) ; 

//Multiplex197 mux1971 ;

equation

connect( sp-1-Open.R_temp , mux1971.u1[1] ) ;
connect( sp-2-Open.R_temp , mux1971.u2[1] ) ;
connect( sp-3-Office.R_temp , mux1971.u3[1] ) ;
connect( sp-4-Office.R_temp , mux1971.u4[1] ) ;
connect( sp-5-Office.R_temp , mux1971.u5[1] ) ;
connect( sp-6-Office.R_temp , mux1971.u6[1] ) ;
connect( sp-7-Office.R_temp , mux1971.u7[1] ) ;
connect( sp-8-Office.R_temp , mux1971.u8[1] ) ;
connect( sp-9-Office.R_temp , mux1971.u9[1] ) ;
connect( sp-10-Office.R_temp , mux1971.u10[1] ) ;
connect( sp-11-Office.R_temp , mux1971.u11[1] ) ;
connect( sp-12-Office.R_temp , mux1971.u12[1] ) ;
connect( sp-13-Office.R_temp , mux1971.u13[1] ) ;
connect( sp-14-Office.R_temp , mux1971.u14[1] ) ;
connect( sp-15-Stairwell.R_temp , mux1971.u15[1] ) ;
connect( sp-16-Office.R_temp , mux1971.u16[1] ) ;
connect( sp-17-Office.R_temp , mux1971.u17[1] ) ;
connect( sp-18-Office.R_temp , mux1971.u18[1] ) ;
connect( sp-19-Mens_Room.R_temp , mux1971.u19[1] ) ;
connect( sp-20-Ladies_Room.R_temp , mux1971.u20[1] ) ;
connect( sp-21-MechanicalElectrical.R_temp , mux1971.u21[1] ) ;
connect( sp-22-Mens_Room.R_temp , mux1971.u22[1] ) ;
connect( sp-23-Ladies_Room.R_temp , mux1971.u23[1] ) ;
connect( sp-24-MechanicalElectrical.R_temp , mux1971.u24[1] ) ;
connect( sp-25-Lounge.R_temp , mux1971.u25[1] ) ;
connect( sp-26-Office.R_temp , mux1971.u26[1] ) ;
connect( sp-27-Office.R_temp , mux1971.u27[1] ) ;
connect( sp-28-Office.R_temp , mux1971.u28[1] ) ;
connect( sp-29-Office.R_temp , mux1971.u29[1] ) ;
connect( sp-30-Stairwell.R_temp , mux1971.u30[1] ) ;
connect( sp-31-Conference_Room.R_temp , mux1971.u31[1] ) ;
connect( sp-32-Office.R_temp , mux1971.u32[1] ) ;
connect( sp-33-Office.R_temp , mux1971.u33[1] ) ;

connect( su-1.TW , mux1971.u34[1] ) ;
connect( su-2.TW , mux1971.u35[1] ) ;
connect( su-3.TW , mux1971.u36[1] ) ;
connect( su-4.TW , mux1971.u37[1] ) ;
connect( su-5.TW , mux1971.u38[1] ) ;
connect( su-6.TW , mux1971.u39[1] ) ;
connect( su-7.TW , mux1971.u40[1] ) ;
connect( su-8.TW , mux1971.u41[1] ) ;
connect( su-9.TW , mux1971.u42[1] ) ;
connect( su-10.TW , mux1971.u43[1] ) ;
connect( su-11.TW , mux1971.u44[1] ) ;
connect( su-12.TW , mux1971.u45[1] ) ;
connect( su-13.TW , mux1971.u46[1] ) ;
connect( su-14.TW , mux1971.u47[1] ) ;
connect( su-15.TW , mux1971.u48[1] ) ;
connect( su-16.TW , mux1971.u49[1] ) ;
connect( su-17.TW , mux1971.u50[1] ) ;
connect( su-18.TW , mux1971.u51[1] ) ;
connect( su-19.TW , mux1971.u52[1] ) ;
connect( su-20.TW , mux1971.u53[1] ) ;
connect( su-21.TW , mux1971.u54[1] ) ;
connect( su-22.TW , mux1971.u55[1] ) ;
connect( su-23.TW , mux1971.u56[1] ) ;
connect( su-24.TW , mux1971.u57[1] ) ;
connect( su-25.TW , mux1971.u58[1] ) ;
connect( su-27.TW , mux1971.u59[1] ) ;
connect( su-28.TW , mux1971.u60[1] ) ;
connect( su-55.TW , mux1971.u61[1] ) ;
connect( su-56.TW , mux1971.u62[1] ) ;
connect( su-57.TW , mux1971.u63[1] ) ;
connect( su-58.TW , mux1971.u64[1] ) ;
connect( su-59.TW , mux1971.u65[1] ) ;
connect( su-60.TW , mux1971.u66[1] ) ;
connect( su-61.TW , mux1971.u67[1] ) ;
connect( su-62.TW , mux1971.u68[1] ) ;
connect( su-63.TW , mux1971.u69[1] ) ;
connect( su-64.TW , mux1971.u70[1] ) ;
connect( su-65.TW , mux1971.u71[1] ) ;
connect( su-66.TW , mux1971.u72[1] ) ;
connect( su-67.TW , mux1971.u73[1] ) ;
connect( su-68.TW , mux1971.u74[1] ) ;
connect( su-69.TW , mux1971.u75[1] ) ;
connect( su-70.TW , mux1971.u76[1] ) ;
connect( su-71.TW , mux1971.u77[1] ) ;
connect( su-72.TW , mux1971.u78[1] ) ;
connect( su-73.TW , mux1971.u79[1] ) ;
connect( su-74.TW , mux1971.u80[1] ) ;
connect( su-75.TW , mux1971.u81[1] ) ;
connect( su-76.TW , mux1971.u82[1] ) ;
connect( su-77.TW , mux1971.u83[1] ) ;
connect( su-78.TW , mux1971.u84[1] ) ;
connect( su-79.TW , mux1971.u85[1] ) ;
connect( su-80.TW , mux1971.u86[1] ) ;
connect( su-101.TW , mux1971.u87[1] ) ;
connect( su-102.TW , mux1971.u88[1] ) ;
connect( su-107.TW , mux1971.u89[1] ) ;
connect( su-111.TW , mux1971.u90[1] ) ;
connect( su-112.TW , mux1971.u91[1] ) ;
connect( su-116.TW , mux1971.u92[1] ) ;
connect( su-117.TW , mux1971.u93[1] ) ;
connect( su-120.TW , mux1971.u94[1] ) ;
connect( su-123.TW , mux1971.u95[1] ) ;
connect( su-124.TW , mux1971.u96[1] ) ;
connect( su-126.TW , mux1971.u97[1] ) ;
connect( su-128.TW , mux1971.u98[1] ) ;
connect( su-132.TW , mux1971.u99[1] ) ;
connect( su-137.TW , mux1971.u100[1] ) ;
connect( su-138.TW , mux1971.u101[1] ) ;
connect( su-144.TW , mux1971.u102[1] ) ;
connect( su-149.TW , mux1971.u103[1] ) ;
connect( su-154.TW , mux1971.u104[1] ) ;
connect( su-158.TW , mux1971.u105[1] ) ;
connect( su-163.TW , mux1971.u106[1] ) ;
connect( su-164.TW , mux1971.u107[1] ) ;
connect( su-168.TW , mux1971.u108[1] ) ;
connect( su-172.TW , mux1971.u109[1] ) ;
connect( su-173.TW , mux1971.u110[1] ) ;
connect( su-179.TW , mux1971.u111[1] ) ;
connect( su-184.TW , mux1971.u112[1] ) ;
connect( su-188.TW , mux1971.u113[1] ) ;
connect( su-192.TW , mux1971.u114[1] ) ;
connect( su-194.TW , mux1971.u115[1] ) ;
connect( su-196.TW , mux1971.u116[1] ) ;
connect( su-197.TW , mux1971.u117[1] ) ;
connect( su-199.TW , mux1971.u118[1] ) ;
connect( su-200.TW , mux1971.u119[1] ) ;
connect( su-203.TW , mux1971.u120[1] ) ;
connect( su-206.TW , mux1971.u121[1] ) ;
connect( su-209.TW , mux1971.u122[1] ) ;
connect( su-212.TW , mux1971.u123[1] ) ;
connect( su-215.TW , mux1971.u124[1] ) ;
connect( su-216.TW , mux1971.u125[1] ) ;
connect( su-219.TW , mux1971.u126[1] ) ;
connect( su-222.TW , mux1971.u127[1] ) ;
connect( su-223.TW , mux1971.u128[1] ) ;

connect( su-30.TW , mux1971.u129[1] ) ;
connect( su-31.TW , mux1971.u130[1] ) ;
connect( su-32.TW , mux1971.u131[1] ) ;
connect( su-33.TW , mux1971.u132[1] ) ;
connect( su-34.TW , mux1971.u133[1] ) ;
connect( su-35.TW , mux1971.u134[1] ) ;
connect( su-36.TW , mux1971.u135[1] ) ;
connect( su-37.TW , mux1971.u136[1] ) ;
connect( su-38.TW , mux1971.u137[1] ) ;
connect( su-39.TW , mux1971.u138[1] ) ;
connect( su-40.TW , mux1971.u139[1] ) ;
connect( su-41.TW , mux1971.u140[1] ) ;
connect( su-42.TW , mux1971.u141[1] ) ;
connect( su-43.TW , mux1971.u142[1] ) ;
connect( su-44.TW , mux1971.u143[1] ) ;
connect( su-45.TW , mux1971.u144[1] ) ;
connect( su-46.TW , mux1971.u145[1] ) ;
connect( su-47.TW , mux1971.u146[1] ) ;
connect( su-48.TW , mux1971.u147[1] ) ;
connect( su-49.TW , mux1971.u148[1] ) ;
connect( su-50.TW , mux1971.u149[1] ) ;
connect( su-82.TW , mux1971.u150[1] ) ;
connect( su-83.TW , mux1971.u151[1] ) ;
connect( su-84.TW , mux1971.u152[1] ) ;
connect( su-85.TW , mux1971.u153[1] ) ;
connect( su-86.TW , mux1971.u154[1] ) ;
connect( su-87.TW , mux1971.u155[1] ) ;
connect( su-88.TW , mux1971.u156[1] ) ;
connect( su-89.TW , mux1971.u157[1] ) ;
connect( su-90.TW , mux1971.u158[1] ) ;
connect( su-91.TW , mux1971.u159[1] ) ;
connect( su-92.TW , mux1971.u160[1] ) ;
connect( su-93.TW , mux1971.u161[1] ) ;
connect( su-94.TW , mux1971.u162[1] ) ;
connect( su-95.TW , mux1971.u163[1] ) ;
connect( su-96.TW , mux1971.u164[1] ) ;
connect( su-97.TW , mux1971.u165[1] ) ;
connect( su-98.TW , mux1971.u166[1] ) ;
connect( su-99.TW , mux1971.u167[1] ) ;
connect( su-100.TW , mux1971.u168[1] ) ;
connect( su-104.TW , mux1971.u169[1] ) ;
connect( su-109.TW , mux1971.u170[1] ) ;
connect( su-119.TW , mux1971.u171[1] ) ;
connect( su-122.TW , mux1971.u172[1] ) ;
connect( su-129.TW , mux1971.u173[1] ) ;
connect( su-130.TW , mux1971.u174[1] ) ;
connect( su-134.TW , mux1971.u175[1] ) ;
connect( su-140.TW , mux1971.u176[1] ) ;
connect( su-141.TW , mux1971.u177[1] ) ;
connect( su-142.TW , mux1971.u178[1] ) ;
connect( su-146.TW , mux1971.u179[1] ) ;
connect( su-151.TW , mux1971.u180[1] ) ;
connect( su-156.TW , mux1971.u181[1] ) ;
connect( su-160.TW , mux1971.u182[1] ) ;
connect( su-166.TW , mux1971.u183[1] ) ;
connect( su-170.TW , mux1971.u184[1] ) ;
connect( su-177.TW , mux1971.u185[1] ) ;
connect( su-181.TW , mux1971.u186[1] ) ;
connect( su-187.TW , mux1971.u187[1] ) ;
connect( su-190.TW , mux1971.u188[1] ) ;
connect( su-191.TW , mux1971.u189[1] ) ;
connect( su-198.TW , mux1971.u190[1] ) ;
connect( su-202.TW , mux1971.u191[1] ) ;
connect( su-205.TW , mux1971.u192[1] ) ;
connect( su-208.TW , mux1971.u193[1] ) ;
connect( su-211.TW , mux1971.u194[1] ) ;
connect( su-214.TW , mux1971.u195[1] ) ;
connect( su-218.TW , mux1971.u196[1] ) ;
connect( su-221.TW , mux1971.u197[1] ) ;

connect(out_R0, sp-1-Open.out_flow) ;
connect(out_R1, sp-2-Open.out_flow) ;
connect(out_R2, sp-3-Office.out_flow) ;
connect(out_R3, sp-4-Office.out_flow) ;
connect(out_R4, sp-5-Office.out_flow) ;
connect(out_R5, sp-6-Office.out_flow) ;
connect(out_R6, sp-7-Office.out_flow) ;
connect(out_R7, sp-8-Office.out_flow) ;
connect(out_R8, sp-9-Office.out_flow) ;
connect(out_R9, sp-10-Office.out_flow) ;
connect(out_R10, sp-11-Office.out_flow) ;
connect(out_R11, sp-12-Office.out_flow) ;
connect(out_R12, sp-13-Office.out_flow) ;
connect(out_R13, sp-14-Office.out_flow) ;
connect(out_R14, sp-15-Stairwell.out_flow) ;
connect(out_R15, sp-16-Office.out_flow) ;
connect(out_R16, sp-17-Office.out_flow) ;
connect(out_R17, sp-18-Office.out_flow) ;
connect(out_R18, sp-19-Mens_Room.out_flow) ;
connect(out_R19, sp-20-Ladies_Room.out_flow) ;
connect(out_R20, sp-21-MechanicalElectrical.out_flow) ;
connect(out_R21, sp-22-Mens_Room.out_flow) ;
connect(out_R22, sp-23-Ladies_Room.out_flow) ;
connect(out_R23, sp-24-MechanicalElectrical.out_flow) ;
connect(out_R24, sp-25-Lounge.out_flow) ;
connect(out_R25, sp-26-Office.out_flow) ;
connect(out_R26, sp-27-Office.out_flow) ;
connect(out_R27, sp-28-Office.out_flow) ;
connect(out_R28, sp-29-Office.out_flow) ;
connect(out_R29, sp-30-Stairwell.out_flow) ;
connect(out_R30, sp-31-Conference_Room.out_flow) ;
connect(out_R31, sp-32-Office.out_flow) ;
connect(out_R32, sp-33-Office.out_flow) ;

connect(in_R0, sp-1-Open.in_flow) ;
connect(in_R1, sp-2-Open.in_flow) ;
connect(in_R2, sp-3-Office.in_flow) ;
connect(in_R3, sp-4-Office.in_flow) ;
connect(in_R4, sp-5-Office.in_flow) ;
connect(in_R5, sp-6-Office.in_flow) ;
connect(in_R6, sp-7-Office.in_flow) ;
connect(in_R7, sp-8-Office.in_flow) ;
connect(in_R8, sp-9-Office.in_flow) ;
connect(in_R9, sp-10-Office.in_flow) ;
connect(in_R10, sp-11-Office.in_flow) ;
connect(in_R11, sp-12-Office.in_flow) ;
connect(in_R12, sp-13-Office.in_flow) ;
connect(in_R13, sp-14-Office.in_flow) ;
connect(in_R14, sp-15-Stairwell.in_flow) ;
connect(in_R15, sp-16-Office.in_flow) ;
connect(in_R16, sp-17-Office.in_flow) ;
connect(in_R17, sp-18-Office.in_flow) ;
connect(in_R18, sp-19-Mens_Room.in_flow) ;
connect(in_R19, sp-20-Ladies_Room.in_flow) ;
connect(in_R20, sp-21-MechanicalElectrical.in_flow) ;
connect(in_R21, sp-22-Mens_Room.in_flow) ;
connect(in_R22, sp-23-Ladies_Room.in_flow) ;
connect(in_R23, sp-24-MechanicalElectrical.in_flow) ;
connect(in_R24, sp-25-Lounge.in_flow) ;
connect(in_R25, sp-26-Office.in_flow) ;
connect(in_R26, sp-27-Office.in_flow) ;
connect(in_R27, sp-28-Office.in_flow) ;
connect(in_R28, sp-29-Office.in_flow) ;
connect(in_R29, sp-30-Stairwell.in_flow) ;
connect(in_R30, sp-31-Conference_Room.in_flow) ;
connect(in_R31, sp-32-Office.in_flow) ;
connect(in_R32, sp-33-Office.in_flow) ;

connect(Outside_Temperature, presc_Outside_Temp.T) ;

  connect(presc_Outside_Temp.port, su-1.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-2.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-3.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-4.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-5.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-6.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-7.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-8.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-9.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-10.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-11.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-12.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-13.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-14.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-15.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-16.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-17.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-18.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-19.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-20.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-21.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-22.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-23.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-24.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-25.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-27.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-28.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-55.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-56.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-57.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-58.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-59.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-60.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-61.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-62.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-63.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-64.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-65.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-66.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-67.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-68.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-69.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-70.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-71.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-72.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-73.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-74.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-75.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-76.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-77.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-78.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-79.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-80.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-101.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-102.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-107.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-111.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-112.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-116.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-117.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-120.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-123.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-124.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-126.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-128.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-132.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-137.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-138.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-144.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-149.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-154.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-158.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-163.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-164.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-168.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-172.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-173.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-179.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-184.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-188.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-192.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-194.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-196.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-197.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-199.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-200.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-203.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-206.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-209.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-212.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-215.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-216.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-219.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-222.OutSide_Temp_a) ;
  connect(presc_Outside_Temp.port, su-223.OutSide_Temp_a) ;

  connect(Wind_Direction, su-1.W_Direction) ;
  connect(Wind_Direction, su-2.W_Direction) ;
  connect(Wind_Direction, su-3.W_Direction) ;
  connect(Wind_Direction, su-4.W_Direction) ;
  connect(Wind_Direction, su-5.W_Direction) ;
  connect(Wind_Direction, su-6.W_Direction) ;
  connect(Wind_Direction, su-7.W_Direction) ;
  connect(Wind_Direction, su-8.W_Direction) ;
  connect(Wind_Direction, su-9.W_Direction) ;
  connect(Wind_Direction, su-10.W_Direction) ;
  connect(Wind_Direction, su-11.W_Direction) ;
  connect(Wind_Direction, su-12.W_Direction) ;
  connect(Wind_Direction, su-13.W_Direction) ;
  connect(Wind_Direction, su-14.W_Direction) ;
  connect(Wind_Direction, su-15.W_Direction) ;
  connect(Wind_Direction, su-16.W_Direction) ;
  connect(Wind_Direction, su-17.W_Direction) ;
  connect(Wind_Direction, su-18.W_Direction) ;
  connect(Wind_Direction, su-19.W_Direction) ;
  connect(Wind_Direction, su-20.W_Direction) ;
  connect(Wind_Direction, su-21.W_Direction) ;
  connect(Wind_Direction, su-22.W_Direction) ;
  connect(Wind_Direction, su-23.W_Direction) ;
  connect(Wind_Direction, su-24.W_Direction) ;
  connect(Wind_Direction, su-25.W_Direction) ;
  connect(Wind_Direction, su-27.W_Direction) ;
  connect(Wind_Direction, su-28.W_Direction) ;
  connect(Wind_Direction, su-55.W_Direction) ;
  connect(Wind_Direction, su-56.W_Direction) ;
  connect(Wind_Direction, su-57.W_Direction) ;
  connect(Wind_Direction, su-58.W_Direction) ;
  connect(Wind_Direction, su-59.W_Direction) ;
  connect(Wind_Direction, su-60.W_Direction) ;
  connect(Wind_Direction, su-61.W_Direction) ;
  connect(Wind_Direction, su-62.W_Direction) ;
  connect(Wind_Direction, su-63.W_Direction) ;
  connect(Wind_Direction, su-64.W_Direction) ;
  connect(Wind_Direction, su-65.W_Direction) ;
  connect(Wind_Direction, su-66.W_Direction) ;
  connect(Wind_Direction, su-67.W_Direction) ;
  connect(Wind_Direction, su-68.W_Direction) ;
  connect(Wind_Direction, su-69.W_Direction) ;
  connect(Wind_Direction, su-70.W_Direction) ;
  connect(Wind_Direction, su-71.W_Direction) ;
  connect(Wind_Direction, su-72.W_Direction) ;
  connect(Wind_Direction, su-73.W_Direction) ;
  connect(Wind_Direction, su-74.W_Direction) ;
  connect(Wind_Direction, su-75.W_Direction) ;
  connect(Wind_Direction, su-76.W_Direction) ;
  connect(Wind_Direction, su-77.W_Direction) ;
  connect(Wind_Direction, su-78.W_Direction) ;
  connect(Wind_Direction, su-79.W_Direction) ;
  connect(Wind_Direction, su-80.W_Direction) ;
  connect(Wind_Direction, su-101.W_Direction) ;
  connect(Wind_Direction, su-102.W_Direction) ;
  connect(Wind_Direction, su-107.W_Direction) ;
  connect(Wind_Direction, su-111.W_Direction) ;
  connect(Wind_Direction, su-112.W_Direction) ;
  connect(Wind_Direction, su-116.W_Direction) ;
  connect(Wind_Direction, su-117.W_Direction) ;
  connect(Wind_Direction, su-120.W_Direction) ;
  connect(Wind_Direction, su-123.W_Direction) ;
  connect(Wind_Direction, su-124.W_Direction) ;
  connect(Wind_Direction, su-126.W_Direction) ;
  connect(Wind_Direction, su-128.W_Direction) ;
  connect(Wind_Direction, su-132.W_Direction) ;
  connect(Wind_Direction, su-137.W_Direction) ;
  connect(Wind_Direction, su-138.W_Direction) ;
  connect(Wind_Direction, su-144.W_Direction) ;
  connect(Wind_Direction, su-149.W_Direction) ;
  connect(Wind_Direction, su-154.W_Direction) ;
  connect(Wind_Direction, su-158.W_Direction) ;
  connect(Wind_Direction, su-163.W_Direction) ;
  connect(Wind_Direction, su-164.W_Direction) ;
  connect(Wind_Direction, su-168.W_Direction) ;
  connect(Wind_Direction, su-172.W_Direction) ;
  connect(Wind_Direction, su-173.W_Direction) ;
  connect(Wind_Direction, su-179.W_Direction) ;
  connect(Wind_Direction, su-184.W_Direction) ;
  connect(Wind_Direction, su-188.W_Direction) ;
  connect(Wind_Direction, su-192.W_Direction) ;
  connect(Wind_Direction, su-194.W_Direction) ;
  connect(Wind_Direction, su-196.W_Direction) ;
  connect(Wind_Direction, su-197.W_Direction) ;
  connect(Wind_Direction, su-199.W_Direction) ;
  connect(Wind_Direction, su-200.W_Direction) ;
  connect(Wind_Direction, su-203.W_Direction) ;
  connect(Wind_Direction, su-206.W_Direction) ;
  connect(Wind_Direction, su-209.W_Direction) ;
  connect(Wind_Direction, su-212.W_Direction) ;
  connect(Wind_Direction, su-215.W_Direction) ;
  connect(Wind_Direction, su-216.W_Direction) ;
  connect(Wind_Direction, su-219.W_Direction) ;
  connect(Wind_Direction, su-222.W_Direction) ;
  connect(Wind_Direction, su-223.W_Direction) ;

  connect(Wind_Speed, su-1.W_Speed) ;
  connect(Wind_Speed, su-2.W_Speed) ;
  connect(Wind_Speed, su-3.W_Speed) ;
  connect(Wind_Speed, su-4.W_Speed) ;
  connect(Wind_Speed, su-5.W_Speed) ;
  connect(Wind_Speed, su-6.W_Speed) ;
  connect(Wind_Speed, su-7.W_Speed) ;
  connect(Wind_Speed, su-8.W_Speed) ;
  connect(Wind_Speed, su-9.W_Speed) ;
  connect(Wind_Speed, su-10.W_Speed) ;
  connect(Wind_Speed, su-11.W_Speed) ;
  connect(Wind_Speed, su-12.W_Speed) ;
  connect(Wind_Speed, su-13.W_Speed) ;
  connect(Wind_Speed, su-14.W_Speed) ;
  connect(Wind_Speed, su-15.W_Speed) ;
  connect(Wind_Speed, su-16.W_Speed) ;
  connect(Wind_Speed, su-17.W_Speed) ;
  connect(Wind_Speed, su-18.W_Speed) ;
  connect(Wind_Speed, su-19.W_Speed) ;
  connect(Wind_Speed, su-20.W_Speed) ;
  connect(Wind_Speed, su-21.W_Speed) ;
  connect(Wind_Speed, su-22.W_Speed) ;
  connect(Wind_Speed, su-23.W_Speed) ;
  connect(Wind_Speed, su-24.W_Speed) ;
  connect(Wind_Speed, su-25.W_Speed) ;
  connect(Wind_Speed, su-27.W_Speed) ;
  connect(Wind_Speed, su-28.W_Speed) ;
  connect(Wind_Speed, su-55.W_Speed) ;
  connect(Wind_Speed, su-56.W_Speed) ;
  connect(Wind_Speed, su-57.W_Speed) ;
  connect(Wind_Speed, su-58.W_Speed) ;
  connect(Wind_Speed, su-59.W_Speed) ;
  connect(Wind_Speed, su-60.W_Speed) ;
  connect(Wind_Speed, su-61.W_Speed) ;
  connect(Wind_Speed, su-62.W_Speed) ;
  connect(Wind_Speed, su-63.W_Speed) ;
  connect(Wind_Speed, su-64.W_Speed) ;
  connect(Wind_Speed, su-65.W_Speed) ;
  connect(Wind_Speed, su-66.W_Speed) ;
  connect(Wind_Speed, su-67.W_Speed) ;
  connect(Wind_Speed, su-68.W_Speed) ;
  connect(Wind_Speed, su-69.W_Speed) ;
  connect(Wind_Speed, su-70.W_Speed) ;
  connect(Wind_Speed, su-71.W_Speed) ;
  connect(Wind_Speed, su-72.W_Speed) ;
  connect(Wind_Speed, su-73.W_Speed) ;
  connect(Wind_Speed, su-74.W_Speed) ;
  connect(Wind_Speed, su-75.W_Speed) ;
  connect(Wind_Speed, su-76.W_Speed) ;
  connect(Wind_Speed, su-77.W_Speed) ;
  connect(Wind_Speed, su-78.W_Speed) ;
  connect(Wind_Speed, su-79.W_Speed) ;
  connect(Wind_Speed, su-80.W_Speed) ;
  connect(Wind_Speed, su-101.W_Speed) ;
  connect(Wind_Speed, su-102.W_Speed) ;
  connect(Wind_Speed, su-107.W_Speed) ;
  connect(Wind_Speed, su-111.W_Speed) ;
  connect(Wind_Speed, su-112.W_Speed) ;
  connect(Wind_Speed, su-116.W_Speed) ;
  connect(Wind_Speed, su-117.W_Speed) ;
  connect(Wind_Speed, su-120.W_Speed) ;
  connect(Wind_Speed, su-123.W_Speed) ;
  connect(Wind_Speed, su-124.W_Speed) ;
  connect(Wind_Speed, su-126.W_Speed) ;
  connect(Wind_Speed, su-128.W_Speed) ;
  connect(Wind_Speed, su-132.W_Speed) ;
  connect(Wind_Speed, su-137.W_Speed) ;
  connect(Wind_Speed, su-138.W_Speed) ;
  connect(Wind_Speed, su-144.W_Speed) ;
  connect(Wind_Speed, su-149.W_Speed) ;
  connect(Wind_Speed, su-154.W_Speed) ;
  connect(Wind_Speed, su-158.W_Speed) ;
  connect(Wind_Speed, su-163.W_Speed) ;
  connect(Wind_Speed, su-164.W_Speed) ;
  connect(Wind_Speed, su-168.W_Speed) ;
  connect(Wind_Speed, su-172.W_Speed) ;
  connect(Wind_Speed, su-173.W_Speed) ;
  connect(Wind_Speed, su-179.W_Speed) ;
  connect(Wind_Speed, su-184.W_Speed) ;
  connect(Wind_Speed, su-188.W_Speed) ;
  connect(Wind_Speed, su-192.W_Speed) ;
  connect(Wind_Speed, su-194.W_Speed) ;
  connect(Wind_Speed, su-196.W_Speed) ;
  connect(Wind_Speed, su-197.W_Speed) ;
  connect(Wind_Speed, su-199.W_Speed) ;
  connect(Wind_Speed, su-200.W_Speed) ;
  connect(Wind_Speed, su-203.W_Speed) ;
  connect(Wind_Speed, su-206.W_Speed) ;
  connect(Wind_Speed, su-209.W_Speed) ;
  connect(Wind_Speed, su-212.W_Speed) ;
  connect(Wind_Speed, su-215.W_Speed) ;
  connect(Wind_Speed, su-216.W_Speed) ;
  connect(Wind_Speed, su-219.W_Speed) ;
  connect(Wind_Speed, su-222.W_Speed) ;
  connect(Wind_Speed, su-223.W_Speed) ;

connect( sp-1-Open.R_temp, prescribedTemperature0.T) ;
connect( sp-2-Open.R_temp, prescribedTemperature1.T) ;
connect( sp-3-Office.R_temp, prescribedTemperature2.T) ;
connect( sp-4-Office.R_temp, prescribedTemperature3.T) ;
connect( sp-5-Office.R_temp, prescribedTemperature4.T) ;
connect( sp-6-Office.R_temp, prescribedTemperature5.T) ;
connect( sp-7-Office.R_temp, prescribedTemperature6.T) ;
connect( sp-8-Office.R_temp, prescribedTemperature7.T) ;
connect( sp-9-Office.R_temp, prescribedTemperature8.T) ;
connect( sp-10-Office.R_temp, prescribedTemperature9.T) ;
connect( sp-11-Office.R_temp, prescribedTemperature10.T) ;
connect( sp-12-Office.R_temp, prescribedTemperature11.T) ;
connect( sp-13-Office.R_temp, prescribedTemperature12.T) ;
connect( sp-14-Office.R_temp, prescribedTemperature13.T) ;
connect( sp-15-Stairwell.R_temp, prescribedTemperature14.T) ;
connect( sp-16-Office.R_temp, prescribedTemperature15.T) ;
connect( sp-17-Office.R_temp, prescribedTemperature16.T) ;
connect( sp-18-Office.R_temp, prescribedTemperature17.T) ;
connect( sp-19-Mens_Room.R_temp, prescribedTemperature18.T) ;
connect( sp-20-Ladies_Room.R_temp, prescribedTemperature19.T) ;
connect( sp-21-MechanicalElectrical.R_temp, prescribedTemperature20.T) ;
connect( sp-22-Mens_Room.R_temp, prescribedTemperature21.T) ;
connect( sp-23-Ladies_Room.R_temp, prescribedTemperature22.T) ;
connect( sp-24-MechanicalElectrical.R_temp, prescribedTemperature23.T) ;
connect( sp-25-Lounge.R_temp, prescribedTemperature24.T) ;
connect( sp-26-Office.R_temp, prescribedTemperature25.T) ;
connect( sp-27-Office.R_temp, prescribedTemperature26.T) ;
connect( sp-28-Office.R_temp, prescribedTemperature27.T) ;
connect( sp-29-Office.R_temp, prescribedTemperature28.T) ;
connect( sp-30-Stairwell.R_temp, prescribedTemperature29.T) ;
connect( sp-31-Conference_Room.R_temp, prescribedTemperature30.T) ;
connect( sp-32-Office.R_temp, prescribedTemperature31.T) ;
connect( sp-33-Office.R_temp, prescribedTemperature32.T) ;

connect(prescribedTemperature0.port.T, su-1.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-2.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-3.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-4.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-5.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-6.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-7.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-8.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-9.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-10.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-11.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-12.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-13.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-14.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-15.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-16.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-17.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-18.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-19.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-20.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-21.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-22.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-23.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-24.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-25.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-27.port_b.T ) ; 
connect(prescribedTemperature0.port.T, su-28.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-55.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-56.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-57.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-58.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-59.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-60.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-61.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-62.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-63.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-64.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-65.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-66.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-67.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-68.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-69.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-70.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-71.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-72.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-73.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-74.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-75.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-76.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-77.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-78.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-79.port_b.T ) ; 
connect(prescribedTemperature1.port.T, su-80.port_b.T ) ; 
connect(prescribedTemperature2.port.T, su-101.port_b.T ) ; 
connect(prescribedTemperature2.port.T, su-102.port_b.T ) ; 
connect(prescribedTemperature3.port.T, su-107.port_b.T ) ; 
connect(prescribedTemperature4.port.T, su-111.port_b.T ) ; 
connect(prescribedTemperature4.port.T, su-112.port_b.T ) ; 
connect(prescribedTemperature5.port.T, su-116.port_b.T ) ; 
connect(prescribedTemperature5.port.T, su-117.port_b.T ) ; 
connect(prescribedTemperature6.port.T, su-120.port_b.T ) ; 
connect(prescribedTemperature7.port.T, su-123.port_b.T ) ; 
connect(prescribedTemperature7.port.T, su-124.port_b.T ) ; 
connect(prescribedTemperature8.port.T, su-126.port_b.T ) ; 
connect(prescribedTemperature8.port.T, su-128.port_b.T ) ; 
connect(prescribedTemperature9.port.T, su-132.port_b.T ) ; 
connect(prescribedTemperature10.port.T, su-137.port_b.T ) ; 
connect(prescribedTemperature10.port.T, su-138.port_b.T ) ; 
connect(prescribedTemperature11.port.T, su-144.port_b.T ) ; 
connect(prescribedTemperature12.port.T, su-149.port_b.T ) ; 
connect(prescribedTemperature13.port.T, su-154.port_b.T ) ; 
connect(prescribedTemperature14.port.T, su-158.port_b.T ) ; 
connect(prescribedTemperature15.port.T, su-163.port_b.T ) ; 
connect(prescribedTemperature15.port.T, su-164.port_b.T ) ; 
connect(prescribedTemperature16.port.T, su-168.port_b.T ) ; 
connect(prescribedTemperature17.port.T, su-172.port_b.T ) ; 
connect(prescribedTemperature17.port.T, su-173.port_b.T ) ; 
connect(prescribedTemperature19.port.T, su-179.port_b.T ) ; 
connect(prescribedTemperature20.port.T, su-184.port_b.T ) ; 
connect(prescribedTemperature22.port.T, su-188.port_b.T ) ; 
connect(prescribedTemperature23.port.T, su-192.port_b.T ) ; 
connect(prescribedTemperature24.port.T, su-194.port_b.T ) ; 
connect(prescribedTemperature24.port.T, su-196.port_b.T ) ; 
connect(prescribedTemperature24.port.T, su-197.port_b.T ) ; 
connect(prescribedTemperature25.port.T, su-199.port_b.T ) ; 
connect(prescribedTemperature25.port.T, su-200.port_b.T ) ; 
connect(prescribedTemperature26.port.T, su-203.port_b.T ) ; 
connect(prescribedTemperature27.port.T, su-206.port_b.T ) ; 
connect(prescribedTemperature28.port.T, su-209.port_b.T ) ; 
connect(prescribedTemperature29.port.T, su-212.port_b.T ) ; 
connect(prescribedTemperature30.port.T, su-215.port_b.T ) ; 
connect(prescribedTemperature30.port.T, su-216.port_b.T ) ; 
connect(prescribedTemperature31.port.T, su-219.port_b.T ) ; 
connect(prescribedTemperature32.port.T, su-222.port_b.T ) ; 
connect(prescribedTemperature32.port.T, su-223.port_b.T ) ; 

connect (prescribedTemperature0.port.T, su-30.port_a.T ) ; 
connect (prescribedTemperature2.port.T, su-30.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-31.port_a.T ) ; 
connect (prescribedTemperature3.port.T, su-31.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-32.port_a.T ) ; 
connect (prescribedTemperature4.port.T, su-32.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-33.port_a.T ) ; 
connect (prescribedTemperature8.port.T, su-33.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-34.port_a.T ) ; 
connect (prescribedTemperature9.port.T, su-34.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-35.port_a.T ) ; 
connect (prescribedTemperature10.port.T, su-35.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-36.port_a.T ) ; 
connect (prescribedTemperature11.port.T, su-36.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-37.port_a.T ) ; 
connect (prescribedTemperature12.port.T, su-37.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-38.port_a.T ) ; 
connect (prescribedTemperature13.port.T, su-38.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-39.port_a.T ) ; 
connect (prescribedTemperature14.port.T, su-39.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-40.port_a.T ) ; 
connect (prescribedTemperature14.port.T, su-40.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-41.port_a.T ) ; 
connect (prescribedTemperature14.port.T, su-41.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-42.port_a.T ) ; 
connect (prescribedTemperature15.port.T, su-42.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-43.port_a.T ) ; 
connect (prescribedTemperature16.port.T, su-43.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-44.port_a.T ) ; 
connect (prescribedTemperature17.port.T, su-44.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-45.port_a.T ) ; 
connect (prescribedTemperature18.port.T, su-45.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-46.port_a.T ) ; 
connect (prescribedTemperature18.port.T, su-46.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-47.port_a.T ) ; 
connect (prescribedTemperature18.port.T, su-47.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-48.port_a.T ) ; 
connect (prescribedTemperature19.port.T, su-48.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-49.port_a.T ) ; 
connect (prescribedTemperature20.port.T, su-49.port_b.T )  ; 

connect (prescribedTemperature0.port.T, su-50.port_a.T ) ; 
connect (prescribedTemperature20.port.T, su-50.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-82.port_a.T ) ; 
connect (prescribedTemperature5.port.T, su-82.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-83.port_a.T ) ; 
connect (prescribedTemperature6.port.T, su-83.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-84.port_a.T ) ; 
connect (prescribedTemperature7.port.T, su-84.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-85.port_a.T ) ; 
connect (prescribedTemperature21.port.T, su-85.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-86.port_a.T ) ; 
connect (prescribedTemperature21.port.T, su-86.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-87.port_a.T ) ; 
connect (prescribedTemperature21.port.T, su-87.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-88.port_a.T ) ; 
connect (prescribedTemperature22.port.T, su-88.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-89.port_a.T ) ; 
connect (prescribedTemperature23.port.T, su-89.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-90.port_a.T ) ; 
connect (prescribedTemperature23.port.T, su-90.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-91.port_a.T ) ; 
connect (prescribedTemperature24.port.T, su-91.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-92.port_a.T ) ; 
connect (prescribedTemperature25.port.T, su-92.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-93.port_a.T ) ; 
connect (prescribedTemperature26.port.T, su-93.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-94.port_a.T ) ; 
connect (prescribedTemperature27.port.T, su-94.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-95.port_a.T ) ; 
connect (prescribedTemperature28.port.T, su-95.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-96.port_a.T ) ; 
connect (prescribedTemperature29.port.T, su-96.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-97.port_a.T ) ; 
connect (prescribedTemperature29.port.T, su-97.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-98.port_a.T ) ; 
connect (prescribedTemperature30.port.T, su-98.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-99.port_a.T ) ; 
connect (prescribedTemperature31.port.T, su-99.port_b.T )  ; 

connect (prescribedTemperature1.port.T, su-100.port_a.T ) ; 
connect (prescribedTemperature32.port.T, su-100.port_b.T )  ; 

connect (prescribedTemperature2.port.T, su-104.port_a.T ) ; 
connect (prescribedTemperature3.port.T, su-104.port_b.T )  ; 

connect (prescribedTemperature3.port.T, su-109.port_a.T ) ; 
connect (prescribedTemperature4.port.T, su-109.port_b.T )  ; 

connect (prescribedTemperature5.port.T, su-119.port_a.T ) ; 
connect (prescribedTemperature6.port.T, su-119.port_b.T )  ; 

connect (prescribedTemperature6.port.T, su-122.port_a.T ) ; 
connect (prescribedTemperature7.port.T, su-122.port_b.T )  ; 

connect (prescribedTemperature8.port.T, su-129.port_a.T ) ; 
connect (prescribedTemperature9.port.T, su-129.port_b.T )  ; 

connect (prescribedTemperature8.port.T, su-130.port_a.T ) ; 
connect (prescribedTemperature19.port.T, su-130.port_b.T )  ; 

connect (prescribedTemperature9.port.T, su-134.port_a.T ) ; 
connect (prescribedTemperature10.port.T, su-134.port_b.T )  ; 

connect (prescribedTemperature10.port.T, su-140.port_a.T ) ; 
connect (prescribedTemperature11.port.T, su-140.port_b.T )  ; 

connect (prescribedTemperature10.port.T, su-141.port_a.T ) ; 
connect (prescribedTemperature11.port.T, su-141.port_b.T )  ; 

connect (prescribedTemperature10.port.T, su-142.port_a.T ) ; 
connect (prescribedTemperature11.port.T, su-142.port_b.T )  ; 

connect (prescribedTemperature11.port.T, su-146.port_a.T ) ; 
connect (prescribedTemperature12.port.T, su-146.port_b.T )  ; 

connect (prescribedTemperature12.port.T, su-151.port_a.T ) ; 
connect (prescribedTemperature13.port.T, su-151.port_b.T )  ; 

connect (prescribedTemperature13.port.T, su-156.port_a.T ) ; 
connect (prescribedTemperature14.port.T, su-156.port_b.T )  ; 

connect (prescribedTemperature14.port.T, su-160.port_a.T ) ; 
connect (prescribedTemperature15.port.T, su-160.port_b.T )  ; 

connect (prescribedTemperature15.port.T, su-166.port_a.T ) ; 
connect (prescribedTemperature16.port.T, su-166.port_b.T )  ; 

connect (prescribedTemperature16.port.T, su-170.port_a.T ) ; 
connect (prescribedTemperature17.port.T, su-170.port_b.T )  ; 

connect (prescribedTemperature18.port.T, su-177.port_a.T ) ; 
connect (prescribedTemperature20.port.T, su-177.port_b.T )  ; 

connect (prescribedTemperature19.port.T, su-181.port_a.T ) ; 
connect (prescribedTemperature20.port.T, su-181.port_b.T )  ; 

connect (prescribedTemperature21.port.T, su-187.port_a.T ) ; 
connect (prescribedTemperature23.port.T, su-187.port_b.T )  ; 

connect (prescribedTemperature22.port.T, su-190.port_a.T ) ; 
connect (prescribedTemperature23.port.T, su-190.port_b.T )  ; 

connect (prescribedTemperature22.port.T, su-191.port_a.T ) ; 
connect (prescribedTemperature24.port.T, su-191.port_b.T )  ; 

connect (prescribedTemperature24.port.T, su-198.port_a.T ) ; 
connect (prescribedTemperature25.port.T, su-198.port_b.T )  ; 

connect (prescribedTemperature25.port.T, su-202.port_a.T ) ; 
connect (prescribedTemperature26.port.T, su-202.port_b.T )  ; 

connect (prescribedTemperature26.port.T, su-205.port_a.T ) ; 
connect (prescribedTemperature27.port.T, su-205.port_b.T )  ; 

connect (prescribedTemperature27.port.T, su-208.port_a.T ) ; 
connect (prescribedTemperature28.port.T, su-208.port_b.T )  ; 

connect (prescribedTemperature28.port.T, su-211.port_a.T ) ; 
connect (prescribedTemperature29.port.T, su-211.port_b.T )  ; 

connect (prescribedTemperature29.port.T, su-214.port_a.T ) ; 
connect (prescribedTemperature30.port.T, su-214.port_b.T )  ; 

connect (prescribedTemperature30.port.T, su-218.port_a.T ) ; 
connect (prescribedTemperature31.port.T, su-218.port_b.T )  ; 

connect (prescribedTemperature31.port.T, su-221.port_a.T ) ; 
connect (prescribedTemperature32.port.T, su-221.port_b.T )  ; 


connect( su-1.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-2.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-3.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-4.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-5.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-6.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-7.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-8.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-9.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-10.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-11.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-12.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-13.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-14.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-15.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-16.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-17.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-18.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-19.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-20.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-21.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-22.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-23.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-24.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-25.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-27.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-28.port_b.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect( su-55.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-56.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-57.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-58.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-59.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-60.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-61.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-62.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-63.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-64.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-65.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-66.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-67.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-68.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-69.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-70.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-71.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-72.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-73.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-74.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-75.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-76.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-77.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-78.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-79.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-80.port_b.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect( su-101.port_b.Q_flow, sp-3-Office.port_a.Q_flow) ; 
connect( su-102.port_b.Q_flow, sp-3-Office.port_a.Q_flow) ; 
connect( su-107.port_b.Q_flow, sp-4-Office.port_a.Q_flow) ; 
connect( su-111.port_b.Q_flow, sp-5-Office.port_a.Q_flow) ; 
connect( su-112.port_b.Q_flow, sp-5-Office.port_a.Q_flow) ; 
connect( su-116.port_b.Q_flow, sp-6-Office.port_a.Q_flow) ; 
connect( su-117.port_b.Q_flow, sp-6-Office.port_a.Q_flow) ; 
connect( su-120.port_b.Q_flow, sp-7-Office.port_a.Q_flow) ; 
connect( su-123.port_b.Q_flow, sp-8-Office.port_a.Q_flow) ; 
connect( su-124.port_b.Q_flow, sp-8-Office.port_a.Q_flow) ; 
connect( su-126.port_b.Q_flow, sp-9-Office.port_a.Q_flow) ; 
connect( su-128.port_b.Q_flow, sp-9-Office.port_a.Q_flow) ; 
connect( su-132.port_b.Q_flow, sp-10-Office.port_a.Q_flow) ; 
connect( su-137.port_b.Q_flow, sp-11-Office.port_a.Q_flow) ; 
connect( su-138.port_b.Q_flow, sp-11-Office.port_a.Q_flow) ; 
connect( su-144.port_b.Q_flow, sp-12-Office.port_a.Q_flow) ; 
connect( su-149.port_b.Q_flow, sp-13-Office.port_a.Q_flow) ; 
connect( su-154.port_b.Q_flow, sp-14-Office.port_a.Q_flow) ; 
connect( su-158.port_b.Q_flow, sp-15-Stairwell.port_a.Q_flow) ; 
connect( su-163.port_b.Q_flow, sp-16-Office.port_a.Q_flow) ; 
connect( su-164.port_b.Q_flow, sp-16-Office.port_a.Q_flow) ; 
connect( su-168.port_b.Q_flow, sp-17-Office.port_a.Q_flow) ; 
connect( su-172.port_b.Q_flow, sp-18-Office.port_a.Q_flow) ; 
connect( su-173.port_b.Q_flow, sp-18-Office.port_a.Q_flow) ; 
connect( su-179.port_b.Q_flow, sp-20-Ladies_Room.port_a.Q_flow) ; 
connect( su-184.port_b.Q_flow, sp-21-MechanicalElectrical.port_a.Q_flow) ; 
connect( su-188.port_b.Q_flow, sp-23-Ladies_Room.port_a.Q_flow) ; 
connect( su-192.port_b.Q_flow, sp-24-MechanicalElectrical.port_a.Q_flow) ; 
connect( su-194.port_b.Q_flow, sp-25-Lounge.port_a.Q_flow) ; 
connect( su-196.port_b.Q_flow, sp-25-Lounge.port_a.Q_flow) ; 
connect( su-197.port_b.Q_flow, sp-25-Lounge.port_a.Q_flow) ; 
connect( su-199.port_b.Q_flow, sp-26-Office.port_a.Q_flow) ; 
connect( su-200.port_b.Q_flow, sp-26-Office.port_a.Q_flow) ; 
connect( su-203.port_b.Q_flow, sp-27-Office.port_a.Q_flow) ; 
connect( su-206.port_b.Q_flow, sp-28-Office.port_a.Q_flow) ; 
connect( su-209.port_b.Q_flow, sp-29-Office.port_a.Q_flow) ; 
connect( su-212.port_b.Q_flow, sp-30-Stairwell.port_a.Q_flow) ; 
connect( su-215.port_b.Q_flow, sp-31-Conference_Room.port_a.Q_flow) ; 
connect( su-216.port_b.Q_flow, sp-31-Conference_Room.port_a.Q_flow) ; 
connect( su-219.port_b.Q_flow, sp-32-Office.port_a.Q_flow) ; 
connect( su-222.port_b.Q_flow, sp-33-Office.port_a.Q_flow) ; 
connect( su-223.port_b.Q_flow, sp-33-Office.port_a.Q_flow) ; 
S
connect (su-30.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-30.port_b.Q_flow, sp-3-Office.port_a.Q_flow) ; 

connect (su-31.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-31.port_b.Q_flow, sp-4-Office.port_a.Q_flow) ; 

connect (su-32.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-32.port_b.Q_flow, sp-5-Office.port_a.Q_flow) ; 

connect (su-33.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-33.port_b.Q_flow, sp-9-Office.port_a.Q_flow) ; 

connect (su-34.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-34.port_b.Q_flow, sp-10-Office.port_a.Q_flow) ; 

connect (su-35.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-35.port_b.Q_flow, sp-11-Office.port_a.Q_flow) ; 

connect (su-36.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-36.port_b.Q_flow, sp-12-Office.port_a.Q_flow) ; 

connect (su-37.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-37.port_b.Q_flow, sp-13-Office.port_a.Q_flow) ; 

connect (su-38.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-38.port_b.Q_flow, sp-14-Office.port_a.Q_flow) ; 

connect (su-39.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-39.port_b.Q_flow, sp-15-Stairwell.port_a.Q_flow) ; 

connect (su-40.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-40.port_b.Q_flow, sp-15-Stairwell.port_a.Q_flow) ; 

connect (su-41.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-41.port_b.Q_flow, sp-15-Stairwell.port_a.Q_flow) ; 

connect (su-42.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-42.port_b.Q_flow, sp-16-Office.port_a.Q_flow) ; 

connect (su-43.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-43.port_b.Q_flow, sp-17-Office.port_a.Q_flow) ; 

connect (su-44.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-44.port_b.Q_flow, sp-18-Office.port_a.Q_flow) ; 

connect (su-45.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-45.port_b.Q_flow, sp-19-Mens_Room.port_a.Q_flow) ; 

connect (su-46.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-46.port_b.Q_flow, sp-19-Mens_Room.port_a.Q_flow) ; 

connect (su-47.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-47.port_b.Q_flow, sp-19-Mens_Room.port_a.Q_flow) ; 

connect (su-48.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-48.port_b.Q_flow, sp-20-Ladies_Room.port_a.Q_flow) ; 

connect (su-49.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-49.port_b.Q_flow, sp-21-MechanicalElectrical.port_a.Q_flow) ; 

connect (su-50.port_a.Q_flow, sp-1-Open.port_a.Q_flow) ; 
connect (su-50.port_b.Q_flow, sp-21-MechanicalElectrical.port_a.Q_flow) ; 

connect (su-82.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-82.port_b.Q_flow, sp-6-Office.port_a.Q_flow) ; 

connect (su-83.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-83.port_b.Q_flow, sp-7-Office.port_a.Q_flow) ; 

connect (su-84.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-84.port_b.Q_flow, sp-8-Office.port_a.Q_flow) ; 

connect (su-85.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-85.port_b.Q_flow, sp-22-Mens_Room.port_a.Q_flow) ; 

connect (su-86.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-86.port_b.Q_flow, sp-22-Mens_Room.port_a.Q_flow) ; 

connect (su-87.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-87.port_b.Q_flow, sp-22-Mens_Room.port_a.Q_flow) ; 

connect (su-88.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-88.port_b.Q_flow, sp-23-Ladies_Room.port_a.Q_flow) ; 

connect (su-89.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-89.port_b.Q_flow, sp-24-MechanicalElectrical.port_a.Q_flow) ; 

connect (su-90.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-90.port_b.Q_flow, sp-24-MechanicalElectrical.port_a.Q_flow) ; 

connect (su-91.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-91.port_b.Q_flow, sp-25-Lounge.port_a.Q_flow) ; 

connect (su-92.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-92.port_b.Q_flow, sp-26-Office.port_a.Q_flow) ; 

connect (su-93.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-93.port_b.Q_flow, sp-27-Office.port_a.Q_flow) ; 

connect (su-94.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-94.port_b.Q_flow, sp-28-Office.port_a.Q_flow) ; 

connect (su-95.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-95.port_b.Q_flow, sp-29-Office.port_a.Q_flow) ; 

connect (su-96.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-96.port_b.Q_flow, sp-30-Stairwell.port_a.Q_flow) ; 

connect (su-97.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-97.port_b.Q_flow, sp-30-Stairwell.port_a.Q_flow) ; 

connect (su-98.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-98.port_b.Q_flow, sp-31-Conference_Room.port_a.Q_flow) ; 

connect (su-99.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-99.port_b.Q_flow, sp-32-Office.port_a.Q_flow) ; 

connect (su-100.port_a.Q_flow, sp-2-Open.port_a.Q_flow) ; 
connect (su-100.port_b.Q_flow, sp-33-Office.port_a.Q_flow) ; 

connect (su-104.port_a.Q_flow, sp-3-Office.port_a.Q_flow) ; 
connect (su-104.port_b.Q_flow, sp-4-Office.port_a.Q_flow) ; 

connect (su-109.port_a.Q_flow, sp-4-Office.port_a.Q_flow) ; 
connect (su-109.port_b.Q_flow, sp-5-Office.port_a.Q_flow) ; 

connect (su-119.port_a.Q_flow, sp-6-Office.port_a.Q_flow) ; 
connect (su-119.port_b.Q_flow, sp-7-Office.port_a.Q_flow) ; 

connect (su-122.port_a.Q_flow, sp-7-Office.port_a.Q_flow) ; 
connect (su-122.port_b.Q_flow, sp-8-Office.port_a.Q_flow) ; 

connect (su-129.port_a.Q_flow, sp-9-Office.port_a.Q_flow) ; 
connect (su-129.port_b.Q_flow, sp-10-Office.port_a.Q_flow) ; 

connect (su-130.port_a.Q_flow, sp-9-Office.port_a.Q_flow) ; 
connect (su-130.port_b.Q_flow, sp-20-Ladies_Room.port_a.Q_flow) ; 

connect (su-134.port_a.Q_flow, sp-10-Office.port_a.Q_flow) ; 
connect (su-134.port_b.Q_flow, sp-11-Office.port_a.Q_flow) ; 

connect (su-140.port_a.Q_flow, sp-11-Office.port_a.Q_flow) ; 
connect (su-140.port_b.Q_flow, sp-12-Office.port_a.Q_flow) ; 

connect (su-141.port_a.Q_flow, sp-11-Office.port_a.Q_flow) ; 
connect (su-141.port_b.Q_flow, sp-12-Office.port_a.Q_flow) ; 

connect (su-142.port_a.Q_flow, sp-11-Office.port_a.Q_flow) ; 
connect (su-142.port_b.Q_flow, sp-12-Office.port_a.Q_flow) ; 

connect (su-146.port_a.Q_flow, sp-12-Office.port_a.Q_flow) ; 
connect (su-146.port_b.Q_flow, sp-13-Office.port_a.Q_flow) ; 

connect (su-151.port_a.Q_flow, sp-13-Office.port_a.Q_flow) ; 
connect (su-151.port_b.Q_flow, sp-14-Office.port_a.Q_flow) ; 

connect (su-156.port_a.Q_flow, sp-14-Office.port_a.Q_flow) ; 
connect (su-156.port_b.Q_flow, sp-15-Stairwell.port_a.Q_flow) ; 

connect (su-160.port_a.Q_flow, sp-15-Stairwell.port_a.Q_flow) ; 
connect (su-160.port_b.Q_flow, sp-16-Office.port_a.Q_flow) ; 

connect (su-166.port_a.Q_flow, sp-16-Office.port_a.Q_flow) ; 
connect (su-166.port_b.Q_flow, sp-17-Office.port_a.Q_flow) ; 

connect (su-170.port_a.Q_flow, sp-17-Office.port_a.Q_flow) ; 
connect (su-170.port_b.Q_flow, sp-18-Office.port_a.Q_flow) ; 

connect (su-177.port_a.Q_flow, sp-19-Mens_Room.port_a.Q_flow) ; 
connect (su-177.port_b.Q_flow, sp-21-MechanicalElectrical.port_a.Q_flow) ; 

connect (su-181.port_a.Q_flow, sp-20-Ladies_Room.port_a.Q_flow) ; 
connect (su-181.port_b.Q_flow, sp-21-MechanicalElectrical.port_a.Q_flow) ; 

connect (su-187.port_a.Q_flow, sp-22-Mens_Room.port_a.Q_flow) ; 
connect (su-187.port_b.Q_flow, sp-24-MechanicalElectrical.port_a.Q_flow) ; 

connect (su-190.port_a.Q_flow, sp-23-Ladies_Room.port_a.Q_flow) ; 
connect (su-190.port_b.Q_flow, sp-24-MechanicalElectrical.port_a.Q_flow) ; 

connect (su-191.port_a.Q_flow, sp-23-Ladies_Room.port_a.Q_flow) ; 
connect (su-191.port_b.Q_flow, sp-25-Lounge.port_a.Q_flow) ; 

connect (su-198.port_a.Q_flow, sp-25-Lounge.port_a.Q_flow) ; 
connect (su-198.port_b.Q_flow, sp-26-Office.port_a.Q_flow) ; 

connect (su-202.port_a.Q_flow, sp-26-Office.port_a.Q_flow) ; 
connect (su-202.port_b.Q_flow, sp-27-Office.port_a.Q_flow) ; 

connect (su-205.port_a.Q_flow, sp-27-Office.port_a.Q_flow) ; 
connect (su-205.port_b.Q_flow, sp-28-Office.port_a.Q_flow) ; 

connect (su-208.port_a.Q_flow, sp-28-Office.port_a.Q_flow) ; 
connect (su-208.port_b.Q_flow, sp-29-Office.port_a.Q_flow) ; 

connect (su-211.port_a.Q_flow, sp-29-Office.port_a.Q_flow) ; 
connect (su-211.port_b.Q_flow, sp-30-Stairwell.port_a.Q_flow) ; 

connect (su-214.port_a.Q_flow, sp-30-Stairwell.port_a.Q_flow) ; 
connect (su-214.port_b.Q_flow, sp-31-Conference_Room.port_a.Q_flow) ; 

connect (su-218.port_a.Q_flow, sp-31-Conference_Room.port_a.Q_flow) ; 
connect (su-218.port_b.Q_flow, sp-32-Office.port_a.Q_flow) ; 

connect (su-221.port_a.Q_flow, sp-32-Office.port_a.Q_flow) ; 
connect (su-221.port_b.Q_flow, sp-33-Office.port_a.Q_flow) ; 


end SingleStorey;

