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
                    <!--路径的写法不同，避免和前面的"/"发生冲突，所以不能使用"U"方法-->
                    <a href="/index.php?m=Admin&c=files">
                        <span class='glyphicon glyphicon-folder-open' aria-hidden='true'></span> 文件设置
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
                    <h1>栏目管理
                        <small>Categories manage</small>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">栏目列表</div>

                            <div class="panel-body">
                                <form action="" method="post" id="form">
                                    <table class="table">

                                        <thead>
                                        <tr>

                                            <th>名 称</th>
                                            <th>栏目文章</th>
                                            <th>排 序</th>
                                            <th>操 作</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><tr class="column" data-id="<?php echo ($category["id"]); ?>">
                                                <td class="name"><?php echo ($category["name"]); ?></td>
                                                <td>
                                                    <input type="hidden" name="parent_id" class="">
                                                </td>

                                                <td>
                                                    <input type="hidden" value="<?php echo ($category["id"]); ?>" name="id[]">
                                                    <input type="text" value="<?php echo ($category["sort_order"]); ?>" name="sort_order[]">
                                                </td>
                                                <td>
                                                    <a data-toggle="modal" class="edit" data-target="#edit_link">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </a>
                                                    <a data-toggle="modal" class="destroy" data-target="#destory_link">
                                                        <span class="del glyphicon glyphicon-trash"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php if(is_array($category["children"])): $i = 0; $__LIST__ = $category["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><tr data-id="<?php echo ($c["id"]); ?>">
                                                    <td class="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($c["name"]); ?></td>
                                                    <td>
                                                        <input type="hidden" name="parent_id" class="">
                                                    </td>

                                                    <td>
                                                        <input type="hidden" value="<?php echo ($c["id"]); ?>" name="id[]">
                                                        <input type="text" value="<?php echo ($c["sort_order"]); ?>" name="sort_order[]">
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo U('Category/edit', array('id'=>$c['id']));?>">
                                                            <span class="glyphicon glyphicon-pencil"></span>
                                                        </a>
                                                        <a data-toggle="modal" name="articles" id="destroy" class="destroy" data-target="#destory_link">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </a>
                                                    </td>
                                                </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">

                        <div class="list-group">
                            <a href="<?php echo U('create');?>" class="list-group-item list-group-item-success" >
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 新增 (add)
                            </a>
                            <a href="javascript: void 0;" class="list-group-item list-group-item-info sort_flinks">
                                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 排序 (sort)
                            </a>
                            <a href="javascript: void 0;"
                               class="list-group-item list-group-item-warning del_all_flinks">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 刪除 (delete)
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!--&lt;!&ndash; Button trigger modal &ndash;&gt;-->
    <!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">-->
    <!--Launch demo modal-->
    <!--</button>-->

    <!-- Modal新增链接 -->
    <div class="modal fade" id="create_link" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">添加友情链接</h4>
                </div>
                <form class="form-horizontal" role="form" action="<?php echo U('store');?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="create_name" class="col-sm-2 control-label">链接名称</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="create_name" placeholder="链接名称">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="create_name" class="col-sm-2 control-label">链接地址</label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" name="url" id="create_url" placeholder="链接地址">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal编辑链接 -->
    <!--<div class="modal fade" id="edit_link" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"-->
         <!--aria-hidden="true">-->
        <!--<div class="modal-dialog">-->
            <!--<div class="modal-content">-->
                <!--<div class="modal-header">-->
                    <!--<button type="button" class="close" data-dismiss="modal"><span-->
                            <!--aria-hidden="true">×</span><span class="sr-only">Close</span></button>-->
                    <!--<h4 class="modal-title" id="">编辑友情链接</h4>-->
                <!--</div>-->
                <!--<form class="form-horizontal" role="form" action="<?php echo U('update');?>" method="post">-->
                    <!--<input type="hidden" name="id" id="edit_id">-->
                    <!--<div class="modal-body">-->
                        <!--<div class="form-group">-->
                            <!--<label for="create_name" class="col-sm-2 control-label">链接名称</label>-->
                            <!--<div class="col-sm-10">-->
                                <!--<input type="text" class="form-control" name="name" id="edit_name" placeholder="链接名称">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                            <!--<label for="create_name" class="col-sm-2 control-label">链接地址</label>-->
                            <!--<div class="col-sm-10">-->
                                <!--<input type="url" class="form-control" name="url" id="edit_url" placeholder="链接地址">-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="modal-footer">-->
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>-->
                        <!--<button type="submit" class="btn btn-primary">保存</button>-->
                    <!--</div>-->
                <!--</form>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->

    <!-- Modal删除链接 -->
    <div class="modal fade" id="destory_link" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">删除栏目</h4>
                </div>
                <form class="form-horizontal" role="form" action="<?php echo U('destroy');?>" method="post">
                    <input type="hidden" name="id" id="destroy_id">
                    <div class="modal-body">
                        <p>确认删除这个栏目？</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary">确认</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(function () {
            //编辑单条链接
            $(".edit").click(function () {
                var data = {
                    id: $(this).parents("tr").data('id'),
                    name: $(this).parent().siblings('.name').text(),
                    url: $.trim($(this).parent().siblings('.url').text())
                }

                $("#edit_id").val(data.id);
                $("#edit_name").val(data.name);
                $("#edit_url").val(data.url);
            })
            //删除单条链接
            $(".destroy").click(function () {
                var data = {
                    id: $(this).parents("tr").data('id')
                }
                $("#destroy_id").val(data.id);

            })


            //排序
            $(".sort_flinks").click(function () {
                $("#form").attr("action", "<?php echo U('sort_order');?>").submit();

            })
            //删除主栏目判断
            $(".del").click(function () {
                var length = $(".column").children().length;
                if (length != 0){
                    alert('请先删除子栏目，才可以删除主栏目！');
                }
                return false;

            })
            //删除子栏目判断
            $("#destroy").click(function () {
                if ($articles){
                    alert('请先删除该栏目的文章,才可以删除该栏目!');
                }
                return false;

            })


        })
    </script>

</body>
</html>