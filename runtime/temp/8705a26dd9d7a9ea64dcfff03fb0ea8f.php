<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:57:"F:\wamp\www\shanghaiweb/app/admin\view\system\system.html";i:1516845756;s:55:"F:\wamp\www\shanghaiweb/app/admin\view\common\head.html";i:1516708701;s:55:"F:\wamp\www\shanghaiweb/app/admin\view\common\foot.html";i:1512625649;}*/ ?>
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
<div class="admin-main layui-anim layui-anim-upbit">
    <fieldset class="layui-elem-field layui-field-title">
        <legend><?php echo lang('systemSet'); ?></legend>
    </fieldset>
    <form class="layui-form layui-form-pane">
        <input type="hidden" name="id" value="<?php echo $sys_id; ?>">
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('websiteName'); ?></label>
            <div class="layui-input-4">
                <input type="text"name="name" value="<?php echo $system['name']; ?>" lay-verify="required" placeholder="<?php echo lang('pleaseEnter'); ?><?php echo lang('websiteName'); ?>" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('WebsiteUrl'); ?></label>
            <div class="layui-input-4">
                <input type="text" name="url" value="<?php echo $system['url']; ?>" lay-verify="url" placeholder="<?php echo lang('pleaseEnter'); ?><?php echo lang('WebsiteUrl'); ?>" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('seoTitle'); ?></label>
            <div class="layui-input-4">
                <input type="text"name="title" value="<?php echo $system['title']; ?>"lay-verify="required" placeholder="<?php echo lang('pleaseEnter'); ?>SEO标题" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label"><?php echo lang('seoKeyword'); ?></label>
            <div class="layui-input-block">
                <textarea name="key" lay-verify="required" placeholder="<?php echo lang('pleaseEnter'); ?><?php echo lang('seoKeyword'); ?>" class="layui-textarea"><?php echo $system['key']; ?></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label"><?php echo lang('description'); ?></label>
            <div class="layui-input-block">
                <textarea name="des" lay-verify="required" placeholder="<?php echo lang('pleaseEnter'); ?><?php echo lang('description'); ?>" class="layui-textarea"><?php echo $system['des']; ?></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">网站LOGO</label>
            <input type="hidden" name="logo" id="logo" value="<?php echo $system['logo']; ?>">
            <div class="layui-input-block">
                <div class="layui-upload">
                    <button type="button" class="layui-btn layui-btn-primary" id="logoBtn"><i class="icon icon-upload3"></i>点击上传</button>
                    <div class="layui-upload-list">
                        <img class="layui-upload-img" id="cltLogo">
                        <p id="demoText"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">微信二维码</label>
            <input type="hidden" name="wxpic" id="wx" value="<?php echo $system['wxpic']; ?>">
            <div class="layui-input-block">
                <div class="layui-upload">
                    <button type="button" class="layui-btn layui-btn-primary" id="wxBtn"><i class="icon icon-upload3"></i>点击上传</button>
                    <div class="layui-upload-list">
                        <img class="layui-upload-img" id="cltWx">
                        <p id="demoText2"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('recordNum'); ?></label>
            <div class="layui-input-3">
                <input type="text" name="bah" value="<?php echo $system['bah']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?><?php echo lang('recordNum'); ?>" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">Copyright</label>
            <div class="layui-input-3">
                <input type="text" name="copyright" value="<?php echo $system['copyright']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?>Copyright" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('companyAddress'); ?></label>
            <div class="layui-input-3">
                <input type="text" name="ads" value="<?php echo $system['ads']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?><?php echo lang('companyAddress'); ?>" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">电话1</label>
            <div class="layui-input-3">
                <input type="text" name="tel" value="<?php echo $system['tel']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?>电话" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">电话2</label>
            <div class="layui-input-3">
                <input type="text" name="phone" value="<?php echo $system['phone']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?>电话" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">邮编</label>
            <div class="layui-input-3">
                <input type="text" name="youbian" value="<?php echo $system['youbian']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?>邮编" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">邮箱</label>
            <div class="layui-input-3">
                <input type="text" name="email" value="<?php echo $system['email']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?>邮箱" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">微博</label>
            <div class="layui-input-3">
                <input type="text" name="fax" value="<?php echo $system['fax']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?>微博" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">微信</label>
            <div class="layui-input-3">
                <input type="text" name="wchat" value="<?php echo $system['wchat']; ?>" placeholder="<?php echo lang('pleaseEnter'); ?>微信" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="button" class="layui-btn" lay-submit="" lay-filter="sys"><?php echo lang('submit'); ?></button>
                <button type="reset" class="layui-btn layui-btn-primary"><?php echo lang('reset'); ?></button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script>
    layui.use(['form', 'layer','upload'], function () {
        var form = layui.form,layer = layui.layer,upload = layui.upload,$ = layui.jquery;
        if("<?php echo $system['logo']; ?>"){
            cltLogo.src = "__PUBLIC__"+ "<?php echo $system['logo']; ?>";
        }
        //普通图片上传
        var uploadInst = upload.render({
            elem: '#logoBtn'
            ,url: '<?php echo url("UpFiles/upload"); ?>'
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#cltLogo').attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                //上传成功
                if(res.code>0){
                    $('#logo').val(res.url);
                }else{
                    //如果上传失败
                    return layer.msg('上传失败');
                }
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst.upload();
                });
            }
        });

        if("<?php echo $system['wxpic']; ?>"){
            cltWx.src = "__PUBLIC__"+ "<?php echo $system['wxpic']; ?>";
        }
        //普通图片上传
        var uploadInst = upload.render({
            elem: '#wxBtn'
            , url: '<?php echo url("UpFiles/upload"); ?>'
            , before: function (obj) {
                //预读本地文件示例，不支持ie8
                obj.preview(function (index, file, result) {
                    $('#cltWx').attr('src', result); //图片链接（base64）
                });
            }
            , done: function (res) {
                //上传成功
                if (res.code > 0) {
                    $('#wx').val(res.url);
                } else {
                    //如果上传失败
                    return layer.msg('上传失败');
                }
            }
            , error: function () {
                //演示失败状态，并实现重传
                var demoText = $('#demoText');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function () {
                    uploadInst.upload();
                });
            }
        });

        //提交监听
        form.on('submit(sys)', function (data) {
            loading =layer.load(1, {shade: [0.1,'#fff']});
            $.post("<?php echo url('system/system'); ?>",data.field,function(res){
                layer.close(loading);
                if(res.code > 0){
                    layer.msg(res.msg,{icon: 1, time: 1000},function(){
                        location.reload();
                    });
                }else{
                    layer.msg(res.msg,{icon: 2, time: 1000});
                }
            });
        })
    });


</script>
</body>
</html>