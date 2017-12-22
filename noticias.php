<div class="contenedor-noticias">
    <div class="titulo">
        <h1>Noticias</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, tempore inventore! Temporibus labore laudantium in totam repellat nulla rem odio veritatis! 
        </p>
    </div>
    
  <div class="container contenedor-link-noticias">
    <div class="row contenedor-tarjeta">
      <?php 
              $args = array(
              'post_per_page'=> '4', 
              'showposts' => '4',
              'orderby' => 'date', 
              'order' => 'DESC', //numero de noticias que treara
              );
              $my_query = new WP_Query($args); 
              if( $my_query->have_posts() ) : ?>
              <?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post(); ?>
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
              <?php if(!empty($url)){ ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tarjeta">
                    <div class="imagen">
                   <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>

                  </div>
                    <h3><?php the_title(); ?></h3>
                    <div class="descripcion"><?php the_content(); ?></div>
                    <a href="<?php the_permalink(); ?>">Leer más</a> 
                  </div>
                  
                     
                </div>
                  <?php } ?>
            <?php $i++;endwhile; endif; ?>
    </div>        
  </div>
</div>