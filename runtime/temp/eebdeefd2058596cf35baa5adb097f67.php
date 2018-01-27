<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"F:\wamp\www\shanghaiweb/app/home\view\index\index.html";i:1516850727;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\header.html";i:1516954617;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\footer.html";i:1516847159;}*/ ?>
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
    <script src="__HOME__/js/lib/scrollReveal.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        var uaTest = /Android|webOS|Windows Phone|iPhone|ucweb|ucbrowser|iPod|BlackBerry/i.test(navigator.userAgent.toLowerCase());
        var touchTest = 'ontouchend' in document;
        if(uaTest && touchTest){
            window.location.href = "<?php echo url('mobile/index/index'); ?>";
        }
    </script>

    
<link rel="stylesheet" href="__HOME__/css/home.css">
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


    


        <!-- banner -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php if(is_array($art) || $art instanceof \think\Collection || $art instanceof \think\Paginator): $i = 0; $__LIST__ = $art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="explain">
                            <div class="explain-detail">
                                <p class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s">
                                    <?php echo $vo['content']; ?>
                                </p>
                                <br>
                                <p class="ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s"><?php echo $vo['title']; ?></p>
                                <br>
                                <p class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s"><?php echo $vo['desc']; ?></p>
                                <p class="ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s"><?php echo date("Y",$vo['createtime']); ?></p>
                            </div>
                        </div>
                        <div class="picture" style="background: url('__PUBLIC__/<?php echo $vo['thumb']; ?>') no-repeat;background-size: cover"></div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    
<!-- footer -->
<div class="footer flex-center-vertically">
    <?php echo $sArr['bah']; ?>
</div>
</div>
</body>

</html>
<script type="text/javascript">
    setTimeout(function(){
        var mySwiper = new Swiper('.swiper-container', {
            observer: true, //修改swiper自己或子元素时，自动初始化swiper
            observeParents: true, //修改swiper的父元素时，自动初始化swiper
            autoplay: false, //可选选项，自动滑动
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true,
            on: {
                init: function() {
                    swiperAnimateCache(this); //隐藏动画元素
                    swiperAnimate(this); //初始化完成开始动画
                },
                slideChangeTransitionStart: function() {
                    swiperAnimateCache(this); //隐藏动画元素
                },
                slideChangeTransitionEnd: function() {
                    swiperAnimate(this); //每个slide切换结束时也运行当前slide动画
                }
            },
            speed: 1000,
            effect: 'flip',
            mousewheel: {
                releaseOnEdges: true,
            },
            direction: 'vertical',

        });
    },500);

</script>


