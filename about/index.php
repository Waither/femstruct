<?php
    // Get cookie data
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/getCookie.php'
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <?php
        // Load head
        require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/head.php';
    ?>
</head>
<body>

	<!-- Load navbar -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/navbar.php"; ?>

	<!-- Main div -->
	<div id="main" class="mb-2">
		O NAS
	</div>

	<!-- Load footer -->
	<?php require_once $_SERVER['DOCUMENT_ROOT']."/src/php/footer.php"; ?>
</body>
</html>