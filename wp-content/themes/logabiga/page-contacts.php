<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>
    <section class="d-flex align-items-center justify-content-center contacts">
        <div class="margin">
        <div class="d-flex flex-column align-items-center">
            <a href="index" class="logo-footer"><img alt="logabiga" src="<?php echo get_template_directory_uri() ?>/assets/images/logoblack.svg"></a>
            <div class="d-flex flex-column align-items-center tel-mail">
            <a href="tel:+375296328397">+375 (29) 632-83-97</a>
            <a href="tel:+375296284532">+375 (29) 628-45-32</a>
            <a href="mailto:your@logabiga.com">your@logabiga.com</a>
            </div>
            <p>ул. Якуба Коласа, 37-52
                <br>220013, Минск, Беларусь</p>
            <div class="d-flex justify-content-between icons">
                <a href="#"><img alt="instagram" src="<?php echo get_template_directory_uri() ?>/assets/images/instblack.svg"></a>
                <a href="#"><img alt="facebook" src="<?php echo get_template_directory_uri() ?>/assets/images/fbblack.svg"></a>
                <a href="#"><img alt="youtube" src="<?php echo get_template_directory_uri() ?>/assets/images/youtubeblack.svg"></a>
            </div>
        </div>
        </div>
    </section>
<?php get_footer(); ?>