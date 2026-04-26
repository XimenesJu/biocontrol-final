<?php require_once'includes/header.php' ?>

<!-- <link rel="stylesheet" href="assets/js/vendors/owl.carousel.min.css"> -->

<div class="content-page">
    
    <?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/main_header.php' ?>
    

    <div class="owl-carousel owl-theme CulturasCarousel">
        <div class="item"><img src="assets/images/banana.jpg"/></div>
        <div class="item"><img src="assets/images/banana.jpg"/></div>
        <div class="item"><img src="assets/images/banana.jpg"/></div>
        <div class="item"><img src="assets/images/banana.jpg"/></div>
        <div class="item"><img src="assets/images/banana.jpg"/></div>
        <div class="item"><img src="assets/images/banana.jpg"/></div>
        <div class="item"><img src="assets/images/banana.jpg"/></div>
    </div>

    <section class="searchbar">
        <div class="topnav">
            <p class="text-topNav">PESQUISE POR CATEGORIA</p>
            <form class="form-searchBar-home">
                <input type="text" placeholder="cultura" class="input-box item-searchBar" />
                <input type="text" placeholder="praga" class="input-box item-searchBar" />
                <input type="text" placeholder="pesquisa" class="input-box item-searchBar" />
                <button type="submit" class="item-searchBar">PESQUISAR</button>
            </form>
        </div>
    </section>

    <section class="row home__info">
        <section class="row info__cards">
            <div class="card_home">
                <img src="assets/images/quem-somos.jpg" alt="Avatar" />
                <div class="info__title">
                <h1>QUEM SOMOS</h1>
                <h3>25 ANOS DE HISTÓRIA</h3>
                </div>
                <div>
                <p class="info__description">
                    Respeito ao produtor rural e práticas que levaram mais
                    sustentabilidade ao campo.
                </p>
                </div>
                <div class="leia">
                    <a href="#">leia mais</a>
                </div>
            </div>
            <div class="card_home">
                <img src="assets/images/politica-ambiental.jpg" alt="Avatar" />
                <div class="info__title">
                <h1>POLÍTICA AMBIENTAL</h1>
                </div>
                <div>
                <p class="info__description">
                    As melhores técnicas de controle biológico.
                </p>
                </div>
                <div class="leia">
                    <a href="#">leia mais</a>
                </div>
            </div>
            <div class="card_home">
                <img src="assets/images/pesquisa.jpg" alt="Avatar" />
                <div class="info__title">
                    <h1>PESQUISA E DESENVOLVIMENTO</h1>
                </div>
                <div>
                    <p class="info__description">
                        A tecnologia e os testes avançados empregam qualidade em cada
                        produto desenvolvido pela Biocontrol.
                    </p>
                </div>
                <div class="leia">
                    <a href="#">leia mais</a>
                </div>
            </div>
        </section>
    </section>

    <section class="row container__blog">
        <div class="blog">
            <div class="blog__content">
                <h1 class="blog__title">Blog</h1>
                <p>
                Fique por dentro das principais notícias, tendências e
                acontecimentos relacionados ao universo da agricultura mundial.
                </p>
            </div>
            <div class="row leia">
                <a href="#">leia mais</a>
            </div>
        </div>

        <div class="news">
            <div class="news__card">
                <a href="#">
                <img src="assets/images/blog/noticia-blog.jpg" />
                </a>
            </div>

            <div class="row news__rodape">
                <div class="rodape__texto">
                    <p>AgTech se torna membro do grupo Nitro.</p>
                </div>
                <div class="rodape__button">
                    <a href="#">leia mais</a>
                </div>
            </div>
        </div>

        <div class="muda">
            <img src="assets/images/blog/muda.jpg" />
        </div>
  </section>

    <div class="folhasContainer">
        <img src="assets/images/folhas.jpg" alt=""/>
    </div>

    <?php include 'includes/faq.php' ?>

    <!-- <div class="form-wrapper">
        <?php include 'includes/form-contact.php' ?>
    </div> -->



    <!--  -->
    <!-- Adicionar o formulário do Newsletter que já está pronto no layout principal do site -->
    <!--  -->


    <div class="cookies-info">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, sapiente maiores </p>
        <a class="cookies-button" href="">Aceitar</a>
    </div>

<script src="https://www.google.com/recaptcha/api.js"></script>

<?php require_once'includes/footer.php' ?>