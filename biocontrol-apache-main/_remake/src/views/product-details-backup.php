<?php require_once'includes/header.php' ?>

<main class="page-product-detail">

    <div class="page-headers">
        <div class="container pre-header">
            <a href="prague.php" class="btn btn-link">
                <i class="fas fa-fw fa-chevron-left"></i>
                Nome da praga
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">
        
            <div class="col-12 col-md-7 order-md-last text-lg-right mb-3">
                <img src="https://placeimg.com/570/530/nature" alt="" class="img-fluid secondary-border-radius-lg invisible" data-scrollclass="animate__animated animate__fadeInUp">
            </div>

            <div class="col-12 col-md-5 order-md-first invisible" data-scrollclass="animate__animated animate__fadeInLeft">
                <div class="site-titles mb-4">
                    <h2 class="title">
                        Metarriz
                    </h2>

                    <div class="subtitle">
                        Lorem Ipsum
                    </div>
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
        
        </div>

        <div class="section-padding tab-wrapper">
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

        <div class="site-titles section-bottom">
            <h2 class="title mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
                Ficha Técnica
            </h2>

            <ul class="bordered-list invisible" data-scrollclass="animate__animated animate__fadeInUp">
                <?php for($i = 0; $i < 5; $i++): ?>
                <li>
                    <div class="h5">
                        Número de conídios por grama
                    </div>

                    22,5 bilhões (2,25 x 10 10)
                </li>
                <?php endfor ?>
            </ul>
        </div>

        <div class="row section-bottom">
            <div class="col-12 col-lg-4 invisible" data-scrollclass="animate__animated animate__fadeInLeft">
                <div class="site-titles mb-4">
                    <h2 class="title">
                        Sobre
                    </h2>

                    <div class="subtitle">
                        a aplicação
                    </div>
                </div>

                <div class="description mb-4">
                    A aplicação do produto é realizada através da pulverização tratorizada ou aérea. É importante que se respeite as recomendações da bula e evite aplicações em dias muito quentes ou com baixa umidade do ar, assim como aplicação de qualquer outro produto. Se tiver alguma dúvida, pode nos ligar a qualquer momento.
                </div>
            </div>

            <div class="col-12 col-lg-8">

                <div class="video-player"
                    data-youtube-id="7X8II6J-6mU"
                    data-nothumb>

                    <div class="image invisible" data-scrollclass="animate__animated animate__fadeInRight">
                        <picture>
                            <source media="(min-width: 576px)" srcset="assets/images/horizontal-block-overlay-placeholder.jpg">
                            <img src="assets/images/horizontal-block-overlay-placeholder-xs.jpg" class="img-fluid secondary-border-radius-lg" alt="">
                        </picture>

                        <button type="button" class="play-button">
                            <i class="fas fa-fw fa-play"></i>
                        </button>
                    </div>

                    <div class="player">
                        <button type="button" class="close-player">
                            <i class="fas fa-fw fa-times"></i>
                        </button>

                        <div class="target"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title">
                Arquivos para download
            </h2>
        </div>

        <div class="description mb-5">
            Tudo que você precisa saber sobre o Metarriz Plus WP. É só clicar pra baixar.
        </div>

        <div class="section-bottom">
            <a href="#" class="btn btn-secondary text-uppercase mr-3 mb-2">
                Ficha de emergência
                <i class="fas fa-fw fa-download"></i>
            </a>

            <a href="#" class="btn btn-secondary text-uppercase mr-3 mb-2">
                Bula
                <i class="fas fa-fw fa-download"></i>
            </a>

            <a href="#" class="btn btn-secondary text-uppercase mr-3 mb-2">
                Folder
                <i class="fas fa-fw fa-download"></i>
            </a>
        </div>

        <div class="warning-block invisible" data-scrollclass="animate__animated animate__fadeIn">
            <div class="row align-items-center">
                <div class="col-12 col-md-9">
                    <span class="big">Atenção:</span>
                    estes produtos podem ser perigosos para a saúde humana, animal e ao meio ambiente. Leia atentamente as instruções contidas nos rótulos e bulas. Produtos exclusivamente para uso agrícola. Consulte sempre um engenheiro agrônomo. Utilize os equipamentos de proteção individual. Faça o manejo integrado de pragas. Descarte corretamente as embalagens e os restos dos produtos.
                </div>

                <div class="col-12 col-md-3">
                    <img src="assets/images/abc-bio.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="section-padding">
            <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
                <h2 class="title">
                    FAQ
                </h2>

                <div class="subtitle">
                    Perguntas frequentes
                </div>
            </div>

            <div class="description mb-4">
                Separamos as principais perguntas em um único lugar, assim fica mais fácil pra você.
            </div>

            <a href="faq.php" class="btn btn-secondary text-uppercase mr-3 mb-2">
                Ver mais
                <i class="fas fa-fw fa-angle-right"></i>
            </a>
        </div>

        <div class="section-bottom">
            <div class="site-titles mb-4 invisible" data-scrollclass="animate__animated animate__fadeInUp">
                <h2 class="title">
                    Fale conosco
                </h2>
            </div>

            <div class="description mb-5">
                Tem alguma dúvida, sugestão, elogio ou crítica?<br>
                É só preencher o rápido formulário abaixo e responderemos o mais breve possível. 
            </div>

            <?php require_once'includes/form-contact.php' ?>

        </div>

    </div>

</main>

<?php require_once'includes/footer.php' ?>