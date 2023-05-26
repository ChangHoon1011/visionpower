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
//i_screen_img = setTimeout("i_screen_img_chang(3,1)", 5000); // 처음 출력시 5초후 그림 자동 변경
</script>
<script src="<?php echo G5_JS_URL; ?>/jquery-1.12.4.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo G5_JS_URL; ?>/script.js"></script>

<!-- 상단 시작 { -->

<div id="headerimgs">
        <div style="display: none; background-image: url(&quot;<?php echo G5_IMG_URL; ?>/make/mainbg1.jpg&quot;); z-index: -75;" id="headerimg1" class="headerimg"></div>
        <div style="background-image: url(&quot;<?php echo G5_IMG_URL; ?>/make/mainbg2.jpg&quot;); display: block; z-index: -76;" id="headerimg2" class="headerimg"></div>
    </div>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }