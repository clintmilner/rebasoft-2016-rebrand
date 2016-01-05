<?php
/*
	Template Name: Team
*/
/**
 * The template for displaying the Rebasoft Team
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
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div id="rs-main-content-top" class="row rs-main-content rs-team">
        <div class="col-sm-12 col-md-7">

            <?php $team = new WP_Query( array( 'post_type' => 'rebasoft_team', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => 0 ) ); ?>

            <?php while( $team -> have_posts() ) : $team -> the_post(); ?>

                <article class="clearfix team-member" id="<?php echo strtolower( str_replace(' ', '-', get_field( 'customer_name' ) ) ); ?>">
                    <div class="row">
                        <div class="col-sm-9 desc">
                            <h2><?php the_field( 'team_member_name' ); ?></h2>
                            <h3><?php the_field( 'team_member_title' ); ?>
                                <?php if( 'yes' == get_field('is_management') ) { ?>
                                    <span title="Rebasoft Management" class="glyphicon glyphicon-star-empty rs-text-success"></span>
                                <?php } ?>
                            </h3>
                            <p><?php the_field( 'team_member_blurb' ); ?></p>
                            <?php if( get_field( 'linkedin_url' ) ) { ?>
                                <a href="<?php the_field( 'linkedin_url' ); ?>" target="_blank" title="Connect with <?php the_field( 'team_member_name' ); ?> on LinkedIn">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/linkedin-logo.svg" class="svg pull-left" height="20px" />
                                </a>
                            <?php } ?>
<!--                            --><?php //if( !get_field( 'twitter_url' ) ) { ?>
<!--                                <a href="--><?php //the_field( 'twitter_url' ); ?><!--" target="_blank">-->
<!--                                    <img src="--><?php //bloginfo('template_directory'); ?><!--/assets/img/twitter-logo.svg" class="svg pull-left" height="20px" />-->
<!--                                </a>-->
<!--                            --><?php //} ?>
                        </div>
                        <div class="col-sm-3 logo">
                            this will be a headshot someday...
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
