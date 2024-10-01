<? 
$_dep = array(2,6,5);
$_tit = array('주요업무','대학입학','대입정보포털 어디가 운영');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub06 under05">
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
                                    <p class="text">수험생에게 필요한 대입정보를 대입정보포털 ‘어디가[ADIGA]를 통해 효율적으로 제공하여 불안감 해소 및 사교육의존도를 완화하고 지리적·경제적 여건으로 인한 대입정보 불균형 해소 및 대입정보포털 ‘어디가[ADIGA] 통해 정보제공의 공정성 확보</p>
                                    <ul class="list-text">
                                        <li>196개 4년제 대학, 137개 전문대학의 입시정보를 한 곳에 모아 다양한 정보를 종합적 제공</li>
                                        <li>대입정보포털 ‘어디가[ADIGA]를 활용한 고교내 상담운영으로 공교육차원의 진로진학상담 활성화</li>
                                        <li>장소와 시간에 관계없이 유용한 정보를 확인할 수 있도록 모바일 서비스 운영(앱 설치 활용)</li>
                                    </ul>

                                    <div class="information-box">
                                        <div class="imgbox">
                                            <ul class="list">
                                                <li class="blue">
                                                    <p class="top-text">대입정보포털 제공 입시정보를 활용한</p>  
                                                    <span class="bot-text">자기주도적 진로/진학 설계</span>  
                                                </li>
                                                <li class="plus"><i class="axi axi-plus2"></i></li>
                                                <li class="white">
                                                    <p class="top-text">학교내 진학지도와 대입상담을 통한</p>  
                                                    <span class="bot-text">공교육 중심 대학 진학컨설팅</span>  
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="txtbox">
                                            <span class="text">학생 스스로 진로와 적성, 성적을 고려하여 희망하는 학과와 대학, 전형 등을 구상한 후에 학교 내 대입상담을 받으면 짧은 시간에도 학생의 여견을 고려한 구체적인 상담이 가능</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <span class="title">서비스 내용</span>
                                    <p class="text">
                                        적성과 진로에 맞는 학과와 대학을 탐색하고, 희망 대학의 전형정보 비교·검색, 학습진단, 대입상담 등 수험생에게 필요한 맞춤식 정보 제공
                                    </p>

                                    <div class="table-boxWrap">
                                        <table class="row-table">
                                            <thead>
                                                <tr>
                                                    <th class="rt01">제공정보</th>
                                                    <th class="rt02">서비스내용</th>
                                                    <th class="rt03">비고</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td><span class="title">진로정보</span></td>
                                                    <td>
                                                        <ul class="list">
                                                            <li>한국고용정보원 워크넷 직업정보 제공</li>
                                                            <li>- 직업분류별, 테마별 직업정보 검색</li>
                                                            <li>- 직업별 일자리 전망, 관련직업, 관련학과 정보 등</li>
                                                            <li>- 직업심리검사</li>
                                                        </ul>
                                                    </td>
                                                    <td>일부 서비스<br> 로그인 필요</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="title">대학/학과/전형정보</span></td>
                                                    <td>
                                                        <ul class="list">
                                                            <li>적성과 진로에 맞는 학과와 대학, 전형정보를 탐색</li>
                                                            <li>- 대학별 교육 및 학사관리, 교육여건, 설치학과, 모집요강, 공시정보 등 정보</li>
                                                            <li>- 학과별 교육목표, 교육과정, 진로취업분야, 취업률, 경쟁률 등 학과 주요 정보</li>
                                                            <li>- 전형일정, 전형유형 및 모집단위별 전형요소, 학생부 및 수능 반영방법 등 정보</li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="title">성적분석</span></td>
                                                    <td>
                                                        <ul class="list">
                                                            <li>학생부 성적분석, 수능/교과 조합별 대학, 대학별 성적분석</li>
                                                        </ul>
                                                    </td>
                                                    <td>회원가입 후<br> 이용가능</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="title">대입상담</span></td>
                                                    <td>
                                                        <ul class="list">
                                                            <li>대학 진학에 관련된 궁금한 질문을 남기면, 진학지도 경험이 풍부한 현직 선생님들이 자세한 답변을 드리며, 성적을 등록 후 온라인 상담을 신청하면 보다 상세한 상담 가능</li>
                                                            <li>- 온라인 상담 : 대입정보포털 ‘어디가[ADIGA] 온라인상담 이용 (24시간 이내 답변)</li>
                                                            <li>- 전화상담 : 대표전화 “1600-1615”를 이용 1:1 상담</li>
                                                            <li>- 전공상담 : 전공에 대해 열정과 자부심을 가진 대학생으로 구성된 전공상담기부단이 직접 답변</li>
                                                        </ul>
                                                    </td>
                                                    <td>회원가입 후<br> 이용가능</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="title">대입정보센터</span></td>
                                                    <td>
                                                        <ul class="list">
                                                            <li>대입제도안내, 대입일정, 대입전략자료실, 대입소식, 대학별 입시정보, 대입박람회/설명회, 대학별 행사안내, 관련사이트 안내</li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="title">마이페이지</span></td>
                                                    <td>
                                                        <ul class="list">
                                                            <li>수험생 본인이 관심 있는 대입정보를 지정하여 마이페이지에 별도로 저장하여 활용</li>
                                                            <li>- 설정항목 : 관심대학/전형/진로, 일정관리, 성적관리, 상담내역, 신청/접수, 대입원서, 지원정보 등</li>
                                                        </ul>
                                                    </td>
                                                    <td>회원가입 후<br> 이용가능</td>
                                                </tr>
                                            </tbody>
                                        </table>
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