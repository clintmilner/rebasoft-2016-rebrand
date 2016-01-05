<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Rebasoft
 */
?>

<?php get_header(); ?>

	<div class="container-fluid rs-feed">
		<div id="rs-sub-header" class="row">
			<div class="col-xs-12">
				<h1><?php esc_html_e( '404', 'empowering-your-network' ); ?></h1>
			</div>
		</div>

		<div id="rs-main-content-top" class="row rs-main-content rs-team">
			<div class="col-sm-12 col-md-7">
				<h2>Oops! That page can't be found</h2>
				<p>Please use the navigation above or below, <br />ring us on +44(0) 800 779 7322, <br /> tweet us <a href="https://twitter.com/rebasoft" target="_blank">@rebasoft</a> <br/> or the Contact Form on the right to find the information you're looking for.</p>
				<p>Thanks!</p>
				<p>The Rebasoft Team</p>
			</div>

			<?php get_template_part( '/template-parts/content', 'contactform' ); ?>

		</div>

		<?php get_footer(); ?>

	</div>
