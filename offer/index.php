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

		@media only screen and (max-width: 991px) {
			#main {
				padding-left: 5px !important;
				padding-right: 5px !important;
			}

			#main > section {
				padding-left: 10px !important;
				padding-right: 10px !important;
				margin-left: 10px !important;
				margin-right: 10px !important;
			}
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

				<!-- Text -->
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
									<div class="col-lg-6 col-md-6 mb-3 d-flex flex-column justify-content-center">
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

			<!-- Technical drawing -->
			<div class="row mt-3">
				<h3 class="text-center fw-bold"><?php echo $language["offerProjects2"] ?></h3>
				<?php
					$files = scandir($_SERVER['DOCUMENT_ROOT']."/src/images/offer2");
					$i = 1;
					foreach($files as $file) {
						if (!in_array($file, array(".",".."))) {
							?>
							<div class="col-lg-3 col-md-4 col-sm-6 mb-3 d-flex flex-column justify-content-center">
								<div class="bg-image hover-overlay shadow-3-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="#f89404" data-mdb-modal-init data-mdb-target="#modal<?php echo $i++; ?>">
									<img src="/src/images/offer2/<?php echo $file; ?>" class="w-100 rounded">
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
		</section>
	</div>

	<!-- Modals -->
	<?php
		$i = 1;
		foreach($files as $file) {
			if (!in_array($file, array(".",".."))) {
				?>
				<div class="modal fade" id="modal<?php echo $i; ?>" tabindex="-1" aria-labelledby="ModalLabel<?php echo $i; ?>" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="ModalLabel<?php echo $i++; ?>">Rysunek techniczny</h5>
								<button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Zamknij"></button>
							</div>
							<div class="modal-body">
								<img src="/src/images/offer2/<?php echo $file; ?>" class="w-100 rounded">
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}
	?>

	<!-- Load footer -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/footer.php"; ?>
</body>

</html>