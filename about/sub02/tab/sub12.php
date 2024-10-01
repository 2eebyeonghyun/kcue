<? 
$_dep = array(1,2,13);
$_tit = array('대교협소개','경영정보','요약운영성과표');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub02-wrap under12">
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
                                                    <th class="rt01">구분</th>
                                                    <th class="rt02">2020년 결산</th>
                                                    <th class="rt03">2021년 결산</th>
                                                    <th class="rt04">2022년 결산</th>
                                                    <th class="rt05">2023년 결산</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>사업수익</td>
                                                    <td>126,037</td>
                                                    <td>105,347</td>
                                                    <td>104,999</td>
                                                    <td>100,115</td>
                                                </tr>
                                                <tr>
                                                    <td>사업수행비용 및 일반관리비용</td>
                                                    <td>125,257</td>
                                                    <td>107,170</td>
                                                    <td>106,758</td>
                                                    <td>95,625</td>
                                                </tr>
                                                <tr>
                                                    <td>사업이익</td>
                                                    <td>780</td>
                                                    <td>(1,823)</td>
                                                    <td>(1,759)</td>
                                                    <td>4,490</td>
                                                </tr>
                                                <tr>
                                                    <td>사업외수익</td>
                                                    <td>66</td>
                                                    <td>135</td>
                                                    <td>76</td>
                                                    <td>137</td>
                                                </tr>
                                                <tr>
                                                    <td>사업외비용</td>
                                                    <td>69</td>
                                                    <td>55</td>
                                                    <td>35</td>
                                                    <td>16</td>
                                                </tr>
                                                <tr>
                                                    <td>법인세비용차감전순이익</td>
                                                    <td>777</td>
                                                    <td>(1.743)</td>
                                                    <td>(1,718)</td>
                                                    <td>4,611</td>
                                                </tr>
                                                <tr>
                                                    <td>법인세 등</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>당기순이익</td>
                                                    <td>777</td>
                                                    <td>(1,743)</td>
                                                    <td>(1,718)</td>
                                                    <td>4,611</td>
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