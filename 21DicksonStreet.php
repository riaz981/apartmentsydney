<?php
/*
Template Name: 21DicksonStreet
*/
?>

<?php get_header(); ?>
<!--
<div  style="margin-left:-0.6em; width: 100%;">
<ol class="breadcrumb">
  <li><a href="http://apartmentclub.localhost">Home</a></li><img src="<?php echo get_template_directory_uri(); ?>/images/demo/breadcrumbicon.png"/>
  <li><a href="http://apartmentclub.localhost/#features-adjust1">Properties</a></li><img src="<?php echo get_template_directory_uri(); ?>/images/demo/breadcrumbicon.png"/>
  <li class="active">21DicksonStreet</li>
</ol>

<div>
    <p>Specification:</p>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tbody>
                <tr><th>Sleeps</th><td>5</td></tr>
                <tr><th>Bedrooms</th><td>2</td></tr>
                <tr><th>Bathrooms</th><td>1</td></tr>
                <tr><th>Property Type</th><td>House</td></tr>
                <tr><th>Minimum Stay</th><td>5 nights</td></tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <p>Features List</p>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tbody>
                <tr>
                    <th>Dining</th><td>Dining Area</td></tr>
                    <tr><th>Bathroom</th>
                    <td>
                        <p>1 Bathroom</p>
                        <p>Bathroom 1- toilet, shower enclosure</p>
                    </td>
                </tr>

                <tr>
                    <th>Bedrooms</th>
                    <td>
                        <p>2 Bedrooms, Sleeps 5</p>
                        <p>Bedroom 1 - 1 double bed</p>
                        <p>Bedroom 2 - 1 double bed</p>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

