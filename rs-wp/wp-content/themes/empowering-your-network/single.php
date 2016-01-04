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
			<h1>Rebasoft <?php echo get_post_type(); ?></h1>
		</div>
	</div>

	<div id="rs-main-content-top" class="row rs-main-content">
		<div class="col-sm-12 col-md-7">


			<?php while( have_posts() ) : the_post(); ?>
				<section>
					<h2><?php the_title() ?></h2>
                    <?php if( get_post_type( $post ) == "blog" ) { ?>
                        <span class="glyphicon glyphicon-flash pull-left"></span>
                    <?php } else if( get_post_type( $post ) == "news") { ?>
                        <span class="glyphicon glyphicon-comment pull-left"></span>
                    <?php } ?>
                    <span class="date">&nbsp; <?php echo get_the_date('l, F j, Y') ?></span>
					<p><?php echo get_field( 'post_text_full' ) ?></p>
				</section>

			<?php endwhile; ?>
		</div>

        <?php get_template_part( '/template-parts/content', 'contactform' ); ?>
	</div>

	<?php get_footer(); ?>

</div>
