<?php
    // Get cookie data
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/getCookie.php'
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary" <?php if (isset($_COOKIE['MDBstyle']) && $_COOKIE['MDBstyle'] == 'light') { echo 'style="background-color: #eee !important;"';} ?>>
    <div class="container-fluid">

        <!-- Toggle button -->
        <button type="button" class="navbar-toggler" data-mdb-collapse-init data-mdb-target="#navbarLeftAlign" aria-controls="navbarLeftAlign" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars fa-2x"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div id="navbarLeftAlign" class="collapse navbar-collapse fs-5">

            <!-- Left -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!-- Logo -->
                <a class="navbar-brand mt-2 mt-lg-0" href="/">
                    <img src="/src/images/logo/logo<?php if (isset($_COOKIE['MDBstyle']) && $_COOKIE['MDBstyle'] == 'dark') {echo "White"; } else { echo "Black"; } ?>.svg" height="60" alt="Logo">
                </a>

                <!-- Index -->
                <li class="nav-item my-auto mx-2">
                    <a class="nav-link" href="/"><?php echo $language["home"]; ?></a>
                </li>

                <!-- <li class="nav-item my-auto mx-2 dropdown">
                    <a id="navbarDropdown1" class="nav-link dropdown-toggle" data-mdb-dropdown-init aria-expanded="false" role="button"></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                </li> -->
                
                <!-- Offer -->
                <li class="nav-item my-auto mx-2">
                    <a class="nav-link" href="#" onclick="window.location.replace('/offer')"><?php echo $language["offer"]; ?></a>
                </li>

                <!-- About -->
                <li class="nav-item my-auto mx-2">
                    <a class="nav-link" href="/about"><?php echo $language["about"]; ?></a>
                </li>

                <!-- Gallery -->
                <!-- <li class="nav-item my-auto mx-2">
                    <a class="nav-link" href="/gallery"><?php // echo $language["gallery"]; ?></a>
                </li> -->

                 <!-- Contact -->
                 <li class="nav-item my-auto mx-2">
                    <a class="nav-link" href="/contact"><?php echo $language["contact"]; ?></a>
                </li>
            </ul>

            <!-- Right -->
            <div class="d-flex align-items-center navbar-nav mb-2 mb-lg-0">

                <!-- Style switch -->
                <li class="nav-item mx-2 align-items-center d-flex">
                    <i class="fas fa-sun"></i>
                    <div class="ms-2 form-check form-switch">
                        <input onchange="changeMDBstyle(this.checked)" id="styleSwitch" class="form-check-input" type="checkbox" role="switch" <?php if (isset($_COOKIE['MDBstyle']) && $_COOKIE['MDBstyle'] == 'dark') { echo "checked"; }; ?>>
                    </div>
                    <i class="fas fa-moon" style="margin-left: -0.5rem !important;"></i>
                </li>

                <?php
                    // Get available languages
                    include_once($_SERVER['DOCUMENT_ROOT'].'/src/php/languages/all.php');
                    $lang = $language['langType'];
                ?>

                <!-- Language -->
                <!-- ODKOMENTOWAĆ JAK BĘDZIE WSZYSTKO -->
                <!-- <li class="nav-item mx-2 dropdown">
                    <a data-mdb-dropdown-init class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-expanded="false"><i id="selected-lang-flag" class="flag-<?php // echo $availableLanguages[$lang][1]; ?> flag m-0"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> -->
                        <?php
                            foreach ($availableLanguages as $lg) {
                                ?>
                                <!-- <li>
                                    <a class="dropdown-item" href="#" onclick="changeLanguage('<?php // echo $lg[0]; ?>')">
                                        <i class="flag-<?php // echo $lg[1]; ?> flag"></i>
                                        <?php
                                            // echo $lg[2];
                                            // if ($lg[0] == $lang) { echo '<i class="fa fa-check text-success ms-2"></i>'; } 
                                        ?>
                                    </a>
                                </li> -->
                                <?php
                            }
                        ?>
                    <!-- </ul>
                </li> -->
            </div>
        </div>
    </div>
</nav>

<!-- Move main, so main will not uppear under navbar -->
<div id="blankUnderNav"></div>