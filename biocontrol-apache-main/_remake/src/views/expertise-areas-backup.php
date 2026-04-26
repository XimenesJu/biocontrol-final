<?php require_once'includes/header.php' ?>

<main class="page-contact">

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
                        Áreas
                    </h2>

                    <div class="subtitle">
                        de atuação
                    </div>
                </div>

                <div class="description invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    Proin interdum nisi sit amet metus laoreet dapibus. Aliquam fringilla porttitor lacus, et iaculis justo tempus in. Etiam sodales orci dolor, sit amet pharetra urna varius non. Nunc molestie nisi a volutpat condimentum.
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center section-top">
        <img src="assets/images/map.jpg" alt="" class="img-fluid">
    </div>

    <div class="container section-top">

        <div class="site-titles mb-5 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title">
                Fale conosco
            </h2>

            <div class="subtitle">
                Envie sua mensagem
            </div>
        </div>

        <?php require_once'includes/form-contact.php' ?>

    </div>

</main>

<?php require_once'includes/footer.php' ?>