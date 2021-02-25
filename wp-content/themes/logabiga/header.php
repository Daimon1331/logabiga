<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>

    </title>

    <!-- Meta -->
    <!-- Page Description Here -->
    <meta name="title" content=""/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!-- Disable screen scaling-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>-->

    <?php wp_head(); ?>

</head>

<body>

<header>
    <div class="margin">
        <div class="d-flex justify-content-between align-items-center nav">
            <a href="<?php echo get_option('home'); ?>/"><img class="logo-top" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg"></a>
            <nav class="d-flex justify-content-between minnav">
            <a href="#">Агенство</a>
            <a href="<?php echo get_option('home'); ?>/creative/">Креатив</a>
            <a href="#">Брендинг</a>
            <a href="<?php echo get_option('home'); ?>/clients/">Клиенты</a>
            <a href="#">Награды</a>
            <a href="<?php echo get_option('home'); ?>/contacts/">Контакты</a>
            </nav>
            <div class="d-flex language">
                <a href="#">РУС</a>
                <a href="#">ENG</a>
            </div>
            <img class="menu-button" src="<?php echo get_template_directory_uri() ?>/assets/images/burgermenu.png">
            <img class="menu-cross" src="<?php echo get_template_directory_uri() ?>/assets/images/cross.png">
        </div>

    </div>
</header>
<div class="mob-nav">
    <div class="margin">
    <nav class="d-flex justify-content-between minnav">
        <a href="#">Агенство</a>
        <a href="<?php echo get_option('home'); ?>/creative/">Креатив</a>
        <a href="#">Брендинг</a>
        <a href="<?php echo get_option('home'); ?>/clients/">Клиенты</a>
        <a href="#">Награды</a>
        <a href="<?php echo get_option('home'); ?>/contacts/">Контакты</a>
    </nav>
    </div>
</div>
