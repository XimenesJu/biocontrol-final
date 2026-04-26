<?php require_once'includes/header.php' ?>

<main class="page-privacy">

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>


    <div class="container">
        <div class="site-titles mb-5 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title">
                Resultados
            </h2>

            <div class="subtitle">
                da busca por:<br>

                <span class="text-secondary">
                    Lorem ipsum dolor sit
                </span>
            </div>
        </div>

        <?php /* se não houver resultados:
        <div>
            Nada encontrado.
        </div>
        */ ?>

        <?php for($i = 0; $i < 10; $i++): ?>
        <article class="mb-5">
            <div class="mb-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus odio dolorum eum veritatis ea nostrum? Excepturi deserunt mollitia perferendis aperiam nisi!
            </div>

            <a href="#" class="btn btn-link pl-0">
                Acessar
                <i class="fas fa-fw fa-angle-right"></i>
            </a>
        </article>
        <?php endfor ?>
    </div>

</main>

<?php require_once'includes/footer.php' ?>