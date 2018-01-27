<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:57:"F:\wamp\www\shanghaiweb/app/home\view\project\detail.html";i:1516936848;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\header.html";i:1516929341;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\footer.html";i:1516847159;}*/ ?>
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

    
<link rel="stylesheet" href="__HOME__/css/project.css">
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
            <p class="back"><a href="<?php echo url('Project/index'); ?>"><img src="__HOME__/images/left.png" alt=""><br/>BACK</a></p>
            <div class="banner">
                <div class="swiper-container" id="banner">
                    <div class="swiper-wrapper" id="swiper-wrapper">
                        <?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="swiper-slide">
                            <div class="box" style="background: url('__PUBLIC__/<?php echo $vo; ?>');"></div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="introduce">
                <table cellspacing="0">
                    <tr>
                        <td>location</td>
                        <td><?php echo $data['location']; ?></td>
                        <td>date</td>
                        <td><?php echo $data['date']; ?></td>
                        <td>type</td>
                        <td><?php echo $data['type']; ?></td>
                    </tr>
                    <tr>
                        <td>clients</td>
                        <td><?php echo $data['clients']; ?></td>
                        <td>status</td>
                        <td><?php echo $data['is_status']; ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="explain">
                <div class="essay">
                    <div class="swiper-container" id="essay">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?php echo $data['content']; ?>
                            </div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="essay-title">
                    <p class="title" data-scroll-reveal="enter right after 0.5s"><?php echo $data['en_title']; ?></p>
                    <p class="small-title" data-scroll-reveal="enter bottom over 1s and move 100px"><?php echo $data['title']; ?></p>
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
                data:'sdfsfd'
            },
            methods: {
                myswiper: function(domId) {
                    var swiper = new Swiper(domId, {
                        observer: true, //修改swiper自己或子元素时，自动初始化swiper
                        observeParents: true, //修改swiper的父元素时，自动初始化swiper
                        speed: 1000,
                        loop:true,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        mousewheel: true,
                    });
                },
                myscroll: function(domId) {
                    var scroll = new Swiper(domId, {
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
                        mousewheel: {
                            releaseOnEdges: false,
                        },

                    });
                },
                checkHeight: function() {
                    var w = document.getElementById('swiper-wrapper').offsetWidth;
                    document.getElementById('banner').style.height = w / 16 * 10 + 'px';
                }
            }
        });
        vm.$nextTick(function() {
            this.checkHeight();
            this.myswiper("#banner");
            this.myscroll("#essay");
            window.onresize = function() {
                vm.checkHeight();
            }
            if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
                (function() {
                    window.scrollReveal = new scrollReveal({ reset: true });
                })();
            };

        })

    }
</script>
