<?php 
/* Template Name: Home Page */ 
?>

<?php get_header(); ?>
<?php get_template_part( 'navbar' ); ?>

<!-- ///////////////////////////////
Magnific Pop Link ////////////
//////////////////////////////////-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/magnific.js"></script>

<!-- ///////////////////////////////
Header Video ////////////
//////////////////////////////////-->
<div id="video-container" class="justify-center">
<!-- 	<div class="container">
		<div class="row justify-center"> -->
			<div class="inner-video-container">
				<a href="<?php the_field('vimeo_url'); ?>" class="videoitem popup-youtube">
					<div class="videothumb justify-center");" ><!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="150px" height="180px" viewBox="0 0 150 180" style="enable-background:new 0 0 150 180;"
						xml:space="preserve" id="play-button"	>
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
		<div class="col-md-8 intro">
			<h1 id="logo">Portshowlio 2016</h1>
			<h2 id="school-name">Seattle Central Creative Academy</h2>
			<?php 
			if (have_posts()) {
			  while (have_posts()) {
			    the_post();
			    the_content(); 
			  }
			} ?>

		</div>

		

<!-- ///////////////////////////////
Studen Rolodex ////////////
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
				<img src="<?php the_field('project_featured_image'); ?>" alt="<?php the_title(); ?>" class="featured-project-image">
			</a>
		</div>
	</div>
<?php endwhile; ?>

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