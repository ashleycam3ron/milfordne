// remap jQuery to $
(function($){})(window.jQuery);
/* trigger when page is ready */
$(document).ready(function (){  

	$('.post-thumbnail').append('<div class="border"></div>');

/* trigger when page is ready */
/*
$(document).ready(function (){
    var $this = $(this);
                
	$('#menu-main > li').hover(
	function(){
		$subMenu = $(this).children('#menu-main > li > .sub-menu');
		$B = $(this).width();
		$A = $(this).children('#menu-main > li > .sub-menu').width();
		$C = ($A - $B);
		$D = $C/2;
		$(this).children('#menu-main > li > .sub-menu').dequeue().stop().show().css({'marginLeft': -$D + 'px'});	
		//console.log($D + 'px');	
	},
	function(){
		$(this).children('#menu-main > li > .sub-menu').dequeue().stop().hide();
	});

});*/

});