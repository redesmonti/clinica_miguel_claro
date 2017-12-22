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
    <div class="container">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="0">
        <?php 
            $args = array(
            'post_status' => 'publish',
            'post_type' => 'Especialistas',    
            'posts_per_page' => '1',
            'showposts' => '1'
            );
            $my_query = new WP_Query($args); 
            if( $my_query->have_posts() ) : ?>
            <?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <?php if(!empty($url)){ ?>
        <!-- Wrapper for slides -->                
        <div class="carousel-inner"> 
            <div class="item active">
                <div class="container-fluid">
                    <div class="row">    
                        <div class="col-md-3">
                            <a href="#demo-<?php the_id(); ?>">
                                <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?> 
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h1><?php the_title(); ?></h1>
                            <h5 class="info"><?php the_content(); ?></h5>
                        </div>
                        
                    </div>
                </div>            
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#demo-<?php the_id(); ?>">
                                <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?> 
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h1><?php the_title(); ?></h1>
                            <h5 class="info"><?php the_content(); ?></h5>
                        </div>
                    </div>
                </div>            
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#demo-<?php the_id(); ?>">
                                <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?> 
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h1><?php the_title(); ?></h1>
                            <h5 class="info"><?php the_content(); ?></h5>
                        </div>
                    </div>
                </div>           
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#demo-<?php the_id(); ?>">
                                <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?> 
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h1><?php the_title(); ?></h1>
                            <h5 class="info"><?php the_content(); ?></h5>
                        </div>
                    </div>
                </div>           
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#demo-<?php the_id(); ?>">
                                <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?> 
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h1><?php the_title(); ?></h1>
                            <h5 class="info"><?php the_content(); ?></h5>
                        </div>
                    </div>
                </div>           
            </div>
        <!-- End Item -->
        
        </div>
        <!-- End Carousel Inner -->
        <div class="controls">
            <ul class="nav">
                <li data-target="#custom_carousel" data-slide-to="0">
                    <a href="#demo-<?php the_id(); ?>"><small><?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?> </small></a>
                </li>
                <li data-target="#custom_carousel" data-slide-to="1">
                    <a href="#demo-<?php the_id(); ?>"><small><?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?> </small></a>
                </li>
                <li data-target="#custom_carousel" data-slide-to="2">
                    <a href="#demo-<?php the_id(); ?>"><small><?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?> </small></a>
                </li>
                <li data-target="#custom_carousel" data-slide-to="3">
                    <a href="#demo-<?php the_id(); ?>"><small><?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?> </small></a>
                </li>
            </ul>
        </div>
        
    </div>
    <?php } ?>
    <?php $i++;endwhile; endif; ?>
    <!-- End Carousel -->
</div>

</div>