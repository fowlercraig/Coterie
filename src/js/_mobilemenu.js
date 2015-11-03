$("#header .btn-hamburg").on('click', function(e){

	e.preventDefault();
  $('body').css('overflow', 'hidden');
  $('<div id="header-mobile"><div class="fs-row"><div id="header-mobile--content" class="fs-cell fs-all-full"></div></div></div>').appendTo('#header');
  $('<a id="header-mobile_close" class="btn-close ss-gizmo ss-delete"></a>').prependTo('#header-mobile');
  $('#header .navigation').clone().appendTo('#header-mobile--content').removeClass();

  setTimeout(function(){
    $("#header-mobile").addClass('active');
  });

});

$("#header-mobile .btn-close").on('click', function(e){

	e.preventDefault();
  $('body').css('overflow', 'visible');
	$('#header-mobile').removeClass('active');

  setTimeout(function(){
    $("#header-mobile").remove();
  },300);

});