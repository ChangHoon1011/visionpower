<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script src="<?php echo G5_JS_URL; ?>/jquery-1.12.4.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo G5_JS_URL; ?>/script.js"></script>
<ul id="content_m">
    <li class="main_txt">
        
        <div><img src="<?php echo G5_IMG_URL; ?>/make/main_text.png" border="0" /></div>
    </li>

    <!-- 왼쪽 빨간색 -->
    <li class="left_red">
        <div class="item" id="item" style="float:left;text-align:right;">
            <p><img src="<?php echo G5_IMG_URL; ?>/make/red_left.gif" border="0" name="red1"
                    OnMouseOut="red1.src='<?php echo G5_IMG_URL; ?>/make/red_left.gif';" OnMouseOver="red2.src='<?php echo G5_IMG_URL; ?>/make/red_left_over.gif' ; "/></p>
            <div class="item_content">
            <div style="width:221px; height:142px;">
                <img src="<?php echo G5_IMG_URL; ?>/make/account2.gif" border="0" />
            </div>
        </div>
        </div>
    </li>
    <li class="white_board">
        <ul>
            <!-- 왼쪽 자유게시판 공지사항 등 -->
            <li class="notice_box">
                <div class="notice_title">
                    <div id="debate_S1" class="shoptep_on"><img src="<?php echo G5_IMG_URL; ?>/make/main_tap1on.gif"
                            border="0"> </div>
                    <div id="debate_S1#1" style="display:none;"
                        onMouseOver="location.href=&quot;javascript:shopLayer_tap01('1')&quot;" class="shoptep_off"><img
                            src="<?php echo G5_IMG_URL; ?>/make/main_tap1off.gif" border="0"> </div>
                    <div id="debate_S2" style="display:none" class="shoptep_on"> <img
                            src="<?php echo G5_IMG_URL; ?>/make/main_tap2on.gif" border="0"> </div>
                    <div id="debate_S2#1" onMouseOver="location.href=&quot;javascript:shopLayer_tap01('2')&quot;"
                        class="shoptep_off"> <img src="<?php echo G5_IMG_URL; ?>/make/main_tap2off.gif" border="0"> </div>
                    <div id="debate_S3" style="display:none;" class="shoptep_on"> <img
                            src="<?php echo G5_IMG_URL; ?>/make/main_tap3on.gif" border="0"> </div>
                    <div id="debate_S3#1" onMouseOver="location.href=&quot;javascript:shopLayer_tap01('3')&quot;"
                        class="shoptep_off"><img src="<?php echo G5_IMG_URL; ?>/make/main_tap3off.gif" border="0"> </div>
                    <div class="no_more">
                        <div id="debate_content_smore1"><a
                                href="board.php?board=visionpowernotice&config=2&category=2"><img
                                    src="<?php echo G5_IMG_URL; ?>/make/more.gif" border="0" /></a></div>
                        <div id="debate_content_smore2" style="DISPLAY: none;"><a
                                href="board.php?board=visionpower&config=11&category=17"><img
                                    src="<?php echo G5_IMG_URL; ?>/make/more.gif" border="0" /></a></div>
                        <div id="debate_content_smore3" style="DISPLAY: none;"><a
                                href="board.php?board=visionpower&config=21&category=16"><img
                                    src="<?php echo G5_IMG_URL; ?>/make/more.gif" border="0" /></a></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="debate_content_S1" class="notice_over">
                    <?// iBoard_Print_Here('visionpowernotice',$Campnotice_style_set); // ★공지사항  ?>
                </div>
                <div id="debate_content_S2" class="notice_over" style="display:none;">
                    <?// iBoard_Print_Here('visionpower',$Campfree_style_set); // ★자유게시판  ?>
                </div>
                <div id="debate_content_S3" class="notice_over" style="display:none;">
                    <?// iBoard_Print_Here('visionpower',$Powernotice_style_set); // ★비전파워 간증게시판  ?>
                </div>
            </li>
            <li class="first_line"></li>
            <!-- 가운데 신청버튼 -->
            <li class="appli_box">
                <img src="<?php echo G5_IMG_URL; ?>/make/appl_button.gif" border="0" usemap="#Map" />
                <map name="Map">
                    <area shape="rect" coords="0,45,89,69"
                        href="board.php?board=visioncamp&config=28&command=other_insert&url=http://visionpower.com/visionpower/apply_saymini/apply_07_03.php&style=height:1600px">
                    <area shape="rect" coords="-4,72,89,96"
                        href="board.php?board=visioncamp&config=28&command=other_insert&url=http://visionpower.com/visionpower/apply_saymini/apply_07_03.php?type=login&style=height:1600px">
                    <area shape="rect" coords="91,42,182,70"
                        href="board.php?board=visioncamp&config=32&command=other_insert&url=http://visionpower.com/visionpower/apply_saymini/apply_03.php&style=height:1600px">
                    <area shape="rect" coords="90,70,181,99"
                        href="board.php?board=visioncamp&config=32&command=other_insert&url=http://visionpower.com/visionpower/apply_saymini/apply_03.php?type=login&style=height:1600px">
                    <area shape="rect" coords="186,45,276,69"
                        href="board.php?board=visioncamp&config=36&command=other_insert&url=http://visionpower.com/visionpower/apply_saymini/apply_09_03.php&style=height:1600px">
                    <area shape="rect" coords="185,71,278,95"
                        href="board.php?board=visioncamp&config=36&command=other_insert&url=http://visionpower.com/visionpower/apply_saymini/apply_09_03.php?type=login&style=height:1600px">
                </map>

            </li>
            <!-- 캠프자료 신청 버튼 -->
            <li class="redbutton"><a href="board.php?board=visioncamp&config=38&category=8"><img
                        src="<?php echo G5_IMG_URL; ?>/make/check_button.gif" border="0" /></a></li>
            <li class="second_line"></li>
            <!-- 오른쪽 슬라이드 배너 -->
            <li class="slideben_box">
                <div class="big_img">
                    <!-- <a href="http://saymini.com/saybbs/data/board/visioncamp/file_in_body/2/ec98a4ec8b9ceb8a94eab8b82.jpg" target="_blank" id="i_screen_main_link">
                    <img id='i_screen_main_img' width="270px" height="96px" src="<?=$this_skin?>
