(function(){

jQuery(document).ready(function ($) {

	$('.toggle-nav').click(function(){
		$('.main-nav').toggle(1000);
	});

	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});

	// $('.drop-container').click(function(){
	// 	$('.drop-nav').slideToggle(500);
	// });

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
