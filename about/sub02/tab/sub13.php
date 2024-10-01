<? 
$_dep = array(1,2,14);
$_tit = array('대교협소개','경영정보','수입 · 지출현황');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub02-wrap under13">
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
                                <div class="row">
                                    <div class="table-boxWrap">
                                        <table class="row-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" class="rt01">구분</th>
                                                    <th class="rt02">2020년 결산</th>
                                                    <th class="rt03">2021년 결산</th>
                                                    <th class="rt04">2022년 결산</th>
                                                    <th class="rt05">2023년 결산</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td rowspan="5" class="border">수입</td>
                                                    <td class="border">회비회계</td>
                                                    <td>4,358</td>
                                                    <td>4,966</td>
                                                    <td>5,018</td>
                                                    <td>5,429</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">수입대체회계</td>
                                                    <td>4,602</td>
                                                    <td>6,719</td>
                                                    <td>11,586</td>
                                                    <td>9,229</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">대학평가회계</td>
                                                    <td>1,487</td>
                                                    <td>2,426</td>
                                                    <td>3,149</td>
                                                    <td>2,844</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">국고보조회계</td>
                                                    <td>131,234</td>
                                                    <td>114,795</td>
                                                    <td>107,557</td>
                                                    <td>98,826</td>
                                                </tr>
                                                <tr>
                                                    <td class="border"><span class="bold">수입합계</span></td>
                                                    <td><span class="bold">141,681</span></td>
                                                    <td><span class="bold">128,906</span></td>
                                                    <td><span class="bold">127,310</span></td>
                                                    <td><span class="bold">116,328</span></td>
                                                </tr>

                                                <tr>
                                                    <td rowspan="5" class="border">지출</td>
                                                    <td class="border">회비회계</td>
                                                    <td>3,977</td>
                                                    <td>4,181</td>
                                                    <td>4,635</td>
                                                    <td>4,965</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">수입대체회계</td>
                                                    <td>2,897</td>
                                                    <td>3,647</td>
                                                    <td>7,595</td>
                                                    <td>7,796</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">대학평가회계</td>
                                                    <td>845</td>
                                                    <td>1,225</td>
                                                    <td>2,443</td>
                                                    <td>2,574</td>
                                                </tr>
                                                <tr>
                                                    <td class="border">국고보조회계</td>
                                                    <td>124,069</td>
                                                    <td>108,355</td>
                                                    <td>101,676</td>
                                                    <td>92,189</td>
                                                </tr>
                                                <tr>
                                                    <td class="border"><span class="bold">지출합계</span></td>
                                                    <td><span class="bold">131,788</span></td>
                                                    <td><span class="bold">117,408</span></td>
                                                    <td><span class="bold">116,349</span></td>
                                                    <td><span class="bold">107,524</span></td>
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