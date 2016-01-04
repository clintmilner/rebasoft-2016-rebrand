<?php
/**
 * Created by IntelliJ IDEA.
 * User: clint
 * Date: 04/01/2016
 * Time: 13:36
 */

?>

<?php if ( is_active_sidebar( 'rs-sidebar-contact-form' ) ) : ?>
    <div id="primary-sidebar" class="col-sm-12 col-md-3 col-md-offset-1 contact-form primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'rs-sidebar-contact-form' ); ?>
    </div><!-- #primary-sidebar -->
<?php endif; ?>
