<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="home-button">
	<a href="<?php bloginfo('url'); ?>"><i class="fa fa-angle-left"></i><span>Home</span></a>
</div>

<h1 id="student-name"><?php the_title(); ?></h1>
<div class="container">
	<div class="row">
		<div class="profile-header col-sm-12">
			<p class="student-url"><a href="http://<?php the_field('portfolio_site'); ?>" target="_blank"><?php the_field('portfolio_site'); ?></a></p>
			<img src="<?php the_field('headshot'); ?>" alt="<?php the_title(); ?>">
		</div>
		<div class="project-header col-sm-12">
			<h2><?php the_field('project_title'); ?></h2>
			<?php

				$post_objects = get_field('collaborators');

				if( $post_objects ): ?>
					<p>In collaboration with
				    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <a class="collaborators" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				    <?php endforeach; ?>
				    </p>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
		</div>
	</div>
</div>


<div class="container">
<div class="row">
	<div class="col-md-12 project-featured-image mobile-no-margin">
		<img src="<?php the_field('project_featured_image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
	</div>
</div>


	<div class="module row project-introduction">
		<div class="col-md-8 col-md-offset-2">
			<p><?php the_field('project_introduction'); ?></p>
		</div>
	</div>
</div>





<?php if (have_rows('project') ):
	while ( have_rows('project') ): the_row(); ?>

	<?php //module 1
	if (get_row_layout() == 'module_1' ): ?>
		<div class="container">
			<div class="row module">
				<div class="col-md-12 mobile-no-margin">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php //module 2
	if (get_row_layout() == 'module_2' ): ?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 margin-bottom-400px">
					<p><?php the_sub_field('caption'); ?></p>
				</div>
			</div>
		</div>
	<?php endif; ?>


	<?php //module 3 leftalignmarginzeroimagecolumn5 offset1 text6column
	if (get_row_layout() == 'module_3' ): ?>
			<div class="row module">
				<div class="col-sm-5">
					<img id="module-3-img" src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
				<?php if(get_sub_field('caption') ) : ?>
					<div class="caption-box">
					<div class="col-sm-5 col-sm-offset-1 mobile-add-margin bwb-push-6">
						<p class="caption"><?php the_sub_field('caption'); ?></p>
					</div>
				</div>
				<?php endif; ?>
			</div>
	<?php endif; ?>


	<?php //module 4 5columntextoffsetone 5columnimagenomarginright
	if(get_row_layout() == 'module_4' ): ?>
	<div class="row module">
		<?php if(get_sub_field('caption')): ?>
			<div class="col-sm-5 col-sm-offset-1 col-sm-push-6">
				<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
			</div>
			<div class="caption-box">
				<div class="col-sm-5 col-sm-offset-1 col-sm-pull-6 mobile-add-margin bwb-push-1">
					<p class="caption"><?php the_sub_field('caption'); ?></p>
				</div>
			</div>
			<?php else : ?>
				<div class="col-sm-5 col-sm-offset-7">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
					</div>
				<?php endif; ?>
	</div>
	<?php endif; ?>


	<?php //module 5 8columnimage nomarginleftalign 4columtext subjecttochange
	if (get_row_layout() == 'module_5' ): ?>
	<div class="row module">
	<div class="col-sm-8">
		<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
		</div>
		<?php if(get_sub_field('caption')): ?>
		<div class="caption-box">
		<div class="col-sm-3 mobile-add-margin bwb-push-8">
			<p class="caption"><?php the_sub_field('caption'); ?></p>
	</div>
