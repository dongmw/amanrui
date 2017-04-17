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
    
    <div class="main_w clearfix">
        <div class="main">
            <div class="bbtitles">
                家常好味道，给你家一般的温暖
            </div>

            <div class="fliterstyle1" id="fliterstyle1">
                <div class="fliterstyle1_main">
                    <ul class="tab">
                        <li class="li1" po="1"><a href="">普通筛选</a></li>
                        <li class="li2 current" po="2"><a href="">食材筛选</a><span class="littletips_new"></span></li>
                    </ul>
                    <div class="tabcon" id="po1" po="1" style="display:none">
                        <dl class="clearfix">
                            <dt class="pngFix">选择难度</dt>
                            <dd class="clearfix">
                                <a href="">新手尝试</a>
                                <a href="">初级入门</a>
                                <a href="">初中水平</a>
                                <a href="">中级掌勺</a>
                                <a href="">高级厨师</a>
                                <a href="">厨神级</a>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt class="pngFix">选择工艺</dt>
                            <dd class="clearfix bb0">
                                <a href="">炒</a>
                                <a href="">蒸</a>
                                <a href="">煮</a>
                                <a href="">炖</a>
                                <a href="">拌</a>
                                <a href="">烧</a>
                                <a href="">煎</a>
                                <a href="">炸</a>
                                <a href="">烘焙</a>
                                <a href="">微波</a>
                                <div class="others">
                                    <a href="">烤</a>
                                    <a
                                        href="">煲</a><a
                                        href="">焖</a><a
                                        href="">冻</a><a
                                        href="">烙</a><a
                                        href="">砂锅</a><a
                                        href="">腌</a><a
                                        href="">卤</a><a
                                        href="">酱</a><a
                                        href="">烩</a><a
                                        href="">扒</a><a
                                        href="">爆</a><a
                                        href="">炝</a><a
                                        href="">熘</a><a
                                        href="">熏</a><a
                                        href="">汆</a><a
                                        href="">拔丝</a><a
                                        href="">榨汁</a><a
                                        href="">灼</a><a
                                        href="">泡</a><a
                                        href="">腊</a><a
                                        href="">糖蘸</a><a
                                        href="">干锅</a><a
                                        href="">焗</a><a
                                        href="">干煸</a><a
                                        href="">煨</a><a
                                        href="">其他</a>
                                </div>
                            </dd>
                            <dd class="long clearfix filter_otherbtn">展开全部 &gt;&gt;</dd>
                        </dl>
                        <dl class="clearfix">
                            <dt class="pngFix">选择口味</dt>
                            <dd class="clearfix">
                                <a href="">家常味</a><a
                                    href="">香辣味</a><a
                                    href="">咸鲜味</a><a
                                    href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=185">甜味</a><a
                                    href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=182">酸甜味</a><a
                                    href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=180">酸辣味</a><a
                                    href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=177">麻辣味</a><a
                                    href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=170">酱香味</a><a
                                    href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=257">奶香味</a><a
                                    href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=183">蒜香味</a>
                                <div class="others"><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=188">鱼香味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=162">葱香味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=166">果味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=186">五香味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=173">咖喱味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=171">椒麻味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=179">茄汁味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=266">酸味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=174">苦香味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=169">姜汁味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=165">怪味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=172">芥末味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=167">红油味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=164">豆瓣味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=176">麻酱味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=264">黑椒味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=265">糊辣味</a><a
                                        href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;kw=189">其他</a>
                                </div>
                            </dd>
                            <dd class="long clearfix filter_otherbtn">展开全部 &gt;&gt;</dd>
                        </dl>
                        <dl class="clearfix">
                            <dt class="pngFix">选择时间</dt>
                            <dd class="clearfix"><a
                                    href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;mt=1">&lt;5分钟</a><a
                                    href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;mt=2">
                                &lt;10分钟</a><a href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;mt=3">
                                &lt;15分钟</a><a href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;mt=4">
                                &lt;30分钟</a><a href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;mt=5">
                                &lt;60分钟</a><a href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;mt=6">
                                &lt;90分钟</a><a href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;mt=7">
                                &lt;2小时</a><a href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;mt=8">
                                &lt;数小时</a><a href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;mt=9">
                                &lt;一天</a><a href="http://www.meishij.net/list.php?sortby=update&amp;lm=270&amp;mt=10">
                                &lt;数天</a></dd>
                        </dl>
                    </div>
                    <div class="tabcon" po="2" id="po2">
                        <div class="tabcon_scsearch">
                            <div class="w">
                                <input type="text" class="text" name="q" id="yl_q" defaultval="请输入您想查找的食材"
                                       value="请输入您想查找的食材" autocomplete="off" onfocus="" onblur="">
                                <input type="button" onclick="list_add_shicai()" class="submit pngFix" value=" ">
                            </div>
                        </div>
                        <dl class="clearfix on">
                            <dt class="pngFix">按数量排序</dt>
                            <dd class="clearfix row2">

                            </dd>
                            <dd class="long clearfix filter_otherbtn">展开全部 &gt;&gt;</dd>
                        </dl>
                    </div>
                </div>
                <div style="padding-top:20px;width:232px;overflow:hidden;">
                    <div id="_q1c9aacm70kleo8mlcehlg14i"></div>
                </div>
            </div>

            <div class="listtyle1_w" id="listtyle1_w">
                <div class="listtyle1_list clearfix" id="listtyle1_list">
                    <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><div class="listtyle1">
                            <input type="hidden" name="id" id="<?php echo ($article["id"]); ?>">
                            <a target="_blank" href="<?php echo ($article["link"]); ?>" title="<?php echo ($article["title"]); ?>" class="big">
                                <img class="img" alt="<?php echo ($article["title"]); ?>" src="<?php echo ($article["thumb"]); ?>">
                                <div class="i_w">
                                    <div class="i" style="margin-top: 0px;">
                                        <div class="c1">
                                            <strong><?php echo ($article["title"]); ?></strong><span>10 评论  434 人气</span><em>火镀红叶</em>
                                        </div>
                                        <div class="c2">
                                            <ul>
                                                <li class="li1">8步 / 大概10分钟</li>
                                                <li class="li2">炒 / 家常味</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>

                </div><!-- listtyle1_list end -->
                <div class="listtyle1_page">
                    <div class="listtyle1_page_w">
                        <?php echo ($page); ?>
                    </div>
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
    
    <script type="text/javascript">
        $(function () {
            $(".listtyle1").on("mouseenter", function () {
                var _this = $(this);
                _this.find("div.i").animate({marginTop: "-100px"}, 400, function () {
                });
            });
            $(".listtyle1").on("mouseleave", function () {
                var _this = $(this);
                _this.find("div.i").animate({marginTop: "0px"}, 400, function () {
                });
            });



            $(".left_arrow").click(function () {
                var _this = $(this);
                var _ul = _this.next().find("ul");

                _ul.animate({"margin-left": "0px"}, 400, function () {
                    _ul.find("li").last().prependTo(_ul);
                    _ul.css("margin-left", "-130px");
                });
            });
            $(".right_arrow").click(function () {
                var _this = $(this);
                var _ul = _this.prev().find("ul");
                _ul.animate({"margin-left": "-260px"}, 400, function () {
                    _ul.find("li").first().appendTo(_ul);
                    _ul.css("margin-left", "-130px");
                });
            });
            $(".listtyle1 .info2").on("mouseenter", function () {
                var _this = $(this);
                _this.find(".info2_c").stop().animate({left: "0px", opacity: "1"}, 800, function () {
                });
            });
            $(".listtyle1 .info2").on("mouseleave", function () {
                var _this = $(this);
                _this.find(".info2_c").stop().animate({left: "232px", opacity: "0"}, 800, function () {
                });
            });
            $(".filter_otherbtn").toggle(function () {
                var _this = $(this);
                _this.html("<< 收起");
                $(this).prev().find(".others").fadeIn(function () {

                });
            }, function () {
                var _this = $(this);
                _this.html("展开全部 >>");
                $(this).prev().find(".others").fadeOut(function () {

                });
            });

            $("#fliterstyle1 dt").click(function () {
                var _this = $(this);
                if (_this.parent().hasClass("on")) {
                } else {
                    _this.parents(".tabcon").find("dl.on").find("dd").slideUp(function () {
                    });
                    _this.parents(".tabcon").find("dl.on").removeClass("on");
                    _this.next().slideDown(function () {
                        _this.parent().find(".long").slideDown();
                    });
                    _this.parent().addClass("on");
                }
            });
            $("#fliterstyle1 .tab li").click(function () {
                var po = $(this).attr("po");
                if (!$(this).hasClass("current")) {
                    $(this).siblings().removeClass("current");
                    $(this).addClass("current");
                }
                $("#fliterstyle1 .tabcon").each(function () {
                    if ($(this).attr("po") == po) {
                        $(this).siblings(".tabcon").hide();
                        $(this).show();
                    }
                });
            });
            $("#cdlists li").click(function () {
                var _this = $(this);
                var po = _this.attr("po");
                if ($("#cdlist .cdlist_w[po='" + po + "']").length > 0) {

                    _this.siblings().removeClass("current");
                    _this.addClass("current");
                    $("#cdlist .loading").hide();
                    $(".cdlist_w").removeClass("cdlist_w_current");
                    $("#cdlist .cdlist_w[po='" + po + "']").addClass("cdlist_w_current");
                } else {
                    $(".cdlist_w").removeClass("cdlist_w_current");
                    $("#cdlist .loading").css("display", "block");
                    _this.siblings().removeClass("current");
                    _this.addClass("current");

                    $.post("ajax_cdlist.html", {name: "John", time: "2pm"},
                            function (data) {

                                $(".cdlist_w").removeClass("cdlist_w_current");
                                $("#cdlist .loading").hide();
                                $("#cdlist").append(data);

                            });
                }
            });
            var id = 0;
            var lists_url = "<?php echo U('lists');?>";
            $.getJSON('lists_url',{id:id},function (data) {
                console.log(data);
                var html = " ";
                $.each(data,function (k, v) {
                    html +='<a href=""><span class="yjtip">'+ 应季 +'</span><strong>'+ k +'</strong><em>925</em></a>'

                });
                $(".row2").append('html');

            })


        })
    </script>

</div>
</body>
</html>