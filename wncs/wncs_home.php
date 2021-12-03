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
			<li data-target="#cpssecCarousel" data-slide-to="1" class=""></li>
			<li data-target="#cpssecCarousel" data-slide-to="2" class=""></li>
			<li data-target="#cpssecCarousel" data-slide-to="3" class=""></li>
			<li data-target="#cpssecCarousel" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="first-slide" style="height: 500px" src="./images/iitkgpcse.png" alt="First slide">
			</div>
			<div class="item">
				<img class="second-slide" style="height: 500px" src="./images/RealPlantsNetwork.png" alt="Second slide">
			</div>
			<div class="item">
				<img class="third-slide" style="height: 500px" src="./images/deoxidization_wireless.png" alt="Third slide">
			</div>
			<div class="item">
				<img class="fourth-slide" style="height: 500px" src="./images/overview.png" alt="Third slide">
			</div>
			<div class="item">
				<img class="fifth-slide" style="height: 500px" src="./images/testbed_1.jpg" alt="Third slide">
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

	<!-- header section -->
	<div class="container text-center rounded_rectangle">
		<div class="row" style="padding:15px">
			<!-- <div class="col-md-12 col-sm-12"> -->
			<div class="hero-unit">
				<h1><span>Wireless networked control systems (WNCSs)</span></h1>
			</div>
			<!-- </div> -->
		</div>
		<div class="row" style="padding:15px">
			<div class="col-md-12 col-sm-12 industry">
			<p style="text-align:justify">
					The proliferation of Cyber-Physical Systems (CPS) has been a matter of increased convenience in modern  safety critical systems engineering. The underlying architecture of most CPS implementations is essentially a Networked Control System (NCS) with complex software implementations for signal processing,  on-board prognostics, health-monitoring and other related performance, safety and intelligence features. The backbone of a Networked Control System has been the wired media for a major part of last decades. Slowly but steadily, the spread of control networks over wider areas and advancement in wireless networking hardware and signal processing techniques has attracted attention for its use in industrial and non-industrial applications. A WNCS is a distributed system of sensor nodes and actuator nodes that are interconnected over wireless links. Sensors gather information about the physical world, e.g., the environment or physical systems, and transmit the collected data to controllers/actuators through single-hop or multi-hop communications. Enabling control over multi-hop wireless networks creates the so-called multi-hop control networks that are representative of wireless networked control systems. The control and feedback signals are exchanged in the form of information packets over a shared wireless medium, thereby closing a global control loop. Multi-hop network based control of physical systems is becoming increasingly common in the modern world owing to the ability of low-cost sensing, fast transfer of data and low-power implementation of control commands. Several modern applications  like robotic swarm co-ordination and motion control which would earlier be limited in range and functionality due to hardware and networking limitations in terms of computation and communication are now possible in this new era of edge devices with computing and transmit capabilities.
			</p>
			<p style="text-align:justify">
					However, such an ambition for fast monitoring and control in a WNCS requires support for  wireless communication infrastructure  with reliability and timing guarantee so that necessary real-time properties of the system are maintained. Such properties, like the minimum required rate of control actuation in terms of packet delivery sequence are key to the safety, performance and stability of such  systems.
			</p>
			<p style="text-align:justify">
					With these in consideration, We, a team of research scholars along with grad students from various disciplines, do research on related existing issues involving quality of service (QoS), reliability and delay of control-packet transmission for achieving the optimal control performance in WNCS. We also work on hierarchical control architectures for adaptively regulating the communication schedule of a multi-hop control network. To validate our ideas of adaptive real-time network scheduling and platform parameter tuning, we have implemented a novel  programmable hardware-software co-designed testbed for the same.
			</p>
			</div>
		</div>
		<br>
		<hr class="divider-line">
	</div>

	<!-- projects section -->
	<div class="content text-center">
		<div class="container">
			<div class="row " style="padding:15px">
				<!-- <div class="col-md-12 col-sm-12"> -->
				<div class="header center">
					<h1><span>Research Themes</span></h1>
				</div>
				<!-- </div> -->
			</div>

			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#auto-topic1">
						<div class="header-content-container">
							<h2> Designing Distributed Scheduling Techniques for Multi-hop Control Networks
								<span class="caret">
							</span></h2>
						</div>
						<div class="collapse" id="auto-topic1">
							<div class="col-md-7 col-sm-7">
								<p class="text-justify">
									Realizing closed-loop control over multi-hop wireless networks becomes particularly challenging with state-of-the-art wireless technologies (e.g. WirelessHART, ZigBee and ISA100.11a) due to the limitations in meeting the stringent communication requirements of closed-loop control applications. In Centralized Multi-hop Scheduling, the controller is responsible for schedule construction, and it has the global knowledge of network topology. But, owing to the overhead of obtaining topological information and the cost of installing the schedule, the centralized approach is not scalable. Hence, Distributed Scheduling techniques are more attractive from a practical perspective.
								</p>
							</div>
							<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" src="./images/mcnsh.png" alt="architecture">
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<!-- <hr class="divider-line"> -->
			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#auto-topic2">
						<div class="header-content-container">
							<h2>Adaptive Feedback Strategies for WNCSs with Large Delay Variations
								<span class="caret"></span></h2>
						</div>
						<div class="collapse" id="auto-topic2">
							<div class="col-md-7 col-sm-7">
								<p> Wireless multi-hop control networks (MCN) facilitate real-time monitoring and control for a significant class of distributed cyber-physical systems. While MCNs help in achieving wide-area coverage, such deployments need to guarantee stability and real-time performance in the presence of time-varying network delays in each hop. It is even more challenging to implement a fast feedback control when there is a large variation in the end-to-end network delay. </p>

							</div>
							<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" src="./images/rt1.png" alt="auto">

							</div>
						</div>
					</div>
				</div>
				<br>
				<!-- <hr class="divider-line"> -->
			</div>
		</div>
	</div>

	<!-- resources section -->
	<div class="divider">
		<div class="container" id="cps-research">
			<div class="row " style="padding:15px">
				<div class="col-md-12 col-sm-12">
					<div class="header-content-container">
						<h1><span>Research Facilities</span></h1>
					</div>
				</div>
			</div>
			<div class="row" style="padding: 20px;">
				<div class="col-md-6 col-sm-6" style="padding:15px">
					<div class="divider-wrapper divider-one">
						<i class="fa fa-laptop"></i>
						<h2>Software Tool</h2>
						<a href="./software.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6" style="padding:15px">
					<div class="divider-wrapper divider-two">
						<i class="fa fa-cogs"></i>
						<h2>Hardware Testbed</h2>
						<a href="./hardware.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
			<div class="col-md-5 col-sm-5"></div>
			<div class="col-md-2 col-sm-2" style="padding:20px">
				<a href="../cps.php#cps-research" class="btn btn-default"
					style="border-color:#885104;border-style:solid">Back To CPS</a>
			</div>
			<div class="col-md-5 col-sm-5"></div>
		</div>
	<?php include '../footer.php';?>

</body>

</html>