</div>
	<?php endif; ?>
	</div>
	<?php endif; ?>


	<?php //module 6 8 column image no margin 4column text image right align
	if (get_row_layout() == 'module_6' ): ?>
	<div class="row module">
		<?php if(get_sub_field('caption')): ?>
			<div class="col-sm-8 col-sm-push-4">
				<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
				<div class="caption-box">
		<div class="col-sm-3 col-sm-offset-1 col-sm-pull-8 mobile-add-margin bwb-push-1">
			<p class="caption"><?php the_sub_field('caption'); ?></p>
		</div>
	</div>
			<?php else : ?>
				<div class="col-sm-8 col-sm-offset-4">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
					</div>
				<?php endif; ?>
	</div>
	<?php endif; ?>

	<?php //module 7 12column image centered
	if (get_row_layout() == 'module_7' ): ?>
		<div class="row module">
			<div class="col-sm-6">
				<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
			</div>
			<?php if(get_sub_field('caption')): ?>
			<div class="caption-box">
				<div class="col-sm-5 mobile-add-margin bwb-push-6">
					<p class="caption"><?php the_sub_field('caption'); ?></p>
				</div>
			</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php //module 8 4column image 2 column margin + gutter on right 1 column padding right 5column
	if (get_row_layout() == 'module_8' ): ?>
		<div class="row module">
			<?php if(get_sub_field('caption')): ?>
				<div class="col-sm-5 col-sm-offset-1 col-sm-push-6">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div><div class="caption-box">
				<div class="col-sm-5 col-sm-offset-1 col-sm-pull-6 mobile-add-margin bwb-push-1">
					<p class="caption"><?php the_sub_field('caption'); ?></p>
				</div>
			</div>
			<?php else : ?>
				<div class="col-sm-5 col-sm-offset-7">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>


	<?php //module 9 4column image 2 column margin + gutter on left 1 column padding text 5 column text
	if(get_row_layout() == 'module_9' ): ?>
		
	<div class="module container">
		<div class="row">
		<?php if(have_rows('repeater')): while(have_rows('repeater')): the_row(); ?>
			<?php if(have_rows('row')): while(have_rows('row')): the_row(); ?>
						<?php if(get_row_layout() == 'image' ): ?>
							<div class="col-sm-4 mobile-no-margin">
								<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
							</div>
						<?php endif; 
						if(get_row_layout() == 'caption' ): ?>
							<div class="col-sm-4">
								<p><?php the_sub_field('caption'); ?></p>
							</div>
						<?php endif; ?>
					
			<?php endwhile; endif; endwhile; endif;
			?>
			</div>
				</div>
		<?php
	endif; ?>



	<?php //module 10 6 column image large no gutter image 6 column text
	if (get_row_layout() == 'module_10' ): ?>
		<div class="container module">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 mobile-no-margin">
					<?php if (have_rows('image_video') ): while ( have_rows('image_video') ): the_row(); ?>
					<?php if (get_row_layout() == 'image' ): ?>
						<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
					<?php endif; ?>
					<?php if (get_row_layout() == 'video' ): ?>
						<div class="fitvid-container"><?php the_sub_field('video'); ?></div>
					<?php endif; ?>
				<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php //module 11 6 column image no gutter image 6 column column text
	if (get_row_layout() == 'module_11' ): ?>
		<div class="container module">
			<div class="row">
				<div class="col-sm-5 mobile-no-margin">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
				<?php if(get_sub_field('caption')): ?>
				<div class="caption-box">
					<div class="col-sm-6 col-sm-offset-1 bwb-push-6">
						<p class="caption"><?php the_sub_field('caption'); ?></p>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>

	<?php //module 12
	if (get_row_layout() == 'module_12' ): ?>
		<div class="container module">
			<div class="row">
				<?php if(get_sub_field('caption')): ?>
				<div class="col-sm-5 col-sm-offset-1 mobile-no-margin col-sm-push-6">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
				<div class="caption-box">
					<div class="col-sm-6 col-sm-pull-6 bwb-push-0">
						<p class="caption"><?php the_sub_field('caption'); ?></p>
					</div>
				</div>
				<?php else : ?>
				<div class="col-sm-5 col-sm-offset-7 mobile-no-margin">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>

	

	<?php //module 13 6 column image no gutter image 6 column column text
	if (get_row_layout() == 'module_13' ): ?>
		<div class="container module">
			<div class="row">
				<div class="col-sm-6 mobile-no-margin">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
				<?php if(get_sub_field('caption')): ?>
					<div class="caption-box">
						<div class="col-sm-6 bwb-push-6">
							<p class="caption"><?php the_sub_field('caption'); ?></p>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>

	<?php //module 14 6 column image no gutter image 6 column column text
	if (get_row_layout() == 'module_14' ): ?>
		<div class="container module">
			<div class="row">
				<?php if(get_sub_field('caption')): ?>
				<div class="col-sm-6 mobile-no-margin col-sm-push-6">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
				<div class="caption-box">
					<div class="col-sm-6 col-sm-pull-6 bwb-push-0">
						<p class="caption"><?php the_sub_field('caption'); ?></p>
					</div>
				</div>
				<?php else : ?>
				<div class="col-sm-6 col-sm-offset-6 mobile-no-margin">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>

	<?php //module 15 no margin hero image because the photographers are such whiners
	if (get_row_layout() == 'module_15' ): ?>
			<div class="row module">
				<div class="col-sm-12">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				</div>
			</div>
	<?php endif; ?>

<?php endwhile; endif; ?>

<div class="container">
	<div class="row profile-footer">
		<div class="col-sm-12">
			<p class="student-url"><a href="http://<?php the_field('portfolio_site'); ?>" target="_blank"><?php the_field('portfolio_site'); ?></a></p>
			<div class="social-icons">
				<?php if(get_field('linkedin_page') ): ?>
					<a class="social-icon" href="<?php the_field('linkedin_page'); ?>" target="_blank">
						<span class="fa-stack fa-lg scca-social-button">
            				<i class="fa fa-stack-1x fa-linkedin "></i>
        				</span>
					</a>
				<?php endif; ?>

				<?php if(get_field('facebook_page') ): ?>
					<a class="social-icon" href="<?php the_field('facebook_page'); ?>" target="_blank">
						<span class="fa-stack fa-lg scca-social-button">
            				<i class="fa fa-stack-1x fa-facebook"></i>
        				</span>
					</a>
				<?php endif; ?>

				<?php if(get_field('twitter_page') ): ?>
					<a class="social-icon" href="<?php the_field('twitter_page'); ?>" target="_blank">
						<span class="fa-stack fa-lg scca-social-button">
            				<i class="fa fa-stack-1x fa-twitter"></i>
        				</span>
					</a>
				<?php endif; ?>

				<?php if(get_field('instagram_page') ): ?>
					<a class="social-icon" href="<?php the_field('instagram_page'); ?>"target="_blank" >
						<span class="fa-stack fa-lg scca-social-button">
            				<i class="fa fa-stack-1x fa-instagram "></i>
        				</span>
					</a>
				<?php endif; ?>

				<?php if(get_field('tumblr_page') ): ?>
					<a class="social-icon" href="<?php the_field('tumblr_page'); ?>" target="_blank">
						<span class="fa-stack fa-lg scca-social-button">
            				<i class="fa fa-stack-1x fa-tumblr"></i>
        				</span>
					</a>
				<?php endif; ?>

				<?php if(get_field('pinterest_page') ): ?>
					<a class="social-icon" href="<?php the_field('pinterest_page'); ?>" target="_blank">
						<span class="fa-stack fa-lg scca-social-button">
            				<i class="fa fa-stack-1x fa-pinterest"></i>
        				</span>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
