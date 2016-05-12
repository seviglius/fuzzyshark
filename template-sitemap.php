<?php 
/* Template Name: Sitemap */ 
?>

<?php get_header(); ?>

<div class="col-md-12">
	<?php wp_nav_menu( array( 'sitemap' => 'sitemap-navbar', 'container_class' => 'sitemap-navbar' ) );?>
</div>


<div class="container">
	<div class="row">

		<?php
    remove_all_filters('posts_orderby');
    global $post; $cntr = 1;

    $args = array(
        'post_type' => array('design', 'photography'),
        'posts_per_page' => 100,
        'orderby'        => 'rand',
    );

    $query = new WP_Query($args);
    $featuredimage = get_field_objects();
?>

<div class="sitemap-grid">
<?php while ($query->have_posts()) : $query->the_post(); ?> 
	<div class="col-lg-3 col-md-3 col-sm-4">
       <div class=""><a href="<?php the_permalink(); ?>" class="" id="<?php echo "-" . $cntr; ?>"><?php the_title(); ?></a></div>
       <div class=""><a href="<?php the_permalink(); ?>"><img src="<?php 
											       	if( get_field('headshot') ): 
											       	the_field('headshot'); 
											       	endif; 
       	?>" alt="<?php the_title(); ?>" class="" id="<?php echo "-" . $cntr; ?>"></a></div>
       	</div>
  
<?php $cntr++; ?>

<?php wp_reset_query(); ?>

<?php endwhile; ?>
</div>
	

	</div><!-- end row -->
</div><!-- end container -->


<?php get_footer(); ?>



<script>



</script>