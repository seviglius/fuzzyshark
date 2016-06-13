<?php 
/* Template Name:  Video Gallery */ 
?>
<?php get_header(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/magnific.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/library/css/videogallery.css">
<img class="white videologo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/header_logo.svg" width="100px">

<style>

</style>


<div id="videogallery">
<div class="row">
<?php $loop = new WP_Query( array( 'post_type' => 'video', 'posts_per_page' => 50, 'category__in' => get_field( 'categories' ), 'offset' => 0 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <a href="<?php the_field('vimeo_url'); ?>" class="col-md-3 video videoitem popup-youtube">
            <div class="videothumb" style="background-image: url('<?php the_field('video_thumb'); ?>');" >
            </div>
            <div class="videotitlewrap">
                <h3 class="videotitle"><?php the_field('video_title'); ?></h3>
               
                <span class="author">By <?php the_field('video_authors'); ?></span>
                       
            </div>
    </a>
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
            src: '//player.vimeo.com/video/%id%?autoplay=1&quality=1080p'
          },
         
      }
    },
      disableOn: 10,
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
  });
            
  var $video = $('.videoitem');
  var o = {
    38: 'up',
    40: 'bottom',
    37: 'prev',
    39: 'next'
  }

  $(document).on('keydown', function (e) {
      var dir = o[e.which];
      var $active = $('.active'),
          i = $video.index($active);
      if (e.which == 13) {
         $('.selected').removeClass('selected');
         // $active.addClass('selected');
          return;
      }
      if (!$active.length) {
          $video.first().addClass('active').focus();
          return;
      } else {
          if (dir === 'next' || dir === 'prev') {
              $active.removeClass('active')[dir]().addClass('active').focus();
          } else {
              var p = dir === 'up' ? (i - 4) : (i + 4);
              $video.removeClass('active').eq(p).addClass('active').focus();
          }
      }
  })

});

</script>





<?php get_footer(); ?>