<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include '../js/header.php';?>

<body>





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



<div class="row text-center" style="padding:15px">
    <div class="header">
        <h1 ><span>GPGPU and Real-time  Resources</span></h1>
    </div>
</div>
<br><br>

        
<div class="container topic-desc" style= "padding: 10px;background-color: white; color:black;" data-toggle="collapse" data-target="#updates">

    <div class="header-content-container"  >
        <h2 style="text-align:center; color:black;">Updates <span class="caret"></span></h2>
    </div>
    <div class="collapse" id="updates" style="padding:20px">    
    	<h3><a href="./images/Poster_new.pdf" target="_blank"> Upcoming NPTEL Course on GPU Architectures and Programming </a>      </h3>
	<h3><a href="https://automaticdai.github.io/realtime-embedded-conferences/" target="_blank"> Upcoming real-time and embedded conferences </a>      </h3>

    </div>
</div>

<div class="container topic-desc" style= "padding: 10px;background-color: white; color:black;" data-toggle="collapse" data-target="#learning">


    <div class="header-content-container"  >
        <h2 style="text-align:center; color:black;">Learning - Books and Online Articles <span class="caret"></span></h2>
    </div>
    

    	<div class="collapse" id="learning" style="padding:20px">

            <h3 style="font-weight: bold;">Course on GPGPU </h3>
            <ol>
            <li>
		    <h3><a href="https://nptel.ac.in/noc/courses/noc20/SEM1/noc20-cs41/" target="_blank"> GPU Architectures and Programming NPTEL Course </a>      </h3>
            </li>
            </ol>
            
	        <h3 style="font-weight: bold;">CUDA resources</h3>
	        <h3>
	        <ol>
	         <li><a href="https://developer.nvidia.com/blog/even-easier-introduction-cuda/" target="_blank"> CUDA Introduction and Future</li>
			 <li><a href="https://developer.nvidia.com/how-to-cuda-c-cpp" target="_blank"> Getting Started with CUDA</li>
			 <li><a href="https://news.developer.nvidia.com/developer-blog-cuda-refresher-july-2020/" target="_blank"> CUDA RefresherArticles</li>
			 <li><a href="https://developer.nvidia.com/gpugems/gpugems/contributors" target="_blank"> GPU Gems</a></li>
			 <li>Programming Massively Parallel Processors - David Kirk and Wen-mei Hwu</li>
			 <li>Professional CUDA C Programming - John Cheng, Max Grossman, and Ty McKercher</li>
			</ol>
		    </h3>
			<h3 style="font-weight: bold;"> OpenCL resources</h3>
			<h3>
			<ol>
				 <li><a href="https://www.khronos.org/opencl/" target="_blank"> Khronos OpenCL Overview</a></li>
				 <li><a href="https://www.khronos.org/sycl/" target="_blank">   Khronos SYCL Overview</a></li>
				 <li><a href="https://handsonopencl.github.io/" target="_blank"> Hands On OpenCL </a></li>
				 <li><a href="https://developer.codeplay.com/products/computecpp/ce/guides/what-is-sycl" target="_blank"> Guide on SYCL</a></li>
				 <li><a href="https://cnugteren.github.io/tutorial/pages/page1.html" target="_blank"> SGEMM Tutorial and Optimizations</a></li>
				 <li>Heterogeneous Computing with OpenCL 2.0 - Dana Schaa, Dong Ping Zhang, Perhaad Mistry, David R. Kaeli</li>
	        </ol>
	        </h3>
        
       	</div>
    
</div>

<div class="container topic-desc" style= "padding: 10px;background-color: white; color:black;" data-toggle="collapse" data-target="#trivia">

    <div class="header-content-container"  >
        <h2 style="text-align:center; color:black;">News and Trivia <span class="caret"></span></h2>
    </div>
    

        <div class="collapse" id="trivia" style="padding:20px">

            <ol>
                <h3>
                 <li><a href="https://www.phoronix.com/scan.php?page=news_item&px=SYCL-2020-Provisional-Spec" target="_blank">  Khronos releases SYCL 2020 Provisional Specification</a></li>
                 <li><a href="https://intel-hpc-ai-pavilion.gallery.video/detail/videos/hpc/video/6164686920001/oneapi-industry-initiative?autoStart=true&page=1" target="_blank"> OneAPI Industry Initiative </a></li>
                 <li><a href="https://www.nvidia.com/en-us/gtc/on-demand/" target="_blank"> GPU Technology Conference Digital Articles</a></li>
                 <li><a href="https://hgpu.org/" target="_blank"> Hub for GPGPU Research </a></li>
                 <li><a href="https://developer.nvidia.com/blog/how-build-gpu-accelerated-research-cluster/" target="_blank"> How to build a GPU Accelerated Research Cluster</a></li>
                 <li><a href="https://developer.nvidia.com/blog/category/hpc/" target="_blank"> Nvidia HPC Articles for CUDA </a></li>
                 <li><a href="https://www.khronos.org/blog/tags/tag/opencl" target="_blank"> Khronos Articles for OpenCL </a></li>
                </h3>
            </ol>
        
    </div>
    
