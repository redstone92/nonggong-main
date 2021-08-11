<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<div class="mainbanner">
    <div class="mainbanner_wrap">
        <div class="fl_l">
            <div class="fl_txt">
                <h3><span>Welcome to</span><br>GICORA</h3>
                <p>기업의 마중물, 기업의 도약을 위하여<br>
                꼭 필요한 디딤돌이 될 수 있도록</p>
            </div>
        </div>
        <div class="fl_r">
            <div class="fl_r_t">
                <h4>연합공지</h4>
                <h5><a href="/bbs/board.php?bo_table=notice" alt="더보기">+</a></h5>
                <?php echo latest('notice', 'notice', 4, 13); ?>
            </div>
            <div class="fl_r_b">
                <div class="fl_r_bw">    
                    <div class="bw_txt">
                        <p>농어촌 지역경제 발전&고도성장을 위해</p>
                        <h3>정보 공유 Hub System</h3>
                    </div>
                    <div class="bw_icon">
                        <ul>
                            <li><a href="#"><img src="<?php echo G5_THEME_IMG_URL ?>/icon3.png" alt="인사말"><p>인사말</p></a></li>
                            <li><a href="#"><img src="<?php echo G5_THEME_IMG_URL ?>/icon2.png" alt="기업체현황"><p>기업체 현황</p></a></li>
                            <li><a href="#"><img src="<?php echo G5_THEME_IMG_URL ?>/icon1.png" alt="오시는길"><p>오시는 길</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>