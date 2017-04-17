<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Wycms</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/common.css" rel="stylesheet">
    
    <style>
        div {
            /* 设置宽度为300px */


            /* 设置高度为300px */


            /* 设置边框为1px的线条 */


            /* 设置内边距为5px */


            /* 设置外边距为10px*/
            margin-bottom: -15px;
        }
    </style>


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
    
    <div id="ckfinder" style="height: 580px; width: 1250px;"></div>


</div>


<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>

    <script src="/Public/ckfinder/ckfinder.js"></script>
    <script type="text/javascript">


        //<![CDATA[
        (function()
        {
            var config = {};
            var get = CKFinder.tools.getUrlParam;
            var getBool = function( v )
            {
                var t = get( v );

                if ( t === null )
                    return null;

                return t == '0' ? false : true;
            };

            var tmp;
            if ( tmp = get( 'configId' ) )
            {
                var win = window.opener || window;
                try
                {
                    while ( ( !win.CKFinder || !win.CKFinder._.instanceConfig[ tmp ] ) && win != window.top )
                        win = win.parent;

                    if ( win.CKFinder._.instanceConfig[ tmp ] )
                        config = CKFINDER.tools.extend( {}, win.CKFinder._.instanceConfig[ tmp ] );
                }
                catch(e) {}
            }

            if ( tmp = get( 'basePath' ) )
                CKFINDER.basePath = tmp;

            if ( tmp = get( 'startupPath' ) || get( 'start' ) )
                config.startupPath = decodeURIComponent( tmp );

            config.id = get( 'id' ) || '';

            if ( ( tmp = getBool( 'rlf' ) ) !== null )
                config.rememberLastFolder = tmp;

            if ( ( tmp = getBool( 'dts' ) ) !== null )
                config.disableThumbnailSelection = tmp;

            if ( tmp = get( 'data' ) )
                config.selectActionData = tmp;

            if ( tmp = get( 'tdata' ) )
                config.selectThumbnailActionData = tmp;

            if ( tmp = get( 'type' ) )
                config.resourceType = tmp;

            if ( tmp = get( 'skin' ) )
                config.skin = tmp;

            if ( tmp = get( 'langCode' ) )
                config.language = tmp;

            if ( typeof( config.selectActionFunction ) == 'undefined' )
            {
                // Try to get desired "File Select" action from the URL.
                var action;
                if ( tmp = get( 'CKEditor' ) )
                {
                    if ( tmp.length )
                        action = 'ckeditor';
                }
                if ( !action )
                    action = get( 'action' );

                var parentWindow = ( window.parent == window ) ? window.opener : window.parent;
                switch ( action )
                {
                    case 'js':
                        var actionFunction = get( 'func' );
                        if ( actionFunction && actionFunction.length > 0 )
                            config.selectActionFunction = parentWindow[ actionFunction ];

                        actionFunction = get( 'thumbFunc' );
                        if ( actionFunction && actionFunction.length > 0 )
                            config.selectThumbnailActionFunction = parentWindow[ actionFunction ];
                        break ;

                    case 'ckeditor':
                        var funcNum = get( 'CKEditorFuncNum' );
                        if ( parentWindow['CKEDITOR'] )
                        {
                            config.selectActionFunction = function( fileUrl, data )
                            {
                                parentWindow['CKEDITOR'].tools.callFunction( funcNum, fileUrl, data );
                            };

                            config.selectThumbnailActionFunction = config.selectActionFunction;
                        }
                        break;

                    default:
                        if ( parentWindow && parentWindow['FCK'] && parentWindow['SetUrl'] )
                        {
                            action = 'fckeditor' ;
                            config.selectActionFunction = parentWindow['SetUrl'];

                            if ( !config.disableThumbnailSelection )
                                config.selectThumbnailActionFunction = parentWindow['SetUrl'];
                        }
                        else
                            action = null ;
                }
                config.action = action;
            }

            // Always use 100% width and height when nested using this middle page.
            config.width = config.height = '100%';

            var ckfinder = new CKFinder( config );
            ckfinder.replace( 'ckfinder', config );
        })();
        //]]>
    </script>


</body>
</html>