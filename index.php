<?php
/*
 *  Template Name: Home Page Template
 */
get_header();
?>
  <div class="row" id="titulo">
    <div class="container">
      <div class="col-sm-12">
       <h2><?php the_title(); ?></h2>
      </div>
    </div><!-- /.container -->
  </div><!-- /.row -->

  <div class="container" id="contenido">
    <div class="row">
      <div class="col-sm-8">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-sm-12">
            <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
            <p><?php the_content(); ?></p>
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
          <div class="well">
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
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
<?php 
  get_footer(); 
?>