<section id="slider-banner">
	<div class="slider-wrap">
		<?php
		if(is_home() || is_front_page() ){
			do_action( 'accesspress_ray_bxslider' );
		} ?>
	</div>
</section><!-- #slider-banner -->


<?php
if((is_home() || is_front_page()) && 'page' == get_option( 'show_on_front' )){
	$accesspress_ray_content_id = "content";
}elseif(is_home() || is_front_page() ){
	$accesspress_ray_content_id = "home-content";
}else{
	$accesspress_ray_content_id ="content";
} ?>

<div id="<?php echo $accesspress_ray_content_id; ?>" class="site-content">

<?php
global $accesspress_ray_options, $post;
$accesspress_ray_settings = get_option( 'accesspress_ray_options', $accesspress_ray_options );
$accesspress_ray_blog_cat = $accesspress_ray_settings['blog_cat'];
$accesspress_ray_call_to_action_post_id = $accesspress_ray_settings['call_to_action_post'];
$accesspress_ray_featured_title = $accesspress_ray_settings['featured_title'];
$accesspress_ray_featured_text = $accesspress_ray_settings['featured_text'];
$featured_post1 = $accesspress_ray_settings['featured_post1'];
$featured_post2 = $accesspress_ray_settings['featured_post2'];
$featured_post3 = $accesspress_ray_settings['featured_post3'];
$featured_post4 = $accesspress_ray_settings['featured_post4'];
$show_fontawesome_icon = $accesspress_ray_settings['show_fontawesome'];
$testimonial_category = $accesspress_ray_settings['testimonial_cat'];
$accesspress_ray_featured_bar = $accesspress_ray_settings['featured_bar'];
$accesspress_ray_call_to_action_post_char = (isset($accesspress_ray_settings['call_to_action_post_char']) ? $accesspress_ray_settings['call_to_action_post_char'] : 650 );
$accesspress_ray_show_blog_number = (isset($accesspress_ray_settings['show_blog_number']) ? $accesspress_ray_settings['show_blog_number'] : 3 ) ;
?>

