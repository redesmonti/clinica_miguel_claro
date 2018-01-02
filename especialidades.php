<?php
/*
Template Name: Especialidades
*/
?>
<?php get_header(); ?>


<div class="container">
	<div class="contenedor-especialidades">
		<div class="titulo">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="texto">
			<p>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</p>
		</div>
	</div>
</div>


<?php get_footer(); ?>