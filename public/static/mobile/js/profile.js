$(function(){
	for(var i=0;i<$('.teamBox').find('img').length;i++)
	{
		var index = parseInt(i%5);
		switch(index){
			case 0:
				$('.teamBox').find('img').eq(i).attr('data-scroll-reveal','enter right and move 20px over 1.2s');
				break;
			case 1:
				$('.teamBox').find('img').eq(i).attr('data-scroll-reveal','enter top and move 10px over 1.5s');
				break;
			case 2:
				$('.teamBox').find('img').eq(i).attr('data-scroll-reveal','enter bottom and move 30px over 1.0s');
				break;
			case 3:
				$('.teamBox').find('img').eq(i).attr('data-scroll-reveal','enter top and move 40px over 1.0s');
				break;
			case 4:
				$('.teamBox').find('img').eq(i).attr('data-scroll-reveal','enter left and move 30px over 1.0s');
				break;
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