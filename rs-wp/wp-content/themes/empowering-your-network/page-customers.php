<?php
/*
	Template Name: Customers
*/
/**
 * The template for displaying all blog and news posts
 *
 *
 *
 * @package Rebasoft
 */
?>

<?php get_header(); ?>

<div class="container-fluid rs-feed">
    <div id="rs-sub-header" class="row">
        <div class="col-xs-12">
            <h1>Some of our Customers</h1>
        </div>
    </div>

    <div id="rs-main-content-top" class="row rs-main-content">
        <div class="col-sm-12 col-md-7">

            <?php $cust = new WP_Query( array( 'post_type' => 'case_study', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 0 ) ); ?>

            <?php while( $cust -> have_posts() ) : $cust -> the_post(); ?>

                <article class="clearfix" id="<?php echo strtolower( str_replace(' ', '-', get_field( 'customer_name' ) ) ); ?>">
                    <div class="row">
                        <div class="col-sm-9 desc">
                            <h2><?php the_field( 'customer_name' ); ?></h2>
                            <p><?php the_field( 'case_study_blurb' ); ?></p>
                            <a href="<?php the_field( 'case_study_pdf' ); ?>" class="btn btn-success pull-right">Download Case Study <span class="glyphicon glyphicon-download-alt"></span></span> </a>
                        </div>
                        <div class="col-sm-3 logo">
                            <img src="<?php the_field( 'customer_logo' ); ?>" width="100%" />
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <?php get_template_part( '/template-parts/content', 'contactform' ); ?>

    </div>

    <?php get_footer(); ?>

</div>
