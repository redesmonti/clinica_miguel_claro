<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<div class="link-toma-horas">
  <a href="http://venus.clinicamiguelclaro.cl/agendacliente/"  target="_blank"><i class="fa fa-clock-o" aria-hidden="true"></i>Toma de horas aquí</a>
</div>

  <section>
  	<div class="container">
  		<div class="contenedor-entradas">
        <div class="col-md-8 fondo-blanco">
          <div class="titulo">
            <?php if ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <hr>
            <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>
            <p><?php the_content(); ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <?php dynamic_sidebar( 'sidebar' ); ?>
        </div>
  		</div>
      <div class="col-xs-6">
          <?php previous_post_link('%link', '<i class="fa fa-arrow-left"></i> Atras '); ?><!--hacia atras-->
          <?php next_post_link('%link', ' Siguiente <i class="fa fa-arrow-right"></i>'); ?><!--hacia adelante-->
        </div>
      <?php endif; ?>
  	</div>
  </section>


    
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
