<?php 
/*
	Template Name: Home Page
*/
/**
 * The template for displaying home page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rebasoft
 */
?>

<?php
// Custom Fields

// Advanced Custom Fields
$info_headline = get_field( 'info_headline' );
$products_headline = get_field( 'products_headline' );
$info_html = get_field( 'info_html' );
$info_button_text = get_field( 'info_button_text' );
$info_button_url = get_field( 'info_button_url' );

$opt_in_desc = get_field( 'opt-in_desc' );
$opt_in_button_text = get_field( 'opt_in_button_text' );
$opt_in_button_link= get_field( 'opt_in_button_link' );

$case_study_headline = get_field( 'case_study_headline' );
$case_study_intro = get_field( 'case_study_intro' );
$case_study_button_text = get_field( 'case_study_button_text' );
$case_study_page = get_field( 'case_study_page' );


// Rebasoft Products

?>

<?php get_header(); ?>
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


 <div class="container-fluid">
        <div id="div-1" class="row" data-type="background" data-speed="8">
            <div class="col-sm-9">
                <h3><?php echo $opt_in_desc; ?></h3>
            </div>
            <div class="col-sm-3">
                <a href="<?php echo $opt_in_button_link; ?>" class="btn btn-cta btn-cta-xl btn-block btn-success"><?php echo $opt_in_button_text; ?></a>
            </div>
        </div>

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
                                <a href="<?php the_field( 'case_study_page' ); ?>" class="btn btn-success pull-right">Read More</a>
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

        <div id="div-rs-twitter" class="row">
            <div class="col-xs-1">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/twitter-logo.svg" class="svg pull-right" height="50px" />
            </div>
            <div class="col-xs-10">
                <?php if ( is_active_sidebar( 'div-rs-twitter-home' ) ) : ?>
                    <?php dynamic_sidebar( 'div-rs-twitter-home' ); ?>
                <?php endif; ?>
            </div>
        </div>

        <div id="div-rs-news-and-blog" class="row" data-type="background" data-speed="2">
            <div class="col-md-5 col-md-offset-1 col-sm-12 rs-news">
                <h1>Rebasoft News</h1>
                <section>
                    <h2>Introducing the Rebasoft Managment Console</h2>
                    <p><span class="date">30th September 2015</span> - Rebasoft today introduces a new component – the Rebasoft Management Console (RMC) which will become the main interface for configuring, deploying and reporting on Rebasoft components over the coming releases. </p>
                    <a href="#" class="btn btn-success btn-sm">Read More</a>
                </section>
                <section>
                    <h2>Version 2.8 of Auditor Core and Application Auditor Released</h2>
                    <p><span class="date">7th July 2015</span> - UK based Rebasoft today announced the release of the 2.8 version of Auditor Core and Application Auditor. Together these releases enhance the capabilities around Threat mitigation and network operations. </p>
                    <a href="#" class="btn btn-success btn-sm">Read More</a>
                </section>
            </div>
            <div class="col-md-5 col-sm-12 rs-blogs">
                <h1>Recent Blog Posts</h1>
                <section>
                    <h2><a href="#">Hotel Chain Malware Incidents on the Rise</a> </h2>
                    <p class="date">30th September 2015</p>
                </section>
                <section>
                    <h2><a href="#">Hotel Chain Malware Incidents on the Rise</a> </h2>
                    <p class="date">30th September 2015</p>
                </section>
                <section>
                    <h2><a href="#">Hotel Chain Malware Incidents on the Rise</a> </h2>
                    <p class="date">30th September 2015</p>
                </section>
                <section>
                    <h2><a href="#">Hotel Chain Malware Incidents on the Rise</a> </h2>
                    <p class="date">30th September 2015</p>
                </section>
                <section>
                    <h2><a href="#">Hotel Chain Malware Incidents on the Rise</a> </h2>
                    <p class="date">30th September 2015</p>
                </section>

            </div>
        </div>
	

<?php get_footer(); ?>

</div>
