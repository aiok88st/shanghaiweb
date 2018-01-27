<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:56:"F:\wamp\www\shanghaiweb/app/mobile\view\index\index.html";i:1516930967;s:58:"F:\wamp\www\shanghaiweb/app/mobile\view\common\header.html";i:1516931996;s:58:"F:\wamp\www\shanghaiweb/app/mobile\view\common\footer.html";i:1516930425;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo $info['key']; ?>">
    <meta name="description" content="<?php echo $info['des']; ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="telephone=no" name="format-detection"/>
    <link rel="stylesheet" href="__MOBILE__/css/swiper-3.4.2.min.css" />
    <link rel="stylesheet" href="__MOBILE__/css/animate.min.css" />
    <link rel="stylesheet" href="__MOBILE__/css/reset.min.css" />
    <link rel="stylesheet" href="__MOBILE__/css/public.css" />
    <script type="text/javascript" src="__MOBILE__/js/swiper.animate1.0.2.min.js" ></script>
    <script type="text/javascript" src="__MOBILE__/js/rem.js" ></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="__MOBILE__/js/public.js" ></script>
    <script type="text/javascript">
        var uaTest = /Android|webOS|Windows Phone|iPhone|ucweb|ucbrowser|iPod|BlackBerry/i.test(navigator.userAgent.toLowerCase());
        var touchTest = 'ontouchend' in document;
        if(!uaTest && !touchTest){
            window.location.href = "<?php echo url('index/index/index'); ?>";
        }
    </script>

    
<link rel="stylesheet" href="__MOBILE__/css/index.css" />
<title><?php echo $info['title']; ?></title>


</head>
<body>
<header>
    <nav class="box">
        <img class="logoImg" src="__PUBLIC__<?php echo $sArr['logo']; ?>" />
        <a href="javascript:;" class="moreNav" isOpen='false'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </a>
    </nav>
    <div class="navBox">
        <ul>
            <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <a href="<?php echo $vo['url']; ?>"><?php echo $vo['catname']; ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
</header>

    

		<div class="swiper-container">
	        <div class="swiper-wrapper">

                <?php if(is_array($art) || $art instanceof \think\Collection || $art instanceof \think\Paginator): $i = 0; $__LIST__ = $art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	            <div class="swiper-slide">
	            	<div class="slideBox">
	            		<ul class="box">
	            			<li class="contectTop ani" swiper-animate-effect="rollIn" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s">
                                <?php echo $vo['content']; ?>
	            			</li>
	            			<li class="contectMiddle ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s">
	            				<p><?php echo $vo['title']; ?></p>
	            			</li>
	            			<li class="contectBottom ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s">
	            				<p><?php echo $vo['desc']; ?></p>
	            			</li>
	            			<li class="time ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s">
	            				<p><?php echo date("Y",$vo['createtime']); ?></p>
	            			</li>	
	            		</ul>
	            		<div class="imgBox">
	            			<img src="__PUBLIC__/<?php echo $vo['thumb']; ?>" />
	            		</div>
	            	</div>
	            </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>


	        </div>
	        <div class="swiper-pagination"></div>
	    </div>

    
<footer>
    <p><?php echo $sArr['bah']; ?></p>
</footer>
</body>
</html>

<script type="text/javascript" src="__MOBILE__/js/swiper-3.4.2.min.js" ></script>
<script type="text/javascript">

	var swiper = new Swiper('.swiper-container', {
		direction: 'vertical',
		pagination: '.swiper-pagination',
		onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
			swiperAnimateCache(swiper); //隐藏动画元素
			swiperAnimate(swiper); //初始化完成开始动画
		},
		onSlideChangeEnd: function(swiper){
			swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
		}
	});
</script>
