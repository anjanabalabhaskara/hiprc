<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include '../js/header.php';?>

<body>
	<!-- header section -->
	<div id="cpssecCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#cpssecCarousel" data-slide-to="0" class=""></li>
			<li data-target="#cpssecCarousel" data-slide-to="1" class="active"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="first-slide img-responsive" style="height: 500px" src="./images/config_fe.png" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Configuration front-end</h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="second-slide" style="height: 500px" src="./images/ana_fe.png" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Analysis Front-end</h1>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#cpssecCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#cpssecCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="container">
		<!-- <br> -->
			<!-- <hr class="divider-line"> -->
	<!-- </div> -->

	<!-- header section -->
	<div class="container text-center rounded_rectangle">
		<div class="row" style="padding:15px">
			<!-- <div class="col-md-12 col-sm-12"> -->
			<div class="hero-unit">
				<h1><span>GUI-driven Software Tool</span></h1>
			</div>
			<!-- </div> -->
		</div>
		<div class="row" style="padding:15px">
			<div class="col-md-12 col-sm-12 industry">
			<p style="text-align:justify">
					There is always a need to develop system specific software tools that would complement a CPS testbed by providing visual information overlay and appreciation to the user about the activity in the network, thereby abstracting implementation specific details. Similarly, at the heart of our proposed programmable testbed implementing an automated Multi-hop Wireless NCS (MCN), there is also a GUI-driven software tool-flow that facilitates visualization, scheduling, and analysis of MCN under various external non-idealities. The software application has been developed in <a href="https://www.qt.io/" target="_blank">Qt</a> framework to avail its cross platform compatibility under the GNU Lesser General Public License v.3 (LGPL). Binaries have been successfully generated and tested on the 64 bit Windows 7, Windows 10, and Linux (Ubuntu 16.04) platforms with minimal modification to the source.
			</p>
			<p style="text-align:justify">
					The feature that makes our testbed unique compared to existing ones is its easy-to-use GUI-based interface. Based on this GUI, the following tasks can be controlled: <em>1) Automatized CPS configuration, 2) generation of firmware for each node, 3) wireless deployment of the firmware onto each node, 4) real-time execution and orchestration of the CPS, and 5) data aggregation and visualization</em>. In other words, a user can specify its configuration in a simple fashion, and our tool will generate a CPS testbed realizing these specifications on-the-fly. This allows for studying CPS testbed configurations that are actually different CPS, while using one physical setup. With our approach, manually integrating plants, controllers and the communication network is no longer required.
			</p>
			<p style="text-align:justify">
					The core of our developed testbed is this software tool, which runs on a PC that is wirelessly connected to the CPS setup. Based on a CPS specification, which is given in terms of network parameters, control parameters and plant dynamics, our tool automatically generates and deploys the firmware of the individual nodes in the network. It thereby configures the nodes, as well as their network interfaces. The graphical user interface  
					(GUI) of the tool with functionalities can be broadly categorized in two modes: <b>1) Configuration and Firmware Generation</b> and <b>2) Data Analysis</b>.
			</p></b>
			</div>
		</div>
		<br>
		<hr class="divider-line">
	</div>

	<!-- projects section -->
	<!-- <div class="content text-center">
		<div class="container"> -->
			<!-- <div class="row " id="cpssec-topics">
				<div class="col-md-12 col-sm-12">
				<div class="header text-center">
					<h1>GUI-driven software tool</h1>
				</div>
				</div>
			</div> -->
			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#cpssec-topic1">
						<div class="header-content-container">
							<h2>Configuration and Firmware Generation<span class="caret"></span></h2>
						</div>
						<div class="collapse" id="cpssec-topic1">
							<div class="col-md-8 col-sm-8">
								<p class="text-justify"> The GUI-based front-end is used for specifying the CPS that is to be realized. The software tool provides an interface using which the user can enter the input specifications of the system, namely, the network topology, the network schedule, the reference values of the plant  output, and fault characterizations. As in the 'Configuration front-end' figure, The Region-A shows the basic user input window pertaining to the schedule length, number of nodes, and the type of fault distributions to be programmed in the nodes. Region-B is used to populate the network schedule for the control loops. The format for entering scheduling information within a slot is shown in the given figure, where schedule information for multiple channels are entered, tokenized using channel separator. Additional  configuration information such as packet  drop probabilities for individual nodes, reference values of the plants etc, are entered through Region-C.</p>
							</div>
							<div class="col-md-4 col-sm-4" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" src="./images/schInfoFormat.png" alt="schInfoFormat">
							</div>
						</div>
					</div>
				</div>
				<br>
				<!-- <hr class="divider-line"> -->
			</div>
			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#cpssec-topic2">
					<div class="header-content-container"><h2>Data Analysis<span class="caret"></span></h2></div>
					<div class="collapse" id="cpssec-topic2">
						<div class="col-md-12 col-sm-12">
							<p> After an experiment of the CPS has been carried out, the data is transmitted wirelessly to the PC and can then be analyzed using our software tool. Our tool orchestrates data collection and aggregation and provides functionality to visualize and analyze the CPS behavior. The front-end for data analysis is depicted in Analysis Front-end picture. The upper Part A visualizes the CPS. Suitable icons represent plants, intermediate nodes and controllers. On the left of the lower Part B, the user can select the point in time of the experiment to be examined. In the middle of Part B, a console depicts various messages. On the right of Part B, the Autoplay Settings allow for automatically advancing the point in time under consideration. This enables a record and playback - style of operation. The right Part C of the figure shows the internal state of each node at the point in time under consideration.</p>
						</div>
						<!-- <div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="/images/cps/puf.png" alt="puf">
						</div> -->
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>

			<hr class="divider-line">

			<div class="row">
				<div class="col-md-5 col-sm-5"></div>
				<div class="col-md-2 col-sm-2" style="padding:20px">
				<a href="./wncs_home.php" class="btn btn-default" style="border-color:#885104;border-style:solid">Back To WNCSs</a>
				</div>
				<div class="col-md-5 col-sm-5"></div>
			</div>
		</div>
	</div>


	<!-- footer section -->
	<?php include '../footer.php';?>


</body>

</html>