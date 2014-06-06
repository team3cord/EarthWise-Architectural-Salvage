<?php
/*
Template Name: CONTACT Page
*/

get_header(); ?>

<style type="text/css">

    .acf-map {
        background-color:transparent!important;
        width: 100%;
        height: 180px;
        width:390px;
        margin: 20px 0;
        border: 13px solid rgba(105, 105, 105, 0.4);
        margin-bottom: 40px;

    }

</style>
<div class="contact-slider">
    <?php echo get_field('contact_slider'); ?>
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
<div class="main-content-wrap">
    <div class="content-whole">

        <h2>CONTACT US</h2>
    </div>
</div>
    <div class="hm-inspire">
        <div class="mc-wrap">

            <div id="contact-us-bids">
            <h6>ACQUISITIONS/BIDS, DIRECT + DESIGN, COMMERCIAL SALES</h6>
            <div style="margin-bottom: 0px;"><?php echo get_field('main_phone_number_contact_page') ?><br />

                <a class="red-link" href="mailto:<?php echo get_field('main_email_for_contact_us_page_intro') ?>"><?php echo get_field('main_email_for_contact_us_page_intro') ?></a>
                <br /><br />
                <h6><?php echo get_field('sub_title_intro_contact_page') ?></h6>
                OFFICE INQUERIES<br />
                <a class="red-link" href="mailto:<?php echo get_field('office_hours_email') ?>"><?php echo get_field('office_hours_email') ?></a>

            </div>
            &nbsp;
            <ul style="margin-left: none;">
                <li><a href="http://www.hometalk.com/earthwisearchitecturalsalvage"><img src="http://ewsalvage.crosshatchcreative.com/wp-content/themes/digital/images/house-icon.png" alt="" /></a></li>
                <li><a href="http://www.pinterest.com/earthwiseinc/"><img src="http://ewsalvage.crosshatchcreative.com/wp-content/themes/digital/images/pintarist.png" alt="" /></a></li>
                <li><a href="https://www.facebook.com/EarthwiseSalvage"><img src="http://ewsalvage.crosshatchcreative.com/wp-content/themes/digital/images/facebook.png" alt="" /></a></li>
                <li><a href="https://twitter.com/earthwiseinc"><img src="http://ewsalvage.crosshatchcreative.com/wp-content/themes/digital/images/twitter.png" alt="" /></a></li>
                <li>#EWSALVAGE</li>
            </ul>
            &nbsp;

            </div>

            <div id="removal"><?php echo get_field('contact_us_form') ?></div>
        </div>
    </div>





