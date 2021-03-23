<?php
/*
Template Name: Clients
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'filters' );  ?>
    <section class="clients">
        <div class="margin">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="<?php echo get_option('home'); ?>/">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Клиенты</li>
                </ol>
            </nav>
            <div class="d-grid cases">
                <div class="hover-case">
                    <a href="<?php echo get_option('home'); ?>/clients-filters/"><div class="d-flex align-items-center justify-content-center gridcase" id="case1">
                            <img alt="ONLINER" src="<?php echo get_template_directory_uri() ?>/assets/images/onlinerclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case2">
                            <img alt="KIA" src="<?php echo get_template_directory_uri() ?>/assets/images/kiaclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case3">
                            <img alt="БЕЛАРУСЬБАНК" src="<?php echo get_template_directory_uri() ?>/assets/images/belarusbankclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case4">
                            <img alt="АВТОБИЗНЕС" src="<?php echo get_template_directory_uri() ?>/assets/images/autobussinesclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case5">
                            <img alt="АЛЬФАБАНК" src="<?php echo get_template_directory_uri() ?>/assets/images/alfaclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case6">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/onlinerclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case7">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/onlinerclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case8">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/onlinerclient.png"></div></a>
                </div>
            </div>
        </div>

    </section>
<?php get_footer(); ?>