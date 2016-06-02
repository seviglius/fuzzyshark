<?php get_template_part( 'navbar' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="container">
	<div class="row profile-header-wrapper">
		<div class="profile-header col-sm-12">
			<img src="<?php the_field('headshot'); ?>" alt="<?php the_title(); ?>">
			<h1 id="student-name"><?php the_title(); ?></h1>
			<p class="student-url"><a href="http://<?php the_field('portfolio_site'); ?>" target="_blank"><?php the_field('portfolio_site'); ?></a></p>
		</div>
	</div> 
	<div class="project-header col-sm-12">
			<h2><?php echo wptexturize(get_field('project_title')); ?></h2>
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


<div class="container">
<div class="row">
	<div class="col-md-12 project-featured-image mobile-no-margin">
		<?php $img = get_field('project_featured_image'); ?>

				<?php if( $img['mime_type'] == 'image/gif' ) : ?>

				<img src="<?php echo $img['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>" class="featured-project-image">

				<?php else : ?>
		<img
					src="<?php echo $img['url']; ?>"
					sizes="(min-width: 1200px) 1140px, (min-width: 992px) 720px, (min-width: 768px) 100vw, 100vw"
				  srcset="<?php echo $img['sizes']['fuzzy-1700']; ?> 1700w,
				    <?php echo $img['sizes']['fuzzy-1500']; ?> 1500w,
				    <?php echo $img['sizes']['fuzzy-1300']; ?> 1300w,
				    <?php echo $img['sizes']['fuzzy-1100']; ?> 1100w,
				    <?php echo $img['sizes']['fuzzy-900']; ?> 900w,
				    <?php echo $img['sizes']['fuzzy-700']; ?> 700w,
				    <?php echo $img['sizes']['fuzzy-500']; ?> 500w,
				    <?php echo $img['sizes']['fuzzy-300']; ?> 300w"
				  alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>"
				  class="featured-project-image">
				  <?php /* var_dump(get_field('project_featured_image')) */ ?>

				<?php endif ?>
	</div>
</div>

	<div class="module row project-introduction">
		<div class="col-md-8 col-md-offset-2">
			<p class="caption"><?php echo wptexturize(get_field('project_introduction')); ?></p>
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
					<?php /* <img src="<?php the_sub_field('image'); ?>" 
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>"> */ ?>
					<?php $module1 = get_sub_field('image'); ?>

					<?php if( $module1['mime_type'] == 'image/gif' ) : ?>

				<img src="<?php echo $module1['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">

				<?php else : ?>

					<img src="<?php echo $module1['url']; ?>" 
					sizes="(min-width: 1200px) 1140px, (min-width: 992px) 940px, (min-width: 768px) 720px, 100vw"
					srcset="<?php echo $module1['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module1['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module1['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module1['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module1['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module1['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module1['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module1['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module1['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module1['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module1['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module1['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module1['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module1['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module1['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module1['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module1['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module1['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php //module 2
	if (get_row_layout() == 'module_2' ): ?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 centered-excerpt">
					<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
				</div>
			</div>
		</div>
	<?php endif; ?>


	<?php //module 3 leftalignmarginzeroimagecolumn5 offset1 text6column
	if (get_row_layout() == 'module_3' ): ?>
			<div class="row module">
				<div class="col-sm-5">
					<?php $module3 = get_sub_field('image'); ?>

					<?php if( $module3['mime_type'] == 'image/gif' ) : ?>
					<img src="<?php echo $module3['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
					<?php else : ?>

					<img src="<?php echo $module3['url']; ?>" 
					sizes="(min-width: 768px) 40vw, 100vw"
					srcset="<?php echo $module3['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module3['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module3['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module3['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module3['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module3['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module3['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module3['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module3['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module3['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module3['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module3['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module3['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module3['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module3['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module3['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module3['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module3['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
				</div>
				<?php if(get_sub_field('caption') ) : ?>
					<div class="caption-box">
					<div class="col-sm-5 col-sm-offset-1 mobile-add-margin bwb-push-6">
						<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
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
				<?php $module4 = get_sub_field('image'); ?>

				<?php if( $module4['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module4['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>

				<img src="<?php echo $module4['url']; ?>" 
					sizes="(min-width: 768px) 40vw, 100vw"
					srcset="<?php echo $module4['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module4['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module4['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module4['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module4['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module4['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module4['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module4['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module4['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module4['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module4['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module4['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module4['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module4['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module4['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module4['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module4['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module4['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
			</div>
			<div class="caption-box">
				<div class="col-sm-5 col-sm-offset-1 col-sm-pull-6 mobile-add-margin bwb-push-1">
					<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
				</div>
			</div>
			<?php else : ?>
				<div class="col-sm-5 col-sm-offset-7">
					<?php $module4 = get_sub_field('image'); ?>
					<?php if( $module4['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module4['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
					<img src="<?php echo $module4['url']; ?>" 
					sizes="(min-width: 768px) 40vw, 100vw"
					srcset="<?php echo $module4['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module4['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module4['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module4['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module4['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module4['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module4['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module4['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module4['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module4['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module4['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module4['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module4['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module4['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module4['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module4['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module4['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module4['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
					</div>
				<?php endif; ?>
	</div>
	<?php endif; ?>


	<?php //module 5 8columnimage nomarginleftalign 4columtext subjecttochange
	if (get_row_layout() == 'module_5' ): ?>
	<div class="row module">
	<div class="col-sm-8">
		<?php $module5 = get_sub_field('image'); ?>
		<?php if( $module5['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module5['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module5['url']; ?>" 
					sizes="(min-width: 768px) 66vw, 100vw"
					srcset="<?php echo $module5['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module5['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module5['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module5['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module5['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module5['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module5['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module5['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module5['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module5['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module5['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module5['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module5['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module5['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module5['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module5['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module5['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module5['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
		</div>
		<?php if(get_sub_field('caption')): ?>
		<div class="caption-box">
		<div class="col-sm-3 mobile-add-margin bwb-push-8">
			<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
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
				<?php $module6 = get_sub_field('image'); ?>
				<?php if( $module6['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module6['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module6['url']; ?>" 
					sizes="(min-width: 768px) 66vw, 100vw"
					srcset="<?php echo $module6['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module6['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module6['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module6['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module6['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module6['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module6['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module6['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module6['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module6['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module6['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module6['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module6['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module6['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module6['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module6['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module6['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module6['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
				</div>
				<div class="caption-box">
		<div class="col-sm-3 col-sm-offset-1 col-sm-pull-8 mobile-add-margin bwb-push-1">
			<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
		</div>
	</div>
			<?php else : ?>
				<div class="col-sm-8 col-sm-offset-4">
					<?php $module6 = get_sub_field('image'); ?>
					<?php if( $module6['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module6['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module6['url']; ?>" 
					sizes="(min-width: 768px) 66vw, 100vw"
					srcset="<?php echo $module6['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module6['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module6['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module6['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module6['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module6['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module6['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module6['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module6['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module6['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module6['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module6['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module6['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module6['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module6['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module6['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module6['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module6['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
					</div>
				<?php endif; ?>
	</div>
	<?php endif; ?>

	<?php //module 7 12column image centered
	if (get_row_layout() == 'module_7' ): ?>
		<div class="row module">
			<div class="col-sm-6">
				<?php $module7 = get_sub_field('image'); ?>
				<?php if( $module7['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module7['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module7['url']; ?>" 
					sizes="(min-width: 768px) 49vw, 100vw"
					srcset="<?php echo $module7['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module7['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module7['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module7['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module7['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module7['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module7['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module7['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module7['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module7['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module7['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module7['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module7['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module7['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module7['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module7['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module7['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module7['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
			</div>
			<?php if(get_sub_field('caption')): ?>
			<div class="caption-box">
				<div class="col-sm-5 mobile-add-margin bwb-push-6">
					<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
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
					<?php $module8 = get_sub_field('image'); ?>
					<?php if( $module8['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module8['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module8['url']; ?>" 
					sizes="(min-width: 768px) 40vw, 100vw"
					srcset="<?php echo $module8['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module8['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module8['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module8['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module8['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module8['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module8['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module8['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module8['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module8['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module8['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module8['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module8['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module8['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module8['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module8['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module8['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module8['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
				</div><div class="caption-box">
				<div class="col-sm-5 col-sm-offset-1 col-sm-pull-6 mobile-add-margin bwb-push-1">
					<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
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
								<?php $module9 = get_sub_field('image'); ?>
								<?php if( $module9['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module9['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module9['url']; ?>" 
					sizes="(min-width: 1200px) 360px, (min-width: 992px) 293px, (min-width: 768px) 220px, 100vw"
					srcset="<?php echo $module9['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module9['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module9['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module9['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module9['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module9['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module9['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module9['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module9['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module9['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module9['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module9['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module9['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module9['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module9['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module9['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module9['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module9['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
							</div>
						<?php endif; 
						if(get_row_layout() == 'caption' ): ?>
							<div class="col-sm-4">
								<p><?php echo wptexturize(get_sub_field('caption')); ?></p>
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
						<?php $module10 = get_sub_field('image'); ?>
						<?php if( $module10['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module10['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module10['url']; ?>" 
					sizes="(min-width: 1200px) 945px, (min-width: 992px) 778px, (min-width: 768px) 595px, 100vw"
					srcset="<?php echo $module10['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module10['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module10['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module10['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module10['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module10['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module10['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module10['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module10['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module10['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module10['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module10['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module10['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module10['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module10['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module10['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module10['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module10['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
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
					<?php $module11 = get_sub_field('image'); ?>
					<?php if( $module11['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module11['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module11['url']; ?>" 
					sizes="(min-width: 1200px) 458px, (min-width: 992px) 374px, (min-width: 768px) 283px, 100vw"
					srcset="<?php echo $module11['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module11['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module11['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module11['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module11['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module11['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module11['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module11['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module11['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module11['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module11['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module11['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module11['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module11['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module11['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module11['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module11['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module11['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
				</div>
				<?php if(get_sub_field('caption')): ?>
				<div class="caption-box">
					<div class="col-sm-6 col-sm-offset-1 bwb-push-6">
						<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
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
					<?php $module12 = get_sub_field('image'); ?>
					<?php if( $module12['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module12['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module12['url']; ?>" 
					sizes="(min-width: 1200px) 458px, (min-width: 992px) 374px, (min-width: 768px) 283px, 100vw"
					srcset="<?php echo $module12['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module12['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module12['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module12['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module12['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module12['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module12['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module12['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module12['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module12['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module12['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module12['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module12['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module12['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module12['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module12['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module12['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module12['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
				</div>
				<div class="caption-box">
					<div class="col-sm-6 col-sm-pull-6 bwb-push-0">
						<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
					</div>
				</div>
				<?php else : ?>
				<div class="col-sm-5 col-sm-offset-7 mobile-no-margin">
					<?php $module12 = get_sub_field('image'); ?>
					<?php if( $module12['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module12['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module12['url']; ?>" 
					sizes="(min-width: 1200px) 458px, (min-width: 992px) 374px, (min-width: 768px) 283px, 100vw"
					srcset="<?php echo $module12['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module12['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module12['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module12['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module12['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module12['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module12['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module12['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module12['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module12['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module12['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module12['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module12['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module12['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module12['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module12['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module12['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module12['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
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
					<?php $module13 = get_sub_field('image'); ?>
					<?php if( $module13['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module13['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module13['url']; ?>" 
					sizes="(min-width: 1200px) 555px, (min-width: 992px) 455px, (min-width: 768px) 345px, 100vw"
					srcset="<?php echo $module13['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module13['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module13['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module13['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module13['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module13['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module13['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module13['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module13['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module13['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module13['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module13['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module13['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module13['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module13['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module13['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module13['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module13['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
				</div>
				<?php if(get_sub_field('caption')): ?>
					<div class="caption-box">
						<div class="col-sm-6 bwb-push-6">
							<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
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
					<?php $module14 = get_sub_field('image'); ?>
					<?php if( $module14['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module14['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module14['url']; ?>" 
					sizes="(min-width: 1200px) 555px, (min-width: 992px) 455px, (min-width: 768px) 345px, 100vw"
					srcset="<?php echo $module14['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module14['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module14['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module14['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module14['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module14['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module14['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module14['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module14['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module14['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module14['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module14['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module14['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module14['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module14['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module14['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module14['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module14['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
				</div>
				<div class="caption-box">
					<div class="col-sm-6 col-sm-pull-6 bwb-push-0">
						<p class="caption"><?php echo wptexturize(get_sub_field('caption')); ?></p>
					</div>
				</div>
				<?php else : ?>
				<div class="col-sm-6 col-sm-offset-6 mobile-no-margin">
					<?php $module14 = get_sub_field('image'); ?>
					<?php if( $module14['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module14['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module14['url']; ?>" 
					sizes="(min-width: 1200px) 555px, (min-width: 992px) 455px, (min-width: 768px) 345px, 100vw"
					srcset="<?php echo $module14['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module14['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module14['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module14['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module14['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module14['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module14['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module14['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module14['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module14['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module14['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module14['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module14['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module14['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module14['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module14['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module14['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module14['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>

	<?php //module 15 no margin hero image because the photographers are such whiners
	 if (get_row_layout() == 'module_15' ): ?>
			<div class="row module">
				<div class="col-sm-12">
					<?php $module15 = get_sub_field('image'); ?>
					<?php if( $module15['mime_type'] == 'image/gif' ) : ?>
				<img src="<?php echo $module15['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php else : ?>
		<img src="<?php echo $module15['url']; ?>" 
					sizes="100vw"
					srcset="<?php echo $module15['sizes']['fuzzy-3700']; ?> 3700w,
							<?php echo $module15['sizes']['fuzzy-3500']; ?> 3500w,
							<?php echo $module15['sizes']['fuzzy-3300']; ?> 3300w,
							<?php echo $module15['sizes']['fuzzy-3100']; ?> 3100w,
							<?php echo $module15['sizes']['fuzzy-2900']; ?> 2900w,
							<?php echo $module15['sizes']['fuzzy-2700']; ?> 2700w,
							<?php echo $module15['sizes']['fuzzy-2500']; ?> 2500w,
							<?php echo $module15['sizes']['fuzzy-2300']; ?> 2300w,
							<?php echo $module15['sizes']['fuzzy-2100']; ?> 2100w,
							<?php echo $module15['sizes']['fuzzy-1900']; ?> 1900w,
							<?php echo $module15['sizes']['fuzzy-1700']; ?> 1700w,
						    <?php echo $module15['sizes']['fuzzy-1500']; ?> 1500w,
						    <?php echo $module15['sizes']['fuzzy-1300']; ?> 1300w,
						    <?php echo $module15['sizes']['fuzzy-1100']; ?> 1100w,
						    <?php echo $module15['sizes']['fuzzy-900']; ?> 900w,
						    <?php echo $module15['sizes']['fuzzy-700']; ?> 700w,
						    <?php echo $module15['sizes']['fuzzy-500']; ?> 500w,
						    <?php echo $module15['sizes']['fuzzy-300']; ?> 300w"
					alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">
				<?php endif; ?>
				</div>
			</div>
	<?php endif; ?>

<?php endwhile; endif; ?>

<div class="container">
	<div class="row profile-footer">
		<div class="col-sm-12">
			<!-- <h1 id="student-name"><?php the_title(); ?></h1> -->
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

<?php endwhile; wp_reset_postdata(); ?>

<div class="container-fluid bottom-nav">
<div class="col-md-12">
<div class="bottom-svg">
                  <svg version="1.1" id="bottom-photo-button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 144.4 52.9" style="enable-background:new 0 0 144.4 52.9;" xml:space="preserve">
                  <g id="XMLID_120_">
                    <path id="XMLID_121_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M3.9,3.4h10.8c4.3,0,7.9,0.4,10.8,1.9
                      c3.2,1.7,5.9,4.8,5.9,9.7c0,4.5-2.1,7.7-5.2,9.5c-2.8,1.6-6.4,2.2-11.7,2.2h-2.5v13h-8V3.4z M14.7,20.2c3.2,0,5-0.1,6.3-0.9
                      c1.5-0.8,2.2-2.1,2.2-4c0-2.1-0.9-3.5-2.5-4.3c-1.5-0.6-3.4-0.8-6.2-0.8h-2.7v9.9H14.7z"/>
                    <path id="XMLID_136_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M35.7,1.4h7.6v15.8l0.1,0
                      c1.8-1.5,4.4-2.8,7.5-2.8c2.6,0,4.9,0.9,6.5,2.5c1.5,1.6,2.1,3.8,2.1,7.3v15.4h-7.6V25.5c0-1.9-0.2-2.8-0.9-3.5
                      c-0.6-0.8-1.5-1-2.6-1c-2,0-3.8,1-5.2,2.1v16.6h-7.6V1.4z"/>
                    <path id="XMLID_138_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M77.8,14.5c7.9,0,13.7,5.6,13.7,12.9
                      s-5.9,12.9-13.7,12.9s-13.7-5.6-13.7-12.9S70,14.5,77.8,14.5z M77.8,33.6c3.5,0,6.1-2.8,6.1-6.3c0-3.5-2.7-6.3-6.1-6.3
                      s-6.1,2.8-6.1,6.3C71.7,30.8,74.4,33.6,77.8,33.6z"/>
                    <path id="XMLID_141_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M112.2,38.8c-1.2,0.8-3.4,1.4-5.6,1.4
                      c-2.5,0-4.9-0.8-6.4-2.4c-1.3-1.4-2.2-3.5-2.2-7.4v-9.1h-4V15h4V8.6l7.6-1.3V15h6.5v6.3h-6.5v8.3c0,2.4,0.5,4.2,2.9,4.2
                      c1.2,0,2.7-0.5,3.7-1V38.8z"/>
                    <path id="XMLID_143_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M128.5,14.5c7.9,0,13.7,5.6,13.7,12.9
                      s-5.9,12.9-13.7,12.9s-13.7-5.6-13.7-12.9S120.7,14.5,128.5,14.5z M128.5,33.6c3.5,0,6.1-2.8,6.1-6.3c0-3.5-2.7-6.3-6.1-6.3
                      s-6.1,2.8-6.1,6.3C122.4,30.8,125.1,33.6,128.5,33.6z"/>
                  </g>
                  </svg>
                  <svg version="1.1" id="bottom-design-button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 205.8 52.9" style="enable-background:new 0 0 205.8 52.9;" xml:space="preserve">
                  <g id="XMLID_106_" style="enable-background:new    ;">
                    <path id="XMLID_120_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M23.2,2.6h10.2c6.5,0,11.5,1,15.2,3.7
                      c4.5,3.1,7,8.2,7,14.4c0,5.7-2.1,10.6-6,13.7c-3.7,3-8.9,4.5-16.5,4.5h-9.8V2.6z M33.4,31.8c5.2,0,8.5-0.9,10.7-2.9
                      c2.2-1.8,3.5-4.8,3.5-8.4c0-3.8-1.5-7-4.2-8.9c-2.6-1.8-6-2.2-10.1-2.2h-2.2v22.3H33.4z"/>
                    <path id="XMLID_117_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M66.5,28.5c0.9,3.4,3.7,5,7.2,5
                      c2.8,0,5.8-1,8.4-2.7v6.4c-2.4,1.5-6.1,2.2-9.4,2.2c-8.1,0-14-5-14-12.8c0-7.8,6.1-13,12.9-13c6.1,0,11.8,4,11.8,12.3
                      c0,0.8,0,2-0.1,2.6H66.5z M76.3,23.7c-0.4-2.7-2.4-4.3-4.9-4.3c-2.4,0-4.4,1.5-5.1,4.3H76.3z"/>
                    <path id="XMLID_115_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M87.6,30.6c3.4,2,7.4,2.8,9.7,2.8
                      c2.1,0,3.4-0.5,3.4-1.9c0-1.9-2.8-1.7-6.5-2.7c-4.7-1.2-7.4-3.1-7.4-7.2c0.1-5.2,4.7-8.2,10.8-8.2c3,0,6.6,0.6,9.4,2v6.5
                      c-3.2-1.8-7.1-2.6-9.3-2.6c-2,0-3.2,0.6-3.2,1.8c0,1.8,2.7,1.6,6.3,2.5c4.7,1.2,7.6,3,7.6,7.2c0,5.4-4.8,8.4-11.1,8.4
                      c-3,0-6.8-0.6-9.7-2V30.6z"/>
                    <path id="XMLID_112_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M116.8,2c2.4,0,4.4,2,4.4,4.3
                      c0,2.4-2,4.4-4.4,4.4s-4.4-2-4.4-4.4C112.4,4,114.4,2,116.8,2z M113,14.2h7.6v24.6H113V14.2z"/>
                    <path id="XMLID_109_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M128.9,41.3c2.5,1.6,5.4,2.5,8,2.5
                      c3.7,0,6-1.9,6-5.6v-1.4l-0.1,0c-1.4,1.1-3.7,1.7-5.8,1.7c-6,0-11.5-4.6-11.5-12.1c0-7.2,5.2-12.9,12.8-12.9c2.4,0,4.4,0.5,6.2,1.4
                      l6-1.1v24.3c0,7.8-5.3,12.1-13.2,12.1c-3.2,0-6.3-0.8-8.4-1.8V41.3z M142.8,21c-0.9-0.5-2.4-0.9-3.8-0.9c-3.9,0-5.8,2.9-5.8,6.1
                      c0,3.6,2.2,6.2,5.8,6.2c1.3,0,2.8-0.4,3.8-1V21z"/>
                    <path id="XMLID_107_" style="fill:none;stroke:#433A97;stroke-miterlimit:10;" d="M156.8,14.2h7.5v2.2l0.1,0
                      c1.9-1.5,4.5-2.8,7.6-2.8c2.6,0,4.9,0.9,6.5,2.5c1.5,1.6,2.2,3.8,2.2,7.3v15.4H173V24.7c0-1.9-0.2-2.8-0.9-3.5
                      c-0.6-0.8-1.5-1.1-2.6-1.1c-2,0-3.8,1-5.2,2.1v16.6h-7.6V14.2z"/>
                  </g>
                  </svg>
              </div>
</div>
<div class="bottom-nav-design">
<?php 
$bottom_query_design = new WP_Query(array( 'post_type' => 'design', 'posts_per_page' => 3, 'orderby'=> 'rand'));
while($bottom_query_design->have_posts()) : $bottom_query_design->the_post(); ?>
 	
<div class="col-md-6">
	<a href="<?php the_permalink(); ?>">
	<?php $bottomdesign = get_field('project_featured_image'); ?>
	<div class="bottom-img-container">

				<?php if( $bottomdesign['mime_type'] == 'image/gif' ) : ?>

				<img src="<?php echo $bottomdesign['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>" class="featured-project-image">


				<?php else : ?>
		<img
					src="<?php echo $bottomdesign['url']; ?>"
					sizes="(min-width: 768px) calc(50vw - 45px), 100vw"
				  srcset="<?php echo $bottomdesign['sizes']['fuzzy-1700']; ?> 1700w,
				    <?php echo $bottomdesign['sizes']['fuzzy-1500']; ?> 1500w,
				    <?php echo $bottomdesign['sizes']['fuzzy-1300']; ?> 1300w,
				    <?php echo $bottomdesign['sizes']['fuzzy-1100']; ?> 1100w,
				    <?php echo $bottomdesign['sizes']['fuzzy-900']; ?> 900w,
				    <?php echo $bottomdesign['sizes']['fuzzy-700']; ?> 700w,
				    <?php echo $bottomdesign['sizes']['fuzzy-500']; ?> 500w,
				    <?php echo $bottomdesign['sizes']['fuzzy-300']; ?> 300w"
				  alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">

				<?php endif ?>
				</div>
	</a>
</div>

 
<?php endwhile; wp_reset_postdata(); ?>
</div>
<div class="bottom-nav-photo">

<?php 
$bottom_query_photo = new WP_Query(array( 'post_type' => 'photography', 'posts_per_page' => 3, 'orderby'=> 'rand'));
while($bottom_query_photo->have_posts()) : $bottom_query_photo->the_post(); ?>
 	
<div class="col-md-6">
	<a href="<?php the_permalink(); ?>">
	<?php $bottomdesign = get_field('project_featured_image'); ?>
	<div class="bottom-img-container">

				<?php if( $bottomdesign['mime_type'] == 'image/gif' ) : ?>

				<img src="<?php echo $bottomdesign['url']; ?>" alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>" class="featured-project-image">

				<?php else : ?>
		<img
					src="<?php echo $bottomdesign['url']; ?>"
					sizes="(min-width: 768px) calc(50vw - 45px), 100vw"
				  srcset="<?php echo $bottomdesign['sizes']['fuzzy-1700']; ?> 1700w,
				    <?php echo $bottomdesign['sizes']['fuzzy-1500']; ?> 1500w,
				    <?php echo $bottomdesign['sizes']['fuzzy-1300']; ?> 1300w,
				    <?php echo $bottomdesign['sizes']['fuzzy-1100']; ?> 1100w,
				    <?php echo $bottomdesign['sizes']['fuzzy-900']; ?> 900w,
				    <?php echo $bottomdesign['sizes']['fuzzy-700']; ?> 700w,
				    <?php echo $bottomdesign['sizes']['fuzzy-500']; ?> 500w,
				    <?php echo $bottomdesign['sizes']['fuzzy-300']; ?> 300w"
				  alt="<?php the_field('project_title'); ?> by <?php the_title(); ?>">

				<?php endif ?>
			</div>
	</a>
</div>

 
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>