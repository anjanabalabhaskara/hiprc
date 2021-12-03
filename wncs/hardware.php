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
				<img class="first-slide img-responsive" style="height: 500px" src="./images/testbed_real_updated.png" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Wireless CPS Testbed</h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="second-slide" style="height: 500px" src="./images/testbed_graph.png" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Network Graph of the Testbed</h1>
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
		<!-- <br>
			<hr class="divider-line"> -->
	<!-- </div> -->

	<!-- header section -->
	<div class="container text-center rounded_rectangle">
		<div class="row" style="padding:15px">
			<!-- <div class="col-md-12 col-sm-12"> -->
			<div class="hero-unit">
				<h1><span>Testbed Implementation</span></h1>
			</div>
			<!-- </div> -->
		</div>
		<div class="row" style="padding:15px">
			<div class="col-md-12 col-sm-12 industry">
			<p style="text-align:justify">
					A networked CPS consists of multiple nodes with different roles (e.g., plant, controller, intermediate node, router, etc.), which all require  their customly developed firmware. Moreover, these nodes have to be interconnected through a wireless network, which requires further design effort.
			</p>
			<p style="text-align:justify">
					Our CPS hardware testbed can be developed with minimalistic development effort and is highly scalable. Extra hardware can be added or existing devices can be upgraded easily, without requiring a time-consuming software redesign. For example, a small network can be easily transformed into a larger network by adding additional nodes. The only required step is the GUI-driven configuration, specification and automated regeneration of the software. Furthermore, different network topologies, e.g., single- and multi-hop, can be generated easily.
			</p>
			<p style="text-align:justify">
					Each node in the network is formed by a widely-used Arduino UNO microcontroller, which is equipped with a nRF24L01+ RF module. Some of these nodes take over the role of a controller, whereas others are equipped with some physical setup to be controlled (the physical plant), or act as intermediate nodes that relay information. The firmware images are deployed over-the-air, which reduces the effort of testbed deployment.
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
					<h1>Testbed Implementation</h1>
				</div>
				</div>
			</div> -->
			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#cpssec-topic1">
						<div class="header-content-container">
							<h2>Plant Node<span class="caret"></span></h2>
						</div>
						<div class="collapse" id="cpssec-topic1">
							<div class="col-md-12 col-sm-12">
								<p class="text-justify"> We consider a Double Integrator Circuits (DIC) as the first physical plant supported by our testbed. It consists of two operational amplifiers (UA741) connected in series, thereby computing the integral over the integral of the input signal of the first amplifier. A complete plant block developed in our testbed, is shown in the given figures. It consists of a DIC, two level shifters, one voltage divider and a radio-frequency (RF) front-end. </p>
								<p class="text-justify"> The DIC model is realized with the UA741 as the Op-amps which produce a voltage range from +15V to -15V in output of DIC. Since the analog input pins on the microcontroller of the plant block can tolerate incident voltage in the range 0 - 5V, we need to scale the entire output range of DIC. The voltage divider divides the DIC's output voltage by factor of six to achieve the voltage range of [-2.5V,2.5V]. Next in lower level shifter they are added by 2.5V to make the incident voltage in the range 0 - 5V. To provide both positive and negative actuation values in the control input u, the range of 0-5V of control signal values received by plant Arduino and sampled at output pins D0-D7 are converted into the range [-2.5V,2.5V] in upper level shifter. The RF interface we choose for our testbed is the Nordic Semiconductors NRF24L01+ transceivers operating at the 2.4GHz ISM band. The SD interface used in the testbed is the generic SPI (Serial peripheral Interface) based SD module. The purpose of it is to provide persistent storage for various data. Both the RF transceiver and SD Interface communicate with microcontroller over SPI bus. </p>
								<img class="img-responsive" style="padding:0px 5px 0px 5px" src="./images/PlantBlock.png" alt="plantBlock">
							</div>
							<br>
							<div class="col-md-6 col-sm-6" style="padding:10px 5px 0px 20px">
								<img class="img-responsive" src="./images/voltageMapping.png" alt="voltageMapping">
							</div>
							<div class="col-md-6 col-sm-6" style="padding:10px 75px 0px 5px">
								<img class="img-responsive" src="./images/plantNode.png" alt="plantNode">
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
					<div class="header-content-container"><h2>Control and Intermediate Nodes<span class="caret"></span></h2></div>
					<div class="collapse" id="cpssec-topic2">
						<div class="col-md-7 col-sm-7">
							<p> The underlying hardware design for the controller as well as all intermediate nodes include a microcontroller, RF interface and SD module. The functionality of RF interface, and SD module is same as described for plant block. In intermediate nodes, the microcontroller is configured by the software tool to implement the buffers for storing and forwarding the plant output and control input between plants and controllers in their designated time slots as defined in the network schedules. The microcontroller in control node is programmed to receive respective plant outputs from the network, compute the control input using the associated control law and transmit it back over the network. The node implements a cyclo-static schedule executing controllers for different plants in a specific sequence.</p>
						</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="./images/CInode.png" alt="CInode">
						</div>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>
			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#cpssec-topic3">
					<div class="header-content-container"><h2>Global Clock Node<span class="caret"></span></h2></div>
					<div class="collapse" id="cpssec-topic3">
						<div class="col-md-7 col-sm-7">
							<p> The clock node consists of the same hardware and provides a clock signal to which all nodes are synchronized. With a period equivalent to the slot length, a clock signal is broadcasted to all nodes. In addition, the clock node is also responsible for orchestrating the collection of experimental data over the network.</p>
						</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="./images/gclock.png" alt="CInode">
						</div>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>
			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#cpssec-topic4">
					<div class="header-content-container"><h2>Communication Network<span class="caret"></span></h2></div>
					<div class="collapse" id="cpssec-topic4">
						<div class="col-md-12 col-sm-12">
							<p> Given the GUI-based CPS specification, firmware for each node is generated and deployed by the software tool. This firmware is also responsible for controlling the connectivity. The wireless communication is built on top of the Enhanced ShockBurst protocol, which operates in the ISM band (2.400 - 2.4835 GHz). We use an over-the-air data rate of 250 Kbit/s. As a congestion control mechanism, the NRF24L01P RF module implements up to 6 logical addresses (called pipes) for listening in parallel. A module can only transmit to one pipe at a time. In our setup, three pipes are maintained by each RF module for handling the global clock, plant/control and log data. Channel arbitration is done based on time-multiplexed media access. Time is subdivided into 10ms-slots and the clock node transmits a synchronization pulse to all nodes every 10ms. Upon receiving the clock pulse, each node first checks if there is any data to be processed. A node may initiate a transmission, whenever the current slot is assigned to this node for transmission. Similarly, a node will listen for incoming transmissions from other nodes during the appropriate slots. The clock node can also initiate data logging on a node, or request the transmission of the previously logged data.</p>
						</div>
						<!-- <div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="/wncs/images/gclock.png" alt="CInode">
						</div> -->
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>

			<hr class="divider-line">

			<div class="container " style= "padding: 50px; " >
    <div class="row">
        <div class="row text-center" style="padding:15px">
            <div class="header">
                <h1 ><span>Hardware Components</span></h1>
            </div>
        </div>
        <div class="container topic-desc">
            
                <div class="header-content-container">
                    <h2> Hardware <span class="caret"></span></h2>
                </div>
                <div class="col-md-6 col-sm-6">
                        <p>
                            <ul type="none">
                                <li style="color:red"> Arduino UNO </li>
                                <ul>
                                    <li>Microcontroller board based on the ATmega328P - 8 bit AVR family microcontroller</li>
                                    <li>Clock Speed - 16 MHz  </li>
                                    <li>SRAM - 2 KB (ATmega328P), EEPROM - 1 KB (ATmega328P)  </li>
                                    <li>Flash Memory - 32 KB (ATmega328P) of which 0.5 KB used by bootloader  </li>
                                    <li>Analog Input Pins - 6  </li>
                                    <li>Digital I/O Pins - 14 (of which 6 provide PWM output)  </li>
                                    <li>Heart of network nodes  </li>
                                    <li>Interface with RF and flash devices</li>
                                </ul>
                                <li style="color:red">nRF24L01+ RF Module</li>
                                    <ul>
                                    <li> RF transceiver IC for the 2.4GHz ISM (Industrial, Scientific, and Medical) band manufactured by <a href="https://www.nordicsemi.com/Products/Low-power-short-range-wireless/nRF24-series" target="_blank">Nordic Semiconductor</a></li>
                                    <li> Ultra low power operation and advanced power management</li>
                                    <li> 250kbps, 1Mbps, 2Mbps on air transmission data rates </li>
                                    <li> 3.3V Nominal Vcc (5V tolerant inputs) </li>
                                    <li> On-chip Voltage regulation and SPI interface</li>
                                    <li> Low current draw (900nA – 26μA) </li>
                                    <li> 6 data pipes and 32 bytes max payload size </li>
                                    <li> Highly configurable - Channel, ack, data rate, payload size </li>
                                    </ul>     
                                <li style="color:red">SD Flash interface</li>
                                    <ul>
                                    <li> SPI interface</li>
                                    <li> For saving network activity data within nodes</li>
                                    </ul>
                                <li style="color:red">DS3231 Precision RTC</li>
                                    <ul>
                                    <li> Low-cost, extremely accurate RTC chip from Maxim – DS3231</li>
                                    <li> Used for data-logging, clock-building, time stamping, timers and alarms</li>
                                    <li> Incorporates a battery input, and maintains accurate timekeeping during main power interruption</li>
                                    </ul>
                                
                            </ul>
                        </p>
                </div>
            
                <div class="col-md-3 col-sm-3" style="padding:7px 0px 0px 0px">
                        <img class="img-responsive" style="height: 260px; width: 280px" src="./images/arduinoUno.png" alt="arduinoUno">
                        <br>
                        <img class="img-responsive" style="height: 260px; width: 260px" src="./images/uno-rf.png" alt="uno-rf">
                        <br>
                        <img class="img-responsive" style="height: 265px; width: 260px" src="./images/sd.png" alt="sd">
                </div>

                <div class="col-md-3 col-sm-3" style="padding:7px 0px 0px 0px">
                        <img class="img-responsive" style="height: 260px; width: 275px" src="./images/nRF24.png" alt="nRF24">
                        <br>
                        <img class="img-responsive" style="height: 175px; width: 270px" src="./images/rf24l01p.png" alt="rf24l01p">
                        <br>
                        <img class="img-responsive" style="height: 350px; width: 270px" src="./images/ds3231.png" alt="ds3231">
                </div>
    
        </div>
    </div>
</div>

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