<?php require_once'includes/header.php' ?>

<!-- <link rel="stylesheet" href="assets/js/vendors/owl.carousel.min.css"> -->

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>

<div class="content-page">
    <div class="produto-info">
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
            <a class="bulaButton" href="">bula</a>
        </div>
    </div>

    <div class="alvosContainer">
        <div class="owl-carousel owl-theme alvosCarousel">
            <div class="alvosCarouselItem">
                <div class="imagem">
                    <img src="assets/images/acaro-rajado.jpg"/>
                </div>
                <h1>Bicudo da cana</h1>
                <a href="">conheça mais</a>
            </div>
            <div class="alvosCarouselItem">
                <div class="imagem">
                    <img src="assets/images/acaro-rajado.jpg"/>
                </div>
                <h1>Bicudo da cana</h1>
                <a href="">conheça mais</a>
            </div>
            <div class="alvosCarouselItem">
                <div class="imagem">
                    <img src="assets/images/acaro-rajado.jpg"/>
                </div>
                <h1>Bicudo da cana</h1>
                <a href="">conheça mais</a>
            </div>
            <div class="alvosCarouselItem">
                <div class="imagem">
                    <img src="assets/images/acaro-rajado.jpg"/>
                </div>
                <h1>Bicudo da cana</h1>
                <a href="">conheça mais</a>
            </div>
        </div>
    </div>



    <?php include 'includes/faq.php' ?>
    <?php include 'includes/fale_conosco.php' ?>

    <div class="abcBio">
            
        <div class="abcBio__description">
            <p>
            ATENÇÃO: ESTES PRODUTOS PODEM SER PERIGOSOS PARA A SAÚDE HUMANA, ANIMAL E AO MEIO AMBIENTE. 
            LEIA ATENTAMENTE AS INSTRUÇÕES CONTIDAS NOS RÓTULOS E BULAS. PRODUTOS EXCLUSIVAMENTE PARA USO AGRÍCOLA.
            CONSULTESEMPRE UM ENGENHEIRO AGRÔNOMO. UTILIZE OS EQUIPAMENTOS DE PROTEÇÃO INDIVIDUAL. FAÇA O MANEJO 
            INTEGRADO DE PRAGAS. DESCARTE CORRETAMENTE AS EMBALAGENS E OS RESTOS DOS PRODUTOS.
            </p>
        </div>

        <div class="abcBio__image">
            <img src="assets/images/logo-biocontrol.png" />
        </div>
    </div>

</div>


<script src="https://www.google.com/recaptcha/api.js"></script>

<?php require_once'includes/footer.php' ?>