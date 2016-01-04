<?php
/*
	Template Name: Blog & News Posts
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
            <h1>The Rebasoft Blog &amp News Feed</h1>
        </div>
    </div>

    <div id="rs-main-content-top" class="row rs-main-content">
        <div class="col-sm-12 col-md-7">

            <?php $news = new WP_Query( array( 'post_type' => array('blog','news'), 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 0 ) ); ?>

            <?php while( $news -> have_posts() ) : $news -> the_post(); ?>
                <article class="clearfix">
                    <h2><?php the_title() ?></h2>
                    <p><span class="date"><?php echo get_the_date('Y-m-d') ?></span> - <?php echo get_field( 'post_text_blurb' ) ?></p>
                    <a href="<?php the_permalink() ?>" class="btn btn-success btn-sm pull-right">Read More</a>
                    <?php if( get_post_type( $post ) == "blog" ) { ?>
                        <span class="glyphicon glyphicon-flash pull-left"></span> &nbsp; From the Rebasoft Blog
                    <?php } else if( get_post_type( $post ) == "news") { ?>
                        <span class="glyphicon glyphicon-comment pull-left"></span> &nbsp; Rebasoft News
                    <?php } ?>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <?php get_template_part( '/template-parts/content', 'contactform' ); ?>

    </div>

    <?php get_footer(); ?>

</div>
