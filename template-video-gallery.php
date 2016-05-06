<?php 
/* Template Name:  Video Gallery */ 
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/videogallery.css">

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/magnific.js"></script>


<div id="videogallery">
<h2><?php the_title(); ?></h2>

<div class="row">
<?php $loop = new WP_Query( array( 'post_type' => 'video', 'posts_per_page' => 50, 'category__in' => get_field( 'categories' ), 'offset' => 0 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="col-md-3 col-sm-6 video"> 
    <a href="<?php the_field('vimeo_url'); ?>" class="videoitem popup-youtube">
            <div class="videothumb" style="background-image: url('<?php the_field('video_thumb'); ?>');" >
            </div>
            <div class="videotitlewrap">
                <h3 class="videotitle"><?php the_field('video_title'); ?></h3>
               
                <span class="author">By <?php the_author(); ?></span>
                       
            </div>
    </a>
    </div>

<?php endwhile; wp_reset_query(); ?>
</div>
</div>


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