<?php
/**
 * The Sidebar containing the footeremail widget area.
 *
 * @package Digital
 */
?>
<div class="mc-sidebar-3">
    <div id="panel1">

        <div class="tab-wrap">

            <article><h4><?php echo  get_field('location_seattle_days', 5); ?></h4>
                <span style="color:#555555;"><b>WINTER HOURS</b></span> <?php echo  get_field('locations_seattle_winter', 5); ?><br />
                <span style="color:#555555;"><b>SUMMER HOURS</b></span> <?php echo  get_field('locations_seattle_summer', 5); ?>
            </article>

            <article><h4><?php echo  get_field('location_seattle_phone', 5); ?></h4>
                <a class="red-link" href="mailto:<?php echo  get_field('location_seattle_email', 5); ?>"><?php echo  get_field('location_seattle_email', 5); ?></a><br />
                <?php echo  get_field('location_seattle_address', 5); ?><br />
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/#maps">Get Directions</a>
            </article>

            <article style="padding:0; margin:0;">
                <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2014/05/seattle-map.jpg" />
            </article>

        </div>

    </div>

    <div id="panel2">
        <div class="tab-wrap">

            <article><h4><?php echo  get_field('location_tacoma_days', 5); ?></h4>
                <span style="color:#555555;"><b>WINTER HOURS</b></span> <?php echo  get_field('location_tacoma_winter', 5); ?><br />
                <span style="color:#555555;"><b>SUMMER HOURS</b></span> <?php echo  get_field('location_tacoma_summer', 5); ?>
            </article>

            <article><h4><?php echo  get_field('location_tacoma_phone', 5); ?></h4>
                <a class="red-link" href="mailto:<?php echo  get_field('location_tacoma_email', 5); ?>"><?php echo  get_field('location_tacoma_email', 5); ?></a><br />
                <?php echo  get_field('location_tacoma_address', 5); ?><br />
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/#maps">Get Directions</a>
            </article>

            <article style="padding:0; margin:0;">
                <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2014/05/tacoma-map.jpg" />
            </article>
        </div>
    </div>

    <div id="panel3">
        <div class="tab-wrap-about">

            <article>
                <h4>WHO WE ARE</h4>
                <?php echo  get_field('location_about_us', 5); ?>
            </article>


            <article id="about-us">
                <div id="about-pull-down-button" style="margin:40px 40px;">
                    <a class="link-to" href="<?php echo get_permalink(15); ?>/#maps">LOCATIONS ></a>
                </div>
            </article>



        </div>

    </div>

</div><!-- #secondary -->
