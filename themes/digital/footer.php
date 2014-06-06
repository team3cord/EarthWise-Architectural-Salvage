<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Digital
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="mc-wrap">




                <nav id="site-navigation" class="main-navigation footer-nav" role="navigation">
                    <div class="footer-table">

                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                    </div>
                </nav><!-- #site-navigation -->
        </div>

            <div class="site-branding footer-form">
                <div class="mc-wrap">
                    <?php get_sidebar('sidebar-2'); ?>
                    <div class="footer-co-icon">
                        <h1 class="footer-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                </div><!-- mc-wrap -->
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script type="text/javascript">
    (function ($) {
    $(document).ready(function(){

        $(".btn-slide1").click(function(e){
            $(".btn-slide2").removeClass("active");
            $(".btn-slide3").removeClass("active");
            // first close any other open panels
            $("#panel2").hide();
            $("#panel3").hide();

            // then open the selected panel
            $("#panel1").slideToggle("slow");
            $(this).toggleClass("active"); return false;
            e.preventDefault();
        });

        $(".btn-slide2").click(function(e){
            $(".btn-slide1").removeClass("active");
            $(".btn-slide3").removeClass("active");
            // first close any other open panels
            $("#panel1").hide();
            $("#panel3").hide();

            // then open the selected panel
            $("#panel1").hide();
            $("#panel2").slideToggle("slow");
            $(this).toggleClass("active"); return false;
            e.preventDefault();
        });

        $(".btn-slide3").click(function(e){
            $(".btn-slide1").removeClass("active");
            $(".btn-slide2").removeClass("active");
            // first close any other open panels
            $("#panel1").hide();
            $("#panel2").hide();

            // then open the selected panel
            $("#panel3").slideToggle("slow");
            $(this).toggleClass("active"); return false;
            e.preventDefault();
        });


    });
        $('.responsive-accordion').each(function() {
            // Set Expand/Collapse Icons
            $('.responsive-accordion-minus', this).hide();

            // Hide panels
            $('.responsive-accordion-panel', this).hide();

            // Bind the click event handler
            $('.responsive-accordion-head', this).click(function(e) {
                // Get elements
                var	thisAccordion = $(this).parent().parent(),
                    thisHead = $(this),
                    thisPlus = thisHead.find('.responsive-accordion-plus'),
                    thisMinus = thisHead.find('.responsive-accordion-minus'),
                    thisPanel = thisHead.siblings('.responsive-accordion-panel');

                // Reset all plus/mins symbols on all headers
                thisAccordion.find('.responsive-accordion-plus').show();
                thisAccordion.find('.responsive-accordion-minus').hide();

                // Reset all head/panels active statuses except for current
                thisAccordion.find('.responsive-accordion-head').not(this).removeClass('active');
                thisAccordion.find('.responsive-accordion-panel').not(this).removeClass('active').slideUp();

                // Toggle current head/panel active statuses
                if (thisHead.hasClass('active')) {
                    thisHead.removeClass('active');
                    thisPlus.show();
                    thisMinus.hide();
                    thisPanel.removeClass('active').slideUp();
                } else {
                    thisHead.addClass('active');
                    thisPlus.hide();
                    thisMinus.show();
                    thisPanel.addClass('active').slideDown();
                }
            });
        });

    }(jQuery));
</script>
<?php wp_footer(); ?>

</body>
</html>
