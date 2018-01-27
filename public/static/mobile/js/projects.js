$(function(){
	$('.mainImgBox').on('click',function(){
		var self =$(this);
		if(self.attr('isOpen')=="false")
		{
			console.log(1);
			self.attr('isOpen','true');
			self.children('a').fadeIn(500);
			setTimeout(function(){
				self.children('a').fadeOut(500,function(){
					self.attr('isOpen','false');
				});
			},3000);
		}
	});
	for(var i=0;i<$('.mainImgBox').length;i++)
	{
		if(i%2==0)
		{
			$('.mainImgBox').eq(i).attr('data-scroll-reveal','enter left and move 30px over 1.0s');
		}else{
			$('.mainImgBox').eq(i).attr('data-scroll-reveal','enter right and move 30px over 1.0s')
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
