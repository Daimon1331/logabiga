<?php
/*
Template Name: Clients
*/
?>
<?php get_header(); ?>
    <section class="clients">
        <div class="d-flex justify-content-between filter">
            <p>все</p>
            <div class="d-flex">
                <p>авто</p>
                <p>b2b</p>
                <p>финансы</p>
                <p>продукты питания</p>
                <p>напитки</p>
                <p>услуги</p>
                <p>недвижимость</p>
                <p>телеком</p>
                <p>социальные проекты</p>
            </div>
        </div>
        <div class="margin">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="index">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Клиенты</li>
                </ol>
            </nav>
            <div class="d-grid cases">
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/onlinerclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/kiaclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case3">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/belarusbankclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case4">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/autobussinesclient.png"></div></a>
                </div>
                <div class="hover-case">
                    <a href="#"><div class="d-flex align-items-center justify-content-center gridcase" id="case5">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/alfaclient.png"></div></a>
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