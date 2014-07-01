<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Digital
 */

get_header(); ?>
<div class="about-slider">
    <?php echo get_field('about_slider', 13 ); ?>
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

    <div style="min-height: 720px;" class="mc-wrap">

        <div class="blog-header-section">
            <h2>404 ~ File or Page Not Found</h2>

        </div>
        <div id="primary" class="blog-content content-area">
            <main id="main" class="site-main" role="main"> 
              <div class="post-section">
              <p>We're sorry the page you requested cannot be found in our database. It may have been moved or changed. </p>

              </div>
           </main><!-- #main -->
        </div><!-- #primary -->
            <?php get_sidebar('sidebar-1'   ); ?>
    </div>


<?php get_footer(); ?>
