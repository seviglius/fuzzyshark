<?php 
/* Template Name: Home Page */ 
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">

		<div class="col-md-8 col-sm-6 intro">
			<img src="/img/logo-placeholder.png" alt="Portshowlio 2016 Logo" id="logo"><!-- logo -->
			<h1>Portshowlio 2016</h2>
			<h2>Seattle Central Creative Academy</h2>
			<?php 
			if (have_posts()) {
			  while (have_posts()) {
			    the_post();
			    the_content(); 
			  }
			} ?>

		</div>

		


		<?php
    remove_all_filters('posts_orderby');

    $args = array(
        'post_type' => array('design', 'photography'),
        'posts_per_page' => 100,
        'orderby'        => 'rand',
    );

    $query = new WP_Query($args);
    $featuredimage = get_field_objects();
?>

<div class="col-sm-12 student-list">
<?php while ($query->have_posts()) : $query->the_post(); ?> 
       <div class="scca-student-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
       <div class="scca-student-photo"><img src="<?php 
											       	if( get_field('designer_headshot') ): 
											       	the_field('designer_headshot'); 
											       	endif; 
											       	if( get_field('photographer_headshot') ): 
											       	the_field('photographer_headshot'); 
											       	endif;
       	?>" alt="<?php the_title(); ?>" class="headshot"></div>
  
<?php wp_reset_query(); ?>

<?php endwhile; ?>

		</div>

	</div>
</div>


<?php get_footer(); ?>