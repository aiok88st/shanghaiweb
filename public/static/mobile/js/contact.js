$(function(){
	setTimeout(function(){
		$('#main').height($(window).height()-$('header').height()-$('footer').height());
	},100);
	
});
