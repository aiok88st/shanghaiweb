<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"F:\wamp\www\shanghaiweb/app/admin\view\content\edit_project.html";i:1516873708;s:55:"F:\wamp\www\shanghaiweb/app/admin\view\common\head.html";i:1516708701;s:55:"F:\wamp\www\shanghaiweb/app/admin\view\common\foot.html";i:1512625649;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="__STATIC__/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="__ADMIN__/css/global.css" media="all">
    <link rel="stylesheet" href="__STATIC__/common/css/font.css" media="all">
</head>
<body class="skin-0">
<link rel="stylesheet" href="__STATIC__/plugins/spectrum/spectrum.css">
<style>
    .layui-form-select dl{
        z-index: 99999;
    }
</style>
<script>
    var ADMIN = '__ADMIN__';
    var UPURL = "<?php echo url('UpFiles/upImages'); ?>";
    var PUBLIC = "__PUBLIC__";
    var imgClassName,fileClassName;
</script>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script src="__STATIC__/common/js/jquery.2.1.1.min.js"></script>
<script>
    var edittext=new Array();
</script>

<script src="__STATIC__/ueditor/ueditor.config.js" type="text/javascript"></script>
<script src="__STATIC__/ueditor/ueditor.all.min.js" type="text/javascript"></script>
<div class="admin-main layui-anim layui-anim-upbit">
    <fieldset class="layui-elem-field layui-field-title">
        <legend><?php echo $title; ?></legend>
    </fieldset>
    <form class="layui-form" method="post" target="rfFrame">
        <?php if($info['id'] != ''): ?><input TYPE="hidden" name="id" value="<?php echo $info['id']; ?>"><?php endif; ?>
        <div class="layui-form-item">
            <label class="layui-form-label">栏目</label>
            <div class="layui-input-4">
                <select name="catid" lay-verify="required">
                    <?php if($info['id'] != ''): ?>
                    <?php echo $catids; else: ?>
                    <option value="">请选择</option>
                    <?php echo $catids; endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-4">
                <input type="text" name="title" <?php if($info['id'] != ''): ?>value="<?php echo $info['title']; ?>"<?php endif; ?> placeholder="请输入标题" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">英文标题</label>
            <div class="layui-input-4">
                <input type="text" name="en_title" <?php if($info['id'] != ''): ?>value="<?php echo $info['en_title']; ?>"<?php endif; ?> placeholder="请输入英文标题" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">图片</label>
            <input type="hidden" name="thumb" id="thumb" <?php if($info['id'] != ''): ?>value="<?php echo $info['thumb']; ?>"<?php endif; ?>>
            <div class="layui-input-block">
                <div class="layui-upload">
                    <button type="button" class="layui-btn layui-btn-primary" id="thumbBtn"><i class="icon icon-upload3"></i>点击上传</button>
                    <div class="layui-upload-list">
                        <?php if($info['id'] != ''): ?>
                        <img class="layui-upload-img" id="cltThumb" src="__PUBLIC__<?php echo $info['thumb']; ?>">
                        <?php else: ?>
                        <img class="layui-upload-img" id="cltThumb" src="__ADMIN__/images/tong.png">
                        <?php endif; ?>
                        <p id="demoText"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">图组</label>
            <div class="layui-input-4" id="box_images">
                <div class="layui-upload"><button type="button" class="layui-btn" id="test2">多图片上传</button>
                    <input class="layui-upload-file" name="file" multiple="" type="file">
                    <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
                        预览图：<div class="layui-upload-list" id="demo2">
                        <div class="layui-row layui-col-space10">
                            <?php if($info['id'] != ''): if(is_array($info['img']) || $info['img'] instanceof \think\Collection || $info['img'] instanceof \think\Paginator): $i = 0; $__LIST__ = $info['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="layui-col-md3">
                                        <div class="dtbox">
                                            <img src="__PUBLIC__<?php echo $vo; ?>" class="layui-upload-img">
                                            <input type="hidden" name="images" class="imgVal" value="<?php echo $vo; ?>">
                                            <i class="delimg layui-icon">&#x1006;</i>
                                        </div>
                                    </div>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        </div>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">内容</label>
            <div class="layui-input-block">
                <textarea id="editor" name="content"  placeholder="请输入内容" style="height: 500px;"><?php if($info['id'] != ''): ?><?php echo $info['content']; endif; ?></textarea>
            </div>
        </div>

        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">描述</label>
            <div class="layui-input-block">
                <textarea id="editor2" name="desc" placeholder="请输入内容" style="height: 500px;"><?php if($info['id'] != ''): ?><?php echo $info['desc']; endif; ?></textarea>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">location</label>
            <div class="layui-input-4">
                <input type="text" name="location" <?php if($info['id'] != ''): ?>value="<?php echo $info['location']; ?>"<?php endif; ?> placeholder="请输入location" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">date</label>
            <div class="layui-input-4">
                <input type="text" name="date" <?php if($info['id'] != ''): ?>value="<?php echo $info['date']; ?>"<?php endif; ?> placeholder="请输入date" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">type</label>
            <div class="layui-input-4">
                <input type="text" name="type" <?php if($info['id'] != ''): ?>value="<?php echo $info['type']; ?>"<?php endif; ?> placeholder="请输入type" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">clients</label>
            <div class="layui-input-4">
                <input type="text" name="clients" <?php if($info['id'] != ''): ?>value="<?php echo $info['clients']; ?>"<?php endif; ?> placeholder="请输入clients" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">status</label>
            <div class="layui-input-4">
                <input type="text" name="is_status" <?php if($info['id'] != ''): ?>value="<?php echo $info['is_status']; ?>"<?php endif; ?> placeholder="请输入status" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item" style="margin-top: 30px">
            <div class="layui-input-block">
                <button type="button" class="layui-btn" lay-submit="" lay-filter="submit"><?php echo lang('submit'); ?></button>
                <a href="<?php echo url('index'); ?>" class="layui-btn layui-btn-primary"><?php echo lang('back'); ?></a>
            </div>
        </div>
    </form>
</div>
<script src='__STATIC__/plugins/spectrum/spectrum.js'></script>
<script src='__ADMIN__/js/edit.js'></script>
<script src="__STATIC__/ueditor/ueditor.config.js" type="text/javascript"></script>
<script src="__STATIC__/ueditor/ueditor.all.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<script>
    var thumb,pic,file;
    <?php if(ACTION_NAME=='add'): ?>
    var url= "<?php echo url('insert'); ?>";
    <?php else: ?>
    var url= "<?php echo url('update'); ?>";
    <?php endif; ?>
    var ue = UE.getEditor('editor');
    var ue = UE.getEditor('editor2');

    layui.use(['form','upload','layedit','laydate'], function () {
        var form = layui.form,upload = layui.upload,layedit = layui.layedit,laydate = layui.laydate;
        //缩略图上传
        upload.render({
            elem: '#thumbBtn'
            ,url: '<?php echo url("UpFiles/upload"); ?>'
            ,accept: 'images' //普通文件
            ,exts: 'jpg|png|gif' //只允许上传压缩文件
            ,done: function(res){
                $('#cltThumb').attr('src', "__PUBLIC__"+res.url);
                $('#thumb').val(res.url);
            }
        });

        //多图片上传
        var imagesSrc;
        upload.render({
            elem: '#test2'
            ,url: '<?php echo url("UpFiles/upImages"); ?>'
            ,multiple: true
            ,done: function(res){
                $('#demo2 .layui-row').append('<div class="layui-col-md3"><div class="dtbox"><img src="__PUBLIC__'+ res.src +'" class="layui-upload-img"><input type="hidden" name="images" class="imgVal" value="'+ res.src +'"> <i class="delimg layui-icon">&#x1006;</i></div></div>');
                imagesSrc +=res.src+';';
            }
        });

        //日期
        laydate.render({
            elem: '#addtime', //指定元素
            type:'datetime',
            format:'yyyy-MM-dd HH:mm:ss'
        });
        form.on('submit(submit)', function (data) {
            if(edittext){
                for (key in edittext){
                    data.field[key] = $(window.frames["LAY_layedit_"+edittext[key]].document).find('body').html();
                }
            }
            var images='';
            $(".imgVal").each(function(i) {
                images+=$(this).val()+';';
            });
            data.field.images = images;
            $.post(url, data.field, function (res) {
                if (res.code > 0) {
                    layer.msg(res.msg, {time: 1800, icon: 1}, function () {
                        location.href = res.url;
                    });
                } else {
                    layer.msg(res.msg, {time: 1800, icon: 2});
                }
            });
        });
        $('.layui-row').on('click','.delimg',function(){
            var thisimg = $(this);
            layer.confirm('你确定要删除该图片吗？', function(index){
                thisimg.parents('.layui-col-md3').remove();
                layer.close(index);
            })
        })
    });

</script>