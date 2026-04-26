<?php require_once'includes/header.php' ?>

<main class="page-faq">

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>

    <div class="container section-top">
        <div class="row">

            <div class="col-side col-12 col-md-4 col-lg-3">
                <div class="collapsed-categories">
                    <button type="button" class="btn btn-primary categories-toggle">
                        Categorias
                        <i class="fas fa-fw fa-chevron-down"></i>
                    </button>

                    <ul class="categories">
                        <li class="active">
                            <a href="">
                                Todas

                                <?php // if is active: ?>
                                <i class="fas fa-fw fa-chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Quisquam dolorum
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Culpa eos minima
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Quos in animi
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-content col-12 col-md-8 col-lg-9">
                <form action="" class="faq-search">
                    <input type="search" name="faq_search" id="faq_search" class="form-control validate" placeholder="Pesquisar dúvida" required>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-fw fa-search"></i>
                    </button>
                </form>

                <?php /* Se a busca não retornar resultados:
                <div class="mt-4 text-gray-base">
                    Sua busca não retornou resultados.
                </div>
                */ ?>

                <?php for($i = 0; $i < 5; $i++): ?>
                <article class="faq-item faq-<?php echo $i ?>">
                    <button type="button" class="faq-btn" data-toggle="collapse" data-target=".faq-item.faq-<?php echo $i ?> .content">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit rem?

                        <i class="fas fa-fw fa-plus"></i>
                    </button>

                    <div class="content collapse">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid nulla ad earum. Sunt tenetur quibusdam earum recusandae blanditiis, sit ipsa, eveniet illo error laborum rerum dolorum autem cumque. Ab qui minima ratione odit eaque autem laudantium, molestias, temporibus consequuntur ipsam expedita animi esse at error nihil amet culpa doloribus fugit neque dicta officia dignissimos.
                    </div>
                </article>
                <?php endfor ?>
            </div>

        </div>

        <div class="section-top">

            <div class="site-titles mb-5 invisible" data-scrollclass="animate__animated animate__fadeInUp">
                <h2 class="title">
                    Fale conosco
                </h2>

                <div class="description">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, amet?
                </div>
            </div>

            <?php require_once'includes/form-contact.php' ?>
        </div>
    </div>

</main>

<?php require_once'includes/footer.php' ?>