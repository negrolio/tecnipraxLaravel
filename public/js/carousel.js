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
	var actualTitle  = actualBanner.find("h2")
	var actualSubTitle = actualBanner.find("h5")

  orderBanner();
	fadeInOutTitleAndButton();
  var quieto = true;

    function moveLeft() {
			if (quieto) {
				quieto = false;
				momentaryLeft = leftBanner;
				fadeInOutTitleAndButton()

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
				fadeInOutTitleAndButton()

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
      actualBanner.parent().css({
				"right":"0",
				"z-index":"0"});
      leftBanner.parent().css({
				"right":"100%",
				"z-index":"2"});
      rightBanner.parent().css("right","-100%")
			actualTitle.css("left","0")
			actualSubTitle.css("right","0")

    }

		function moveTitle(){
			if (quieto) {
				actualTitle  = actualBanner.find("h2")
				actualSubTitle = actualBanner.find("h5")
				actualTitle.css("position", "relative").animate({
					left:"-150%"
				});
				actualSubTitle.css("position", "relative").animate({
					right:"-150%"
				});
			}
		}

		function fadeInOutTitleAndButton(){
			$('.div-title1 h2,.div-title1 h5').css({
				"visibility":"hidden"
			})
			$('.div-title1 .button-banner').css({"top":"255px"})
			setTimeout(function(){
				$('.div-title1 h2,.div-title1 h5').css('visibility','visible').hide().fadeIn('slow');
				$('.div-title1 .button-banner').animate({top:"0"})
			},400)
		}

    $('.flecha-izq').click(function () {
			moveTitle()
			setTimeout(function(){
				moveRight()
			},400);


			// setTimeout(function(){
			// 	$('.div-title1 h2').css({
			// 		"visibility":"visible",
			// 		"left":"0"
			// 	})
			// },300)
    });

    $('.flecha-der').click(function () {
			moveTitle()
			setTimeout(function(){
				moveLeft()
			},200);
    });

});