/b_img/make/222.jpg" style="filter: blendtrans(duration=0.8)" border="0" align="absmiddle">
                    </a> -->
                    <a href="http://visioncamp.net" target="_blank" id="i_screen_main_link">
                        <img id='i_screen_main_img' width="270px" height="96px" src="<?php echo G5_IMG_URL; ?>/make/222.jpg"
                            style="filter: blendtrans(duration=0.8)" border="0" align="absmiddle">
                    </a>
                    <!-- <a href="http://175.207.13.216/saybbs/board.php?board=visionpower&config=34&category=10" target="_blank" id="i_screen_main_link">
                        <img id='i_screen_main_img' width="270px" height="96px" src="<?php echo G5_IMG_URL; ?>/make/main_screen1.jpg" style="filter: blendtrans(duration=0.8)" border="0" align="absmiddle">
                    </a> -->
                    <div class="thumbnail_img">
                        <a href="/saybbs/board.php?board=visionpowernotice&command=body&no=927&&config=2&category=2"
                            id="i_screen_link2">
                        </a>
                        <!-- <a href="/saybbs/board.php?board=visionpowernotice&command=body&no=892&&config=2&category=2" id="i_screen_link2">
                        </a> -->
                        <!-- <a href="/saybbs/board.php?board=visionpowernotice&config=4&command=body&no=831" id="i_screen_link2">
                        </a>
                        <a href="/saybbs/board.php?board=visionpowernotice&config=4&command=body&no=833" id="i_screen_link1">
                        </a> -->

                        <!--여기하나추가-->
                        <!-- 원래 메인사진임 -->

                        <!-- <a href="http://visioncamp.net" id="i_screen_link1">
                        <img src="<?php echo G5_IMG_URL; ?>/make/main_thumbnail1.gif" onmouseover="i_screen_img_chang(1)" class="i_set_transp" id="i_screen_small1" border="0" align="absmiddle" /></a> -->

                        <!-- <a href="http://saymini.com/saybbs/board.php?board=visionpower&config=34&category=10" id="i_screen_link2">
                        <img src="<?php echo G5_IMG_URL; ?>/make/main_thumbnail1.gif" onmouseover="i_screen_img_chang(2)" class="i_set_transp" id="i_screen_small2" border="0" align="absmiddle" /></a>  -->

                        <!-- 실시간 중계 -->
                        <!-- <a href="http://saymini.com/saybbs/data/board/visioncamp/file_in_body/2/ec98a4ec8b9ceb8a94eab8b82.jpg" id="i_screen_link2">
                        <img src="<?php echo G5_IMG_URL; ?>/make/main_thumbnail1.gif" onmouseover="i_screen_img_chang(2)" class="i_set_transp" id="i_screen_small2" border="0" align="absmiddle" /></a> -->

                        <!-- 사진다운 -->
                        <!-- <a href="http://saymini.com/saybbs/board.php?board=visioncamp&config=50&category=15" id="i_screen_link3"> 
                        <img src="<?php echo G5_IMG_URL; ?>/make/main_thumbnail1.gif" onmouseover="i_screen_img_chang(3)" class="i_set_transp" id="i_screen_small3" border="0" align="absmiddle" /></a> -->

                        <!-- 마무리영상보기 -->
                        <!-- <a href="http://saymini.com/saybbs/board.php?board=visioncamp&config=51&category=16" target="_blank" id="i_screen_link4">
                        <img src="<?php echo G5_IMG_URL; ?>/make/main_thumbnail1.gif" onmouseover="i_screen_img_chang(4)" class="i_unset_transp" id="i_screen_small4" border="0" align="absmiddle" /></a> -->





                    </div>
                </div>
            </li>
        </ul>
    </li>
    <!-- 오른쪽 빨간색 -->
    <li class="right_red">
        <div class="item" >
            <p><img src="<?php echo G5_IMG_URL; ?>/make/red_right.gif" border="0" name="red2"
                    OnMouseOut="red2.src='<?php echo G5_IMG_URL; ?>/make/red_right.gif' ;"
                    OnMouseOver="red2.src='<?php echo G5_IMG_URL; ?>/make/red_right_over.gif' ; " /></p>
            <div class="item_content">
                <table cellpadding="0" border="0" width="100%">
                    <tr><td>
                        <iframe width="246" height="142" src="https://www.youtube.com/embed/k8arQtmXaPQ?amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe>
                    </td></tr>
                </table>
            </div>
        </div>
    </li>
</ul>

<script language="javascript">

$('.item').toggle(
    
    function() {
        var $this = $(this);
        expand($this);
    },
    function() {
        var $this = $(this);
        collapse($this);
    }
);


function expand($elem) {
   
    var angle = 0;
    var t = setInterval(function() {
        if (angle == 1440) {
            clearInterval(t);
            return;
        }
        angle += 40;
        $('.link', $elem).stop().animate({
            rotate: '+=-40deg'
        }, 0);
    }, 10);
    $elem.stop().animate({
            width: '300px'
        }, 500)
        .find('.item_content').fadeIn(400, function() {
            $(this).find('p').stop(true, true).fadeIn(600);
        });
}

function collapse($elem) {
    var angle = 1440;
    var t = setInterval(function() {
        if (angle == 0) {
            clearInterval(t);
            return;
        }
        angle -= 40;
        $('.link', $elem).stop().animate({
            rotate: '+=40deg'
        }, 0);
    }, 10);
    $elem.stop().animate({
            width: '24px'
        }, 500)
        .find('.item_content').stop(true, true).fadeOut().find('p').stop(true, true).fadeOut();
}

expand($('.right_red .item'));
</script>
<?php
//include_once(G5_THEME_PATH.'/tail.php');