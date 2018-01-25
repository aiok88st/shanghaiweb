<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:53:"F:\wamp\www\shanghaiweb/app/home\view\news\index.html";i:1516865732;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\header.html";i:1516862832;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\footer.html";i:1516847159;}*/ ?>
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

    
<link rel="stylesheet" href="__HOME__/css/news.css">
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
            <div class="advertising-one"></div>
            <div class="advertising-two"></div>
            <div class="news-list" id="news-list">
                <p class="title" id="title">LASTED NEWS</p>
                <div class="swiper-container news-list-box" id="new-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <ul>
                                <?php if(is_array($team) || $team instanceof \think\Collection || $team instanceof \think\Paginator): $k = 0; $__LIST__ = $team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                <li>
                                    <span class="time"><?php echo date("Ym",$vo['createtime']); ?></span>
                                    <a href="<?php echo url('News/detail'); ?>?id=<?php echo $vo['id']; ?>" class="intro ellipsis-1"><?php echo $vo['title']; ?></a>
                                    <a href="<?php echo url('News/detail'); ?>?id=<?php echo $vo['id']; ?>" class="more">READ MORE...</a>
                                </li>
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
                checkHeight: function() {
                    document.getElementById('new-swiper').style.height = document.getElementById('news-list').offsetHeight - document.getElementById('title').offsetHeight + 'px';
                },
                scroll: function() {
                    var swiper = new Swiper('.swiper-container', {
                        observer: true, //修改swiper自己或子元素时，自动初始化swiper
                        observeParents: true, //修改swiper的父元素时，自动初始化swiper
                        direction: 'vertical',
                        slidesPerView: 'auto',
                        freeMode: true,
                        scrollbar: {
                            el: '.swiper-scrollbar',
                            draggable: true,
                            snapOnRelease: false,
                        },
                        mousewheel: true,


                    });
                }
            }
        });
        vm.$nextTick(function() {
            this.checkHeight();
            this.scroll();
            window.onresize = function() {
                vm.checkHeight();
            }
        })
    }
</script>
