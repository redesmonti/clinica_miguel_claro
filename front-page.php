<?php get_header(); ?>

<!-- Primer slider -->
    <div class="link-toma-horas">
    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Toma de horas aquí</a>
    </div>
    <div class="foto-reemplazo-celular">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png" alt="">
      <img class="img-celular-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_miguelclarohd.png" alt="">
    </div>
    <div class="slider-principal">
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
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.png" alt="">
                <div class="carousel-caption">
                  <h3><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_miguelclarohd.png" alt=""></h3>
                  <p>Especialistas con pacientes complejos</p>
                </div>
              </div>
              <div class="item">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.png" alt="">
                <div class="carousel-caption">
                  <h3><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_miguelclarohd.png" alt=""></h3>
                  <p>Primera y única Clinica Vascular en Chile</p>
                </div>
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

    <!-- Botonera especialidades -->
    <div class="contenedor-cuadros-especialidades">
      <div class="cuadro azul1 hover-azul"><h1>Cirugía Vascular</h1></div>
      <div class="cuadro azul2 hover-azul"><h1>Traumatología</h1></div>
      <div class="cuadro azul3 hover-azul"><h1>Centro de Curaciones</h1></div>
      <div class="cuadro azul4 hover-azul"><h1>Laboratorio</h1></div>
      <div class="cuadro azul5 hover-azul"><h1>Kinesiología</h1></div>
    </div>

<!-- Contenedor "Sobre la Clínica" -->
<section id="somos">
    <div class="contenedor-clinica">
      <div class="titulo">
          <h1>Sobre la Clínica Miguel Claro</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, tempore inventore! Temporibus labore laudantium in totam repellat nulla rem odio veritatis! 
          </p>
      </div>
      <div class="contenedor-info-clinica">
        <div class="bloque-texto1">
          <h2>Título</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, tempore inventore! Temporibus labore laudantium in totam repellat nulla rem odio veritatis! 
          </p>
        </div>
        <div class="foto1">
        	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/3.png" alt="">
        </div>
        <div class="bloque-texto1">
          <h2>Título</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, tempore inventore! Temporibus labore laudantium in totam repellat nulla rem odio veritatis! 
          </p>
        </div>
        <div class="foto2">
        	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/4.png" alt="">
        </div>
        <div class="bloque-texto1">
          <h2>Título</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, tempore inventore! Temporibus labore laudantium in totam repellat nulla rem odio veritatis! 
          </p>
        </div>
        <div class="foto3">
        	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/5.png" alt="">
        </div>
      </div>
    </div>
</section>
    <!-- Contenedor video -->
    <div class="contenedor-video">
        <div class="contenedor-titulos">
            <h1>Historia Clínica Miguel Claro</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, tempore inventore! Temporibus labore laudantium in totam repellat nulla rem odio veritatis! 
            </p>
        </div>
        <div class="contenedor-infovideo">
          <div class="texto">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, excepturi voluptates provident iusto eveniet vero nam doloribus nulla sunt tenetur quam est! Ipsam velit vitae quos, odio nesciunt mollitia. Iste!
                Nam harum illo officiis architecto aperiam? Minus enim architecto optio error facilis dolore consequuntur sequi similique itaque iusto et nostrum unde perspiciatis recusandae culpa, sed ipsum voluptates corporis perferendis officiis.
                Nemo ex odio, accusantium aliquam quibusdam soluta quia quidem facere. Nisi iure sunt numquam deserunt praesentium quae facilis cum accusamus optio magnam, pariatur quisquam ut laboriosam aut eveniet impedit natus!
            </p>
          </div>
          <div class="video">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/video.png" alt="">
          </div>
        </div>
    </div>

    <!-- Especialistas  -->
	<section id="especialistas">
		<?php include_once( 'especialistas.php' ); ?>	
	</section>

    <!-- Noticias  -->
  <section id="noticias">
     <?php include_once( 'noticias.php' ); ?>
  </section>
<section id="contacto">
     <?php include_once( 'contacto.php' ); ?>
  </section>
  <section id="contacto">
     <?php include_once( 'mapas.php' ); ?>
  </section>
<?php get_footer(); ?>

