<?php
	// Get cookie data
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/getCookie.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<!-- Title -->
	<title><?php echo $language["about"]." | ".$language["name"]; ?></title>
    <?php
        // Load head
        require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/head.php';
    ?>
	<style>
		.hover-overlay {
			transition: 1s;
		}
		.list-group-item {
			background-color: transparent !important;
			padding: 0.5rem 0 !important;
		}
		@media only screen and (max-width: 974px) {
			#mainText {
				padding-left: 0.5rem !important;
				padding-right: 0.5rem !important;
			}
		}
	</style>
</head>
<body>

	<!-- Load navbar -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/navbar.php"; ?>

	<!-- Main div -->
	<div id="main" class="mb-2 pt-4 px-3">
		<h1 class="text-center fw-bold mb-4"><?php echo $language["about"]; ?></h1>
		<section class="mb-5 mx-5 py-3 px-5 shadow-4-strong rounded">

			<!-- Main text -->
			<div class="row gx-lg-5 justify-content-center">
				<div id="mainText" class="col-lg-8 col-md-12 px-5 my-4">
					<h4 class="text-center text-muted"><em><?php echo $language["aboutFirmMain"]; ?></em></h4>
				</div>
			</div>

			<!-- About firm 1 -->
			<div class="row gx-lg-5">

				<!-- Text 1 -->
				<div class="col-lg-6 col-md-12 mt-4">
					<h2 class="text-center fw-bold"><?php echo $language["aboutFirm"]; ?></h2>
					<p style="text-align: justify;"><?php echo $language["contactFirmText1"]; ?></p>
				</div>

				<!-- Image 1 -->
				<div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center">
					<div style="max-height: 400px; max-width: 400px;" class="bg-image hover-overlay shadow-3-strong rounded-circle" data-mdb-ripple-init data-mdb-ripple-color="#f89404">
						<img style="max-height: 400px; max-width: 400px;" src="/src/images/about/z1.jpg" class="w-100 rounded-circle" alt="ZDJ1">
						<a href="#!">
							<div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2)"></div>
						</a>
					</div>
				</div>
			</div>

			<!-- About firm 2 -->
			<div class="row gx-lg-5">

				<!-- Images 2 -->
				<div class="col-lg-6 col-md-12 mt-3 d-flex flex-column justify-content-center align-items-center">
					<div class="row align-items-center">
						<div class="col-xxl-6 col-lg-12 col-md-6 mb-2">
							<div class="bg-image hover-overlay shadow-3-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="#f89404">
								<img src="/src/images/about/z2-1.png" class="w-100 rounded" alt="ZDJ2">
								<a href="#!">
									<div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2)"></div>
								</a>
							</div>
						</div>
						<div class="col-xxl-6 col-lg-12 col-md-6 mb-2">
							<div class="bg-image hover-overlay shadow-3-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="#f89404">
								<img src="/src/images/about/z2-2.png" class="w-100 rounded" alt="ZDJ2">
								<a href="#!">
									<div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2)"></div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Text 2 -->
				<div class="col-lg-6 col-md-12 mt-3">
					<p style="text-align: justify;"><?php echo $language["contactFirmText2"]; ?></p>
				</div>
			</div>
		</section>

		<h2 class="text-center fw-bold"><?php echo $language["aboutPartners"]; ?></h2>
	</div>

	<!-- Load footer -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/footer.php"; ?>
</body>
</html>