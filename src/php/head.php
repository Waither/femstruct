<!-- Metadata -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Maciej Gąsior">
<meta name="description" content="FEMSTRUCT">

<!-- Title & icon -->
<title><?php echo $language["name"]; ?></title>
<link rel="icon" href="/src/images/logo/logo.png">

<!-- CSS files -->
<link type="text/css" rel="stylesheet" href="/src/css/fontawesome.min.css">
<?php
    // Choose style
    if (isset($_COOKIE['MDBstyle']) && $_COOKIE['MDBstyle'] == 'dark') {
        echo '<link type="text/css" rel="stylesheet" href="/src/css/mdb.dark.min.css">';
    }
    else {
        echo '<link type="text/css" rel="stylesheet" href="/src/css/mdb.min.css">';
    }
?>
<link type="text/css" rel="stylesheet" href="/src/css/main.css">

<!-- JS files -->
<script type="text/javascript" src="/src/js/popper.min.js"></script>
<script type="text/javascript" src="/src/js/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="/src/js/fontawesome.min.js"></script>
<script type="text/javascript" src="/src/js/mdb.umd.min.js" defer></script>
<script type="text/javascript" src="/src/js/main.js" defer></script>