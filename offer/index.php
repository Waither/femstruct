<?php
	// Get cookie data
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/getCookie.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<!-- Title -->
	<title><?php echo $language["offer"]." | ".$language["name"]; ?></title>
    <?php
        // Load head
        require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/head.php';
    ?>
	<style>
		.hover-overlay {
			transition: 1s;
		}
		.list-group-item {
			padding: 0.5rem 0 !important;
		}
	</style>
</head>
<body>

	<!-- Load navbar -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/navbar.php"; ?>

	<!-- Main div -->
	<div id="main" class="mb-2 pt-4 px-3">
		<h1 class="text-center fw-bold mb-4"><?php echo $language["offer"]; ?></h1>
		<section class="mb-5 mx-5 py-3 px-5 shadow-4-strong rounded">

			<!-- What we doing -->
			<div class="row gx-lg-5 mt-3">

				<!-- Text 3 -->
				<div class="col-lg-6 col-md-12">
					<h2 class="text-center fw-bold"><?php echo $language["offerWhat"] ?></h2>
					<ol class="list-group list-group-light mb-3">
						<?php
							foreach ($language["offerWhatList"] as $text) {
								?>
								<li class="list-group-item<?php if (isset($_COOKIE['MDBstyle']) && $_COOKIE['MDBstyle'] == 'dark') { echo " text-light"; } ?>"><?php echo $text; ?></li>
								<?php
							}
						?>
					</ol>
					<h6 class="mb-2 mt-5"><?php echo $language["offerWhatText"]; ?></h6>
				</div>

				<!-- Projects gallery -->
				<div class="col-lg-6 col-md-12 d-flex flex-column">
					<h3 class="text-center fw-bold"><?php echo $language["offerProjects"] ?></h3>
					<div class="row">
						<?php
							$files = scandir($_SERVER['DOCUMENT_ROOT']."/src/images/offer/".$_COOKIE['language']);
							foreach($files as $file) {
								if (!in_array($file, array(".",".."))) {
									?>
									<div class="col-lg-6 col-md-12 mb-3 d-flex flex-column justify-content-center">
										<div class="bg-image hover-overlay shadow-3-strong rounded" data-mdb-popover-init data-mdb-trigger="hover" data-mdb-placement="top" data-mdb-content="<?php echo explode(".", $file)[0]; ?>" data-mdb-ripple-init data-mdb-ripple-color="#f89404">
											<img src="/src/images/offer/<?php echo $_COOKIE['language']."/".$file; ?>" class="w-100 rounded">
											<a href="#!">
												<div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2)"></div>
											</a>
										</div>
									</div>
									<?php
								}
							}
						?>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Load footer -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/footer.php"; ?>
</body>
</html>