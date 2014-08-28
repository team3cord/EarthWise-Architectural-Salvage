<?php
/*
Template Name:  INSPIRATION Page
*/

get_header(); ?>
<div class="inspiration-slider">
    <?php echo get_field('inspiration_slider', 9); ?>
</div>



    <?php get_sidebar('sidebar-3'); ?>



</div>

<div class="main-content-wrap">
    <div class="content-left-half">

        <h2>GET INSPIRED</h2>
    </div>
    <div class="content-right-half">
        <a class="link-to" href="<?php echo get_permalink(87); ?>">COMMERCIAL</a>
        <a class="link-to" href="<?php echo get_permalink(85); ?>">RESIDENTIAL</a>
        <a class="link-to on-page" href="<?php echo get_permalink(9); ?>">SHOW ALL</a>
    </div>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="content-left-offset inspire-post">
            <h4><?php the_title(); ?></h4>
            <p><?php echo the_content(); ?></p>
        </div>
        <div class="content-right-offset inspire-pix">
            <?php the_post_thumbnail('large'); ?>
            <!-- LOOP: Usual Post Template Stuff Here-->
        </div>

    <?php endwhile; ?>

    <?php else: ?>

        <!-- article -->
        <article>

            <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

        </article>
        <!-- /article -->

    <?php endif; ?>





</div>

</div>
<?php get_footer(); ?>

