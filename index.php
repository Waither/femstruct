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
	<div id="main">

		<!-- Carousel wrapper -->
		<div id="carouselBasic" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init data-mdb-pause="false" data-mdb-interval="4000">

			<!-- Indicators -->
			<div class="carousel-indicators d-none" style="max-height: 830px;">
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
			<div class="carousel-inner" style="max-height: 830px;">

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
			<!-- Inner -->

			<!-- Controls -->
			<!-- <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasic" data-mdb-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-mdb-target="#carouselBasic" data-mdb-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button> -->
		</div>
		<!-- Carousel wrapper -->
	</div>

	<!-- Load footer -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/footer.php"; ?>
</body>
</html>