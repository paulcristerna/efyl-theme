<?php 
  get_header();
?>
  <div class="row" id="slide">
    <div class="container">
    <?php query_posts('category_name=Destacado&posts_per_page=1'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-sm-6">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('miniatura'); ?></a>
        </div>
        <div class="col-sm-6">   
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <br />
          <?php the_excerpt(); ?>
          <hr />
          <p><?php the_category(', '); ?> | <?php echo get_the_date(); ?></p>
        </div>
    <?php endwhile; 
    else: ?> 
      <div class="col-sm-12 text-center">
        <p><span class="glyphicon glyphicon-remove"></span> No se encontraron elementos.</p>
      </div>
    <?php endif; ?>       
    </div><!-- /.container -->
  </div><!-- /.row -->

  <div class="container" id="contenido">
    <div class="row">
      <div class="col-sm-8">
        <?php query_posts('category_name=Noticias&posts_per_page=6'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-sm-6">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_category(', '); ?> | <?php echo get_the_date(); ?></p>
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
      <div class="col-sm-4">
        <div class="col-sm-12">
          <div class="well" id="contacto">
            <h3><span class="glyphicon glyphicon-map-marker"></span> Dirección</h3>
            <p>Calle Josefa Ortíz de Dominguez S/N, Ciudad Universitaria, Culiacán, Sinaloa. CP:80013</p>
            <hr />
            <h3><span class="glyphicon glyphicon-earphone"></span> Teléfonos</h3>
            <p><strong>667-761-25-46</strong> y <strong>667-756-89-70</strong></p>
            <hr />
            <h3><span class="glyphicon glyphicon-envelope"></span> Correo</h3>
            <p>efyl@uas.edu.mx</p>              
          </div>         
        </div>  
        <div class="col-sm-12">
          <div class="well">
            <?php query_posts('category_name=Eventos&posts_per_page=2'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_category(', '); ?> | <?php echo get_the_date(); ?></p>
            <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('miniatura'); ?></a></p>
            <?php the_excerpt(); ?>
          <?php endwhile; 
          else: ?> 
            <div class="col-sm-12 text-center">
              <p><span class="glyphicon glyphicon-remove"></span> No se encontraron elementos.</p>
            </div>
          <?php endif; ?>
          </div>
        </div>
      </div>       
    </div><!-- /.row -->
  </div><!-- /.container -->
<?php 
  get_footer(); 
?>