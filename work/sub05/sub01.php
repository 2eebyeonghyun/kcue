<? 
$_dep = array(2,5);
$_tit = array('주요업무','교수 및 직원연수');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub05 under01">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1300">
                    <div class="kr-topTitle-wrap">
                        <span class="title"><?=$_tit[1]?></span>
                        <ul class="sub-list">
                            <li class="home"><i class="axi axi-home"></i>홈</li>
                            <li><?=$_tit[0]?></li>
                            <li><?=$_tit[1]?></li>
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
                                <span class="title"><?=$_tit[1]?></span>
                                <a href="#none" class="linkBtn_" target="_blank">연수참가신청 안내<i class="axi axi-chevron-right"></i></a>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">고등교육연수원 운영 목적 및 목표</span>
                                    
                                    <div class="subject-table">
                                        <ul class="list">
                                            <li>
                                                <span class="title">[목적]</span>
                                                <ul class="sub-list">
                                                    <li><span class="title">수월성(Excellency) : </span><p class="text">학습자의 요구를 만족시키고 학습성과를 극대화시키는 수준 높은 프로그램의 개발·운영</p></li>
                                                    <li><span class="title">전문성(Speciality) : </span><p class="text">대학의 교육, 연구, 사회봉사 업무를 수행·지원할 수 있는 전문 능력의 함양</p></li>
                                                    <li><span class="title">체계성(Systemicity) : </span><p class="text">대학 구성원에게 요구되는 능력 및 기술 습득의 기회를 지속적·체계적으로 제공</p></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <span class="title">[목표]</span>
                                                <ul class="sub-list">
                                                    <li>대학 교수의 교수·연구 능력 향상</li>
                                                    <li>대학 직원의 직무 수행 능력 제고</li>
                                                    <li>대학 행정업무의 전문성 신장</li>
                                                    <li>대학교육의 수월성 추구와 경쟁력 제고</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <span class="title">연수 프로그램 개발·운영 기본 방향</span>

                                    <ul class="list-text">
                                        <li><p class="text">대학 및 대학 구성원의 필요한 요구를 반영한 <strong>수요자 중심의 연수 프로그램</strong> 개발·운영</p></li>
                                        <li><p class="text">대학 교수의 교수·연구 능력 향상을 위한 <strong>효과적이고 다양한 프로그램</strong> 개발·운영</p></li>
                                        <li><p class="text">대학 직원의 직무능력 향상 및 현장 적용 가능한 <strong>실무 위주의 프로그램</strong> 개발·운영</p></li>
                                        <li><p class="text">연수 참여자 간 경험을 공유할 수 있는 <strong>참여형 연수 프로그램</strong> 개발·운영</p></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">연수 프로그램 유형</span>

                                    <ul class="list-text">
                                        <li><span class="title">경영관리 프로그램 : </span><p class="text">대학행정의 경영·관리에 참여하고 있는 보직교수 및 간부 직원의 행정관리 능력 향상</p></li>
                                        <li><span class="title">교수법 프로그램 : </span><p class="text">수업 효과를 배가시키는 효과적인 교수법 교육</p></li>
                                        <li><span class="title">직무연수 프로그램 : </span><p class="text">담당 업무 수행에 필요한 직무 능력 향상</p></li>
                                        <li><span class="title">실무기술 프로그램 : </span><p class="text">업무의 효율적 수행에 도움이 되는 특정 기술 및 기능의 습득</p></li>
                                        <li><span class="title">전문연수 프로그램 : </span><p class="text">특정 직무분야의 전문영역에 대한 집중 연수</p></li>
                                        <li><span class="title">위탁연수 프로그램 : </span><p class="text">외부기관의 필요와 요청에 의한 맞춤형 연수</p></li>
                                        <li><span class="title">특별 프로그램 : </span><p class="text">대학과 현장의 요구를 반영한 부정기적 연수</p></li>
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
                                        <li><p>담당부서 : 고등교육연수원</p></li>
                                        <li><p>문의전화 : 064) 759-8931~2</p></li>
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