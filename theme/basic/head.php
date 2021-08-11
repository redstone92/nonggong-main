<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
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


<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
        <div class="gnb_wr">
            <ul>
                <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice">공지사항</a></li>
                <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=company">참여기업</a></li>
                <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=member">임원진</a></li>
                <li><a href="<?php echo G5_BBS_URL?>/content.php?co_id=ng_company">연합회</a></li>
            </ul>
        </div>

        <div class="m_gnb">
            <a href="#none" class="m_btn"></a>
            <div class="m_gnb_wrap">
                <ul>
                    <li>
                        <p>연합회</p>
                        <ul class="m_sub">
                            <li><a href="<?php echo G5_BBS_URL?>/content.php?co_id=ng_company">대표 인사말</a></li>
                            <li><a href="<?php echo G5_BBS_URL?>/content.php?co_id=introduce">사업소개</a></li>
                            <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=area">지역별 현황</a></li>
                            <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=complex">단지별 현황</a></li>
                            <li><a href="<?php echo G5_BBS_URL?>/content.php?co_id=map">찾아오시는 길</a></li>
                        </ul>
                    </li>
                    <li>
                        <p>임원진<p>
                        <ul class="m_sub">
                            <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=member">관계자 명단</a></li>
                            <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=executives">임원진 명단</a></li>
                            <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=ceo">지역별 대표 이사 명단</a></li>
                        </ul>
                    </li>
                    <li>
                        <p>참여기업</p>
                        <ul class="m_sub">
                            <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=company">참여기업</a></li>
                        </ul>
                    </li>
                    <li>
                        <p>공지사항</p>
                        <ul class="m_sub">
                            <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice">공지사항</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <script>
            $('.m_gnb a').click(function(){
                $(this).toggleClass('active');
                $('.m_gnb .m_gnb_wrap').toggleClass('on');
            })
            $('.m_gnb_wrap>ul>li').eq(0).addClass('on')
            $('.m_gnb_wrap>ul>li').click(function(){
                let i = $(this).index();
                $('.m_gnb_wrap>ul>li').removeClass('on')
                $('.m_sub').stop().hide();
                $('.m_gnb_wrap>ul>li').eq(i).addClass('on')
                $(this).find('.m_sub').stop().show();
            })
        </script>
        
        <!-- 회원가입, 로그인 -->
        <ul class="hd_login">        
            <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <?php }  ?>
        </ul>

    </div>

</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php } ?>

