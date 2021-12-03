<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include './header.php';?>

<body>
	<!-- header section -->
	<div class="container">
		<div class="row pagebanner" id="">
			<div class="col-md-12 col-sm-12">
				<div class="hero-unit back-img-caption">
					<h1><span>Reliable CPS Design</span></h1>
					<p style="text-align:justify">Traditionally, the reliability of safety-critical systems has
						been estimated via rigorous testing. However, testing a large
						system is cumbersome, costly, and even infeasible sometimes.
						Additionally, if testing deems a system to be unreliable as
						per the required standard, it is hard to redesign a complete
						system. As an alternative, we advocate the use of formal
						methods to verify system reliability in its early stages of
						design using its behavioral description. We also propose
						suitable design modifications to adhere the system to its
						required reliability standard.</p>
				</div>
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
				<div class="header">
					<h1><span>Research Topics</span></h1>
				</div>
				<!-- </div> -->
			</div>
			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#cpsrel-topic1" id="cpsrel-topic1-header">
						<div class="header-content-container">
							<h2>
							<a href="#cpsrel-topic1-header" id="topicLink" data-target="tooltip" title="copy link to topic">#</a>	
							Reliability Analysis of CPS 
							<a href="#cpsrel-topic1-header" class="fa fa-angle-down" data-target="tooltip" title="copy link to topic" style="float:right" aria-hidden="true"></a>
						</h2>
						</div>
						<div class="collapse" id="cpsrel-topic1">
							<div class="col-md-7 col-sm-7">
								<p> A reliability specification language
									RELSPEC is developed, which models component-based systems using a Discrete Time Markov Chain and estimates its reliability against permanent hardware faults using probabilistic model checking. We have also proposed suitable design space exploration methods toward designing a reliable system given the reliability options available for different components. </p>

							</div>
							<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" src="./images/cps/relsys.png" alt="relsys">

							</div>
						</div>
					</div>
				</div>
				<br>
				<!-- <hr class="divider-line"> -->
			</div>

			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#cpsrel-topic2">
						<div class="header-content-container">
							<h2 id="cpsrel-topic2-header">
							<a href="#cpsrel-topic2-header" id="topicLink" data-target="tooltip" title="copy link to topic">#</a>	
							Reliability-Aware Scheduling of CPS
							<a href="#cpsrel-topic2-header" class="fa fa-angle-down" data-target="tooltip" title="copy link to topic" style="float:right" aria-hidden="true"></a>
							</h2>
						</div>
						<div class="collapse" id="cpsrel-topic2">
							<div class="col-md-7 col-sm-7">
								<p> By verifying the performance degradation
									of a control system against transient sensory faults, suitable sensor fault
									mitigation techniques are developed. The system shows significant reliability
									improvement using developed techniques. We have also proposed timed automata based
									strategies for scheduling periodic control tasks with sporadic sensor
									fault mitigation on shared multiprocessor architectures. Thus reliability-aware
									scheduling strategies for periodic and sporadic real-time tasks on heterogeneous
									embedded systems are developed. In future, we plan to explore clustering
									techniques to optimize the table size used in these developed scheduling strategies.
								</p>
							</div>
							<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" src="./images/cps/relsched.png" alt="relsched">
							</div>
						</div>
					</div>
				</div>
				<br>
				<!-- <hr class="divider-line"> -->
			</div>

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