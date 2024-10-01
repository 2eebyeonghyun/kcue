<? 
$_dep = array(1,2,11);
$_tit = array('대교협소개','경영정보','임원국외출장정보');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub02-wrap under10">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/svis.php"; ?>

            <article class="cont cont1">
                <div class="inner w1300">
                    <div class="kr-topTitle-wrap">
                        <span class="title"><?=$_tit[2]?></span>
                        <ul class="sub-list">
                            <li class="home">
                                <i class="axi axi-home"></i>홈</li>
                            <li><?=$_tit[0]?></li>
                            <li><?=$_tit[1]?></li>
                            <li><?=$_tit[2]?></li>
                        </ul>
                    </div>

                    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/about/sub02/sub02_table.php"; ?>
                </div>
            </article>

            <article class="cont cont2">
                <div class="inner w1300">
                    <div class="contents">
                        <div class="row">
                            <div class="titlebox">
                                <div class="box">
                                    <span class="spanBox blue"></span>
                                    <span class="spanBox gray"></span>
                                </div>
                                <span class="title"><?=$_tit[2]?></span>
                            </div>

                            <div class="row-contents">
                                <div class="table-boxWrap">
                                    <table class="row-table">
                                        <thead>
                                            <tr>
                                                <th class="rt01">연번</th>
                                                <th class="rt02">성명</th>
                                                <th class="rt03">직급</th>
                                                <th class="rt04">출장기간</th>
                                                <th class="rt05">출장목적</th>
                                                <th class="rt06">출장지</th>
                                                <th class="rt07">보고서</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table_number">17</td>
                                                <td class="table_name">이기봉</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2023.03.26 ~ 2023.03.30</td>
                                                <td class="table_goal">한국-우즈벡 대학총장포럼 참석</td>
                                                <td class="table_location">우즈베키스탄</td>
                                                <td class="table_file"><a href="http://www.kcue.or.kr/about/download/business_trip_17.pdf" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">16</td>
                                                <td class="table_name">이기봉</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2022.09.12 ~ 2022.09.18</td>
                                                <td class="table_goal">2022 EAIE Conference & Exhibition 참석</td>
                                                <td class="table_location">스페인</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">15</td>
                                                <td class="table_name">황홍규</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2019.09.04 ~ 2019.09.06</td>
                                                <td class="table_goal">제7차 고등교육교류전문가 위원회 회의 참석</td>
                                                <td class="table_location">일본</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">14</td>
                                                <td class="table_name">전찬환</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2018.05.01 ~ 2018.05.05</td>
                                                <td class="table_goal">국제컨퍼런스 ‘Going Global’ 2018 참석</td>
                                                <td class="table_location">말레이시아</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">13</td>
                                                <td class="table_name">전찬환</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2016.05.29 ~ 2016.06.03</td>
                                                <td class="table_goal">NAFSA 컨퍼런스 참석</td>
                                                <td class="table_location">미국</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">12</td>
                                                <td class="table_name">이원근</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2014.11.29 ~ 2014.12.01</td>
                                                <td class="table_goal">한-러 대화 및 한-러 대학총장 포럼 참석</td>
                                                <td class="table_location">러시아</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">11</td>
                                                <td class="table_name">이원근</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2013.10.27 ~ 2013.11.01</td>
                                                <td class="table_goal">외국인 유학생 유치 및 한국 유학박람회</td>
                                                <td class="table_location">미얀마</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">10</td>
                                                <td class="table_name">이원근</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2013.08.04 ~ 2013.08.07</td>
                                                <td class="table_goal">캠퍼스 아시아 전문가위원회 및 질보증기관협의회</td>
                                                <td class="table_location">일본</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">9</td>
                                                <td class="table_name">황대준</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2013.04.13 ~ 2013.03.07</td>
                                                <td class="table_goal">호주 NIC 벤치마킹</td>
                                                <td class="table_location">호주</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">8</td>
                                                <td class="table_name">황대준</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2013-03-02 ~ 2013-03-07</td>
                                                <td class="table_goal">스코틀랜드 MOU</td>
                                                <td class="table_location">영국</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">7</td>
                                                <td class="table_name">황대준</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2012-10-28 ~ 2012-11-01</td>
                                                <td class="table_goal">유네스코 협약 후속조치 논의 전문가회의</td>
                                                <td class="table_location">중국</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">6</td>
                                                <td class="table_name">황대준</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2012-09-16 ~ 2012-09-19</td>
                                                <td class="table_goal">OECD IMHE 컨퍼런스</td>
                                                <td class="table_location">프랑스</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">5</td>
                                                <td class="table_name">황대준</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2012-06-24 ~ 2012-06-26</td>
                                                <td class="table_goal">러시아총장협의회와의 회의</td>
                                                <td class="table_location">러시아</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">4</td>
                                                <td class="table_name">황대준</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2012-06-13 ~ 2012-06-15</td>
                                                <td class="table_goal">TCU 컨퍼런스 기조강연-태국 교육부</td>
                                                <td class="table_location">태국</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">3</td>
                                                <td class="table_name">황대준</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2012-06-05 ~ 2012-06-08</td>
                                                <td class="table_goal">국제컨퍼런스 발표 및 참석</td>
                                                <td class="table_location">몽골</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">2</td>
                                                <td class="table_name">황대준</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2012-05-13 ~ 2012-05-19</td>
                                                <td class="table_goal">Learning Impact-KERIS</td>
                                                <td class="table_location">캐나다</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="table_number">1</td>
                                                <td class="table_name">황대준</td>
                                                <td class="table_position">사무총장</td>
                                                <td class="table_period">2012-03-09 ~ 2012-03-14</td>
                                                <td class="table_goal">2012 ACE 연차대회</td>
                                                <td class="table_location">미국</td>
                                                <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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