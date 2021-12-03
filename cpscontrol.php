<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include './header.php';?>

<body>
	<!-- header section -->
	<div class="container">
		<div class="row pagebanner" id="cpsconbanner">
			<div class="col-md-12 col-sm-12">
				<div class="hero-unit back-img-caption">
					<h1><span>Control-Scheduling Co-Design of CPS</span></h1>
					<p style="text-align:justify">The growing demand for mapping diverse embedded applications on shared processors has
						brought focus on control-scheduling co-design approaches. These co-design approaches address the joint optimization of control parameters (such as control performance) and scheduling parameters (such as resource utilization) while guaranteeing the timing properties of all software tasks, combining the knowledge of feedback control theory and real-time scheduling theory. In the	co-design context, to cope with multiple design trade-offs between control and platform parameters,	aperiodic execution of controllers has become a promising alternative to the traditional periodic
						executions.
					</p>
				</div>
			</div>
		</div>

		<br>
		<hr class="divider-line">

		<div class="row " style="padding:15px">
			<!-- <div class="col-md-12 col-sm-12"> -->
			<div class="header text-center">
				<h1><span>Research Topics</span></h1>
			</div>
			<!-- </div> -->
		</div>
		<!-- <div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#cpscontrol-topic1">
					<div class="header-content-container">
						<h2>???<span class="caret"></span></h2>
					</div>
					<div class="collapse" id="cpscontrol-topic1">
						<div class="col-md-7 col-sm-7">
							<p class="text-justify"> An adaptive
								scheduling framework for a set of control loops is developed by introducing the notion of loop
								execution patterns. A structured synthesis mechanism is proposed for generating such loop execution patterns
								under different input disturbance scenarios. The proposed synthesis methodology employs
								stable adaptive	switching between loop execution patterns for improved quality of control and resource
								utilization	while guaranteeing the schedulability of the loops.</p>
						</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="./images/cps/patswitch.png" alt="pattswitch">
						</div>
					</div>
				</div>
			</div>
			<br>
			<hr class="divider-line">
		</div> -->

		<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#cpscontrol-topic1">
					<div class="header-content-container">
						<h2 id="cpscontrol-topic1-header">
						<a href="#cpscontrol-topic1-header" id="topicLink" data-target="tooltip" title="copy link to topic">#</a>	
						Loop-skipping Pattern Synthesis Framework for CPS
						<a href="#cpscontrol-topic1-header" class="fa fa-angle-down" data-target="tooltip" title="copy link to topic" style="float:right" aria-hidden="true"></a>
						</h2>
					</div>
					<div class="collapse" id="cpscontrol-topic1">
						<div class="col-md-9 col-sm-9">
							<p class="text-justify"> An adaptive scheduling framework for a set of control loops is developed by introducing the notion of loop	execution patterns. A structured synthesis mechanism is proposed for generating such loop execution patterns under different input disturbance scenarios. The proposed synthesis methodology employs stable adaptive	switching between loop execution patterns for improved quality of control and resource	utilization	while guaranteeing the schedulability of the loops. This unique framework post-processes static schedules of a set of control loops is developed such that, combined control performance can be improved further. The proposed method instruments each loop to switch between multiple controllers by co-operatively sharing their execution slots. We develop a fault tolerant framework for synthesizing the specifications of a set of loop execution patterns, that are robust enough to guarantee the desired control performance under platform non-idealities. The synthesis process is developed leveraging the concept of bounded model checking for generating such robust specifications.	</p>
						</div>
						<div class="col-md-3 col-sm-3" style="padding:20px 5px 20px 5px">
							<img class="img-responsive" src="./images/cps/patswitch.png" alt="pattswitch">
						</div>
					</div>
				</div>
			</div>
			<br>
			<!-- <hr class="divider-line"> -->
		</div>


		<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#cpscontrol-topic2">
					<div class="header-content-container">
						<h2 id="cpscontrol-topic2-header">
						<a href="#cpscontrol-topic2-header" id="topicLink" data-target="tooltip" title="copy link to topic">#</a>	
						Co-design of Fault Tolerent Networked CPS 
						<a href="#cpscontrol-topic2-header" class="fa fa-angle-down" data-target="tooltip" title="copy link to topic" style="float:right" aria-hidden="true"></a>
						</h2>
					</div>
					<div class="collapse" id="cpscontrol-topic2">
						<div class="col-md-7 col-sm-7">
							<p class="text-justify"> A co-design framework to synthesize a co-schedulable combination of loop execution patterns for a set of control loops over a shared wireless multi-hop control network, along with their associated routing solution is developed such that, overall control performance gets optimized. The proposed framework is also shown to be useful for evaluating the fault tolerance of a resource-constrained shared network subject to communication link failures. More about this on <a href="./mcn/mcn_home.php">Wireless Multihop Control Design page</a>.</p>
						</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="./images/cps/netcps.png" alt="netcps">
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<hr class="divider-line">

		<div class="row">
				<div class="col-md-5 col-sm-5"></div>
				<div class="col-md-2 col-sm-2" style="padding:20px">
				<a href="./cps.php#cps-research" class="btn btn-default" style="border-color:#885104;border-style:solid">Back To CPS</a>
				</div>
				<div class="col-md-5 col-sm-5"></div>
			</div>
	</div>
	</div>

	<!-- publication section -->
	<!-- <div class="content text-center">
		<div class="container" id="publications">
			<div class="row " style="padding:15px">
				<div class="col-md-12 col-sm-12">
				<div class="header">
					<h1><span>Publications</span></h1>
				</div>
				</div>
			</div>
			<div class="row" style="padding:15px">
				<span> All publications are listed in <a href="\publication.php">publications</a> tab. The <span class="label label-primary">CPS</span> marked ones are CPS related research papers. </span>
			</div>
			<br>
			<hr class="divider-line">
		</div>
	</div> -->

	<!-- industry section -->
	<!-- <div class="content text-center">
		<div class="container" id="industry">
			<div class="row " style="padding:15px">
				<div class="col-md-12 col-sm-12">
				<div class="header">
					<h1><span>Industry Affiliations</span></h1>
				</div>
				</div>
			</div>
			<div class="row" style="padding:15px">
			<div class="col-md-3 col-sm-3 logo_helper">
					<span><img class="img-responsive" src="./images/intel.png"></span>
				</div>
				<div class="col-md-3 col-sm-3 logo_helper">
					<span ><img class="img-responsive img-rounded" src="./images/industries/bosch.png"></span>
				</div>
				<div class="col-md-3 col-sm-3 logo_helper">
					<span><img class="img-responsive" src="./images/industries/tatamotors.png"></span>
				</div>
				<div class="col-md-3 col-sm-3 logo_helper">
					<span><img class="img-responsive" src="./images/qualcomm.png"></span>
				</div>
			</div>
		</div>
	</div> -->

	<!-- footer section -->
	<?php include './footer.php';?>


</body>

</html>