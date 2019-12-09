<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css"> 
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,900" rel="stylesheet">


	
	
    <script type="text/javascript">
/*
CSS Browser Selector v0.2.7
Rafael Lima (http://rafael.adm.br)
http://rafael.adm.br/css_browser_selector
License: http://creativecommons.org/licenses/by/2.5/
Contributors: http://rafael.adm.br/css_browser_selector#contributors
*/
var css_browser_selector = function() {
var ua=navigator.userAgent.toLowerCase(),
is=function(t){return ua.indexOf(t) != -1;},
h=document.getElementsByTagName('html')[0],
b=(!(/opera|webtv/i.test(ua))&&/msie (\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?'gecko ff2':is('firefox/3')?'gecko ff3':is('gecko/')?'gecko':is('opera/9')?'opera opera9':/opera (\d)/.test(ua)?'opera opera'+RegExp.$1:is('konqueror')?'konqueror':is('applewebkit/')?'webkit safari':is('mozilla/')?'gecko':'',
os=(is('x11')||is('linux'))?' linux':is('mac')?' mac':is('win')?' win':'';
var c=b+os+' js'; h.className += h.className?' '+c:c;
}();
</script>

    

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58570369-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-58570369-1');
</script>
</head>
<body>
	<div class="Menutop u-wrapper">
		<?php include TEMPLATEPATH . "/template/secundario.php" ?>
	</div>
  <header class="Header u-wrapper">

<style>

.hide{
  display:none!important;
}
.nrc-show{display:block!important}
</style>

    <div class="Header-mobile">
      <div class="Header-mobile-logo">
        <a href="http://nrc.org.co/">
				  <img src="<?php bloginfo('template_directory'); ?>/images/Logotipo-NRC.png" alt="Logotípo Consejo Noruego para Refugiados">
			  </a>
      </div>

      <div class="Header-mobile-search">
        <a href="#" onclick="myFunction('search')">
				  <img src="<?php bloginfo('template_directory'); ?>/images/search-icon.png" alt="Búsqueda">
			  </a>
        <h5>BUSCAR</h5>
      </div>

      <div class="Header-mobile-menu">
        <a href="#" onclick="myFunction('menumMobile')">
				  <img src="<?php bloginfo('template_directory'); ?>/images/open-menu.png" alt="Búsqueda">
			  </a>
        <h5>MENÚ</h5>
      </div>
    </div>

<div class="menumMobile" id="menumMobile">
  <div class="menumMobile-header">
    <button onclick="myFunction('menumMobile')" class="menumMobile-header-btnClose">
      <img src="<?php bloginfo('template_directory'); ?>/images/close.png" alt="Cerrar">
    </button>   
  </div>

  <button onclick="myFunction('menu1')" class="menumMobile-level1">Quiénes somos</button>
  <div id="menu1" class="hide menumMobile-container">
    <ul class="menumMobile-container-ul">
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/sobre-nosotros/">Sobre Nosotros</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/valor-agregado/">Valor agregado</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/trabaja-con-nosotros/">Trabaja con nosotros</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/contrataciones/">Contrataciones</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/liderazgo/">Liderazgo</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/donantes/">Donantes</a></li>
    </ul>
  </div>

  <button onclick="myFunction('menu2')" class="menumMobile-level1">Qué Hacemos</button>
  <div id="menu2" class="hide menumMobile-container">
    <div class="menumMobile-container-group">ACTIVIDADES EN TERRENO</div>
    <ul class="menumMobile-container-ul">
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/educacion/">Educación</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/asistencia-legal-icla/">Asistencia Legal (ICLA)</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/alojamiento-e-infraestructura/">Alojamiento e infraestructura</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/unidad-de-capacidad-movil/">Unidad de Capacidad Móvil</a></li>
    </ul>
    <div class="menumMobile-container-group">ENFOQUE EN EL TERRITORIO</div>
    <ul class="menumMobile-container-ul">
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/enfoque-de-proteccion/">Enfoque de Protección</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/enfoque-de-genero/">Enfoque de Género</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/transferencia-de-bonos-y-efectivo/">Transferencia de bonos y efectivo</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/enfoque-regional/">Enfoque Regional</a></li>
    </ul>
  </div>

  <button onclick="myFunction('menu3')" class="menumMobile-level1">Dónde Trabajamos</button>
  <div id="menu3" class="hide menumMobile-container">
    <ul class="menumMobile-container-ul">
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/colombia/">Colombia</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/venezuela/">Venezuela</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/ecuador/">Ecuador</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/panama/">Panamá</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/honduras/">Honduras</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/directorio-oficinas-nrc/">Directorio Oficinas NRC</a></li>
    </ul>
  </div>

  <button onclick="myFunction('menu4')" class="menumMobile-level1">Recursos</button>
  <div id="menu4" class="hide menumMobile-container-subcontainer">
    <ul class="menumMobile-container-ul">
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/documentos-nrc/">Documentos NRC</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/documentos-externos/">Documentos externos</a></li>
      <li class="menumMobile-container-item"><a href="http://www.nrc.org.co/multimedia/">Multimedia</a></li>
    </ul>
  </div>

  <div class="menumMobile-level1"><a href="http://www.nrc.org.co/contactenos/">Contáctenos</a></div>
  <div class="menumMobile-level1"><a href="http://www.nrc.org.co/trabaja-con-nosotros/">Trabaja con nosotros</a></div>
  <div class="menumMobile-level1"><a href="http://www.nrc.org.co/contrataciones/">Contrataciones</a></div>
  <div class="menumMobile-level1"><a href="http://www.nrc.org.co/sala-de-prensa/">Sala de Prensa</a></div>
  <div class="menumMobile-level1"><a href="http://www.nrc.no/">English</a></div>
  <div class="menumMobile-level1"><a href="https://www.flyktninghjelpen.no/">flyktninghjelpen.no</a></div>

</div>

		<div class="Header-logo">
			<a href="http://nrc.org.co/">
				<img src="<?php bloginfo('template_directory'); ?>/images/Logotipo-NRC.png" alt="Logotípo Consejo Noruego para Refugiados">
			</a>
		</div>
		<div id="search" class="Header-search">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Buscar')) : ?><?php endif; ?>
		</div>
	</header>
	<div class="Nav u-wrapper">
		<?php include TEMPLATEPATH . "/template/nav.php" ?>
	</div>