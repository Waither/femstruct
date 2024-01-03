<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
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
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="/src/images/logo/MagdalenaZŚrodkiem.png" height="50" alt="Logo" loading="lazy">
                </a>

                <!-- Index -->
                <li class="nav-item my-auto mx-2">
                    <a class="nav-link" href="#"></a>
                </li>

                <!-- History -->
                <li class="nav-item my-auto mx-2 dropdown">
                    <a id="navbarDropdown1" class="nav-link dropdown-toggle" data-mdb-dropdown-init aria-expanded="false" role="button"></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">

                        <!-- History of the oil industry -->
                        <li><a class="dropdown-item" href="#"></a></li>

                        <!-- History of the Magdalena mine -->
                        <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                </li>

                <!-- Sightseeing -->
                <li class="nav-item my-auto mx-2 dropdown">
                    <a id="navbarDropdown2" class="nav-link dropdown-toggle" data-mdb-dropdown-init aria-expanded="false" role="button"></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">

                        <!-- Opening hours -->
                        <li><a class="dropdown-item" href="#"></a></li>

                        <!-- Tickets -->
                        <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                </li>

                <!-- Gallery -->
                <li class="nav-item my-auto mx-2">
                    <a class="nav-link" href="#"></a>
                </li>

                <!-- Contact -->
                <li class="nav-item my-auto mx-2">
                    <a class="nav-link" href="#"></a>
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
                    include_once('src/php/languages/all.php');
                    $lang = $language['langType'];
                ?>

                <!-- Language -->
                <li class="nav-item mx-2 dropdown">
                    <a data-mdb-dropdown-init class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-expanded="false"><i id="selected-lang-flag" class="flag-<?php echo $availableLanguages[$lang][1]; ?> flag m-0"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <!-- Selected language -->
                        <li><a class="dropdown-item" href="#"><i class="flag-<?php echo $availableLanguages[$lang][1]; ?> flag"></i><?php echo $availableLanguages[$lang][2]; ?><i class="fa fa-check text-success ms-2"></i></a></li>
                        <li><hr class="dropdown-divider" /></li>

                        <!-- Optional language -->
                        <?php
                            foreach($availableLanguages as $lg) {
                                if ($lg[0] != $lang) {
                                    ?>
                                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('<?php echo $lg[0]; ?>')"><i class="flag-<?php echo $lg[1]; ?> flag"></i><?php echo $lg[2]; ?></a></li>
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</nav>

<!-- Move main, so main will not uppear under navbar -->
<div id="blankUnderNav"></div>