<div class="site-inner" id="maps">
    <div class="mc-wrap">
        <main class="content" itemprop="mainContentOfPage" role="main">
            <article itemtype="http://schema.org/CreativeWork" itemscope="itemscope" class="post-18 page type-page status-publish has-post-thumbnail entry">


                <!-- Header -->
                <a name="maps"></a>

                <div class="content-left-half-contact">
                    <div id="seattle-map-container">
                        <div class="map-inner-container">
                            <h4>EARTHWISE SEATTLE</h4>
                            <p class="map-intro"><?php echo get_field('seattle_location_intro') ?> </p>
                            <span class="map"><?php

                                $location = get_field('map_for_seattle');

                                if( !empty($location) ):
                                                ?>
                        <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                                <?php endif; ?></span>

                            <b> <?php echo get_field('phone_number_for_seattle_location') ?></b><br/>
                            <?php echo get_field('seattle_address') ?><br/>

                            <?php echo get_field('open_to_public_hours_seattle') ?> <br />
                            <b>SUMMER HOURS </b><?php echo get_field('seattle_summer_hours') ?><br />
                            <b>WINTER HOURS </b><?php echo get_field('seattle_winter_hours') ?>
                            <span class="red_url"><a class="red-link" href="mailto:<?php echo get_field('seattle_main_email') ?>">
                                    </br><?php echo get_field('seattle_main_email') ?></a></span>

                        </div>
                    </div>

                </div>
                <div class="content-right-half-contact">
                    <div class="map-inner-container2" class="clearfix">
                        <h4>EARTHWISE TACOMA</h4>
                        <p class="map-intro"><?php echo get_field('tacoma_location_intro') ?></p>
                            <span class="map"><?php

                                          $location = get_field('tacoma_map');

                                          if( !empty($location) ):
                                               ?>
                <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                                         <?php endif; ?></span>
                        <b><?php echo get_field('phone_number_for_tacoma_location') ?></b><br/>
                        <?php echo get_field('address_for_tacoma') ?>4<br/>
                        <?php echo get_field('open_to_public_hours_tacoma') ?><br />
                        <b>SUMMER HOURS </b><?php echo get_field('tacoma_summer_hours') ?><br />
                        <b>WINTER HOURS </b><?php echo get_field('tacoma_winter_hours') ?>
                        <span class="red_url"><a class="red-link" href="mailto:<?php echo get_field('tacoma_email_') ?>"><?php echo get_field('tacoma_email_') ?></a></span>

                    </div>

                </div>
                </div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
                    (function($) {

                        /*
                         *  render_map
                         *
                         *  This function will render a Google Map onto the selected jQuery element
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	4.3.0
                         *
                         *  @param	$el (jQuery element)
                         *  @return	n/a
                         */

                        function render_map( $el ) {

                            // var
                            var $markers = $el.find('.marker');

                            // vars
                            var args = {
                                zoom		: 16,
                                center		: new google.maps.LatLng(0, 0),
                                mapTypeId	: google.maps.MapTypeId.ROADMAP
                            };

                            // create map
                            var map = new google.maps.Map( $el[0], args);

                            // add a markers reference
                            map.markers = [];

                            // add markers
                            $markers.each(function(){

                                add_marker( $(this), map );

                            });

                            // center map
                            center_map( map );

                        }

                        /*
                         *  add_marker
                         *
                         *  This function will add a marker to the selected Google Map
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	4.3.0
                         *
                         *  @param	$marker (jQuery element)
                         *  @param	map (Google Map object)
                         *  @return	n/a
                         */

                        function add_marker( $marker, map ) {

                            // var
                            var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

                            // create marker
                            var marker = new google.maps.Marker({
                                position	: latlng,
                                map			: map
                            });

                            // add to array
                            map.markers.push( marker );

                            // if marker contains HTML, add it to an infoWindow
                            if( $marker.html() )
                            {
                                // create info window
                                var infowindow = new google.maps.InfoWindow({
                                    content		: $marker.html()
                                });

                                // show info window when marker is clicked
                                google.maps.event.addListener(marker, 'click', function() {

                                    infowindow.open( map, marker );

                                });
                            }

                        }

                        /*
                         *  center_map
                         *
                         *  This function will center the map, showing all markers attached to this map
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	4.3.0
                         *
                         *  @param	map (Google Map object)
                         *  @return	n/a
                         */

                        function center_map( map ) {

                            // vars
                            var bounds = new google.maps.LatLngBounds();

                            // loop through all markers and create bounds
                            $.each( map.markers, function( i, marker ){

                                var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                                bounds.extend( latlng );

                            });

                            // only 1 marker?
                            if( map.markers.length == 1 )
                            {
                                // set center of map
                                map.setCenter( bounds.getCenter() );
                                map.setZoom( 16 );
                            }
                            else
                            {
                                // fit to bounds
                                map.fitBounds( bounds );
                            }

                        }

                        /*
                         *  document ready
                         *
                         *  This function will render each map when the document is ready (page has loaded)
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	5.0.0
                         *
                         *  @param	n/a
                         *  @return	n/a
                         */

                        $(document).ready(function(){

                            $('.acf-map').each(function(){

                                render_map( $(this) );

                            });

                        });

                    })(jQuery);
                </script>
<?php get_footer(); ?>

