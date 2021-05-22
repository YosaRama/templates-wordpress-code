<?php
/**
 * Template Name: Homepage Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage project
 * @since project
 */

get_header();
?>

<main id="site-content" role="main">

    <div>
        <h1>Yosa Rama Dinata</h1>
        <p>Web Developer</p>
    </div>
    
    <?php the_content(); ?>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
