<header class="main-header">
	<nav class="navbar">
		<div class="container">
			<a class="navbar-brand p-0 m-0" href="<?php echo $ucafeID ?>">
				<img src="<?php echo $ucafe ?>assets/img/logo_ucafe.svg" width="125" height="auto" class="d-md-none">
				<img src="<?php echo $ucafe ?>assets/img/logo_ucafe.svg" width="152" height="auto" class="d-none d-md-inline">
			</a>
		</div>
	</nav> <!-- end navbar -->

	<div class="collapse fixed-top" id="bannerJoin" style="background-color: rgba(0, 0, 0, .75); backdrop-filter: blur(20px); height: 75vh;">
		<div class="container d-flex justify-content-center align-items-center h-100">
			<div class="text-center">
				<img src="<?php echo $ucafe ?>assets/img/logo_ucafe.svg" width="152" height="auto">
				<h2 class="my-5">
					Come join us and you will <br class="d-none d-lg-inline">get countless surprises
				</h2>
				<div>
					<a href="#" class="btn btn-light rounded font-medium mx-2">JOIN</a>
					<button class="btn btn-dark rounded font-medium mx-2" data-bs-toggle="collapse" data-bs-target="#bannerJoin">CLOSE</button>
				</div>
			</div>
		</div>
	</div> <!-- end join member -->

	<div class="menu-dot d-none d-lg-block">
		<ul class="list-unstyled m-0">
			<a href="<?php echo $ucafeID ?>instant/?idProduct=1" class="text-white"><li>
				<label>INSTANT SERIES</label>
				<i class="bi bi-circle-fill"></i>
			</li></a>
			<a href="<?php echo $ucafeID ?>pure/?idProduct=6" class="text-white"><li>
				<label>PURE SERIES</label>
				<i class="bi bi-circle-fill"></i>
			</li></a>
			<a href="<?php echo $ucafeID ?>findus" class="text-white d-none"><li>
				<label>FIND US</label>
				<i class="bi bi-circle-fill"></i>
			</li></a>
		</ul>
	</div> <!-- end menu dot samping -->
</header>