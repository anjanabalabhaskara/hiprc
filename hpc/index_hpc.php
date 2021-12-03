<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include '../js/header.php';?>

<body>
	


<!-- home section -->



 <div id="homeCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1" ></li>
            <li data-target="#myCarousel" data-slide-to="2" ></li>
            <li data-target="#myCarousel" data-slide-to="3" ></li>
            <li data-target="#myCarousel" data-slide-to="4" ></li>
        </ol>


        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="slide" src="./images/setup.jpg" style="max-width:100%;max-height:100%;object-fit: contain;" alt="First slide">
                
            </div>           
            <div class="item ">
                <img class="slide" src="./images/HPCMain.png" style="max-width:100%;max-height:100%;object-fit: contain;" alt="Second slide">
                
            </div>           
            <div class="item">
              <img class="slide" src="./images/website_ADAS.png" style="max-width:100%;max-height:100%;object-fit: contain;" alt="Third slide">
            </div>
            <div class="item">
              <img class="slide" src="./images/HPC_DAG.png" style="max-width:100%;max-height:100%;object-fit: contain;" alt="Fourth slide">
            </div>
            <div class="item">
              <img class="slide" src="./images/thermalScheduling.png" style="max-width:100%;max-height:100%;object-fit: contain;" alt="Fifth slide">
            </div>

        </div>
        <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>

<!-- divider section -->

<div class="row text-center" style="padding:15px">
    <div class="header">
        <h1 ><span>High Performance Runtime Systems</span></h1>
    </div>
</div>
<br><br>

<div class="divider">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-laptop"></i>
					<h2>GPGPUs and Optimization Techniques</h2>
                    <p>Exploring optimizations such as kernel fusion, coarsening, tiling etc. for HPC applications like object detection, speech recognition, DNN training etc.  </p>
				    <a href="#gpgpu optimization" class="btn btn-default">LEARN MORE</a>
                </div>

			</div>
			<div class="col-md-4 col-sm-4">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-laptop"></i>
					<h2>Scheduling in Heterogeneous Systems</h2>
                    <p>Scheduling mechanisms for heterogeneous large scale clusters and embedded GPGPU platforms comprising multiple devices such OCPUs, iGPUs,Exploring  optimizations FPGAs etc.</p>
                    <a href="#scheduling" class="btn btn-default">LEARN MORE</a>
				</div>
			</div>
            <div class="col-md-4 col-sm-4">
                <div class="divider-wrapper divider-one">
                    <i class="fa fa-laptop"></i>
                    <h2>GPGPU Resources</h2>
                    <p>A repository of online learning articles, books, libraries pertaining to CUDA/OpenCL and the latest HPC news facilitating individuals to explore a career in GPGPU Programming and Research </p>
                    <a href="./hpc-resources.php" class="btn btn-default">LEARN MORE</a>
                </div>
            </div>

		</div>
	</div>
</div>

