<?php
	// Get cookie data
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/getCookie.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<!-- Title -->
	<title><?php echo $language["contact"]." | ".$language["name"]; ?></title>
    <?php
        // Load head
        require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/head.php';
    ?>

	<style>
		.badge-primary {
			transition: 0.5s background-color;
		}
		.badge-primary:hover {
			background-color: #f89404 !important;
			cursor: pointer;
		}

		.btn-primary {
			transition: 0.5s background-color;
		}
		.btn-primary:hover {
			background-color: #f89404 !important;
		}
	</style>

	<script>
		$(document).ready( function() {
			document.getElementById("submit").addEventListener('click', (e) => {
				let myform = document.getElementById("form");
				let formData = new FormData(formData);

				$.ajax({
					url: "/src/php/mail/send.php",
					data: formData,
					cache: false,
					processData: false,
					contentType: false,
					type: 'POST',
					beforeSend: function () {
						document.body.style.cursor = 'wait';
						$(this).prop("disabled", true);
					},
					success: function (response) {
						document.body.style.cursor = 'auto';
						$(this).prop("disabled", false);
					},
					error: function() {
						alert("Błąd wysłania maila!");
					}
				});
			})
		})
	</script>
</head>
<body>

	<!-- Load navbar -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/navbar.php"; ?>

	<!-- Main div -->
	<div id="main" class="mb-2 pt-4 px-3">
		<h1 class="text-center fw-bold mb-4"><?php echo $language["contactUs"]; ?></h1>
		<section class="mb-5">
			<div class="row gx-lg-5">

				<!-- Mail -->
				<div class="col-lg-4 col-md-4">
					<div class="d-flex flex-column align-items-center justify-content-center mx-2 mb-2 shadow-4-strong rounded">
						<div class="flex-shrink-0 mt-3">
							<div class="p-3 badge-primary bg-primary rounded-4 d-flex align-items-center justify-content-center" style="width:80px;height:80px;" data-mdb-ripple-init data-mdb-ripple-color="light">
								<i class="far fa-envelope text-light fa-fw fa-3x"></i>
							</div>
						</div>
						<h3 class="text-center fw-bold mt-2"><?php echo $language["writeUs"]; ?></h3>
						<p>biuro@femstruct.pl</p>
					</div>
				</div>

				<!-- Phone -->
				<div class="col-lg-4 col-md-4">
					<div class="d-flex flex-column align-items-center justify-content-center mx-2 mb-2 shadow-4-strong rounded">
						<div class="flex-shrink-0 mt-3">
							<div class="p-3 badge-primary bg-primary rounded-4 d-flex align-items-center justify-content-center" style="width:80px;height:80px;" data-mdb-ripple-init data-mdb-ripple-color="light">
								<i class="fas fa-phone text-light fa-fw fa-3x"></i>
							</div>
						</div>
						<h3 class="text-center fw-bold mt-2"><?php echo $language["phoneUs"]; ?></h3>
						<p>+48 500 660 249</p>
					</div>
				</div>

				<!-- Opening -->
				<div class="col-lg-4 col-md-4">
					<div class="d-flex flex-column align-items-center justify-content-center mx-2 mb-2 shadow-4-strong rounded">
						<div class="flex-shrink-0 mt-3">
							<div class="p-3 badge-primary bg-primary rounded-4 d-flex align-items-center justify-content-center" style="width:80px;height:80px;" data-mdb-ripple-init data-mdb-ripple-color="light">
								<i class="far fa-clock text-light fa-fw fa-3x"></i>
							</div>
						</div>
						<h3 class="text-center fw-bold mt-2"><?php echo $language["opening"]; ?></h3>
						<p><?php echo $language["openUs"]; ?>: 8:00 - 17:00</p>
					</div>
				</div>
			</div>

			<div class="row gx-lg-5 mt-3">

				<!-- Map -->
				<div class="col-12">
					<div class="d-flex flex-column align-items-center justify-content-center mx-2 mb-2 shadow-4-strong rounded">
						<div class="flex-shrink-0 mt-3">
							<div class="p-3 badge-primary bg-primary rounded-4 d-flex align-items-center justify-content-center" style="width:80px;height:80px;" data-mdb-ripple-init data-mdb-ripple-color="light">
								<i class="fas fa-location-dot text-light fa-fw fa-3x"></i>
							</div>
						</div>
						<h3 class="text-center fw-bold mt-2"><?php echo $language["adres"]; ?></h3>
						<p class="text-center">Korczyna 230/3<br>38-340 Biecz</p>
						<div class="w-100 px-3 pb-2">
							<iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1359.6303457682!2d21.250407449934528!3d49.724964300340396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e1!3m2!1spl!2spl!4v1705339102596!5m2!1spl!2spl" style="height: 500px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>

			<div class="row gx-lg-5 mt-5 d-flex justify-content-center">

				<!-- Contact form -->
				<div class="col-10">
					<div class="d-flex flex-column align-items-center justify-content-center mx-2 mb-2 shadow-4-strong rounded">

						<h2 class="text-center fw-bold mt-3"><?php echo $language["contactForm"]; ?></h2>

						<div class="container pt-2 pb-4">
							<form class="row g-3" action="" method="POST">

								<!-- Firstname & lastname -->
								<div class="col-lg-6 col-md-6">
									<div class="form-outline" data-mdb-input-init>
										<input type="text" id="name" name="name" class="form-control" required>
										<label class="form-label" for="name"><?php echo $language["first&lastName"]; ?>*</label>
									</div>
								</div>

								<!-- Email -->
								<div class="col-lg-6 col-md-6">
									<div class="form-outline" data-mdb-input-init>
										<input type="email" id="mail" name="mail" class="form-control" required>
										<label class="form-label" for="mail">Email*</label>
									</div>
								</div>

								<!-- Message -->
								<div class="col-12 mb-2">
									<div class="form-outline" data-mdb-input-init>
										<textarea class="form-control" id="message" name="message" rows="4" required></textarea>
										<label class="form-label" for="message"><?php echo $language["message"]; ?></label>
									</div>
								</div>

								<!-- Send button -->
								<div class="col-12 d-flex justify-content-center">
									<button type="submit" class="btn btn-primary" data-mdb-ripple-init><?php echo $language["send"]; ?></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Load footer -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/footer.php"; ?>
</body>
</html>