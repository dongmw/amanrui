<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0023)http://www.meishij.net/ -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>美食杰</title>
    <meta name="keywords"
          content="美食,美食网,菜谱,菜谱网,美食地图,食谱,食谱网,特色食谱,特色美食,美食大全家常菜谱,菜谱大全,美食网站,特色菜谱,最新菜谱,美食分享,美食加盟,人气美食,菜谱分享,餐饮加盟,特色小吃,美食文化">
    <meta name="description"
          content="美食杰 - 中国最优质的美食，食谱，菜谱网。做你最喜爱的美食网，菜谱网。提供最人性化的菜谱大全,食谱家常菜，家常菜谱大全的美食网,让人们在宣泄的都市中体验在家常做菜,享受美食的乐趣.找家常菜谱,上美食杰菜谱美食网">
    <meta content="www.meishij.net" name="author">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="stylesheet" type="text/css" media="all" href="/Public/assets/css/ss_base.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/assets/css/main.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/assets/css/index.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/assets/css/content.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/assets/css/tipswindown.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/assets/css/list.css">

    
    <link rel="stylesheet" type="text/css" media="all" href="/Public/assets/css/list.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/assets/css/content.css">



    <meta http-equiv="X-UA-Compatible" content="IE=100">
    <meta http-equiv="Expires" content="Thu, 10 Nov 2016 06:35:05 GMT">


</head>
<body>
<div class="adinheader">
    <div class="adinheader_w">

    </div>
</div>
<div class="header">
    <div class="header_c">
        <a href="http://www.meishij.net/" class="logo pngFix"><img src="/Public/assets/images/1.jpg" alt=""/></a>
        <div class="main_search_top_w">
            <div class="suggestionsBox" id="suggestions" style="display:none;">
                <ul class="suggestionList" id="autoSuggestionsList"></ul>
            </div>
            <form class="search" action="">
                <input type="text" class="text" name="q" defaultval="请输入菜谱/食材/菜单/作者" x-webkit-speech="" value="请输入菜谱/食材/菜单/作者" autocomplete="off" onfocus="if(this.value=='请输入菜谱/食材/菜单/作者'){this.value='';}$(this).css('color','#333');" onblur="if(this.value==''){this.value='请输入菜谱/食材/菜单/作者';$(this).css('color','#999');}" href="/ajax/ajaxtitle.php" id="input_string" style="color: rgb(153, 153, 153);">
                <input type="submit" class="submit" value="搜 索">
            </form>
        </div>
    </div>
