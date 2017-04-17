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
            <div class="index_zzw" id="index_zzw">
                <div class="index_zzw_main" id="index_zzw_main">
                    <div class="zzw_item zzw_item_1" po="1" c="1">
                        <h3 class="bbtitles bbtitles_zzw">今日早餐推荐：营养早餐，为健康加分</h3>
                        <ul class="clearfix">
                            <?php if(is_array($zaocan)): $i = 0; $__LIST__ = $zaocan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zc): $mod = ($i % 2 );++$i;?><li>
                                    <a target="_blank" href="<?php echo ($zc["link"]); ?>" title="<?php echo ($zc["title"]); ?>饼详解" class="img">
                                        <img alt="<?php echo ($zc["title"]); ?>" src="<?php echo ($zc["thumb"]); ?>">
                                    </a>
                                    <div class="c pngFix">
                                        <h2><a target="_blank" href="<?php echo ($zc["link"]); ?>" title="家庭版手抓饼详解"><?php echo ($zc["title"]); ?></a>
                                        </h2>
                                        <strong><?php echo ($zc["description"]); ?></strong>
                                        <span><a href="">补充能量</a><em class="arrow pngFix"></em></span>
                                    </div>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                    </div>
                    <div class="zzw_item zzw_item_2" po="2" c="2">
                        <h3 class="bbtitles bbtitles_zzw">今日午餐推荐：这些菜能让你多吃几碗米饭</h3>
                        <ul class="clearfix">
                            <?php if(is_array($zhongcan)): $i = 0; $__LIST__ = $zhongcan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zc): $mod = ($i % 2 );++$i;?><li>
                                    <a target="_blank" href="<?php echo ($zc["link"]); ?>" title="<?php echo ($zc["title"]); ?>" class="img">
                                        <img alt="<?php echo ($zc["title"]); ?>" src="<?php echo ($zc["thumb"]); ?>">
                                    </a>
                                    <div class="c pngFix">
                                        <h2><a target="_blank" href="<?php echo ($zc["link"]); ?>"
                                               title="<?php echo ($zc["title"]); ?>"><?php echo ($zc["title"]); ?></a></h2>
                                        <strong><?php echo ($zc["description"]); ?></strong>
                                        <span><a href="">温中散寒</a><em class="arrow pngFix"></em></span>
                                    </div>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                    </div>
                    <div class="zzw_item zzw_item_4" po="4" c="4">
                        <h3 class="bbtitles bbtitles_zzw">今日晚餐推荐：快手懒人菜，轻轻松松就搞定</h3>
                        <ul class="clearfix">
                            <?php if(is_array($wancan)): $i = 0; $__LIST__ = $wancan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wc): $mod = ($i % 2 );++$i;?><li>
                                    <a target="_blank" href="<?php echo ($wc["link"]); ?>" title="<?php echo ($wc["title"]); ?>" class="img">
                                        <img alt="<?php echo ($wc["title"]); ?>" src="<?php echo ($wc["thumb"]); ?>">
                                    </a>
                                    <div class="c pngFix">
                                        <h2><a target="_blank" href="<?php echo ($wc["link"]); ?>"
                                               title="<?php echo ($wc["title"]); ?>"><?php echo ($wc["title"]); ?></a></h2>
                                        <strong><?php echo ($wc["description"]); ?></strong>
                                        <span><a href="">补脑益智</a><em class="arrow pngFix"></em></span>
                                    </div>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                    </div>
                    <div class="zzw_item zzw_item_3" po="3" c="3">
                        <h3 class="bbtitles bbtitles_zzw">今日下午茶推荐：用水果养出好皮肤</h3>
                        <ul class="clearfix">
                            <li>
                                <a target="_blank" href="http://www.meishij.net/chufangmiaozhao/qiaobaoshiliu.html"
                                   title="石榴剥皮小窍门" class="img"><img alt="石榴剥皮小窍门"
                                                                    src="/Public/assets/images/8d1cc0c459f3c4bc20b61f324c540d72.jpg"></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="http://www.meishij.net/chufangmiaozhao/qiaobaoshiliu.html"
                                           title="石榴剥皮小窍门">石榴剥皮小窍门</a></h2>
                                    <strong>方便又快捷的石榴剥皮方法今日大放送</strong>
                                    <span><a href="http://www.meishij.net/####">助消化</a><em
                                            class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.meishij.net/zuofa/fengmiyouzicha_41.html"
                                   title="蜂蜜柚子茶"
                                   class="img"><img alt="蜂蜜柚子茶"
                                                    src="/Public/assets/images/9458709a9f0e9954431921f42e991558.jpg"></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank" href="http://www.meishij.net/zuofa/fengmiyouzicha_41.html"
                                           title="蜂蜜柚子茶">蜂蜜柚子茶</a></h2>
                                    <strong>只需一个柚子就能尽享原滋原味的蜂蜜柚子茶</strong>
                                    <span><a href="http://www.meishij.net/####">美容养颜</a><em
                                            class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.meishij.net/zuofa/lianruxiangjiaotangguo.html"
                                   title="创意香蕉糖果" class="img"><img alt="创意香蕉糖果"
                                                                   src="/Public/assets/images/ebaa5062cc548aa9a4745b6fea9f107f.jpg"></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="http://www.meishij.net/zuofa/lianruxiangjiaotangguo.html"
                                           title="创意香蕉糖果">创意香蕉糖果</a></h2>
                                    <strong>馄饨皮加香蕉，变身香蕉糖果，忍不住多吃几颗</strong>
                                    <span><a href="http://www.meishij.net/####">润肠道</a><em
                                            class="arrow pngFix"></em></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="zzw_item zzw_item_5" po="5" c="5">
                        <h3 class="bbtitles bbtitles_zzw">今日夜宵推荐：夜猫子的低卡夜宵</h3>
                        <ul class="clearfix">
                            <li>
                                <a target="_blank" href="http://www.meishij.net/zuofa/guandongzhu_6.html"
                                   title="暖身暖胃关东煮"
                                   class="img"><img alt="暖身暖胃关东煮"
                                                    src="/Public/assets/images/ffee98a8e9ae62861ddc08af2b32c83c.jpg"></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank" href="http://www.meishij.net/zuofa/guandongzhu_6.html"
                                           title="暖身暖胃关东煮">暖身暖胃关东煮</a></h2>
                                    <strong>在寒冷的夜晚，煮一锅热气腾腾的关东煮来取暖</strong>
                                    <span><a href="http://www.meishij.net/####">滋补脾胃</a><em
                                            class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.meishij.net/zuofa/jiachangqingtangmian.html"
                                   title="家常清汤面" class="img"><img alt="家常清汤面"
                                                                  src="/Public/assets/images/1d80fe88fb86a500cd53d095ececdfb6.jpg"></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank" href="http://www.meishij.net/zuofa/jiachangqingtangmian.html"
                                           title="家常清汤面">家常清汤面</a></h2>
                                    <strong>一碗简单清爽的汤面为今天划上完美的句号</strong>
                                    <span><a href="http://www.meishij.net/####">暖身生津</a><em
                                            class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.meishij.net/zuofa/feiyouzhasongcuijiliu.html"
                                   title="非油炸松脆鸡柳" class="img"><img alt="非油炸松脆鸡柳"
                                                                    src="/Public/assets/images/7975d2922ca1eb5d58b36740facc918c.jpg"></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="http://www.meishij.net/zuofa/feiyouzhasongcuijiliu.html"
                                           title="非油炸松脆鸡柳">非油炸松脆鸡柳</a></h2>
                                    <strong>不用油炸也能做出松脆的鸡柳，吃得健康也安心</strong>
                                    <span><a href="http://www.meishij.net/####">解馋</a><em
                                            class="arrow pngFix"></em></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="maskleft" id="maskleft"></div>
                <div class="maskright" id="maskright"></div>
                <div class="prev_btn prev_btn_1 pngFix" id="zzw_prev_btn" style="background-position: 0px 6px;"></div>
                <div class="next_btn next_btn_1 pngFix" id="zzw_next_btn"
                     style="background-position: -174px 6px;"></div>
                <div class="index_3meal_tab" id="index_timelinebox">
                    <div class="index_3meal_tab_w">
                        <span class="timex timex_0"><span>早餐时间</span></span>
                        <span class="timex timex_1"><span>午餐时间</span></span>
                        <span class="timex timex_2"><span>下午茶时间</span></span>
                        <span class="timex timex_3"><span>晚餐时间</span></span>
                        <span class="timex timex_4"><span>夜宵时间</span></span>
                    </div>
                    <div class="timeline_left"></div>
                    <div class="timeline_right"></div>
                    <span class="time time4" id="i_time4">4:00</span>
                    <span class="time time10" id="i_time10">10:00</span>
                    <span class="time time14" id="i_time14">14:00</span>
                    <span class="time time16" id="i_time16">16:00</span>
                    <span class="time time21" id="i_time21">21:00</span>
                    <span class="time time4_" id="i_time4_">4:00</span>
                </div>
            </div>
            <h3 class="bbtitles">11月，饮食应清补<span class="paixu"><a target="_blank" href="">更多菜单 &gt;</a></span>
            </h3>
            <div class="ztlist_style1 clearfix" id="ztlist_style1_index">
                <div id="index_cd_leftarrow"></div>
                <div id="index_cd_leftarrow_mask"></div>
                <div id="index_cd_rightarrow"></div>
                <div id="index_cd_rightarrow_mask" style=" display: none;"></div>
                <div class="ztlist_style1_item_w" id="ztlist_style1_item_w">
                    <div class="ztlist_style1_item_ww" id="ztlist_style1_item_ww" style="margin-left:0px;">
                        <div class="ztlist_style1_item_w1">
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/daren_task/article_detail.php?id=826&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/823931f46a4b1695623f6a9cec3aeb20.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/daren_task/article_detail.php?id=826&amp;from_s=home2">砂锅美食炖炖炖</a></strong>
                                                <p>赶走秋日凉意 让温暖来袭</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/20161019_supor_index3.php?from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/2ece7a37b74772de7ae1bdae02c185a0.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/20161019_supor_index3.php?from_s=home2">让食材相遇
                                                    用火候交手</a></strong>
                                                <p>苏泊尔《我是大厨师》第三季火热开赛！</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/daren_task/article_detail.php?id=543&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/0aae6cc6956a3f768d81f59cd687d474.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/daren_task/article_detail.php?id=543&amp;from_s=home2">超超超简单的3款红豆点心</a></strong>
                                                <p>甜香软糯最相思</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/daren_task/article_detail.php?id=593&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/b1b96e3b60450a0e6a726639932676f0.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/daren_task/article_detail.php?id=593&amp;from_s=home2">享誉大江南北的家常主食</a></strong>
                                                <p>一种安慰 关于胃和思念</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/zt.php?zt_id=187&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/b2f281a1db5a4fc3914fdbfe259d4fc3.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/zt.php?zt_id=187&amp;from_s=home2">明星主厨叶一茜热力直播</a></strong>
                                                <p>森蝶妈妈的烹饪秘籍！</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0 mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/daren_task/article_detail.php?id=864&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/325c7e9e9d352278111262dc0d3e0d8a.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/daren_task/article_detail.php?id=864&amp;from_s=home2">为了美食走江湖</a></strong>
                                                <p>九座城，九段旅程，九种气息</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ztlist_style1_item_w1">
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/daren_task/article_detail.php?id=917&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/bc5a7f431e95280163d094882f490c20.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/daren_task/article_detail.php?id=917&amp;from_s=home2">电饭煲万能美食攻略</a></strong>
                                                <p>一口电饭锅就足够</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/zt.php?zt_id=317&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/47a874a0483edcd43ff8be3cc4ba4a64.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/zt.php?zt_id=317&amp;from_s=home2">立冬勤补冬</a></strong>
                                                <p>你不可不知的饺子小秘诀</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/zt.php?zt_id=294&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/d49be13d75d5633e17926e751bc5fc14.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/zt.php?zt_id=294&amp;from_s=home2">幸福食光里的晨时之美</a></strong>
                                                <p>超省时早餐搭配，不用早起也能丰盛美味</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/zt.php?zt_id=290&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/160cd74ff81208ec9c5ce48984d2ce97.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/zt.php?zt_id=290&amp;from_s=home2">葱姜蒜那些事儿</a></strong>
                                                <p>你需要掌握的葱姜蒜科普贴</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/zt.php?zt_id=311&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/dbf1e6ca45e4d70192ff7ce3b6733bb7.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/zt.php?zt_id=311&amp;from_s=home2">不闻烟火气
                                                    但有生活香</a></strong>
                                                <p>她的食物没有保质期</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0 mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/zt.php?zt_id=270&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/670fe2b5ea8444698ea657c80bcf034f.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/zt.php?zt_id=270&amp;from_s=home2">牛排有学问，慧眼识真知</a></strong>
                                                <p>揭秘牛排内幕 | 水这么深，你还敢乱买吗</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ztlist_style1_item_w1">
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/zt.php?zt_id=283&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/233bf9b316db1319189b2a318f69edf1.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/zt.php?zt_id=283&amp;from_s=home2">鸡蛋之看我七十二变</a></strong>
                                                <p>满足你对鸡蛋的一切幻想</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/zt.php?zt_id=312&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/191a33a778e707ee8d9141cf3ecedaf8.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/zt.php?zt_id=312&amp;from_s=home2">小编亲测：巧切洋葱不流泪</a></strong>
                                                <p>为你挑选真正的不辣眼切法</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/zt.php?zt_id=306&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/733df8ef29fa9bdca648842cf0d2ab1f.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/zt.php?zt_id=306&amp;from_s=home2">麻辣诱惑——水煮肉</a></strong>
                                                <p>美食杰芬芳厨男子为你解密水煮肉</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/daren_task/article_detail.php?id=379&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/2ffefdb18f835696b1ce6626455eef8b.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/daren_task/article_detail.php?id=379&amp;from_s=home2">美食达人版块全新改版</a></strong>
                                                <p>更多好文好友好福利如期而至</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/huodong/20161024_midea.php?from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/184b3b5c7762823bd6afb9b6acdf0215.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/huodong/20161024_midea.php?from_s=home2">麦饭石胆·自然饭香</a></strong>
                                                <p>美的原生态AH煲新品试用火热进行中</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0 mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="http://i.meishi.cc/daren_task/article_detail.php?id=1230&amp;from_s=home2"
                                               class="img"><img
                                                    src="/Public/assets/images/d131625848ff2f1f102f62e5daa2790c.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="http://i.meishi.cc/daren_task/article_detail.php?id=1230&amp;from_s=home2">蔡澜死前必食之物</a></strong>
                                                <p>捞饭配猪油</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ztlist_cur" id="ztlist_cur"><span class="current"></span><span class=""></span><span
                    class=""></span></div>
            <h3 class="bbtitles">11月，初冬养肾气<span class="paixu"><a
                    href="">更多食材 &gt;</a></span>
            </h3>
            <div class="index_sc_w">
                <dl class="clearfix">
                    <dd class="index_sc_dd index_sc_dd_current"><a href="<?php echo ($shuiguo["link"]); ?>" class="link">水果</a>
                        <div class="index_sc_con">
                            <div class="c">
                                <?php if(is_array($shuiguo)): $i = 0; $__LIST__ = $shuiguo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sg): $mod = ($i % 2 );++$i;?><a target="_blank" href="<?php echo ($sg["link"]); ?>"><img src="<?php echo ($sg["thumb"]); ?>">
                                        <span class="name pngFix"><em class="notz"></em><strong><?php echo ($sg["title"]); ?></strong></span>
                                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </dd>
                    <dd class="index_sc_dd"><a href="<?php echo ($shucai["link"]); ?>" class="link">蔬菜</a>
                        <div class="index_sc_con">
                            <div class="c">
                                <?php if(is_array($shucai)): $i = 0; $__LIST__ = $shucai;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sc): $mod = ($i % 2 );++$i;?><a target="_blank" href="<?php echo ($sc["link"]); ?>"><img
                                            src="<?php echo ($sc["thumb"]); ?>"><span
                                            class="name pngFix"><em
                                            class="notz"></em><strong><?php echo ($sc["title"]); ?></strong></span></a><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </dd>
                    <dd class="index_sc_dd"><a href="<?php echo ($wugu["link"]); ?>" class="link">五谷</a>
                        <div class="index_sc_con">
                            <div class="c">
                                <?php if(is_array($wugu)): $i = 0; $__LIST__ = $wugu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wg): $mod = ($i % 2 );++$i;?><a target="_blank" href="<?php echo ($wg["link"]); ?>">
                                        <img src="<?php echo ($wg["thumb"]); ?>"><span class="name pngFix"><em class="notz"></em><strong><?php echo ($wg["title"]); ?></strong></span>
                                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </dd>
                    <dd class="index_sc_dd"><a href="<?php echo ($shengxian["link"]); ?>" class="link">生鲜</a>
                        <div class="index_sc_con">
                            <div class="c">
                                <?php if(is_array($shengxian)): $i = 0; $__LIST__ = $shengxian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sx): $mod = ($i % 2 );++$i;?><a target="_blank" href="<?php echo ($sx["link"]); ?>"><img
                                            src="<?php echo ($sx["thumb"]); ?>"><span
                                            class="name pngFix"><em
                                            class="notz"></em><strong><?php echo ($sx["title"]); ?></strong></span></a><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>
            <div class="index_pxw_ww">
                <div id="index_cp_leftarrow"></div>
                <div id="index_cp_leftarrow_mask"></div>
                <div id="index_cp_rightarrow"></div>
                <div id="index_cp_rightarrow_mask" style="display: none;"></div>
                <div class="index_pxw_w" id="index_pxw_w">
                    <div class="index_pxw clearfix" id="index_pxw" style="margin-left: 0px;">
                        <div class="index_pxi">
                            <h3 class="bbtitles">最新菜谱</h3>
                            <div class="listtyle2_w clearfix" id="listtyle1_w">
                                <div class="listtyle1_list clearfix" id="listtyle1_list">

                                    <!--<div class="listtyle1 ml0">-->
                                        <!--<a target="_blank"-->
                                           <!--href="http://www.meishij.net/zuofa/qiaokelihuaxingkaobingtaiyangmaozaocan.html"-->
                                           <!--title="巧克力花型烤饼｜太阳猫早餐" class="big">-->
                                            <!--<img class="img" alt="巧克力花型烤饼｜太阳猫早餐"-->
                                                 <!--src="/Public/assets/images/a6402006_147874886974592.jpg">-->
                                            <!--<div class="i_w">-->
                                                <!--<div class="i" style="margin-top: 0px;">-->
                                                    <!--<div class="c1">-->
                                                        <!--<strong>巧克力花型烤饼｜太阳猫早餐</strong><span>3 评论  0 人气</span><em>太阳猫早餐</em>-->
                                                    <!--</div>-->
                                                    <!--<div class="c2">-->
                                                        <!--<ul>-->
                                                            <!--<li class="li1">7步 / 大概30分钟</li>-->
                                                            <!--<li class="li2">烘焙 / 甜味</li>-->
                                                        <!--</ul>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</a>-->
                                    <!--</div>-->


                                    <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><div class="listtyle1 ml0">
                                            <a target="_blank" href="<?php echo ($a["link"]); ?>"
                                               title="土豆排骨鸡胸肉" class="big">
                                                <img class="img" alt="<?php echo ($a["title"]); ?>"
                                                     src="<?php echo ($a["thumb"]); ?>">
                                                <div class="i_w">
                                                    <div class="i" style="margin-top: 0px;">
                                                        <div class="c1">
                                                            <strong><?php echo ($a["title"]); ?></strong><span>17 评论  324 人气</span><em>大嘴螺</em>
                                                        </div>
                                                        <div class="c2">
                                                            <ul>
                                                                <li class="li1">10步 / 大概15分钟</li>
                                                                <li class="li2">煎 / 咸鲜味</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="paixu"><a class="l_n l_n_5 current" po="5"
                                           href="javascript:refresh_inews(5)">最新</a><span> | 最热：</span><a
                            class="l_n l_n_1" po="1" href="javascript:refresh_inews(1)">一小时</a>  <a class="l_n l_n_2"
                                                                                                    po="2"
                                                                                                    href="javascript:refresh_inews(2)">今日</a>  <a
                            class="l_n l_n_4" po="4" href="javascript:refresh_inews(4)">七天</a>  <a target="_blank"
                                                                                                   href="http://www.meishij.net/chufang/diy/">更多菜谱 &gt;</a></span>
                </div>
            </div>
            <h3 class="bbtitles">健康新闻<span class="paixu"><a target="_blank" href="http://www.meishij.net/jiankang/">更多健康资讯 &gt;</a></span>
            </h3>
            <div class="index_health clearfix">
                <div class="left">
                    <div class="div1 mb20">
                        <h2><a target="_blank" href="http://www.meishij.net/jiankang/shipinanquan/">食品安全</a><em
                                class="arrow"></em></h2>
                        <ul class="index_healthitem">
                            <li class="current"><a target="_blank"
                                                   href="http://www.meishij.net/changshi/rousongmianbaomeirousong.html"
                                                   class="img"><img
                                    src="/Public/assets/images/25d3f686f265df30c6001d0fcca65dbe_150x150.jpg"></a>
                                <h3><a target="_blank"
                                       href="http://www.meishij.net/changshi/rousongmianbaomeirousong.html">肉松面包没肉松？</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="http://www.meishij.net/changshi/chijidankejiangdizhongfengfengxian.html"
                                   class="img"><img
                                    src="/Public/assets/images/89298aa86e94684f9ccf467a7118ff58_150x150.jpg"></a>
                                <h3><a target="_blank"
                                       href="http://www.meishij.net/changshi/chijidankejiangdizhongfengfengxian.html">吃鸡蛋可降低中风风险</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="http://www.meishij.net/changshi/65yishangreyinchenggaoweizhiaiwu.html"
                                   class="img"><img
                                    src="/Public/assets/images/24cc5b1e8fa5a74698d729c1daff61e5_150x150.jpg"></a>
                                <h3><a target="_blank"
                                       href="http://www.meishij.net/changshi/65yishangreyinchenggaoweizhiaiwu.html">65℃以上热饮成高危致癌物</a>
                                </h3></li>
                        </ul>
                    </div>
                    <div class="div1 mb20 mr0">
                        <h2><a target="_blank" href="http://www.meishij.net/wenhua/">文化典故</a><em class="arrow"></em>
                        </h2>
                        <ul class="index_healthitem">
                            <li class="current"><a target="_blank"
                                                   href="http://www.meishij.net/kafei/shandongrendehejiuguiju_2.html"
                                                   class="img"><img
                                    src="/Public/assets/images/ea4795072096e73b48a820f391caf1cf_150x150.jpg"></a>
                                <h3><a target="_blank"
                                       href="http://www.meishij.net/kafei/shandongrendehejiuguiju_2.html">山东人的喝酒规矩</a>
                                </h3></li>
                            <li><a target="_blank" href="http://www.meishij.net/liyi/shangwucandeliyi_1.html"
                                   class="img"><img
                                    src="/Public/assets/images/9b493b820e999a4f775be26055f16d6a_150x150.jpg"></a>
                                <h3><a target="_blank"
                                       href="http://www.meishij.net/liyi/shangwucandeliyi_1.html">商务餐的礼仪</a>
                                </h3></li>
                            <li><a target="_blank" href="http://www.meishij.net/haiwai/hanguodeshili.html"
                                   class="img"><img
                                    src="/Public/assets/images/acc62674c8b52cc597ba0e87468f34fd_150x150.jpg"></a>
                                <h3><a target="_blank" href="http://www.meishij.net/haiwai/hanguodeshili.html">韩国的食礼</a>
                                </h3></li>
                        </ul>
                    </div>
                    <div class="div1 mb0">
                        <h2><a target="_blank" href="http://www.meishij.net/jiankang/">健康指南</a><em class="arrow"></em>
                        </h2>
                        <ul class="index_healthitem">
                            <li class="current"><a target="_blank"
                                                   href="http://www.meishij.net/changshi/6zhongjiangyouzenmechigengyingyang.html"
                                                   class="img"><img
                                    src="/Public/assets/images/ab5f6fd21a967620e1aaa8c7e3ed67ab_150x150.jpg"></a>
                                <h3><a target="_blank"
                                       href="http://www.meishij.net/changshi/6zhongjiangyouzenmechigengyingyang.html">6种酱油怎么吃更营养？</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="http://www.meishij.net/changshi/weiheyoudeyuciduoyoudeshao.html"
                                   class="img"><img
                                    src="/Public/assets/images/f086ef360d9be9475566dd8e83fdc857_150x150.jpg"></a>
                                <h3><a target="_blank"
                                       href="http://www.meishij.net/changshi/weiheyoudeyuciduoyoudeshao.html">为何有的鱼刺多有的少？</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="http://www.meishij.net/changshi/ganbianniuroude3zhongzuofa.html"
                                   class="img"><img
                                    src="/Public/assets/images/e907dc5895a8f15d8279ee384b87a81c_150x150.jpg"></a>
                                <h3><a target="_blank"
                                       href="http://www.meishij.net/changshi/ganbianniuroude3zhongzuofa.html">干煸牛肉的3种做法</a>
                                </h3></li>
                        </ul>
                    </div>
                    <div class="div1 mr0 mb0">
                        <h2><a target="_blank" href="http://www.meishij.net/xinxianzixun/">新鲜资讯</a><em
                                class="arrow"></em>
                        </h2>
                        <ul class="index_healthitem">
                            <li class="current"><a target="_blank"
                                                   href="http://www.meishij.net/reyimeishi/shaguomeishidundundunganzouqiurideliangyi.html"
                                                   class="img"><img
                                    src="/Public/assets/images/36c0138b235498418dd0495ccbcbd382_150x150.jpg"></a>
                                <h3><a target="_blank"
                                       href="http://www.meishij.net/reyimeishi/shaguomeishidundundunganzouqiurideliangyi.html">砂锅美食炖炖炖，赶走秋日的凉意</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="http://www.meishij.net/reyimeishi/rangnipaishoujiaojuedechufangquyouwuxiaoqiaomen.html"
                                   class="img"><img
                                    src="/Public/assets/images/47a19f85863f22a8daa305ab5f778d57_150x150.jpg"></a>
                                <h3><a target="_blank"
                                       href="http://www.meishij.net/reyimeishi/rangnipaishoujiaojuedechufangquyouwuxiaoqiaomen.html">让你拍手叫绝的厨房去油污小窍门</a>
                                </h3></li>
                            <li><a target="_blank" href="http://www.meishij.net/reyimeishi/yancaimijuedajiemi.html"
                                   class="img"><img
                                    src="/Public/assets/images/7fa64dda6d6b7f1734e5262830e0aaa5_150x150.jpg"></a>
                                <h3><a target="_blank" href="http://www.meishij.net/reyimeishi/yancaimijuedajiemi.html">腌菜秘诀大揭秘</a>
                                </h3></li>
                        </ul>
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

            var index = 0;
            var run = function () {
                index++;
                if (index == 3) {
                    index = 0;
                }
                $("#ztlist_cur span").eq(index).addClass("current").siblings().removeClass("current");
                switch (index) {
                    case 0:
                        $("#ztlist_style1_item_ww").animate({"margin-left": "0px"}, 600);
                        break;
                    case 1:
                        $("#ztlist_style1_item_ww").animate({"margin-left": "-988px"}, 600);
                        break;
                    case 2:
                        $("#ztlist_style1_item_ww").animate({"margin-left": "-1976px"}, 600);
                        break;
                }
            };
            //setInterval(run,3000);//定时执行

            $(".clearfix .index_sc_dd").mouseenter(function () {
                var index = $(this).index();
                $(this).addClass("index_sc_dd_current").siblings().removeClass("index_sc_dd_current");
            })
        })

    </script>

</div>
</body>
</html>