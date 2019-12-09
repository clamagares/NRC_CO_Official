		<!--Suscription Module-->
		<div class="suscription u-wrapper-full">
			<div class="suscription-container">
				<h2 class="suscription-container-message">Derechos Respetados y Personas Protegidas</h2>
			</div>
		</div>
		<footer class="Footer">
			<div class="Footer-container">
				<div class="Footer-container-social">
					<h3 class="title-footer">CONTÁCTENOS</h3>
					<p>
					Consejo Noruego para Refugiados</br>
					Oficina Principal</br>
					Carrera 12A # 78 – 40 piso 6 | WeWork</br>
					Bogotá - Colombia</br>
					</p>
					<div class="contact">
						<div class="icon">
							<img src="<?php bloginfo('template_directory'); ?>/images/phone.png" alt="Teléfono" class="img-phone">
						</div>
						<div class="phone">
							<p>Teléfono: +57 1 3171481</p>
						</div>
					</div>

					<div class="contact">
						<div class="icon">
							<img src="<?php bloginfo('template_directory'); ?>/images/mail.png" alt="Correo elctrónico" class="img-mail">
						</div>
						<div class="mail">
							<p>Correo electrónico: <a href="mailto:co.nrc@nrc.no">co.nrc@nrc.no</a></p>
						</div>
					</div>
					
					<p>Síganos en:</p>
					<div class="social-icon">
						<a href="https://www.facebook.com/consejonoruegopararefugiados/" target="_blank" title="Síguenos en Facebook">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" class="at-icon at-icon-facebook"><g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g></svg>
						</a>
						<a href="https://twitter.com/NRC_LAC" target="_blank" title="Síguenos en Twitter">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" class="at-icon at-icon-twitter"><g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g></svg>
						</a>	
						<a href="https://www.youtube.com/channel/UCbItEsK1xs3EXTKn-lT_T1Q/videos" target="_blank" title="Síguenos en YouTube">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" class="at-icon at-icon-youtube"><g><path d="M13.73 18.974V12.57l5.945 3.212-5.944 3.192zm12.18-9.778c-.837-.908-1.775-.912-2.205-.965C20.625 8 16.007 8 16.007 8c-.01 0-4.628 0-7.708.23-.43.054-1.368.058-2.205.966-.66.692-.875 2.263-.875 2.263S5 13.303 5 15.15v1.728c0 1.845.22 3.69.22 3.69s.215 1.57.875 2.262c.837.908 1.936.88 2.426.975 1.76.175 7.482.23 7.482.15 0 .08 4.624.072 7.703-.16.43-.052 1.368-.057 2.205-.965.66-.69.875-2.262.875-2.262s.22-1.845.22-3.69v-1.73c0-1.844-.22-3.69-.22-3.69s-.215-1.57-.875-2.262z" fill-rule="evenodd"></path></g></svg>
						</a>
					</div>
				</div>
				<div class="Footer-container-wherewework">
					<h3 class="title-footer" onclick="myFunction('donde')">DÓNDE ESTAMOS</h3>
						<?php include TEMPLATEPATH . "/template/menu-donde-estamos.php" ?>
				</div>
				<div class="Footer-container-shortcuts">
					<h3 class="title-footer" onclick="myFunction('accesos')">ACCESOS DIRECTOS</h3>
					<?php include TEMPLATEPATH . "/template/menu-accesos-directos.php" ?>
				</div>
				<div class="Footer-container-whatwedo">
					<h3 class="title-footer" onclick="myFunction('sitios')">SITIOS DE INTERÉS</h3>
					<?php include TEMPLATEPATH . "/template/menu-sitios-de-interes.php" ?>
					<!-- <a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/images/phone.png" alt="">
					</a> -->
				</div>
			</div>
		</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>-->
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
	<script>
	$(document).ready(function(){
  	$('.owl-carousel').owlCarousel({
			loop:true,
			items:1,
			nav: true,
			navElement: 'a',
			navText: ['<','>'],
			smartSpeed: 400,
			//autoplay: true
		});
	});    
	</script>	
	<script languague="javascript">
    // Función thumb Grid 1
      function thumbGrid1() {
        var contentGrid1 = document.getElementById('contentGrid1');
        var contentGrid2 = document.getElementById('contentGrid2');
        var contentGrid3 = document.getElementById('contentGrid3');
        var contentGrid4 = document.getElementById('contentGrid4');
        var contentGrid5 = document.getElementById('contentGrid5');
        var contentGrid6 = document.getElementById('contentGrid6');
        var contentGrid7 = document.getElementById('contentGrid7');
        var contentGrid8 = document.getElementById('contentGrid8');
        // Toggle 
        contentGrid1.style.display == "flex" ? contentGrid1.style.display = "none" : 
        contentGrid1.style.display = "flex";

        if(contentGrid1.style.display == 'flex'){
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
       }else{
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
         } 
      }

    // Función thumb Grid 2
      function thumbGrid2() {
        var contentGrid1 = document.getElementById('contentGrid1');
        var contentGrid2 = document.getElementById('contentGrid2');
        var contentGrid3 = document.getElementById('contentGrid3');
        var contentGrid4 = document.getElementById('contentGrid4');
        var contentGrid5 = document.getElementById('contentGrid5');
        var contentGrid6 = document.getElementById('contentGrid6');
        var contentGrid7 = document.getElementById('contentGrid7');
        var contentGrid8 = document.getElementById('contentGrid8');
        // Toggle 
        contentGrid2.style.display == "flex" ? contentGrid2.style.display = "none" : 
        contentGrid2.style.display = "flex";

        if(contentGrid2.style.display == 'flex'){
          contentGrid1.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
       }else{
          contentGrid1.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
         } 
      }

    // Función thumb Grid 3
      function thumbGrid3() {
        var contentGrid1 = document.getElementById('contentGrid1');
        var contentGrid2 = document.getElementById('contentGrid2');
        var contentGrid3 = document.getElementById('contentGrid3');
        var contentGrid4 = document.getElementById('contentGrid4');
        var contentGrid5 = document.getElementById('contentGrid5');
        var contentGrid6 = document.getElementById('contentGrid6');
        var contentGrid7 = document.getElementById('contentGrid7');
        var contentGrid8 = document.getElementById('contentGrid8');
        // Toggle 
        contentGrid3.style.display == "flex" ? contentGrid3.style.display = "none" : 
        contentGrid3.style.display = "flex";

        if(contentGrid3.style.display == 'flex'){
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
       }else{
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
         } 
      }

      // Función thumb Grid 4
      function thumbGrid4() {
        var contentGrid1 = document.getElementById('contentGrid1');
        var contentGrid2 = document.getElementById('contentGrid2');
        var contentGrid3 = document.getElementById('contentGrid3');
        var contentGrid4 = document.getElementById('contentGrid4');
        var contentGrid5 = document.getElementById('contentGrid5');
        var contentGrid6 = document.getElementById('contentGrid6');
        var contentGrid7 = document.getElementById('contentGrid7');
        var contentGrid8 = document.getElementById('contentGrid8');
        // Toggle 
        contentGrid4.style.display == "flex" ? contentGrid4.style.display = "none" : 
        contentGrid4.style.display = "flex";

        if(contentGrid4.style.display == 'flex'){
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
       }else{
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
         } 
      }

      // Función thumb Grid 5
      function thumbGrid5() {
        var contentGrid1 = document.getElementById('contentGrid1');
        var contentGrid2 = document.getElementById('contentGrid2');
        var contentGrid3 = document.getElementById('contentGrid3');
        var contentGrid4 = document.getElementById('contentGrid4');
        var contentGrid5 = document.getElementById('contentGrid5');
        var contentGrid6 = document.getElementById('contentGrid6');
        var contentGrid7 = document.getElementById('contentGrid7');
        var contentGrid8 = document.getElementById('contentGrid8');
        // Toggle 
        contentGrid5.style.display == "flex" ? contentGrid5.style.display = "none" : 
        contentGrid5.style.display = "flex";

        if(contentGrid5.style.display == 'flex'){
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
       }else{
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
         } 
      }

      // Función thumb Grid 6
      function thumbGrid6() {
        var contentGrid1 = document.getElementById('contentGrid1');
        var contentGrid2 = document.getElementById('contentGrid2');
        var contentGrid3 = document.getElementById('contentGrid3');
        var contentGrid4 = document.getElementById('contentGrid4');
        var contentGrid5 = document.getElementById('contentGrid5');
        var contentGrid6 = document.getElementById('contentGrid6');
        var contentGrid7 = document.getElementById('contentGrid7');
        var contentGrid8 = document.getElementById('contentGrid8');
        // Toggle 
        contentGrid6.style.display == "flex" ? contentGrid6.style.display = "none" : 
        contentGrid6.style.display = "flex";

        if(contentGrid6.style.display == 'flex'){
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
       }else{
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid7.style.display = 'none';
          contentGrid8.style.display = 'none';
         } 
      }

      // Función thumb Grid 7
      function thumbGrid7() {
        var contentGrid1 = document.getElementById('contentGrid1');
        var contentGrid2 = document.getElementById('contentGrid2');
        var contentGrid3 = document.getElementById('contentGrid3');
        var contentGrid4 = document.getElementById('contentGrid4');
        var contentGrid5 = document.getElementById('contentGrid5');
        var contentGrid6 = document.getElementById('contentGrid6');
        var contentGrid7 = document.getElementById('contentGrid7');
        var contentGrid8 = document.getElementById('contentGrid8');
        // Toggle 
        contentGrid7.style.display == "flex" ? contentGrid7.style.display = "none" : 
        contentGrid7.style.display = "flex";

        if(contentGrid7.style.display == 'flex'){
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid8.style.display = 'none';
       }else{
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid8.style.display = 'none';
         } 
      }
      
      // Función thumb Grid 8
      function thumbGrid8() {
        var contentGrid1 = document.getElementById('contentGrid1');
        var contentGrid2 = document.getElementById('contentGrid2');
        var contentGrid3 = document.getElementById('contentGrid3');
        var contentGrid4 = document.getElementById('contentGrid4');
        var contentGrid5 = document.getElementById('contentGrid5');
        var contentGrid6 = document.getElementById('contentGrid6');
        var contentGrid7 = document.getElementById('contentGrid7');
        var contentGrid8 = document.getElementById('contentGrid8');
        // Toggle 
        contentGrid8.style.display == "flex" ? contentGrid8.style.display = "none" : 
        contentGrid8.style.display = "flex";

        if(contentGrid8.style.display == 'flex'){
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
       }else{
          contentGrid1.style.display = 'none';
          contentGrid2.style.display = 'none';
          contentGrid3.style.display = 'none';
          contentGrid4.style.display = 'none';
          contentGrid5.style.display = 'none';
          contentGrid6.style.display = 'none';
          contentGrid7.style.display = 'none';
         } 
      }

      // Función botón para desplegar leyendas pie de foto
      function toggleContent() {
        var contentId = document.getElementById("desplegable");
        contentId.style.display == "block" ? contentId.style.display = "none" : 
        contentId.style.display = "block"; 
      }

	function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("nrc-show") == -1) {
        x.className += " nrc-show";
    } else { 
        x.className = x.className.replace(" nrc-show", "");
    }
  }         
    </script>
	</body>
</html>