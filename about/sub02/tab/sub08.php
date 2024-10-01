<? 
$_dep = array(1,2,9);
$_tit = array('대교협소개','경영정보','신규채용현황');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub02-wrap under08">
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
                                                <th class="rt01">연도</th>
                                                <th class="rt02">정규직</th>
                                                <th class="rt03">비정규직</th>
                                                <th class="rt04">합계</th>
                                                <th class="rt05">비고</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>2018</td>
                                                <td>1</td>
                                                <td>25</td>
                                                <td>26</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2019</td>
                                                <td>2</td>
                                                <td>23</td>
                                                <td>25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2020</td>
                                                <td>3</td>
                                                <td>24</td>
                                                <td>27</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2021</td>
                                                <td>1</td>
                                                <td>20</td>
                                                <td>21</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2022</td>
                                                <td>2</td>
                                                <td>26</td>
                                                <td>28</td>
                                                <td></td>
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