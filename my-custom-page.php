<?php
/*
Template Name: My Custom Page
*/
?>

<?php get_header(); ?>

<?php

    $url = $_REQUEST['url'];
    echo $url;
    $query="Select * from wp_property where url='".$url."'";

    $results = array_pop($wpdb->get_results($query));



?>
<div class="container" id="container">

    <div  class="breadcrumbtop">
    <ol class="breadcrumb shadows">
      <li><a href="http://apartmentclub.localhost">Home</a></li><img src="<?php echo get_template_directory_uri(); ?>/images/demo/breadcrumbicon.png"/>
      <li><a href="http://apartmentclub.localhost/#features-adjust1">Properties</a></li><img src="<?php echo get_template_directory_uri(); ?>/images/demo/breadcrumbicon.png"/>
      <li class="active"><?php echo $results->name; ?></li>
    </ol>
    </div>


    <div class="sub-container"> <!-- For aligning in the center -->
    <!-- Slideshow starts here -->
    <div class="row">
        <!-- Classes for bootstrap to make the article responsive -->
        <!--<article class="col-lg-9 col-lg-push-3 col-md-10 col-md-push-2 col-sm-8 col-sm-push-4 col-xs-6 col-xs-push-6">-->
            <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="shadowsslide">
            <section id="slider-banner">
                <div class="slider-wrap">
                    <?php
                        $message = "Hello";
                        //accesspress_ray_bxsliderDickson($message);
                        do_action( 'accesspress_ray_bxsliderD',$message );
                    ?>
                </div>
            </section><!-- #slider-banner closes-->
            </div>

            <!-- This section is for icons home, users, bedrooms and beds -->
            <div class="row  common" style="margin-left:0.3em;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shadows sections">
                    <div style="margin-top:0.2em;">
                        <h3 class="headColor"><?php echo $results->name; ?>,</h3>
                        <h4>Bronte, NSW, Australia </h4>
                        <div class="col-lg-2 col-lg-offset-1 col-md-2 col-sm-2 col-xs-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/demo/home.png" align="middle"/><h5>Whole Apartment</h5>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/demo/users.png" align="middle"/><h5>4 Guests</h5>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/demo/bedroom.png" align="middle"/><h5>2 Bedrooms</h5>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/demo/bed.png" align="middle"/><h5>3 Beds</h5>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/demo/minimumstay.png" align="middle"/><h5>5 Nights Min.</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!--Need to remove style="margin-left:0.3em; once we have a left column -->
            <div class="row  common" style="margin-left:0.3em;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shadows sections">
                    <h4 class="headColor">Rates</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                          <tbody>
                              <tr>
                                <th class="text-nowrap col-md-3" scope="row">Nightly Price</th>
                                <td>A$300 (minimum stay of 5 nights)</td>
                              </tr>
                              <tr>
                                <th class="text-nowrap col-md-3" scope="row">Weekly Price</th>
                                <td>A$1800</td>
                              </tr>
                              <tr>
                                <th class="text-nowrap col-md-3" scope="row">Monthly Price</th>
                                <td>
                                    A$7000
                                </td>
                             </tr>
                             <tr>
                                <th class="text-nowrap col-md-3" scope="row">Cleaning Fee</th>
                                <td>
                                    A$50
                                </td>
                            </tr>
                          </tbody>
                      </table>
                    </div>

                    <div class="col-lg-12" style="margin-bottom:0.5em;">
                        <button type="button" class="btn btn-primary" value="Book">Book</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" value="Enquire">Enquire</button>
                    </div>

                    <!-- Modal -->

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title headColor" id="myModalLabel">Please fill the form:</h4>
                                </div>

                            <div class="modal-body">
                                <form role="form" data-toggle="validator" method="post" action="http://apartmentclub.localhost/?page_id=59">
                                    <div class="form-group">
                                        <label for="emailname">Email Address</label>
                                        <input type="email" class="form-control" id="emailname" name="emailname" placeholder="Enter email" data-error="Please enter a valid email address" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="clientname">Name</label>
                                        <input class="form-control" id="clientname" name="clientname" placeholder="Enter name" data-error="A name is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form group">
                                        <label for="comment">Enquiry:</label>
                                        <textarea style="width:100%" class="form-control" id="comment" name="comment" placeholder="Enter your query"></textarea>
                                    </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            </div>
                            </div>
                        </div>
                            </form>
                    </div>
                    <!-- Modal Ends -->

                </div>
            </div>

            <div class="row  common" style="margin-left:0.3em;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shadows sections">
                    <h4 class="headColor">Overview</h4>
                    <?php echo nl2br($results->overview); ?>
                </div> <!-- Div containing overview closes -->
            </div> <!-- container div for Overview closes -->

            <div class="row  common" style="margin-left:0.3em;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shadows sections">
                       <h4 class="headColor">Specifications:</h4>
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
                                    <p>ATM/bank, hospital</p>
                                    <p>Babysitter, laundrette - serviced</p>
                                    <p>fitness centre, massage therapist</p>
                                    <p>groceries, medical services</p>
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
                    </div> <!-- Sprecification div closes -->
                </div> <!-- Container div for specification closes -->


            <div class="row  common" style="margin-left:0.3em;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shadows sections">
                <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <h4 class="headColor">Features List:</h4>
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
                </div> <!-- Sprecification div closes -->
            </div> <!-- Container div for specification closes -->

            <div class="row  common" style="margin-left:0.3em; margin-bottom:0.1em;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shadows sections">
                <h4 class="headColor">Map:</h4>
                    <div id="google-map">
                        <div id="ap-map-canvas">
                        </div>
                    </div>
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
            </div>
        </article>
    </div><!-- Row div Closes -->

    </div><!-- Sub-container div closes -->
</div><!-- Container div closes -->
<!-- Developed by Riaz Hasan -->
<?php get_footer(); ?>