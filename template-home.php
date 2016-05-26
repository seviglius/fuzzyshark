<?php 
/* Template Name: Home Page */ 
?>

<?php get_header(); ?>
<?php get_template_part( 'navbar' ); ?>
<div id="video-container">
	<img src="wp-content/themes/fuzzyshark/img/Logo_Play_2.png" alt="Play Video">
</div>

<div id="gradient"></div>

<div class="container">
	<div class="row">

		<div class="col-md-8 intro">
			<h1 id="logo">Portshowlio 2016</h1>
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


<?php get_footer(); ?>