<section id="mid-section" class="featured-section clearfix">
	<div class="ak-container">
		<?php if(!empty($accesspress_ray_featured_title)): ?>
		<h3 class="roboto-light main-title"><?php echo $accesspress_ray_featured_title; ?></h3>
		<?php endif; ?>

		<?php if(!empty($accesspress_ray_featured_text)): ?>
		<div class="sub-desc"><?php echo $accesspress_ray_featured_text; ?></div>
		<?php endif; ?>

		<div class="featured-post-wrapper clearfix">
		<?php
		if(!empty($featured_post1) || !empty($featured_post2) || !empty($featured_post3) || !empty($featured_post4)){
		    if(!empty($featured_post1)) { ?>
				<div id="featured-post-1" class="featured-post">

					<?php
						$query2 = new WP_Query( 'p='.$featured_post1 );
						// the Loop
						while ($query2->have_posts()) : $query2->the_post();

							if( $show_fontawesome_icon == 0 ){
							?>
							<figure class="featured-image">
								<a href="<?php the_permalink(); ?>">
									<?php
									if( has_post_thumbnail()){
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-thumbnail', false );
									?>
									<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
									<?php }else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/demo/21dicksonscaled.jpg" alt="<?php the_title(); ?>">
									<?php }
									?>
								</a>
							</figure>
							<?php } ?>


							<?php
							if($show_fontawesome_icon == 1){ ?>
							<div class="featured-icon">
							<i class="fa <?php echo $accesspress_ray_settings['featured_post1_icon'] ?>"></i>
							</div>
							<?php } ?>


							<div class="featured-content">
								<h2 class="featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo accesspress_ray_excerpt( get_the_content() , 260 ) ?></p>
								<?php if(!empty($accesspress_ray_settings['featured_post_readmore'])){?>
								<a href="<?php the_permalink(); ?>" class="view-more"><?php echo $accesspress_ray_settings['featured_post_readmore']; ?></a>
								<?php } ?>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>

				</div>
			<?php }

			if(!empty($featured_post2)) { ?>
				<div id="featured-post-2" class="featured-post">

					<?php
						$query3 = new WP_Query( 'p='.$featured_post2 );
						// the Loop
						while ($query3->have_posts()) : $query3->the_post();

							if( $show_fontawesome_icon == 0 ){
							?>
							<figure class="featured-image">
								<a href="<?php the_permalink(); ?>">
									<?php
									if( has_post_thumbnail()){
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-thumbnail', false );
									?>
									<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
									<?php }else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/demo/featured-fallback.jpg" alt="<?php the_title(); ?>">
									<?php }
									?>
								</a>
							</figure>
							<?php } ?>


							<?php
							if($show_fontawesome_icon == 1){ ?>
							<div class="featured-icon">
							<i class="fa <?php echo $accesspress_ray_settings['featured_post2_icon'] ?>"></i>
							</div>
							<?php } ?>



							<div class="featured-content">
								<h2 class="featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo accesspress_ray_excerpt( get_the_content() , 260 ) ?></p>
								<?php if(!empty($accesspress_ray_settings['featured_post_readmore'])){?>
								<a href="<?php the_permalink(); ?>" class="view-more"><?php echo $accesspress_ray_settings['featured_post_readmore']; ?></a>
								<?php } ?>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>

				</div>
			<?php } ?>

			<div class="clearfix hide"></div>

			<?php if(!empty($featured_post3)) { ?>
				<div id="featured-post-3" class="featured-post">
					<?php
						$query4 = new WP_Query( 'p='.$featured_post3 );
						// the Loop
						while ($query4->have_posts()) : $query4->the_post();
							if( $show_fontawesome_icon == 0 ){
							?>
							<figure class="featured-image">
								<a href="<?php the_permalink(); ?>">
									<?php
									if( has_post_thumbnail()){
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-thumbnail', false );
									?>
									<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
									<?php }else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/demo/featured-fallback.jpg" alt="<?php the_title(); ?>">
									<?php }
									?>
								</a>
							</figure>
							<?php } ?>


							<?php
							if($show_fontawesome_icon == 1){ ?>
							<div class="featured-icon">
							<i class="fa <?php echo $accesspress_ray_settings['featured_post3_icon'] ?>"></i>
							</div>
							<?php } ?>



							<div class="featured-content">
								<h2 class="featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo accesspress_ray_excerpt( get_the_content() , 260 ) ?></p>
								<?php if(!empty($accesspress_ray_settings['featured_post_readmore'])){?>
								<a href="<?php the_permalink(); ?>" class="view-more"><?php echo $accesspress_ray_settings['featured_post_readmore']; ?></a>
								<?php } ?>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>

				</div>
			<?php }

			if(!empty($featured_post4)) { ?>
				<div id="featured-post-4" class="featured-post">
					<?php
						$query5 = new WP_Query( 'p='.$featured_post4 );
						// the Loop
						while ($query5->have_posts()) : $query5->the_post();
							if( $show_fontawesome_icon == 0 ){
							?>
							<figure class="featured-image">
								<a href="<?php the_permalink(); ?>">
									<?php
									if( has_post_thumbnail()){
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-thumbnail', false );
									?>
									<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
									<?php }else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/demo/featured-fallback.jpg" alt="<?php the_title(); ?>">
									<?php }
									?>
								</a>
							</figure>
							<?php } ?>


							<?php
							if($show_fontawesome_icon == 1){ ?>
							<div class="featured-icon">
							<i class="fa <?php echo $accesspress_ray_settings['featured_post4_icon'] ?>"></i>
							</div>
							<?php } ?>



							<div class="featured-content">
								<h2 class="featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo accesspress_ray_excerpt( get_the_content() , 260 ) ?></p>
								<?php if(!empty($accesspress_ray_settings['featured_post_readmore'])){?>
								<a href="<?php the_permalink(); ?>" class="view-more"><?php echo $accesspress_ray_settings['featured_post_readmore']; ?></a>
								<?php } ?>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>

				</div>
			<?php }

			}else{ ?>
				<div class="row">
				<div class="features-adjust col-md-12 col-offset-md-2 col-sm-12 col-sm-offset-2 col-xs-12 col-xs-offset-2" id="features-adjust1">
					<div id="featured-post-1" class="featured-post">

						<figure class="featured-image">
						<a href="http://apartmentclub.localhost/?page_id=47"><img src="<?php echo get_template_directory_uri().'/images/demo/featuredimage-1.jpg' ?>"></a>
						</figure>

						<div class="featured-content">
							<h2 class="featured-title"><a href="http://apartmentclub.localhost/?page_id=47">21 Dickson Street</a></h2>
							<p>Bronte Bliss Beach House is a lovely 2 bedroom semi 5 minutes walk to the beach. Relax in your own blissful beach house. This semi is set in a great location on a quiet street just 5 minutes walk from the beach...</p>

							<a href="http://apartmentclub.localhost/?page_id=47" class="view-more">Read More</a>
						</div>
					</div>
				</div>
			</div>

				<!--

				<div class="features-adjust" id="features-adjust2">
					<div id="featured-post-2" class="featured-post">

						<figure class="featured-image">
						<a href="#"><img src="<?php echo get_template_directory_uri().'/images/demo/featuredimage-2.jpg' ?>"></a>
						</figure>

						<div class="featured-content">
							<h2 class="featured-title"><a href="#">Vienna Daily Rentals</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus, purus id ultrices tristique, velit ante accumsan metus, non porttitor tortor elit pellentesque felis...</p>

							<a href="http://apartmentclub.localhost/?page_id=52" class="view-more">Read More</a>
						</div>
					</div>
				</div>
			-->

			<!-- Dont take this bit out of the code. -->
			<!--
			<?php for($featured_post=1 ; $featured_post < 3; $featured_post++) { ?>
			<div class="features-adjust">
				<div id="featured-post-<?php echo $featured_post; ?>" class="featured-post">

					<figure class="featured-image">
					<a href="#"><img src="<?php echo get_template_directory_uri().'/images/demo/featuredimage-'.$featured_post.'.jpg' ?>"></a>
					</figure>

					<div class="featured-content">
						<h2 class="featured-title"><a href="#">Featured Post <?php echo $featured_post; ?></a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus, purus id ultrices tristique, velit ante accumsan metus, non porttitor tortor elit pellentesque felis...</p>
					-->
					<!--	<a href="#" class="view-more">Read More</a>
					</div>
				</div>
			</div>
		<?php }
	} ?>-->
		</div>
	</div>
