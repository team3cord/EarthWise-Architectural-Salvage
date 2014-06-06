<?php
/*
Template Name: ABOUT Page
*/

get_header(); ?>
<div class="about-slider">
    <?php echo get_field('about_slider'); ?>
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

    <div class="mc-wrap">

        <div class="blog-header-section">
            <h2><?php echo get_field('about_blog_header'); ?></h2>

        </div>

        <div id="primary" class="blog-content content-area">
            <main id="main" class="site-main" role="main">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array('posts_per_page'=> 4, 'paged'=> $paged);
            $category_posts = new WP_Query($args);

            if($category_posts->have_posts()) :
                while($category_posts->have_posts()) :
                    $category_posts->the_post();
                    ?>
                <div class="post-section">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                    <?php the_excerpt(); ?>
                </div>

                <?php endwhile; ?>


                <?php else: ?>

                Oops, there are no posts.

                <?php endif; ?>




            </main><!-- #main -->
        </div><!-- #primary -->
            <?php get_sidebar('sidebar-1'   ); ?>
    </div>

  <//?php if(function_exists('wp_simple_pagination')) {
                wp_simple_pagination();
            } ?>

<?php get_footer(); ?>

