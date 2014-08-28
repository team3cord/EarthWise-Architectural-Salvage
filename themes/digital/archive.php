<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Digital
 */

get_header(); ?>
<div class="about-slider">
    <?php echo do_shortcode('[metaslider id=70]'); ?>
</div>



    <?php get_sidebar('sidebar-3'); ?>



</div>

<div class="mc-wrap">
    <div class="single-post">

    <div id="primary" class="blog-content content-area">
        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'digital' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'digital' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'digital' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'digital' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'digital' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'digital' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'digital' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'digital');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'digital');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'digital' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'digital' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'digital' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'digital' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'digital' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'digital' );

						else :
							_e( 'Archives', 'digital' );

						endif;
					?>
				</h2>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php digital_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>









        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar('sidebar-1'   ); ?>
        </div>
</div>


<?php get_footer(); ?>
