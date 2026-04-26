<?php require_once'includes/header.php' ?>

<main class="page-contact">

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'Área de atuação';  $text='A Biocontrol atua enviando seus agentes<br> de controle biológico para todo território nacional,<br> além de possuir representantes técnicos<br> nos estados de SP, MT, MG e GO.'; include'includes/secondary_header.php' ?>

    <div class="container section-top">

        <div class="imagePlantaContainer">
            <img src="assets/images/muda.jpg" alt="">
        </div>

        <div class="site-titles mb-5 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title">
                Fale conosco
            </h2>

            <div class="subtitle">
                Envie sua mensagem
            </div>
        </div>

        <?php require_once'includes/form-contact.php' ?>
    </div>

</main>


<script src="https://www.google.com/recaptcha/api.js"></script>

<?php require_once'includes/footer.php' ?>