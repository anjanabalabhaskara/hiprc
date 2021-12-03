<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include '../js/header.php';?>

<body>


	<div class="container text-center rounded_rectangle" style="margin-top:60px">
		<div class="row" style="padding:15px">
			<!-- <div class="col-md-12 col-sm-12"> -->
			<div class="hero-unit">
				<h1><span> An automated building thermal model generator and HVAC control performance simulation tool</span></h1>
			</div>
			<!-- </div> -->
		</div>
		<div class="row" style="padding:15px">
			<img class="one" src="./images/toolflow.jpeg" width="700" height="400" alt="HVAC">
		</div>
		<div class="row topic-desc" style="padding:15px">
			<p><span>

				The efficiency of HVAC control design depends on the accuracy of the building thermal model. However, the accuracy of such model depends on the detailed architectural knowledge of the building. Given the current landscape of available building performance simulation tools and technologies, there is possibly a lack of integration between building specification tools and building energy consumption analysis tools. In order to minimize the difference between the estimated thermal energy consumption of buildings and real-time measurements of the same, the thermal models used in building energy simulators need to be faithful representations of real building structures. Moreover, creating a building description is non-trivial for a system level co-design and simulation expert, potentially an HVAC designer working for a building operator.

				In order to address this issue, we provide an automated building thermal model generator interface as part of our tool framework which can take building descriptions, as input, in gbXML which is an industry standard format used by popular building design tools to store designs created by building architects. In that way, our framework can interface with popular building design and modeling tools, generate detailed thermal models from gbXML data and make them available for demand allocation aware HVAC control design. In prior works in the domain of energy efficient building HVAC simulation, the idea of co-designing the building resource allocation and HVAC control algorithm is not explored as part of a unified CAD flow. This is exactly where the present work assumes significance.

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
					<h1><span>Tool Description</span></h1>
				</div>
				<!-- </div> -->
			</div>
			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj1-description">
					<div class="header-content-container"><h2>Inputs<span class="caret"></span></h2></div>
					<div class="collapse" id="proj1-description">
							<p class="row topic-desc"> 

								Building Architectural Specification[<a href="./images/Office.xml" download ="Office.xml">Sample Format</a>]
							</p>
							<p class="row topic-desc"> 
								HVAC System Design Information[<a href="./images/HVACdesign.txt" download ="HVACdesign.txt">Sample Format</a>]
							</p>
							<p class="row topic-desc"> 
								Building Usage Demands[<a href="./images/demand_list.txt" download ="demand_list.txt">Sample Format</a>]
							</p>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>

			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj2-description">
					<div class="header-content-container"><h2>Outputs<span class="caret"></span></h2></div>
					<div class="collapse" id="proj2-description">
							<p class="row topic-desc"> 

								Demand to Zone Allocation[<a href="./images/allocation_list.txt" download ="allocation_list.txt">Sample Format</a>]
							</p>
							<p class="row topic-desc"> 
								Building Temperature Control Statistics
							</p>
							<p class="row topic-desc"> 
								HVAC Power Requirement & Energy Consumption Statistics
							</p>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>


			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj3-description">
					<div class="header-content-container"><h2>Software Dependency<span class="caret"></span></h2></div>
					<div class="collapse" id="proj3-description">
							<p class="row topic-desc"> 
									Python 2.7
							</p>
							<p class="row topic-desc"> 
									Matlab (checked with R2015b, may compatible with newer version)
							</p>
							<p class="row topic-desc"> 
									UPPAAL CORA (<a href="http://people.cs.aau.dk/~adavid/cora/introduction.html">Install</a>)
							</p>
							<p class="row topic-desc"> 
									OpenModelica (<a href="https://openmodelica.org/">Install</a>)	
							</p>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>


			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj4-description">
					<div class="header-content-container"><h2>Tool FLow<span class="caret"></span></h2></div>
					<div class="collapse" id="proj4-description">
							<p class="row topic-desc"> 

								<ul>
									<li>
										We provide a front-end parser (<a href="./images/1_gbXMLParser.py" download ="XMLParser.py">Sample Code</a>) which takes as input building information stored in a industry standard building description schema gbXML (<a href="./images/Office1.xml" download ="Office.xml">Sample Building Architecture</a>, <a href="./images/LAYOUT_Office.txt" download ="LAYOUT_Office.txt">Description</a>). Using this as input our tool automatically generates building thermal models encoded in the Modelica language (<a href="./images/Office.mo" download ="Office.mo">Sample Output</a>). These building thermal models can be simulated (required model like Room, Partition_EX, Partition_IN etc. See <a href="HVAC_Download.php">Download</a> ) in the open source OpenModelica environment. In that way, our framework can process the design storage format of many well known building architecture design tools.
									</li>
									<br>
										<li>
										In the next step, the Modelica based building thermal model is combined with an HVAC model in order to create a closed-loop system model. The HVAC model is generated by integrating available AHU components from the Openmodelica ‘Building library’ with the generated building thermal model.
									</li>
									<br>
										<li> 
										Using the Building Usage Demands and HVAC System Design Information, the tool generates LPTA models (<a href="./images/new.xml" download ="new.xml">Sample Model</a>, <a href="./images/hvac.q.txt" download ="hvac.q.txt">Query</a>, <a href="./images/command.txt" download ="command.txt">Command</a>) for cost optimal reachability analysis in the UPPAAL CORA environment. The output of this phase is the Zone occupancy information which is used to calculate the interval based building load and on/off schedule of AHUs.
									</li>
									<br>
										<li>
										We provide a front-end parser (<a href="./images/1_gbXMLParser.py" download ="XMLParser.py">Sample Code</a>) which takes as input building After cooling load assignment to different thermal zones, the tool extracts the dynamical system equations from the Modelica model and generates the underlying plant model which is used for control design using suitable MATLAB routines.
									</li>
								</ul>

							</p>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->

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
