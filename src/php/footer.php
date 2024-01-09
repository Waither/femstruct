<?php
    // Get cookie data
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/getCookie.php'
?>

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">

    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between px-5 py-3 border-bottom">

        <!-- Left -->
        <div class="me-5 d-none d-lg-flex flex-column justify-content-center">
            <span class="fs-5"><?php echo $language["social"]; ?>:</span>
        </div>

        <!-- Right -->
        <div>
            <a class="btn btn-dark btn-floating m-1" style="background-color: #3b5998" href="#!" role="button" target="_blank" data-mdb-ripple-init data-mdb-popover-init data-mdb-trigger="hover" data-mdb-placement="top" data-mdb-content="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-floating m-1" style="background-color: #55acee" href="#!" role="button" target="_blank" data-mdb-ripple-init data-mdb-popover-init data-mdb-trigger="hover" data-mdb-placement="top" data-mdb-content="Twitter / X"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button" target="_blank" data-mdb-ripple-init data-mdb-popover-init data-mdb-trigger="hover" data-mdb-placement="top" data-mdb-content="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
    </section>

    <!-- Section: Description -->
    <section>
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">

                <!-- Description -->
                <div class="col-lg-4 col-md-6 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-1"><img src="/src/images/logo/logo.png" height="100" alt="Logo"></h6>
                    <p>
                        NIP ---<br>
                        REGON ---<br>
                        KRS ---
                    </p>
                </div>

                <!-- Contact -->
                <div class="col-lg-4 col-md-6 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4"><?php echo $language["contact"]; ?></h6>
                    <p><i class="fas fa-location-dot me-2"></i></p>
                    <p><i class="fas fa-clock me-2"></i><?php echo $language['open']; ?> 9:00 - 17:00</p>
                    <p><i class="fas fa-envelope me-2"></i></p>
                    <p><i class="fas fa-phone me-2"></i></p>
                </div>
                
                <!-- Map -->
                <div class="col-lg-4 col-md-12 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4"><?php echo $language["map"]; ?></h6>
                    MAPA
                </div>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <div class="text-center p-4 fs-5 fw-bold" style="background-color: rgba(0, 0, 0, 0.05);">
        <span onclick="window.location='/'" role="button">Copyright © <?php echo date("Y"); ?> <?php echo $language["name"]; ?></span>
    </div>
</footer>