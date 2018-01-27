<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:57:"F:\wamp\www\shanghaiweb/app/admin\view\category\edit.html";i:1516947452;s:55:"F:\wamp\www\shanghaiweb/app/admin\view\common\head.html";i:1516708701;s:55:"F:\wamp\www\shanghaiweb/app/admin\view\common\foot.html";i:1512625649;}*/ ?>
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
<div class="admin-main fadeInUp animated">
    <fieldset class="layui-elem-field layui-field-title">
        <legend><?php echo $title; ?></legend>
    </fieldset>
    <form class="layui-form layui-form-pane">
        <input TYPE="hidden" name="id" value="<?php echo $record['id']; ?>">
        <!--<div class="layui-form-item">-->
            <!--<label class="layui-form-label">请选择模型</label>-->
            <!--<div class="layui-input-3">-->
                <!--<select name="moduleid" lay-verify="required" lay-filter="moduleid" id="moduleid">-->
                    <!--<?php if(is_array($modulelist) || $modulelist instanceof \think\Collection || $modulelist instanceof \think\Paginator): $i = 0; $__LIST__ = $modulelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                    <!--<option value="<?php echo $vo['id']; ?>" <?php if($module == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['title']; ?></option>-->
                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                <!--</select>-->
            <!--</div>-->
        <!--</div>-->
        <div class="layui-form-item">
            <label class="layui-form-label">上级栏目</label>
            <div class="layui-input-3">
                <select name="parentid" id="parentid">
                    <option value="">作为一级栏目</option>
                    <?php echo $categorys; ?>
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">栏目名称</label>
            <div class="layui-input-4">
                <input type="text" name="catname" lay-verify="required" value="<?php echo $record['catname']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?>栏目名称" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux red">*</div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">栏目图片</label>
            <input type="hidden" name="image" id="image" value="<?php echo $record['imgurl']; ?>">
            <div class="layui-input-block">
                <div class="layui-upload">
                    <button type="button" class="layui-btn layui-btn-primary" id="cateBtn"><i class="icon icon-upload3"></i>点击上传</button>
                    <div class="layui-upload-list">
                        <img class="layui-upload-img" src="<?php echo $record['imgUrl']; ?>" id="cateImage">
                        <p id="demoText"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">SEO标题</label>
            <div class="layui-input-block">
                <input type="text" name="title" value="<?php echo $record['title']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?>SEO标题" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">SEO关键字</label>
            <div class="layui-input-block">
                <textarea placeholder="<?php echo lang('pleaseEnter'); ?>SEO关键字" name="keywords" class="layui-textarea"><?php echo $record['keywords']; ?></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">SEO描述</label>
            <div class="layui-input-block">
                <textarea placeholder="<?php echo lang('pleaseEnter'); ?>SEO描述" name="description" class="layui-textarea"><?php echo $record['description']; ?></textarea>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">栏目链接</label>
            <div class="layui-input-block">
                <input type="text" name="url" value="<?php echo $record['url']; ?>" placeholder="请输入栏目链接地址，如：index/index" class="layui-input">
            </div>
        </div>



        <div class="layui-form-item">
            <label class="layui-form-label">导航</label>
            <div class="layui-input-block">
                <input type="radio" name="ismenu" lay-filter="is_open" checked value="1" <?php if($record['ismenu'] == 1): ?>checked<?php endif; ?> title="显示">
                <input type="radio" name="ismenu" lay-filter="is_open" value="0" <?php if($record['ismenu'] == 0): ?>checked<?php endif; ?> title="不显示">
                <input type="radio" name="ismenu" lay-filter="is_open" value="2" <?php if($record['ismenu'] == 2): ?>checked<?php endif; ?> title="后台显示">
            </div>
        </div>


        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="button" class="layui-btn" lay-submit="" lay-filter="submit"><?php echo lang('submit'); ?></button>
                <a href="<?php echo url('index'); ?>" class="layui-btn layui-btn-primary"><?php echo lang('back'); ?></a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script src="__STATIC__/common/js/jquery.2.1.1.min.js"></script>
<script>
    var modulearr = new Array();
    <?php if(is_array($modulelist) || $modulelist instanceof \think\Collection || $modulelist instanceof \think\Paginator): $i = 0; $__LIST__ = $modulelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mdate): $mod = ($i % 2 );++$i;?>
    modulearr[<?php echo $mdate['id']; ?>] = "<?php echo $mdate['name']; ?>";
    <?php endforeach; endif; else: echo "" ;endif; ?>
    var templatearr = new Array();
    <?php if(is_array($templates) || $templates instanceof \think\Collection || $templates instanceof \think\Paginator): $i = 0; $__LIST__ = $templates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tem): $mod = ($i % 2 );++$i;?>
    templatearr[<?php echo $i; ?>] = "<?php echo $tem['value']; ?>,<?php echo $tem['filename']; ?>";
    <?php endforeach; endif; else: echo "" ;endif; ?>
    var datas = "<option value=''>请选择</option>";
    var moduleid =  $('#moduleid').val();
    var image = '<?php echo $record['image']; ?>';

    layui.use(['form','upload'], function () {
        var form = layui.form,upload = layui.upload;

        var uploadInst = upload.render({
            elem: '#cateBtn'
            ,url: '<?php echo url("UpFiles/upload"); ?>',
            done: function(res){
                if(res.code>0){
                    $('#image').val(res.url);
                    $('#cateImage').attr('src', "__PUBLIC__"+res.url);
                }else{
                    return layer.msg('上传失败');
                }
            },
            error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst.upload();
                });
            }
        });
        form.on('submit(submit)', function (data) {
            // 提交到方法 默认为本身
            var loading = layer.load(1, {shade: [0.1, '#fff']});
            data.field.moduleid = 3;
            $.post("<?php echo url('catUpdate'); ?>", data.field, function (res) {
                layer.close(loading);
                if (res.code > 0) {
                    layer.msg(res.msg, {time: 1800, icon: 1}, function () {
                        location.href = res.url;
                    });
                } else {
                    layer.msg(res.msg, {time: 1800, icon: 2});
                }
            });
        });
//        form.on('select(moduleid)', function(data){
//            showtemplist(data.value,0,form);
//        });
    });
    function showtemplist(m,t,form){

        var type='_list';
        if(t){
            type='_index';
        }
        var mtlist = modulearr[m]+type;
        var mtshow = modulearr[m]+'_show';

        if(modulearr[m]=='page'){
            mtlist=mtshow ='page';
        }
        $('#template_list').html(datas);
        $('#template_show').html(datas);

        listdatas = showdatas ='';
        for(i=1;i<templatearr.length;i++){
            data = templatearr[i].split(',');
            if(data[0].indexOf(mtlist)  >= 0){
                listdatas  ="<option value='"+data[0]+"'>"+data[1]+"</option>";
                $('#template_list').append(listdatas);
            }
            if(data[0].indexOf(mtshow)  >= 0){
                showdatas ="<option value='"+data[0]+"'>"+data[1]+"</option>";
                $('#template_show').append(showdatas);
            }
        }
        $("#template_list").val('<?php echo $record['template_list']; ?>');
        $("#template_show").val('<?php echo $record['template_show']; ?>');
        if(form){
            form.render()
        }
    }
    showtemplist(moduleid,<?php if(empty($record[listtype])): ?>0<?php else: ?><?php echo $record['listtype']; endif; ?>);
    function templatetype(){
        var moduleid = $('#moduleid').val();
        if($("#listtype").attr('checked')==true){
            showtemplist(moduleid,1);
        }else{
            showtemplist(moduleid,0);
        }
    }
</script>