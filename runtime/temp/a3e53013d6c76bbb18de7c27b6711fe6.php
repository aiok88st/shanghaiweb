<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"F:\wamp\www\shanghaiweb/app/home\view\news\detail.html";i:1516866238;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\header.html";i:1516929341;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\footer.html";i:1516847159;}*/ ?>
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

    
<link rel="stylesheet" href="__HOME__/css/event.css">
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
            <div class="detail">
                <a href="<?php echo url('News/index'); ?>" class="back"><img src="__HOME__/images/left.png" alt=""><br/>BACK</a>
                <p class="title"><?php echo $data['title']; ?></p>
                <p class="time"><?php echo date("Ym",$data['createtime']); ?></p>
                <div class="swiper-container content-box" id="details">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?php echo $data['content']; ?>
                        </div>
                    </div>
                    <!-- Add Scroll Bar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
            <div class="photos">
                <div class="swiper-container" id="photos">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <ul>
                                <?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <li><img src="__PUBLIC__<?php echo $vo; ?>" alt=""></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- Add Scroll Bar -->
                    <div class="swiper-scrollbar"></div>
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
                        direction: 'vertical',
                        slidesPerView: 'auto',
                        freeMode: true,
                        scrollbar: {
                            el: domId + ' .swiper-scrollbar',
                            draggable: true,
                            snapOnRelease: false,
                        },
                        mousewheel: true,
                    });
                },
                checkHeight: function() {
                    var h1 = document.getElementsByClassName('detail')[0].offsetHeight;
                    var h2 = document.getElementsByClassName('footer')[0].offsetHeight;
                    var h3 = document.getElementsByClassName('nav-container')[0].offsetHeight;
                    document.getElementsByClassName('content-box')[0].style.height = h1 - 245-h2 + 'px';
                }
            }
        });
        vm.$nextTick(function() {
            this.checkHeight();
            this.swiper("#details");
            this.swiper("#photos");
            window.onresize = function() {
                vm.checkHeight();
            }
        })
    }
</script>
