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
        <div class="main clearfix">
            <ul class="pathstlye1">
                <li><a id="tongji_shouye" href="/">首页</a></li><li> &gt; </li><li><a href="/jiankang/">健康</a></li><li> &gt; </li><li><a id="tongji_toolbar_10019" class="curzt" href="http://www.meishij.net/jiankang/changshi/">#饮食小常识#</a> <a id="tongji_toolbar_10350" class="curzt" href="http://www.meishij.net/jiankang/shipinanquan/">#食品安全#</a> <a id="tongji_toolbar_10376" class="curzt" href="http://www.meishij.net/jiankang/yinshixinwen/">#饮食新闻#</a></li>	</ul>
            <div class="cp_body clearfix">
                <div class="cp_body_left">
                    <div class="artical_title_w">
                        <h1 class="title"><a title="辟谣：蘑菇茄子同食会中毒？" href="/changshi/biyaomoguqiezitongshihuizhongdu.html">辟谣：蘑菇茄子同食会中毒？</a></h1>
                        <div class="user">						<a target="_blank" href="http://i.meishi.cc/cook.php?id=8472853" class="img"><img src="http://site.meishij.net/user/103/141/t8472853_147442267136995.jpg"><span class="masker pngFix"></span></a>
                            <div class="info">
                                <h4>作者：<a target="_blank" href="http://i.meishi.cc/cook.php?id=8472853">诸葛白少侠</a></h4>
                                <strong>2016-11-11　/　<em id="viewclicknum">4615</em>人看过　/　<a href="#pl">评论（7）</a></strong>
                            </div>
                            <span class="favbtns"><a href="javascript:add_fav(1802386)" title="辟谣：蘑菇茄子同食会中毒？的做法" class="addToFav_con" id="addToFav_con">收藏<span id="f_num"></span></a><div id="bdshare" class="bdshare_b"><div class="bdsharebuttonbox" data-tag="share_1" style="height:40px;width:162px;background:#f5f5f5;position:relative;float:left;line-height:40px;"><a class="bds_more" data-cmd="more" style="display:block;position:absolute;left:0px;top:0px;height:38px;width:162px;text-indent:-9999px;background:none;margin:0px;padding:0px;border:1px solid #e5e5e5;border-left:0px;">更多</a><span style="display:block;height:40px;font-size:14px;font-weight:bold;color:#999;width:78px;text-align:right;float:left;padding:0px;line-height:40px;">分享到：</span><a class="bds_sqq" data-cmd="sqq" style="margin-top:12px;position:relative;"></a><a class="bds_qzone" data-cmd="qzone" href="#" style="margin-top:12px;position:relative;"></a><a class="bds_tsina" data-cmd="tsina" style="margin-top:12px;position:relative;"></a></div></div></span>
                        </div></div>
                    <div class="measure">
                        <div class="edit editwz" data-plugin="keyword">
                            <p>&nbsp; &nbsp; &nbsp; &nbsp;原标题：蘑菇和茄子一起吃会中毒?专家：不相克还会相互促进</p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp;“最近雨水多，蘑菇上市!但菌类不能和茄子一起吃，各位知道了吗?蘑菇可以和小白菜一起炒，但不能和茄子一起吃，会中毒;在水焯蘑菇的时候放大蒜，如果大蒜变色了，就有毒，不可食用。且蘑菇和小米、大黄米最好不要同吃，会产生一种毒素，医院治不好，后果很严重。望大家相互转告!”</p>
                            <p>　　这样一条信息传播后，让市民王先生感到惊诧!这种说法是否靠谱?</p>
                            <p style="text-align: center;"><img class="conimg" alt="辟谣：蘑菇茄子同食会中毒？At.jpg" src="http://images.meishij.net/p/20161111/d9db1fb2402a6bc17d77a25de920e50a.jpg" width="600" height="450"></p>
                            <p>　　昨日，沈阳市健康教育中心营养专家李楠表示，蘑菇和茄子、小米、大黄米等同吃会导致中毒的说法完全缺乏科学依据。</p>
                            <p>　　如果误食毒蘑菇后，是会出现中毒的症状，但平时菜市场上卖的蘑菇、香菇等都很安全，而且所谓大蒜验毒的说法也不靠谱，大蒜里的活性物质有一定的杀菌作用，但无法验毒和解毒!</p>
                            <p>　　李楠说，上述说法是典型的饮食误区，蘑菇的主要营养成分是蛋白质、维生素和氨基酸，蘑菇的蛋白质含量高于其他蔬菜，氨基酸、维生素含量非常丰富，蘑菇中的多糖类是抑制肿瘤生长的物质。</p>
                            <p>　　李楠说，茄子作为蔬菜主要含有维生素和矿物质，茄子中铁含量较高，茄子与蘑菇同食还能促进人体对蘑菇中蛋白质的吸收，两者是相互促进的作用，完全不会产生毒素。</p>
                            <p>　　多一点提醒</p>
                            <p>　　吃蘑菇确实应谨慎，但用大蒜检验不靠谱</p>
                            <p>　　李楠介绍，大蒜变色是正常的氧化反应，大蒜发生氧化先产生蒜绿素，接着变成蒜黄素，两种物质都是可以食用的。吃蘑菇确实应该谨慎，但用大蒜检验蘑菇是否有毒太不靠谱。大黄米、小黄米都属于主食，属于碳水化合物中的一种，与蘑菇同食会达到蛋白互补的作用，利于蘑菇营养成分的吸收。</p>
                            <p>　　来源：华商晨报</p>                    </div>
                        <span class="authors_copy_right"><strong>辟谣：蘑菇茄子同食会中毒？的版权归作者所有，没有作者本人的书面许可任何人不得转载或使用其中整体或任何部分内容。</strong><a target="_blank" title="打印辟谣：蘑菇茄子同食会中毒？" href="http://www.meishi.cc/print.php?id=1802386">打印菜谱</a></span><div style="width:640px;padding:0px 15px 20px;background:#f5f5f5;overflow:hidden;"><script>
                        (function() {
                            var s = "_" + Math.random().toString(36).slice(2);
                            document.write('<div id="' + s + '"></div>');
                            (window.slotbydup=window.slotbydup || []).push({
                                id: '437173',
                                container: s,
                                size: '642,90',
                                display: 'inlay-fix'
                            });
                        })();
                    </script><div id="_vel6azl7cfq97uloackgldi"></div></div>
                    </div>
                    <div class="cp_comment">
                        <script type="text/javascript">
                            //document.domain = "meishij.net";
                            $(function(){
                                $("#addToFav_con").click(function(){
                                    Alert("", "iframe:http://i.meishi.cc/ajax/add_caidan_new.php?id=1802386&title=辟谣：蘑菇茄子同食会中毒？", "600", "415", "false", "", "true", "img");
                                });
                            });
                            function saveComment(obj){
                                $(obj).ajaxSubmit(function(data) {
                                    alert(data);
                                });
                                return false;
                            }
                            function submit_reply(r_id) {
                                var saytext = $('#text_' + r_id).val();
                                var reply_id = $('#reply_id_' + r_id).val();
                                var news_id = $('#news_id').val();
                                if(saytext) {
                                    $('#text_' + r_id).val('');
                                    $.getScript('http://reply.meishij.net/pl/news.php?c=' + encodeURIComponent(saytext) + '&nid=' + news_id + '&rid=' + reply_id + '&_' +(new Date()).getTime(),function() {})	} else {
                                    alert('请输入内容~');
                                }
                            }
                            function submit_comment() {
                                var saytext = $('#cp_com_textarea').val();
                                var news_id = $('#news_id').val();
                                var cp_com_type = $('#cp_com_type').val();
                                if(saytext) {
                                    $('#cp_com_textarea').val('');
                                    $('#cp_com_textarea').keyup();
                                    $('#cp_com_type').val(0);
                                    $.getScript('http://reply.meishij.net/pl/news.php?c=' + encodeURIComponent(saytext) + '&nid=' + news_id + '&pt=' + cp_com_type + '&_' +(new Date()).getTime(),function() {})
                                } else {
                                    alert('请输入内容~');
                                }
                            }
                            function get_more_pl(id,page){
                                $('#newspls').html("<p style=\"text-align:center;padding:30px 0;\"><img src=\"http://www.meishij.net/static/images/loading.gif\" border=0 /></p>");
                                location.href = '#newspls';
                                var orderby= $("#comment_order").val();
                                if(orderby!='new' && orderby!='hot'){
                                    orderby='new';
                                }

                                $.post('/ajax/get_more_pl_n.php?id=' + id + '&page=' + page, {'orderby':orderby},
                                        function(data) {
                                            if(data != '') {
                                                $('#newspls').html(data);
                                                bind_re();
                                            }
                                        })
                            }
                            function add_fav(id) {
                                $.getScript('http://i.meishi.cc/ajax/add_nfav.php?in=1&obj_id=' + id + '&_' +(new Date()).getTime(),function() {})
                            }
                            function get_onclick(id, classid, from_search) {
                                var js = document.createElement("script");
                                js.language = "javascript";
                                js.src = "http://click.meishij.net/pl/click.php?from_search="+from_search+"&classid=" + classid + "&id=" + id + "&addclick=1&nr=0&_" +(new Date()).getTime() + "&c=|10376|10019|10350|";
                                //    js.src = "http://click.meishij.net/pl/click.php?from_search="+from_search+"&classid=" + classid + "&id=" + id + "&addclick=1&nr=//";
                                document.body.appendChild(js)
                            }
                            function canshu_error(){
                                alert('参数不合法!');
                            }
                            $(function(){
                                $(".similar_cp img,#listtyle1_w img,.userupload_box img").lazyload({
                                    placeholder :"http://css.meishij.net/n/images/grey.gif",
                                    effect:"fadeIn"
                                });
                                get_onclick(1802386,1,0);
                                var h1 = $("#fixedad").offset().top;
                                var h2;
                                var eh = $("#fixedad").height();
                                var h4 =($("#con_xscp").length > 0 && $("#con_xscp").offset().top) || $("#con_xscp2").offset().top;
                                $(window).scroll(function(){
                                    h2 = $(window).scrollTop();
                                    var h3 = h1-h2;
                                    if(h3<0){
                                        if((h4-h2)>eh){
                                            $("#fixedad").css({"position":"fixed","top":"0px"});
                                        }else if((h4-h2)<eh){
                                            $("#fixedad").css({"position":"absolute","top":"auto","bottom":"0px"});
                                        }
                                    }else if(h3>0){
                                        $("#fixedad").css({"position":"relative","top":"0px"});
                                    }
                                });
                                $(".userupload_box li").mouseenter(function(){
                                    var _this = $(this);
                                    _this.find(".zan").show();
                                });
                                $(".userupload_box li").mouseleave(function(){
                                    var _this = $(this);
                                    _this.find(".zan").hide();
                                });
                                $(".userupload_box  .zan").click(function(){
                                    var _this = $(this);
                                    var cid = _this.attr('value');
                                    var flag = _this.hasClass("zaned");
                                    var zan;
                                    if (flag) {
                                        zan = "zaned";
                                    } else {
                                        zan = "zan";
                                    }
                                    var js = document.createElement("script");
                                    js.language = "javascript";
                                    js.src = "http://reply.meishij.net/ajax/dish_zan.php?act="+zan+"&cid="+cid+"&_" +(new Date()).getTime();
                                    document.body.appendChild(js)
                                });
                                $("#erweima_t").hover(function(){
                                    $(this).addClass("erweima_t_hover");
                                    $("#ewmbox").show();
                                },function(){
                                    $(this).removeClass("erweima_t_hover");
                                    $("#ewmbox").hide();
                                });
                                $("#ewmbox").hover(function(){
                                    $(this).show();
                                    $("#erweima_t").addClass("erweima_t_hover");
                                },function(){
                                    $(this).hide();
                                    $("#erweima_t").removeClass("erweima_t_hover");
                                });
                                var hl = $(".cp_body_left").height();
                                var hr = $(".cp_body_right").height();
                                if(hr > hl){
                                    $(".cp_body_left").height(hr);
                                }
                                $(document).click(function(e){
                                    var targetid = $(e.target).attr("id");
                                    if(targetid != undefined && targetid != ''){
                                        $.getScript('http://mcstat.meishij.net/stat.php?p=' + targetid + '&_' +(new Date()).getTime(),function() {})
                                    }
                                });
                            });
                            $(function(){
                                $("#cp_comlist_tab1").click(function(){
                                    $("#comment_order").val('new');
                                    $(this).siblings().removeClass("current");
                                    $(this).addClass("current");
                                    get_more_pl(1802386,1);
                                });
                                $("#cp_comlist_tab2").click(function(){
                                    $("#comment_order").val('hot');
                                    $(this).siblings().removeClass("current");
                                    $(this).addClass("current");
                                    get_more_pl(1802386,1);
                                });
                                $(".zzzzan").live("click",function(){
                                    var _this = $(this);
                                    var news_id=$("#news_id").val();
                                    var plid=_this.attr('plid');

                                    if(_this.children('em').attr("class")=='con_comlist_zanbtn'){
                                        var zan=0;
                                    }else if(_this.children('em').attr("class")=='con_comlist_zanbtned'){
                                        var zan=1;
                                    }else{
                                        alert('出错了^_^');
                                        return false;
                                    }
                                    var news_pl_zan_url="http://reply.meishij.net/ajax/news_pl_zan.php";
                                    var cjs = document.createElement("script");
                                    cjs.language = "javascript";
                                    cjs.src = news_pl_zan_url+"?news_id="+news_id+"&plid="+plid+"&zan=" +zan;
                                    document.body.appendChild(cjs);
                                });
                            });
                        </script>
                        <a name="pl"></a>
                        <div class="cp_comments_list">
                            <div class="cp_com_form_w clearfix">
                                <a href="javascript:;" class="useravatar"><img src="http://css.meishij.net/q/images/default/q_default.png"></a>

                                <div class="form_w">
                                    <div class="cp_pl_tag" id="cp_com_mask">
                                        <em>给内容一个标签：</em><span class="current" type="3">随意吐槽</span><span type="1">提问求解</span>
                                    </div>
                                    <form>
                                        <input name="id" type="hidden" id="news_id" value="1802386">
                                        <textarea id="cp_com_textarea" placeholder="想说点什么..."></textarea>
                                        <input type="submit" id="cp_com_submit" value="提交" onclick="submit_comment()" class="submit">
                                        <input type="hidden" id="cp_com_type">
                                    </form>
                                </div>
                            </div>
                            <div class="cp_comlist_tab">
                                <strong>评论排序：</strong>
                                <span class="cp_comlist_tab1 current" id="cp_comlist_tab1">最新</span>
                                <span class="cp_comlist_tab2 " id="cp_comlist_tab2">最热</span>
                                <input type="hidden" id="comment_order" value="new">
                            </div>
                            <div id="newspls">
                                <div class="cp_comlist_w">
                                    <ul class="clearfix">
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=8946917" class="avatar"><img src="http://site.meishij.net/user/167/37/t8946917_147834861043486.jpg"><h5>杰米7444</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[提问求解]</strong>很好                                                                                                            </p>
                                                <div class="info">
                                        <span>
                                            2016-11-19 09:34:28来自                                                <a target="_blank" href="http://sj.meishi.cc/sj.php?to=wap">
                                                    美食杰Wap站                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_start">回复</a>
                                                    <span class="zzzzan" id="zzzzan4237911" plid="4237911">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix" style="display:none;">
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php" id="pl_3274263">
                                                        <input type="hidden" id="reply_id_3274263" value="3274263">
                                                        <textarea class="re_textarea" placeholder="我也说一句" id="text_3274263"></textarea>
                                                        <input type="button" onclick="submit_reply('3274263')" class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=8449132" class="avatar"><img src="http://site.meishij.net/user/132/46/t8449132_147418325624771.jpg"><h5>故乡路</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[提问求解]</strong>哦，这回知道了                                                                                                            </p>
                                                <div class="info">
                                        <span>
                                            2016-11-14 07:11:20来自                                                <a target="_blank" href="http://sj.meishi.cc/sj.php?to=wap">
                                                    美食杰Wap站                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_start">回复</a>
                                                    <span class="zzzzan" id="zzzzan4195599" plid="4195599">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix" style="display:none;">
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php" id="pl_3232275">
                                                        <input type="hidden" id="reply_id_3232275" value="3232275">
                                                        <textarea class="re_textarea" placeholder="我也说一句" id="text_3232275"></textarea>
                                                        <input type="button" onclick="submit_reply('3232275')" class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=8564653" class="avatar"><img src="http://css.meishij.net/images/default/tx2_3.png"><h5>Zoy(来自</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[随意吐槽]</strong>不会                                                                                                            </p>
                                                <div class="info">
                                        <span>
                                            2016-11-12 14:36:51来自                                                <a target="_blank" href="http://sj.meishi.cc/app.php?to=meishij">
                                                    美食杰Android客户端                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_start">回复</a>
                                                    <span class="zzzzan" id="zzzzan4183702" plid="4183702">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix" style="display:none;">
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php" id="pl_3220431">
                                                        <input type="hidden" id="reply_id_3220431" value="3220431">
                                                        <textarea class="re_textarea" placeholder="我也说一句" id="text_3220431"></textarea>
                                                        <input type="button" onclick="submit_reply('3220431')" class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=8845488" class="avatar"><img src="http://site.meishij.net/user/238/131/t8845488_147718028629280.jpg"><h5>洪荒之力</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[随意吐槽]</strong>不会                                                                                                            </p>
                                                <div class="info">
                                        <span>
                                            2016-11-12 06:06:13来自                                                <a target="_blank" href="http://sj.meishi.cc/app.php?to=meishij">
                                                    美食杰Android客户端                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_slideUp">收起回复</a>
                                                    <span class="zzzzan" id="zzzzan4179886" plid="4179886">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=8932299" class="avatar1"><img src="http://css.meishij.net/images/default/tx2_4.png"></a>
                                                            <div class="c1">
                                                                <p class="p2">
                                                                    <a target="_blank" href="http://i.meishi.cc/cook.php?id=8932299">杰米8932299</a>
                                                                    :阿达                                                                            </p>
                                                                <div class="info1"><span>2016-11-15 19:19:21 来自<a target="_blank" href="http://www.meishij.net/">美食杰</a></span></div>
                                                            </div>
                                                        </li>
                                                        <li class="clearfix">
                                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=8929570" class="avatar1"><img src="http://css.meishij.net/images/default/tx2_7.png"></a>
                                                            <div class="c1">
                                                                <p class="p2">
                                                                    <a target="_blank" href="http://i.meishi.cc/cook.php?id=8929570">SilenceH</a>
                                                                    :食品安全值得关注                                                                            </p>
                                                                <div class="info1"><span>2016-11-13 19:40:37 来自<a target="_blank" href="http://www.meishij.net/">美食杰</a></span></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:;" class="saybtn">我也说一句</a>
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php" id="pl_3216634">
                                                        <input type="hidden" id="reply_id_3216634" value="3216634">
                                                        <textarea class="re_textarea" placeholder="我也说一句" id="text_3216634"></textarea>
                                                        <input type="button" onclick="submit_reply('3216634')" class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cp_body_right" style="background-color: #fff;">
                    <div class="geat_one1" id="right_206660"><script>
                        (function() {
                            var s = "_" + Math.random().toString(36).slice(2);
                            document.write('<div id="' + s + '"></div>');
                            (window.slotbydup=window.slotbydup || []).push({
                                id: '206660',
                                container: s,
                                size: '300,250',
                                display: 'inlay-fix'
                            });
                        })();
                    </script><div id="_g4crck29a57trn2o87uy2e29"></div></div>
                    <div class="iphonestyle" id="right_phone">
                        <div class="iphonestyle_w">
                            <div class="iphonestyle_btns">
                                <a href="http://i.meishi.cc/g/transit.php?ename=276&amp;from=pccrightappg" target="_blank" class="a1">IOS版下载</a>
                                <a href="http://i.meishi.cc/g/transit.php?ename=275&amp;from=pccrightappg" target="_blank" class="a2">安卓版下载</a>
                            </div>
                            <div class="iphonestyle_iframe">
                                <iframe src="http://pshow.meishij.net/content/phone_index.html" width="262px" height="463px" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div><div class="geat_one1" id="right_255102"><script>
                    (function() {
                        var s = "_" + Math.random().toString(36).slice(2);
                        document.write('<div id="' + s + '"></div>');
                        (window.slotbydup=window.slotbydup || []).push({
                            id: '255102',
                            container: s,
                            size: '300,250',
                            display: 'inlay-fix'
                        });
                    })();
                </script><div id="_3dqh1dnlv57pkxtmveh6umzpvi"></div></div><!--<script type="text/javascript">document.write('<a style="display:none!important" id="tanx-a-mm_10008787_2640448_14520613"></a>');
	tanx_s = document.createElement("script");
	tanx_s.type = "text/javascript";
	tanx_s.charset = "gbk";
	tanx_s.id = "tanx-s-mm_10008787_2640448_14520613";
	tanx_s.async = true;
	tanx_s.src = "http://p.tanx.com/ex?i=mm_10008787_2640448_14520613";
	tanx_h = document.getElementsByTagName("head")[0];
	if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
	</script>--><div class="geat_one2" id="right_2357782"><script>
                    (function() {
                        var s = "_" + Math.random().toString(36).slice(2);
                        document.write('<div id="' + s + '"></div>');
                        (window.slotbydup=window.slotbydup || []).push({
                            id: '2357782',
                            container: s,
                            size: '300,500',
                            display: 'inlay-fix'
                        });
                    })();
                </script><div id="_85k161knxftwgs9fubk1yk3xr"></div></div><div class="geat_one4_2" id="right_736382"><script>
                    (function() {
                        var s = "_" + Math.random().toString(36).slice(2);
                        document.write('<div id="' + s + '"></div>');
                        (window.slotbydup=window.slotbydup || []).push({
                            id: '736382',
                            container: s,
                            size: '300,170',
                            display: 'inlay-fix'
                        });
                    })();
                </script><div id="_vyg2ldsdblcbjkfic44wpnwmi"></div></div><div class="fixedad" id="fixedad" style="width: 300px; height: 500px; background: rgb(221, 221, 221); position: absolute; top: auto; bottom: 0px;"><script>
                    (function() {
                        var s = "_" + Math.random().toString(36).slice(2);
                        document.write('<div id="' + s + '"></div>');
                        (window.slotbydup=window.slotbydup || []).push({
                            id: '244645',
                            container: s,
                            size: '300,250',
                            display: 'inlay-fix'
                        });
                    })();
                </script><div id="_n7jn54tguogqnwk4r4zrara4i"></div><script>
                    (function() {
                        var s = "_" + Math.random().toString(36).slice(2);
                        document.write('<div id="' + s + '"></div>');
                        (window.slotbydup=window.slotbydup || []).push({
                            id: '206661',
                            container: s,
                            size: '300,400',
                            display: 'inlay-fix'
                        });
                    })();
                </script><div id="_nd81mgog6314mrcr1qlqpk3xr"></div></div>
                </div>
            </div>
            <div class="bbtitles" id="con_xscp2">看过辟谣：蘑菇茄子同食会中毒？的人还喜欢看...</div><div id="dt_MRecVAV"></div>
        </div><script type="text/javascript">
        (function(win,doc){
            var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
            if(!win.alimamatk_show) {
                s.charset = "gbk";
                s.async = true;
                s.src = "http://a.alimama.cn/tkapi.js";
                s.kslite = "";
                h.insertBefore(s, h.firstChild);
            }
            var o = {
                pid:"mm_10008787_2640448_11521435",
                unid:"",
                rd:2,
                appkey:"",
                plugins:[{name:"keyword"}]
            };
            win.alimamatk_onload = win.alimamatk_onload || [];
            win.alimamatk_onload.push(o);
        })(window,document);
    </script>
        <script type="text/javascript">
            window["_BFD"] = window["_BFD"] || {};
            _BFD.BFD_INFO = {
                "title" :"辟谣：蘑菇茄子同食会中毒？",
                "pic" :"http://images.meishij.net/p/20161111/0ff2b10febaed9eaca2bdf12968c2ff7_150x150.jpg",
                "id" :"1802386",
                "url" :"http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html",
                "category" :[["饮食小常识","http://www.meishij.net/jiankang/changshi/"],["食品安全","http://www.meishij.net/jiankang/shipinanquan/"],["饮食新闻","http://www.meishij.net/jiankang/yinshixinwen/"]],
                "tag" :[],
                "author":"诸葛白少侠",
                "pinglun":"7",
                "renqi":"3239",
                "step":"",
                "gongyi":"",
                "nandu":"",
                "renshu":"",
                "kouwei":"",
                "zbshijian":"",
                "prshijian":"",
                "page_type" :"detail"
            };window["_BFD"] = window["_BFD"] || {};_BFD.client_id = "Cmeishijie";_BFD.script = document.createElement("script");_BFD.script.type = "text/javascript";_BFD.script.async = true;_BFD.script.charset = "utf-8";_BFD.script.src =(('https:' == document.location.protocol?'https://ssl-static1':'http://static1')+'.baifendian.com/service/meishijie/meishijie.js');document.getElementsByTagName("head")[0].appendChild(_BFD.script);</script>
        <script>window._bd_share_config = {common :{bdSnsKey :{"tsina":"3274300248"},bdText :'推荐一篇文章【辟谣：蘑菇茄子同食会中毒？】，很有用。（分享自 @美食杰网 ）',bdDesc :'',bdUrl :'http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html',bdPic :'http://images.meishij.net/p/20161111/0ff2b10febaed9eaca2bdf12968c2ff7_150x150.jpg',bdMiniList : ['mshare','qzone','tsina','tqq','huaban','renren','weixin','kaixin001','douban','tsohu','bdysc','sohu','t163','meilishuo','mogujie','tfh','fx','youdao']},share :[{"bdSize" :16}],selectShare :[{"bdselectMiniList" :['qzone','tsina','douban','tqq','renren']}]}
        with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];</script>
        <div style="display:none;"></div><script>
        (function() {
            var s = "_" + Math.random().toString(36).slice(2);
            document.write('<div id="' + s + '"></div>');
            (window.slotbydup=window.slotbydup || []).push({
                id: '1026794',
                container: s,
                size: '120,270',
                display: 'float'
            });
        })();
    </script><div id="_frr2dx50xpd2804tx9fgpsyvi"></div>
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
    
</div>
</body>
</html>