</div>
<div class="nav">
    <ul id="main_nav">
        <li class="current"><a href="http://tpcms.app/" class="link pngFix"><strong>首页</strong></a></li>
        <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><li class="hasmore on">
                <a href="<?php echo ($category["link"]); ?>" class="link pngFix"><strong id="demo"><?php echo ($category["name"]); ?></strong></a>
                <div class="dw clearfix">
                    <div class="dww clearfix dww_cpdq">
                        <div class="dwitem clearfix pngFix">
                            <dl class="clearfix">

                                <?php if(is_array($category["children"])): $i = 0; $__LIST__ = $category["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo ($c["link"]); ?>"><?php echo ($c["name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>


                            </dl>
                        </div>
                    </div>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<div class="main_search main_search_slideUp pngFix" slideup="1" style="bottom: -56px; padding-top: 9px;"
     id="main_search">
    <div class="main_search_w">
        <div class="searchform_div">
            <form action="http://so.meishi.cc/" target="_blank"><input type="text" class="text" name="q"
                                                                       x-webkit-speech="" autocomplete="off"
                                                                       id="inputString" placeholder="输入菜谱、食材、作者"><input
                    type="submit" class="submit" value="搜 索"></form>
        </div>
        <span id="searchslideup_btn" class="pngFix" style="background-position:0px -48px;">自动收缩</span>
        <!--        <a href="http://www.meishij.net" class="bottomlogo_60"><img src="http://static.meishij.net/images/bottomlogo_60.png"></a>-->
        <!--		--><!--<span id="searchslideup_btn" class="pngFix"--><!---->自动收缩--&gt;    </div>
</div>
<div class="bottom_back_top_top bottom_back_top_top_slideUp" id="bottom_back_top_top"
     style="left: 1169px; bottom: 20px;"><a href="http://www.meishij.net/#" class="backtotop pngFix">回到顶部</a></div>

<div id="main">
    
    <!--<div class="main_w clearfix">-->
    <div class="main clearfix">
        <ul class="pathstlye1">
            <li><a id="tongji_shouye" href="">首页</a></li>
            <li> &gt; </li>
            <li><a id="tongji_caipudaquan" href=""><?php echo ($category["name"]); ?></a></li>
            <li> &gt; </li>
            <li>
                <a id="tongji_toolbar_10270" class="curzt" href=""><?php echo ($fenlei["name"]); ?></a>
            </li>
        </ul>
        <div class="cp_header clearfix">
            <div class="cp_headerimg_w"><img alt="<?php echo ($article["title"]); ?>"
                                             src="<?php echo ($article["thumb"]); ?>"></div>
            <div class="cp_main_info_w">
                <div class="info1">
                    <h1 class="title">
                        <a id="tongji_title" title="<?php echo ($article["title"]); ?>" href=""><?php echo ($article["title"]); ?></a>
                    </h1>
                    <div class="erweima_t" id="erweima_t"></div>
                    <div class="ewmbox" id="ewmbox">


                    <span class="favbtns">
                        <a href="javascript:add_fav(1802555)" title="韭菜花木耳炒鱼皮的做法" class="addToFav_con"
                           id="addToFav_con">收藏<span id="f_num"></span></a><div id="bdshare"
                                                                                class="bdshare_b"><div
                            class="bdsharebuttonbox" data-tag="share_1"
                            style="height:50px;width:168px;background:#f5f5f5;position:relative;float:left;line-height:50px;"><a
                            class="bds_more" data-cmd="more"
                            style="display:block;position:absolute;left:0px;top:0px;height:48px;width:167px;text-indent:-9999px;background:none;margin:0px;padding:0px;border:1px solid #e5e5e5;border-left:0px;">更多</a><span
                            style="display:block;height:50px;font-size:14px;font-weight:bold;color:#999;width:78px;text-align:right;float:left;">分享到：</span><a
                            class="bds_sqq" data-cmd="sqq" style="margin-top:17px;position:relative;"></a><a
                            class="bds_qzone" data-cmd="qzone"
                            href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                            style="margin-top:17px;position:relative;"></a><a class="bds_tsina" data-cmd="tsina"
                                                                              style="margin-top:17px;position:relative;"></a></div></div></span>
                    </div>
                    <div class="info2">
                        <ul class="clearfix">
                            <li class="w127"><strong>工艺</strong>
                                <a id="tongji_gy" href="javascript:;" title="韭菜花木耳炒鱼皮的工艺" class="big">炒</a>
                            </li>
                            <li class="w270"><strong>难度</strong>
                                <div class="processing_w"><span class="icon icon_nd"></span>
                                    <span class="processing processing_nd1"></span>
                                    <a id="tongji_nd" href="javascript:;" title="<?php echo ($article["title"]); ?>的难度" class="small">新手尝试</a>
                                </div>
                            </li>
                            <li class="w270 br0"><strong>人数</strong>
                                <div class="processing_w"><span class="icon icon_rs"></span><span
                                        class="processing processing_nd9"></span><a id="tongji_rsh" href="javascript:;"
                                                                                    title="韭菜花木耳炒鱼皮的人数"
                                                                                    class="small">3人份</a></div>
                            </li>
                            <li class="w127 bb0"><strong>口味</strong><a id="tongji_kw" href="javascript:;"
                                                                       title="韭菜花木耳炒鱼皮的口味" class="big">家常味</a></li>
                            <li class="w270 bb0"><strong>准备时间</strong>
                                <div class="processing_w"><span class="icon icon_zb"></span><span
                                        class="processing processing_nd3"></span><a id="tongji_zbsj" href="javascript:;"
                                                                                    title="韭菜花木耳炒鱼皮的准备时间"
                                                                                    class="small">10分钟</a></div>
                            </li>
                            <li class="w270 bb0 br0"><strong>烹饪时间</strong>
                                <div class="processing_w"><span class="icon icon_pr"></span><span
                                        class="processing processing_nd3"></span><a href="javascript:;" id="tongji_prsj"
                                                                                    title="韭菜花木耳炒鱼皮的烹饪时间" class="small">
                                    &lt;10分钟</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="info3">
                        <div class="user">
                            <a target="_blank" id="tongji_author_img" href="http://i.meishi.cc/cook.php?id=4152544"
                               class="img"><img src="/Public/assets/images/t4152544_146735079253533.jpg"><span
                                    class="masker pngFix"></span></a>
                            <div class="info">
                                <h4>
                                    <a id="tongji_author" target="_blank"
                                       href="http://i.meishi.cc/cook.php?id=4152544">火镀红叶</a>
                                    <a target="_blank" class="v_small" href="http://i.meishi.cc/expert/" title="达人"
                                       _hover-ignore="1"></a>
                                </h4>
                                <span>菜谱：338　/　关注：41　/　粉丝：4736</span>
                                <strong>2016-11-13　/　<em id="viewclicknum">640</em>人看过</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cp_body clearfix">
                <div class="cp_body_left">
                    <div class="materials">
                        <p><strong>“</strong>海鲩的鱼皮挺爽实的，炒起来不易烂，搭上韭菜花和木耳，好吃又下饭。<strong>”</strong></p>
                        <strong class="cpc_h2">用料</strong>
                        <div class="materials_box">
                            <div class="yl zl clearfix">
                                <h3><a href="javascript:;" title="韭菜花木耳炒鱼皮的主料">主料</a></h3>
                                <ul class="clearfix">
                                    <li class=""><a target="_blank" href="" class="img">
                                        <img src="<?php echo ($article["thumb"]); ?>"></a>
                                        <div class="c"><h4><a target="_blank"
                                                              href="http://www.meishij.net/%E9%B1%BC%E7%9A%AE">鱼皮</a><span>200克</span>
                                        </h4><a href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                                class="fortb" data-type="2" biz-keyword="鱼皮 鲜" biz-category="50016422"
                                                data-style="1" data-tmpl="290x380" target="_blank"></a></div>
                                    </li>
                                    <li class="br0"><a target="_blank"
                                                       href="http://www.meishij.net/%E9%9F%AD%E8%8F%9C%E8%8A%B1"
                                                       class="img"><img
                                            src="/Public/assets/images/f2909bfba5f269c673d95964ef5fa92a_60x60.jpg"></a>
                                        <div class="c"><h4><a target="_blank"
                                                              href="http://www.meishij.net/%E9%9F%AD%E8%8F%9C%E8%8A%B1">韭菜花</a><span>100克</span>
                                        </h4><a href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                                class="fortb" data-type="2" biz-keyword="韭菜花 鲜" biz-category="50016422"
                                                data-style="1" data-tmpl="290x380" target="_blank"></a></div>
                                    </li>
                                    <li class=""><a target="_blank"
                                                    href="http://www.meishij.net/%E6%9C%A8%E8%80%B3(%E6%B0%B4%E5%8F%91)"
                                                    class="img"><img
                                            src="/Public/assets/images/47e2a979fc424662c3eb65426605a68c_60x60.jpg"></a>
                                        <div class="c"><h4><a target="_blank"
                                                              href="http://www.meishij.net/%E6%9C%A8%E8%80%B3(%E6%B0%B4%E5%8F%91)">木耳干</a><span>10克</span>
                                        </h4><a href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                                class="fortb" data-type="2" biz-keyword="木耳干 鲜" biz-category="50016422"
                                                data-style="1" data-tmpl="290x380" target="_blank"></a></div>
                                    </li>
                                    <li class="br0"><a target="_blank" href="http://www.meishij.net/%E5%A7%9C"
                                                       class="img"><img
                                            src="/Public/assets/images/f8c7dfc3756fa9bd82f4559f6eeb39ce_60x60.jpg"></a>
                                        <div class="c"><h4><a target="_blank"
                                                              href="http://www.meishij.net/%E5%A7%9C">姜</a><span>10克</span>
                                        </h4><a href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                                class="fortb" data-type="2" biz-keyword="姜 鲜" biz-category="50016422"
                                                data-style="1" data-tmpl="290x380" target="_blank"></a></div>
                                    </li>
                                    <li class=""><a target="_blank" href="http://www.meishij.net/%E8%91%B1" class="img"><img
                                            src="/Public/assets/images/37f498cd548cd6839138f8e8a5a97d22_60x60.jpg"></a>
                                        <div class="c"><h4><a target="_blank"
                                                              href="http://www.meishij.net/%E8%91%B1">葱</a><span>10克</span>
                                        </h4><a href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                                class="fortb" data-type="2" biz-keyword="葱 鲜" biz-category="50016422"
                                                data-style="1" data-tmpl="290x380" target="_blank"></a></div>
                                    </li>
                                    <li class="br0 bb0"><a target="_blank"
                                                           href="http://www.meishij.net/%E7%99%BD%E7%9A%AE%E8%92%9C"
                                                           class="img"><img
                                            src="/Public/assets/images/shicai25528_60x60.jpg"></a>
                                        <div class="c"><h4><a target="_blank"
                                                              href="http://www.meishij.net/%E7%99%BD%E7%9A%AE%E8%92%9C">蒜头</a><span>5克</span>
                                        </h4><a href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                                class="fortb" data-type="2" biz-keyword="蒜头 鲜" biz-category="50016422"
                                                data-style="1" data-tmpl="290x380" target="_blank"></a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="yl fuliao clearfix">
                                <h3><a href="javascript:;" title="韭菜花木耳炒鱼皮的辅料">辅料</a></h3>
                                <ul class="clearfix">
                                    <li class=""><h4><a target="_blank"
                                                        href="http://www.meishij.net/%E7%B2%BE%E7%9B%90">盐</a></h4>
                                        <span>2小匙</span><a
                                                href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                                class="fortb" data-type="2" biz-keyword="盐 鲜"
                                                biz-category="50016422" data-style="1" data-tmpl="290x380"
                                                target="_blank"></a></li>
                                    <li class="br0"><h4><a target="_blank"
                                                           href="http://www.meishij.net/%E8%83%A1%E6%A4%92%E7%B2%89">胡椒粉</a>
                                    </h4><span>1小匙</span><a
                                            href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                            class="fortb" data-type="2" biz-keyword="胡椒粉 鲜"
                                            biz-category="50016422" data-style="1" data-tmpl="290x380"
                                            target="_blank"></a></li>
                                    <li class=""><h4><a target="_blank"
                                                        href="http://www.meishij.net/%E9%B8%A1%E7%B2%89">鸡粉</a></h4>
                                        <span>1小匙</span><a
                                                href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                                class="fortb"
                                                data-type="2" biz-keyword="鸡粉 鲜" biz-category="50016422" data-style="1"
                                                data-tmpl="290x380" target="_blank"></a></li>
                                    <li class="br0"><h4><a target="_blank" href="http://www.meishij.net/%E7%B3%96">糖</a>
                                    </h4><span>1小匙</span><a
                                            href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                            class="fortb" data-type="2" biz-keyword="糖 鲜"
                                            biz-category="50016422" data-style="1" data-tmpl="290x380"
                                            target="_blank"></a></li>
                                    <li class=""><h4><a target="_blank"
                                                        href="http://www.meishij.net/%E7%94%9F%E7%B2%89">生粉</a></h4>
                                        <span>2小匙</span><a
                                                href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                                class="fortb"
                                                data-type="2" biz-keyword="生粉 鲜" biz-category="50016422" data-style="1"
                                                data-tmpl="290x380" target="_blank"></a></li>
                                    <li class="br0 bb0"><h4><a target="_blank"
                                                               href="http://www.meishij.net/%E8%9A%9D%E6%B2%B9">蚝油</a>
                                    </h4>
                                        <span>1匙</span><a
                                                href="http://www.meishij.net/zuofa/jiucaihuamuerchaoyupi.html#"
                                                class="fortb" data-type="2" biz-keyword="蚝油 鲜"
                                                biz-category="50016422" data-style="1" data-tmpl="290x380"
                                                target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--<div class="measure">-->
                        <!--<h2 class="cpc_h2">韭菜花木耳炒鱼皮的做法</h2>-->
                        <!--<div class="editnew edit">-->
                            <!--<div class="content clearfix">-->
                                <!--<em class="step">1.</em>-->
                                <!--<div class="c">-->
                                    <!--<p>各材料</p>-->
                                    <!--<p><img class="conimg" src="/Public/assets/images/n4152544_147893917831608.jpg"-->
                                            <!--alt=""></p></div>-->
                            <!--</div>-->
                            <!--<div class="content clearfix">-->
                                <!--<em class="step">2.</em>-->
                                <!--<div class="c">-->
                                    <!--<p>木耳用沸水煮10分钟左右，捞起待用</p>-->
                                    <!--<p><img class="conimg" src="/Public/assets/images/n4152544_147893918265156.jpg"-->
                                            <!--alt=""></p></div>-->
                            <!--</div>-->
                            <!--<div class="content clearfix">-->
                                <!--<em class="step">3.</em>-->
                                <!--<div class="c">-->
                                    <!--<p>鱼皮用所有调味料腌10分钟</p>-->
                                    <!--<p><img class="conimg" src="/Public/assets/images/n4152544_147893918884040.jpg"-->
                                            <!--alt=""></p></div>-->
                            <!--</div>-->
                            <!--<div class="content clearfix">-->
                                <!--<em class="step">4.</em>-->
                                <!--<div class="c">-->
                                    <!--<p>热锅，用油爆香蒜片</p>-->
                                    <!--<p><img class="conimg" src="/Public/assets/images/n4152544_147893919384057.jpg"-->
                                            <!--alt=""></p></div>-->
                            <!--</div>-->
                            <!--<div class="content clearfix">-->
                                <!--<em class="step">5.</em>-->
                                <!--<div class="c">-->
                                    <!--<p>下腌好的鱼皮与姜丝</p>-->
                                    <!--<p><img class="conimg" src="/Public/assets/images/n4152544_147893919893409.jpg"-->
                                            <!--alt=""></p></div>-->
                            <!--</div>-->
                            <!--<div class="content clearfix">-->
                                <!--<em class="step">6.</em>-->
                                <!--<div class="c">-->
                                    <!--<p>煎炒一下至鱼皮卷起</p>-->
                                    <!--<p><img class="conimg" src="/Public/assets/images/n4152544_147893920066246.jpg"-->
                                            <!--alt=""></p></div>-->
                            <!--</div>-->
                            <!--<div class="content clearfix">-->
                                <!--<em class="step">7.</em>-->
                                <!--<div class="c">-->
                                    <!--<p>下韭菜花与木耳，炒透</p>-->
                                    <!--<p><img class="conimg" src="/Public/assets/images/n4152544_147893920495964.jpg"-->
                                            <!--alt=""></p></div>-->
                            <!--</div>-->
                            <!--<div class="content clearfix">-->
                                <!--<em class="step">8.</em>-->
                                <!--<div class="c">-->
                                    <!--<p>下葱，即可关火上碟</p>-->
                                    <!--<p><img class="conimg" src="/Public/assets/images/n4152544_147893921273078.jpg"-->
                                            <!--alt=""></p></div>-->
                            <!--</div>-->
                            <!--<p><img style="margin:0 0 0 100px;" class="conimg" border="0"-->
                                    <!--src="/Public/assets/images/n4152544_147893924304092.jpg"></p>-->
                            <!--<p><img style="margin:0 0 0 100px;" class="conimg" border="0"-->
                                    <!--src="/Public/assets/images/n4152544_147893925351068.jpg"></p>-->
                            <!--<p><img style="margin:0 0 0 100px;" class="conimg" border="0"-->
                                    <!--src="/Public/assets/images/n4152544_147893925985265.jpg"></p>-->
                        <!--</div>-->

                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>

</div>

<div class="main_footer pngFix">

    <div class="footer_con2">
        <dl class="friend_link clearfix">
            <dt>友情链接</dt>
            <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><dd><a target="_blank" href="<?php echo ($l["url"]); ?>" title="<?php echo ($l["name"]); ?>"><?php echo ($l["name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
        </dl>
    </div>
    <div class="footer_con3">
        <ul class="clearfix">
            <li><a target="_blank" href="http://www.meishij.net/siteinfo/index.php" title="公司简介">公司简介</a></li>
            <li><a target="_blank" href="http://www.meishij.net/siteinfo/index.php#qywh" title="企业文化">企业文化</a></li>
            <li><a target="_blank" href="http://www.meishij.net/siteinfo/index.php#gsdt" title="公司动态">公司动态</a></li>
            <li><a target="_blank" href="http://www.meishij.net/siteinfo/index.php#mzsm" title="免责声明">免责声明</a></li>
            <li><a target="_blank" href="http://www.meishij.net/siteinfo/contact.php" title="联系我们">联系我们</a></li>
            <li><a target="_blank" href="http://www.meishij.net/siteinfo/hr.php" title="招贤纳士">招贤纳士</a></li>
            <li><a target="_blank" href="http://www.meishij.net/siteinfo/bd.php" title="商务合作">商务合作</a></li>
            <li><a target="_blank" href="http://www.meishij.net/siteinfo/maps.php" title="网站地图">网站地图</a></li>
            <li><a target="_blank" href="http://www.meishij.net/siteinfo/links.php" title="友情链接">友情链接</a></li>
            <li><a target="_blank" href="http://sj.meishi.cc/" title="美食杰移动APP">美食杰移动APP</a></li>
        </ul>
        <p><a target="_blank" href="http://www.miibeian.gov.cn/" class="gray_a">京ICP证150335号</a>/京公网安备11010802009977
            Copyright © 2003-2016 MEISHIJ CO.,LTD.</p>
    </div>
</div>
<div style="display:none;">
    <script type="text/javascript" src="/Public/assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/Public/assets/js/list.js"></script>
    <script type="text/javascript" src="/Public/assets/js/main.js"></script>
    <span id="cnzz_stat_icon_1259001544"></span>
    <script src="/Public/assets/stat.php" type="text/javascript"></script>
    <script src="/Public/assets/qrcode_wap.php" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#main_nav li").hover(function () {
                $(this).siblings().removeClass("on");
                $(this).addClass("on");
            }, function () {
                $(this).removeClass("on");
            });
            $("#main_nav li").click(function () {
                $(this).css("border-bottom-color", "red").show();

            })
        })

    </script>
    
    <script src="/Public/assets/click.php"></script>
    <script src="/Public/assets/qrcode_wap.php"></script>
    <script src="/Public/assets/stat.php"></script>
    <script src="/Public/assets/stat(1).php"></script>
    <script src="/Public/assets/loginheader_n2.php"></script>

</div>
</body>
</html>