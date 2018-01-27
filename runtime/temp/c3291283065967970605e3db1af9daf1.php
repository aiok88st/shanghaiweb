<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"F:\wamp\www\shanghaiweb/app/mobile\view\contact\index.html";i:1516935726;s:58:"F:\wamp\www\shanghaiweb/app/mobile\view\common\header.html";i:1516931996;s:58:"F:\wamp\www\shanghaiweb/app/mobile\view\common\footer.html";i:1516930425;}*/ ?>
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

    
<link rel="stylesheet" href="__MOBILE__/css/contact.css" />
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

    


		<div id="main">
			<div class="mainTop">
				<div class="box">
					<div class="boxTop">
						<ul>
							<li>
								<a href="tel:02156206144">+<?php echo $sArr['tel']; ?>「T」</a>
							</li>
							<li>
								<a href="tel:02156206144">+<?php echo $sArr['phone']; ?>「F」</a>
							</li>
							<li>
								<p class="email"><?php echo $sArr['email']; ?></p>
							</li>
						</ul>
					</div>
					<div class="boxMiddle">
						<img src="__PUBLIC__<?php echo $art['k0']['thumb']; ?>" />
					</div>
					<div class="boxBottom">
						<ul>
							<li>
						
							</li>
							<li>
								<p class="address"><?php echo $sArr['ads']; ?></p>
							</li>
							<li>
								<p>Zip Code：<?php echo $sArr['youbian']; ?></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="mainBottom">
				<img src="__PUBLIC__<?php echo $img[0]; ?>" />
				<div class="messageOut">
					<div class="messageIn">
						<ul>
							<li>
								<p>Sina Weibo: </p>
							</li>
							<li>
								<p><?php echo $sArr['fax']; ?></p>
							</li>
							<li>
								<p>Wechat: <?php echo $sArr['wchat']; ?></p>
							</li>
							<li>
								<img src="__PUBLIC__<?php echo $sArr['wxpic']; ?>" />
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

    
<footer>
    <p><?php echo $sArr['bah']; ?></p>
</footer>
</body>
</html>


<script type="text/javascript" src="__MOBILE__/js/contact.js" ></script>

