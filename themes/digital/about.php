<?php
/*
Template Name: ABOUT Page
*/

get_header(); ?>
<div class="about-slider">
    <?php echo get_field('about_slider'); ?>
</div>



    <?php get_sidebar('sidebar-3'); ?>



</div>

    <div class="mc-wrap">

        <div class="blog-header-section">
            <h2><?php echo get_field('about_blog_header'); ?></h2>

        </div>

        <div id="primary" class="blog-content content-area">
            <main id="main" class="site-main" role="main">
                <?php
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query('showposts=4&post_type=post'.'&paged='.$paged);

                while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>


                <div class="post-section">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                    <?php the_excerpt(); ?>
                    <a style="float: right" href="<?php the_permalink(); ?>">Read More</a>
                </div>

                <?php endwhile; ?>
                <div style="float: left; width: 50%; text-align: center;">
                <?php previous_posts_link('&laquo; Newer Posts') ?>
                <div style="float: right; width: 50%; text-align: center;"><?php next_posts_link('Older Posts &raquo;') ?></div>
                <br><br>
                </div>



                <?php
                $wp_query = null;
                $wp_query = $temp;  // Reset
                ?>




            </main><!-- #main -->
        </div><!-- #primary -->
            <?php get_sidebar('sidebar-1'   ); ?>
    </div>


<?php get_footer(); ?>

