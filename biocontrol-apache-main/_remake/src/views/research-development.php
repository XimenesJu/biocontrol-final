<?php require_once'includes/header.php' ?>

<link rel="stylesheet" href="assets/js/vendors/owl.carousel.min.css">

<main class="page-research-development">

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>

    <ol class="custom-breadcrumb container" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name">Institucional</span>

            <meta itemprop="position" content="1" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name">
                Pesquisa e Desenvolvimento
            </span>

            <meta itemprop="position" content="2" />
        </li>
    </ol>

    <div class="container section-top">
        <div class="row align-items-center invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <div class="col-12 col-md-6 mb-4">
            
                <div class="owl-common" data-dots="true" data-nav="true" data-loop="true">
                    <div class="owl-carousel">
                    <?php for($i = 0; $i < 4; $i++): ?>

                        <div class="item">
                            <img src="https://placeimg.com/540/690/nature" alt="" class="img-fluid secondary-border-radius-lg">
                        </div>

                    <?php endfor ?>
                    </div>
                </div>
            
            </div>

            <div class="col-12 col-md-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reiciendis facere, quisquam ea quia, obcaecati, aliquid sunt modi ab numquam ullam minima quibusdam.</p>
                <p>Praesentium facere tempora ipsum fuga illum corporis dolorum at veniam enim adipisci! Provident recusandae eligendi commodi. Expedita praesentium ea incidunt a eligendi asperiores.</p>
                <p>Maiores, esse aliquam. Beatae iusto sit eligendi amet dolorem porro in voluptate sapiente architecto perferendis eos dolore, corporis officia. Deleniti minima ratione molestiae?</p>
                <p>Vel quos est quasi voluptates rem aliquam aut excepturi repudiandae accusantium quis nam inventore suscipit eaque sequi dignissimos perferendis a rerum, cupiditate reiciendis?</p>
                <p>Maiores, esse aliquam. Beatae iusto sit eligendi amet dolorem porro in voluptate sapiente architecto perferendis eos dolore, corporis officia. Deleniti minima ratione molestiae?</p>
            </div>
        </div>
    </div>

    <section class="container section-top">
        <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title">
                Parcerias
            </h2>
        </div>

        <div class="mb-5">
            Curabitur et molestie dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Etiam hendrerit dui sit amet dolor dapibus vulputate ipsum primis in faucibus orci. 
        </div>

        <div class="owl-common centered-nav spaced" data-nav="true" data-items="2" data-items-medium="3" data-margin="45">
            <div class="owl-carousel">
            <?php for($i = 0; $i < 5; $i++): ?>

                <div class="item blog-block-item">
                    <img src="https://placeimg.com/380/310/arch" class="img-fluid secondary-border-radius" alt="">
                </div>

            <?php endfor ?>
            </div>
        </div>
    </section>

</main>

<?php require_once'includes/footer.php' ?>

<script src="assets/js/vendors/owl.carousel.min.js"></script>