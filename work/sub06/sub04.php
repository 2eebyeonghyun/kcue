<? 
$_dep = array(2,6,4);
$_tit = array('주요업무','대학입학','대학입학정보박람회 운영');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub06 under01">
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
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">목적</span>
                                    <p class="text">
                                        대학진학 수험생, 학부모, 진학지도 교사 등에게 종합적·실질적 대학입학 정보를 원스톱으로 제공<br> 
                                        참가대학의 신입생 유치 및 홍보 활성화<br> 
                                        상업적 성격의 입시박람회 난립을 방지하여 대학의 홍보예산을 절감하고,<br> 
                                        진학 진로 정보 중심으로 상담서비스 제공(수험생 및 학부모에게 1:1 맞춤형 상담)
                                    </p>
                                </div>

                                <div class="row">
                                    <span class="title">일정</span>
                                    <ul class="list-text">
                                        <li><span class="title">수시박람회 : </span><p class="text">2022. 7. 20(수) ~ 23(토), 코엑스 1층 A홀</p></li>
                                        <li><span class="title">정시박람회 : </span><p class="text">2022. 12. 15(목) ~ 17(토), 코엑스 1층 A홀</p></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">주요내용</span>

                                    <div class="subject-table">
                                        <ul class="list">
                                            <li>
                                                <span class="title">[참가 대학별 상담관]</span>
                                                <ul class="sub-list">
                                                    <li>대학별로 부스를 독립적으로 전시하여 입학상담</li>
                                                    <li>입학관련 담당 교직원과의 개별 입학상담</li>
                                                    <li>모집요강 및 홍보책자 제공</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="title">[홍보관]</span>
                                                <ul class="sub-list">
                                                    <li>한국장학재단, 조기취업형 계약학과 안내</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="title">[대입정보 종합자료관]</span>
                                                <ul class="sub-list">
                                                    <li>수험생이 희망하는 대학의 입학정보를 직접 검색할 수 있는 서비스 제공</li>
                                                </ul>
                                            </li>
                                        </ul>
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
                                        <li><p>담당부서 : 입학지원팀</p></li>
                                        <li><p>문의전화 : 02) 02-6919-3843</p></li>
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
</html>