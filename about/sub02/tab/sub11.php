<? 
$_dep = array(1,2,12);
$_tit = array('대교협소개','경영정보','요약재무상태표');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub02-wrap under11">
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
                                <span class="title">임원현황</span>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <div class="table-boxWrap">
                                        <table class="row-table">
                                            <thead>
                                                <tr>
                                                    <th class="rt01" colspan="2">구분</th>
                                                    <th class="rt02">2020년 결산</th>
                                                    <th class="rt03">2021년 결산</th>
                                                    <th class="rt04">2022년 결산</th>
                                                    <th class="rt05">2023년 결산</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td rowspan="3" class="border">자산</td>
                                                    <td class="border">유동자산</td>
                                                    <td>23,149</td>
                                                    <td>28,124</td>
                                                    <td>13,278</td>
                                                    <td>10,143</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">비유동자산</td>
                                                    <td>5,834</td>
                                                    <td>16,324</td>
                                                    <td>12,839</td>
                                                    <td>20,189</td>
                                                </tr>
                                                <tr>
                                                    <td class="border"><span class="bold">자산총계</span></td>
                                                    <td><span class="bold">28,983</span></td>
                                                    <td><span class="bold">44,448</span></td>
                                                    <td><span class="bold">26,117</span></td>
                                                    <td><span class="bold">30,332</span></td>
                                                </tr>

                                                <tr>
                                                    <td rowspan="3" class="border">부채</td>
                                                    <td class="border">유동부채</td>
                                                    <td>19,683</td>
                                                    <td>24,204</td>
                                                    <td>1,759</td>
                                                    <td>2,056</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">비유동부채</td>
                                                    <td>1,676</td>
                                                    <td>1,132</td>
                                                    <td>693</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td class="border"><span class="bold">부채총계</span></td>
                                                    <td><span class="bold">21,359</span></td>
                                                    <td><span class="bold">25,336</span></td>
                                                    <td><span class="bold">2,452</span></td>
                                                    <td><span class="bold">2,056</span></td>
                                                </tr>

                                                <tr>
                                                    <td rowspan="3" class="border">순자산</td>
                                                    <td class="border">순자산</td>
                                                    <td>125</td>
                                                    <td>125</td>
                                                    <td>125</td>
                                                    <td>125</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">기타</td>
                                                    <td>7,499</td>
                                                    <td>18,987</td>
                                                    <td>23,540</td>
                                                    <td>28,151</td>
                                                </tr>
                                                <tr>
                                                    <td class="border"><span class="bold">순자산총계</span></td>
                                                    <td><span class="bold">7,624</span></td>
                                                    <td><span class="bold">19,112</span></td>
                                                    <td><span class="bold">23,665</span></td>
                                                    <td><span class="bold">28,276</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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