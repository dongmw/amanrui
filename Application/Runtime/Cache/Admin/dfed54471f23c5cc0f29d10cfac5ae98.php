<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Wycms</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/common.css" rel="stylesheet">
    
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top col-md-10">
    <div class="container-fluid nav_bg">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="" class="navbar-brand">
                <span class='glyphicon glyphicon-home' aria-hidden='true'></span> 長樂未央
            </a>
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
                    <a href="<?php echo U('Link/index');?>">
                        <span class='glyphicon glyphicon-link' aria-hidden='true'></span> 友情链接
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('System/config');?>">
                        <span class='glyphicon glyphicon-wrench' aria-hidden='true'></span> 系统设置
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
                    <h1>编辑栏目
                        <small> Edit category</small>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-15">
                        <div class="panel panel-default">
                            <div class="panel-heading">编辑栏目</div>

                            <div class="panel-body">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">编辑栏目</a>
                                    </li>
                                    <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">编辑内容</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <form class="form-horizontal" role="form" action="<?php echo U('update');?>" method="post">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <input type="hidden" name="id" value="<?php echo ($category["id"]); ?>">

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">父栏目</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="parent_id">
                                                        <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><option value="<?php echo ($c["id"]); ?>"><?php echo ($c["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">名称</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" value="<?php echo ($category["name"]); ?>" class="form-control" id="inputEmail3"
                                                           placeholder="请输入名称">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">拼音</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="<?php echo ($category["pinyin"]); ?>" name="pinyin" class="form-control"
                                                           id="inputPassword3" placeholder="请输入拼音">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">类型</label>
                                                <div class="col-sm-10">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="type" id="inlineRadio1" <?php if(($category["type"]) == "1"): ?>checked<?php endif; ?>> 封面
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="type" id="inlineRadio2" <?php if(($category["type"]) == "2"): ?>checked<?php endif; ?>> 列表
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="type" id="inlineRadio3" <?php if(($category["type"]) == "3"): ?>checked<?php endif; ?>>
                                                        URL跳转
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3"
                                                       class="col-sm-2 control-label">URL跳转地址</label>
                                                <div class="col-sm-10">
                                                    <input type="url" name="url" value="<?php echo ($category["url"]); ?>" class="form-control" id="url"
                                                           placeholder="请输入URL跳转地址">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">是否显示</label>
                                                <div class="col-sm-10">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_show" <?php if(($category["type"]) == "1"): ?>checked<?php endif; ?>> 显示
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_show" <?php if(($category["type"]) == "0"): ?>checked<?php endif; ?>> 隐藏
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">添加</button>
                                                </div>
                                            </div>
                                        </div>


                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <br>
                                            <div class="form-group">
                                                <div class="col-sm-800">
                                                    <textarea name="content" class="form-control" rows="10" placeholder="请输入内容"><?php echo ($category["content"]); ?></textarea>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">添加</button>
                                                </div>
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

    <script>
        CKEDITOR.replace('content',
                {
                    filebrowserBrowseUrl: '/Public/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '/Public/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '/Public/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
    </script>



</body>
</html>