<? 
$_dep = array(2,6,3);
$_tit = array('주요업무','대학입학','고교교육 기여대학 지원사업 운영');
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
                                    <span class="title">사업목적</span>
                                    <p class="text">대입전형과 고교 교육과정 간 연계를 강화하여 수험생 부담을 완하하고, 전형 운영의 공정성·책무성을 제고하여 대입에 대한 신뢰 회복</p>
                                    <ul class="list-text">
                                        <li>대입 공정성·책무성 강화</li>
                                        <li>수험생의 대입준비 부담 완화</li>
                                        <li>대학의 학생선발 기능 강화 및 전문성 제고</li>
                                        <li>고교교육과 대입전형 간 연계성 제고</li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">사업기간 및 규모</span>
                                    <ul class="list-text">
                                        <li><span class="title">사업기간 : </span><p class="text">총 3년(‘22. 3월 ~ ’25.2월, 2+1)</p></li>
                                        <li><span class="title">사업규모 : </span><p class="text">‘22년 기준 대학지원금 575억 원, 총 91개교</p></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">지원대상</span>
                                    <ul class="list-text">
                                        <li><p class="text">고등교육법 제 2조에 따른 대학, 산업대학 및 교육대학<br> <i>* 본교 및 분교(건국대, 고려대, 동국대, 연세대, 한양대)는 별도 신청</i></p></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">지원유형</span>
                                    <ul class="list-text">
                                        <li><span class="title">(유형Ⅰ) </span><p class="text">모든 대학, 총 77교</p></li>
                                        <li><span class="title">(유형Ⅱ) </span><p class="text">‘18년 이후 사업 지원 이력이 없는 대학, 총 14개교</p></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">지원절차</span>

                                    <ul class="step-box">
                                        <li>
                                            <span class="title">사업공고</span>
                                        </li>
                                        <li>
                                            <span class="title">사업신청서<br> 접수 및 선정평가</span>
                                        </li>
                                        <li>
                                            <span class="title">총괄위원회 심의</span>
                                        </li>
                                        <li>
                                            <span class="title">선정평가 발표</span>
                                        </li>
                                        <li>
                                            <span class="title">사업지 교부</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">지원내용</span>
                                    <p class="text">입학사정관 등 평가전문인력 인건비, 대입전형 운영 및 역량 강화/고교교육 내실화 지원/학생 교육활동 지원 관련 운영비, 대입전형 및 지원사업 개선 연구비 등 지원대학은 국고지원금의 일정비율 이상을 인건비로 대응투자(유형Ⅰ 15% 이상, 유형Ⅱ 10%이상)</p>
                                </div>

                                <div class="row">
                                    <span class="title">사업성과</span>
                                    <ul class="list-text">
                                        <li><p class="text">대입전형 간소화 및 전형 간 쏠림 현상 완화</p></li>
                                        <li><p class="text">대입전형 운영 및 평가의 공정성·투명성 제고</p></li>
                                        <li><p class="text">대입정보 제공을 위한 고교-대학 연계활동 활성화</p></li>
                                        <li><p class="text">사회적 배려자 등의 대학진학 기회 확대</p></li>
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
                                        <li><p>담당부서 : 입학지원팀</p></li>
                                        <li><p>문의전화 : 070) 6919-3842~8</p></li>
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