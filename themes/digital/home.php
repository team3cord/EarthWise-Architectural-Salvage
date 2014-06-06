<?php
/*
Template Name: HOME Page
*/

get_header(); ?>

<div class="home-slider">
<?php echo get_field('home_slider'); ?>
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

<section class="hm-invite">
    <div class="mc-wrap">
        <div class="hm-invite-content">


        <h2><?php the_field('first_section_title'); ?></h2>
        <?php the_field('first_section_text');?>
            <a class="link-to" href="<?php echo get_permalink(15); ?>">LOCATIONS ></a>
        </div>
        <div class="hm-invite-state">
            <img src="wp-content/uploads/2014/06/location-home-basic-map.png" alt="map">
        </div>
    </div>
</section>

<section class="hm-inspire">
    <div class="mc-wrap">
        <div class="hm-inspire-slider"><?php the_field('second_section_slider');?></div>
        <div class="hm-inspire-content">
            <h2><?php the_field('second_section_title');?></h2>
            <div><?php the_field('second_section_text');?></div>
            <img src="<?php the_field('image_logo_group');?>" alt="logo group"/>
            <a class="link-to" href="<?php echo get_permalink(9); ?>">MORE EXAMPLES ></a>

        </div>
    </div>


</section>
<section class="hm-quote">
    <div class="mc-wrap">

        <div class="hm-quote-content">
            <span><?php the_field('testimonial');?></span>
            <div class="hm-quote-name">
                <span class="bold-name"><?php the_field('testimonial_name');?></span>
                <span class="light-location"><?php the_field('testimonial_location');?></div></span>
            <div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
