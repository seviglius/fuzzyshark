<header class="header">
  <a class="trigger" href="#0">
    <!-- <span class="">Home</span> --><span class="menu-text">Index</span>
  </a> <!-- cd-primary-nav-trigger -->
</header>

<nav>
  <div class="primary-nav">
    <div class="container">
      <div class="row">
            <ul>
              <a class="btn" class="active btn" id="all" href=#><li>All</li></a>
              <a class="btn" id="design" href=#><li>Design</li></a>
              <a class="btn" id="photography" href=#><li>Photo</li></a>
            </ul>
      </div><!-- <div class="row"> -->
      <div id="parent">
        <?php
        remove_all_filters('posts_orderby');
        global $post; $cntr = 1;

        $args = array(
            'post_type' => array('design', 'photography'),
            'posts_per_page' => 100,
            'orderby'=> 'title',
            'order' => 'ASC',
        );

        $query = new WP_Query($args);
        $featuredimage = get_field_objects();
        ?>

        <?php while ($query->have_posts()) : $query->the_post(); ?> 
        <?php $post_type = get_post_type( $post->Class ); ?>


            
              <div class="col-sm-3 col-xs-6 <?php echo $post_type ?>">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php 
                        if( get_field('headshot') ): 
                        the_field('headshot'); 
                        endif; ?>" alt="<?php the_title(); ?>">
                  </a>
                  <div class="indexName">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                    </a>
                  </div> <!--indexName-->
              </div> <!--column-->
           
         
            
          <?php $cntr++; ?>
          <?php wp_reset_query(); ?>
          <?php endwhile; ?>
          </div>
    </div>
  </div>
</nav>

