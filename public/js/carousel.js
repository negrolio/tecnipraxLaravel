jQuery(document).ready(function ($) {


// take the height of the banner(element to slide)
// and put it to his element parent
// then made all the banners absolute
	var slideHeight = $('#slider ul li').height();
  $('#slider').css('height', slideHeight);
  $('#slider li').css({position:'absolute'});

  var actualBanner = $('#main-banner1');
  var leftBanner   = $('#main-banner3');
  var rightBanner  = $('#main-banner2');

  orderBanner();
  var quieto = true;

    function moveLeft() {
			if (quieto) {
				quieto = false;
				momentaryLeft = leftBanner;

				actualBanner.parent().animate({
					right: '100%'
				}, 500, function () {
					leftBanner = actualBanner;
					actualBanner = rightBanner;
				});

				rightBanner.parent().animate({
					right:0
				}, 500, function () {
					rightBanner = momentaryLeft;
					orderBanner();
					quieto = true;
				})

			}
    };

    function moveRight() {
			if (quieto) {
				quieto = false;
				momentaryRigth = rightBanner;

				actualBanner.parent().animate({
					right:"-100%"
				}, 500, function () {
					rightBanner  = actualBanner;
					actualBanner = leftBanner;
				});

				leftBanner.parent().animate({
					right:0
				}, 500, function () {
					leftBanner = momentaryRigth;
					orderBanner();
					quieto = true;
				})

			}
    };

    function orderBanner(){
      actualBanner.parent().css("right","0");
      leftBanner.parent().css("right","100%");
      rightBanner.parent().css("right","-100%")
    }

    $('.flecha-izq').click(function () {
			moveRight();
    });

    $('.flecha-der').click(function () {
			moveLeft();
    });

});
