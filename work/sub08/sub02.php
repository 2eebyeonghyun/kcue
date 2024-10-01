<? 
$_dep = array(2,8,2);
$_tit = array('주요업무','대학정보공시','교육편제단위 표준분류 운영');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub08 under02">
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
                                    <ul class="list-text">
                                        <li><p class="text">대학의 학부·과(전공)별 변경이력을 관리하고 이를 교육수요자(대학, 통계기관 등)에 제공함으로써 다각적 통계정보 생산</p></li>
                                        <li><p class="text">각 대학에서 설치·운영하고 있는 학부·과(전공) 정보를 표준화하여 통계기관에 제공함으로써 일관된 통계정보 생산</p></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">주요내용</span>

                                    <div class="subject-table">
                                        <ul class="list">
                                            <li>
                                                <span class="title">[표준분류체계 업무 지침 제작]</span>
                                                <ul class="sub-list">
                                                    <li>교육편제단위 표준분류체계 업무관리지침 개발·개정</li>
                                                    <li>교육편제단위 자율분류 지침 및 가이드라인 개발·개정</li>
                                                </ul>
                                            </li>

                                            <li>
                                                <span class="title">[표준분류 운영 및 사용자 지원]</span>
                                                <ul class="sub-list">
                                                    <li>교육편제단위 조사(상, 하반기)</li>
                                                    <li>표준분류 업무 담당자 지원 및 콜센터 운영</li>
                                                    <li>교육편제단위 표준분류 담당자 연수 개최</li>
                                                </ul>
                                            </li>

                                            <li>
                                                <span class="title">[표준분류체계 및 표준분류정보 관리]</span>
                                                <ul class="sub-list">
                                                    <li>표준분류심의위원회 운영</li>
                                                    <li>
                                                        <span class="title">표준분류 개요</span>
                                                        <ul class="dept2-list">
                                                            <li><span class="title">대상 : </span><p class="text">고등교육기관 (대학, 대학원, 전문대학, 대학원대학)</p></li>
                                                            <li><span class="title">조사기간 : </span><p class="text">연중 상시(상·하반기 2회 분류정보 확정)</p></li>
                                                            <li>
                                                                <span class="title">내용 : </span>
                                                                <p class="text">
                                                                    학교개황 관리 : 학교정보(학교명, 학교소재지, 학제 등), 대학원 정보(대학원 신설/폐지)<br> 
                                                                    학과정보 관리<br> 
                                                                    1) 학과 속성정보(학과명, 단과대학, 주야구분, 표준분류계열, 학과특성 등)<br> 
                                                                    2) 학과별 교육목표/교육과정/진로·취업분야
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </li>
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
                                        <li><p>담당부서 : 대학정보공시센터</p></li>
                                        <li><p>문의전화 : 02) 6919-3894~3895</p></li>
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