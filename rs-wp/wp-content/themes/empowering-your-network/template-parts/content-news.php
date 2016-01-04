<?php
/**
 * Created by IntelliJ IDEA.
 * User: clint
 * Date: 23/12/2015
 * Time: 15:06
 *
 * Template part for displaying the News and Blog Posts
 *
 * @package Rebasoft
 */
$newsfeed_button_url = get_field( 'newsfeed_button_url' );
?>


<div id="div-rs-news-and-blog" class="row" data-type="background" data-speed="2">
    <div class="col-md-5 col-md-offset-1 col-sm-12 rs-news">
        <h1>Rebasoft News</h1>

        <?php $news = new WP_Query( array( 'post_type' => 'news', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 2 ) ); ?>

        <?php while( $news -> have_posts() ) : $news -> the_post(); ?>
            <section>
                <h2><?php the_title() ?></h2>
                <p><span class="date"><?php echo get_the_date('Y-m-d') ?></span>  <?php echo get_field( 'post_text_blurb' ) ?></p>
                <a href="<?php the_permalink() ?>" class="btn btn-success btn-sm">Read More</a>
            </section>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <div class="col-md-5 col-sm-12 rs-blogs">
        <h1>Recent Blog Posts</h1>

        <?php $blog = new WP_Query( array( 'post_type' => 'blog', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 5 ) ); ?>

        <?php while( $blog -> have_posts() ) : $blog -> the_post(); ?>
            <section>
                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a> </h2>
                <p><span class="date"><?php echo get_the_date('Y-m-d') ?></span></p>
            </section>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

    </div>
    <div class="col-sm-10">
        <a class="btn btn-cta btn-success pull-right" href="<?php echo $newsfeed_button_url; ?>">View Rebasoft NewsFeed</a>
    </div>
</div>

