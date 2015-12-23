<?php
/**
 * Created by IntelliJ IDEA.
 * User: clint
 * Date: 23/12/2015
 * Time: 14:55
 *
 * Template part for displaying the Rebasoft Info on Home Page
 *
 * @package Rebasoft
 */

$info_headline = get_field( 'info_headline' );
$products_headline = get_field( 'products_headline' );
$info_html = get_field( 'info_html' );
$info_button_text = get_field( 'info_button_text' );
$info_button_url = get_field( 'info_button_url' );
?>




<div id="div-rs-info" class="row">
    <div class="col-sm-12 col-md-6">
        <h1><?php echo $info_headline; ?></h1>
        <?php echo $info_html; ?>
        <a href="<?php echo $info_button_url; ?>" class="btn btn-cta btn-cta-md btn-success btn-block"><?php echo $info_button_text; ?></a>
    </div>
    <div class="col-sm-12 col-md-6">
        <h1><?php echo $products_headline; ?></h1>

        <?php
            $solutions = new WP_Query( array( 'post_type' => 'rebasoft_product', 'orderby' => 'post_id', 'order' => 'ASC' ) );
            $sol_i = 1;
        ?>

        <?php while( $solutions -> have_posts() ) : $solutions -> the_post(); ?>
            <section class="<?php the_field( 'product_class' ); ?> row">
                <?php if( $sol_i % 2 == 0 ) { ?>
                    <div class="col-sm-3 icon">
                        <a href="<?php the_field( 'page_url' ); ?>" class="rs-product"><?php the_field( 'product_name' ); ?></a>
                    </div>
                    <div class="col-sm-9 icon">
                        <h2><a href="<?php the_field( 'page_url' ); ?>"><?php the_field( 'product_name' ); ?></a></h2>
                        <p><?php the_field( 'product_description' ); ?></p>
                    </div>
                <?php } else {  ?>
                    <div class="col-sm-8">
                        <h2><a href="<?php the_field( 'page_url' ); ?>"><?php the_field( 'product_name' ); ?></a></h2>
                        <p><?php the_field( 'product_description' ); ?></p>
                    </div>
                    <div class="col-sm-4 icon">
                        <a href="<?php the_field( 'page_url' ); ?>" class="rs-product"><?php the_field( 'product_name' ); ?></a>
                    </div>
                <?php } ?>


            </section>

            <?php
            $sol_i ++;
        endwhile;
        ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>

