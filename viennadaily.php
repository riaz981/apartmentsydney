<?php
/*
Template Name: Vienna Rental
*/
?>

<?php get_header(); ?>
<div class="container" style="margin-bottom: 0.3em;">
    <div class="row">
        <!-- Classes for bootstrap to make the article responsive -->
        <article class="col-lg-9 col-lg-push-3 col-md-10 col-md-push-2 col-sm-8 col-sm-push-4 col-xs-6 col-xs-push-6">
            <section id="slider-banner">
                <div class="slider-wrap">
                    <?php
                        do_action( 'accesspress_ray_bxsliderD' );
                    ?>
                </div>
            </section><!-- #slider-banner closes-->
            <div>
                
            </div>
        </article>
    </div><!-- Row div Closes -->
</div><!-- Container div closes -->
<?php get_footer(); ?>
