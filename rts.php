<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include './header.php';?>

<body>
<!-- header section -->
	<div id="cpssecCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#cpssecCarousel" data-slide-to="0" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item">
				<img class="first-slide" style="height: 500px" src="./images/rts/fullcar.png" alt="First slide">
			</div>
			<div class="item active">
				<img class="second-slide" style="height: 500px" src="./images/rts/intraVehicularNetwork.jpg" alt="Second slide">
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
				<h1><span>Automotive Systems</span></h1>
			</div>
			<!-- </div> -->
		</div>
		<div class="row topic-desc" style="padding:15px">
			<p><span>
					Automotive system consists of multiple subsystems and standalone Electronic Control Units (ECUs) overlooking functionality 
					of each subsystem is gradually replaced by a E/E System Architecture of distributed system of ECUs 
					networked together to fulfil the application requirement. Automotive industry is also adapting 
					and working continuously to meet the regulatory safety standards. With the advent of futuristic
					 innovations like Electric vehicle, Connected car, Self-driving Advanced Driver-Assistance Systems,
					 the complexity of the system, number of ECUs and in-vehicle networking is increasing exponentially.
					We are working on various problems
					related to distributed system scheduling, networking,
					verification and validation with Hardware in Loop (HIL) in the automotive domain.
				</span></p>
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
					<h1><span>Research Topics</span></h1>
				</div>
				<!-- </div> -->
			</div>

			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#auto-topic1">
						<div class="header-content-container">
							<h2> Formal verifcation of automotive network routing and scheduling <span
									class="caret"></span></h2>
						</div>
						<div class="collapse" id="auto-topic1">
							<div class="col-md-7 col-sm-7">
								<p class="text-justify">
									Automotive system consists of distributed system interconnected by an in-vehicle network
									with different technologies. Depending upon the routing and the traffic the messages have different latencies.
									To guarentee the functionality of critical software task it is essential to formally verify the latency to ensure the
									stability.
								</p>
							</div>
							<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" src="./images/rts/arch.png" alt="architecture">
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<hr class="divider-line">
			</div>

			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#auto-topic2">
						<div class="header-content-container">
							<h2>Safety and robustness analysis of automotive safety critical softwares<span
									class="caret"></span></h2>
						</div>
						<div class="collapse" id="auto-topic2">
							<div class="col-md-7 col-sm-7">
								<p>A contemporary vehicle can be thought of as a collection of cyber-physical systems (CPS) working together to provide <strong>(i)</strong> safety and comfort to the occupants, <strong>(ii)</strong> efficient performance in terms reduced energy consumption and <strong>(iii)</strong> entertainment as well. However, this have only been possible at cost of more attack surfaces. Ample number of literature can be found where researchers have exploited these attack surfaces to launch <a href="https://rtcl.eecs.umich.edu/rtclweb/assets/publications/2016/ktcho_busoff_CCS_16.pdf">denial-of-service </a>, <a href="https://users.ece.cmu.edu/~vsekar/Teaching/Spring20/18731/reading/Autosec1.pdf">false data injection</a>, <a href="https://ieeexplore.ieee.org/document/1386610">replay</a> attacks. We focus on developing verification methods that analyse if automotive CPSs ensure safety in the presence of an adversary. </p>

							</div>
							<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" src="./images/rts/auto.jpg" alt="auto">

							</div>
						</div>
					</div>
				</div>
				<br>
				<!-- <hr class="divider-line"> -->
			</div>

			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#auto-topic3">
						<div class="header-content-container">
							<h2>Light weight security mechanism design for automotive CPS<span class="caret"></span>
							</h2>
						</div>
						<div class="collapse" id="auto-topic3">
							<div class="col-md-9 col-sm-9">
								<p>The safety critical control softwares (for example <a href="https://en.wikipedia.org/wiki/Electronic_stability_control">Vehicle Stability Control </a>, <a href="https://en.wikipedia.org/wiki/Anti-lock_braking_system#:~:text=An%20anti%2Dlock%20braking%20system,contact%20with%20the%20road%20surface.">Anti-lock Braking System </a>, <a href="https://en.wikipedia.org/wiki/Adaptive_cruise_control"> Adaptive Cruise Control </a> etc) in a modern-day car need to operate in real time. Moreover, connectivity to internet via various open ports have made these in-vehicle control systems vulnerable to both outside and inside attackers. Due to limited communication bandwidth and light weight nature of the Electronic Control Units (ECU) of a car, it is infeasible to secure every packet transmitted among the ECUs. In such cases, light weight <a href="https://www.cs.unc.edu/~reiter/papers/2011/TISSEC2.pdf"> residue-based detectors </a> where anomalies are detected based on some pre-defined threshold, seem a promising solution. However, they suffer from false alarms. We work on designing such light weight intelligent attack detectors leveraging the concept of residue-based detectors that would ensure identification of even small attack effort as well as reduction of false alarm (for example <a href="https://ieeexplore.ieee.org/document/9116211"> variable threshold-based detector</a>) in  distributed automotive CPSs. </p>
							</div>
							<div class="col-md-3 col-sm-3" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" src="./images/rts/threshold.png" alt="threshold">

							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<!-- <hr class="divider-line"> -->
		</div>
	</div>

	<!-- resources section -->
	<div class="content text-center">
		<div class="container">
			<div class="row " style="padding:15px">
				<!-- <div class="col-md-12 col-sm-12"> -->
				<div class="header">
					<h1><span>Research Facilities</span></h1>
				</div>
				<!-- </div> -->
			</div>

			<div class="row">
				<div class="container topic-desc">
						<div class="header-content-container">
							<h2> Hardware <span class="caret"></span></h2>
						</div>
						<div class="col-md-9 col-sm-9">
								<p>
									<ul type="none">
										<li>Infineon Tricore Starter Kit TC2xx</li>
										<li>Infineon Tricore Evaluation Kit TC3xx</li>
										<li>Infineon Ethernet Gateway Evaluation Board</li>
										<li>ETAS Desk Labcar</li>
										<li>Zynq FPGA board</li>
										<li>Lauterbach Debugger</li>
									</ul>
								</p>
						</div>

						<div class="col-md-3 col-sm-3" style="padding:7px 0px 0px 0px">
								<img class="img-responsive" src="./images/rts/etaslabcar.jpg" alt="labcar">
						</div>

				</div>
			</div>
			<br>
			<div class="row">
				<div class="container topic-desc">
						<div class="header-content-container">
							<h2> Software <span class="caret"></span></h2>
						</div>
						<div class="col-md-9 col-sm-9">
							<p ">
							<ul type = " none">
								<li>ETAS-INCA Calibration Software</li>
								<li>ETAS-AUTOSAR</li>
								<li>ETAS-COSYM</li>
								<li>Tasking Compiler</li>
								<li>IPG Carmaker (Office and HIL version)</li>
								</ul>
							</p>
						</div>
				</div>
			</div>
			<br>

			<hr class="divider-line">
		</div>
	</div>

	<!-- footer section -->
	<?php include './footer.php';?>

</body>

</html>
