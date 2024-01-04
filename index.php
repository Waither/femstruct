<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/cookieManagment.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>

    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Maciej Gąsior">
    <meta name="description" content="">

    <!-- Title & icon -->
    <title><?php echo $language["name"]; ?></title>
    <link rel="icon" href="">

    <!-- CSS files -->
    <link type="text/css" rel="stylesheet" href="src/css/fontawesome.min.css">
    <?php
		// Choose style
        if (isset($_COOKIE['MDBstyle']) && $_COOKIE['MDBstyle'] == 'dark') {
            echo '<link type="text/css" rel="stylesheet" href="src/css/mdb.dark.min.css">';
        }
        else {
            echo '<link type="text/css" rel="stylesheet" href="src/css/mdb.min.css">';
        }
    ?>
    <link type="text/css" rel="stylesheet" href="src/css/main.css">

    <!-- JS files -->
    <script type="text/javascript" src="src/js/popper.min.js"></script>
    <script type="text/javascript" src="src/js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="src/js/fontawesome.min.js"></script>
    <script type="text/javascript" src="src/js/mdb.umd.min.js" defer></script>
    <script type="text/javascript" src="src/js/main.js" defer></script>

	<script>

		// Do sth after document ready
		$(document).ready(function() {
			
		})
	</script>
</head>
<body>

	<!-- Load navbar -->
	<?php require_once(__DIR__ ."/src/php/navbar.php"); ?>

	<!-- Main div -->
	<div id="main" class="mb-2">
		
	</div>

	<!-- Load footer -->
	<?php require_once(__DIR__ ."/src/php/navbar.php"); ?>
</body>
</html>