<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Domicilios</title>
	<link rel="stylesheet" href="<?php echo base_url('recursos_pagina/');?>css/fontello.css">
</head>
<link rel="stylesheet" href="<?php echo base_url('recursos_pagina/');?>css/estilos.css">
<body>
	<header>
    <div class="contenedor">
        <h1 class="icon-star">Domicilios blader</h1>
        <input type="checkbox" id="menu-bar">
        <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="<?php echo base_url('');?>Pagina">Inicio</a>
                    <a href="<?php echo base_url('');?>Leer">Comidas</a>
                    <a href="<?php echo base_url('');?>Mexico">Mexico</a>
                    <a href="<?php echo base_url().'verpedido';?>">Ver Pedido</a>
                </nav>
            </div>
</header>
        
        <main>
            <section id="banner">
                <img src="<?php echo base_url('recursos_pagina/');?>ima/banner.jpg">
                <div class="contenedor">
                    <h2>Las mejores comidas a muy buen precio</h2>
                    <p>¿Cuál es tu comida favorita?</p>
                    <a href="<?php echo base_url('');?>Leer">Leer más</a>  <a href="<?php echo base_url('');?>Usuario">Registrarse</a>
                </div>
            </section>
            
            <section id="bienvenidos">
            <div class="contenedor">
                <h2>BIENVENIDOS A NUESTRO CLUB DONDE AMAMOS LA COMIDA</h2>
                <p>En este lugar puedes traer a tu familia y disfrutar de nuestra sabrosas comidas desde nuestros deliciosos batidos hasta las mejores hamburguesas y salchipapas</p>
                </div>
            </section>
            
            <section id="blog">
                <h3>Lo ultimo en delicias para que puedas ordenar</h3>
                <div class="contenedor">
                    <article>
                        <img src="<?php echo base_url('recursos_pagina/');?>jimagenes/comida1.jpg" width="300" height="250">
                        <h4>Tenemos las mejores salchipapas</h4>
                    </article>
                    <article>
                        <img src="<?php echo base_url('recursos_pagina/');?>jimagenes/comida3.jpg" width="300" height="250">
                        <h4>Tenemos el mejor pollo frito</h4>
                    </article>
                    <article>
                        <img src="<?php echo base_url('recursos_pagina/');?>jimagenes/comida2.jpg" width="300" height="250">
                        <h4>Tenemos las mejores picadas</h4>
                    </article>
                </div>
            </section>
            
            <section id="info">
                <h3>Para todos nosotros la comida es muy importante , por lo tanto te ofrecemos esta variedades para que puedas ordenar.</h3>
                <div class="contenedor">
                    <div class="info-pet">
                        <img src="<?php echo base_url('recursos_pagina/');?>ima/ensaladas.jpg" width="300" height="250">
                        <h4>Ensaladas</h4>
                    </div>
                    <div class="info-pet">
                        <img src="<?php echo base_url('recursos_pagina/');?>ima/comidas.jpg" width="300" height="250">
                        <h4>Comida rapida</h4>
                    </div>
                    <div class="info-pet">
                        <img src="<?php echo base_url('recursos_pagina/');?>ima/batidos.jpg" width="300" height="250">
                        <h4>Batidos</h4>
                    </div>
                    <div class="info-pet">
                        <img src="<?php echo base_url('recursos_pagina/');?>ima/helado.jpg" width="300" height="250">
                        <h4>Helados</h4>
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
            <div class="contenedor">
                <p class="copy">Indrustrias Blader ; 2019 - 2021</p>
                <div class="sociales">
                    <a class="fontawesome-facebook-sign" href="https://www.facebook.com/cristian.pino.35728"></a>
                    <a class="fontawesome-twitter" href="#"></a>
                    <a class="fontawesome-camera-retro" href="https://www.instagram.com/cristianpino699/"></a>
                    <a class="fontawesome-google-plus-sign" href="#"></a>
                </div>
            </div>
        </footer>

	</header>
</body>
</html>