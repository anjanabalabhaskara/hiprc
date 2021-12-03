<!DOCTYPE html>
<html lang="en">
<style>
div.a {
  text-align: center;
}

div.b {
  text-align: left;
}

div.c {
  text-align: right;
} 

div.d {
  text-align: justify;
} 
</style>

<!-- header section -->
<?php include '../js/header.php';?>

<body>


	<div class="container text-center rounded_rectangle" style="margin-top:60px">
		<div class="row" style="padding:15px">
			<!-- <div class="col-md-12 col-sm-12"> -->
			<div class="hero-unit">
				<h1><span> Privacy Preserving Smart Grid Information Flow </span></h1>
			</div>
			<!-- </div> -->
		</div>
		<div class="row" style="padding:15px">
			<img class="one" src="./images/GridPrivacy.png" width="500" height="400" alt="privacybanner">
		</div>
		<div class="row topic-desc" style="padding:15px">
			<p><span>

				A Smart Grid is a large scale Cyber Physical System comprising generation, distribution systems, metered loads, system state sensors and support for multiple real time communication protocols. Given the exponential growth of electricity consumption, modern grid systems implement sophisticated energy management and load balancing systems. Smart meter fulfills these expectations and provides a greater value for both supplier and customer sides. Smart meters and customers are some of the essential components of a smart grid to maintain a bi-directional flow of electricity and informative data for different operational purposes such as managing energy usage, timely billing, failure detection, demand response, load monitoring etc. The figure shows a Smart Grid architecture example employing an IEEE 9-bus power system model along with pricing as well as metering loops. The design and implementation principles of this kind of Cyber Physical System (CPS) are significantly different from other embedded systems because of the tight coupling of real valued and dense time system dynamics with software based discrete automated control. 
			</span></p>
			<p><span>
				<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj1213-description">

			<div class="header-content-container"><h2>Read More<span class="caret"></span></h2></div>
					<div class="collapse" id="proj1213-description">
							<p class="text-justify"> 	In available  literature, people usually concentrate on separate control planes of the grid; either the power network or the communication network or a combination of both for satisfying different control objectives like economic dispatch, privacy aware metering, pricing  control and demand response. However, for considering the security perspective, the interaction of these loops need to be modeled, an aspect we bring in for the our current work. In the figure, the dotted red lines display the vulnerable attack channels of this architecture. Minor tempering of control signals in such systems can lead to blackout of grid infrastructure. Also, on the other hand, various studies have shown that  the closed loop formed by the real-time pricing signals and  (semi-)automated/manual demand response by consumers, appliances and lower level distribution frameworks can be exploited by an adversary to destabilize the control objective of pricing schemes. Small malicious modifications to the price signals or the demand can be continuously amplified in the closed loop to trigger grid inefficiency and cascaded failures leading to  blackouts. Smart Grid  communication infrastructure supports very low  bandwidth, thus high-end cryptographic security solutions are  unsuitable for such systems. This motivates approaches for lightweight privacy-preserving smart meter data streaming. Moreover, the effect of such techniques on real time  electricity pricing is also something worth exploring since pricing signals operate in closed loop with user consumption patterns and adversarial attacks on such signals can potentially destabilise real time pricing algorithms causing huge financial loss to the utility provider. Our present work outlines a road map for verifiable privacy preserving data streaming protocol design given a formalized definition of privacy and usability of smart meter data. The robustness of such protocols is further tested in our work with Machine Learning based attacks which attempt to reverse engineer the data streams. Also we further study the effect of privacy transformations in the context of pricing loop sensitivity.</p>
					</div>
				</div>
						</div>
				</div>
						</div>

			 
