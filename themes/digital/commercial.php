<?php
/*
Template Name:  COMMERCIAL Page
*/

get_header(); ?>
<div class="inspiration-slider">
    <?php echo get_field('inspiration_slider'); ?>
</div>



    <?php get_sidebar('sidebar-3'); ?>



</div>

<div class="main-content-wrap">
    <div class="content-left-half">

        <h2>GET INSPIRED</h2>
    </div>
    <div class="content-right-half">
        <a class="link-to on-page" href="<?php echo get_permalink(87); ?>">COMMERCIAL</a>
        <a class="link-to" href="<?php echo get_permalink(85); ?>">RESIDENTIAL</a>
        <a class="link-to" href="<?php echo get_permalink(9); ?>">SHOW ALL</a>
    </div>
    <?php
    $temp = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query();
    $wp_query->query('showposts=10&post_type=inspire'.'&cat=9'.'&paged='.$paged);

    while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>

        <div class="content-left-offset inspire-post">
            <h4><?php the_title(); ?></h4>
            <p><?php echo the_content(); ?></p>
        </div>
        <div class="content-right-offset inspire-pix">
            <?php the_post_thumbnail('large'); ?>
            <!-- LOOP: Usual Post Template Stuff Here-->
        </div>

    <?php endwhile; ?>



    <?php
    $wp_query = null;
    $wp_query = $temp;  // Reset
    ?>


</div>

</div>
<?php get_footer(); ?>

