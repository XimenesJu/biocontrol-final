<?php require_once'includes/header.php' ?>

<link rel="stylesheet" href="assets/js/vendors/owl.carousel.min.css">

    <?php $bgImg= 'assets/images/cultura-aberta-banner.png';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>

<div class="content-page">
    <main>
        <div class="culturaOpen container">
            <div class="culturaOpen__description">
                <p>
                Além de grande produtor, com mais de 500 mil hectares de área de
                cultivo, o Brasil é grande consumidor da banana. A banana (Musa
                spp.) é uma das frutas mais consumidas no mundo, sendo produzida na
                maioria dos países tropicais. No Brasil, a cultura da banana ocupa o
                segundo lugar em produção, perdendo apenas para a laranja. O
                nordeste é a maior produtora, seguida das regiões sudeste, norte,
                Sul e centro-oeste.
                </p>
            </div>

            <div class="culturaOpen__cards container section-top">
                  <div class="culturaOpen__card">
                      <img src="assets/images/bicudo-da-cana.jpg"/>
                      <h1>Bicudo da Cana</h1>
                      <p>
                      Causa danos expressivos em mais de 150 culturas de grande
                      importância econômica.
                      </p>
                      <a href="#" class="btn btn-secondary">conheça mais</a>
                  </div>
            </div>

            <div class="container section-top">
                <?php include 'includes/fale_conosco.php' ?>
            </div>
        </div>
    </main>

</div>


<script src="https://www.google.com/recaptcha/api.js"></script>

<?php require_once'includes/footer.php' ?>