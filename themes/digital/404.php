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
