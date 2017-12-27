<div class="contenedor-contacto">
	<div class="titulo">
        <h1>Contacto</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, tempore inventore! Temporibus labore laudantium in totam repellat nulla rem odio veritatis! 
        </p>
    </div>
    <div class="contenedor-mapa-form">
    	<div class="formulario">
            <form action="http://pruebabrother.96.lt/clinica_mc/envioconsulta.php" enctype="" method="post">
                <label for="Nombre">Nombre</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre completo" required>
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemple@correo.com" required>
                <label for="Teléfono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="987654321" required>
                <label for="texto">texto:</label>
                <textarea name="content" class="form-control" rows="5" id="texto" placeholder="Ingrese el contenido de su mensaje" required></textarea>
                <p></p>
                <input type="submit" value="Enviar" />
            </form>
    		
    	</div>
    	<div class="map">
            <div class="pestanas-mapas">
              <!-- Nav tabs -->
              <ul class="nav  nav-justified"" role="tablist">
                <li role="presentation" class="active mapa-general"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mapa General</a></li>
                <li role="presentation" class="linea1"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/metro.png" alt="">Ruta Línea 1</a></li>
                <li role="presentation" class="linea5"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/metro.png" alt="">Ruta Línea 5</a></li>
                <li role="presentation" class="linea6"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/metro.png" alt="">Ruta Línea 6</a></li>
                <li role="presentation" class="estacionamiento"><a href="#estacionamiento" aria-controls="estacionamiento" role="tab" data-toggle="tab">Estacionamientos</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active " id="home">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.420818200103!2d-70.62065538480086!3d-33.43834128077744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf7f06cdc26f%3A0xa3567bcce95e48bf!2sJos%C3%A9+Miguel+Claro+988%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1513868823298" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6659.12287004164!2d-70.62549497562237!3d-33.434676523113666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x9662c5866f3cadf3%3A0x36e21e5121987cde!2sSalvador%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!3m2!1d-33.433107!2d-70.62658499999999!4m5!1s0x9662cf7f06cdc26f%3A0xa3567bcce95e48bf!2sJos%C3%A9+Miguel+Claro+988%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!3m2!1d-33.4383413!2d-70.6184667!5e0!3m2!1ses-419!2scl!4v1514305176613" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="messages">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6658.651313914758!2d-70.63059572562175!3d-33.44082117310658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x9662c5829df34217%3A0x385d5c15c58c2e4!2sParque+Bustamante%2C+Providencia!3m2!1d-33.442786999999996!2d-70.63163!4m5!1s0x9662cf7f06cdc26f%3A0xa3567bcce95e48bf!2sJos%C3%A9+Miguel+Claro+988%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!3m2!1d-33.4383413!2d-70.6184667!5e0!3m2!1ses!2scl!4v1514304832766" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings"><iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6658.789339486216!2d-70.617177825622!3d-33.439022723108664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x9662cf77d4644e7f%3A0x162e569702513d76!2sMetro+Ines+De+Suarez+-+Avenida+Francisco+Bilbao%2C+Providencia!3m2!1d-33.4385508!2d-70.607027!4m5!1s0x9662cf7f06cdc26f%3A0xa3567bcce95e48bf!2sJos%C3%A9+Miguel+Claro+988%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!3m2!1d-33.4383413!2d-70.6184667!5e0!3m2!1ses!2scl!4v1514304875845" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                <div role="tabpanel" class="tab-pane fade" id="estacionamiento"><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1664.7222260810283!2d-70.61851544195065!3d-33.43772535692919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m5!1s0x9662cf7f06cdc26f%3A0xa3567bcce95e48bf!2sJos%C3%A9+Miguel+Claro+988%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!3m2!1d-33.4383413!2d-70.6184667!4m3!3m2!1d-33.4382075!2d-70.6160541!5e0!3m2!1ses!2scl!4v1514399144633" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
              </div>

            </div>
        
        </div>
    </div>
</div>