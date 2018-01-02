<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
  <section>
  	<div class="container">
  		<div class="contenedor-entradas">
  			<div class="titulo">
  				<h1><?php the_title(); ?></h1>
			    <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>
			    <p><?php the_content(); ?></p>
  			</div>
  		</div>
  	</div>
  </section>
<?php endif; ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
