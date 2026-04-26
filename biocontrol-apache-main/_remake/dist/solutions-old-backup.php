<?php require_once'includes/header.php' ?>

<main class="page-solutions">

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
                        Soluções
                    </h2>

                    <div class="subtitle">
                        Para plantações
                    </div>
                </div>

                <div class="description invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    Proin interdum nisi sit amet metus laoreet dapibus. Aliquam fringilla porttitor lacus, et iaculis justo tempus in. Etiam sodales orci dolor, sit amet pharetra urna varius non. Nunc molestie nisi a volutpat condimentum.
                </div>
            </div>
        </div>
    </div>

    <div class="container section-top">

        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, soluta. Sed aperiam tempore non, rerum repellat incidunt neque aut similique necessitatibus velit magni, a, repudiandae illo? Labore, quibusdam natus et velit repellat quam, aliquam delectus commodi illo incidunt harum repudiandae quae nesciunt est error!

        <div class="row justify-content-between section-top">
        <?php for($i = 0; $i < 7; $i++): ?>

            <article class="col-12 col-sm-6 col-lg-5 invisible" data-scrollclass="animate__animated animate__fadeInUp">
                <div class="vertical-block-overlay title-single-line">
                    <div class="image">
                        <img src="assets/images/vertical-block-overlay-placeholder.jpg" class="img-fluid secondary-border-radius-lg" alt="">
                    </div>

                    <div class="content">
                        <div class="site-titles">
                            <h3 class="title">
                                Cana-de-açúcar
                            </h3>
                        </div>

                        <div class="description">
                            Os macro-organismos (predadores e parasitóides) são perigosos para toda cultura, por isso é importante o controle.
                        </div>

                        <a href="prague.php" class="btn btn-secondary">
                            Ver Pragas
                            <i class="fas fa-fw fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <?php endfor ?>
        </div>
    </div>

</main>

<?php require_once'includes/footer.php' ?>