-->
<div class="container" id="container" style="margin-bottom: 0.3em; margin-top:-1.3em;">
<div class="sub-container"> <!-- For aligning in the center -->

    <!-- Slideshow starts here -->
    <div class="row">
        <!-- Classes for bootstrap to make the article responsive -->
        <article class="col-lg-9 col-lg-push-3 col-md-10 col-md-push-2 col-sm-8 col-sm-push-4 col-xs-6 col-xs-push-6">
            <div class="shadows">
            <section id="slider-banner">
                <div class="slider-wrap">
                    <?php
                        do_action( 'accesspress_ray_bxsliderD' );
                    ?>
                </div>
            </section><!-- #slider-banner closes-->
            </div>

            <div class="row common" >
                <div class="col-lg-12" style="background-color: white; margin-top: 0.4em;">
                    <h4>Rates</h3>
                </div>
            </div>

            <!-- Tabs start here -->
            <div class="row  common">
                <div class="col-lg-12">
                <ul class="nav nav-tabs" style="margin-top:1.2em;">
                    <li role="presentation" class="active"><a href="#overview" data-toggle="tab" style="background-color: white; color: black;">Overview:</a></li>
                    <li role="presentation"><a href="#specs" data-toggle="tab" style="color: black; margin-left:0.3em;">Specifications</a></li>
                    <li role="presentation"><a href="#amenities" data-toggle="tab" style="color: black; margin-left:0.3em;">Amenities</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="overview">
                        <div style="margin-left: 1.5em; margin-top: 1em;">

                            <p>Bronte Bliss Beach House is a lovely 2 bedroom semi 5 minutes walk to the beach</p>

                            <p>Relax in your own blissful beach house. This semi is set in a great location on a quiet street just 5 minutes walk from the beach.</p>

                            <p>The house is set out across 2 double bedrooms.</p>

                            <p>The master bedroom is with king bed and built in wardrobes. The second bedroom can be configured offered as a king bed or two king singles. The house is ideal for either two friends, two couples or a 4-5 person family.</p>

                            <p>The living area is open plan with fully equipped kitchen, dining area with 8 seats, lounge suite, ottoman, 55 inch flatscreen TV, wireless internet, CD/Stereo and DVD library.</p>

                            <p>The living area opens onto a garden courtyard with seating for 8 people, lighting, trees and gas BBQ. This area is ideal for summer entertaining.</p>

                            <p>Other amenities include: bathroom, shower, bathtub, washer, dryer, lovely front porch and garden.</p>
                        </div> <!-- Description closes -->
                    </div> <!-- Overview Tab closes -->

                    <div class="tab-pane" id="amenities" style="margin-left: 1.5em; margin-top: 1em;">
              	       <p>Accommodation and facilities for this holiday house rental in Bronte, Australia:</p>

                           <div class="table-responsive">
                               <table class="table table-bordered table-hover">
                                   <tbody>
                                      <tr>
                                        <th class="text-nowrap col-md-3" scope="row">Dining</th>
                                        <td>Dining Area</td>
                                      </tr>
                                      <tr>
                                        <th class="text-nowrap col-md-3" scope="row">Bathroom</th>
                                        <td>
                                            <p>1 Bathroom</p>
                                            <p>Bathroom 1 - toilet , shower enclosure </p>
                                        </td>
                                     </tr>
                                     <tr>
                                        <th class="text-nowrap col-md-3" scope="row">Bedrooms</th>
                                        <td>
                                            <p>2 Bedrooms, Sleeps 5</p>
                                            <p>Bedroom 1 - 1 double bed</p>
                                            <p>Bedroom 2 - 1 double bed</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap col-md-3" scope="row">Attractions</th>
                                        <td>
                                            <p>bay, cinema</p>
                                            <p>playground, restaurants</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap col-md-3" scope="row">Leisure Activites</th>
                                        <td>
                                            <p>beach combing, scenic drives</p>
                                            <p>paddle boating, walking</p>
                                            <p>photography, whale watching</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap col-md-3" scope="row">Local Services &amp Businesses</th>
                                        <td>
                                            <p>beach combing, scenic drives</p>
                                            <p>paddle boating, walking</p>
                                            <p>photography, whale watching</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap col-md-3" scope="row">Sports &amp Adventure Activities</th>
                                        <td>
                                            <p>cycling, swimming</p>
                                            <p>golf, wind-surfing</p>
                                            <p>sailing</p>
                                        </td>
                                    </tr>
                                    </tbody>
                               </table>
                            </div> <!-- responsive table closes -->
                    </div> <!-- Amenities Tab closes -->

                    <div class="tab-pane" id="specs" style="margin-left: 1.5em; margin-top: 1em;">
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>

                                <tr>
                                  <th class="text-nowrap col-md-3" scope="row">Sleeps</th>
                                  <td>5</td>
                                </tr>

                                <tr>
                                  <th class="text-nowrap col-md-3" scope="row">Bedrooms</th>
                                  <td>2</td>
                                </tr>

                                <tr>
                                  <th class="text-nowrap col-md-3" scope="row">Bathrooms</th>
                                  <td>1</td>
                                </tr>

                                <tr>
                                  <th class="text-nowrap col-md-3" scope="row">Property Type</th>
                                  <td>House</td>
                                </tr>

                                <tr>
                                  <th class="text-nowrap col-md-3" scope="row">Minimum Stay</th>
                                  <td>5 nights</td>
                                </tr>

                            </tbody>
                        </table>
                    </div> <!-- responsive table closes -->
                    </div> <!-- Specs closes -->

                </div> <!-- Tab content closing -->
                </div> <!-- The whole section of tab closing -->


            </div>
            <div class="row common">
                <h3>Map:</h3>
                <div id="google-map">
                    <div id="ap-map-canvas">
                    </div>
                </div>
                <script>
                  function initialize() {
                    var mapCanvas = document.getElementById('ap-map-canvas');
                    var mapOptions = {
                      center: new google.maps.LatLng(-33.899453, 151.260322),
                      zoom: 15,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(-33.899453, 151.260322),
                        map: map
                    });
                  }
                  google.maps.event.addDomListener(window, 'load', initialize);
                </script>

            </div>
        </article>
    </div><!-- Row div Closes -->

</div><!-- Sub-container div closes -->
</div><!-- Container div closes -->
<!-- Developed by Riaz Hasan -->
<?php get_footer(); ?>
