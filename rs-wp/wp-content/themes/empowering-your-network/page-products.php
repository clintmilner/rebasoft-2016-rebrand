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

        <?php get_template_part( '/template-parts/content', 'contactform' ); ?>
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

            <?php if( get_field( 'show_case_studies' ) == 'yes' ) { ?>
                <h2>Paired Case Studies</h2>
                <p>Real-life examples of how Rebasoft and <?php the_title(); ?> are helping companies to visualise, monitor, and secure their networks.</p>
                <section class="case-studies">
                    <?php
                        $pageTitle = the_title(null, null, false);
                        $cs = new WP_Query( array( 'post_type' => 'case_study', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 2 ) );
                    ?>

                    <?php
                        while( $cs -> have_posts() ) : $cs -> the_post();
                            $csType = get_field( 'case_study_products_used' );
                            // here we are looping over every Case Study
                            // each Case Study has associated Products (AA, AC, RMC, TA)
                            // if the Case Study matches the page we're on, show that Case Study
                    ?>
                            <div class="col-sm-12">
                            <?php for( $i = 0; $i < count( $csType ); $i++ ) { ?>
                                <?php if( $csType[$i] == $pageTitle ) { ?>
                                    <a href="<?php the_field( 'case_study_page' ); ?>#<?php echo strtolower( str_replace(' ', '-', get_field( 'customer_name' ) ) ); ?>" title="Read More">
                                        <h3><?php echo get_field( 'customer_name' ); ?></h3>
                                        <p><?php echo get_field( 'case_study_blurb_short' ) ?></p>
                                    </a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </section>
            <?php } ?>
        </div>
    </div>
    <?php get_footer(); ?>

</div>
