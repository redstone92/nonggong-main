<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
        <div id="ft_link" class="ft_cnt">
            <div class="ft_m">
                <ul> 
                    <!-- <li><a href="<?php echo get_pretty_url('content', 'company'); ?>">이용안내</a></li>
                    <li><a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a></li>
                    <li><a href="<?php echo get_pretty_url('content', 'provision'); ?>">이메일무단수집거부</a></li> -->
                    <li><a href="#none">개인정보처리방침</a></li>
                    <li><a href="#none">이메일무단수집거부</a></li>
                    <li><a href="#none">찾아오시는길</a></li>
                </ul>
                <div class="list_wrap">
                    <select>
                        <option selected>관련사이트 바로가기</option>
                        <option>옵션1</option>
                        <option>옵션2</option>
                        <option>옵션3</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="ft_company" class="ft_cnt">
	        <p class="ft_info pc">
                <span>경북농공단지연합회</span><br>[우편번호] 경상북도 구미시 이계북로 7(임수동, 경상북도경제진흥원 8층)<br>[고객센터] 1111-1111 | [팩스번호] 1111-1111<br>
                Copyright&copy; 2020 경북농공단지연합회 rights reserved.
			</p>
	        <p class="ft_info mobile">
            <span>경북농공단지연합회</span><br>[주소] 경상북도 구미시 이계북로 7<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(임수동, 경상북도경제진흥원 8층)<br>[전화] 1111-1111 &nbsp;&nbsp;|&nbsp;&nbsp; [팩스] 1111-1111<br><br>
                Copyright&copy; 2020 경북농공단지연합회 rights reserved.
			</p>
	    </div>       
		
	</div>      

    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>