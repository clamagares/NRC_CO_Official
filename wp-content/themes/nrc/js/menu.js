jQuery(document).ready(menuResponsive);

var contador = 1;

function menuResponsive () {
	jQuery('.menu_bar').click(function(){
		if (contador == 1) {
			jQuery('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			jQuery('nav').animate({
				left: '-100%'
			});
		}
	});
	// mostramos y ocultamos Submenus
	jQuery('.submenu').click(function(){
		jQuery(this).children('.children').slideToggle();
	});
}
