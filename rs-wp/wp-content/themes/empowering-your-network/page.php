<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rebasoft
 */
?>

<?php get_header(); ?>

<div class="container-fluid rs-feed">
	<div id="rs-sub-header" class="row">
		<div class="col-xs-12">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>

	<div id="rs-main-content-top" class="row rs-main-content rs-team">
		<div class="col-sm-12 col-md-7">

			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; ?>
		</div>

		<?php get_template_part( '/template-parts/content', 'contactform' ); ?>

	</div>

	<?php get_footer(); ?>

</div>