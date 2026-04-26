<?php require_once'includes/header.php' ?>

<link rel="stylesheet" href="assets/js/vendors/owl.carousel.min.css">

<main class="page-blog-details">

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>


    <div class="post-wrapper container">
        <ol class="custom-breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="blog.php" itemprop="name">Blog</a>

                <meta itemprop="position" content="1" />
            </li>

            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="blog.php" itemprop="name">Categoria</a>

                <meta itemprop="position" content="2" />
            </li>

            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </span>

                <meta itemprop="position" content="3" />
            </li>
        </ol>

        <div class="site-titles invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </h2>
        </div>

        <picture>
            <source media="(min-width: 768px)" srcset="https://placeimg.com/995/610/arch">
            <img src="https://placeimg.com/510/415/arch" class="img-fluid secondary-border-radius mb-5 invisible" data-scrollclass="animate__animated animate__fadeInUp" alt="">
        </picture>

        <div class="post-body">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium repellendus consectetur aliquam debitis inventore eum veniam sint dolor nobis quibusdam, aliquid, cum at enim ratione quisquam ducimus laudantium voluptate voluptates? Ullam quisquam consequuntur velit voluptas, quibusdam ducimus similique esse eveniet, tempore, nisi doloremque quae?</p>
            <p>Provident harum corporis hic! Excepturi perspiciatis, amet perferendis sapiente illum assumenda suscipit laudantium aut possimus non iure. Atque, magnam nam voluptatum hic fuga accusamus sit rerum cum sequi commodi sed eius ipsa ab ex voluptatibus fugiat dolorum aliquam at ullam aliquid? Blanditiis, a sunt!</p>
            <p><a href="#">Assumenda</a>, inventore illum velit commodi temporibus nobis numquam perspiciatis eius quisquam natus culpa voluptatem error libero tempore blanditiis earum doloribus dolores ipsa debitis quo id quia cupiditate. Quod autem nobis laborum ratione nostrum distinctio obcaecati, pariatur dolor nihil, error dicta ipsum magnam maiores dolores.</p>
            <p>Corporis non saepe error praesentium harum necessitatibus, eaque quaerat minus nesciunt totam esse quibusdam incidunt, officiis eum quisquam dicta quidem tempore veniam eligendi maxime accusamus deleniti natus? Repellendus vel, perspiciatis possimus temporibus praesentium inventore mollitia iste sapiente voluptatum ipsum cum consequuntur ut, recusandae veniam.</p>
            <p>Magni cumque inventore unde, quisquam rerum aliquam facere odio harum neque placeat numquam odit voluptas magnam nihil labore, quam accusantium voluptatum suscipit ut voluptate tenetur necessitatibus? Quibusdam quia esse quos aliquid ex ullam dolorum, reprehenderit vero quisquam non ab doloribus, repellat dolores ad ipsam!</p>
            <p>Natus, voluptatibus fuga tempore hic debitis commodi dicta ipsum dolores porro quasi alias, expedita maiores accusantium eveniet provident quisquam labore eligendi eos quos ab? Illo fuga asperiores aliquam blanditiis distinctio sed laboriosam amet magnam possimus error quisquam ipsum tempore, laudantium quibusdam consequatur optio facere!</p>
            <p>Sequi fugit, explicabo soluta optio possimus rem dolore ducimus praesentium quos itaque autem corrupti quas inventore nemo nobis vitae mollitia quasi dicta. Ea ex, quia deleniti odio a qui sed ullam nisi ab nulla esse dolor quis deserunt quos animi aspernatur officia! Cupiditate, cum!</p>
            <p>Excepturi veniam porro consequatur, suscipit atque dolor recusandae ipsum error repellat corporis, incidunt sunt quod rerum, adipisci exercitationem sit vitae molestiae perspiciatis! Temporibus velit cumque inventore minima deleniti? Suscipit quidem, accusantium ratione odit, explicabo fuga tenetur optio, vel assumenda soluta nulla eligendi provident iusto?</p>
            <p>Hic dolorem temporibus ipsa ex atque quaerat repellendus quia numquam recusandae corrupti natus odio ad, omnis consequuntur cupiditate tenetur. Eaque veniam ipsa nesciunt iusto in illum natus ipsam reprehenderit nihil perferendis explicabo nam, voluptatibus ratione est sint ut rerum aliquam sed excepturi eligendi nostrum?</p>
        </div>

        <div class="post-share">
            <span>Compartilhar:</span>
            <div class="addthis_inline_share_toolbox"></div>
        </div>
    </div>

    <aside class="another-posts container section-top">

        <div class="site-titles invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title">
                Notícias
            </h2>

            <div class="subtitle">
                Relacionadas
            </div>
        </div>

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

                <div class="owl-blog-posts" data-items="1" data-items-medium="2">
                    <div class="owl-carousel">
                    <?php for($i = 0; $i < 5; $i++): ?>

                        <div class="item blog-block-item">
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
                                <i class="fas fa-fw fa-angle-right"></i>
                            </a>
                        </div>

                    <?php endfor ?>
                    </div>

                    <nav class="owl-navigation">
                        <a href="javascript:;" class="prev"><i class="fas fa-angle-left"></i></a>
                        <a href="javascript:;" class="next"><i class="fas fa-angle-right"></i></a>
                    </nav>
                </div>
            </div>
        </div>

    </aside>

</main>

<?php require_once'includes/footer.php' ?>

<script src="assets/js/vendors/owl.carousel.min.js"></script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f9724d355eedb13"></script> 