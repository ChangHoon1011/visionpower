<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<link rel="stylesheet" type="text/css" href="<?php echo G5_CSS_URL?>/visioncamp.css">
<script language="javascript">
// 메인 이미지 change
function i_screen_img_chang(num, rotate) {

    var main_img_ob = document.getElementById('i_screen_main_img');
    var main_link_ob = document.getElementById('i_screen_main_link');
    if (!main_img_ob) return;
    if (num > 2) num = 1;
    var new_link_ob = document.getElementById('i_screen_link' + num);
    img_file = 'main_screen' + num + '.jpg';
    if (rotate) i_screen_img = setTimeout("i_screen_img_chang(" + (num + 1) + ",1)", 5000); // 5초 간격으로 그림 자동변경
    else {
        clearTimeout(i_screen_img);
        i_screen_img = setTimeout("i_screen_img_chang(" + (num + 1) + ",1)", 5000); // 마우스 over 로 그림 변경된후 5초후에 그림 자동변경
    }
    if (this_browser == 'e') main_img_ob.filters.blendTrans.apply();
    main_img_ob.src = main_img_ob.src.replace(/[^\/]+$/, img_file);
    if (this_browser == 'e') main_img_ob.filters.blendTrans.play();
    if (main_link_ob && new_link_ob) main_link_ob.href = new_link_ob.href;
    for (i = 1; i <= 3; ++i) {
        new_small_ob = document.getElementById('i_screen_small' + i);
        if (new_small_ob) new_small_ob.className = (num == i) ? 'i_unset_transp' : 'i_set_transp';
    }
}
i_screen_img = setTimeout("i_screen_img_chang(3,1)", 5000); // 처음 출력시 5초후 그림 자동 변경
</script>


<!-- 상단 시작 { -->

<style type="text/css">
#headerbox{width:1000px; position:relative; height:70px;}
#headerbox li.hbleft{position:absolute; top:0; left:15px;}
#headerbox li.hbright{position:absolute; top:0px; left:120px; }
#headerbox li.sitemap{position:absolute; top:10px; right:0; color:#ffffff; font-size:11px; font-family:Tahoma,나눔고딕;}

/* menu */
.menuArea{width:880px; height:85px; background-image:url(<?php echo G5_IMG_URL; ?>/make/main_mnbg.png); background-position:top right;} 
.mainMenu{width:880px; position:relative;}
.mainMenu a:link,a:visited{color:#FFFFFF;}
.mainMenu .menu1{position:absolute; top:52px; left:30px; font-size:15px; z-index:1000; color:#FFFFFF;}
.mainMenu .menu1 a:visited{color:#FFFFFF;}
.mainMenu .menu1 a:hover{color:#1975d1;}
.mainMenu .menu2{position:absolute; top:52px; left:117px; font-size:15px; z-index:1000; color:#FFFFFF;}
.mainMenu .menu2 a:visited{color:#FFFFFF;}
.mainMenu .menu2 a:hover{color:#3ad0d5;}
.mainMenu .menu3{position:absolute; top:52px; left:180px; font-size:15px; z-index:1000; color:#FFFFFF;}
.mainMenu .menu3 a:visited{color:#FFFFFF;}
.mainMenu .menu3 a:hover{color:#8a76d9;}
.mainMenu .menu4{position:absolute; top:52px; left:256px; font-size:15px; z-index:1000; color:#FFFFFF;}
.mainMenu .menu4 a:visited{color:#FFFFFF;}
.mainMenu .menu4 a:hover{color:#51c5d1;}
.mainMenu .menu5{position:absolute; top:52px; left:317px; font-size:15px; z-index:1000; color:#FFFFFF;}
.mainMenu .menu5 a:visited{color:#FFFFFF;}
.mainMenu .menu5 a:hover{color:#309edf;}
.mainMenu .menu6{position:absolute; top:52px; left:381px; font-size:15px; z-index:1000; color:#FFFFFF;}
.mainMenu .menu6 a:visited{color:#FFFFFF;}
.mainMenu .menu6 a:hover{color:#c676ad;}
.mainMenu .menu7{position:absolute; top:52px; left:444px; font-size:15px; z-index:1000; color:#FFFFFF;}
.mainMenu .menu7 a:visited{color:#FFFFFF;}
.mainMenu .menu7 a:hover{color:#70be19;}
.mainMenu .menu8{position:absolute; top:52px; left:530px; font-size:15px; z-index:1000; color:#FFFFFF;}
.mainMenu .menu8 a:visited{color:#FFFFFF;}
.mainMenu .menu8 a:hover{color:#3dcbf2;}
.mainMenu .menu9{position:absolute; top:52px; left:630px; font-size:15px; z-index:1000; color:#FFFFFF;}
.mainMenu .menu9 a:visited{color:#FFFFFF;}
.mainMenu .menu9 a:hover{color:#1975d1;}
</style>
<div id="header">
<ul id="headerbox">
    <li class="hbleft"><a href="/"><img src="<?php echo G5_IMG_URL; ?>/make/logo.png" border="0" /></a></li>
    <li  class="hbright">
        <div class="menuArea">
            <table cellpadding="0" cellspacing="0" border="0" class="mainMenu"><tr>
                <td valign="top" class="menu1">
                    <a href="board.php?board=visioncamp&config=2&category=35&command=body&no=4178"><b>비전캠프</b></a>
                </td>
                <td valign="top" class="menu2">
                    <a href="board.php?board=visioncamp&config=9&command=body&no=6"><b>키즈</b></a>
                </td>
                <td valign="top" class="menu3">
                    <a href="board.php?board=visioncamp&config=13&command=body&no=10"><b>청소년</b></a>
                </td>
                <td valign="top" class="menu4">
                    <a href="board.php?board=visioncamp&config=17&command=body&no=14"><b>청년</b></a>
                </td>
                <td valign="top" class="menu5">
                    <a href="board.php?board=visioncamp&config=21&command=body&no=18"><b>해외</b></a>
                </td>
                <td valign="top" class="menu6">
                    <a href="board.php?board=visioncamp&config=25&command=body&no=24"><b>신청</b></a>
                </td>
                <td valign="top" class="menu7">
                    <a href="board.php?board=visionpowernotice&config=4"><b>커뮤니티</b></a>
                </td>
                <td valign="top" class="menu8">
                    <a href="board.php?board=visioncampmovie&command=body"><b>캠프자료실</b></a>
                </td>
                <td valign="top" class="menu9">
                    <a href="board.php?board=visioncamp&command=other_insert&exe=insert_club&cid=visioncamp"><b>비전캠프SNS</b></a>
                </td>
                <td style="position:absolute; top:20px; right:10px; z-index:1000;">
                <?  include "$this_skin/include/util4_include_counter.php";  ?>
                </td>
            </tr>
            </table>
        </div>
        
    </li>
    <li class="sitemap"></li>
</ul>    
</div>


<div id="headerimgs">
        <div style="display: none; background-image: url(&quot;<?php echo G5_IMG_URL; ?>/make/mainbg1.jpg&quot;); z-index: -75;" id="headerimg1" class="headerimg"></div>
        <div style="background-image: url(&quot;<?php echo G5_IMG_URL; ?>/make/mainbg2.jpg&quot;); display: block; z-index: -76;" id="headerimg2" class="headerimg"></div>
    </div>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }