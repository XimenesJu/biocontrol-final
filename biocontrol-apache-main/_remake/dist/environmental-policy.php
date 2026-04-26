<?php require_once'includes/header.php' ?>

<link rel="stylesheet" href="assets/js/vendors/owl.carousel.min.css">

<main class="page-ambiental-privacy">

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>

    <ol class="custom-breadcrumb container" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name">Institucional</span>

            <meta itemprop="position" content="1" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name">
                Política Ambiental
            </span>

            <meta itemprop="position" content="2" />
        </li>
    </ol>

    <div class="container">

        <?php for($i = 0; $i < 3; $i++): ?>
        <article class="horizontal-block-overlay invisible" data-scrollclass="animate__animated animate__fadeInUp">
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

            <div class="content">
                <div class="site-titles">
                    <h3 class="title">
                        Cigarrinha-das-raízes
                    </h3>
                </div>

                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ex quam nulla earum impedit omnis, magni ipsum culpa voluptates.
                </div>

                <a href="" class="btn btn-secondary">
                    Conheça mais
                    <i class="fas fa-fw fa-angle-right"></i>
                </a>
            </div>
        </article>
        <?php endfor ?>

    </div>

</main>

<?php require_once'includes/footer.php' ?>

<script src="assets/js/vendors/owl.carousel.min.js"></script>
