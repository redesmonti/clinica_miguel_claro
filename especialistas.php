<div class="contenedor-especialistas">	
    <div class="titulo">
		    <h1>Nuestro equipo</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    	
    </div>
    <div>
    	<?php 
            $args = array(
            'post_status' => 'publish',
            'post_type' => 'Especialistas',
            'orderby' => 'title',
            'order' => 'ASC',
            'posts_per_page' => '1',
            'showposts' => '1'
            );
            $my_query = new WP_Query($args); 
            if( $my_query->have_posts() ) : ?>
            <?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <?php if(!empty($url)){ ?>
        	        <div class="contenedor-info-especialistas">
                        <div class="foto">
            	           <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>
                        </div>
                        <h1><?php the_title(); ?></h1>
        	            <h5 class="info"><?php the_content(); ?></h5>
                        <?php } ?>
        	        </div>
                <?php $i++;endwhile; endif; ?>

    </div>
    <div class="contenedor-carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <?php 
                        $args = array(
                        'post_status' => 'publish',
                        'post_type' => 'Especialistas',
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'posts_per_page' => '40',
                        'showposts' => '40'
                        );
                        $my_query = new WP_Query($args); 
                        if( $my_query->have_posts() ) : ?>
                        <?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <?php if(!empty($url)){ ?>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>  
                        </div>
                        <?php } ?>
                    <?php $i++;endwhile; endif; ?>
                </div>
            </div>
                
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
		