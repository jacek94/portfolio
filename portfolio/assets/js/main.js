console.log("- = +");

jQuery(document).ready(function($){

$('header, main').animate({'opacity': '1'},300);
  //
  /// General Tabs
  //
  $('ul.tabs li').click(function(){
  	var tab_id = $(this).attr('data-tab');
  	$('ul.tabs li').removeClass('current');
  	$('.tab-content').removeClass('current');
  	$(this).addClass('current');
  	$("#"+tab_id).addClass('current');
  });

  $('ul.tabs li:nth-child(2)').click(function(){
    $(function() {
    	$('.projects li').each(function(i) {
    	   $(this).delay((i++) * 100).fadeTo(300, 1);
      });
    });
  });

});
