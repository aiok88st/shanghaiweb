<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"F:\wamp\www\shanghaiweb/app/home\view\about\index.html";i:1516947864;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\header.html";i:1516929341;s:56:"F:\wamp\www\shanghaiweb/app/home\view\common\footer.html";i:1516847159;}*/ ?>
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

    
<link rel="stylesheet" href="__HOME__/css/profile.css">
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
            <div class="introduce" style="background: url('__PUBLIC__/<?php echo $art['k0']['thumb']; ?>');">
                <div class="box">
                    <div class="about-us">
                        <p class="title" data-scroll-reveal="enter left"><?php echo $art['k0']['title']; ?></p>
                        <div class="swiper-container about-us-content" id="scroll">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-scroll-reveal="enter top over 2s move 120px">
                                    <?php echo $art['k0']['content']; ?>
                                </div>
                            </div>
                            <!-- Add Scroll Bar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                    <div class="work-process ">
                        <div class="work-process-content">
                            <div class="title flex-center-vertically">
                                <?php echo $art['k0']['en_title']; ?>
                            </div>
                            <div class="work-process-list">
                                <div class="circle flex-center-vertically myanimate1" data-scroll-reveal="enter left over 2s move 20px">
                                    meet&agree
                                </div>
                                <div class="circle flex-center-vertically myanimate2" data-scroll-reveal="enter top over 2s move 20px">
                                    idea&concept
                                </div>
                                <div class="circle flex-center-vertically myanimate3" data-scroll-reveal="enter bottom over 2s move 20px">
                                    design&create
                                </div>
                                <div class="circle flex-center-vertically myanimate4" data-scroll-reveal=" enter right over 2s move 20px">
                                    build&construction
                                </div>
                            </div>
                        </div>
                        <div class="description" data-scroll-reveal="enter right over 3s move 300px">
                            <?php echo $art['k0']['desc']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leadership">
                <?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <img src="__PUBLIC__<?php echo $vo; ?>" alt="" data-scroll-reveal="enter bottom over 2s and move 200px">
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="team">
                <p class="title" data-scroll-reveal="enter top over 3s move 50px">MEET OUR FEARLESS TEAM</p>
                <p class="small-title" data-scroll-reveal="enter bottom over 3s move 120px">
                    - J&P Designers -
                </p>
                <ul class="team-photos" id="team-photos">
                    <?php if(is_array($team) || $team instanceof \think\Collection || $team instanceof \think\Paginator): $i = 0; $__LIST__ = $team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="member hover-item" style="width: 12.5%">
                            <img src="__PUBLIC__<?php echo $vo['thumb']; ?>" alt="" data-scroll-reveal="<?php echo $i; ?>>animate.length?animate[<?php echo $i; ?>%animate.length]:animate[<?php echo $i; ?>-1]">
                            <!--<div class="info flex-center-vertically">-->
                                <!--<p class="name"><?php echo $vo['title']; ?></p>-->
                                <!--<p class="position"><?php echo $vo['content']; ?></p>-->
                            <!--</div>-->
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="client">
                <div class="client-title">
                    <p class="title" data-scroll-reveal="enter left">CLIENT</p>
                    <p class="small-title" data-scroll-reveal="enter right over 2s move 120px">「 排名不分先后 」</p>
                </div>
                <div class="client-list">
                    <ul style="overflow: hidden;">
                        <?php if(is_array($hz_team) || $hz_team instanceof \think\Collection || $hz_team instanceof \think\Paginator): $i = 0; $__LIST__ = $hz_team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li data-scroll-reveal="<?php echo $i; ?>%2!=0?'enter right over 1.5s after '+(<?php echo $i; ?>/7)+'s move 1000px':'enter left over 1.5s after '+(<?php echo $i; ?>/7)+'s move 1000px' "><?php echo $vo['en_title']; ?> <?php echo $vo['title']; ?></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
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
<script type="text/javascript">
//    window.onload = function() {
//        var vm = new Vue({
//            el: "#container",
//            data: {
//                animate: ['enter top',
//                    'enter right after 0.5s',
//                    'enter bottom over 1s and move 300px after 0.3s',
//                    'enter top over 0.5s and move 200px',
//                    'enter left over 1s and move 100px',
//                    'enter bottom over 1s and move 300px after 0.3s',
//                    'enter top over 3s after 0.5s',
//                    'enter left',
//                    'enter right over 1s and move 100px',
//                    'enter top over 0.5s and move 200px',
//                    'enter left over 3s after 0.5s',
//                    'enter right after 0.5s',
//                    'enter top over 3s after 0.5s',
//                    'enter bottom over 1s and move 100px',
//                    'enter right over 0.5s and move 200px',
//                    'enter bottom over 1s and move 300px after 0.3s',
//                    'enter right after 0.5s',
//                    'enter top over 3s after 0.5s',
//                    'enter bottom over 1s and move 100px',
//                    'enter right over 0.5s and move 200px',
//                    'enter left',
//                    'enter top over 3s after 0.5s',
//                    'enter right over 1s and move 100px'
//                ],
//            },
//            methods: {
//                checkWidth: function () {
//                    var parentNode = document.getElementById('team-photos');
//                    var minWidth = 200;
//                    if (window.innerWidth <= 1280 && window.innerWidth > 1000) {
//                        minWidth = 160;
//                    } else if (window.innerWidth <= 1000) {
//                        minWidth = 140;
//                    } else if (window.innerWidth <= 800) {
//                        minWidth = 90;
//                    }
//                    var pranentWidth = parentNode.offsetWidth;
//                    var num = (pranentWidth / minWidth) | 0;
//                    var sur = pranentWidth % minWidth;
//                    var w = sur / num | 0;
//                    for (var i = 0; i < parentNode.childNodes.length; i++) {
//                        parentNode.childNodes[i].style.width = minWidth + w + 'px';
//                        parentNode.childNodes[i].style.height = (minWidth + w) / 232 * 360 + 'px';
//                    }
//                }
//            }
//
//        });

//        vm.$nextTick(function () {
//            window.onresize = function () {
//                vm.checkWidth();
//            }
//            this.checkWidth();
//            var scroll = new Swiper('#scroll', {
//                observer: true, //修改swiper自己或子元素时，自动初始化swiper
//                observeParents: true, //修改swiper的父元素时，自动初始化swiper
//                direction: 'vertical',
//                slidesPerView: 'auto',
//                freeMode: true,
//                scrollbar: {
//                    el: '#scroll .swiper-scrollbar',
//                    draggable: true,
//                    snapOnRelease: false,
//                },
//                mousewheel: true,
//            });
//            if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
//                (function () {
//                    window.scrollReveal = new scrollReveal({reset: false});
//                })();
//            }
//            ;
//        })

//    }
</script>

