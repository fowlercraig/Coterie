// @codekit-append "_notifications.js"
// @codekit-append "_mobilemenu.js"
// @codekit-append "_swipe.js"

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
});