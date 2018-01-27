<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:56:"F:\wamp\www\shanghaiweb/app/mobile\view\about\index.html";i:1516931944;s:58:"F:\wamp\www\shanghaiweb/app/mobile\view\common\header.html";i:1516931996;s:58:"F:\wamp\www\shanghaiweb/app/mobile\view\common\footer.html";i:1516930425;}*/ ?>
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

    
<link rel="stylesheet" href="__MOBILE__/css/profile.css" />
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

    

		<div id="about" style="background: url('__PUBLIC__/<?php echo $art['k0']['thumb']; ?>') no-repeat top center;">
			<div class="box about">
				<div class="aboutTitle">
					<p><?php echo $art['k0']['title']; ?></p>
				</div>
				<div class="aboutContent">
                    <?php echo $art['k0']['content']; ?>
                </div>
				<div class="aboutTitle work">
					<p><?php echo $art['k0']['en_title']; ?></p>
				</div>
				<div class="process">
					<ul>
						<li>
							<a href="###">
								<p>meet</p>
								<p>&amp;</p>
								<p>agree</p>
							</a>
						</li>
						<li>
							<a href="###">
								<p>idea</p>
								<p>&amp;</p>
								<p>concept</p>
							</a>
						</li>
						<li>
							<a href="###">
								<p>design</p>
								<p>&amp;</p>
								<p>create</p>
							</a>
						</li>
						<li>
							<a href="###">
								<p>build</p>
								<p>&amp;</p>
								<p>construction</p>
							</a>
						</li>
					</ul>
					<div class="clearl"></div>
				</div>
				<div class="aboutContent">
                    <?php echo $art['k0']['desc']; ?>
                </div>
			</div>
		</div>
		<div id="introduce" class="box">
            <?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<img src="__PUBLIC__<?php echo $vo; ?>" />
            <?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div id="team" class="box">
			<div class="tTitle">
				<p>MEET OUR FEARLESS TEAM</p>
				<p>-&nbsp;&nbsp;J&amp;P Designers&nbsp;&nbsp;-</p>
			</div>
			<div class="teamBox">
                <?php if(is_array($team) || $team instanceof \think\Collection || $team instanceof \think\Paginator): $i = 0; $__LIST__ = $team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<img src="__PUBLIC__<?php echo $vo['thumb']; ?>" />
                <?php endforeach; endif; else: echo "" ;endif; ?>

				<div class="clearl"></div>
			</div>
		</div>
		<div id="company" class="box">
			<div class="floatl cpLeft">
				<p>CLIENT</p>
				<nobr><p>「 排名不分先后 」</p></nobr>	
			</div>
			<div class="floatl cpRight">
                <?php if(is_array($hz_team) || $hz_team instanceof \think\Collection || $hz_team instanceof \think\Paginator): $i = 0; $__LIST__ = $hz_team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<p><?php echo $vo['en_title']; ?> <?php echo $vo['title']; ?></p>
                <?php endforeach; endif; else: echo "" ;endif; ?>

			</div>
			<div class="clearl"></div>
		</div>

    
<footer>
    <p><?php echo $sArr['bah']; ?></p>
</footer>
</body>
</html>

<script type="text/javascript" src="__MOBILE__/js/scrollReveal.js" ></script>
<script type="text/javascript" src="__MOBILE__/js/profile.js" ></script>

