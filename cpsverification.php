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
					<h1><span>Safety-Critical CPS Design Verification</span></h1>
					<p style="text-align:justify">Safety violations and cyber-attacks due to design or implementation errors in safety-critical
						systems are increasingly
						common. To tackle the extremely challenging task of safety verification of such systems, many
						industrial safety certification
						standards, including DO178C (avionics), ISO26262 (automotive), EN50128 (railways) and
						IEEE1228-1994 (software)
						recommend using formal methods. Deployment of indigenous software and systems in safety-critical
						applications has been
						significantly impaired due to lack of in-house competence in validation and certification in
						niche technology domains such
						as formal methods. So, a verification approach needs to be formalized targeting recent
						applications and
						safety standards in various ICT domains such as aeronautics, automotive, power, nuclear,
						railway, and space.</p>
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
					<div style="width:100% " data-toggle="collapse" data-target="#cpsver-topic1">
						<div class="header-content-container">
							<h2 id="cpsver-topic1-header">
							<a href="#cpsver-topic1-header" id="topicLink" data-target="tooltip" title="copy link to topic">#</a>	
							Safety Analysis of Embedded Controllers
							<a href="#cpsver-topic1-header" class="fa fa-angle-down" data-target="tooltip" title="copy link to topic" style="float:right" aria-hidden="true"></a>
							</h2>
						</div>
						<div class="collapse" id="cpsver-topic1">
							<div class="col-md-7 col-sm-7">
								<p> Control software often executes on common embedded platforms
									to achieve the number of safety-critical tasks. These concurrent running tasks
									introduce variability in the response
									time of the controller software. Timing effects like sampling-jitter and actuation
									delay, though critical to the safety
									of the closed-loop system, are often ignored during design and analysis. There are
									several well established
									tools present for verification of hybrid systems. But very few tools which consider
									these perturbations
									when a control program runs in closed loop with some plant. None of them considers
									controller program
									along with non-linear plant and timing effects altogether while verifying safety of
									the closed loop. That’s why
									as part of this work, a tool is to be designed, that considers Plant dynamics
									(ODEs), Controller program and
									noise, jitters and delays caused by the closed loop formation to verify if the closed
									loop system holds desired
									safety criteria. Non-Linear Systems are also considered, as the solver intended to
									be used supports them.
									This helps industries employing safety-critical embedded software certify if the
									controller is safe when connected
									in closed loop with a plant model. </p>
							</div>
							<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" src="./images/cps/verificationFlow1.png" alt="vertool">

							</div>
						</div>
					</div>
				</div>
				<br>
				<!-- <hr class="divider-line"> -->
			</div>
			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#cpsver-topic2">
						<div class="header-content-container">
							<h2 id="cpsver-topic2-header">
							<a href="#cpsver-topic2-header" id="topicLink" data-target="tooltip" title="copy link to topic">#</a>	
							Vulnerability Analysis of Safety-Critical CPS
							<a href="#cpsver-topic2-header" class="fa fa-angle-down" data-target="tooltip" title="copy link to topic" style="float:right" aria-hidden="true"></a>
							</h2>
						</div>
						<div class="collapse" id="cpsver-topic2">
							<div class="col-md-7 col-sm-7">
								<p class="text-justify"> We have developed methods to find security loopholes by analysing safety of these
									systems	as they continue to function in real world. This analysis helps understand how
									robust the control system is towards such anomalies. Using this approach, we can as well
									understand how an attacker functions and make it more realistic by imposing
									real-world constraints. We can intelligently mine these system parameters that can restraint
									the	accessibility of system vulnerabilities. Along with analyzing vulnerabilities we are
									also interested in system control behaviours and how are those affected when such
									attack scenarios arise in real world. As we are interested in provably secure such systems,
									we utilize several verification tools like <a href="https://www.rise4fun.com/">Z3</a>, <a href="https://dreal.github.io/">dReal</a> to analyse system vulnerabilities. 
								</p>
							</div>
							<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" style="background-color:#ece2d9;border-radius:4px;" src="./images/cps/atvecsyn.png" alt="attackSynthTool">
							</div>
						</div>
					</div>
				</div>
				<br>
				<!-- <hr class="divider-line"> -->
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-4"></div>
				<div class="col-md-4 col-sm-4" style="padding:20px">
				<a href="./cps.php#cps-research" class="btn btn-default" style="border-color:#885104;border-style:solid">Back To CPS</a>
				</div>
				<div class="col-md-4 col-sm-4"></div>
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