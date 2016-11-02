(function(){

jQuery(document).ready(function ($) {
	$('.toggle-nav').click(function(){
		$('.main-nav').toggle(1000);
	});
})
// window.onload = function(){
//
//   console.log('sin click');
//   document.querySelector('.flecha').onclick = function(){
//     console.log('funciona');
//   };
//   $('.flecha').click(function(){
//     console.log('click');
//     $('#bannerPrueba').toggleClass("main-bannerTog",1000, "easeOutSine");
//   })
// };
})()
