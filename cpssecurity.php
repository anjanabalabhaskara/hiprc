<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include './header.php';?>

<body>
	<!-- header section -->
	<div id="cpssecCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#cpssecCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#cpssecCarousel" data-slide-to="1" class=""></li>
			<li data-target="#cpssecCarousel" data-slide-to="2" class=""></li>
			<li data-target="#cpssecCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
		<div class="item active">
				<img class="slide" src="./images/cps/cps.jpg" style="opacity:0.15;filter:alpha(opacity=15);"
					alt="First slide">
				<div class="container">
					<div class="carousel-caption hero unit" style="bottom:35%">
						<h1>Secure CPS Design Strategies</h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="second-slide img-responsive" style="max-width:100%;max-height:100%" src="./images/cps/automotiveSecurity.png" alt="second slide">
				<div class="container">
					<div class="carousel-caption back-img-caption">
						<h1>Vulnerabilities in Automated Vehicles</h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="third-slide" style="max-width:100%;max-height:100%" src="./images/cps/cpsSecurity.jpg" alt="third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Vulnerabilities in modern day CPS</h1>
						<!-- <p>Vulnerabilities in Daily Use of CPS</p> -->
						<!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
					</div>
				</div>
			</div>
			<div class="item">
          <img class="fourth-slide img-fluid" src="./images/cps/smartGridCPSHomeSecurity.png" style="max-width:100%;max-height:100%" alt="fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Vulnerabilities in Smart Grids</h1>
            
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
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
		<div class="row" style="padding:15px">
			<div class="col-md-12 col-sm-12 industry">
			<!-- <div class="hero-unit back-img-caption"> -->
				<!-- <h1><span>Secure CPS Design</span></h1> -->
				<p style="text-align:justify">Recent Popularity of Cyber-Physical Systems (CPS) spans through several domains from automotive to power distribution systems. Advancement in CPS research has enhanced features like connectivity and automation enabling a large area coverage with least human effort in such systems. As an example, Automated Connected Vehicles, Smart grid and Smart Building management Systems, IoT devices are becoming more common place. But these boons of sophistication come with an inevitable let down of more exposure towards malicious intents jeopardising the safety requirements of such systems.</p>
				<p style="text-align:justify">Attackers are not bounded to remotely unlocking the car doors anymore. They are becoming smarter by demonstrating not only physical but also remote carjacking. Few years back Charlie Miller and Cris Valasek has proved how vulnerable the automobiles are becoming. They demonstrated <a href="https://en.wikipedia.org/wiki/Zero-day_(computing)">Zero-day </a>like<a href="https://www.wired.com/2015/07/hackers-remotely-kill-jeep-highway/"> cyber attacks</a> on vehicles from manufacturers like JEEP (Cherokee),Fiat (Chrysler). Such vulnerabilities obligated new legislations for automobile vendors to meet certain protection standards for sold vehicles. Even after that there have been several incidents of Wireless Carjacking. Targeting large scale CPS vulnerabilities is not new. We have seen how a 500kb computer code (<a href="https://en.wikipedia.org/wiki/Stuxnet">Stuxnet</a>) can destroy Atomic Power Establishments in 2010 by compromising programmable Logic Controllers, which is hugely used in any embedded systems! By remotely  <a href="https://www.wired.com/2016/03/inside-cunning-unprecedented-hack-ukraines-power-grid/">shutting down power supply of Ivanofranivsk region of West Ukraine</a> in 2015 the attackers proved their strategies are also improving as new-age CPS offers them a huge attack surface. So our research is primarily aimed to eliminate such ill-intents to challenge CPS safety without compromising their usual functionalities.</p>
			  </div>	
		</div>
		<br>
			<hr class="divider-line">
	<!-- </div> -->


	<!-- projects section -->
	<!-- <div class="content text-center">
		<div class="container"> -->
			<div class="row " id="cpssec-topics">
				<div class="col-md-12 col-sm-12">
				<div class="header text-center">
					<h1>Research Topics</h1>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="container topic-desc">
					<div style="width:100% " data-toggle="collapse" data-target="#cpssec-topic1">
						<div class="header-content-container">
							<h2 id="cpssec-topic1-header">
								<a href="#cpssec-topic1" id="topicLink" data-target="tooltip" title="copy link to topic">#</a>
								Safety and Robustness Analysis of Safety-Critical CPS
								<a href="#cpssec-topic1-header" class="fa fa-angle-down" data-target="tooltip" title="copy link to topic" style="float:right" aria-hidden="true"></a>
							</h2>
						</div>
						<div class="collapse" id="cpssec-topic1">
							<div class="col-md-7 col-sm-7">
								<p> Most of the CPS we intent to provide security are
									Safety-Critical. So we explored formal methods to find security loopholes by analysing safety of such
									systems	as they continue to function in real world. This analysis helps understand how
									robust the control systems are towards such anomalies. More on this is described in <a href="./cpsverification.php#cpsver-topic2">Safety-Critical CPS Verification</a> topic.</p>
							</div>
							<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
								<img class="img-responsive" style="background-color:#ece2d9; border-radius:4px" src="./images/cps/atvecsyn.png" alt="attackSynthTool">
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
					<div class="header-content-container">
						<h2 id="cpssec-topic2-header">
						<a href="#cpssec-topic2" id="topicLink" data-target="tooltip" title="copy link to topic">#</a>
							 Designing Light weight Security Mechanisms for Real-time CPS
							 <a href="#cpssec-topic2-header" class="fa fa-angle-down" data-target="tooltip" title="copy link to topic" style="float:right" aria-hidden="true"></a>
						</h2>
					</div>
					<div class="collapse" id="cpssec-topic2">
						<div class="col-md-7 col-sm-7">
							<p> Mitigating security vulnerabilities in CPSs are not only addressing usual software security or all about utilizing cryptographic practices but needs an in-depth knowledge about system functionalities. The reason is these vulnerabilities are not generic. For addressing such vulnerabilities, we can improve control behaviour of the system to be robust against such attacks. The protection system design can be integrated well by exploiting the control structure of the system. We also research on lightweight security components popular among cryptography researchers like <a href="">Physically Unclonable Functions (PUFs)</a> because of their resource constraints. This is another aspect of CPS like automobiles or IoT devices we need to contemplate while designing security mechanisms since most such systems are limited on resource. So, we try to ensure the security along with ensuring desired performance profile of the CPS.</p>
						</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="./images/cps/puf.png" alt="puf">
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
					<div class="header-content-container">
					<h2 id="cpssec-topic3-header">
						<a href="#cpssec-topic3" id="topicLink" data-target="tooltip" title="copy link to topic">#</a>
						 Developing Control Scheduling Co-design Strategies for CPS Security
						 <a href="#cpssec-topic3-header" class="fa fa-angle-down" data-target="tooltip" title="copy link to topic" style="float:right" aria-hidden="true"></a>
					</h2>
					</div>
					<div class="collapse" id="cpssec-topic3">
						<div class="col-md-12 col-sm-12">
							<p> Developing lightweight security measures with performance guarantee is not enough when we are talking about resource constrained CPSs. Because prioritized safety-critical tasks must not be harmed while spacing the security tasks in place. For this Control-Scheduling Co-design approach comes in our research space. For more details on such works visit <a href="./rts.php">Automotives</a> Section of our research domains.</p>
						</div>
						<!-- <div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="" alt="">
						</div> -->
					</div>
				</div>
			</div>
			</div>
			<br>
			<hr class="divider-line">

			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-3"></div>
				<div class="col-md-2 col-sm-2 col-xs-6" style="padding:20px">
				<a href="./cps.php#cps-research" class="btn btn-default" style="border-color:#885104;border-style:solid">Back To CPS</a>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-3"></div>
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