// @codekit-append "_notifications.js"
// @codekit-append "_mobilemenu.js"
// @codekit-append "_swipe.js"

function splashLoaded(){
  $('body,html').css({
    height: '100%',
    overflow: 'hidden',
  });
  $(window).load(function(){
    setTimeout(function(){
      $('#splash').addClass('loaded');
      setTimeout(function(){
        $('#splash').remove();
        $('body,html').css({
          height: 'auto',
          overflow: 'visible',
        });
      },500);
    }, 5000);
  });
}

function searchClick(){

  $('#search-start').on('click', function(){

    var height = $('.page-title').height();

    $('<input type="search" class="search-form page-title_search" placeholder="search.">').appendTo('.page-title_wrapper');

    $('.page-title_search').css({
      height: height,
    });

    $('.page-title_wrapper').css({
      height: height,
      position: 'relative',
    });

     setTimeout(function(){
      $('.page-title_wrapper').addClass('active');  
    },0);
  

  });

  $('#search-close').on('click', function(){

    $('.page-title_wrapper').removeClass('active');
    setTimeout(function(){
      $('.page-title_search').remove();  
    },300);

    $('.page-title_wrapper').css({
      height: height,
      position: 'relative',
    });

  });

}


$(document).ready(function(){

  $("input[type=number]").number();
	$(".wallpaper").background();
	$(".carousel").carousel();

  $('.equal').imagesLoaded( function() {
	 $(this).equalize();
  });
   
	$(".cart-item").equalize({
		target: ".cart-item-cell"
	});
	$(".swap").swap();
   searchClick();

   if ($('body').hasClass('page-co-ter-ie')) {
      console.log('index!');
     splashLoaded();
    }

  $("#btnAbout").hover(
    function() {
      $("#header").stop(true, true).addClass("aboutHover fs-swap-active");
    },
    function() {
      $("#header").stop(true, true).removeClass("aboutHover fs-swap-active");
    }
  );


});