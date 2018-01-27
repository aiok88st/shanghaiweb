$(function(){
	for(var i=0;i<$('#mainContent .content').find('img').length;i++)
	{
		if(i%2==0)
		{
			$('#mainContent .content').find('img').eq(i).attr('data-scroll-reveal','enter left and move 30px over 1.0s');
		}else{
			$('#mainContent .content').find('img').eq(i).attr('data-scroll-reveal','enter right and move 30px over 1.0s')
		}
		
	}
	//开启滑动动画
	if(!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
		(function() {
			window.scrollReveal = new scrollReveal({
				reset: true
			});
		})();
	};
});
