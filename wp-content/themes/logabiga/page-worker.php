<?php
/*
Template Name: Worker
*/
?>
<?php get_header(); ?>
    <section class="worker">

        <div class="margin">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="<?php echo get_option('home'); ?>/">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo get_option('home'); ?>/agency">Агентство</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Надежда Кутузова</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between worker-case">
                <div class="d-flex flex-column description-worker">
                    <h4>«Не откладывай на завтра то,
что можно сделать
послезавтра»</h4>
                    <h5>Надежда Кутузова</h5>
                    <h5>Client Service Director</h5>
                    <h6>Окончила факультет международных отношений и, наверняка, могла бы улаживать конфликты мирового масштаба, однако нашла себя в рекламе, в которой счастлива уже более 10 лет.

Работала в топовых агентствах Беларуси, Украины. В списке клиентов самые крупные игроки беларуского рынка: МТС, Нетпекеп, Альфа-Банк, Савушкин продукт, А-100 Девелопмент.

Фанат путешествий, карт и аэропортов.</h6>
                </div>
                <div class="worker-photo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/worker1.jpg">
                </div>
            </div>
        </div>

    </section>
<?php get_footer(); ?>