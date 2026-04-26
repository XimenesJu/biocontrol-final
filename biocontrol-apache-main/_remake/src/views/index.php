<?php require_once'includes/header.php' ?>

<link rel="stylesheet" href="assets/js/vendors/owl.carousel.min.css">

<div class="content-page">

    <?php include 'includes/overlay.php' ?>
    
    <?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/main_header.php' ?>

    <div class="owl-carousel owl-theme CulturasCarousel">
        <div class="item">
            <div>
                <img src="assets/images/sementes.jpg"/>
                <div class="culturasCarousel-title-container">
                    <h2 class="culturasTitle">
                        Teste
                    </h2>
                </div>
            </div>
        </div>
        <div class="item"><div>
                <img src="assets/images/sementes.jpg"/>
                <div class="culturasCarousel-title-container">
                    <h2 class="culturasTitle">
                        Teste 2
                    </h2>
                </div>
            </div>
        </div>
        <div class="item">
            <div>
                <img src="assets/images/sementes.jpg"/>
                <div class="culturasCarousel-title-container">
                    <h2 class="culturasTitle">
                        Teste 3
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="searchbar">
        <div class="topnav">
            <label class="text-topNav">PESQUISE POR CATEGORIA</label>
            <form class="form-searchBar-home">
                <input type="text" placeholder="cultura" class="input-topNav item-searchBar" />
                <input type="text" placeholder="praga" class="input-topNav item-searchBar" />
                <input type="text" placeholder="pesquisa" class="input-topNav item-searchBar" />
                <button type="submit" class="button-topNav item-searchBar">PESQUISAR</button>
            </form>
        </div>
    </div>

    <div class="home__info">
        <div class="row info__cards justify-content-between section-top" data-scrollclass="animate__animated animate__fadeInUp">
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
                <a class="btn btn-secondary" href="#">leia mais</a>
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
                <a class="btn btn-secondary" href="#">leia mais</a>
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
                <a class="btn btn-secondary" href="#">leia mais</a>
            </div>
        </div>
    </div>

    <div class="container__blog animate__animated animate__fadeInUp scroll-fired" data-scrollclass="animate__animated animate__fadeInUp">
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
  </div>

    <div class="folhasContainer">
        <img src="assets/images/folhas.jpg" alt=""/>
    </div>

    <div class="container">
        <?php include 'includes/faq.php' ?>
    </div>

    <section class="newsletter container section-top">
        <div class="site-titles mb-2 animate__animated animate__fadeInUp scroll-fired" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title no-margin-top">
                Newsletter
            </h2>

            <div class="subtitle">
                Inscreva-se
            </div>
        </div>

        <div class="mb-4 animate__animated animate__fadeInUp scroll-fired" data-scrollclass="animate__animated animate__fadeInUp">
            Quer receber dicas e novidades diretamente no seu e-mail?<br>
            É só preencher com seus dados o formulário abaixo.
        </div>

        <form action="http://biocontrol.digialta.com.br/newsletter" method="post" class="contato-form validate-alta send-validation" autocomplete="off" data-msgsending="Enviando..." data-msgismail="Insira um endereço de e-mail válido." data-required="Este campo é obrigatório." data-msgsuccess="E-mail cadastrado com sucesso! Obrigado." data-msgerror="Ocorreu um erro, tente novamente mais tarde." data-grecaptcha="6Lf8ELAbAAAAAMbnxjhK3w8qSb73VMW3SNDSdTfl" novalidate="novalidate">

            <input type="hidden" name="_token" id="csrf-token" value="uJt8xuqQvu3wcP0NkYIJfb2h8TI05DcgbCGxoVBh">

            <div class="form-group mb-4">
                <input type="text" name="name" id="nome" class="form-control validate" required="">
                <label for="nome">Nome</label>
            </div>

            <div class="form-group mb-5">
                <input type="email" name="email" id="email" class="form-control validate" required="">
                <label for="email">E-mail</label>
            </div>

            <div class="row">
                <div class="col-12 col-lg-10">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="policy-check" name="policycheck" class="custom-control-input validate" required="">

                        <label class="custom-control-label normal-label small" for="policy-check">
                            Declaro que li e concordo com os termos de
                            <a href="http://biocontrol.digialta.com.br/cookies" class="text-underline">política de cookies</a>
                            e
                            <a href="http://biocontrol.digialta.com.br/politica-de-privacidade" class="text-underline">privacidade</a>
                            deste site.<br>

                            Sendo assim, autorizo o tratamento dos meus dados com atenção ás finalidades específicas nos mencionados termos.
                        </label>
                    </div>
                </div>

                <div class="text-right col-12 col-lg-2">
                    <button type="submit" class="btn btn-secondary">
                        Inscreva-se
                        <i class="fas fa-fw fa-angle-right"></i>
                    </button>
                </div>
            </div>

            <div class="feedback mt-3"></div>

        </form>
    </section>
    

    <!-- <div class="cookies-info">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, sapiente maiores </p>
        <a class="cookies-button" href="">Aceitar</a>
    </div> -->

<script src="https://www.google.com/recaptcha/api.js"></script>


<?php require_once'includes/footer.php' ?>

<script src="assets/js/vendors/owl.carousel.min.js"></script>