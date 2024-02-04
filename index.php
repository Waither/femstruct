<?php
    // Get cookie data
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/getCookie.php'
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<!-- Title -->
	<title><?php echo $language["name"]; ?></title>
    <?php
        // Load head
        require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/head.php';
    ?>
</head>
<body>

	<!-- Load navbar -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/navbar.php"; ?>

	<!-- Main div -->
	<div id="main" style="margin-top: -7px;">

		<!-- Carousel wrapper -->
		<div id="carouselBasic" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init data-mdb-pause="false" data-mdb-interval="4000">

			<!-- Indicators -->
			<div class="carousel-indicators d-none" style="max-height: calc(100vh - 90px);">
				<?php
					$files = scandir($_SERVER['DOCUMENT_ROOT']."/src/images/index");
					for($i = 0; $i < count($files) - 2;) {
						$active = "";
						if (!$i) {
							$active = ' class="active"'; 
						}
						echo '<button type="button" data-mdb-target="#carouselBasic" data-mdb-slide-to="'.$i.'"'.$active.' aria-current="true" aria-label="Slide '.++$i.'"></button>';
					}
				?>
			</div>

			<!-- Inner -->
			<div class="carousel-inner" style="max-height: calc(100vh - 90px);">
				<?php
					$i = 0;
					foreach($files as $file) {
						if (!in_array($file, array(".",".."))) {
							$active = "";
							if (!$i) {
								$active = ' active';
								$i = 1;
							}
							?>
							<div class="carousel-item<?php echo $active; ?>">
								<img src="/src/images/index/<?php echo $file; ?>" class="d-block w-100">
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>
	</div>

	<!-- Load footer -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/footer.php"; ?>
</body>
</html>