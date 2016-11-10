(function(){

jQuery(document).ready(function ($) {
	$('.toggle-nav').click(function(){
		$('.main-nav').toggle(1000);
	});
	// $('.catalogo-dropdown').click(function(){
	// 	$('.catalogo-dropdown ul').slideToggle(500);
	// })

	// variable pasa setear el TimeOut
	var retardo

	// Fuerza a que se oculte el drop-nav
	$('.drop-nav').hide()

	// Función mouseover / mouseout
	$('.drop-container').mouseover(function () {
		if( $('.drop-nav').is(':hidden') ) {

			clearTimeout(retardo) // permite que el drop-nav no se repliegue al hover sobre el mismo drop-nav
			$('.drop-nav').slideDown('medium')
			$('.drop-nav').mouseover(function () {
				clearTimeout(retardo) // vuelve a setear tiempo 0 pero ahora sobre el mismo drop-nav
			})

			$(this).mouseout(function () {
				clearTimeout(retardo)
				retardo = setTimeout("$('.drop-nav').slideUp('medium')") // permite que al hacer mouse-out del li container el drop-nav se repliegue de vuelta
			})
		}
	})
})



})()
