<? 
$_dep = array(1,4);
$_tit = array('대교협소개','오시는 길');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page loaction-wrap">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1300">
                    <div class="kr-topTitle-wrap">
                        <span class="title"><?=$_tit[1]?></span>
                        <ul class="sub-list">
                            <li class="home"><i class="axi axi-home"></i>홈</li>
                            <li><?=$_tit[0]?></li>
                            <li><?=$_tit[1]?></li>
                        </ul>
                    </div>

                    <div class="contents">
                        <div class="map-wrap">
                            <iframe class="loaction_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3166.1940477517524!2d126.87447337652785!3d37.47974697206119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b61fc8df9b59d%3A0x22bd7e78f1e72d65!2z7ISc7Jq47Yq567OE7IucIOq4iOyynOq1rCDshJzrtoDsg5vquLggNjA2!5e0!3m2!1sko!2skr!4v1706750533094!5m2!1sko!2skr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="location-information">
                            <div class="top">
                                <ul class="list">
                                    <li>
                                        <div class="iconbox">
                                            <img src="<?=DIR?>/img/icon/location_icon1.png" alt="위치 아이콘">
                                        </div>
                                        <div class="textbox">
                                            <span class="title">서울특별시 금천구 서부샛길 606</span>
                                            <p class="text">(가산동, 대성디폴리스 A동, 22~23층) (우)153-719</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="bot">
                                <ul class="list">
                                    <li>
                                        <div class="iconbox">
                                            <img src="<?=DIR?>/img/icon/location_icon2.png" alt="자가용 아이콘">
                                        </div>
                                        <div class="textbox">
                                            <span class="title">자가용 이용 안내</span>
                                            <ul class="sub-list">
                                                <li>
                                                    <span class="t">남부순환로 이용시</span>
                                                    <p class="text">- 구로IC 교차로 이용 ※ 수출의 다리(가리봉로데오거리) 통과 시 항시 정체</p>
                                                </li>
                                                <li>
                                                    <span class="t">서부간선도로 이용시</span>
                                                    <p class="text">- 철산교 아래 서부샛길 이용</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iconbox">
                                            <img src="<?=DIR?>/img/icon/location_icon3.png" alt="지하철 아이콘">
                                        </div>
                                        <div class="textbox">
                                            <span class="title">지하철 이용 안내</span>
                                            <ul class="sub-list">
                                                <li>
                                                    <p class="text">- 가산디지털단지역 7호선 8번 출구 나오는 방향으로 350m 직진 후 횡단보도 건너 100m 전방</p>
                                                    <p class="text">- 가산디지털단지역 1호선 10번 출구에서 나와 횡당보도 건너 좌회전 후 맥도날드 건물 끼고 우회전하여 400m 전방</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iconbox">
                                            <img src="<?=DIR?>/img/icon/location_icon4.png" alt="버스 아이콘">
                                        </div>
                                        <div class="textbox">
                                            <span class="title">버스 이용 안내</span>
                                            <ul class="sub-list">
                                                <li>
                                                    <p class="text">- 지선 5012, 5528 (디지털3단지 한일합섬 하차 300m 전방)</p>
                                                    <p class="text">- 간선 571, 652, 653 지선 5012, 5528 (디지털3단지 한국메디칼 하차 300m 후방)</p>
                                                    <p class="text">- 일반 21 간선 571, 652 마을 금천05 (디지털3단지 월드벤쳐센터 하차 300m 후방)</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/footer.php"; ?>
        </section>
    </div>
</body>
</html>