<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<!--공통 헤더및 레프트-->
<?php include_once(G5_THEME_PATH.'/skin/content/ng_company/company_left.php');?>
    <div class="ng_ctn">
        <div class="ng_ti">
            <h2>연혁</h2>
            <p class="sub_ti">홈 > 연합회 > 연혁</p>
        </div>
        <div class="ng_intro pc">
            <div class="ng_history">
                <ul>
                    <li>
                        <span>2005.01.28.</span>
                        <span>(사)한국농공단지연합회 발족</span>
                    </li>
                    <li class="mb_120">
                        <span>2005.04.15.</span>
                        <span>경북협의회 창립총회 (제1대 송재열 회장 취임)</span>
                    </li>
                    <li>
                        <span>2006.05.02.</span>
                        <span>제1차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2007.02.13.</span>
                        <span>제2차 정기총회 (제2대 박원규 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2008.02.21.</span>
                        <span>제3차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2009.02.25.</span>
                        <span>제4차 정기총회 (제3대 박원규 회장 중임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2010.02.24.</span>
                        <span>제5차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2011.03.10.</span>
                        <span>제6차 정기총회 (제4대 서인교 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2012.02.21.</span>
                        <span>제7차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2012.03.01.</span>
                        <span>경북협의회 사무국 이전 (영천시 ⇨ 구미시)</span>
                    </li>
                    <li class="mb_120">
                        <span>2013.03.08.</span>
                        <span>제8차 정기총회 (제5대 서인교 회장 중임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2014.02.27.</span>
                        <span>제9차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2015.02.27.</span>
                        <span>제10차 정기총회 (제6대 김경범 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2016.03.23.</span>
                        <span>제11차 정기총회</span>
                    </li>
                    <li>
                        <span>2016.07.07.</span>
                        <span>17년 2차 이사회 (제7대 김태영 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2017.02.22.</span>
                        <span>제12차 정기총회 (제8대 김수태 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2018.02.08.</span>
                        <span>제13차 정기총회 (제9대 김완일 회장 취임)</span>
                    </li>
                    <li>
                        <span>2018.07.24.</span>
                        <span>제01차 임시총회 (제10대 김형구 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2019.02.19.</span>
                        <span>제14차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2020.02.25.</span>
                        <span>제15차 정기총회 (제11대 김형구 회장 중임)</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ng_intro mobile">
            <div class="ng_history">
                <ul>
                    <li>
                        <span>2005.01.28.</span>
                        <span>(사)한국농공단지연합회 발족</span>
                    </li>
                    <li class="mb_120">
                        <span>2005.04.15.</span>
                        <span>경북협의회 창립총회<br>(제1대 송재열 회장 취임)</span>
                    </li>
                    <li>
                        <span>2006.05.02.</span>
                        <span>제1차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2007.02.13.</span>
                        <span>제2차 정기총회<br>(제2대 박원규 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2008.02.21.</span>
                        <span>제3차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2009.02.25.</span>
                        <span>제4차 정기총회<br>(제3대 박원규 회장 중임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2010.02.24.</span>
                        <span>제5차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2011.03.10.</span>
                        <span>제6차 정기총회<br>(제4대 서인교 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2012.02.21.</span>
                        <span>제7차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2012.03.01.</span>
                        <span>경북협의회 사무국 이전<br>(영천시 ⇨ 구미시)</span>
                    </li>
                    <li class="mb_120">
                        <span>2013.03.08.</span>
                        <span>제8차 정기총회<br>(제5대 서인교 회장 중임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2014.02.27.</span>
                        <span>제9차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2015.02.27.</span>
                        <span>제10차 정기총회<br>(제6대 김경범 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2016.03.23.</span>
                        <span>제11차 정기총회</span>
                    </li>
                    <li>
                        <span>2016.07.07.</span>
                        <span>17년 2차 이사회<br>(제7대 김태영 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2017.02.22.</span>
                        <span>제12차 정기총회<br>(제8대 김수태 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2018.02.08.</span>
                        <span>제13차 정기총회<br>(제9대 김완일 회장 취임)</span>
                    </li>
                    <li>
                        <span>2018.07.24.</span>
                        <span>제01차 임시총회<br>(제10대 김형구 회장 취임)</span>
                    </li>
                    <li class="mb_120">
                        <span>2019.02.19.</span>
                        <span>제14차 정기총회</span>
                    </li>
                    <li class="mb_120">
                        <span>2020.02.25.</span>
                        <span>제15차 정기총회<br>(제11대 김형구 회장 중임)</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>