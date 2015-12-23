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
                <ul>
                    <li><a href="#">Application Auditor</a></li>
                    <li><a href="#">Auditor Core</a></li>
                    <li><a href="#">Threat Auditor</a></li>
                    <li><a href="#">RMC</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6">
                <h2>Downloads</h2>
                <ul>
                    <li><a href="#">Application Auditor</a></li>
                    <li><a href="#">Auditor Core</a></li>
                    <li><a href="#">Threat Auditor</a></li>
                    <li><a href="#">RMC</a></li>
                    <li><a href="#">Rebasoft Appliance</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6">
                <h2>Corporate</h2>
                <ul>
                    <li><a href="#">Information</a></li>
                    <li><a href="#">Our Customers</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Leadership Team</a></li>
                    <li><a href="#">Corporate Responsibility</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6">
                <h2>Connect</h2>
                <ul>
                    <li><a href="#">Support Channel</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Jobs at Rebasoft</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ul>
            </div>
        </div>

        <div id="div-rs-sub-footer" class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/rebasoft-logo.svg" class="svg" height="34px"><br />
                <span class="tagline"><?php bloginfo( 'description' ); ?></span>
            </div>
            <div class="col-sm-6">
                <p class="copyright pull-right">Copyright &copy; 2015 All Rights Reserved</p>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>
