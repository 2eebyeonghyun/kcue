<? 
$_dep = array(1,2,6);
$_tit = array('대교협소개','경영정보','임직원 수');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub02-wrap history-page exec-page">
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
                                                <th colspan="3" class="rt01"></th>
                                                <th class="rt02">2019</th>
                                                <th class="rt03">2020</th>
                                                <th class="rt04">2021</th>
                                                <th class="rt05">2022</th>
                                                <th class="rt06">2023</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td rowspan="6">임원</td>
                                                <td rowspan="2">기관장</td>
                                                <td>상근</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>비상근</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">이사</td>
                                                <td>상근</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>비상근</td>
                                                <td>22</td>
                                                <td>22</td>
                                                <td>22</td>
                                                <td>22</td>
                                                <td>22</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">감사</td>
                                                <td>상근</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>비상근</td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>2</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3">상근임원 계(A)</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">정규직</td>
                                                <td colspan="2">정원</td>
                                                <td>61</td>
                                                <td>61</td>
                                                <td>61</td>
                                                <td>61</td>
                                                <td>61</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">현원</td>
                                                <td>58</td>
                                                <td>57</td>
                                                <td>56</td>
                                                <td>56</td>
                                                <td>60</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3">비정규직</td>
                                                <td>58</td>
                                                <td>59</td>
                                                <td>51</td>
                                                <td>60</td>
                                                <td>55</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">소속외인력</td>
                                                <td>5</td>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">임직원총계</td>
                                                <td>122</td>
                                                <td>121</td>
                                                <td>113</td>
                                                <td>122</td>
                                                <td>119</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="titlebox">
                                <div class="box">
                                    <span class="spanBox blue"></span>
                                    <span class="spanBox gray"></span>
                                </div>
                                <span class="title">직급별인원 수</span>
                            </div>

                            <div class="row-contents">
                                <div class="table-boxWrap">
                                    <table class="row-table row-table2">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">직급</th>
                                                <th rowspan="2">직종</th>
                                                <th colspan="2">인원수</th>
                                            </tr>
                                            <tr>
                                                <th>남성</th>
                                                <th>여성</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>사무총장</td>
                                                <td>-</td>
                                                <td>1</td>
                                                <td>-</td>
                                            </tr>
                                            
                                            <tr>
                                                <td rowspan="2">수석</td>
                                                <td>연구원</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>전문원</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">1급</td>
                                                <td>연구원</td>
                                                <td>2</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>전문원</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">2급</td>
                                                <td>연구원</td>
                                                <td>2</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>전문원</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">3급</td>
                                                <td>연구원</td>
                                                <td>6</td>
                                                <td>9</td>
                                            </tr>
                                            <tr>
                                                <td>전문원</td>
                                                <td>5</td>
                                                <td>8</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">4급</td>
                                                <td>연구원</td>
                                                <td>1</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>전문원</td>
                                                <td>16</td>
                                                <td>8</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">5급</td>
                                                <td>연구원</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>전문원</td>
                                                <td>-</td>
                                                <td>-</td>
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