<!-- 			</span></p>
			</span></p> -->
				

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
				<div class="header">
					<h1><span>Research Topics</span></h1>
				</div>
				<!-- </div> -->
			</div>


			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj1-description">
					<div class="header-content-container"><h2>Privacy Preserving Smart meter Streaming<span class="caret"></span></h2></div>
					<div class="collapse" id="proj1-description">
							<div class="col-md-7 col-sm-7">
							<p class="text-justify" style="padding:0px 0px 0px 0px"> 
							 We propose various attack algorithms that can fetch the original input readings from the privacy preserved smart meter output streams with a very low guessing entropy. We follow this up by showing that each appliance's information leakage can be predicated with high accuracy from the obtained input readings. Thenceforth we propose new privacy preserving smart meter streaming algorithms to disguise appliance's usage patterns to mitigate such kind of attacks without violating the utility-privacy tradeoff. We support our claims by providing generic proofs and conducting experiments to evaluate our attack algorithm on real life dataset. Eventually we show the feasibility of our proposed privacy preserving scheme by executing it in our in-house Advanced Metering Infrastructure setup and Hardware in Loop Simulator.</p>
							</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img  style="height:100%;width:100%" src="./images/privacyWebpageNew.png" alt="pattswitch">
						</div>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>


			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj4-description">
					<div class="header-content-container"><h2>Verifiable Protocol Design <span class="caret"></span></h2></div>
					<div class="collapse" id="proj4-description">
							<div class="col-md-7 col-sm-7">
							<p class="text-justify" style="padding:0px 0px 0px 0px"> 
							Absence of formal proofs in  privacy solutions  is a matter of concern even after learning a set of parameters which seem to satisfy privacy requirement for most input cases. We propose formal and mathematical protocol verification techniques for both cryptographic and non-cryptographic schemes. Formal encoding of non-cryptographic privacy preserving transformation protocols can be proved to be mathematically secure with the use of popular interactive theorem provers (like Coq) which allow for the expression of mathematical assertions, proofs of these assertions and extraction of a certified program from the constructive proof of its formal encoding. Other flavours of formal techniques can also be explored in this context.  More specifically, mathematical definition of cryptographic protocols can be established as secure by expressing them in domain specific formal languages, encoding the target privacy properties and using associated engines for model checking, static analysis, observational equivalence etc for establishing provable privacy. In this context we propose examining the usability of formal engines like Coq, ProVerif & Cryptol as theorem prover and protocol verifier systems. </p>
							</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="./images/VerifiableProtocoldesign.png" alt="pattswitch">
						</div>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>



			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj2-description">
					<div class="header-content-container"><h2>Machine Learning techniques for protocol robustness<span class="caret"></span></h2></div>
					<div class="collapse" id="proj2-description">
						<p class="text-justify" style="padding:0px 0px 0px 0px"> 
							 <div class="col-md-7 col-sm-7">						
							 We work on establishing Machine Learning based tool flow for automated robustification of a privacy preserving transformation protocol. Our proposed tool is used to check system specific protocol robustness using ML classifiers. From given system specification and requirements, the proposed methodology will try to find a choice of privacy parameters satisfying system privacy criteria by iteratively tuning the privacy parameters in a closed loop. Essentially, the ML classifier learns whether a given parameterized version of the privacy algorithm is ensuring a privacy requirement for different input streams. Based on the feedback
							it tunes the privacy parameters of such a scheme and saturates finally to a privacy parameter setting which the classifier deems fit for privacy implementation.   

							Again Instead of verifying the privacy constraint in each iteration, alternatively we can train a classifier to determine whether the privacy is maintained separately after the output sequence is generated. Based on the result of the classifiers we can divide the pattern in different clusters. For example, the pattern type can be windows of time that exhibit common classification results. These classification results can later be used to change or modify the HVAC controller accordingly by compromising the comfort factor. 
							</p>
							</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="./images/MachineLearning.png" alt="pattswitch">
						</div>
					<!-- 	</div> -->
					</div>
				</div>
			</div>
			</div>
			<br>
			<!-- <hr class="divider-line"> -->
		</div>

		<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj3-description">
					<div class="header-content-container"><h2>Privacy preserved stable Real-Time Pricing (RTP) <span class="caret"></span></h2></div>
					<div class="collapse" id="proj3-description">
						<!-- <div class="col-md-7 col-sm-7"> -->
							<p class="text-justify"> Real-time pricing algorithms operate in closed loop with demand response systems and actual consumers.  The sensitivity of such systems to  uncertain behaviours can be easily exploited by any adversary to destabilize the RTP system by introducing classes of integrity attacks, namely, the scaling and delay attacks. Simultaneously Smart Grid data aggregation and dynamic pricing schemes still lacks security and privacy measures to ensure the integrity and authenticity of their communication data. These vulnerabilities may bring down the whole system exploiting the  iterative feedback. Also existing pricing schemes work with original pricing and consumption signals thus violating consumers privacy. This brings out the trade-off between privacy and stability of the pricing loop in Smart grids, an area where the bounds for privacy and pricing control performance  are not established. our objective is to establish pricing algorithms which provide provable performance guarantee in the presence of privacy transformed data streams. </p>
						<!-- </div> -->
					</div>
					</div>
				</div>
			</div>

			<br>
			<hr class="divider-line">


		<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj6-description">
					<div class="header-content-container"><h2>Laboratory Hardware Setup<span class="caret"></span></h2></div>
					<div class="collapse" id="proj6-description">
							<div class="col-md-7 col-sm-7">
							<p class="text-justify" style="padding:0px 0px 0px 0px"> 
							Our lab's HIL testbed setup shown in the figure consists of an Opal-RT simulator,  two Phasor Measurement Units (PMUs), one Phasor Data Concentrator (PDC), a Global Positioning System (GPS) clock and an automation controller. The PMU used in the setup will operate on the power samples and measures the phasor to time. With these measurements, an operator can determine the phase relationship at different geometric locations on the grid.  The visualization software Sychro WAVE Central collects the data from the PDC and displays it over the monitor. The data communication related to synchronized phasor measurements is done using C37.118 standard with TCP as the transmission protocol.  </p>
							<p class="text-justify" style="padding:0px 0px 0px 0px"> 
							Opal-RT simulator capable of simulating the power system model generated from SimScape/Simulink. A Simulink model of power grid infrastructure is designed and uploaded to the simulator via RT-Lab Software. The model running on the simulator generates a low voltage signal (-16V to +16V) at the output. For those devices which require more power, an amplification of the signal is required with the help of V/I power amplifier. The PMU enables measurement of various electrical parameters (phasors) in various power bus in the grid. The communication network uses standard IEEE C37.118, IEC- 61850 along with traditional Supervisory Control and Data Acquisition (SCADA) protocols such as Modbus, DNP3 for data transmission relevant for power grid applications. The values measured by these field sensors (PMUs) are then sent to control centres based on the application. Our testbed enables the hardware in loop simulation of various grid models with various control algorithms and assessment of various threats associated with them.
 							</p>
 							<p class="text-justify" style="padding:0px 0px 0px 0px"> 
 								Simultaneously we have an Advanced Metering Infrastructure (AMI) set up in our lab. The AMI setup is used to show the real-time power signals from either a power system simulator or a real-life appliance. The AMI setup consists of two three-phase power meters, one Ethernet Gateway, one GPRS modem and a Network Manager. The power meters are configured to be accessed from an EMS server. The EMS server, Network Manager and the power meter PM5320 is connected with an Ethernet Switch. Meter PM5320 is configured for a TCP/IP communication with the EMS server whereas the meter PM5330 is capable of having Modbus communication via RS485 port. This AMI setup integrated with our HIL setup can be used to take care of the data communication plane of the smart grid infrastructure. We have also procured a CompactRIO in our Laboratory setup. CompactRIO is used as a real-time embedded controller which can be connected with a host system to supervise grid control plane and display logged data.  
 							</p>
							</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="./images/rack_new.jpg" alt="pattswitch">
						</div>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>




			<br>
			<hr class="divider-line">


			<div class="row">
				<div class="col-md-5 col-sm-5"></div>
				<div class="col-md-2 col-sm-2" style="padding:20px">
				<a href="./index_grid.php#SmartGridresearch" class="btn btn-default" style="border-color:#885104;border-style:solid">Back To Smart Grid</a>
				</div>
				<div class="col-md-5 col-sm-5"></div>
			</div>
		</div>



	</div>




<!-- footer section -->
<?php include '../footer.php';?>

</body>
</html>
