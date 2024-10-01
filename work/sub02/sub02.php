<? 
$_dep = array(2,2,2);
$_tit = array('주요업무','정책건의 및 자료개발','고등교육정책 자료개발');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub02 under02">
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
                                <a href="#none" class="linkBtn_" target="_blank">문헌정보실 홈페이지<i class="axi axi-chevron-right"></i></a>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">목적</span>
                                    <ul class="list-text">
                                        <li>고등교육 관련 쟁점 사항, 주요 동향, 국내외 우수 사례 등 대학 구성원에게 요구되는 다양한 지식정보 제공</li>
                                        <li>대학교육에 대한 이해도를 높이고, 각종 정책 결정 및 의사 결정에 필요한 자료로 활용</li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">주요내용</span>
                                    <p class="text">대학경영, 재정, 교육, 연구, 시설설비, 주요 정책, 쟁점사항별 외국사례 등을 주제로 자료개발</p>

                                    <div class="subject-table">
                                        <ul class="list">
                                            <li>
                                                <span class="title">[발간자료]</span>
                                                <ul class="sub-list">
                                                    <li>고등교육현안 정책자문자료집</li>
                                                    <li>고등교육 현안분석 자료집</li>
                                                    <li>고등교육 재정 통계자료</li>
                                                    <li>대학유형별 재정구조 및 운용현황 분석</li>
                                                    <li>KCUE 이슈보로셔</li>
                                                    <li>정책 포럼 및 전문가 토론회 자료집</li>
                                                    <li>코로나19, 산업계 대학전공 수요와 대학생 취업 인식도 분석</li>
                                                    <li>우리나라 고등교육 체제</li>
                                                    <li>고등교육 발전 과제 개발</li>
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