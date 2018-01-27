<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:56:"F:\wamp\www\shanghaiweb/app/home\view\contact\index.html";i:1516867049;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\header.html";i:1516929341;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\footer.html";i:1516847159;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo $info['key']; ?>">
    <meta name="description" content="<?php echo $info['des']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <script src="__HOME__/js/lib/vue.min.js"></script>
    <script src="__HOME__/js/lib/swiper.min.js"></script>
    <script src="__HOME__/js/lib/swiper.animate1.0.2.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        var uaTest = /Android|webOS|Windows Phone|iPhone|ucweb|ucbrowser|iPod|BlackBerry/i.test(navigator.userAgent.toLowerCase());
        var touchTest = 'ontouchend' in document;
        if(uaTest && touchTest){
            window.location.href = "<?php echo url('mobile/index/index'); ?>";
        }
    </script>

    
<link rel="stylesheet" href="__HOME__/css/contact.css">
<title><?php echo $info['title']; ?></title>


</head>
<body>
<div id="container">
    <!-- 顶部导航 -->
    <div class="nav-container">
        <div class="logo flex-center-vertically"><a href="<?php echo url('home/index/index'); ?>"><img src="__PUBLIC__<?php echo $sArr['logo']; ?>" alt=""></a></div>
        <ul class="nav-title">
            <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="flex-center-vertically"><a href="<?php echo $vo['url']; ?>"><?php echo $vo['catname']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>


    
        <div class="content">
            <div class="content-top">
                <div class="info">
                    <ul class="tel">
                        <li>+<?php echo $sArr['tel']; ?>「T」</li>
                        <li>+<?php echo $sArr['phone']; ?>「F」</li>
                    </ul>
                    <ul class="email">
                        <li><?php echo $sArr['email']; ?></li>
                    </ul>
                    <p class="address">
                        <?php echo $sArr['ads']; ?>
                        <br> Zip Code：<?php echo $sArr['youbian']; ?>
                    </p>
                </div>
                <div class="logo flex-center-vertically">
                    <img src="__PUBLIC__<?php echo $art['k0']['thumb']; ?>" alt="">
                </div>
                <div class="info2">
                    <ul class="wechat">
                        <li>Sina Weibo:
                            <br/><?php echo $sArr['fax']; ?>
                            <br/>Wechat: <?php echo $sArr['wchat']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="content-bottom" style="background: url('__PUBLIC__<?php echo $img[0]; ?>');">
                <div class="two-dimension-code">
                    <ul class="picture">
                        <li><img src="__PUBLIC__<?php echo $sArr['wxpic']; ?>" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>


    
<!-- footer -->
<div class="footer flex-center-vertically">
    <?php echo $sArr['bah']; ?>
</div>
</div>
</body>

</html>


