<?php
/**
 * Created by IntelliJ IDEA.
 * User: clint
 * Date: 23/12/2015
 * Time: 15:05
 *
 * Template part for displaying the last tweet from Twitter's API
 *
 * @package Rebasoft
 */

?>


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
