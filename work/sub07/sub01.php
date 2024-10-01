<? 
$_dep = array(2,7,1);
$_tit = array('주요업무','대학평가','대학기관평가인증');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub07 under01">
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
                                <a href="#none" class="linkBtn_" target="_blank">대학기관평가인증 홈페이지<i class="axi axi-chevron-right"></i></a>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">대학평가 변천</span>
                                    
                                    <div class="step-wrap">
                                        <ul class="list">
                                            <li>
                                                <span class="title">대학종합평가 (기관평가)</span>
                                                <div class="textbox">
                                                    <ul class="textlist">
                                                        <li><span class="title">1주기 : </span><p class="text">1982년 ~ 1987년</p></li>
                                                        <li><span class="title">2주기 : </span><p class="text">1988년 ~ 1992년</p></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="title">대학종합평가인정</span>
                                                <div class="textbox">
                                                    <ul class="textlist">
                                                        <li><span class="title">1주기 : </span><p class="text">1994년 ~ 2000년</p></li>
                                                        <li><span class="title">2주기 : </span><p class="text">2001년 ~ 2006년</p></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="title">대학기관평가인증제</span>
                                                <div class="textbox">
                                                    <ul class="textlist">
                                                        <li><span class="title">1주기 : </span><p class="text">2011년 ~ 2015년</p></li>
                                                        <li><span class="title">2주기 : </span><p class="text">2016년 ~ 2020년</p></li>
                                                        <li><span class="title">3주기 : </span><p class="text">2021년 ~ 2025년</p></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <span class="title">의미</span>
                                    <p class="text">기관평가인증(Accreditation): 대학이 교육기관으로서 기본요건을 충족하고 있는지 판정하고, 그 결과를 사회에 공표함으로써 대학에 사회적 신뢰를 부여하는 제도</p>
                                    <ul class="list-text">
                                        <li>인증의 대상은 기관 운영 전반임</li>
                                        <li>인증기준을 충족하는 대학에 대해서는 그 결과를 공표하여 사회적 지위를 부여함</li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">평가목적</span>
                                    <ul class="list-text">
                                        <li>대학교육의 질보장과 지속적 질개선</li>
                                        <li>대학의 교육성과 및 책무성 제고</li>
                                        <li>대학의 경쟁력 강화 및 특성화 유도</li>
                                        <li>대학교육의 국제적 통용성 확보</li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">평가개요</span>

                                    <ul class="dept1-list">
                                        <li>
                                            <span class="title">법적근거</span>
                                            <ul class="dept2-list">
                                                <li><p class="text">- [고등교육법] 제11조의2(평가)(2007.10 신설)</p></li>
                                                <li><p class="text">- [교육관련기관의 정보공개에 관한 특례법](2007.5 제정)</p></li>
                                                <li><p class="text">- [교육관련기관의 정보공개에 관한 특례법 시행령](2008.11 제정)</p></li>
                                                <li><p class="text">- [고등교육기관의 자체평가에 관한 규칙](교육과학기술부령 제21호: 2008.12 제정)</p></li>
                                                <li><p class="text">- [고등교육기관의 평가인증 등에 관한 규정](대통령령 제21163호: 2008.12 제정)</p></li>
                                                <li><p class="text">- 기관평가인증제 시행기관 재지정(교육부 공고 제2020-303호)</p></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="title">주관기관</span>
                                            <ul class="dept2-list">
                                                <li><p class="text">- 한국대학교육협의회 병설 한국대학평가원</p></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="title">평가대상</span>
                                            <ul class="dept2-list">
                                                <li><p class="text">- 4년제 일반대학 및 산업대학</p></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="title">평가주기</span>
                                            <ul class="dept2-list">
                                                <li><p class="text">- 5년(2021~2025년)</p></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="title">평가유형: 절대평가</span>
                                            <ul class="dept2-list">
                                                <li><p class="text">- 대학이 교육에 필요한 최소 기본요건을 충족하고 있는지를 확인</p></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="contents-tab">
                                <div class="tab_wrap">
                                    <ul class="list">
                                        <li class="tab_item active" onclick="WorkTab(0)">평가절차 및 방법</li>
                                        <li class="tab_item" onclick="WorkTab(1)">평가지표</li>
                                        <li class="tab_item" onclick="WorkTab(2)">평가결과 및 활용</li>
                                    </ul>
                                </div>

                                <div class="contents-view">
                                    <div class="tab_inner_wrap">
                                        <div class="tab_inner active">
                                            <div class="row">
                                                <span class="title">평가절차</span>
                                                <div class="imgbox">
                                                    <img src="<?=DIR?>/img/work/sub07_img1.png" alt="평가절차 이미지">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <span class="title">평가방법</span>
                                                <ul class="list-text">
                                                    <li>- 인증의 대상은 기관 운영 전반임</li>
                                                    <li>- 인증기준을 충족하는 대학에 대해서는 그 결과를 공표하여 사회적 지위를 부여함</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tab_inner">
                                            <div class="row">
                                                <span class="title">평가지표</span>

                                                <table class="row-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="rt01">평가영역</th>
                                                            <th class="rt02">평가준거</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6" class="text-center">1. 대학이념 및 경영</td>
                                                            <td>1.1 교육목표 및 인재상</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1.2 발전계획</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1.3 거버넌스</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1.4 재정 확보</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1.5 재정 집행</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1.6 감사</td>
                                                        </tr>

                                                        <tr>
                                                            <td rowspan="6" class="text-center">2. 교육과정 및 교수-학습</td>
                                                            <td>2.1 교육과정 체계</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.2 교양교육과정</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.3 전공교육과정</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.4 학사관리</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.5 수업</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.6 교수-학습 지원</td>
                                                        </tr>

                                                        <tr>
                                                            <td rowspan="6" class="text-center">3. 교원 및 직원</td>
                                                            <td>3.1 교원 확보</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.2 교원 인사 및 업적평가</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.3 교원 처우 및 복지</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.4 교원의 교육 및 연구활동 지원</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.5 직원 확보 및 인사</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.6 직원 복지 및 업무 역량 개발 지원</td>
                                                        </tr>

                                                        <tr>
                                                            <td rowspan="6" class="text-center">4. 학생지원 및 시설</td>
                                                            <td>4.1 장학 제도 및 학생자치활동 지원</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.2 학생 심리 및 진로 상담</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.3 학생 권익 보호 및 소수집단학생 지원</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.4 교육시설</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.5 기숙사 및 학생 복지시설</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.6 도서관</td>
                                                        </tr>

                                                        <tr>
                                                            <td rowspan="6" class="text-center">5. 대학성과 및 사회적 책무</td>
                                                            <td>5.1 성과관리</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.2 교육성과</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.3 연구성과</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.4 취·창업지원 및 성과</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.5 사회봉사</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.6 지역사회 연계·협력</td>
                                                        </tr>

                                                        <tr>
                                                            <th><span class="title">평가영역: 5개</span></th>
                                                            <th><span class="title">평가준거: 30개</span></th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab_inner">
                                            <div class="row">
                                                <span class="title">인증판정유형: 인증, 조건부인증, 인증유예, 불인증</span>
                                                <div class="imgbox">
                                                    <img src="<?=DIR?>/img/work/value_img1.jpg" alt="인증판정유형 이미지">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <span class="title">인증기간 및 후속조치</span>
                                                <div class="imgbox">
                                                    <img src="<?=DIR?>/img/work/value_img2.jpg" alt="인증기간 및 후속조치 이미지">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <span class="title">평가결과 활용</span>

                                                <ul class="list-text">
                                                    <li>- 대학: 인증평가를 통하여 모든 대학 구성원들의 자발적인 평가 참여를 장려하고, 대학이 자체적으로 대학의 장단점을 분석하고 발전방향을 제시할 수 있는 자율평가 체제 구축을 유도</li>
                                                    <li>- 사회: 대학교육의 질 보증에 대한 정보를 제공하여 대학의 책무성을 강화하고 대학교육에 대한 사회적 공신력 부여</li>
                                                    <li>- 정부: 정부 차원의 고등교육 질 보증에 대한 국제사회의 요구에 부응하고, 정부의 행･재정 지원과 연계하여 정책적 활용</li>
                                                    <li>- 국제사회: 고등교육의 국제적 통용성을 확보하고, 국가 간 학생 및 프로그램 교류 협력 증진을 위한 고등교육 질 보증 체제를 구축</li>
                                                </ul>
                                            </div>
                                        </div>
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
                                        <li><p>담당부서 : 평가인증팀</p></li>
                                        <li><p>문의전화 : 02) 02-6919-3921~9</p></li>
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