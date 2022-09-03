<?php include 'templates/header.php'; ?>



<header class="py-0">
    <div class="container px-lg-5">
        <div class="p-4 p-lg-3 bg-light rounded-3 text-center">
            <div class="m-4 m-lg-3">
                <h1 class="display-5 fw-bold">A warm welcome!</h1>
            </div>
        </div>
    </div>
</header>

<!-- Page Content-->
<section class="pt-4">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="col-lg-6 col-xxl-10 mb-5">
            <div class="card bg-light border-0 h-100">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                    <h2 class="fs-4 fw-bold">
                        <?php
                        require_once 'config.php';
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>










<?php include 'templates/scripts.php'; ?>
<?php include 'templates/footer.php'; ?>