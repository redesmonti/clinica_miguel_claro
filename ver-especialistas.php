<?php
/*
Template Name: Ver especialistas
*/
?>

<?php get_header(); ?>
<!-- Contenido de página de inicio -->

<div class="container">
	<div class="contenedor-entradas">
		<?php 
              $args = array(
              'post_type' => 'Especialistas',
              'post_per_page'=> '4', 
              'showposts' => '-1',
              'orderby' => 'date', 
              'order' => 'DESC', //numero de noticias que treara
              );
              $my_query = new WP_Query($args); 
              if( $my_query->have_posts() ) : ?>
              <?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post(); ?>
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
              <?php if(!empty($url)){ ?>
                <div class="col-md-12">
                    <div class="imagen">
                   		<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>
                  	</div>
                    <h1 class="titulo"><?php the_title(); ?></h1>
                    <div class="descripcion"><?php the_content(); ?></div>
                    <a href="<?php the_permalink(); ?>">Leer más</a>   
                </div>
            <?php } ?>
    <?php $i++;endwhile; endif; ?>
	</div>
</div>


<?php get_footer(); ?>