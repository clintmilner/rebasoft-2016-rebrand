<?php
/*
	Template Name: Products Page
*/

/**
 * Created by IntelliJ IDEA.
 * User: clint
 * Date: 23/12/2015
 * Time: 15:19
 *
 * The template for displaying a Rebasoft Product.
 *
 *
 * @package Rebasoft
 */
?>


<?php get_header(); ?>


<div class="container-fluid">
    <div id="rs-sub-header" class="row">
        <div class="col-xs-12">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div id="rs-main-content-top" class="row">
        <div class="col-sm-12 col-md-7">
            <h2><?php echo get_field( 'product_sub_title' ); ?></h2>
            <?php echo get_field( 'product_information' ); ?>
            <a href="<?php echo get_field( 'download_button_url' ); ?>" class="btn btn-success btn-cta-xl"><?php echo get_field( 'download_button_text' ); ?></a>
        </div>

        <?php if ( is_active_sidebar( 'rs-sidebar-contact-form' ) ) : ?>
            <div id="primary-sidebar" class="col-sm-12 col-md-3 col-md-offset-1 contact-form primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'rs-sidebar-contact-form' ); ?>
            </div><!-- #primary-sidebar -->
        <?php endif; ?>
    </div>

    <?php if( get_field( 'overview_whitepaper_pdf' ) || get_field( 'technical_whitepaper_pdf' ) )  { ?>

        <div id="div-rs-techinfo" class="row">
            <div class="col-sm-3 col-sm-offset-1">
                <h2>Technical Information:</h2>
            </div>
            <div class="col-sm-3">
                <?php if( get_field( 'overview_whitepaper_pdf' ) )  { ?>
                        <a href="<?php echo get_field( 'overview_whitepaper_pdf' ); ?>" class="btn btn-block btn-cta-xl btn-success">Overview Whitepaper</a>
                <?php } ?>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <?php if( get_field( 'technical_whitepaper_pdf' ) )  { ?>
                    <a href="<?php echo get_field( 'technical_whitepaper_pdf' ); ?>" class="btn btn-block btn-cta-xl btn-success">Technical Whitepaper</a>
                <?php } ?>
            </div>
        </div>

    <?php } ?>

    <div id="rs-main-content-bottom" class="row">
        <div class="col-md-6 col-sm-12">
            <h2><?php echo get_field( 'data_title' ); ?></h2>
            <?php echo get_field( 'extra_data' ); ?>
        </div>
        <div class="col-md-6 col-sm-12">
            <h2><?php echo get_field( 'scenarios_title' ); ?></h2>

            <section class="scenarios">
                <?php echo get_field( 'challenge_data' ); ?>
            </section>
        </div>
    </div>
    <?php get_footer(); ?>

</div>
