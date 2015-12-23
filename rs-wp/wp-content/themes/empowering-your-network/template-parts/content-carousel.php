<?php
/**
 * Created by IntelliJ IDEA.
 * User: clint
 * Date: 23/12/2015
 * Time: 03:11
 *
 * Template part for displaying Carousel
 *
 * @package Rebasoft
 */

?>


<div id="rs-cta" class="carousel fade hidden-xs" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        $ittr = new WP_Query( array( 'post_type' => 'rebasoft_product', 'orderby' => 'post_id', 'order' => 'ASC' ) );
        $i = 0;
        $dotClass = "active";
        while( $ittr -> have_posts() ) : $ittr -> the_post();
            ?>
            <li data-target="#rs-cta" data-slide-to="<?php echo $i; ?>" class="<?php echo $dotClass; ?>"></li>
            <?php
            $i ++;
            $dotClass = "";
        endwhile;
        ?>
        <?php wp_reset_postdata(); ?>
    </ol>
    <div class="carousel-inner" role="listbox">

        <?php
            $loop = new WP_Query( array( 'post_type' => 'rebasoft_product', 'orderby' => 'post_id', 'order' => 'ASC' ) );
        ?>

        <?php
            $class = "active";
        while( $loop -> have_posts() ) : $loop -> the_post(); ?>
            <div class="item <?php echo $class; ?>">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/nodes.svg" class="svg-nodes" height="50%">
                <img class="first-slide" src="<?php the_field( 'slider_image' ); ?>" alt="">
                <div class="container">
                    <div class="carousel-caption ac">
                        <p class="carousel-logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/rebasoft-logo.svg" height="50px"></p>
                        <p class="carousel-tagline"><?php the_field( 'slider_tagline' ); ?></p>
                        <p class="carousel-product"><?php the_field( 'product_name' ) ?></p>
                    </div>
                </div>
            </div>
        <?php
            $class = "";
            endwhile;
        ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>