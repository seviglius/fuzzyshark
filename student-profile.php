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

<?php endwhile; ?>
