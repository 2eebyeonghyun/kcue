<? 
$_dep = array(1,2,16);
$_tit = array('대교협소개','경영정보','국회 지적사항');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub02-wrap under15">
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
                                                    <th class="rt01">연도</th>
                                                    <th class="rt02">내용</th>
                                                    <th class="rt03">다운로드</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table_year">2019~2022년</td>
                                                    <td class="table_subject">국정감사 결과보고서 미채택으로 국정감사결과 시정 및 처리요구사항에 대한 조치결과 미작성</td>
                                                    <td class="table_file"></td>
                                                </tr>
                                                <tr>
                                                    <td class="table_year">2018년</td>
                                                    <td class="table_subject">국정감사 지적사항</td>
                                                    <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="table_year">2017년</td>
                                                    <td class="table_subject">국정감사 지적사항</td>
                                                    <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="table_year">2016년</td>
                                                    <td class="table_subject">국정감사 지적사항</td>
                                                    <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="table_year">2015년</td>
                                                    <td class="table_subject">국정감사 지적사항</td>
                                                    <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="table_year">2014년</td>
                                                    <td class="table_subject">국정감사 지적사항</td>
                                                    <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="table_year">2013년</td>
                                                    <td class="table_subject">국정감사 지적사항</td>
                                                    <td class="table_file"><a href="#none" class="file" download><i class="axi axi-file-text-o"></i></a></td>
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