<!-- projects section -->
<div class="content text-center" id="gpgpu optimization">
    <div class="container">
        <div class="row " style="padding:15px">
            <div class="header">
                <h1 ><span>Ongoing Projects</span></h1>
            </div>
        </div>

        <!-- <div class="container topic-desc"  style= "padding: 50px; background-color: LightSteelBlue  ; "> -->
        
        <div class="container topic-desc" style= "padding: 50px; "  >
            <div style="width:100% " data-toggle="collapse" data-target="#proj3-description" >
                <div class="header-content-container"  >
                    <h2 style="text-align:center; " >Accelerating deep learning <span class="caret"></span></h2>
                </div>
                <div class="collapse" id="proj3-description" style="padding:20px" >
                    
                    <p class="text-justify" >
                        The landscape of deep learning has witnessed a paradigm shift in recent years with the advent of compiler tool chains with dedicated graphical IRs, custom made accelerators tuned for tensor computation and algorithmic optimizations for both training and inference workloads on both heterogeneous compute clusters and embedded platforms. In this context, we are also exploring optimizations for deriving novel scheduling solutions for mapping deep learning workloads on heterogeneous architectures. For significantly large training workloads, the primary bottleneck is the on-chip memory of accelerators. In this regard we are investigating scheduling techniques of asynchronously prefetching and offloading memory in parallel with the computation for accelerating the training process. For inference pipelines, the primary objective would be to ensure that thermal degradation of the platform does not occur. In this regard, we are investigating novel GPGPU optimizations such as kernel fusion and coarsening for mapping the pipeline efficiently on an embedded platform. For both styles of optimizations, predictive modelling and control theoretic solutions are being envisaged for facilitating dynamic and adaptive mapping of computation kernels pertaining to deep learning workloads.


                    </p>
                    <div class="row" style="padding:0px 5px 0px 5px" >
                        <img class="img-responsive" src="./images/DL.png" style="margin-left: auto; margin-right: auto;max-width:100%;max-height:100%;" alt="DL optimization">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content text-center" id="scheduling">
    <div class="container">

        <br><br>
        <div class="container topic-desc" style= "padding: 50px; " >
            <div style="width:100% " data-toggle="collapse" data-target="#proj2-description" >
                <div class="header-content-container" >
                    <h2 style="text-align:center; ">DAG scheduling in CPU-GPU clusters <span class="caret"></span></h2>
                </div>
                <div class="collapse" id="proj2-description" style="padding:20px">
                    
                    <p class="text-justify" >
                        Recent efforts towards application scheduling on heterogeneous multiprocessor architectures typically consider applications to be represented as directed acyclic graphs (DAGs). Each application DAG is annotated at the task level with relevant execution time information that is leveraged by scheduling algorithms (List or Clustering based) to ascertain near optimal schedules at runtime. However, given an online setting, where applications are submitted by multiple users and the types of applications are not restrictive, the chances of knowing execution time information for every program is highly unlikely. In this context, we propose a class of intelligent algorithms for heterogeneous CPU-GPU platforms that leverages static analysis methodologies coupled with machine learning and ascertains how based on static program structure of tasks, device assignments should be made at runtime. This methodology helps in bypassing the requirement for profiling based offline execution time analysis thus making it applicable in an online scheduling scenario. We model applications as data parallel task graphs using the OpenCL programming model leveraging its device independent portability feature. The scheduling algorithms (list and clustering) consider both coarse-grained (where operations of kernels are mapped in its entirety to a device) and fine-grained mapping decisions (where read, write and execute operations are interleaved in parallel).



                    </p>
                    <div class="row" style="padding:0px 5px 0px 5px">
                        <img class="img-responsive" src="./images/website_DAG.png" style="margin-left: auto; margin-right: auto;max-width:100%;max-height:100%;" alt="DAG scheduling">
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="container topic-desc"  style= "padding: 50px; ">
            <div style="width:100% " data-toggle="collapse" data-target="#proj1-description" >
                <div class="header-content-container" >
                    <h2 style="text-align:center; ">Intelligent ADAS task management on heterogeneous automotive architecture <span class="caret"></span></h2>
                </div>
                <div class="collapse" id="proj1-description" style="padding:20px; ">
                    
                        <p class="text-justify" >
                        An  ADAS  system  constitutes  multiple  object  detection  pipelines that  process  sensor  data  periodically  leveraging  state  of  the  art Deep Neural Networks (DNNs) and Convolutional Neural Networks(CNNs).  The  pipelines  are  used  to  detect  objects  in  the  vicinity and  accordingly  dispatch  commands  to  other  vehicular  subsystems such as park assist, anti-lock braking systems etc. for taking relevant actions.  Therefore,  there  exists  a  natural  requirement  for  real  time guarantees  for  executing  these  object  detection  pipelines.
                        Furthermore, such pipelines possess   time  varying  dynamic  FPS  requirements  dictated  by different  driving  contexts. Given  the  set  of  ADAS  detection  workloads,  designing  automotive computing  solutions  with  the  ability  to  sustain  the  maximum  FPS requirements  of  all  detection  pipelines  simultaneously  may  lead  to over-provisioning  of  resources  on  a  restricted  memory  architecture, and  also  increased  power  consumption  and  thermal  aging  of  the heterogeneous  platform.<br><br>

                        The present work proposes an intelligent runtime system which can manage  the  mapping  and  scheduling  of  ADAS  detection  pipelines in next-generation automotive embedded platforms in a self-learning fashion  so  that  the  time  varying  dynamic  detection  requirements  of existing pipelines are efficiently managed while maintaining real time guarantees. Since  investigating every possible mapping decision imposes a considerably large searchspace  of  decisions  to  be  evaluated  for  finding  an  optimal  solution,we design Reinforcement Learning based schemes for  predicting task-device mapping decisions for each pipeline subject to dynamic FPS requirements over time.

                    </p>
                    <div class="row" style="padding:0px 5px 0px 5px">
                        <img class="img-responsive" src="./images/adas.jpg" style="margin-left: auto; margin-right: auto;max-width:100%;max-height:100%;" alt="adas block diagram">
                        <br><br><h3>
                        <a href="https://www.qualcomm.com/invention/research/university-relations/innovation-fellowship/winners" data-lightbox-gallery="portfolio-gallery" target="_blank"> Winner of Qualcomm Innovation Fellowship Challenge, India 2018-2019</a> </h3>
                    </div>
                </div>
            </div>
        </div>

        <br><br>


        <div class="container topic-desc" style= "padding: 50px; ">
            <div style="width:100% " data-toggle="collapse" data-target="#proj4-description" >
                <div class="header-content-container" >
                    <h2 style="text-align:center; ">Thermal aware scheduling in heterogeneous embedded platform <span class="caret"></span></h2>
                </div>
                <div class="collapse" id="proj4-description" style="padding:20px">
                    
                    <p class="text-justify" >
                        
                      Modern mobile platforms are equipped with heterogeneous multiprocessor system-on-chip (MPSoC) where the architecture is becoming increasingly complex and heterogeneous having multiple compute elements with varying compute capabilities. They can include multicore big-LITTLE CPUs, accelerators capable of general-purpose computing like graphic processing units (GPUs), and field programmable gate arrays (FPGAs) or digital signal processor (DSP). Increasingly smaller chip size and functional complexity leads to increase in the power density which in turn results in chip overheating which degrades its reliability, and may risk physical safety. Due to the absence of active cooling measures in such mobile platforms, thermal constraints are much more stringent . Thus, in recent times temperature-aware resource scheduling that can maintain on-chip thermal constraints  as well as application timing constraints has become a key system design objective in heterogeneous embeded platform with varying compute elements. We are actively researching on efficent scheduling mechanisms that can determine optimal or near-optimal assignment of tasks to  devices with multiple control values of the thermal features in heterogeneous embedded processors having multiple constraints such as meeting deadline, power enveloping etc.


                    </p>
                    <div class="row" style="padding:0px 5px 0px 5px" >
                        <img class="img-responsive" src="./images/ThermalOverview.png" style="margin-left: auto; margin-right: auto;max-width:100%;max-height:100%;" alt="thermalOverview">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<br>

