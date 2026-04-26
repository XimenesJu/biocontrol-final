<?php require_once'includes/header.php' ?>

<link rel="stylesheet" href="assets/js/vendors/owl.carousel.min.css">

<main class="page-product-detail">

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
                        Broca-da-Cana
                    </h2>

                    <div class="subtitle">
                        Detalhe da praga
                    </div>
                </div>

                <div class="description invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    Proin interdum nisi sit amet metus laoreet dapibus. Aliquam fringilla porttitor lacus, et iaculis justo tempus in. Etiam sodales orci dolor, sit amet pharetra urna varius non. Nunc molestie nisi a volutpat condimentum.
                </div>
            </div>
        </div>
    </div>

    <ol class="custom-breadcrumb container" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="solutions.php" itemprop="name">Soluções</a>

            <meta itemprop="position" content="1" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="prague.php" itemprop="name">Pragas</a>

            <meta itemprop="position" content="2" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name">
                Praga detalhes
            </span>

            <meta itemprop="position" content="3" />
        </li>
    </ol>

    <div class="container section-top">

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, officiis! Veritatis repellat facere blanditiis officiis saepe ducimus veniam quas iste eos reprehenderit, illo recusandae praesentium mollitia quidem cumque, tempore odit. Itaque sed eum ratione minima pariatur est ducimus asperiores distinctio?

        <div class="row section-top invisible" data-scrollclass="animate__animated animate__fadeInUp">

            <div class="col-12 col-md-5">
                <div class="site-titles mb-4">
                    <h2 class="title">
                        Ciclo da praga
                    </h2>
                </div>

                <div class="description">
                    <p>
                        A maior parte dos inseticidas químicos possuem um período residual de 60 dias, e será bem provável que após o período de controle, a praga voltará a atacar. 
                    </p>

                    <p>
                        Como o efeito do Metarriz® é tardio, ou seja, atinge o pico de controle após os 45 ou 60 dias, ele se torna um grande aliado no manejo integrado da Cigarrinha-das-raízes, aumentando o período de controle da praga.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-7 text-lg-right mb-3">
                <img src="assets/images/cycle.jpg" alt="" class="img-fluid secondary-border-radius-lg">
            </div>
        
        </div>

        <div class="section-top tab-wrapper">
            <button type="button" class="btn btn-gray-base btn-lg btn-tab-header active"
                data-toggle="collapse"
                data-target=".tab-1:not(.show), .tab-2.show">

                ninfas / metro
            </button>

            <button type="button" class="btn btn-gray-base btn-lg btn-tab-header"
                data-toggle="collapse"
                data-target=".tab-1.show, .tab-2:not(.show)">

                parasitismo
            </button>

            <div class="collapse show tab-1">
                <div class="mt-4">
                    <img src="assets/images/graph-1.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="collapse tab-2">
                2            
            </div>
        </div>

        <article class="horizontal-block-overlay invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <div class="content">
                <div class="site-titles">
                    <h3 class="title">
                        Tipos de
                    </h3>

                    <div class="subtitle">
                        levantamentos
                    </div>
                </div>

                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ex quam nulla earum impedit omnis, magni ipsum culpa voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>

            <div class="image">

                <div class="owl-common" data-dots="true" data-nav="true" data-loop="true">
                    <div class="owl-carousel">
                    <?php for($j = 0; $j < 4; $j++): ?>

                        <div class="item">
                            <picture>
                                <source media="(min-width: 576px)" srcset="assets/images/horizontal-block-overlay-placeholder.jpg">
                                <img src="assets/images/horizontal-block-overlay-placeholder-xs.jpg" class="img-fluid secondary-border-radius-lg" alt="">
                            </picture>
                        </div>

                    <?php endfor ?>
                    </div>
                </div>
            </div>
        </article>

        <div class="section-bottom">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus quas veniam doloribus laborum molestiae modi quaerat amet, labore repudiandae beatae libero similique expedita provident temporibus voluptatem exercitationem? Earum minus autem molestias quos fuga odit architecto in eligendi dicta consequuntur voluptatem ut nihil ipsa, minima praesentium.
        </div>

        <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h3 class="title">
                Soluções
            </h3>

            <div class="subtitle">
                Indicadas
            </div>
        </div>

        <div class="description mb-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ex quam nulla earum impedit omnis, magni ipsum culpa voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div>

        <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h4 class="title medium">
                Macrobiológicos
            </h4>
        </div>

        <hr class="mb-lg-5">

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
                        <h4 class="title-plus text-left">
                            Qualidade

                            <span class="font-weight-light d-block">
                                Cotésia Biocontrol
                            </span>
                        </h4>
                    </a>
                </div>
            </article>

            <?php endfor ?>
        </div>

        <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h3 class="title medium">
                Monitoramento
            </h3>
        </div>

        <hr class="mb-lg-5">

        <div class="row mb-5">
            <article class="col-9 col-sm-4 mb-4">
                <div class="text-center mb-3 invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    <a href="product-details.php" class="text-center d-block">
                        <img src="assets/images/product-bag.jpg" class="img-fluid" alt="">
                    </a>
                </div>

                <div class="invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    <a href="product-details.php" class="text-center d-block">
                        <h4 class="title-plus text-left">
                            Qualidade

                            <span class="font-weight-light d-block">
                                Cotésia Biocontrol
                            </span>
                        </h4>
                    </a>
                </div>
            </article>
        </div>

        <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h3 class="title medium">
                Serviços
            </h3>
        </div>

        <hr class="mb-lg-5">

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
                        <h4 class="title-plus text-left">
                            Qualidade

                            <span class="font-weight-light d-block">
                                Cotésia Biocontrol
                            </span>
                        </h4>
                    </a>
                </div>
            </article>

            <?php endfor ?>
        </div>

    </div>

</main>

<?php require_once'includes/footer.php' ?>

<script src="assets/js/vendors/owl.carousel.min.js"></script>
