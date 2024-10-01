<? 
$_dep = array(2,8,1);
$_tit = array('주요업무','대학정보공시','대학정보공시 운영');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub08 under01">
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
                                <a href="#none" class="linkBtn_" target="_blank">대학알리미 홈페이지<i class="axi axi-chevron-right"></i></a>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">목적</span>
                                    <p class="text">대학알리미 사이트의 안정적 운영을 통해 대학의 주요 정보(기본 운영 현황과 교육·연구 성과 등)를 교육수요자(학생·학부모, 기업, 정부 등)에게 정확하게 제공하여 수요자의 대학 선택과 대학의 투명성, 기업의 우수한 인력채용, 정부의 정책집행 시 합리적으로 판단할 수 있도록 국민의 눈높이에서 지원</p>
                                </div>

                                <div class="row">
                                    <span class="title">주요 내용</span>

                                    <ul class="list-text">
                                        <li>2007년 &lt;교육관련기관의 정보공개에 관한 특례법&gt;, 2008년 11월 동법 시행령이 제정·공표됨에 따라 2008년부터 시행령에 명시된 공시 시기에 대국민을 대상으로 대학정보공시 서비스 실시</li>
                                        <li>대학의 공시 정보를 국민들이 보다 쉽고 편리하게 이용할 수 있도록 대학알리미 온라인 사이트 운영 (http://www.academyinfo.go.kr/)</li>
                                        <li>외국인을 위한 영문 및 중문알리미 서비스 제공</li>
                                    </ul>

                                    <div class="subject-table">
                                        <ul class="list">
                                            <li>
                                                <span class="title">[대학정보공시 총괄 관리]</span>
                                                <ul class="sub-list">
                                                    <li>대학정보공시 사업계획 및 일정 수립</li>
                                                    <li>대학정보공시 항목별 양식 및 지침 개발·개선·배포</li>
                                                    <li>대학정보공시 시스템 개발 및 운영</li>
                                                    <li>수시 및 정기공시(4, 6, 8, 10월) 자료 수합 및 검증</li>
                                                    <li>대학정보공시 담당자를 위한 연수 및 설명회 개최</li>
                                                    <li>대학정보공시 항목별관리기관 지원 및 관리</li>
                                                    <li>대학정보공시 운영협력대학 선정 및 운영</li>
                                                    <li>대학정보공시 현장점검 운영 및 자체진단 지표 개발</li>
                                                    <li>외부모니터링단 모집 및 운영</li>
                                                    <li>대학정보공시 시스템 개발 및 운영</li>
                                                </ul>
                                            </li>

                                            <li>
                                                <span class="title">[대학알리미 운영]</span>
                                                <ul class="sub-list">
                                                    <li><span class="title">목적 : </span><p class="text">대학의 주요정보는 제공하는 웹사이트로 국민들이 보다 쉽고 편리하게 대학정보를 이용할 수 있는데 목적을 두며, 누구나 대학알리미를 통하여 대학의 기본정보를 확인ㆍ활용할 수 있게 서비스함</p></li>
                                                    <li><span class="title">근거 : </span><p class="text">교육관련기관의 정보공개에 관한 특례법 및 동법 시행령('07)</p></li>
                                                    <li><span class="title">대상 : </span><p class="text">고등교육법 제2조 및 그 밖에 다른 법률에 따라 설치된 학교(국방ㆍ치안 등의 사유로 정보공시가 어렵다고 대통령령으로 정하는 대학 제외)</p></li>
                                                    <li><span class="title">시기 : </span><p class="text">수시 및 정기공시(4, 6, 8, 10월)</p></li>
                                                    <li><span class="title">방법 : </span><p class="text">대학알리미 웹사이트를 통해 공시(http://www.academyinfo.go.kr/)</p></li>
                                                    <li><span class="title">항목 : </span><p class="text">학생, 교육ㆍ연구, 교육여건, 산학협력, 예ㆍ결산, 대학운영에 대한 항목(14개 분야, 63개 항목, 101개 세부항목)</p></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <table class="row-table">
                                        <thead>
                                            <tr>
                                                <th class="rt01"></th>
                                                <th class="rt02"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th><span class="icon"><img src="<?=DIR?>/img/work/sub08_icon1.png" alt="학교운영 이미지"></span><span class="title">학교운영</span></th>
                                                <td><p class="text">학교 규칙, 학교 발전계획, 특성화 계획, 직원현황 등</p></td>
                                            </tr>
                                            <tr>
                                                <th><span class="icon"><img src="<?=DIR?>/img/work/sub08_icon2.png" alt="학생 이미지"></span><span class="title">학생</span></th>
                                                <td><p class="text">학교 선발 방법, 성적평가, 학생 총원 현황, 진학및 취업현황 등 </p></td>
                                            </tr>
                                            <tr>
                                                <th><span class="icon"><img src="<?=DIR?>/img/work/sub08_icon3.png" alt="교원 이미지"></span><span class="title">교원</span></th>
                                                <td><p class="text">교원확보 현황, 교원강의 담당현황 등   </p></td>
                                            </tr>
                                            <tr>
                                                <th><span class="icon"><img src="<?=DIR?>/img/work/sub08_icon4.png" alt="연구·산학협력 이미지"></span><span class="title">연구·산학협력</span></th>
                                                <td><p class="text">전임교원의 연구실적, 연구비 수혜실적, 산학협력현황 등</p></td>
                                            </tr>
                                            <tr>
                                                <th><span class="icon"><img src="<?=DIR?>/img/work/sub08_icon5.png" alt="예·결산 이미지"></span><span class="title">예·결산</span></th>
                                                <td><p class="text">대학회계, 발전기금회계, 법인회계, 적립금, 기부금, 산학협력단회계, 등록금 등</p></td>
                                            </tr>
                                            <tr>
                                                <th><span class="icon"><img src="<?=DIR?>/img/work/sub08_icon6.png" alt="교육여건 이미지"></span><span class="title">교육여건</span></th>
                                                <td><p class="text">도서관 현황, 교지·교사시설확보현황, 기숙사 수용 현황, 대학의 사회봉사역량, 장애학생 지원체제 구축 및 운영현황, 국·공유재산 확보 현황, 안전관리현황등</p></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="subject-table">
                                        <ul class="list">
                                            <li>
                                                <span class="title">[대학알리미 사용자 지원 서비스]</span>
                                                <ul class="sub-list">
                                                    <li>대학정보공시 자료요청에 따른 원자료 제공 서비스</li>
                                                    <li>대학정보공시 분석자료집 발간</li>
                                                    <li>대학정보공시 각종 홍보자료 제작 및 배포</li>
                                                    <li>대학알리미 오류정보신고센터 운영</li>
                                                    <li>대학 담당자 및 대학알리미 사용자 상담 지원 및 콜센터 운영</li>
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
                                        <li><p>문의전화 : 02) 6919-3881</p></li>
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