<!-- tool section -->
<div class="content text-center" >
<div class="container">
    <div id="about" id="tool">
        <div class="row text-center" style="padding:15px">
            <div class="header">
                <h1 ><span>Tool Developed</span></h1>
            </div>
        </div>
        <div class="container topic-desc" style= "padding: 50px;background-color: white; color:black;" data-toggle="collapse" data-target="#tool-description,#tool-description0,#tool-description1,#tool-description2,#tool-description3,#tool-description4,#tool-description5,#tool-description6,#more-button">

            <div class="header-content-container"  >
                <h2 style="text-align:center; color:black;">PySchedCL: Python based Scheduling framework for OpenCL applications <span class="caret"></span></h2>
            </div>
            

            <div class="row" style="text-align:justify-all;" >

                <p style="text-align:justify;color:rgb(64,64,64)" id="tool-description" class="collapse" >

                      In the past few years, OpenCL has emerged as a widely used parallel programming standard for high perfor-
                      mance computing on heterogeneous platforms comprising processors of widely varying architectures.
                      The programming standard offers program portability  across an array of
                      different processor architectures e.g., general purpose (CPU), data parallel (GPU), task
                      parallel (CELL/B.E.) etc. The OpenCL API provides the programmer with a
                      vast array of options to write data-parallel programs efficiently for heterogeneous
                      architectures. However there exists a steep learning curve in learning the low level directives offered by the
                      OpenCL API completely. In addition to getting acquainted with the API, the programmer is  burdened with the
                      task of ascertaining target device characteristics and writing efficient code for utilizing the varied
                      processing elements in the heterogeneous system to their complete potential. Our framework is based on <thead>
                      the PyOpenCL python package and provides user friendly abstractions over the underlying API for designing
                      efficient solutions much faster.
                </p>
                <p style="text-align:justify;color:rgb(64,64,64)" id="tool-description0" class="collapse">

                      The primary goal of PySchedCL is to provide a platform for rapid prototyping of
                      high performance applications as well as a research tool for experimenting various scheduling and mapping policies
                      of multiple OpenCL applications for different heterogeneous platforms. The framework leverages a kernel specification scheme that specifies
                      information regarding the host side management for the execution of an OpenCL kernel.  Given the corresponding specification
                      file for a kernel, the framework is capable of distributing the computation across the devices of the target heterogeneous architecture. <br>
                </p>
                <p style="text-align:justify;color:rgb(64,64,64)" id="tool-description1" class="collapse">
                    The salient features of the framework is represented in the following figure and discussed below.
                            <ol style="text-align:justify;color:rgb(64,64,64)" id="tool-description2" class="collapse">
                            <li>The framework is capable of scheduling a set of independent OpenCL kernels (with their specification files) provided as input.
                            <li> The framework comprises a static analysis frontend capable of extracting program features that will
                              distribute the computation across available devices in the heterogeneous platform.  </li>
                            <li>serve in designing efficient heuristic functions for optimal mapping of kernels to devices. </li>
                            <li> In addition to the static analysis frontend, the framework provides a robust scheduling backend that
                              is capable of automatically managing OpenCL runtime parameters while intelligently scheduling
                              data parallel workloads across the different processors of the heterogeneous architecture.
                            </ol>

                </p>
                <p style="text-align:justify;color:rgb(64,64,64)" id="tool-description3" class="collapse">
                        The current version of PySchedCL provides a scheduling engine that may be leveraged for the following tasks.
                        <ol style="text-align:justify;color:rgb(64,64,64)" id="tool-description4" class="collapse">
                        <li> Partitioning an OpenCL kernel across multiple CPU and GPU device(s). </li>

                        <li> Scheduling a set of independent OpenCL kernels across multiple devices  </li>

                        <li> Designing runtime scheduling heuristics that leverage optimal partitioning information of individual OpenCL kernels. </li>
                        <li>  Utilities for carrying out extensive experimentation and evaluation of scheduling policies .</li>
                        </ol>
                </p>


                <p style="text-align:justify;color:rgb(64,64,64)" id="tool-description5" class="collapse">
                        In addition to the above tasks, the tool provides a rich API and an extensive documentation for extending the current capabilities of the framework with ease.
                        <img src="./images/pyschedcl.png" class="img-responsive" alt="about img" style="margin-left: auto; margin-right: auto;max-width:100%;max-height:100%;padding-top: 50px;">
                </p>

                <div style="text-align:center" id="more-button" class="collapse">
                    <a href="./tools/home.html" class="btn btn-default" target="_blank">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




