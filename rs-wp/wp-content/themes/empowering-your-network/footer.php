<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rebasoft
 */

?>

	

<?php wp_footer(); ?>
 <div id="div-rs-phone" class="row">
            <div class="col-xs-12">
                <p class="phone-label">Contact Us: <span class="phone-number">+44(0) 800 779 7322</span> </p>
            </div>
        </div>

        <div id="div-rs-footer" class="row">
            <div class="col-lg-3 col-sm-6 col-xs-6">
                <h2>Products</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'products' ) ); ?>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6">
                <h2>Downloads</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'downloads' ) ); ?>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6">
                <h2>Corporate</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'corporate' ) ); ?>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6">
                <h2>Connect</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'connect' ) ); ?>
            </div>
        </div>

        <div id="div-rs-sub-footer" class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/rebasoft-logo.svg" class="svg" height="34px"><br />
                <span class="tagline"><?php bloginfo( 'description' ); ?></span>
            </div>
            <div class="col-sm-6">
                <p class="copyright pull-right">Copyright &copy; <?php echo date("Y"); ?> All Rights Reserved</p>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>
