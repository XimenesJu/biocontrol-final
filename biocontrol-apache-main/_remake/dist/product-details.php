<?php require_once'includes/header.php' ?>

<link rel="stylesheet" href="assets/js/vendors/owl.carousel.min.css">

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>

<div class="content-page">
    <div class="produto-info container">
        <div class="description">
            <div class="description-text">
                <h1>Bouveriz WP</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Laborum, omnis laudantium impedit tenetur beatae labore molestiae 
                saepe pariatur? Ducimus incidunt aut optio culpa illum est dolore libero quia sint quis.<br>
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ad labore, eos saepe voluptas 
                voluptatem. Architecto, mollitia? Veniam tempora facilis a incidunt sunt natus voluptatem 
                eaque corrupti dolores doloribus? Repellat.
                </p>
            </div>
            <div class="description-carousel">
                <div class="owl-carousel owl-theme produtoCarousel">
                    <div class="produtoCarouselItem">
                        <img src="assets/images/product-bag.jpg" />
                    </div>
                    <div class="produtoCarouselItem">
                        <img src="assets/images/product-bag.jpg" />
                    </div>
                    <div class="produtoCarouselItem">
                        <img src="assets/images/product-bag.jpg" />
                    </div>
                    <div class="produtoCarouselItem">
                        <img src="assets/images/product-bag.jpg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="beneficios">
            <h1>Beneficios:</h1>
            <ul>
                <li>Residual longo.</li>
                <li>Controle de adultos bicudo da cana.</li>
                <li>Menor agressividade ao meio ambiente.</li>
            </ul>
        </div>
        <div class="download">
            <h1>Arquivos para download</h1>
            <p>Tudo que você precisa saber sobre Bouveriz WP. <br> É só clicar pra baixar</p>
            <a class="btn btn-secondary" href="">bula</a>
        </div>
    </div>

    <div class="alvosContainer section-top">
        <div class="owl-carousel owl-theme alvosCarousel">
            <div class="alvosCarouselItem">
                <div class="imagem">
                    <img src="assets/images/acaro-rajado.jpg"/>
                </div>
                <h1>Bicudo da cana</h1>
                <a class="btn btn-secondary">conheça mais</a>
            </div>
            <div class="alvosCarouselItem">
                <div class="imagem">
                    <img src="assets/images/acaro-rajado.jpg"/>
                </div>
                <h1>Bicudo da cana</h1>
                <a href="" class="btn btn-secondary">conheça mais</a>
            </div>
            <div class="alvosCarouselItem">
                <div class="imagem">
                    <img src="assets/images/acaro-rajado.jpg"/>
                </div>
                <h1>Bicudo da cana</h1>
                <a href="" class="btn btn-secondary">conheça mais</a>
            </div>
            <div class="alvosCarouselItem">
                <div class="imagem">
                    <img src="assets/images/acaro-rajado.jpg"/>
                </div>
                <h1>Bicudo da cana</h1>
                <a href="" class="btn btn-secondary">conheça mais</a>
            </div>
        </div>
    </div>


    <div class="container section-top">
        <?php include 'includes/faq.php' ?>
    </div>

    <div class="container section-top">
        <?php include 'includes/fale_conosco.php' ?>
    </div>

    <div class="container section-top">
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
    </div>

    

</div>


<script src="https://www.google.com/recaptcha/api.js"></script>

<?php require_once'includes/footer.php' ?>

<script src="assets/js/vendors/owl.carousel.min.js"></script>
