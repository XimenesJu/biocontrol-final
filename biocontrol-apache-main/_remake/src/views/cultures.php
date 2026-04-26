<?php require_once'includes/header.php' ?>

<link rel="stylesheet" href="assets/js/vendors/owl.carousel.min.css">

<?php $bgImg= 'assets/images/header-culturas.png';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>

<div class="content-page">
    <main>
      <section class="culturas__list" >
        <div class="culturas__description">
          <p>
            As soluções da Biocontrol são baseadas em modernas técnicas de
            pesquisa, que buscam o aperfeiçoamento dos produtos e, também, o
            desenvolvimento de novas ferramentas de controle biológico,
            realizando testes agronômicos consecutivos em inúmeras culturas sob
            diversas condições climáticas. A eficácia dessas soluções geram
            grandes resultados aos agricultores.
          </p>
        </div>

        <div class="culturas__cards">
            <?php for($i = 0; $i < 8; $i++): ?>
            <div class="culturas__card animate__animated animate__fadeInUp" data-scrollclass="animate__animated animate__fadeInUp">
                <img src="assets/images/cana-de-acucar.jpg" />
                <h1>Cana-de-açucar</h1>
                <p>
                A cana-de-açúcar é a principal matéria-prima para a fabricação do
                açúcar e álcool, com caules ricos em sacarose.
                </p>
                <a class="btn btn-secondary" href="#">Ver pragas</a>
            </div>
          <?php endfor ?>
        </div>
      </section>
    </main>
</div>

<script src="https://www.google.com/recaptcha/api.js"></script>

<?php require_once'includes/footer.php' ?>