<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rebasoft
 */

?>

<?php get_header(); ?>

<div class="container-fluid">
        <div id="rs-sub-header" class="row">
		<div class="col-xs-12">
			<h1>Rebasoft News &amp; Events</h1>
		</div>
	</div>

	<div id="rs-main-content-top" class="row rs-main-content">
		<div class="col-sm-12 col-md-7">


			<?php while( have_posts() ) : the_post(); ?>
				<section>
					<h2><?php the_title() ?></h2>
                    <span class="date"><?php echo get_the_date('Y-m-d') ?></span>
					<p><?php echo get_field( 'post_text_full' ) ?></p>
				</section>

			<?php endwhile; ?>
		</div>

		<?php if ( is_active_sidebar( 'rs-sidebar-contact-form' ) ) : ?>
			<div id="primary-sidebar" class="col-sm-12 col-md-3 col-md-offset-1 contact-form primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'rs-sidebar-contact-form' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
	</div>

	<?php get_footer(); ?>

</div>
