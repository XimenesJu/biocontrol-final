<?php require_once'includes/header.php' ?>

<main class="page-contact">

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>

    <div class="container section-top">

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

<?php require_once'includes/footer.php' ?>