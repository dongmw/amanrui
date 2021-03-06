<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Wycms</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/common.css" rel="stylesheet">
    
    <link rel="stylesheet" href="/Public/select2/css/select2.min.css">
    <link rel="stylesheet" href="/Public/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/Public/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top col-md-10">
    <div class="container-fluid nav_bg">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo U('Index/index');?>">
                        <span class='glyphicon glyphicon-home' aria-hidden='true'></span> 長樂未央
                    </a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class='glyphicon glyphicon-th' aria-hidden='true'></span> 內容管理 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?php echo U('Category/index');?>">分类管理</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo U('Article/index');?>">文章列表</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Article/create');?>">新增文章</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo U('File/index');?>">
                        <span class='glyphicon glyphicon-file' aria-hidden='true'></span> 文件管理
                    </a>
                </li>


                <li>
                    <a href="<?php echo U('Link/index');?>">
                        <span class='glyphicon glyphicon-link' aria-hidden='true'></span> 友情链接
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('System/config');?>">
                        <span class='glyphicon glyphicon-wrench' aria-hidden='true'></span> 系统设置
                    </a>
                </li>

                <li>
                    <a href="<?php echo U('Recycle/index');?>">
                        <span class='glyphicon glyphicon-floppy-remove' aria-hidden='true'></span> 回收站
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo (ucfirst($user["username"])); ?> 管理员 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo U('User/logout');?>">安全退出</a></li>
                        <li><a href="<?php echo U('System/change_password');?>">修改密码</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="main">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">

                <div class="page-header">
                    <h1>新增文章
                        <small> Create article</small>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-15">
                        <div class="panel panel-default">
                            <div class="panel-heading">新增文章</div>

                            <div class="panel-body">

                                <!-- Nav tabs -->
                                <!--<ul class="nav nav-tabs" role="tablist">-->
                                <!--<li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">添加栏目</a>-->
                                <!--</li>-->
                                <!--<li role="presentation"><a href="#profile" role="tab" data-toggle="tab">栏目内容</a>-->
                                <!--</li>-->
                                <!--</ul>-->

                                <!-- Tab panes -->
                                <form class="form-horizontal" role="form" action="<?php echo U('store');?>" method="post">
                                    <div class="tab-content">


                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">所属栏目</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="category_id">
                                                    <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><option value="<?php echo ($category["id"]); ?>"><?php echo ($category["name"]); ?></option>
                                                        <?php if(is_array($category["children"])): $i = 0; $__LIST__ = $category["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><option value="<?php echo ($c["id"]); ?>">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($c["name"]); ?>
                                                            </option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">文章标题</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="title" class="form-control" id="inputEmail3"
                                                       placeholder="请输入标题" value="<?php echo ($article["title"]); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">标题颜色</label>
                                            <div class="col-sm-6">
                                                <div id="cp2" class="input-group colorpicker-component">
                                                    <input type="text" name="color" value="<?php echo ($article["color"]); ?>" class="form-control"
                                                           id="inputEmail"/>
                                                    <span class="input-group-addon"><i></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">发布日期</label>
                                            <div class="col-sm-6">

                                                <input type="text" name="time" data-data-format="yyyy-mm-dd"
                                                       value="{{date('Y-m-d H:i:s', $article.time)}}" class="form-control datepicker"
                                                       placeholder=""/>
                                            </div>
                                        </div>

                                        <div class="form-group thumb">
                                            <label for="inputEmail3" class="col-sm-2 control-label">缩略图</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="thumb" value="<?php echo ($article["thumb"]); ?>" class="form-control span5" name="thumb">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="button" value="上 传"
                                                       onclick="BrowseServer('thumb','img_show')"
                                                       class="btn btn-success"/>
                                                <input type="button" value="删 除" class="thumb_delete btn btn-danger">
                                            </div>
                                            <div class="col-sm-2">
                                                <img src="" id="img_show" width="60px" height="30px">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">新增附件</label>
                                            <div class="col-sm-3">
                                                <button type="button" class="btn btn-primary add_file">新增</button>
                                            </div>
                                        </div>
                                        <div class="files">
                                            <?php if(is_array($file)): $i = 0; $__LIST__ = $file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">附件(<?php echo ($key+1); ?>)</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="file1" value="<?php echo ($f); ?>" class="form-control span5"
                                                           name="file[]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="button" value="上 传" onclick="BrowseServer('file<?php echo ($key+1); ?>')"
                                                           class="btn btn-success">

                                                    <?php if(($key) == "0"): ?><input type="button" value="删 除" class="thumb_del1 btn btn-danger">
                                                        <?php else: ?>
                                                        <input type="button" value="删 除" class="file_del btn btn-danger"><?php endif; ?>
                                                </div>
                                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">描述信息</label>
                                            <div class="col-sm-6">
                                                <textarea name="description" class="form-control" rows="3"><?php echo ($article["description"]); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">是否置顶</label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="type" <?php if(($article["type"]) == "1"): ?>checked<?php endif; ?>> 是
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="type" <?php if(($article["type"]) == "0"): ?>checked<?php endif; ?>> 否
                                                </label>

                                            </div>
                                        </div>

                                        <div class="panel-heading">文章内容</div>
                                        <div class="form-group">
                                            <div class="col-sm-800">
                                                <textarea name="content" class="form-control" rows="10"
                                                          placeholder="请输入内容"><?php echo ($article["content"]); ?></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">提交</button>
                                                <a href="<?php echo U('index');?>" class="btn btn-info">返回</a>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>



    <script src="/Public/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/Public/ckfinder/ckfinder.js"></script>
    <script src="/Public/select2/js/select2.min.js"></script>
    <script src="/Public/select2/js/i18n/zh-CN.js"></script>
    <script src="/Public/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="/Public/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/Public/bootstrap-datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>
    <script type="text/javascript">
        //文字的编辑插件
        CKEDITOR.replace('content',
                {
                    filebrowserBrowseUrl: '/Public/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '/Public/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '/Public/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
        //颜色插件
        $(function () {
            $('#cp2').colorpicker();
        });
        //搜索插件
        $('select').select2({
            language: 'zh-CN'
        });

        //日期插件
        $('.datepicker').datepicker({
            language: 'zh-CN'
        });

        //添加缩略图
        function BrowseServer(thumb, img_show) {
            var finder = new CKFinder();

            //当选中图片时执行的函数
            finder.selectActionFunction = function (fileUrl) {
                $("#" + thumb).val(fileUrl);
                $("#" + img_show).attr("src", "" + fileUrl + "");
            }

            finder.popup();//调用窗口
        }
        //删除链接、缩略图
        $(".thumb_delete").click(function () {
            $("#thumb").val('');
            $("#img_show").attr('src', '');
        })
        //新增附件
        var index = $(".files").children().length;
        $(".add_file").click(function () {
            var length = $(".files").children().length;
            if (length==5){
                alert('您最多只能增加5个附件');
                return false;
            }
            index++;
            var html = '<div class="form-group">'+
                    '<label for="inputEmail3" class="col-sm-2 control-label">附件('+ index +')</label>'+
                    '<div class="col-sm-4">'+
                    '<input type="text" id="file'+ index +'" class="form-control span5" name="file[]">'+
                    '</div>'+
                    '<div class="col-sm-2">'+
                    '<input type="button" value="上 传" onclick="BrowseServer(\'file'+ index +'\')" class="btn btn-success"/>&nbsp;'+
                    '<input type="button" value="删 除" class="file_del btn btn-danger">'+
                    '</div>'+
                    '</div>';
            $(".files").append(html);
            //移除整个框方法1
            $(".file_del").click(function () {
                $(this).parent().parent().remove();
            })

        })
        //添加附件
        function BrowseServer(file) {
            var finder = new CKFinder();

            //当选中图片时执行的函数
            finder.selectActionFunction = function (fileUrl) {
                $("#" + file).val(fileUrl);

            }

            finder.popup();//调用窗口
        }
        //删除链接
        $(".thumb_del1").click(function () {
            $("#file1").val('');
        })
        //删除整个框方法2
        $(".files").on("click", ".file_del", function () {
            $(this).parents(".form-group").remove();
        })





    </script>

</body>
</html>