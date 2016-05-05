<?php
/**
 * Template Name: Custom Field Test
 */
get_header(); ?>

<div class="container">
<div class="row">

</div>
</div>



<?php if (have_rows('project') ):
	while ( have_rows('project') ): the_row(); ?>
	<!--if project statement-->



<?php
	if (get_row_layout() == 'module_1' ): ?>
	<!--module 1 12column img-->
<div class="container-fliud">
	<div class="row">
		<div class="col-md-12">
			<img src="<?php the_sub_field('image'); ?>" alt="project image 1">
		</div>
	</div>
</div>
<?php endif; ?>




<?php if (get_row_layout() == 'module_2' ): ?>
	<!--module 2 6column text centered-->
	<div class="container">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<?php the_sub_field('caption'); ?>
	</div>
	</div>
</div>
<?php endif; ?>


<?php if (get_row_layout() == 'module_3' ); ?>
<!--module 3 leftalignmarginzeroimagecolumn5 offset1 text6column-->
<div class="container-fluid">
<div class="row">
<div class="col-md-5">
	<img src="<?php the_sub_field('image'); ?>" alt="project image 3">
	</div>
	<?php if(get_sub_field('caption')): ?>
	<div class="col-md-5 col-md-offset-1">
		<?php the sub_field('caption'); ?>
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>


<?php if(get_row_layout() == 'module_4' ); ?>
<!--module 4 5columntextoffsetone 5columnimagenomarginright-->
<div class="container-fluid">
<div class="row">
	<?php if(get_sub_field('caption')): ?>
		<div class="col-md-5 col-md-offset-1 col-md-push-6">
			<img src="<?php the_sub_field('image'); ?>" alt="project image 4">
			</div>
	<div class="col-md-5 col-md-offset-1 col-md-pull-6">
		<?php the sub_field('caption'); ?>
	</div>
		<?php else : ?>
			<div class="col-md-5 col-md-offset-7">
				<img src="<?php the_sub_field('image'); ?>" alt="project image 4">
				</div>
			<?php endif; ?>
</div>
</div>
<?php endif; ?>


				<?php if (get_row_layout() == 'module_5' ); ?>
				<!--module 5 8columnimage nomarginleftalign 4columtext*subjecttochange-->
				<div class="container-fluid">
				<div class="row">
				<div class="col-md-8">
					<img src="<?php the_sub_field('image'); ?>" alt="project image 5">
					</div>
					<?php if(get_sub_field('caption')): ?>
					<div class="col-md-3">
						<?php the sub_field('caption'); ?>
				</div>
				<?php endif; ?>
				</div>
				</div>
				<?php endif; ?>


<?php if (get_row_layout() == 'module_6' ); ?>
<!--module 6 8 column image no margin 4column text image right align-->
<div class="container-fluid">
<div class="row">
	<?php if(get_sub_field('caption')): ?>
		<div class="col-md-8 col-md-push-4">
			<img src="<?php the_sub_field('image'); ?>" alt="project image 6">
			</div>
	<div class="col-md-3 col-md-offset-1 col-md-pull-8">
		<?php the sub_field('caption'); ?>
	</div>
		<?php else : ?>
			<div class="col-md-8 col-md-offset-4">
				<img src="<?php the_sub_field('image'); ?>" alt="project image 6">
				</div>
			<?php endif; ?>
</div>
</div>
<?php endif; ?>

<?php if (get_row_layout() == 'module_7' ); ?>
<!--module 7 12column image centered-->
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
	<img src="<?php the_sub_field('image'); ?>" alt="project image 6">
	</div>
	<?php if(get_sub_field('caption')): ?>
	<div class="col-md-5">
		<?php the sub_field('caption'); ?>
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>

<?php if (get_row_layout() == 'module_6' ); ?>
<!--module 8 4column image 2 column margin + gutter on right 1 column padding right 5column-->
<div class="container-fluid">
<div class="row">
	<?php if(get_sub_field('caption')): ?>
		<div class="col-md-5 col-md-offset-1 col-md-push-6">
			<img src="<?php the_sub_field('image'); ?>" alt="project image 8">
			</div>
	<div class="col-md-5 col-md-offset-1 col-md-pull-6">
		<?php the sub_field('caption'); ?>
	</div>
		<?php else : ?>
			<div class="col-md-5 col-md-offset-7">
				<img src="<?php the_sub_field('image'); ?>" alt="project image 8">
				</div>
			<?php endif; ?>
</div>
</div>
<?php endif; ?>


<?php if(get_row_layout() == 'module_9' ); ?>
<!--module 9 4column image 2 column margin + gutter on left 1 column padding text 5 column text-->
<?php if(have_rows('repeater')): while(have_rows('repeater')): the_row(); ?>
	<?php if(have_rows('row')): while(have_rows('row')): the_row(); ?>
		<div class="container">
			<div class="row">
	<?php if(get_row_layout() == 'image' ); ?>
	<div class="col-md-4">
		<img src="<?php the_sub_field('image'); ?>" alt="project image 9">
	</div>
<?php endif; ?>
<?php if(get_row_layout() == 'caption' ); ?>
	<div class="col-md-4">
		<?php the_sub_field('caption'); ?>
	</div>
<?php endif; ?>
</div>
</div>
<?php endwhile;
endif;
endwhile;
endif;
endif;
?>



<?php if (get_row_layout() == 'module_10' ); ?>
<!--module 10 6 column image large no gutter image 6 column text-->
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
	<img src="<?php the_sub_field('image'); ?>" alt="project image 10">
	</div>
</div>
</div>
<?php endif; ?>

<?php if (get_row_layout() == 'module_11' ); ?>
<!--module 11 6 column image no gutter image 6 column column text-->
<div class="container">
<div class="row">
<div class="col-md-5">
	<img src="<?php the_sub_field('image'); ?>" alt="project image 11">
	</div>
	<?php if(get_sub_field('caption')): ?>
	<div class="col-md-6 col-md-offset-1">
		<?php the sub_field('caption'); ?>
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>

<div class="container">
<div class="row">




</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
