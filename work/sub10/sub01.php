<? 
$_dep = array(2,10,1);
$_tit = array('주요업무','대학교원지원','대학교원 정부포상 지원');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub10 under01">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1300">
                    <div class="kr-topTitle-wrap">
                        <span class="title"><?=$_tit[2]?></span>
                        <ul class="sub-list">
                            <li class="home"><i class="axi axi-home"></i>홈</li>
                            <li><?=$_tit[0]?></li>
                            <li><?=$_tit[1]?></li>
                            <li><?=$_tit[2]?></li>
                        </ul>
                    </div>
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
                                <a href="#none" class="linkBtn_" target="_blank">행안부 상훈포털시스템<i class="axi axi-chevron-right"></i></a>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">목적</span>
                                    <p class="text">재직중 직무를 성실히 수행함으로써 국가발전에 기여한 대학교원으로서 정년, 명예, 의원퇴직자 및 우수교원에게 훈포장 및 표창 수여 지원</p>
                                </div>

                                <div class="row">
                                    <span class="title">포상 시기</span>
                                    <ul class="list-text">
                                        <li><p class="text">2월말 퇴직교원 포상</p></li>
                                        <li><p class="text">5월말 스승의 날 포상</p></li>
                                        <li><p class="text">8월말 퇴직교원 포상</p></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">포상 훈격 기준</span>
                                    <div class="table-boxWrap">
                                        <span class="table-name">2월, 8월말 퇴직교원 포상</span>
                                        <table class="row-table">
                                            <thead>
                                                <tr>
                                                    <th class="rt01" rowspan="2">훈격</th>
                                                    <th class="rt02" colspan="5">근정훈장</th>
                                                    <th class="rt03" rowspan="2">근정포장</th>
                                                    <th class="rt04" colspan="3">표창</th>
                                                </tr>
                                                <tr>
                                                    <th>청조</th>
                                                    <th>황조</th>
                                                    <th>홍조</th>
                                                    <th>녹조</th>
                                                    <th>옥조</th>
                                                    <th>대통령</th>
                                                    <th>국무총리</th>
                                                    <th>장관</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><p class="text">재직기간</p></td>
                                                    <td><p class="text">협의후 추천</p></td>
                                                    <td><p class="text">40년 이상</p></td>
                                                    <td><p class="text">38년 ~ 39년</p></td>
                                                    <td><p class="text">36년 ~ 37년</p></td>
                                                    <td><p class="text">33년 ~ 35년</p></td>
                                                    <td><p class="text">30년 ~ 32년</p></td>
                                                    <td><p class="text">28년 ~ 29년</p></td>
                                                    <td><p class="text">25년 ~ 27년</p></td>
                                                    <td><p class="text">15년 ~ 24년</p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="information-text">※ 청조근정훈장은 대학교 총장에게 수여하되, 총장의 호봉이 특1호봉일 경우에 퇴직시 추천 가능 (단, 재직연수가 15년 미만인 경우 추천 제외)</p>
                                    </div>

                                    <div class="table-boxWrap">
                                        <span class="table-name">5월 스승의 날 포상</span>
                                        <table class="row-table">
                                            <thead>
                                                <tr>
                                                    <th class="rt01" rowspan="2">훈격</th>
                                                    <th class="rt02" colspan="3">근정훈장</th>
                                                    <th class="rt03" rowspan="2">근정포장</th>
                                                    <th class="rt04" colspan="3">표창</th>
                                                </tr>
                                                <tr>
                                                    <th>홍조</th>
                                                    <th>녹조</th>
                                                    <th>옥조</th>
                                                    <th>대통령</th>
                                                    <th>국무총리</th>
                                                    <th>장관</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><p class="text">재직기간</p></td>
                                                    <td colspan="3"><p class="text">15년 이상</p></td>
                                                    <td><p class="text">10년 이상</p></td>
                                                    <td colspan="3"><p class="text">5년 이상</p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="information-text">※ 훈장, 포장, 표창 추천인원은 매년 일정하지 않음</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="company-infoBox">
                                <div class="img">
                                    <img src="<?=DIR?>/img/company_img.png" alt="하단 회사정보 이미지">
                                </div>
                                <div class="textbox">
                                    <ul class="list">
                                        <li><p>담당부서 : 기획혁신팀</p></li>
                                        <li><p>문의전화 : 02) 6919-3818</p></li>
                                    </ul>
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
<script src="<?=DIR?>/en/js/main.js"></script>
<script src="<?=DIR?>/en/js/header.js"></script>
</html>