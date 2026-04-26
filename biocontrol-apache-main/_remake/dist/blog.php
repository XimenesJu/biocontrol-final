<?php require_once'includes/header.php' ?>

<main class="page-blog">

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>

    <?php // exibe o breadcrumb apenas se estiver listando posts de categorias. Não exibe na home do blog. ?>
    <ol class="custom-breadcrumb container" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="blog.php" itemprop="name">Blog</a>

            <meta itemprop="position" content="1" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name">Categoria</span>

            <meta itemprop="position" content="2" />
        </li>
    </ol>

    <div class="container section-top">
        <div class="row justify-content-end featured">
            <div class="col-12 col-lg-9">
                <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    <h2 class="subtitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h2>
                </div>

                <div class="description invisible" data-scrollclass="animate__animated animate__fadeInUp">
                    <div class="mb-3">
                        Proin interdum nisi sit amet metus laoreet dapibus. Aliquam fringilla porttitor lacus, et iaculis justo tempus in. Etiam sodales orci dolor, sit amet pharetra urna varius non. Nunc molestie nisi a volutpat.
                    </div>

                    <a href="blog-details.php" class="btn btn-link read-more">
                        Ler mais
                        <i class="fas fa-fw fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container section-top">
        <div class="row">
            <div class="col-12 col-md-3">
                <nav class="collapsed-categories">
                    <button type="button" class="btn btn-primary categories-toggle">
                        Categorias
                        <i class="fas fa-fw fa-chevron-down"></i>
                    </button>

                    <ul class="categories">
                        <li class="active">
                            <a href="">
                                Todas

                                <?php // if is active: ?>
                                <i class="fas fa-fw fa-chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Quisquam dolorum
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Culpa eos minima
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Quos in animi
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-12 col-md-9">
                <div class="row justify-content-between">

                    <?php for($i = 0; $i < 8; $i++): ?>
                    <article class="blog-block-item col-12 col-md-5">
                        <a href="blog-details.php">
                            <img src="https://placeimg.com/380/310/arch" class="img-fluid secondary-border-radius" alt="">
                        </a>

                        <div class="category">
                            Category ipsum
                        </div>

                        <h3 class="title">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit fermentum nibh a semiacis.
                        </h3>

                        <a href="blog.php" class="btn-link px-0">
                            Ler mais
                            <i class="fas fa-fw fa-chevron-right"></i>
                        </a>
                    </article>
                    <?php endfor ?>

                </div>

                <nav class="pagination">
                    <ol>
                        <li>
                            <a href="">
                                <i class="fas fa-fw fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="active">
                            <a href="">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="">
                                3
                            </a>
                        </li>
                        <li>
                            <a href="">
                                4
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-fw fa-chevron-right"></i>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</main>

<?php require_once'includes/footer.php' ?>