</section>

<section id="bottom2-section" class="clients-say-section clearfix">
	<div class="ak-container">
		<?php if(!empty($testimonial_category)) {	?>
			 		<h3 class="roboto-light main-title"><?php echo get_cat_name($testimonial_category); ?></h3>
						<?php
							$loop2 = new WP_Query( array(
				                'cat' => $testimonial_category,
				                'posts_per_page' => 5,
				            )); ?>
				        <div class="testimonial-wrap">
					        <div class="testimonial-slider">
					        <?php while ($loop2->have_posts()) : $loop2->the_post(); ?>

					        	<div class="testimonial-slide">
						        	<div class="testimonial-list clearfix">
						        		<div class="testimonial-thumbnail">
						        		<?php
			                            if(has_post_thumbnail()){
			                            the_post_thumbnail('thumbnail');
			                            }else{ ?>
			                                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-dummy.jpg" alt="no-image"/>
			                            <?php }?>
						        		</div>

						        		<div class="testimonial-excerpt">
						        			<?php echo accesspress_ray_excerpt( get_the_content() , 140 ) ?>
						        		</div>
						        	</div>
								<div class="testimoinal-client-name"><?php the_title(); ?></div>
								</div>
			                <?php endwhile; ?>
							</div>
						</div>

				        <?php wp_reset_postdata();

						}else{
						?>
						<h3 class="widget-title roboto-light" style="color: white;">What our Clients Say</h3>
						<div class="testimonial-wrap">
							<div class="testimonial-slider">
								<div class="testimonial-slide">
						        	<div class="testimonial-list clearfix">
						        		<div class="testimonial-thumbnail">
						        		<img src="<?php echo get_template_directory_uri(); ?>/images/demo/Yanetxys-Torreblanca.jpg">
						        		</div>

						        		<div class="testimonial-excerpt">Thanks for delivering top quality services to your clients. It just takes a minute to get an answer from you when in difficulties.</div>
						        	</div>
									<div class="testimoinal-client-name">Yanetxys Torreblanca</div>
								</div>

								<div class="testimonial-slide">
						        	<div class="testimonial-list clearfix">
						        		<div class="testimonial-thumbnail">
						        		<img src="<?php echo get_template_directory_uri(); ?>/images/demo/David-Soriano.jpg">
						        		</div>

						        		<div class="testimonial-excerpt">Thank you very much the support team AccessPress Ray for service, are really wonderful in their care and in the resolution of the problem.</div>
						        	</div>
									<div class="testimoinal-client-name">David Soriano</div>
								</div>
							</div>
						</div>
				<?php }?>
	</div>
</section>

<?php
if(!empty($accesspress_ray_settings['latitude']) && !empty($accesspress_ray_settings['longitude'])) {
?>
<section id="google-map" class="clearfix">
		<div id="ap-map-canvas"></div>
		<?php
		global $accesspress_ray_options;
		$accesspress_ray_settings = get_option( 'accesspress_ray_options', $accesspress_ray_options );
        ?>
        	<script type="text/javascript">
				    var map;
				    function initialize() {
				      var mapOptions = {
				        zoom: 18,
				        center: new google.maps.LatLng(<?php echo $accesspress_ray_settings['latitude']; ?>, <?php echo $accesspress_ray_settings['longitude']; ?> ),
				        mapTypeId: google.maps.MapTypeId.ROADMAP,
				        scrollwheel: false,
				        mapTypeControlOptions: {
				            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
				        },
				      };
				      map = new google.maps.Map(document.getElementById('ap-map-canvas'),
				          mapOptions);
				    }
				    google.maps.event.addDomListener(window, 'load', initialize);
			</script>


			<?php

			if(!empty($accesspress_ray_settings['contact_address'])) { ?>
			<div class="google-section-wrap ak-container">
			<div class="ak-contact-address">
			<h3><?php _e('Contact Us', 'accesspress_ray'); ?></h3>
			<?php echo wpautop($accesspress_ray_settings['contact_address']);
				do_action( 'accesspress_ray_social_links' );
			?>
			</div>
			</div>

			<?php } ?>

</section>
<?php } ?>
