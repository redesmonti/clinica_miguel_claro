<?php
/*
Template Name: Ver noticias
*/
?>
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<div class="link-toma-horas">
  <a href="http://venus.clinicamiguelclaro.cl/agendacliente/"  target="_blank"><i class="fa fa-clock-o" aria-hidden="true"></i>Toma de horas aquí</a>
</div>
<div class="container">
  <div class="contenedor-entradas">
    <div class="col-md-8">
      <?php 
        $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
        global $wp_query;
        $original_query = $wp_query;
        $args = array(
          'post_per_page'=> '5', 
          'showposts' => '5', //numero de noticias que treara
          'paged' => $currentPage ,
          'orderby' => 'date', 
          'order' => 'DESC', 
        );      
        $custom_post_type = new WP_Query( $args );
        $wp_query = $custom_post_type;
        if ( $custom_post_type->have_posts() ) : ?>
          <?php $i = 1; while ( $custom_post_type->have_posts() ) : $custom_post_type->the_post(); ?>
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
          <?php if(!empty($url)){ ?>
          <div class="col-md-12 space">
            <div class="imagen">
              <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>
            </div>
            <div class="info-espacio">
              <h1 class="titulo"><?php the_title(); ?></h1>
              <div class="descripcion"><?php the_content(); ?></div>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button" aria-pressed="true">Leer más</a>
            </div>
          </div> 
          <?php } ?>
          <?php $i++;endwhile;  ?>   
        <?php endif; ?> 
        <div class="col-md-8">
          <?php 
          the_posts_pagination(
            array(
                'mid_size' => 2,
                'screen_reader_text'=> '&nbsp;',//poner texto sobre paginacion
                'prev_text' => __( '<i class="fa fa-arrow-left"></i>', 'textdomain' ),
                'next_text' => __( '<i class="fa fa-arrow-right"></i>', 'textdomain' ),
            )
          ); 
          wp_reset_postdata();
          $wp_query = $original_query;
          ?>
        </div>   
    </div>     
  </div>

  <div class="col-md-4">
      <?php dynamic_sidebar( 'sidebar' ); ?>
  </div>


</div>
<?php get_footer(); ?>