</div>


<div class="container topic-desc" style= "padding: 10px;background-color: white; color:black;" data-toggle="collapse" data-target="#library">

    <div class="header-content-container"  >
        <h2 style="text-align:center; color:black;">APIs and Libraries <span class="caret"></span></h2>
    </div>
    

    	<div class="collapse" id="library" style="padding:20px">

	        <h3 style="font-weight: bold;">CUDA APIs</h3>
	        <h3>
	        <ol>
	         <li><a href="https://docs.nvidia.com/cuda/" target="_blank"> CUDA Toolkit Documentation</a></li>
	         <li><a href="https://docs.nvidia.com/cuda/cuda-runtime-api/index.html" target="_blank"> CUDA Runtime API</a></li>
	         <li><a href="https://docs.nvidia.com/cuda/parallel-thread-execution/index.html" target="_blank"> CUDA PTX ISA</a></li>
	         <li><a href="https://developer.nvidia.com/cublas" target="_blank"> cuBLAS: Linear Algebra library for BLAS functions implemented using CUDA</a></li>
	         <li><a href="https://developer.nvidia.com/cusparse" target="_blank"> cuSparse Sparse Linear Algebra routines implemented using CUDA</a></li>
	         <li><a href="https://developer.nvidia.com/cudnn" target="_blank"> cuDNN - GPU Accelerated library for Deep Neural Networks</a></li>
	         <li><a href="https://github.com/cupy/cupy" target="_blank"> cuPy- NumPy like library accelerated using CUDA</a></li>
	         <li><a href="https://github.com/NVIDIA/cutlass" target="_blank"> CUTLASS- A collection of CUDA C++ template abstractions for GEMM operations</a></li>
	         <li><a href="https://github.com/gunrock/gunrock" target="_blank"> Gunrock - CUDA Library for Graph Processing</a></li>
	         <li><a href="https://developer.nvidia.com/nvgraph" target="_blank"> nvGRAPH - GPU Accelerated library for Graph Analytics</a></li>
	         <li><a href="https://developer.nvidia.com/tensorrt" target="_blank"> TensorRT- Optimized Deep Learning Inference</a></li>
			 <li><a href="https://developer.nvidia.com/cufft" target="_blank"> cuFFT - GPU Accelerated library for Fast Fourier Transforms</a></li>
			</ol>
			</h3>
			<h3 style="font-weight: bold;"> OpenCL APIs</h3>
			<h3>
			<ol>
			 <li><a href="https://streamhpc.com/blog/2011-06-24/install-opencl-on-debianubuntu-orderly/" target="_blank"> OpenCL Installation on Linux</a></li>
 			 <li><a href="https://www.khronos.org/registry/OpenCL/specs/2.2/html/OpenCL_API.html" target="_blank"> OpenCL Specification</a></li>
 			 <li><a href="https://documen.tician.de/pyopencl/" target="_blank"> PyOpenCL Documentation</a></li>
 			 <li><a href="https://github.com/CNugteren/CLBlast" target="_blank"> CLBlast: Automatically tuning OpenCL Linear Algebra BLAS kernels</a></li>
			 <li><a href="https://github.com/pocl/pocl" target="_blank"> Portable Computing Language</a></li>
			 <li><a href="https://github.com/clMathLibraries/clBLAS" target="_blank"> A software library for BLAS functions implemented using OpenCL</a></li>
			 <li><a href="https://github.com/clMathLibraries/clFFT" target="_blank"> A software library for FFT functions implemented using OpenCL</a></li>
			 <li><a href="https://github.com/clMathLibraries/clSPARSE" target="_blank"> A software library for sparse tensor operations implemented using OpenCL</a></li>
			 <li><a href="https://github.com/intel/opencl-intercept-layer" target="_blank">  Intercept layer for analyzing Intel OpenCL Applications</a></li>
			 <li><a href="https://github.com/ARM-software/ComputeLibrary" target="_blank"> ARM Compute Library</a></li>
			 <li><a href="https://software.intel.com/content/www/us/en/develop/tools/oneapi/components/dpc-library.html" target="_blank"> DPC++ - Intel's implementation of SYCL</a></li>
			 <li><a href="https://developer.codeplay.com/products/computecpp/ce/home" target="_blank"> ComputeCPP - Codeplay's implementation of SYCL</a></li>
			 <li><a href="https://github.com/triSYCL/triSYCL" target="_blank"> triSYCL - Opensource SYCL implementation targeted towards Xilinx FPGAs</a></li>

	        </ol>     
	        </h3>
        
       	</div>
    
</div>
<div class="row">
				<div class="col-md-5 col-sm-5"></div>
				<div class="col-md-2 col-sm-2" style="padding:40px">
				<a href="./index_hpc.php" class="btn btn-default" style="border-color:#885104;border-style:solid">Back</a>
				</div>
				
			</div>
	</div>
<br>
<br>


<!-- footer section -->
<?php include '../footer.php';?>

</body>

</html>
