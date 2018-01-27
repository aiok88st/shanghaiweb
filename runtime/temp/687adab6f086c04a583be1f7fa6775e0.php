<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:56:"F:\wamp\www\shanghaiweb/app/home\view\project\index.html";i:1516946848;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\header.html";i:1516929341;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\footer.html";i:1516847159;}*/ ?>
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

    
<link rel="stylesheet" href="__HOME__/css/program.css">
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
            <div class="swiper-container" id="projects">
                <div class="swiper-wrapper">
                    <?php 
                        $num=1;
                        $count=count($art);
                     if(is_array($art) || $art instanceof \think\Collection || $art instanceof \think\Paginator): $i = 0; $__LIST__ = $art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($num == 1): ?>
                    <div class="swiper-slide">
                    <?php endif; ?>

                        <a href="<?php echo url('Project/detail'); ?>?id=<?php echo $vo['id']; ?>" class="box" style="background: url('__PUBLIC__/<?php echo $vo['thumb']; ?>');">
                            <div class="introduce flex-center-vertically">
                                <p class="title"><?php echo $vo['en_title']; ?></p>
                                <p class="small-title"><?php echo $vo['title']; ?></p>
                                <p class="more">READ MORE...</p>
                            </div>
                        </a>
                    <?php if($num == $count): ?>
                    </div>
                    <?php endif; if($num%2 == 0): ?>
                    </div>
                    <div class="swiper-slide">
                    <?php endif; $num++; endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>



    
<!-- footer -->
<div class="footer flex-center-vertically">
    <?php echo $sArr['bah']; ?>
</div>
</div>
</body>

</html>
<script type="text/javascript">
    window.onload = function() {
        var vm = new Vue({
            el: "#container",
            data: {

            },
            methods: {
                swiper: function(domId) {
                    var swiper = new Swiper(domId, {
                        observer: true, //修改swiper自己或子元素时，自动初始化swiper
                        observeParents: true, //修改swiper的父元素时，自动初始化swiper
                        speed: 1000,
                        loop: 'auto',

                        // slidesPerView: 'auto',
                        // slidesPerGroup : 3,
                        // loopedSlides: 3,
                        slidesPerView: 3,
                        // slidesPerColumn: 2,
                        // slidesPerColumnFill: 'column',
                        navigation: {
                            nextEl: domId + ' .swiper-button-next',
                            prevEl: domId + ' .swiper-button-prev',
                        },
                        mousewheel: true,
                    });
                }
            }
        });
        vm.$nextTick(function() {
            this.swiper("#projects");
        });
    }
</script>
