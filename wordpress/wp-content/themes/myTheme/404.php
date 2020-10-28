<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header(); ?>

<div class="page404">
    <h1 class="page404__title">OOPS! ERROR404</h1>
    <h3 class="page404__subtitle">The page you requested was not found!</h3>
    <a class="page404__btn" href='<?php bloginfo('wpurl')?>'>GO TO HOME PAGE</a>
</div>

<?php get_footer(); ?>