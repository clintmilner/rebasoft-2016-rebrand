<?php
/**
 * Created by IntelliJ IDEA.
 * User: clint
 * Date: 23/12/2015
 * Time: 14:57
 *
 * Template part for displaying the Rebasoft Info on Home Page
 *
 * @package Rebasoft
 */

$case_study_headline = get_field( 'case_study_headline' );
$case_study_intro = get_field( 'case_study_intro' );
$case_study_button_text = get_field( 'case_study_button_text' );
$case_study_page = get_field( 'case_study_page' );

?>

<div id="div-rs-casestudies" class="row" data-type="background" data-speed="3">
    <div class="col-sm-11"><h1><?php echo $case_study_headline; ?></h1></div>
    <div class="col-sm-12 col-md-5 col-md-offset-1">

        <?php
            $clients = new WP_Query( array( 'post_type' => 'case_study', 'orderby' => 'post_id', 'order' => 'ASC' ) );
        ?>

        <?php while( $clients -> have_posts() ) : $clients -> the_post(); ?>

            <?php if( 'true' == get_field('feature_on_home_page') ) : ?>
                <section class="row">
                    <div class="col-sm-4 logo">
                        <img src="<?php the_field( 'customer_logo' ); ?>" width="100%" />
                    </div>
                    <div class="col-sm-8 desc">
                        <h2><?php the_field( 'customer_name' ); ?></h2>
                        <p><?php the_field( 'case_study_blurb_short' ); ?></p>
                        <a href="<?php the_field( 'case_study_page' ); ?>#<?php echo strtolower( str_replace(' ', '-', get_field( 'customer_name' ) ) ); ?>" class="btn btn-success pull-right">Read More</a>
                    </div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

    </div>
    <div class="col-sm-12 col-md-5">
        <p><?php echo $case_study_intro; ?></p>
        <a href="<?php echo $case_study_page; ?>" class="btn btn-cta btn-cta-md btn-default btn-block"><?php echo $case_study_button_text; ?></a>
    </div>
</div>
