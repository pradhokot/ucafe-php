<?php include '../../koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../meta.php' ?>
	<title>UCAFÉ · Find Us</title>
	<!-- mapbox -->
	<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
	<style type="text/css">
		#marker-0 {background-image: url(<?php echo $ucafe ?>assets/img/pin/1.png);}
		#marker-1 {background-image: url(<?php echo $ucafe ?>assets/img/pin/2.png);}
		#marker-2 {background-image: url(<?php echo $ucafe ?>assets/img/pin/3.png);}
		#marker-3 {background-image: url(<?php echo $ucafe ?>assets/img/pin/4.png);}
		#marker-4 {background-image: url(<?php echo $ucafe ?>assets/img/pin/5.png);}
		#marker-5 {background-image: url(<?php echo $ucafe ?>assets/img/pin/6.png);}
		#marker-6 {background-image: url(<?php echo $ucafe ?>assets/img/pin/7.png);}
		#marker-7 {background-image: url(<?php echo $ucafe ?>assets/img/pin/8.png);}
		#marker-8 {background-image: url(<?php echo $ucafe ?>assets/img/pin/9.png);}
		#marker-9 {background-image: url(<?php echo $ucafe ?>assets/img/pin/10.png);}
		#marker-10 {background-image: url(<?php echo $ucafe ?>assets/img/pin/11.png);}
		#marker-11 {background-image: url(<?php echo $ucafe ?>assets/img/pin/12.png);}
		#marker-12 {background-image: url(<?php echo $ucafe ?>assets/img/pin/13.png);}
		#marker-13 {background-image: url(<?php echo $ucafe ?>assets/img/pin/14.png);}
		#marker-14 {background-image: url(<?php echo $ucafe ?>assets/img/pin/15.png);}
		#marker-15 {background-image: url(<?php echo $ucafe ?>assets/img/pin/16.png);}
		#marker-16 {background-image: url(<?php echo $ucafe ?>assets/img/pin/17.png);}
		#marker-17 {background-image: url(<?php echo $ucafe ?>assets/img/pin/18.png);}
		#marker-18 {background-image: url(<?php echo $ucafe ?>assets/img/pin/19.png);}
		#marker-19 {background-image: url(<?php echo $ucafe ?>assets/img/pin/20.png);}
		#marker-20 {background-image: url(<?php echo $ucafe ?>assets/img/pin/21.png);}
		#marker-21 {background-image: url(<?php echo $ucafe ?>assets/img/pin/22.png);}
		#marker-22 {background-image: url(<?php echo $ucafe ?>assets/img/pin/23.png);}
		#marker-23 {background-image: url(<?php echo $ucafe ?>assets/img/pin/24.png);}
	</style>
</head>
<body id="find">

	<?php include '../header.php' ?>
	
	<main class="wrapper">

		<section style="margin-bottom: 4rem;">
			<div class="container">
				<div id="map"></div>
			</div>
		</section>

		<section class="store">
			<div class="container">
				<ul id="listings" class="list-unstyled store-list"></ul>
			</div>
		</section>

	</main> <!-- end wrapper -->

	<?php include '../footer.php' ?>
	<script type="text/javascript" src="<?php echo $ucafe ?>assets/js/maps.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('footer .btn-findus').addClass('active text-white');
		});
		// [].forEach.call(document.querySelectorAll("*"), function(a) {a.style.outline="1px solid green";})
	</script>
</body>
</html>