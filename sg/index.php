<?php include '../koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'meta.php' ?>
	<title>UCAFÉ · Home</title>
</head>
<body id="home">

	<?php include 'header.php' ?>
	
	<main class="wrapper">

		<section id="homeInstant">
			<div class="container section-container">
				<header class="section-header">
					<h1 class="section-title mb-3 font-medium">
						<span class="me-2">INSTANT</span><br class="d-none d-lg-inline">SERIES
					</h1>
					<a href="<?php echo $ucafeSG ?>instant/?idProduct=1" class="text-white">MORE DETAILS <i class="bi bi-chevron-right"></i></a>
				</header> <!-- end judul section instant -->
				<div class="d-lg-none">
					<img src="<?php echo $ucafe ?>assets/img/home/home_instant2.jpg" class="img-fluid w-100">
				</div> <!-- end image produk mobile -->
				<div class="d-none d-lg-block">
					<div class="produk-instant" style="max-width: 520px; margin-left: auto; transform: rotate(30deg) skew(-15deg); margin-bottom: -50px; margin-right: 175px;">
						<div class="container-fluid">
							<div class="row row-cols-2 align-items-end g-4">
								<div class="col">
									<div class="produk-instant-item" style="padding-top: 348px;">
										<a href="<?php echo $ucafeSG ?>instant/?idProduct=1"><img src="<?php echo $ucafe ?>assets/img/home/instant_1.png" class="img-fluid w-100"></a>
										<img src="<?php echo $ucafe ?>assets/img/home/shadow_1.png" class="img-fluid w-100 shadow shadow-produk">
									</div>
								</div>
								<div class="col">
									<div class="produk-instant-item">
										<a href="<?php echo $ucafeSG ?>instant/?idProduct=2"><img src="<?php echo $ucafe ?>assets/img/home/instant_2.png" class="img-fluid w-100"></a>
										<img src="<?php echo $ucafe ?>assets/img/home/shadow_2.png" class="img-fluid w-100 shadow shadow-produk">
									</div>
								</div>
								<div class="col">
									<div class="produk-instant-item">
										<a href="<?php echo $ucafeSG ?>instant/?idProduct=3"><img src="<?php echo $ucafe ?>assets/img/home/instant_3.png" class="img-fluid w-100"></a>
										<img src="<?php echo $ucafe ?>assets/img/home/shadow_2.png" class="img-fluid w-100 shadow shadow-produk">
									</div>
								</div>
								<div class="col">
									<div class="produk-instant-item">
										<a href="<?php echo $ucafeSG ?>instant/?idProduct=4"><img src="<?php echo $ucafe ?>assets/img/home/instant_4.png" class="img-fluid w-100"></a>
										<img src="<?php echo $ucafe ?>assets/img/home/shadow_2.png" class="img-fluid w-100 shadow shadow-produk">
									</div>
								</div>
								<div class="col">
									<div class="produk-instant-item">
										<a href="<?php echo $ucafeSG ?>instant/?idProduct=5"><img src="<?php echo $ucafe ?>assets/img/home/instant_5.png" class="img-fluid w-100"></a>
										<img src="<?php echo $ucafe ?>assets/img/home/shadow_2.png" class="img-fluid w-100 shadow shadow-produk">
									</div>
								</div>
								<div class="col d-none">
									<div class="produk-instant-item">
										<a href="<?php echo $ucafeSG ?>instant/?idProduct=6"><img src="<?php echo $ucafe ?>assets/img/home/instant_6.png" class="img-fluid w-100"></a>
										<img src="<?php echo $ucafe ?>assets/img/home/shadow_2.png" class="img-fluid w-100 shadow shadow-produk">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- end image produk interaktif desktop -->
			</div>
		</section> <!-- end section instant coffee -->

		<section id="homeSpecial" style="color: #6d6e71; background-color: #252525;">
			<div class="container section-container">
				<header class="section-header">
					<h1 class="section-title mb-3 font-medium text-white">
						<span class="me-2">PURE COFFEE</span><br class="d-none d-lg-inline">SERIES
					</h1>
					<a href="<?php echo $ucafeSG ?>pure/?idProduct=6" class="text-white">MORE DETAILS <i class="bi bi-chevron-right"></i></a>
				</header> <!-- end judul section special -->
				<div class="d-lg-none">
					<img src="<?php echo $ucafe ?>assets/img/home/triple_special.png" class="img-fluid w-100">
				</div><!-- end image produk mobile -->
				<div class="d-none d-lg-block">
					<div class="produk-special" style="max-width: 920px; margin-left: auto;">
						<div class="container-fluid">
							<div class="row align-items-end gx-5">
								<div class="col pb-4" style="max-width: 28%;">
									<div class="produk-special-item">
										<img src="<?php echo $ucafe ?>assets/img/home/special_1.png" class="img-fluid w-100 img-master">
										<a href="<?php echo $ucafeSG ?>pure/?idProduct=6"><img src="<?php echo $ucafe ?>assets/img/home/special_1.png" class="img-fluid w-100"></a>
										<img src="<?php echo $ucafe ?>assets/img/home/special_shadow_1.png" class="img-fluid w-100 produk-shadow">
									</div>
								</div>
								<div class="col pb-3" style="max-width: 30%;">
									<div class="produk-special-item">
										<img src="<?php echo $ucafe ?>assets/img/home/special_2.png" class="img-fluid w-100 img-master">
										<a href="<?php echo $ucafeSG ?>pure/?idProduct=7"><img src="<?php echo $ucafe ?>assets/img/home/special_2.png" class="img-fluid w-100"></a>
										<img src="<?php echo $ucafe ?>assets/img/home/special_shadow_2.png" class="img-fluid w-100 produk-shadow">
									</div>
								</div>
								<div class="col" style="max-width: 42%;">
									<div class="produk-special-item">
										<img src="<?php echo $ucafe ?>assets/img/home/special_3.png" class="img-fluid w-100 img-master">
										<a href="<?php echo $ucafeSG ?>pure/?idProduct=8"><img src="<?php echo $ucafe ?>assets/img/home/special_3.png" class="img-fluid w-100"></a>
										<img src="<?php echo $ucafe ?>assets/img/home/special_shadow_3.png" class="img-fluid w-100 produk-shadow">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- end image produk interaktif desktop -->
				<div>
					<img src="<?php echo $ucafe ?>assets/img/home/biji_kopi.png" width="70%" height="auto" style="max-width: 640px;">
				</div>
			</div>
		</section> <!-- end section pure coffee -->

	</main> <!-- end wrapper -->

	<?php include 'footer.php' ?>
	<script type="text/javascript">
		// [].forEach.call(document.querySelectorAll("*"), function(a){a.style.outline="1px solid green";})
	</script>
</body>
</html>