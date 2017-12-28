<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
  <section>
  	<div class="container">
  		<h1 class="contenedor-entradas"><?php the_title(); ?></h1>
	    <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>
	    <?php the_content(); ?>
  	</div>
  </section>
<?php endif; ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
