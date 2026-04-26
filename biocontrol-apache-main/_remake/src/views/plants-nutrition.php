<?php require_once'includes/header.php' ?>

<main class="page-plants-nutrition">

    <div class="page-headers">
        <div class="container pre-header">
            <a href="index.php" class="btn btn-link">
                <i class="fas fa-fw fa-chevron-left"></i>
                Home
            </a>
        </div>

        <div class="header-content" data-responsive-bg>

            <picture class="bg-image">
                <source media="(min-width: 768px)" srcset="assets/images/header-bg.jpg">
                <img src="assets/images/header-bg-xs.jpg" alt="">
            </picture>

            <div class="content-wrapper container" data-move-on-scroll data-speed="1" data-direction="bottom">
                <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    <h2 class="title">
                        Nutrição
                    </h2>

                    <div class="subtitle">
                        de plantas
                    </div>
                </div>

                <div class="description invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    Proin interdum nisi sit amet metus laoreet dapibus. Aliquam fringilla porttitor lacus, et iaculis justo tempus in. Etiam sodales orci dolor, sit amet pharetra urna varius non. Nunc molestie nisi a volutpat condimentum.
                </div>
            </div>
        </div>
    </div>

    <div class="container section-top">
        <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title">
                Inoculantes
            </h2>
        </div>

        <div class="description mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            Proin interdum nisi sit amet metus laoreet dapibus. Aliquam fringilla porttitor lacus, et iaculis justo tempus in. Etiam sodales orci dolor, sit amet pharetra urna varius non. Nunc molestie nisi a volutpat condimentum.
        </div>

        <hr class="my-5">

        <div class="row mb-5">
        <?php for($i = 0; $i < 2; $i++): ?>

            <article class="col-9 col-sm-4 mb-4">
                <div class="text-center mb-3 invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    <a href="product-details.php" class="text-center d-block">
                        <img src="assets/images/product-bag.jpg" class="img-fluid" alt="">
                    </a>
                </div>

                <div class="invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    <a href="product-details.php" class="text-center d-block">
                        <h3 class="title-plus text-left">
                            Qualidade

                            <span class="font-weight-light d-block">
                                Cotésia Biocontrol
                            </span>
                        </h3>
                    </a>
                </div>
            </article>

            <?php endfor ?>
        </div>

        <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title">
                Organominerais
            </h2>
        </div>

        <div class="description mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            Proin interdum nisi sit amet metus laoreet dapibus. Aliquam fringilla porttitor lacus, et iaculis justo tempus in. Etiam sodales orci dolor, sit amet pharetra urna varius non. Nunc molestie nisi a volutpat condimentum.
        </div>

        <hr class="my-5">

        <div class="row mb-5">
        <?php for($i = 0; $i < 3; $i++): ?>

            <article class="col-9 col-sm-4 mb-4">
                <div class="text-center mb-3 invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    <a href="product-details.php" class="text-center d-block">
                        <img src="assets/images/product-bag.jpg" class="img-fluid" alt="">
                    </a>
                </div>

                <div class="invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    <a href="product-details.php" class="text-center d-block">
                        <h3 class="title-plus text-left">
                            Qualidade

                            <span class="font-weight-light d-block">
                                Cotésia Biocontrol
                            </span>
                        </h3>
                    </a>
                </div>
            </article>

            <?php endfor ?>
        </div>
    </div>

</main>

<?php require_once'includes/footer.php' ?>