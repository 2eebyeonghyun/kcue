<? 
$_dep = array(2,6,2);
$_tit = array('주요업무','대학입학','대입상담센터운영');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub06 under02">
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
                                <a href="#none" class="linkBtn_" target="_blank">대입정보 포털사이트<i class="axi axi-chevron-right"></i></a>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">기본방향</span>
                                    <ul class="list-text">
                                        <li>학생·학부모의 대학입학정보 탐색과 교사 중심의 진로진학 상담을 통한 대입준비 지원체계 구축 및 운영</li>
                                        <li>수험생 대상 진로진학상담 및 대입정보 제공, 교사 대상 상담역량강화 연수 등을 통한 공교육 중심의 대입상담체계 마련</li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">주요내용</span>

                                    <div class="subject-table">
                                        <ul class="list">
                                            <li>
                                                <span class="title">[전화, 온라인상담 실시]</span>
                                                <ul class="sub-list">
                                                    <li>대입상담교사단과 한국대학교육협의회의 상담전문위원이 무료로 상담서비스 제공</li>
                                                    <li>
                                                        전화상담 (☎ 1600-1615)
                                                        <ul class="dept2-list">
                                                            <li>
                                                                <span class="title">- 운영시간</span>
                                                                <p class="text">평시(2월~7월) : 09:00 ~ 18:00(월~금)</p>
                                                                <p class="text">집중기(8월~1월) : 09:00 ~ 22:00(월~금)</p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        온라인상담 (http://adiga.kr)
                                                        <ul class="dept2-list">
                                                            <li>
                                                                <span class="title">- 온라인 대입상담 : </span>
                                                                <p class="text">학생이 입력한 학생부, 모의고사, 수능 성적 등에 기반한 대입상담 서비스 제공</p>
                                                            </li>
                                                            <li>
                                                                <span class="title">- 온라인 전공상담 : </span>
                                                                <p class="text">각 대학으로부터 추천받은 대학생 전공멘토단이 수험생의 진로 탐색과 전공 선택에 도움을 주기 위해 학과정보 및 전공상담 서비스 제공</p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        상담내용
                                                        <ul class="dept2-list">
                                                            <li><p class="text">- 진로에 기반한 진학상담: 학교 및 학과정보, 계열에 따른 진학상담, 특성화학과 안내</p></li>
                                                            <li><p class="text">- 맞춤형 대입전략: 흥미와 적성에 따른 전략 수립, 학습방법 안내</p></li>
                                                            <li><p class="text">- 대입전형: 일반전형, 특별전형(농어촌, 특성화고, 재외국민과 외국인, 검정고시출신자 등)</p></li>
                                                            <li><p class="text">- 대입정책: 변화하는 대입환경 및 대입전형</p></li>
                                                            <li><p class="text">- 기타: 대입 전반에 관한 모든 사항</p></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <span class="title">[대입상담교사단 운영]</span>
                                                <ul class="sub-list">
                                                    <li>17개 시·도 교육청으로부터 추천받은 현직 교사로 구성하여 분야별 팀 구성 및 활동을 통해 대입상담자료 및 상담도구 활용에 대한 전문성 강화</li>
                                                </ul>
                                            </li>

                                            <li>
                                                <span class="title">[다양한 대입정보 개발 및 보급]</span>
                                                <ul class="sub-list">
                                                    <li>최적화된 상담서비스 구축으로 수험생의 효율적인 대입전략 수립 지원 및 사교육 의존도 완화</li>
                                                    <li>진로진학정보에 대한 접근성 및 편의성을 제고하기 위해 대상·시기·주제별 다양한 콘텐츠 제공</li>
                                                </ul>
                                            </li>

                                            <li>
                                                <span class="title">[진로진학상담 역량강화 교사연수 실시]</span>
                                                <ul class="sub-list">
                                                    <li>고교 모든 교사에게 대입정보 접근성을 확대하고, 대입상담 전문성을 함양할 수 있도록 체계적인 진학지도 기반 마련</li>
                                                    <li>진학지도에 필요한 교육정책, 대입제도, 대입전형, 상담기법 등에 대한 연수 실시</li>
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
                                        <li><p>담당부서 : 대입상담센터</p></li>
                                        <li><p>문의전화 : 02) 6919-3858</p></li>
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