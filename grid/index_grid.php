<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include '../js/header.php';?>

<body>


	<div id="gridCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#gridCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#gridCarousel" data-slide-to="1" class=""></li>
			<li data-target="#gridCarousel" data-slide-to="2" class=""></li>
			<li data-target="#gridCarousel" data-slide-to="3" class=""></li>
		</ol>

		<div class="carousel-inner" style="padding:0px 50px 0px 50px" role="listbox">
			<div class="item active">
				<img class="first-slide img-responsive" style="max-width:100%;max-height:100%"
					src="./images/grid_design.png" alt="First slide">
				<div class="container">
					<div class="carousel-caption back-img-caption">
						<h1>Smart Grid Design</h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="second-slide img-responsive" style="max-width:100%;max-height:100%"
					src="./images/HVAC.png" alt="second slide">
				<div class="container">
					<div class="carousel-caption back-img-caption">
						<h1>Heating, Ventilation, and Air Conditioning (HVAC)</h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="third-slide img-responsive" style="max-width:100%;max-height:100%"
					src="./images/smart_home.jpg" alt="third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Smart Building Management System</h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="fourth-slide img-responsive" style="max-width:100%;max-height:100%"
					src="./images/SmartGridpng.png" alt="fourth slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Smart Grid security and privacy</h1>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#gridCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#gridCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>




	<div class="divider">
		<div class="container" id="SmartGridresearch">
			<div class="row " style="padding:15px">
				<div class="col-md-12 col-sm-12">
					<div class="header-content-container">
						<h1><span>Research Topics</span></h1>
					</div>
				</div>
			</div>
			<div class="row" style="padding: 20px;">
				<div class="col-md-3 col-sm-3" style="padding:15px">
					<div class="divider-wrapper divider-one">
						<i class="fa fa-laptop"></i>
						<h2>Smart Grid Design</h2>
						<a href="./smartgrid_Tool.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3" style="padding:15px">
					<div class="divider-wrapper divider-two">
						<i class="fa fa-laptop"></i>
						<h2>Smart Building Control</h2>
						<a href="./BEMS.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3" style="padding:15px">
					<div class="divider-wrapper divider-two">
						<i class="fa fa-laptop"></i>
						<h2>Smart Grid Privacy</h2>
						<a href="./Privacy.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3" style="padding:15px">
					<div class="divider-wrapper divider-one">
						<i class="fa fa-laptop"></i>
						<h2>HVAC Automation</h2>
						<a href="./HVAC.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>





	</div>
	</div>
	</div>


	<!-- footer section -->
<?php include '../footer.php';?>


</body>

</html>