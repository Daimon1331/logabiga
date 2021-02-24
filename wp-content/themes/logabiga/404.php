<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */
?>
<?php get_header(); ?>

    <section class="d-flex flex-column align-items-center justify-content-center errormain">
        <p class="stroke">404</p>
        <p>Ищете что-то интересное на нашем сайте?
            <br>К сожалению, страница, которую Вы запрашиваете, не существует…</p>
        <a href="<?php echo get_option('home'); ?>/">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a>
    </section>

<?php get_footer(); ?>