<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"F:\wamp\www\shanghaiweb/app/mobile\view\project\detail.html";i:1516935406;s:58:"F:\wamp\www\shanghaiweb/app/mobile\view\common\header.html";i:1516931996;s:58:"F:\wamp\www\shanghaiweb/app/mobile\view\common\footer.html";i:1516930425;}*/ ?>
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

    
<link rel="stylesheet" href="__MOBILE__/css/projectsDetails.css" />
<script type="text/javascript" src="__MOBILE__/js/swiper-3.4.2.min.js" ></script>
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

    
		<div id="mainImg">
			 <div class="back box">
				<ul class="floatr" >
					<li>
						<img src="__MOBILE__/img/back.png">
					</li>
					<li>
						<p>BACK</p>
					</li>
				</ul>
				<div class="clearr"></div>
			</div>
			<div class="banner">
				<div class="swiper-container">
					<div class="swiper-wrapper">
                        <?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<div class="swiper-slide">
							<img src="__PUBLIC__/<?php echo $vo; ?>" />
						</div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

					</div>
					<!-- 如果需要导航按钮 -->
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
			<div class="message box">
				<table>
					<tr>
						<td><p>LOCATION</p></td>
						<td><p><?php echo $data['location']; ?></p></td>
						<td><p>DATE</p></td>
						<td><p><?php echo $data['date']; ?></p></td>
					</tr>
					<tr>
						<td><p>TYPE</p></td>
						<td><p><?php echo $data['type']; ?></p></td>
						<td><p>CLIENTS</p></td>
						<td><p><?php echo $data['clients']; ?></p></td>
					</tr>
					<tr>
						<td><p>STATUS</p></td>
						<td><p><?php echo $data['is_status']; ?></p></td>
						<td><p class="noborder">&nbsp;&nbsp;</p></td>
						<td><p>&nbsp;&nbsp;</p></td>
					</tr>
				</table>
			</div>
			<div class="messageContent box">
				<p class="eTitle"><?php echo $data['en_title']; ?></p>
				<p class="cTitle"><?php echo $data['title']; ?></p>
				<div class="contentBox">
                    <?php echo $data['content']; ?>
				</div>

			</div>
		</div>



    
<footer>
    <p><?php echo $sArr['bah']; ?></p>
</footer>
</body>
</html>


<script type="text/javascript" src="__MOBILE__/js/projectsDetails.js" ></script>

