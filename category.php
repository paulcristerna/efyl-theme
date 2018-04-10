<?php
/*
 *  Template Name: Home Page Template
 */
get_header();
?>
  <div class="row" id="titulo">
    <div class="container">
      <div class="col-sm-12">
       <h2><?php 
              $category = get_the_category(); 
              echo $category[0]->cat_name; 
            ?>
        </h2>
      </div>
    </div><!-- /.container -->
  </div><!-- /.row -->

  <div class="container" id="contenido">
    <div class="row">
      <div class="col-sm-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-sm-4">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('miniatura'); ?></a></p>
            <?php the_excerpt(); ?>
            <hr />
          </div>
          <?php endwhile; 
          else: ?> 
            <div class="col-sm-12 text-center">
              <p><span class="glyphicon glyphicon-remove"></span> No se encontraron elementos.</p>
            </div>
          <?php endif; ?>
      </div> 
    </div><!-- /.row -->
  </div><!-- /.container -->
<?php 
  get_footer(); 
?>