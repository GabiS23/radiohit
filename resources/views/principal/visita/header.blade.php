
<div class="container">
	<header class="header" id="logo">
		<div class="container">
			<div class="logo">
				<div class="logo-item">
					<div class="logo-icon"><img src="./visita/imagen_empresa/logos/logoRadioHit.png"  alt="" height=120 style="float:none;"></div>
                    <h2 class="logo-title"><a href="" ><b>TU MÚSICA EN INGLÉS</b> </a></h2>
					<div class="logo-description">
						<p>Cochabamba Bolivia</p>
					</div>
                    
				</div>
			</div>
			<nav class="menu">
				<div class="btn-menu">
					<label for="btn-menu">☰</label>
				</div>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
	<!--	--------------->
	<input type="checkbox" id="btn-menu">
	<div class="container-menu">
		<div class="cont-menu">
			<nav>
				<img src="./visita/imagen_empresa/logos/logoRadioHit.png" alt="" height=70 style="padding: 15px 5px 0px 15px !important;">
				<hr style="width:100%;">
				
				
				<a href="{{route('inicio_index')}}">Inicio</a>
				<a href="{{route('top20_index')}}">Top 20</a>
				<a href="{{route('noticias_index')}}">Noticias</a>
				<a href="{{route('entrevistas_index')}}">Entrevistas</a>
				<a href="{{route('programacion_index')}}">Programación</a>
				<a href="{{route('nosotros_index')}}">Sobre nosotros</a>
				<a href="{{route('radiohit_index')}}">Anuncie en Radio Hit</a>
				
				
			</nav>
      		
      		<div class="inline"  >
			  <hr style="width:90%;">
			  <br>
              <a href="https://www.facebook.com/mentedigitalboliviaa/" target="_blank" class="icono-socia"><i target="_blank" class="icono-social fab fa-facebook-square"></i></a>
              <a href="https://www.instagram.com/mentedigitalbolivia/?hl=es" target="_blank" class="icono-socia"><i class="icono-social fab fa-instagram"></i></a>
              <a href="https://www.tiktok.com/@mentedigitalbolivia/video/7010384718390676742?is_copy_url=1&is_from_webapp=v1" target="_blank" class="icono-socia"><i class="icono-social fab fa-tiktok"></i></a>
              <a href="https://api.whatsapp.com/send?phone=+59176985007" target="_blank" class="icono-socia"><i class="icono-social fab fa-whatsapp"></i></a>
              <a href="mailto:mentedigitalbolivia@gmail.com" target="_blank" class="icono-socia"><i class="icono-social far fa-envelope"></i></a>
          	</div>
			<label for="btn-menu">x</label>
		</div>
	</div>
</div>
<footer class="footer-radio" style="z-index: 100 !important ;">
	<div class="container" style="z-index: 100 !important ;">
		<div class="row">
			<div class="container_footer_radio">
				<div class="col-md-5">
					<div class="uno">
						<div class="service-icon2"><i class="fa fa-play"></i>&nbsp;&nbsp;Radio en vivo</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="dos">
						<figure>
                        	<img src="./visita/imagen_empresa/varios/radio.png" alt="Smiley face" width="42" height="42" />
							<figcaption>Publicita con nosotros</figcaption>
						</figure>
					</div>
				</div>
			</div>
        </div>
	</div>
</footer>
<style>
    /* Invisible texto */
figcaption {
  display:none; 
  transition: all .5s;
  background-color:red;
  color:#000;
}
/* Visible texto */
figure:hover > figcaption {
  display:block;
  transition: all .5s;
}
</style>
<!---->