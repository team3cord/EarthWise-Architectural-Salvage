<?php
/*
Template Name:  SERVICES Page
*/

get_header(); ?>
<div class="services-slider">
    <?php echo get_field('service_slider'); ?>
</div>
<div class="location-tabs">
<//?php echo get_field('locations_tabs'); ?>
<div class="tabs-wrap regularpagetabs">
    <div class="tabs-nav-bar-back">
        <div  class="response">
            <div class="slide"><a href="#" class="btn-slide1">SEATTLE STORE</a></div>
            <div class="slide"><a href="#" class="btn-slide2">TACOMA STORE</a></div>
            <div class="slide"><a href="#" class="btn-slide3">ABOUT</a></div>
        </div>
    </div>


    <?php get_sidebar('sidebar-3'); ?>

</div>


</div>
<div class="main-content-wrap">
    <div class="content-whole">

        <h2>SALVAGE SERVICES</h2>
    </div>
</div>
<section class="hm-inspire">
    <div class="mc-wrap">
         <div class="salv-tout-top">
            <div class="salv-tout">
                <h5><?php the_field('tout-one-title');?></h5>
                 <p class="salv-text"><?php the_field('tout_one_text');?></p>
                <p class="mc-bold"><?php the_field('contact_name');?> - <a class="red-link" href="tel:+<?php the_field('contact_phone_num'); ?>"><?php the_field('contact_phone'); ?></a> </p>
                <span style="color: #ff0000;"><a class="red-link" href="mailto:<?php the_field('contact_email');?>"><?php the_field('contact_email');?></a></span></p>
            </div>
            <div class="salv-tout">
                 <h5><?php the_field('tout_two_title');?></h5>
                 <p><?php the_field('tout_two_text');?></p>
                <p class=" mc-bold red-link"><?php the_field('tout_two_bold');?></p>
            </div>
            <div class="salv-tout">
                 <h5><?php the_field('tout_three_title');?></h5>
                <p><?php the_field('tout_three_text');?></p>
                <p class="mc-bold red-link"><?php the_field('tout_three_bold');?></p>
            </div>
        </div>
    </div>
</section>


<div class="main-content-wrap">

<section>
  <div class="take-it-left">

    <div class="container ">
        <h1 class="bm-larger tm-larger text-center"><?php the_field('take_it_header'); ?></h1>
        <p><?php the_field('take_it_descritption'); ?> <br /><br />
            <?php the_field('take_it_guidelines'); ?></p>
    </div>

    <!-- No JavaScript -->
    <noscript>
        <div class="container text-center">
            <div id="no-script">
                <p class="bm-smaller"><strong>JavaScript Disabled</strong></p>
                <p class="bm-smaller">Certain features of this site may not function correctly without JavaScript enabled</p>
                <p class="bm-remove"><a href="http://enable-javascript.com/" target="_blank">Find out how to enable JavaScript in your browser</a></p>
            </div>
        </div>
    </noscript>

    <!-- Content -->
    <div class="container">
        <ul class="responsive-accordion responsive-accordion-default bm-larger">
            <li>
                <div class="responsive-accordion-head"><?php the_field('acceptable'); ?> <i class="fa fa-chevron-down responsive-accordion-plus fa-fw"></i><i class="fa fa-chevron-up responsive-accordion-minus fa-fw"></i></div> <div class="responsive-accordion-panel">
                    <p><strong><?php the_field('acceptable_callout'); ?></strong></p>
                    <p><?php the_field('acceptable_description'); ?></p>

                </div>
            </li>
            <li>


                <div class="responsive-accordion-head"><?php the_field('marginal'); ?> <i class="fa fa-chevron-down responsive-accordion-plus fa-fw"></i><i class="fa fa-chevron-up responsive-accordion-minus fa-fw"></i></div>
                <div class="responsive-accordion-panel">
                    <p><strong><?php the_field('marginal_callout'); ?></strong></p>
                    <p><?php the_field('marginal_description'); ?></p>

                </div>
            </li>
            <li>
                <div class="responsive-accordion-head"><?php the_field('generally_unacceptable'); ?> <i class="fa fa-chevron-down responsive-accordion-plus fa-fw"></i><i class="fa fa-chevron-up responsive-accordion-minus fa-fw"></i></div>
                <div class="responsive-accordion-panel">
                    <p><strong><?php the_field('generally_callout'); ?></strong></p>
                    <p><?php the_field('generally_description'); ?></p>
                </div>
            </li>
            <li>


                <div class="responsive-accordion-head"><?php the_field('never_acceptable'); ?> <i class="fa fa-chevron-down responsive-accordion-plus fa-fw"></i><i class="fa fa-chevron-up responsive-accordion-minus fa-fw"></i></div>
                <div class="responsive-accordion-panel">
                    <p><strong><?php the_field('never_callout'); ?></strong></p>
                    <p><?php the_field('never_description'); ?></p>

                </div>
            </li>

        </ul>
        <p><b><?php the_field('assessment_requirement'); ?></b></p>
        <?php the_field('assessment_copy'); ?>
        <p><a href="<?php the_field('find_more_link'); ?>"><span style="color: red; text-decoration: underline; text-decoration-color: #F15123;"><?php the_field('find_more_link_text'); ?></span></a></p>
    </div>
 </div>
    <div class="take-it-form" id="inquiry"><?php echo do_shortcode('[contact-form-7 id="32" title="Salvage Inquery"]'); ?></div>
    </div>


</section>
</div>
</div>
<?php get_footer(); ?>