<div class="container " style= "padding: 50px; " >
    <div class="row">
        <div class="row text-center" style="padding:15px">
            <div class="header">
                <h1 ><span>Our Testbeds</span></h1>
            </div>
        </div>
        <div class="container topic-desc">
            
                <div class="header-content-container">
                    <h2> Hardware <span class="caret"></span></h2>
                </div>
                <div class="col-md-7 col-sm-7">
                        <p>
                            <ul type="none">
                                <li> Cluster </li>
                                <ul>
                                    <li>1 Master Node and 3 Compute nodes connected via Infiniband</li>
                                    <li>Master node: Intel Xeon E5-2650V4 CPU and AMD FirePro S7150 GPU  </li>
                                    <li>Compute node(s): Intel Xeon E5-2650V4 CPU and a NVIDIA Tesla K40 GPU</li>

                                </ul>
                                <li>Odroid XU4
                                    <ul>
                                    <li> Quad-core  ARM  Cortex-A7 CPU</li>
                                    <li> Quad-core ARM Cortex-A15 CPU</li>
                                    <li> ARM  Mali-T628  GPU </li>
                                    </ul>
                                </li>
                                    
                                <li>Snapdragon 820</li>
                                    <ul >
                                    <li> Quad-core Qualcomm Kryo CPU </li>
                                    <li> Qualcomm Adreno 530 GPU </li>
                                    <li> Qualcomm Hexagon 680 DSP </li>
                                    </ul>
                                <li>NXP S32V234 Vision Processor</li>
                                    <ul >
                                    <li> Quad Cortex-A53 CPU </li>
                                    <li> 3D GPU (GC3000) </li>
                                    </ul>
                                <li>NVIDIA Jetson Nano Developer Kit</li>
                                    <ul >
                                    <li> Quad-core ARM A57 CPU </li>
                                    <li> 128-core NVIDIA Maxwell GPU </li>
                                    </ul>
                                
                            </ul>
                        </p>
                </div>
            
                <div class="col-md-4 col-sm-4" style="padding:7px 0px 0px 0px">
                        <img class="img-responsive" src="./images/cluster.jpg" alt="cluster">
                        <br>
                        <img class="img-responsive" src="./images/setup.jpg" alt="embedded boards">
                </div>
    
        </div>
    </div>
</div>

</div>


<br><br>




<!-- footer section -->
<?php include '../footer.php';?>


</body>
</html>
