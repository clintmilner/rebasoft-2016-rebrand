<?php
/**
 * Created by IntelliJ IDEA.
 * User: clint
 * Date: 23/12/2015
 * Time: 14:52
 *
 * Template part for displaying the first CTA on Home Page
 *
 * @package Rebasoft
*/

$opt_in_desc = get_field( 'opt-in_desc' );
$opt_in_button_text = get_field( 'opt_in_button_text' );
$opt_in_button_link= get_field( 'opt_in_button_link' );

?>


<div id="div-1" class="row" data-type="background" data-speed="8">
    <div class="col-sm-9">
        <h3><?php echo $opt_in_desc; ?></h3>
    </div>
    <div class="col-sm-3">
        <a href="<?php echo $opt_in_button_link; ?>" class="btn btn-cta btn-cta-xl btn-block btn-success"><?php echo $opt_in_button_text; ?></a>
    </div>
</div>

