(function(){

jQuery(document).ready(function ($) {

	$('.toggle-nav').click(function(){
		$('.main-nav').toggle(1000);
	});

	$('.drop-container').click(function(){
		$('.drop-nav').slideToggle(500);
	});

})
 window.initMap = function() {
	var myLatLng = {lat: -34.600838, lng: -58.400879};

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 14,
		center: myLatLng
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Tecniprax!'
	});
}

})();




	//
	// // variable pasa setear el TimeOut
	// var retardo
	//
	// // Fuerza a que se oculte el drop-nav
	// $('.drop-nav').hide()
	//
	// // Función mouseover / mouseout
	// $('.drop-container').mouseover(function () {
	// 	if( $('.drop-nav').is(':hidden') ) {
	//
	// 		clearTimeout(retardo) // permite que el drop-nav no se repliegue al hover sobre el mismo drop-nav
	// 		$('.drop-nav').slideDown('medium')
	// 		$('.drop-nav').mouseover(function () {
	// 			clearTimeout(retardo) // vuelve a setear tiempo 0 pero ahora sobre el mismo drop-nav
	// 		})
	//
	// 		$(this).mouseout(function () {
	// 			clearTimeout(retardo)
	// 			retardo = setTimeout("$('.drop-nav').slideUp('medium')") // permite que al hacer mouse-out del li container el drop-nav se repliegue de vuelta
	// 		})
	// 	}
	//})


//
// 	$(document).on('click', '.pagination a', function (e) {
// 		getPosts($(this).attr('href').split('page=')[1]);
// 		e.preventDefault();
// 	});
//
// })
//
// $(window).on('hashchange', function() {
//         if (window.location.hash) {
//             var page = window.location.hash.replace('#', '');
//             if (page == Number.NaN || page <= 0) {
//                 return false;
//             } else {
//                 getPosts(page);
//             }
//         }
//     });
//
//     function getPosts(page) {
//
// console.log(  $.ajax({
// 			url : '/productos?page=' + page,
// 			dataType: 'json',
// 	}))
//
//         $.ajax({
//             url : '/productos?page=' + page,
//         }).done(function (data) {
//             $('.posts .current-page').html(data);
//             location.hash = page;
//         }).fail(function () {
//             alert('Posts could not be loaded.');
//         });
//     }
