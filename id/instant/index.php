<?php
include '../../koneksi.php';

$getID = $_GET["idProduct"];
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '".$getID."' ");
$data  = mysqli_fetch_array($query);

include '../../vardat/marketplace.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../meta.php' ?>
	<title>UCAFÉ · Instant Coffee</title>
</head>
<body id="produk">

	<?php include '../header.php' ?>
	
	<main class="wrapper">

		<section class="detail-produk text-center text-md-start">
			<div class="container py-5">
				<div id="carousel2" class="carousel slide carousel-fade slider-detail-img" data-bs-ride="false">
					<div class="row row-cols-1 row-cols-lg-2 align-items-center">
						<div class="col mb-5 mb-lg-0">
							<div class="carousel-inner">
								<div class="carousel-item">
									<div class="detail-img">
										<img src="<?php echo $ucafe ?><?php echo $data['image 1']; ?>" class="d-block">
									</div>
								</div>
								<div class="carousel-item">
									<div class="detail-img">
										<img src="<?php echo $ucafe ?><?php echo $data['image 2']; ?>" class="d-block">
									</div>
								</div>
								<div class="carousel-item">
									<div class="detail-img">
										<img src="<?php echo $ucafe ?><?php echo $data['image 3']; ?>" class="d-block">
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="detail-spek">
								<h3 class="detail-title font-medium text-uppercase mb-3">
									UCAFÉ <?php echo $data['variants'] ?> <br class="d-none d-xl-inline"><?php echo $data['collection'] ?> coffee
								</h3>
								<h4 class="text-capitalize mb-3 opacity-75">
									<?php echo $data['description ID'] ?>
								</h4>
								<p class="text-capitalize mb-3 opacity-75">
									<?php echo $data['ingredients ID'] ?>
								</p>
								<p class="text-capitalize mb-5 opacity-75">
									berat bersih<br><?php echo $data['weight'] ?>g
								</p>
								<div class="marketplace">
									<a href="<?php echo $data['lazada ID'] ?>" target="_blank" class="text-decoration-none me-3 <?php echo $lazadaID ?>">
										<img src="<?php echo $ucafe ?>assets/img/marketplace/lazada.svg" width="26" height="auto">
									</a>
									<a href="<?php echo $data['shopee ID'] ?>" target="_blank" class="text-decoration-none me-3 <?php echo $shopeeID ?>">
										<img src="<?php echo $ucafe ?>assets/img/marketplace/shopee.svg" width="26" height="auto">
									</a>
									<a href="<?php echo $data['tokopedia ID'] ?>" target="_blank" class="text-decoration-none me-3 <?php echo $tokopediaID ?>">
										<img src="<?php echo $ucafe ?>assets/img/marketplace/tokopedia.svg" width="26" height="auto">
									</a>
									<a href="<?php echo $data['bukalapak ID'] ?>" target="_blank" class="text-decoration-none me-3 <?php echo $bukalapakID ?>">
										<img src="<?php echo $ucafe ?>assets/img/marketplace/bukalapak.svg" width="26" height="auto">
									</a>
									<a href="<?php echo $data['blibli ID'] ?>" target="_blank" class="text-decoration-none me-3 <?php echo $blibliID ?>">
										<img src="<?php echo $ucafe ?>assets/img/marketplace/blibli.svg" width="26" height="auto">
									</a>
									<a href="<?php echo $data['jd ID'] ?>" target="_blank" class="text-decoration-none me-3 <?php echo $jdID ?>">
										<img src="<?php echo $ucafe ?>assets/img/marketplace/jd.svg" width="26" height="auto">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-indicators position-relative pt-5">
						<button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="d-none d-lg-block">
						<button class="carousel-control carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</section>

		<section class="related-produk text-center" style="background-color: #252525; padding-bottom: 4rem;">
			<div class="container">
				<header class="section-header">
					<h4 class="font-medium">Related Products</h4>
				</header>
				<div id="carousel1" class="carousel slide produk-slider" data-bs-ride="carousel">
					<div class="carousel-inner">
						<?php
						$query = mysqli_query($koneksi, "SELECT * FROM produk ");
						while($data = mysqli_fetch_array($query)){
							?>
							<div class="carousel-item">
								<div class="col">
									<div class="card card-produk">
										<a href="<?php echo $ucafeID ?><?php echo $data['collection']; ?>/?idProduct=<?php echo $data['id'];?>" class="d-inline">
											<div class="card-img">
												<img src="<?php echo $ucafe ?><?php echo $data['image 1']; ?>" class="img-fluid">
											</div>
										</a>
										<div class="card-body">
											<p class="card-title text-uppercase"><?php echo $data['collection']; ?></p>
											<p class="card-text text-capitalize font-medium" style="color: #878787;"><?php echo $data['variants']; ?></p>
											<p class="card-text"><?php echo $data['weight']; ?><span>g</span></p>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="d-none d-lg-block">
						<button class="carousel-control carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</section>

	</main> <!-- end wrapper -->

	<?php include '../footer.php' ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('footer .btn-products .btn-instant').addClass('active');
		});
		
		// [].forEach.call(document.querySelectorAll("*"), function(a) {a.style.outline="1px solid green";})
	</script>
</body>
</html>