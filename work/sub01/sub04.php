<? 
$_dep = array(2,1,4);
$_tit = array('주요업무','대학간 협의조정','대학직능단체 지원');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub01 under04">
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
                                    <p class="text">각종 대학직능단체 지원 및 연계를 통해 의견수렴 및 현안문제 해결방안 모색</p>
                                </div>

                                <div class="row">
                                    <span class="title">주요내용</span>
                                    <ul class="list-text">
                                        <li>대학취업실(과)장협의회, 사립대학교총무행정관리자협의회, 대학사무총무관리재무처(국)장협의회 등 지원</li>
                                        <li>교직원 연수과정을 통해 각 단체의 전문성 향상을 지원하는 방안 모색</li>
                                        <li>각종 대학직능단체와 다양한 의사소통 수행</li>
                                        <li>대학직능단체 현황 및 변동사항 조사</li>
                                        <li>대학직능단체 임원진과 간담회 개최</li>
                                        <li>대학현장의 요구를 신속하게 파악하고 정책에 반영</li>
                                        <li>각종 협의체별 건의내용에 대한 해결책 강구</li>
                                        <li>대학직능단체 현황자료집 발간</li>
                                    </ul>
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
                                        <li><p>문의전화 : 02) 6919-3817</p></li>
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