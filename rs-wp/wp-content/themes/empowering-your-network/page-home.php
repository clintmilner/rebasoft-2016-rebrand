<?php 
/*
	Template Name: Home Page
*/
/**
 * The template for displaying home page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rebasoft
 */
?>

<?php get_header(); ?>

    <?php get_template_part( '/template-parts/content', 'carousel' ); ?>


 <div class="container-fluid">

    <?php get_template_part( '/template-parts/content', 'div1' ); ?>

    <?php get_template_part( '/template-parts/content', 'about' ); ?>

    <?php get_template_part( '/template-parts/content', 'casestudies' ); ?>

    <?php get_template_part( '/template-parts/content', 'twitter' ); ?>

    <?php get_template_part( '/template-parts/content', 'news' ); ?>

<?php get_footer(); ?>

</div>
