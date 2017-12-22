<div class="contenedor-noticias">
    <div class="titulo">
        <h1>Noticias</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, tempore inventore! Temporibus labore laudantium in totam repellat nulla rem odio veritatis! 
        </p>
    </div>
    <div class="contenedor-link-noticias">
      <div class="contenedor-tarjeta">
        <?php query_posts('category_name=Prensa&showposts=4'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="tarjeta">
                  <div class="imagen">
                    
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>  
                  </div>
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="descripcion"><?php the_content(); ?></div>
                  <a href="<?php the_permalink(); ?>">Leer más</a>      
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>
</div>