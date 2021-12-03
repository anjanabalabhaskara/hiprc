<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include './header.php';?>

<body>

	<!-- header section -->
	<!-- <div class="container  text-center">
		<div class="row " style="padding:15px">
			<div class="col-md-12 col-sm-12">
			<img class="img-responsive pagebanner"  src="./images/cps/cps.jpg" alt="cpsbanner">
			<div class=" img-cap back-img-caption">
				<h1><span>Cyber Physical Systems</span></h1>
			</div>

		</div>
	</div>	 -->

	<div id="cpsCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#cpsCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#cpsCarousel" data-slide-to="1" class=""></li>
			<li data-target="#cpsCarousel" data-slide-to="2" class=""></li>
			<li data-target="#cpsCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
		<div class="item active">
				<img class="first-slide img-responsive" style="opacity:0.15;filter:alpha(opacity=15);max-width:100%;max-height:100%" src="./images/cps/cps.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption back-img-caption" style="bottom:35%">
						<h1>Cyber Physical Systems Design</h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="second-slide img-responsive" style="max-width:100%;max-height:100%" src="./images/cps/cps.jpg" alt="second slide">
				<div class="container">
					<div class="carousel-caption back-img-caption">
						<h1>CPS in Our Daily Life</h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="third-slide img-responsive" style="max-width:100%;max-height:100%" src="./images/cps/automotiveHomePage.png" alt="third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Connected Automated Vehicles</h1>
					</div>
				</div>
			</div>
			<div class="item">
          <img class="fourth-slide img-responsive" style="max-width:100%;max-height:100%" src="./images/cps/smartGridCPSHome.png" alt="fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Smart Grids</h1>
            </div>
          </div>
        </div>
		</div>
		<a class="left carousel-control" href="#cpsCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#cpsCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<div class="container">
		<div class="row  industry" style="padding:15px">
			<div class="col-md-2 col-sm-2">
			<a class="fa fa-quote-left fa-4x" style="color:inherit"></a></br>
			<a href="http://www.ieee-cps.org/" target="_blank" style="font-weight:bold;margin:10px 2px 0px 0px">[ IEEE Technical Committee ]</a></p>
			</div>
			<!-- <div class="col-md-1 col-sm-1"><hr class="divider-line"></div> -->
			<div class="col-md-10 col-sm-10 text-justify">
				<p>"CPS addresses the close interaction and deep integration between the cyber components such as sensing systems and the physical components such as varying environment and energy systems. The exemplary CPS research areas include the theory and practice of data sensing and manipulation, the engineering foundation of the cyber-physical interactions, the design and verification of embedded computing systems, and the application of CPS methodologies in various areas such as smart energy systems, smart cities, automotive systems, medical prosthetics, wearable devices, internet of things, etc".
			  </div>	
		</div>
		<br>

	<!-- projects section -->

	<div class="divider">
		<div class="container" id="cps-research">
			<div class="row " style="padding:15px">
				<div class="col-md-12 col-sm-12">
					<div class="header-content-container">
						<h1><span>Research Topics</span></h1>
					</div>
				</div>
			</div>
			<div class="row" style="padding: 15px;" >
				<div class="col-md-4 col-sm-4" style="padding:15px">
					<div class="divider-wrapper divider-one">
						<i class="fa fa-cog"></i>
						<h2>Control-Scheduling Co-design of CPS</h2>
						<a href="./cpscontrol.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4" style="padding:15px">
					<div class="divider-wrapper divider-two">
						<i class="fa fa-shield"></i>
						<h2>Secure CPS Design Strategies</h2>
						<a href="./cpssecurity.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4" style="padding:15px">
					<div class="divider-wrapper divider-one">
						<i class="fa fa-bug"></i>
						<h2>Verification of Safety-Critical CPS</h2>
						<a href="./cpsverification.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
			</div>
			<div class="row" style="padding: 15px;" >				

				<div class="col-md-4 col-sm-4 col-xs-12" style="padding:15px">
					<div class="divider-wrapper divider-two">
						<i class="fa fa-certificate"></i>
						<h2>Reliability Analysis of CPS Designs</h2>
						<a href="./cpsreliability.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" style="padding:15px">
					<div class="divider-wrapper divider-one">
						<i class="fa fa-wifi"></i>
						<h2>Wireless Networked Control Systems (Wireless CPS)</h2>
						<a href="./wncs/wncs_home.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" style="padding:15px">
					<div class="divider-wrapper divider-two">
						<i class="fa fa-info-circle"></i>
						<h2>CPS Trivia (SOME CPS RESOURCES)</h2>
						<a href="./cpstrivia.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>									
			</div>
		</div>
	</div>
	<!-- <div class="container text-center">
		<div class="row">
		<div class="col-xs-1" style="padding:15px"></div>
			<div class="col-md-12 col-sm-12 col-xs-10" style="padding:15px">										
				<h1><a href="./cpstrivia.php" class="btn btn-default" style="font-size:15px">SOME INTERESTING CPS RESOURCES <span class="fa fa-arrow-right" aria-hidden="true"></span></a></h1>
			</div>
			<div class="col-xs-1" style="padding:15px"></div>
		</div>
	</div> -->

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
				<span> All publications are listed in <a href="\publication.php">publications</a> tab. The <span
						class="label label-primary">CPS</span> marked ones are CPS related research papers. </span>
			</div>
			<br>
			<hr class="divider-line">
		</div>
	</div> -->
</div>
	<!-- footer section -->
	<?php include './footer.php';?>

</body>

</html>
