<?php
/*
Template Name: Life
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'filters-year' );  ?>
    <section class="life">

        <div class="margin">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="<?php echo get_option('home'); ?>/">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Жизнь</li>
                </ol>
            </nav>
            <div class="d-grid cases">
                <div class="hover-case">
                    <a href="<?php echo get_option('home'); ?>/creative/case/"><div class="gridcase" id="case1">
                            <h3>7 наград
на фестивале
LAMA-2020</h3>
                            <img alt="ONLINER" src="<?php echo get_template_directory_uri() ?>/assets/images/onliner.jpg"></div></a>
                </div>
                <div class="hover-case">
                    <a href="<?php echo get_option('home'); ?>/creative/case/"><div class="gridcase" id="case2">
                            <h3>Вся сила <br>в скидках</h3>
                            <img alt="KIA" src="<?php echo get_template_directory_uri() ?>/assets/images/kia.jpg"></div></a>
                </div>
                <div class="hover-case">
                    <a href="<?php echo get_option('home'); ?>/creative/case/"><div class="gridcase" id="case3">
                            <h3>Постоянный <br>клиент</h3>
                            <img alt="БЕЛАРУСЬБАНК" src="<?php echo get_template_directory_uri() ?>/assets/images/belarusbank.jpg"></div></a>
                </div>
                <div class="hover-case">
                    <a href="<?php echo get_option('home'); ?>/creative/case/"><div class="gridcase" id="case4">
                            <h3>Всё, что <br>движется</h3>
                            <img alt="АВТОБИЗНЕС" src="<?php echo get_template_directory_uri() ?>/assets/images/client4.jpg"></div></a>
                </div>
                <div class="hover-case">
                    <a href="<?php echo get_option('home'); ?>/creative/case/"><div class="gridcase" id="case5">
                            <h3>Страшные <br>истории</h3>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/alfa.jpg"></div></a>
                </div>
                <div class="hover-case">
                    <a href="<?php echo get_option('home'); ?>/creative/case/"><div class="gridcase" id="case6">
                            <h3>Страшные <br>истории</h3>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/rectangle7.jpg"></div></a>
                </div>
                <div class="hover-case">
                    <a href="<?php echo get_option('home'); ?>/creative/case/"><div class="gridcase" id="case7">
                            <h3>Страшные <br>истории</h3>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/rectangle8.jpg"></div></a>
                </div>
                <div class="hover-case">
                    <a href="<?php echo get_option('home'); ?>/creative/case/"><div class="gridcase" id="case8">
                            <h3>Страшные <br>истории</h3>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/rectangle9.jpg"></div></a>
                </div>
            </div>
        </div>

    </section>
<?php get_footer(); ?>