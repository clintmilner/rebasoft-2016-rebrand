<?php
/*
	Template Name: Partners Page
*/


/**
 * Created by IntelliJ IDEA.
 * User: clint
 * Date: 05/01/2016
 * Time: 11:47
 */
?>
<?php get_header(); ?>

<div class="container-fluid rs-feed">
    <div id="rs-sub-header" class="row">
        <div class="col-xs-12">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div id="rs-main-content-top" class="row rs-main-content">
        <div class="col-sm-12 col-md-7">

            <?php echo get_field('intro_text'); ?>

            <hr />

            <h2>Our Featured Partners</h2>

            <?php $partners = new WP_Query( array( 'post_type' => 'partners', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 0 ) ); ?>

            <?php while( $partners -> have_posts() ) : $partners -> the_post(); ?>
            <?php
                $use_case_count = 0;
            ?>
                <article class="clearfix" id="<?php echo strtolower( str_replace(' ', '-', get_field( 'partner_name' ) ) ); ?>">
                    <div class="row">
                        <div class="col-sm-9 desc">
                            <h3><?php the_field( 'partner_name' ); ?></h3>
                            <p><?php the_field( 'partner_blurb' ); ?></p>
                            <div class="btn-group-sm">
                                <?php if( get_field( 'use_case_1' ) ) { ?>
                                    <a href="<?php the_field( 'use_case_1' ); ?>" class="btn btn-default"><?php echo get_field('partner_name'); ?> Use Case <?php echo ++$use_case_count; ?>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-download-alt"></span></a>
                                <?php } ?>
                                <?php if( get_field( 'use_case_2' ) ) { ?>
                                    <a href="<?php the_field( 'use_case_2' ); ?>" class="btn btn-default"><?php echo get_field('partner_name'); ?> Use Case <?php echo ++$use_case_count; ?>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-download-alt"></span> </a>
                                <?php } ?>
                                <?php if( get_field( 'partner_website_url' ) ) { ?>
                                    <a href="<?php the_field( 'partner_website_url' ); ?>" class="btn btn-info" target="_blank"><?php echo get_field('partner_name'); ?> Website&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-link"></span> </a>
                                <?php } ?>
                            </div>

                        </div>
                        <div class="col-sm-3 logo">
                            <img src="<?php the_field( 'partner_logo' ); ?>" width="100%" />
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
