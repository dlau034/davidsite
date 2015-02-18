<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->

      <div class="page-header">
          <div class="row">
        
          
          <div class="col-xs-9">
            <h1>Portfolio</h1>
          </div>

          <div class="col-xs-3 prev-next">
            <?php previous_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>'); ?>
            <a href="<?php bloginfo('url'); ?>/?p=84"><span class="glyphicon glyphicon-th"></span></a>
            <?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>'); ?>            
          </div>

        </div>
      </div>
      <div class="row">
        
          <?php if(have_posts()) : while (have_posts()): the_post(); ?>

          <!-- Loop in portfolio image -->
          <div class="col-sm-8 portfolio-image">

          <?php 
            $thumbnail_id = get_post_thumbnail_id(); 
            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
          ?>
            
          <img src=" <?php echo $thumbnail_url[0] ?>">

          </div>

          <!-- Loop in portfolio text -->

          <div class="col-sm-4">
            
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>  
            <p><a class="btn btn-large btn-primary" href="<?php the_field('link_'); ?>">View Final Piece</a></p>
          </div>
        

          <?php endwhile; else: ?>

          <div class="page-header">
            <h1>This shit ain't working</h1>
          </div>          

          <?php endif; ?>
        

</div>

<?php get_footer(); ?>
