<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<!--공통 헤더및 레프트-->
<?php include_once(G5_THEME_PATH.'/skin/content/ng_company/company_left.php');?>
    <div class="ng_ctn">
        <div class="ng_ti">
            <h2>찾아오시는 길</h2>
            <p class="sub_ti">홈 > 연합회 > 찾아오시는 길</p>
        </div>
        <!-- * 카카오맵 - 지도퍼가기 -->
        <!-- 1. 지도 노드 -->
        <div id="daumRoughmapContainer1617068977666" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%; margin-top:5%"></div>

        <!--
            2. 설치 스크립트
            * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
        -->
        <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

        <!-- 3. 실행 스크립트 -->
        <script charset="UTF-8">
            new daum.roughmap.Lander({
                "timestamp" : "1617068977666",
                "key" : "254bw",
                "mapHeight" : "400"
            }).render();
        </script>
        <div class="map_txt pc">
            <h3><span>▶</span> 오시는 길</h3>
            <p>· 주소: 경상북도 구미시 이계북로 7(임수동, 경상북도경제진흥원 8층)</p>
            <p>· 연락처: 1111-1111</p>
        </div>
        <div class="map_txt mobile">
            <h3><span>▶</span> 오시는 길</h3>
            <p>· 주소: 경상북도 구미시 이계북로 7<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(임수동, 경상북도경제진흥원 8층)</p>
            <p>· 연락처: 1111-1111</p>
        </div>
    </div>
</div>