<?php require_once'includes/header.php' ?>

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>

<main>
    <section class="pragas__list">
        
        <div class="pragas__description">
        <p>
            As soluções da Biocontrol são baseadas em modernas técnicas de
            pesquisa, que buscam o aperfeiçoamento dos produtos e, também, o
            desenvolvimento de novas ferramentas de controle biológico,
            realizando testes agronômicos consecutivos em inúmeras culturas sob
            diversas condições climáticas. A eficácia dessas soluções geram
            grandes resultados aos agricultores.
        </p>
        </div>

        <div class="pragas__cards">
            <?php for($i = 0; $i < 8; $i++): ?>
                <div class="pragas__card">
                    <img src="assets/images/acaro-rajado.jpg" />
                    <h1>Ácaro rajado</h1>
                    <p>
                    Causa danos expressivos em mais de 150 culturas de grande
                    importância econômica.
                    </p>
                    <a class="btn btn-secondary" href="#">conheça mais</a>
                </div>
            <?php endfor ?>
        </div>
    </section>
</main>

<?php require_once'includes/footer.php' ?>