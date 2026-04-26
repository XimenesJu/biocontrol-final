<?php require_once'includes/header.php' ?>

<main class="page-solutions">

    <?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>
    

    <ol class="custom-breadcrumb container" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name">Institucional</span>

            <meta itemprop="position" content="1" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name">
                Quem Somos
            </span>

            <meta itemprop="position" content="2" />
        </li>
    </ol>

    <div class="container">

        <div class="section-top invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et rhoncus arcu, vestibulum malesuada risus. Quisque egestas maximus libero, sit amet eleifend diam fringilla ac. Nulla facilisi. Praesent vel laoreet elit, eget tincidunt nibh.
            </p>

            <p>
                Quisque ornare leo a pulvinar sodales. Etiam consectetur lacinia sapien, eu dignissim est. Proin purus urna, interdum vitae fermentum nec, ultrices a lorem. Nullam viverra finibus laoreet. Sed fermentum augue lectus, vitae dignissim quam vulputate sit amet. Sed vitae velit at est aliquam ullamcorper sed sed velit. Donec sodales tempor ultrices. Etiam non faucibus augue, consequat hendrerit erat. 
            </p>
        </div>

        <div class="timeline section-top">
            <?php for($i = 0; $i < 8; $i++): ?>

                <article class="timeline-item row justify-content-between invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    <div class="col-12 col-lg-5 order-lg-last">
                        <img src="https://placeimg.com/490/380/nature" alt="" class="img-fluid secondary-border-radius-lg">
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="text-wrapper">
                            <div class="site-titles mb-4">
                                <h2 class="title">
                                    Dolor
                                </h2>

                                <div class="subtitle">
                                    Lorem Ipsum
                                </div>
                            </div>

                            <div class="description">
                                Proin interdum nisi sit amet metus laoreet dapibus. Aliquam fringilla porttitor lacus, et iaculis justo tempus in. Etiam sodales orci dolor, sit amet pharetra urna varius non. Nunc molestie nisi a volutpat condimentum.
                            </div>
                        </div>
                    </div>
                </article>

            <?php endfor ?>
        </div>

    </div>

</main>

<?php require_once'includes/footer.php' ?>