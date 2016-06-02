<?php 
/* Template Name: Home Page */ 
?>

<?php get_header(); ?>
<div class="se-pre-con" id="preloader-gif"></div>
<?php get_template_part( 'navbar' ); ?>

<!-- ///////////////////////////////
Magnific Pop Link ////////////
//////////////////////////////////-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/magnific.js"></script>
<!-- ///////////////////////////////
Header Video Section////////////
//////////////////////////////////-->

<!-- ///////////////////////////////
Header Video Section////////////
//////////////////////////////////-->
<div id="video-container" class="justify-center gradient">
<!-- 	<div class="container">
		<div class="row justify-center"> -->
			<div class="inner-video-container">
				<a href="<?php the_field('vimeo_url'); ?>" class="videoitem popup-youtube">
					<div class="videothumb justify-center"><!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="150px" height="180px" viewBox="0 0 150 180" style="enable-background:new 0 0 150 180;" xml:space="preserve" id="play-button">
							<polygon id="right-piece" points="79.8,47.9 37.9,157.2 150,90 "/>
							<polygon id="left-piece" points="79.8,47.9 0,0 0,180 37.9,157.2 "/>
						</svg>
					</div>
					<div class="videotitlewrap no-shadow"></div>
				</a>
			</div>
<!-- 		</div>
	</div> -->
</div>

<!-- ///////////////////////////////
Intro & Rolodex Container //
//////////////////////////////////-->
<div class="container">
	<div class="row">

<!-- ///////////////////////////////
Site Intro ////////////
//////////////////////////////////-->
		<div class="col-md-7 col-md-offset-4 intro">
			<h1 id="logo">Portshowlio 2016</h1>
			<h2 id="school-name">Seattle Central<br> Creative Academy<br>
			<span class="dateAndTime">2016 DESIGN + PHOTOGRAPHY SHOW</span></h2>
			<p>Before you is a sample of all our blood, sweat, and tears laid bare in thoughtful decisions and careful studies at SCCA. Make sure to join us June 15 + 16, it will be a shindig you won’t soon forget.</p>

		</div>

		

<!-- ///////////////////////////////
Student Rolodex ////////////
//////////////////////////////////-->
		<?php
    $args = array(
        'post_type' => array('design', 'photography'),
        'posts_per_page' => 100,
        'orderby'        => 'rand',
    );

    $query = new WP_Query($args);
    $featuredimage = get_field_objects();
?>


<div class="col-sm-12">
<?php while ($query->have_posts()) : $query->the_post(); ?> 
	<div class="student-list">
		<div class="scca-student-name">
			<a href="<?php the_permalink(); ?>" class="name"><?php the_title(); ?></a>
		</div>
		<div class="scca-student-photo">
			<a href="<?php the_permalink(); ?>">

				<?php $img = get_field('project_featured_image'); ?>

				<?php if( $img['mime_type'] == 'image/gif' ) : ?>

				<img src="<?php echo $img['url']; ?>" alt="<?php the_title(); ?>" class="featured-project-image">

				<?php else : ?>


				<img
					src="<?php echo $img['url']; ?>"
					sizes="(min-width: 768px) 80vw, 100vw"
				  srcset="<?php echo $img['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $img['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $img['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $img['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $img['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $img['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $img['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $img['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $img['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $img['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $img['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $img['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $img['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $img['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $img['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $img['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $img['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $img['sizes']['fuzzy-300']; ?> 300w"
				  alt="<?php the_title(); ?>"
				  class="featured-project-image">

				<?php endif; ?>
			</a>
		</div>
	</div>
<?php endwhile; ?>
</div>
		</div>

	</div>
</div>

<!-- ///////////////////////////////////
Page Bottom Info Section//////
//////////////////////////////////////-->
<div id="pageBottom" class="justify-center gradient-rotated">
	<div class="container">
		<div class="row showinfo">

			<div class="row">
				<div class="col-md-offset-1 col-md-6">
					<h2>Portshowlio 2016<br>
					<span class="dateAndTime">JUNE 15 + 16 | 5:00PM–9:00PM</span></h2>
				</div>
			</div>

			<div class="row parking">
				<div class="col-md-offset-1 col-md-6">
				<p>The Creative Academy is located on the 5th floor of <a href="/">Seattle Central College</a>. We are easily accessed from the Capitol Hill Lightrail station one block away, or the Seattle Street Car. You can also find <a href="/">paid parking in the lot</a>.</p>
					
				</div>
			</div>

		</div><!--THANKS-->

		
		<div class="row thanks">

			<div class="col-md-offset-1 col-md-6">
			<p>The SCCA class of 2016 would like to thank the incredible faculty,  alumni, and many professionals who have inspired and supported us over the last two years. Your dedication and patience are unmatched,  and we are thrilled to be entering a community with so much talent.</p>
			</div>

			<div class="col-md-offset-2 col-md-3">
				<div class="social-icon-frame-white">
						<a class="social-icon" href="#" target="_blank">
						<span class="fa-stack fa-lg scca-social-button">
            				<i class="fa fa-stack-1x fa-linkedin " aria-hidden="true"></i>
        				</span>
        				</a>
        			</div>

        			<div class="social-icon-frame-white">
						<a class="social-icon" href="#" target="_blank">
						<span class="fa-stack fa-lg scca-social-button">
            				<i class="fa fa-stack-1x fa-facebook" aria-hidden="true"></i>
        				</span>
        				</a>
        			</div>

        			<div class="social-icon-frame-white">
						<a class="social-icon" href="#" target="_blank">
						<span class="fa-stack fa-lg scca-social-button">
            				<i class="fa fa-stack-1x fa-tumblr" aria-hidden="true"></i>
        				</span>
        				</a>
        			</div>

			</div>

		</div>
	</div>
</div>
<!-- ///////////////////////////////
Magnific Pop Run Script ////////////
//////////////////////////////////-->
<script>
jQuery(document).ready(function() {

  $('.popup-youtube').magnificPopup({
              type: 'iframe',
            iframe: {
                patterns: {
                    youtube: {
                        src: '//www.youtube.com/embed/%id%?autoplay=1&rel=0'
                    },
                    vimeo: {
                      index: 'vimeo.com/',
                      id: '/',
                      src: '//player.vimeo.com/video/%id%?autoplay=1'
                    },
                }
            },
              disableOn: 10,
              mainClass: 'mfp-fade',
              removalDelay: 160,
              preloader: false,

              fixedContentPos: false
            });
            

  jQuery('#menu-video-gallery-filter > li').addClass('col-md-2  ');
  jQuery(".singlevideo").fitVids();

});

</script>


<?php get_footer(); ?>