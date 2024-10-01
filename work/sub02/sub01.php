<? 
$_dep = array(2,2,1);
$_tit = array('주요업무','정책건의 및 자료개발','정책건의');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub02 under01">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/svis.php"; ?>

            <article class="cont cont1">
                <div class="inner w1300">
                    <div class="kr-topTitle-wrap">
                        <span class="title"><?=$_tit[2]?></span>
                        <ul class="sub-list">
                            <li class="home">
                                <i class="axi axi-home"></i>홈
                            </li>
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
                                    <p class="text">대학교육의 각 분야에 대한 각종 정책개발 및 각계 각층에 대한 건의를 통해 대학교육의 발전을 도모하고 회원 대학의 권익을 보고<br>
                                        각 대학의 공통과제 및 당면문제 해결을 위한 정책 방안을 연구하고, 그 결과를 회원대학, 정책당국 및 유관기관에 배포하며, 정책건의 및
                                        정책수립의 자료로 활용</p>
                                </div>

                                <div class="row">
                                    <span class="title">연도별 정책건의 현황</span>

                                    <div class="suggest-table">
                                        <div class="top">
                                            <div class="imgbox">
                                                <img src="<?=DIR?>/img/suggest_img.png" alt="연도별 정책건의 현황 이미지">
                                            </div>

                                            <div class="tab_wrap">
                                                <div class="row">
                                                    <span class="year-title">2000년대</span>
                                                    <ul class="list">
                                                        <li class="tab_item active" onclick="suggestTab(0)">2000</li>
                                                        <li class="tab_item" onclick="suggestTab(1)">2001</li>
                                                        <li class="tab_item" onclick="suggestTab(2)">2002</li>
                                                        <li class="tab_item" onclick="suggestTab(3)">2003</li>
                                                        <li class="tab_item" onclick="suggestTab(4)">2004</li>
                                                        <li class="tab_item" onclick="suggestTab(5)">2005</li>
                                                        <li class="tab_item" onclick="suggestTab(6)">2006</li>
                                                        <li class="tab_item" onclick="suggestTab(7)">2007</li>
                                                        <li class="tab_item" onclick="suggestTab(8)">2008</li>
                                                        <li class="tab_item" onclick="suggestTab(9)">2009</li>
                                                        <li class="tab_item" onclick="suggestTab(10)">2010</li>
                                                        <li class="tab_item" onclick="suggestTab(11)">2011</li>
                                                        <li class="tab_item" onclick="suggestTab(12)">2012</li>
                                                        <li class="tab_item" onclick="suggestTab(13)">2013</li>
                                                        <li class="tab_item" onclick="suggestTab(14)">2014</li>
                                                        <li class="tab_item" onclick="suggestTab(15)">2015</li>
                                                        <li class="tab_item" onclick="suggestTab(16)">2016</li>
                                                        <li class="tab_item" onclick="suggestTab(17)">2017</li>
                                                        <li class="tab_item" onclick="suggestTab(18)">2018</li>
                                                        <li class="tab_item" onclick="suggestTab(19)">2019</li>
                                                        <li class="tab_item" onclick="suggestTab(20)">2020</li>
                                                        <li class="tab_item" onclick="suggestTab(21)">2021</li>
                                                        <li class="tab_item" onclick="suggestTab(22)">2022</li>
                                                    </ul>
                                                </div>
                                                <div class="row">
                                                    <span class="year-title">1990년대</span>
                                                    <ul class="list">
                                                        <li class="tab_item" onclick="suggestTab(23)">1990</li>
                                                        <li class="tab_item" onclick="suggestTab(24)">1991</li>
                                                        <li class="tab_item" onclick="suggestTab(25)">1992</li>
                                                        <li class="tab_item" onclick="suggestTab(26)">1993</li>
                                                        <li class="tab_item" onclick="suggestTab(27)">1994</li>
                                                        <li class="tab_item" onclick="suggestTab(28)">1995</li>
                                                        <li class="tab_item" onclick="suggestTab(29)">1996</li>
                                                        <li class="tab_item" onclick="suggestTab(30)">1997</li>
                                                        <li class="tab_item" onclick="suggestTab(31)">1998</li>
                                                        <li class="tab_item" onclick="suggestTab(32)">1999</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bot">
                                            <div class="contents-view">
                                                <div class="tab_inner_wrap">
                                                    <div class="tab_inner active 2000">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2000년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">

                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">사학기관 재무·회계규칙 개정(안)에 대한 의견서 제출 | 2000. 3. 7</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">개정안에 신설되는 제22조 2(적립금의 적립 및 사용)에 대한 대교협의 의견을 제출함.</p>
                                                                            <span class="title">- 건의결과</span>
                                                                            <p class="text">사립 초·중등학교만 해당된다는 회신</p>

                                                                            <!--<ul class="list">
                                                                                <li><p>한국과학기술원의 박사과정 뿐만아니라 대학(교)의 대학원 박사과정도 특례업체에 포함시키고,</p></li>
                                                                                <li><p>대학부설연구소도 특례업체에 선정될 수 있도록 하며,</p></li>
                                                                                <li><p>인문·사회계 연구기관도 자연계 연구기관과 같이 연구전담요원을 10명 이상만 확보하면 특혜를 받을 수 있도록 하며</p></li>
                                                                                <li><p>특례 연구요원 추천에 문교부 장관은 인문·사회계 분야 및 대학부설연구기관을 관장하고, 과학기술처장관은 여타의 자연계를 관장하도록 하며,</p></li>
                                                                                <li><p>현재의 특수전문요원제도는 '89학년도 2학기 전문대학원 입학자가 불이익을 받지 않도록 그들 이 정상적으로 과정을 이수하는 1992년도 전기까지 존치하도록 수혜기간을 연장하고,</p></li>
                                                                                <li><p>특례로 선발된 학생 중 박사과정 시험의 합격자에 대하여는 의무 복무를 학위 취득시까지 유보 해 주고,</p></li>
                                                                                <li><p>만일 전국 대학(교)의 박사과정 대학부설연구소를 특례업체에 선정될 수 있도록 하는 것이 너무 많은 인원에게 병역 특혜를 주는 것이라는 비판이 있을 경우, 병역특례 연구요원은 모든 교육기관간에 공평하게 시험을 통하여 선발하거나 매년 특혜를 줄 수 있는 인원을 결정하여 문교부 장관 또는 병무청장이 직접 공정하게 선정할 수 있도록 조치</p></li>
                                                                            </ul>-->
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">지방대학 육성대책에 관한 입장 | 2000. 5. 11</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">지역의 균형적인 발전과 재정적인 어려움을 겪고 있는 지방대학의 육성 및 회원대학의 권익을 위하여 지방대학의 육성방안에 대한 대교협의 입장을 건의함</p>
                                                                            <span class="title">- 건의결과</span>
                                                                            <p class="text">지방대학 육성을 위한 대책 마련 및 지속적인 관심을 갖도록 하겠다는 회신</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학에 대한 '교통유발 분담금' 부과 방침 철회요청 건의 | 2000. 11. 11</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">건설교통부에서 대학에 대해서도 '교통유발 분담금'을 부과하겠다는 방침하에 법 개정을 시도하는 것에 대하여 대교협에서는 이의 철회를 건의함.</p>
                                                                            <span class="title">- 건의결과</span>
                                                                            <p class="text">교통유발 분담금 부과 대상에서 대학은 제외</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립학교법 개정 움직임에 대한 건의 | 2000. 12</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">일부 시민단체를 중심으로 공익이사제의 도입, 교수회의 의결기구화, 학교의 재정권 등을 주요 내용으로 하는 사립학교법 개정 움직임이 있음.</p>
                                                                            <span class="title">- 건의결과</span>
                                                                            <p class="text">각계의 의견을 충분히 수렴하여 개정안에 반영하도록 하겠다는 회신</p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2001">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2001년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법 및 사립학교법 개정(안)에 대한 의견서 제출 | 2001. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">교수회의 공식 기구화, 학사에 관한 사항의 이사회 심의·의결 대상 제외 등 고등교육법 및 사립학교법 개정(안)에 대한 대교협의 의견을 제출함.</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학 육성 방안 건의 | 2001. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">정부 발표 「지식정보화 사회에 부응한 교육여건 개선 추진계획」에 우리 나라 고등교육의 3/4을 차지하고 있는 사립대학에 대한 지원 방안이 포함되어 있지 않은 데 대해 문제를 제기하고, 구체적인 자료와 합리적 근거를 바탕으로 사립대학 육성 방안을 제안·건의함.</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2002">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2002년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">대학교육 정상화를 위한 교육용 전기요금 제도 개선 건의 | 2002</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text"></p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2003">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2003년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">[교육인적자원부 행정감사규칙(안)] 에 대한 의견 | 2003. 6. 11</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">기타 교육기관, 교육행정기관 및 산하단체」의 행정감사 주기를 3년으로 한다는 것 에 대해서 산하단체의 경우 그 특수성을 감안하여 3～5년으로 하는 것이 바람직하다 고 건의함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">[수도권정비계획법시행령중개정령안]중 수도권 대학신설 허용 계획에 대한 반대 의견서 | 2003. 7. 19</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">우리나라의 국토와 대학현실을 감안해 볼 때 지역 여하를 막론하고 새로운 대학을 신 설하여 학생수 부족으로 어려움을 겪고 있는 기존 대학 경영을 악화시키는 것을 국가 적으로 바람직하지 않은 일이라는 취지에서 수도권 대학 신설허용 계획을 밝히고 있는 상기 개정령안에 대해 반대의견을 제출함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">건설교통부, 교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">[대체에너지 개발 및 이용.보급 촉진법시행령개정(안)]에 대한 의견서 | 2003. 9. 2</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">상기 시행령개정은 신축건축물에 대한 대체에너지의 의무적 이용근거를 마련하기 위한 것으로 교육연구시설 부문에도 적용하려고 하는 것이었음. 교육연구시설을 포함하는 것은 정부가 외국과는 달리 사립대학에 대한 재정지원은 외면하고 계속 부담만 가중시 키는 정책으로서, 우리나라 사립대학이 겪고 있는 재정적 어려움을 도외시한 내용이므 로 모든 학교시설은 용도별 적용범위에서 제외해야 한다는 의견을 제출함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">산업자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">[연구 안전환경조성에 관한 법률안]에 대한 의견서 | 2003. 9. 9</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">연구안전환경조서에 있어서 안전관리교육 실시의 필요성을 제기하였으며, 안전점검 및 정밀안전진단에 소요되는 비용을 해당 대학ㆍ연구기관이 부담하는 것으로 되어 있는 것에 대해서 안전점검에 소요되는 비용은 해당 대학ㆍ연구기관 등이 부담하여, 정밀안 전진단에 소요되는 비용은 정부가 부담하도록 하는 의견을 제출함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">[학술진흥법시행령]중 개정안에 대한 의견서 | 2003. 9. 23</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">상기 시행령중개정안에 대해 부설 연구소를 두고 있는 기관도 포함하도록 하기 위해 동 개정안 제4조제2항제1호의 「...독립된 연구시설을 갖춘 법인인 학술연구 관련기관 등」 을 「...연구시설이나 부설연구소를 갖춘 학술연구 관련 기관 등」으로 수정할 것을 건 의함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">[제주 및 경제자유구역내 외국교육기관 설립.운영을 위한 특별법 제정안]에 대한 의견서 | 2003. 10. 9</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">① 외국교육기관의 무분별한 설립운영을 방지하기 위해 관련 법령 위반 사항에 대한 벌 칙을 두는 것이 타당함. 따라서 외국교육기관의 설립승인을 받지 아니하고 학생을 모 집하거나 설립승인 사항의 변경승인대상 사항에 대한 변경승인을 받지 아니하고 학생 을 모집하거나 학사를 운영하는 경우 등은 초ㆍ중등교육법 및 고등교육법의 규정과 동등한 벌칙 규정을 특별법에 추가하는 것이 바람직함.<br>
                                                                                ② 외국 고등교육기관을 설립하는 경우 인근 우리나라 고등교육기관 운여에 막대한 영향 을 미칠 수 있으므로, 외국 교육기관 설립 심사위원회 구성(법시행령제5조제2항)에 설 립신청의 시ㆍ군 소재 사립학교 설립운영자가 반드시 포함되도록 하는 것이 바람직함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">[대학 부설 평생교육기관]에 대한 법인세 부과 철폐를 위한 건의서 | 2003. 10. 15</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">국세청에서 대학부설 평생교육기관에 대한 법인세를 부과하는 것에 대해서, 대학부설 평생교육시설은 비영리 사업이고 비록 일부 수익이 발생하더라도 대학 교육비로 환원되 므로 그 자체로서 영리를 추구하지 아니하는 기관이기 때문에, 법인세를 면제되어야 한 다는 건의서를 제출함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">재정경제부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">구사립학교법 제53조의2 제3항 헌법불합치 결정에 따른 사립학교법 등 개정안에 대한 의견서 | 2003. 11. 3</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">재임용 대상의 심사기준에 대한 보다 명확한 근거를 마련하여 재임용 탈락에 따른 분쟁 의 소지를 줄일 필요가 있다고 보고, ‘객관적인 사유에 근거’라는 용어가 이해 관계자에 따라 달리 해석될 가능성이 있기 때문에 객관적 사유에 대한 보다 명시적인 규정이 필요 하다는 것과 법률개정에 따라 소급ㆍ적용되어 구제된 교원이 대학에 복귀했을 때 예견되 는 제반 문제해결에 대한 법적 장치가 필요하다는 의견을 제출함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학 기성회 직원 고용보험료 및 산재보험료 소급부과 철회 요청 | 2003. 11. 6</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">노동부가 국립대학 기성회 직원을 고용보험 부과 대상이 아닌 것으로 판정한 후, 그 방 침을 변경하여 ‘국가 또는 지방자치 단체가 직접 행하는 사업에 종사하는 근로자’도 고용 보험 대상자로서 가입하도록 요구하여 2000년 1월 1일부터 고용보험에 가입한 것임(산재 보험의 경우도 동일).<br>
                                                                                따라서 적법한 절차에 의하여 가입한 이후부터 보험료를 징수하는 것이 사회통념이나 법 치 질서에 합당한 것임.<br>
                                                                                보험에 가입한 시점 이전의 보험료를 징수하는 것은 법령 해석의 과실을 인정한다 하더 라도 보험료는 그 자체가 보험사건이 발생할 때 이를 지원하기 위한 재원확보에 있다는 점에서 보면, 소급적 보험료 징수는 그 원인의 무효로 인해 부당한 것으로 판단되기 때 문에 소급부과를 철회할 것을 요청함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">노동부, 교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">[지방대학 혁신역량 강화사업 세부 실행계획]에 대한 의견서 | 2003. 11. 12</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">현재 우리나라 지방대학의 실태에 비추어 보면 시안에서 제한한 참여조건(교원확보율 및 학생 충원율)이 지나치게 높게 설정됨으로써 상당수 지방대학들이 배제될 수밖에 없 고 이는 지방대학 육성정책의 취지와 근본적으로 부합되지 않는다고 의견을 제출함<br>
                                                                                또한 시안에 따른 세부사업들은 특정 대학에 대한 집중적 지원이 아니라 사업단위 중심 으로 지원되는 점을 감안해 볼 때 참여조건(교원확보율 및 학생충원율)을 제시하는 것 보다는 모든 지방대학에 문호를 개방하고 이에 따라 신청한 사업의 내용과 실현가능성 을 엄정하게 평가하여 선정하는 것이 보다 바람직하다고 의견을 제출함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2004">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2004년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">국립대 기성회직 고용보험료 및 산재보험료 소급 부과 철회 건의 | 2004. 12. 20</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">우리 협의회는 고용 산재보험 관련법 시행과 관련하여 가입하지 않은 일정 기간의 국립대학교 기성회직 보험료를 소급해서 부과하는 것이 부당하므로 이를 철회해줄 것을 요청한 바 있는데, 실제로 부경대학교가 행정소송을 통해 이 문제에 대한 최종 승소판결을 받고 소급 부과된 보험료를 반환받는 사실이 있어서, 동일한 사유로 보험료가 소급 부과된 다른 국공립대학의 경우에도 같은 조치가 이루어져야 하므로, 다른 대학에 기 부과된 상기 보험료 부과처분을 철회하여 줄 것을 건의</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">노동부장관, 근로복지공단 이사장</p>
                                                                        </div>
                                                                    </div>
                                                                </li>


                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">인턴채용제(지역인재추천채용제) 도입 관련 건의 | 2004. 11. 29</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">중앙인사위원회가 도입 운영할 계획중에 있는 인턴채용제(지역인재추천채용제)의 적용대상 대학에서 산업대학을 제외하는 것은 일반대학과 기능면에서 차이가 없는 산업대학의 현실을 전혀 고려하지 않은 것으로서 산업대학 학생들에게 선의의 피해를 안겨주고, 아울러 인턴채용제 도입 목적이 공무원 채용방식의 다양성 및 지역인재의 균형 있는 등용에 있다는 점을 고려해 볼때 산업대학을 제외하는 것은 공직 임용의 기회 균등 차원에서 바람직하지 않으므로, 산업대학을 포함시키는 방향으로 법 개정이 이루어질 수 있도록 건의</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">중앙인사위원회</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학 직장 예비군 지휘관 임명과 관련한 건의 | 2004. 8. 17</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">국방부가 ‘국방부 예비군 지휘관 인사관리 규정’ 개정을 통해 대학의 직장 예비군 지휘관을 국방부장관 및 수임군부대장이 임명하도록 한 것은 대학의 장과 재단이사장에 의해서 이루어지도록 되어 있는 현행 대학 교직원 임명절차와 배치될 뿐만 아니라 전담지휘관 임명에 따라 대학재정의 어려움을 가중시킬 것으로 예상됨에 따라 대학의 부담이 최소화될 수 있는 방향으로 관련 규정을 재검토하여 줄 것을 건의</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국방부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">하계 대학총장세미나 결의 사항 건의 | 2004. 7. 21</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">2004년 하계 대학총장세미나에서 결의문으로 채택한 내용(대학교육재정의 확충, 대학의 학생선발방식 자율화)이 정부정책에 반영될 수 있도록 관련 정부부처에 건의</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부, 재정경제부, 행정자치부, 국회 교육위원회</p>
                                                                        </div>
                                                                    </div>
                                                                </li>



                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2005">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2005년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">2005년도 하계대학총장세미나(대학경쟁력강화특별위원회) 건의사항 | 2005. 7. 1</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>가. 대학입시제도</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1. 대학의 특성화를 위하여 학생선발권이 보장되지 않으면 안된다.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>2. 대학은 자율적인 학생선발권을 행함에 있어 고교교육정상화를 고려하도록 하고, 학생 수학능력 변별을 위한 다양한 선발자료가 마련되도록 하여야 한다.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>3. 정부가 유지하고 있는 3불정책은 이해하나 지원다들의 수학능력을 변별할 수 있도록 논리적,수리적,과학적 사고 측정 등 다양한 형태의 논술고사는 허용되어야 한다.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>4. 기여입학제는 국민정서를 감안하여 시기상조라고 생각한다.</p>
                                                                                </li>
                                                                            </ul>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>나. 산학연협력</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1. 산학협력단을 대학의 조직으로 명기하여 위상 및 역할 재정립</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>2. 산학협력단의 세금 관련 법 개정 및 제도 보완</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>3. 산학혁력단의 회계 간소화 및 회계 프로그램 개선</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>4. 산학협력단의 교비 전입 범위 명시 및 허용</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>5. 산학협력사업의 대학 대응자금 관리 방안 개선</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>6. 독립 캠퍼스별 산학협력단 설치 허용</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>7. 사립대학의 학교기업 회계를 산학협력단 회계로 이관</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>8. 국공립대학에 설립되는 학교기업에 사업자등록증 교부</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>9. 산학협력전담 교원을 위한 제도 개선</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>10. 산학협력사업에 대학 보유의 자산 및 현금 출연 허용</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>11. 산학협력 참여기업에 대한 인센트브 제공</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>12. 산학협력단 운영 및 내실화를 위한 재정지원 사업 추진 및 시설확충</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>13. 소규모 단위 산학협력사업 및 지방대학을 지원하기 위한 정책수립</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>14. 균형 있는 산학연협력 사업의 추진</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>15. 산학협력단에 산학협력 계약 체결권 부여</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>16. 지적재산권 관련 발명구분에 대한 기준 정립</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>17. 산학연협력 사업 담당자의 전문화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>18. 산학연학력 통합정보시스템 구축 및 우수사례 확산 보급 사업 추진</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>19. 건의사항 추진 현황에 대한 피드백 시스템 구축</p>
                                                                                </li>
                                                                            </ul>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>다. 지역균형발전</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1. 로스쿨 배정에서 지역균형 배분의 원칙이 적용되어야 하며, 지방대학을 우선 고려</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>2. 지방대학 지원예산을 대폭 증액</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>3. 지역인재할당제를 달성할 수 있는 다양한 정책을 개발</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>4. 평가시스템의 개선</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>5. 선진국의 지역균형발전 사례에 대한 벤치마킹 지원</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>6. 학생편입제의 개선 필요</p>
                                                                                </li>
                                                                            </ul>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>라. 국제화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1. 복수학위제와 공동학위제에 관한 명확한 개념 및 취득기준 제시</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>2. 국내대학의 해외분교 설립운영에 관한기준(법률, 시행령)개선</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>3. 대학의 국제화 노력에 정부의 재정지원확대 요망</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>4. 한국어,한국학 육성에 대한 교육부 지원요청</p>
                                                                                </li>
                                                                            </ul>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>마. 구조조정</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1. 정부는 대학과는 합의를 통해 대학교육에 대한 명확한 비전을 제시하고,</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>2. 정부는 대학이 실질적인 구조조정을 할 수 있도록 관련 제도 법령을 정비하고, 지속적인 행재정 지원 의지를 보여야 한다.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>3. 획일적인 구조조정에서 탈피하여, 대학의 규모/여건/특수성 등을 고려한 차별적 구조조정을 시행해야 한다</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>4. 고등교육평가원 설립은 대학의 자율성을 저해하고 부담을 가중시킨다. 대교협의 대학평가를 개선하여 시행하는 것이 바람직 하다.</p>
                                                                                </li>
                                                                            </ul>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>바. 교육학술개발</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1. 기초교양 및 전공 교육의 안정화를 위하여 다양한 형태의 교수제도를 운영할 수 있도록 탄력적인 교원제도 운영과 재정적 지원 필요하다.</p>
                                                                                </li>
                                                                            </ul>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>사. 대학재정확충</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1. 고등교육에 대한 정부의 재정지원 확대</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>2. 대학구조개혁 지원 사업의 지원금액이 매우 불충분</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>3. 세제개선을 통한 대학지원</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>4. 민자유치를 통한 교육시설 설치시 세제지원</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>5. 대학의 자산기금 운용의 효율화</p>
                                                                                </li>
                                                                            </ul>




                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>


                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학교 기성회직 고용보험료 및 산재보험료 소급 부과 철회 요청 제출 | 2005. 2. 1</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">국립대학교 기성회직 고용보험 및 산재보험 부과 철회 요청에 대하여 노동부는 근로복지공단에 이첩하고 행정소송법 제19조 제1항에 따라 근로복지공단에 동 소급보험료 부과 취소 지시 요청</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">노동부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>





                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2006">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2006년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법 개정법률안 및 사립학교법에 대한 건의 | 2006. 10. 20</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">시간강사의 전임교원화, 명예교수 제도의 폐지 및 등록금 상한제 도입 등 고등교육법 개정법률안에 대하여 회원대학의 의견을 수렴한 결과, 대다수가 반대하는 의견을 제시하였으므로 이에 대한 적극적인 검토와 수용을 건의. 또한, 현행 사립학교법에 대하여도 개정법률에 대한 헌법소원이 제출되어 있는 상황이고, 국회와 정부 내에서도 개정에 대한 논의가 진행되고 있는 점을 고려하면, 현행 사립학교법의 재개정은 불가피 할 것임을 건의.</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>


                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">2006 하계 총장 세미나 채택 건의 사항 제출 | 2006. 7. 12</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">대학구조개혁 일반, 대학 내부개혁, 대학간 통폐합 및 캠퍼스 다변화 전략 등에 관하여 채택된 세부 의견을 정리하여 건의</p>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학구조개혁 일반 건의 내용 예시</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1. 구조개혁 선도대학에 대한 재정지원은 대폭 확대되거나 또는 재정확충을 위한 대학의 자율성이 강화되어야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>2. 정원감축에 따른 인센티브 차원의 재정 지원시, 대학의 규모 및 재정자립도 등을 고려한 탄력적 기준을 적용해야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>3. 정부의 Srudy Korea 정책의 기본 취지를 감안하여, 전체 학생 수에서 외국인 학생을 정원 외로 분류한 학생 수를 기준으로 하여 구조개혁 관련 교원 및 교사확보율을 산정하는 것이 타당함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>4. 구조개혁 선도대학에 대해서는 대학입시에 자율성을 부여함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>5. 대학구조개혁에서 개별대학의 특수성이 충분히 고려되어야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>6. 구조개혁 관련 평가지표가 개선되어야 함</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학 설립 운영 관련 규제 개선에 관한 대학 의견 제출 | 2006. 2. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">홍익대 외 8개 대학에서 제출한 대학 설립 및 운영 관련 규제 개선에 대한 의견을 총괄하여 제출. 대학에서 제출한 주요 쟁점사항은 경미한 학원정관변경요건 완화, 학교법인 임원 연임시 보고제로 전환, 대학 밖 교육시설 설치제한 완화, 감가삼각 충당적립금 제도 신설 및 운영손실 충당 적립금 제도신설 등.</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국무조정실</p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2007">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2007년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">국내대학과 외국대학의 교육과정 공동운영에 관한 규정개정 입법의견 제출 | 2007. 12. 26</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">대학자율화의 관점에서 공동학위 과정을 효율적으로 운영하기 위해서는 개별 대학간의 합의에 따라 운영하는 것이 바람직함.</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>

                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법시행령개정령안, 학점인정 등에 관한 법률시행령 및 규칙 개정령안 입법의견 제출 | 2007. 12. 26</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">고등교육법 제11조의2(평가) 신설에 따른 시행령 제정이 동시에 추진되어야 함.<br>
                                                                                시간등록제, 학점은행제의 대폭 확대 실시에 상응하는 교육의 질 확보를 위한 제도적 장치가 미흡함.</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">겸임교원에게 부과되는 국민건강보험료 징수 철회 재건의 | 2007. 12. 21</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">겸임교원은 시간제근로자로서 1개월간 80시간 이하의 근무를 하기 때문에 국민건강보험법 제10조 2항에 따라 겸임교원에 대한 건강보험료를 부과 할 수 없으며 "고등교육법17조(겸임교원 등)에서는 교원 외에 겸임교원의 신분을 따로 규정" 따라서 대학의 겸임교원의 신분을 고등교육법상 교원으로 해석하는 것은 무리가 있음</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">보건복지부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">학술진흥 및 학자금 대출 신용보증 등에 관한 법률 일부개정법률안(지병문의원) 에 대한 입법의견 제출 | 2007. 11. 30</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">학술진흥 및 학자금 대출 신용보증 등에 관한 법률 일부 개정법률안(지병문의원) [학술진흥 및 학자금 대출 신용보증 등에 관한 법률] 제40조 제1항 제3호의 2를 신설에 대한 입법의견 제출.<br>
                                                                                학자금대출신용보증기금에서 대학생이 대출받은 학자금의 일정기준 이상의 대출이자를 보전해 줌으로써 고등교육의 실질적 기회균등에 기여할 수 있음.</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">학교기업의 설치에 관한 규정 일부 규정 입법의견 제출 | 2007. 11. 30</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">제3조(학교기업의 소재지) 소재지의 제한을 완화하면서도 다시 제2문에서 범위를 제한하는 것은 행정편의적 발상으로서 불필요한 규제에 해당함.</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사학기관 재무 회계 규칙 일부 개정령(안) 입법의견제출 | 2007. 11. 26</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">제22조의 2(적립금의 적립 및 사용) 적립금은 그 상당액을 기금으로 예치하여 관리하되, 고등교육법 제2조의 각호에 해당하는 사립학교에서는 [자본시장과 금융투자업에 관한 법률] 제4조 2항 각호의 증권을 취득 할 수 있다.</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">2008년 교육인적자원부소관 예산안 중 고등교육재정 삭감에 대한 재고 요청 | 2007. 11. 15</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">국립대학 시설사업비 200억원, 국공립대학병원 예산 20억원 삭감(안) 재고 요청</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회예결위, 국회교육위원회, 한나라당 정책위원회, 국민통합신당 정책위원회</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">학교법인 증여세 부과에 따른 철회 건의 | 2007. 11. 15</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">국세청이 [공익법인의 설립 운영에 관한 법률과 일부 민법 및 상속세 및 증여세법에 규정된 공익법인 내지는 일반 재단법인에 적용되는 법]을 별도의 사립학교법 및 고등교육법의 적용을 받아야 할 학교법인에 증여세를 부과 징수한다는 것은 부당 부과된 증여세(가산세)에 대한 취소 건의</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국무총리, 재정경제부, 교육인적자원부, 국세청</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학겸임교원에 부과되는 국민건강보험료 징수 중지 건의 | 2007. 11. 15</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">겸임교원은 시간제근로자로서 1개월간 80시간 이하의 근무시간을 가지고 있기 때문에 국민건강보험법 제10조 2항에 따라 겸임교원에 대한 건강보험료를 부과 할 수는 없음.</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국무총리, 교육인적자원부, 보건복지부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">교육 관련 기관의 정보공개에 관한 특별법 시행령 제정 입법의견 제출 | 2007. 11. 9</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">제4조(고등교육기관의 정보공시 범위, 횟수 및 시기 등) 제 7조(총괄관리 기관 및 항목별 관리기관의 지정) 등</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">[고등교육비전 415] 에 대한 대선공약 반영 협조요청 | 2007. 11. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">[고등교육비전 415]에 대한 대선공약 반영 협조요청</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">한나라당, 대통합민주신당</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">'법학전문대학원 설치 운영에 관한 법률 시행령'제정 관련 의견 제출 | 2007. 8. 13</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">법학전문대학원 설치 운영에 관한 전반적인 내용에 대한 의견 제출(인원, 현지조사단, 대학평가전문인 등)</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">기간제 및 단시간근로자 보호 등에 관한 법률 시행령 및 시행규칙 입법예고 관련 의견 제출(1차/2차) | 2007. 5. 8/2007. 5. 29</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">기간제 및 단시간근로자 보호 등에 관한 법률 시행령 및 시행규칙 입법예고 관련 의견 제출</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">노동부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">학술진흥 및 학자금 대출 신용보증 등에 관한 일부 개정법률안 의견조회에 대한 회신 | 2007. 1. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">대학의 전체등록금 수입 중 장학금 지출 비중이 낮고(14.5%), 전체 장학금의 국가지원이 미흡한 상황(11.5%)에서 국가 장학기금을 설치하여 저소득층의 우수학생을 대상으로 학자금을 무상으로 지원하는 방안은 매우 바람직함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육인적자원부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2008">

                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2008년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">교육관련기관의 정보공개에 관한 특례법 시행령(안)에 대한 입법 의견 | 2008. 8. 8</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>



                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>등록금 문제로 인한 학내 갈등 해소 방안의 하나로 ‘학생 1인당 교육비 산정 근거'를 교육정보공개법 시행령에서 밝혀주는 것이 타당함. 이러한 입법적 보완 조치를 통해 등록금상한제 입법논의에 대응</p>
                                                                                </li>

                                                                            </ul>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>총괄관리기관과 항목별관리기관의 업무 영역을 명시적으로 분담할 필요가 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>[총괄관리기관] : 정보의 수집 및 관리, 실태조사 및 보고, 관련 업무 수행으로 조정</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>[항목별관리기관] : 총괄기관을 보조하여 정보의 수집 및 관리, 정보의 신뢰도 확보를 위한 확인 및 검증 업무 담당</p>
                                                                                </li>
                                                                            </ul>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>공시정보의 신뢰도 확보를 위해 관리기관의 확인·검증 절차를 거치는 제도적 장치가 필요함</p>
                                                                                </li>

                                                                            </ul>




                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">교육관련기관의 정보공개에 관한 특별법 일부개정벌률안(권영진 의원 대표발의)에 대한 입법 의견 | 2008. 8. 8</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">‘학생 1인당 교육비 산정근거'를 공시함으로써 수요자의 신뢰 회복에 기여할 수 있다는 견해에 동의하나 근거 규정을 법률에 추가적으로 예시하기보다는 동법 시행령 [별표2]의 8-10 ‘등록금 현황' 항목을 ‘등록금 및 학생 1인당 교육비의 산정근거에 관한 사항'으로 조정하는 것이 충분하고 실현 가능한 방안으로 사료됨</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학자율화 2단계 1차 추진과제에 대한 의견 | 2008. 8. 8</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">‘대학자율화 추진과제'로 제출한 5개 분야(학생선발, 교무/학사 행정 운영, 국립대에 대한 특유한 사항, 사립대에 대한 특유한 사항, 대학재정 및 수익 증대 관련) 21개 추진과제에 대하여 학생 선발 분야 등 상당수 의견에 대한 정부의 입장 표명이 누락되어 있으므로, 앞으로 있을 대학자율화 2단계 2차 발표에서는 이를 긍정적으로 수용할 것을 촉구함</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법 일부개정 법률안(김희철 의원 대표발의)에 대한 입법 의견 | 2008. 7. 23</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">고등교육법 일부개정법률안(등록금상한제 등 관련)에 대한 입법의견</p>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>고등교육법 제11조(수업료 등)에 제 2항 내지 제 4항을 신설하고, 같은 법 제 11조의2(수업료와 그 밖의 납부금 조정심의위원회)를 신설하면서 현행 제11조의2(평가)에 관한 조문을 제11조3으로 변경하려는 동법 일부 개정 법률안은 입법을 위한 타당성을 결하고 있으므로 동 법안은 철회되는 것이 바람직함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>열악한 고등교육 재정으로 인한 고등교육연구의 경쟁력 제고의 어려움을 감안, 가칭 고등교육재정교부금법의 입법과 같은 재정 여건을 개선할 수 있는 조치가 선행돼야 함</p>
                                                                                </li>

                                                                            </ul>



                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">2008년도 조세감면 관련 의견 제출 | 2008. 5. 2</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">대학기부금에 대한 세액공제 도입, 대학 교육용 기자재 구입 및 건축용역에 대한 부가세 환급, 교육 연구 관련 수입물품에 대한 관세 감면 확대, 대학 내 복지 편의시설 비과세 등</p>
                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사이버대학 설립 운영규정 등 입법예고안에 대한 의견 제출 | 2008. 3. 7</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">사이버대학 설립 운영규정 등에 관한 전반적인 내용에 대한 의견 제출</p>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>시설 기준면적의 경우 학생수의 증가에 따라 연차적으로 교사 기준을 강화하는 것이 바람직함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>“학생수 200명당 전임교원 및 조교 각 1인을 확보” 기준은 쌍방형 수업운영, 학생 지도와 관리, 주기적인 출석 수업을 전제로 하는 한 크게 미흡함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>원격대학형태의 평생교육시설에서 고등교육법상의 사이버대학으로의 전환 신청 시 엄격한 평가절차를 마련하는 보완이 필요함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사이버대학의 특성을 반영하여 ‘디지털 자료실'의 확보가 필요함</p>
                                                                                </li>

                                                                            </ul>



                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">2008년 조세감면기본계획 수립을 위한 의견 제출 | 2008. 3. 7</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">조세특례제한법 제76조의 2(대학에 대한 기부금의 손금산입특례 등) 신설</p>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>기부자가 대학에 기부한 기부금은 10만원까지는 이를 지출한 해당 과세연도의 소득세에서 공제하고, 10만원을 초과한 금액에 대해서는 종합소득금액에서 공제하거나 소득금액 계산에 있어서 이월결손금을 차감한 후의 소득금액의 범위 안에서 이를 손금에 산입함</p>
                                                                                </li>


                                                                            </ul>



                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">'대학자율화 추진과제' 제출 | 2008. 1. 3</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">대학자율화추진위원회가 검토한 대학자율화관련 영역별 추진과제의 주요사항 제출</p>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>5개분야(학생선발, 교무/학사 행정 운영, 국립대에 대한 특유한 사항, 사립대에 대한 특유한 사항, 대학재정) 21개 추진과제에 대한 검토의견 제출</p>
                                                                                </li>


                                                                            </ul>



                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">대통령직 인수위원회</p>
                                                                        </div>
                                                                    </div>
                                                                </li>


                                                            </ul>

                                                        </div>
                                                    </div>








                                                    <div class="tab_inner 2009">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2009년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법시행령 일부개정안 검토의견 제출(제29조) | 2009. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">상속세 및 증여세법 시행령 개정 입법의견 제출 | 2009. 6. 18</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">기획재정부, 교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">2009년도 조세감면기본계획 수립을 위한 의견 제출 | 2009. 5. 19</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">한시적 규제 유예 추진계획 검토의견 제출 | 2009. 4. 15</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국무총리실</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">한국대학교육협의회법 개정안에 대한 검토의견 제출 | 2009. 4. 7</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학도서관진흥법안(정두언의원 대표발의) 검토의견 제출 | 2009. 4. 3</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">문화관광부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">UNESCO 한국위원회 요청 자료 작성 | 2009. 3. 27</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법 일부개정법률안(이성헌의원 대표발의) 검토의견 제출 | 2009. 3. 27</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2010">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2010년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">고등교육재정교부금법 제정 건의 | 2010.1.18</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회, 교육과학기술부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">인력양성 세제지원방안 실시기한의 연장 | 2010.1.19</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">교육역량강화사업비 사용 제한 완화 및 평가방식 개선 | 2010.1.19</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국가유공자 관련 사립대학 장학금 지원보조 확대 | 2010.1.19</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학 민간자본 유치사업(BTL, BTO) 부가세 환금 | 2010.1.19</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국무총리실</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">학자금 대출한도 제한 완화 건의 | 2010.9.2</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">언론사 평가에 대한 대학의 입장 | 2010.10.14</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">변호사시험 합격자 결정방법에 대한 의견 | 2010.12.6</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">법무부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2011">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2011년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">취업후 학자금 상환제 대출금리 인하를 위한 건의 | 2011.5.4</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법 개정안 대정부 건의 | 2011.5.24</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">등록금 부담 완화 논의와 관련한 건의 | 2011.5.30</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회, 교육과학기술부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">등록금 대책에 대한 의견 표명 | 2011.6.23</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학의 수업목적 저작물에 대한 자유이용 추진 결의 | 2011.8.5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">문화체육관광부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학자율성 확보에 대한 성명 | 2011.11.7</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">감사원, 교육과학기술부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">중등학교 선진화방안에 대한 입장 | 2011.12.14</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2012">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2012년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">변호사 시험제도에 관한 건의 | 2012.5.7</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">법무부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학 수업목적 저작물 이용보상금 기준 부당성에 대한 건의 | 2012.6.4</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">문화체육관광부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">신입생 모집정지 인원에 대한 재학생충원율 산식변경 건의 | 2012.6.12</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">21세기 인재양성 생태계 구축 선언 | 2012.9.10</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육과학기술부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">시간강사제도 시행유보에 대한 건의 | 2012.11.13</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회, 교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학 민자시설 부가세 감면에 관한 건의 | 2012.11.27</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회, 교육과학기술부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2013">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2013년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">교육과학기술부 개편방향에 대한 건의 | 2013.1.18</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">대통령직인수위원회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">수업목적 저작물 이용보상금 제도에 관한 건의 | 2013.1.31</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">문화체육관광부, 교육과학기술부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">변호사 시험제도에 관한 건의 | 2013.5.31</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부, 법무부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학 경쟁력 강화를 위한 대정부 건의 | 2013.6.27</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">시간강사 관련 고등교육법 개정 건의 | 2013.8.7</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회, 교육부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">시간강사 관련 고등교육법시행령 개정관련 건의 | 2013.9.2</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학 구조개혁에 대한 지역대학의 입장 | 2013.11.27</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>


                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2014">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2014년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">대학 구조개혁 추진계획에 대한 입장 및 건의 | 2014.2.5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학 구조개혁정책 추진에 대한 건의 | 2014.4.8</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육발전을 위한 대학선언 | 2014.6.26</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학에 대한 국가유공자 교육비 지원 개선방안에 대한 건의(8.29) | 2014.8.29</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국가보훈처</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">지방세특례제한법 일부개정안에 대한 건의 | 2014.10.21</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부, 국무총리실(교육문화여성정책관), 안전행정부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학 간 협력 정책 추진에 관한 건의 | 2014.11.18</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">변호사 선발제도 및 법학전문대학원 운영제도 개선에 관한 건의 | 2014.11.24</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">법무부, 교육부, 대법원, 대한변호사협회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2015">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2015년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">고등교육 발전을 위한 대학 규제개혁 건의 | 2015.1.9</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">전문대학의 수업연한 다양화 관련 현황 및 문제점 보고 | 2015.2.13</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">기부금 세제지원 개선을 위한 청원 | 2015.3.31</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">기획재정부, 기획재정위원회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">강사제도 개선을 위한 건의 | 2015.9.21</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부, 교육문화체육관광위원회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학에 대한 국가유공자 교육비 지원 개선방안에 관한 건의 | 2015.11.12</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법 일부개정법률안(시간강사법)의 조속한 처리 건의 | 2015.12.29</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">법제사법위원회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2016">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2016년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">외국대학과의 교육과정 공동운영시 학점인정 규제완화 등 규제개선 과제 건의 | 2016.2.15</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학발전을 위한 과제 건의 | 2016.4.7</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">새누리당, 더불어민주당, 국민의당</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학시설, 학사운영, 산학협력분야 등에 대한 신규 규제개선 과제 도출 및 건의 | 2016.8.2</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">시간강사 처우 개선을 위한 고등교육법 개정(안)에 대한 대학 의견 제출 | 2016.11.1</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">2주기 대학구조개혁 추진 방향에 대한 의견 제출 | 2016.11.9</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2017">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2017년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">고등교육의 위기 극복과 정상화를 위한 건의 | 2017.1.24</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육분야 규제개선 건의(상반기) : 국립대 소재지 제한규제 개선 등 5과제 | 2017.1.26</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학발전을 위한 정책 건의 | 2017.4</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회, 정당, 교육부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">인증중심의 대학구조개혁 추진방안 건의 | 2017.6</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국정기획자문회의, 국회, 교육부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학교육의 위기 극복과 미래 준비를 위한 건의 | 2017.6.29</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회, 교육부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육분야 규제개선 건의(하반기) : 산학협력단 사업장 안전 보건 관리 개선 등 13과제 | 2017.9.9</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학 교외 기숙사 교육용 전기요금 적용 건의 | 2017.11.1</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">한국전력공사</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법 일부개정안 폐기 및 강사제도 개선을 위한 건의 | 2017.11.28</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회, 교육부 등</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2018">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2018년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">대학의 논문 구독료 정부 재정지원 증액 건의 | 2018.1.30</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">정부 및 국회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학등록금 부담완화 조치에 대한 보완정책 건의문 채택 | 2018.1.30</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">정부 및 국회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2019">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2019년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">사미래사회 대비 고등교육 변화 방향에 대한 건의 | 2019.1.23</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">규제개선 건의(재정회계, 세제개선, 시설, 산학협력, 입학?정원, 학사제도, 기타 등) | 2019.5.17, 2019.7.4, 2019.12.6</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">규제개혁위원회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                 <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국가장학금 참여요건 완화, 혁신지원사업비 운영 개편 촉구, 대학기본역량진단 획일적 상대평가 폐지 | 2019.12.4</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부 및 기재부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2020">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2020년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">코로나19 팬데믹 관련 대학의 다짐과 건의 말씀 | 2020.4.16</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학의 국가장학금 이중 계상 문제 개선 건의 | 2020.11.30</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2021">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2021년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">고등교육 위기 극복을 위한 재정 지원방안 긴급 건의 | 2021.6.10</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">교육부, 기획재정부</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab_inner 2022">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">2022년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">대통령 후보자에게 대학 정책 건의 | 2022.2.21</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">국회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대통령직 인수위원회에 정책 건의 | 2022.4.1</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">

                                                                            <span class="title">- 건의처</span>
                                                                            <p class="text">대통령직 인수위원회</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>










                                                    <div class="tab_inner 1990">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">1990년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">

                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">대학재정 확보를 위한 건의</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">한국대학교육협의회는 날로 어려워지고 있는 각 회원대학의 재정난 해소를 위해 1990년도(700억원의 정부지원을 확보)에 이어 1991년에도 제45차 및 제46차 이사회에서 많은 논의를 한 끝에 정부를 비롯한 각계의 지원을 요청함과 아울러 각 대학에서도 보다 적극적인 자구적 노력을 경주키로 합의한 바 있음.<br>
                                                                                이사회의 합의에 따라 지속적인 대정부 건의를 벌인 결과 600억원의 대학재정지원예산(사립대학 무상보조 200억원, 국·공립대학 장학금보조 200억원, 사학진흥재단 융자금 200억원)을 요청</p>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">1991년도 예산에 사립대학 무상보조 200억원, 국·공립대학 장학금 보조 200억원, 사학진흥재단 융자금 200억원 등 총 600억원의 대학재정 지원 예산 확보</p>


                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학교수 기성회 연구보조비 과세방침 철회를 위한 건의</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">1990년 8월말 정부는 그동안 전액 비과세하여 왔던 교원의 기성회 수당과 연구보조비에 대하여 1인당 연간 120만원을 제외하고는 모두 과세하고자 하는 세제개편안을 제안하였음.<br>
                                                                                본 협의회는 이러한 세제개편안은 대학재정에 감당할 수 없는 충격을 줌과 동시에 교수들의 사기 저하 및 연구 위축을 초래할 것으로 판단하고, 문교부와 공동으로 지속적인 대정부 건의 활동을 벌임.</p>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">대학교수 기성회 연구보조비에 대하여는 매년 교육부 장관과 재무부 장관이 협의하여 결정하도록 하였으며, 1991년에는 봉급중 50%까지 비과세하는 것으로 부처간 협의</p>


                                                                        </div>
                                                                    </div>
                                                                </li>


                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">병역의무의 특례규제에 관한 법률시행령(안)의 제정을 위한 건의 | 1990. 2. 28</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">병역의무의 특례규제에 관한 법률시행령(안) 중에서 불합리하게 규정된 사항들을 다음과 같이 각 교육기관간에 형평하게 시정해 줄 것을 건의</p>


                                                                            <ul class="list">
                                                                                <li>
                                                                                    <p>한국과학기술원의 박사과정 뿐만아니라 대학(교)의 대학원 박사과정도 특례업체에 포함시키고,</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학부설연구소도 특례업체에 선정될 수 있도록 하며,</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>인문·사회계 연구기관도 자연계 연구기관과 같이 연구전담요원을 10명 이상만 확보하면 특혜를 받을 수 있도록 하며</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>특례 연구요원 추천에 문교부 장관은 인문·사회계 분야 및 대학부설연구기관을 관장하고, 과학기술처장관은 여타의 자연계를 관장하도록 하며,</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>현재의 특수전문요원제도는 '89학년도 2학기 전문대학원 입학자가 불이익을 받지 않도록 그들 이 정상적으로 과정을 이수하는 1992년도 전기까지 존치하도록 수혜기간을 연장하고,</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>특례로 선발된 학생 중 박사과정 시험의 합격자에 대하여는 의무 복무를 학위 취득시까지 유보 해 주고,</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>만일 전국 대학(교)의 박사과정 대학부설연구소를 특례업체에 선정될 수 있도록 하는 것이 너무 많은 인원에게 병역 특혜를 주는 것이라는 비판이 있을 경우, 병역특례 연구요원은 모든 교육기관간에 공평하게 시험을 통하여 선발하거나 매년 특혜를 줄 수 있는 인원을 결정하여 문교부 장관 또는 병무청장이 직접 공정하게 선정할 수 있도록 조치</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학발전과 교육여건 개선을 위한 건의 | 1990. 2. 28</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">협의회 제11차 총회(1990. 2. 13)에서 논의된 대학의 당면과제의 해결을 위하여 다음과 같은 사항을 문교부에서 적극 협조하여 줄 것을 건의</p>


                                                                            <ul class="list">
                                                                                <li>
                                                                                    <p>실질적인 대학 자율화 촉구</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학재정 위기 극복을 위한 지속적인 재정지원 요망</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>병역의무 특례규제에 관한 법률시행령(안)의 합리적 제정</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>종합대와 단과대의 구분 폐지</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>광주·호남지역에 설립 예정인 새로운 과학기술대학의 설립을 재고하고, 그 투자상정액을 그 지역의 이공계 대학에 투자해 줄 것을 요망</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학시설의 확충을 위한 각종 규제법령의 완화</p>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학 운영비 국고보조예산 반영 요청 | 1990. 3. 28</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">1991년도에 전국 4년제 사립대학 예산의 20% 상당액인 약 2,500억원을 稅計剩餘金에 의한 1990년도 추경 및 1991년도 예산에 반영하여 줄 것을 요청</p>



                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">1990년도 사학진흥기금 융자에 관한 건의 | 1990. 4. 27</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">1990년도 대학재정 지원예산 700억원 중 사학진흥재단에 의해 집행하도록 되어 있는 300억원의 융자기금에 대하여 당초의 지원취지가 최대한 반영될 수 있도록 적극 협조하여 줄 것을 건의</p>



                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립단과대학의 종합대 개편에 대한 건의 | 1990. 4. 24</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">1990년 4월 13일 국립단과대학장의 간담회 결과에 따라 국립단과대학의 종합대학 개편 방향에 대해서 건의</p>


                                                                            <ul class="list">
                                                                                <li>
                                                                                    <p>종합대학교로 개편되는 다른 국립대학과 마찬가지로 현재의 국립단과대학을 명칭이나 형식에 있어서 종합대학 체제로 개편하여 주고, 만약 현재 예산·인사상의 여건 등으로 인하여 당장 국 립단과대학을 종합대로 개편하기가 어렵다면, 우선 '대학'의 '대학교'로의 행정체제를 정비하는 방안을 검토하여, 이에 대한 명확한 일정을 해당 대학에 통보하여 주며, 아울러 대도시와의 교류가 어려운 지역적 특수성을 감안하여 지방국립단과대학에서 지역소재 직장인들에게 전문직업교육을 행할 수 있도록 특수대학원의 설립을 적극 지원하여 줄 것</p>
                                                                                </li>


                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사학진흥재단법중 개정건의안 제출 | 1990. 10. 29</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">1989년에 사학의 교육여건을 개선하기 위하여 이를 지원하도록 하는 사학진흥재단법이 제정되었 다. 동 법에 의하면 사학진흥재단의 기능은 정부의 出損金이나 사회단체의 기부금을 기금으로 하 여 사학의 교육환경 개선을 위한 자금의 융자·관리업무만을 담당하도록 되어 있는 바, 이것만으로 는 사학에 대한 실질적인 지원기능을 수행하는 데 미흡함. 따라서 합리적인 방향으로 개선되어야 함.</p>


                                                                            <ul class="list">
                                                                                <li>
                                                                                    <p>개정건설안의 주요골자</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>'학교'란 일반기업처럼 상품의 확대 재생산을 통하여 즉각적인 이윤을 추구하는 곳이 아니라 장 기적인 관점에서 교육을 통하여 국가 사회의 인재를 길러내는 공공적 목적을 지닌 기관이므로 '학교' 즉 '사학'에 대한 지원은 융자뿐만이 아니라 정부의 직접보조 기능도 포함되어야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>보조 또는 융자의 범위도 "교육시설의 개·보수 및 확충의 지원"에 한정할 것이 아니라 사립학교 경영의 안정에 기여하기 위한 경상적 운영비 자금의 지원도 포함되어야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사학진흥재단 내에 "이사회" 뿐만이 아니라 사학관계자들이나 관련 단체의 대표들로 구성되는 "운영심의회"를 두어 사학진흥에 관련된 사학의 제반의견이 충분히 반영될 수 있도록 하는 장치가 필요</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>동 법 시행령에는 각급학교(사립) 중 특히 국립대학과 교육비 격차가 심한 사립대학의 지원을 위한 조항을 명시할 것이 요청됨</p>
                                                                                </li>


                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">OMR카드 저작권에 관한 우선심판 요청 건의 | 1990. 10. 31</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">실용신안등록 제46308호의 OMR카드 저작권에 관한 소송은 본 협의회 회원대학의 권익과 직접 관련이 있으며, 동 결정이 특허청 심판소에서 장기간 지연될 경우, 1991학년도 대입학력고사가 임박한 상황에서 전국적 혼란이 예상되니 타 소송에 우선하여 심판해 줄 것을 건의</p>



                                                                        </div>
                                                                    </div>
                                                                </li>





                                                            </ul>
                                                        </div>



                                                    </div>
                                                    <div class="tab_inner 1991">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">1991년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">대학의 현안과제 해결을 위한 건의 | 1991. 3. 18</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">대학의 현안과제에 대한 제13차 총회 및 50차 이사회의 결의사항을 중심으로 건의서로 작성하여 관련 부처에 건의</p>


                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>국립대학 교수의 전반적인 처우 개선(10년 동안 동결되어 온 국립대학 전임교수의 초과강의수당 현실화/ 차량운영비가 보조되지 않는 일부 보직교수에게 차량운영비 보조)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국립대학 시간강사료 예산 현실화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육대학에 명예교수제도 도입</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사립의 이공계 대학 육성을 위하여 연구비, 시설 설비, 인력 등에 대하여 적극적인 정부지원</p>
                                                                                </li>

                                                                            </ul>






                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">부분반영 및 교육부와 협의 추진</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item ">
                                                                    <div class="box">
                                                                        <span class="title">대학의 재정난 극복을 위한 건의 | 1991. 6. 24</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">제51차 이사회의 논의를 중심으로 대학의 재정난 해소를 위한 건의서를 작성하여 정부, 예산심의 기관, 언론사, 전경련 회원사, 회원대학 등 300여기관, 총 3,000여명에게 건의서를 배포하고, 이후로 협의회 회장단 및 임원들이 중심이 되어 지속적인 건의 활동 전개<br>
                                                                                현재 대학교육의 실상과 소요재정의 규모를 추정하고, 국립대학 특별보조 50억원과 사립대학 경상보조 2,000억원의 정부 보조를 요청함과 아울러 사회 각계의 지원을 호소</p>









                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">사립대학 시설설비 보조 300억원 및 국립대학 보조 계상</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item ">
                                                                    <div class="box">
                                                                        <span class="title">대학의 현안과제 해결을 위한 건의 | 1991. 7. 25</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">제14차 임시총회 및 제52차 이사회의 의결사항을 중심으로 건의서로 작성하여 관계 부처에 건의</p>


                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학들의 심각한 재정위기를 극복하기 위해 정부의 지속적인 재정지원 요망</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>종합대와 단과대의 구분 폐지</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학위등록제와 명예박사 사전승인제 폐지</p>
                                                                                </li>


                                                                            </ul>






                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">종합대와 단과대의 구분 폐지에 관련된 교육법 개정안 국회에서 처리 및 기타 건의내용 교육부와 협의</p>
                                                                        </div>
                                                                    </div>
                                                                </li>


                                                                <li class="item ">
                                                                    <div class="box">
                                                                        <span class="title">남북간 동질성 회복을 위한 대학관계자의 남북교류 추진에 관한 건의 | 1991. 8. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">제14차 임시총회에서의 결의사항을 바탕으로 북한의 실상을 파악하고 정부의 북방, 통일정책에 적극 동참하기 위하여 총·학장들이 인솔자가 되고 교수, 학생 등의 대학인을 중심으로 하는 남북 교류 추진을 건의</p>









                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">교육부와 통일원을 통해 협의(1차로 1992년 4월에 개최예정인 협의회 10주년 기념 국제세미나 에 북한의 김일성 종합대학, 김책공과대학, 김형직사범대학 총장의 초청을 추진)</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item ">
                                                                    <div class="box">
                                                                        <span class="title">1992년도 교육대학 자체평가 연구비 배정에 관한 협조 요청 | 1991. 11. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">1992년도에 평가대상교로 선정된 교육대학의 재정 형편상 기성회 예산이 영세하여 자체평가 연구 수행에 필요한 연구비 확보가 어려운 바, 교육대학 자체평가연구를 위한 학술연구조성비의 배정을 요청</p>









                                                                            <span class="title">- 대상교</span>
                                                                            <p class="text">교육대학 11개교</p>
                                                                            <span class="title">- 자체평가 연구비 소요액</span>
                                                                            <p class="text">1개교당 6,000,000원 정도</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item ">
                                                                    <div class="box">
                                                                        <span class="title">대학부속병원의 지방세(사업소세) 부과에 따른 건의 | 1991. 12. 13</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">학교법인은 사립학교법 제5조의 규정에 의거 사립학교에 필요한 시설·설비를 갖추어야 하고, 이에 따라 의과대학 부속병원은 대학설치기준령 제11조의 규정에 의거, 의과 대학생의 실험·실습·연구 등 임상교육을 위하여 설치된 의과대학의 필수적 부속시설로서, 교육기관으로서의 대학병원은 여타 의료기관과 구분되어야 함에도 불구하고, 서울시 관내의 구청에서 대학병원에 대하여 사업 소세를 부과하고자 하는 바, 이것이 최소될 수 있도록 하여 줄 것을 서울시장에 건의</p>










                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item ">
                                                                    <div class="box">
                                                                        <span class="title">국공립대학의 현안과제 해결을 위한 건의 | 1991. 12. 23</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">최근 대학관리운영상의 많은 어려움을 겪고 있는 국·공립대학에 산적해 있는 현안문제를 해결하기 위해 각 대학의 실태를 조사하고, 국·공립대학 총장회의(1991. 11. 15) 및 제 54차 이사회(1992.12. 6)를 통하여 논의된 결과를 중심으로 관계부처에 건의</p>










                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item ">
                                                                    <div class="box">
                                                                        <span class="title">대학교지내 개발제한지역 완화를 위한 건의 | 1991. 12. 30</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">현재 도시지역의 많은 대학들이 필수 시설의 확충을 계획하고 있으나 많은 대학들의 교지는 대부분 녹지에 인접하거나 녹지를 포함하고 있어서 건물의 신설이 불가능하므로 필수시설의 확보도 어려운 형편임. 따라서 대학교지내 개발제한지역이 해제되거나 완화될 수 있도록 적절한 지침 내지 조치를 강구하여 줄 것을 건설부 장관에 건의</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">관계부처와 협의·추진(1차로 1982년 4월 17일 이전에 개발제한구역안 또는 개발제한구역의 인접지에 이미 설치된 학교로서 개발제한구역 외에는 달리 증축할 여지가 없는 경우에 한하여 최소한의 범위 내에서 증축을 허용하고 있다는 답변을 들음(관련 법령)</p>








                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item ">
                                                                    <div class="box">
                                                                        <span class="title">학과신설 및 학생정원의 조기 결정 | 1991. 12. 23</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">학과 신설 및 학생정원의 조기 결정(1년전 또는 8월 전까지) 건의</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">전년도 8월말까지 입학정원을 확보할 수 있도록 함.</p>








                                                                        </div>
                                                                    </div>
                                                                </li>





                                                            </ul>
                                                        </div>


                                                    </div>
                                                    <div class="tab_inner 1992">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">1992년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">사립대학 운영비 및 국립대학 기성회비 국고보조 예산 반영 요청 | 1992. 3. 12</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>국립대학 기성회 연구보조비 100% 증액</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사립대학 국고보조 2,365억원(전문대학보조 500억원 포함) 지원</p>
                                                                                </li>


                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>교육부는 경제기획원에 국립대기성회연구보조비 50% 증액 요청하였으나 명년으로 미룸</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>시립대학 국고보조 500억원 확보</p>
                                                                                </li>


                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>


                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학 운영비 및 국립대학 기성회비 국고보조 예산 반영 요청 | 1992. 3. 12</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">교육부 학술연구조성비의 확충을 위한 건의</p>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">교육부는 긍정적으로 수용하여 경제기획원에 예산요구액을 제출하였으나, 경제기획원에서 명년 으로 미룸</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학 예산운영의 자율성 신장 | 1992. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>국립대학교 시설비 특별법 제정</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>예산회계관계법을 개정하여 국립대학 포괄예산 회계제도를 도입하여 대학교육 예산회계 운영의 적절성을 유지</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>수입대체경비 적용범위의 선정권을 교육부장관 또는 대학총(학)장에게 위임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>예산의 전용권을 교육부장관 또는 대학총(학)장에게 위임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>항목별 예산제도 및 물품의 정수관리 체제로 실험실습기자재 구입 곤란</p>
                                                                                </li>


                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>국립학교시설특별회계법 제정을 지속적으로 추진</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>수입대체경비 및 예산의 전용권 위임은 예산회계법의 개정과 병행, 관계부처와 계속 협의 하여 장기적으로 추진</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1993년도 정수관리 대상에서 5개 품목이 제외되었으며 향후 국립학교 교육용 실험·실습 기
                                                                                        자재는 정수관리 대상 품목에서 제외토록 관계부처(경제기획원, 조달청)와 협의</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">교육대학, 개방대학 및 방송대학 운영 제도 개선 | 1992. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학평가 인정기관을 법률의 규정대로 대학교육협의회로 일원화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학의 지나친 등급화 지양 및 대학평가 인정결과의 행정적·교육적 자율성 확대에만 활용</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>재정지원의 경우 우수대학은 보상적 지원, 그 외 대학은 조성적 지원방식을 탐색해 대학의 균형적 발전을 유도</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">향후 교육부 업무처리에 참고</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학 총학장 임기만료시(정년전) 교수직 복귀 절차 간소화 | 1992. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">임용 전에 교수로 근무한 총·학장이 정년 전에 퇴임할 경우 초·중등학교 교장의 경우와 같이 희망 에 따라 강의능력 및 건강을 참작하여 교수로 임용할 수 있도록 교육공무원법 제24조를 개정하여 근거조항을 신설</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">총·학장으로 재직하다가 정년 전에 퇴임할 경우는 별도 조치 임용이 가능함.</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학구내 건축물 신축시 미술장식품의 설치 제도 개선 | 1992. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">건축물에 대한 미술장식품의 설치는 권장사항(건축법 시행령 제27조 제3항)에 불과하므로 서울시 조례의 획일적 강제규정은 무리이며, 대학에 대하여 예외적인 규정을 인정 건의</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">대학 캠퍼스의 특성과 재정의 어려움을 고려하여 예외 규정을 인정할 수 있는 방안을 관계부처와 협의 추진</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학교지내 개발제한구역의 해제 또는 완화 | 1992. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>학교 신·증축을 위해 불가피한 경우에는 개발제한구역을 해제 또는 완화할 수 있도록 관계법 령 개정 또는 운영에 신축성을 확보</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>건설부로 하여금 각 시·도에 대학용 건축물에 대한 특별한 지침시달 요망</p>
                                                                                </li>
                                                                            </ul>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">도시계획으로 기조성된 학교용지 내에서는 개발제한구역에서도 학교시설을 용이하게 할 수 있도
                                                                                록 계속 관계부처와 협의 추진 추진</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학 강사료 현실화 | 1992. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>국립대학의 1993년도 시간강사료를 시간당 15,000원 수준으로 책정, 예산에 반영</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>초과강사료의 경우도 시간당 10,000원 수준으로 증액하여 예산에 계상</p>
                                                                                </li>
                                                                            </ul>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">1993년도 예산에 강사료를 시간당 11,000으로 1992년도보다 1,000원을 증액 계상</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">학술연구조성비 증액 | 1992. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">1992년도 학술연구조성비 예산 203억원을 1993년도는 700억원으로 상향조정하여 예산에 계상</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">270억 확보</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">1993년 국립대학(교) 정부예산 지원 확대 | 1992. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>국립대학(교) 시설사업비 1,897억원(금년예산의 100% 증액) 예산에 반영</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국립대학(교) 기성회 교수연구조성비 440억원(금년기준 금액의 100% 증액)을 전액 예산에 반영하도록 함으로써, 교수의 월별 연구조성비를 인상하여 줄 것을 건의</p>
                                                                                </li>
                                                                            </ul>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">1993년도에 국립학교 시설사업비 2,305억원을 경제기획원에 요구하여 1,102억원을 확보하였으며 부족한 시설비는 지속적으로 예산확보를 위해 노력</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">1993년도 사립대학 국고보조 확대 | 1992. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">전국 사립대학(전문대학 포함) 운영비의 10% 상당액인 2,365억원(전문대학분 500억원 포함)을 1993년도 세출예산에 계상·지원하여 줄 것을 건의</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">이공계 대학 시설확충비 100억원을 포함하여 600억원의 국고보조 확대</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">토지초과이득세 부과의 합리화 | 1992. 7. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">조세감면규제법 제67조의 3 제1항의 취지에 비추어 볼 때 양도소득세의 보완적 선납조세인 토지 초과이득세가 면제되도록 하여 줄 것을 건의</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">동 건의내용과 관련, 대재 25423-293호(1991. 7. 3)로 재무부장관에게 토지초과이득세 부과대상 에서 "사립학교법에 따라 설립·운영되는 학교법인 및 교육기관의 토지"는 제외하도록 관계법의 개 정을 계속 추진</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학의 재정난 극복을 위한 건의서 송부 | 1992. 7. 24</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">국립대학 및 사립대학의 재정난 극복을 위한 국가 및 사회의 역할증대를 위한 건의</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">"국립대 비법정기구 보직자 수당 등 제정지시" 관련 건의 | 1992. 8. 27</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">국립대 비법정기구 보직자 수당 지급에 따른 제정지시의 猶豫를 건의</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">한국대학교육협의회 운영관련 법인세 감면 협조 요청 | 1992. 11. 27</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">한국대학교육협의회의 고유 목적 사업에 재산을 기부하는 경우 일정 한도 내에서 손금처리될 수 있도록 조치</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>법인세법시행령 제42조에 대학교육협의회 추가(본 협의회가 지급준비금으로 설정한 이자 소득은 손금으로 산입될 수 있도록 조치 요망)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>법인세법시행령 제42조의 2에 한국대학교육협의회 추가</p>
                                                                                </li>
                                                                            </ul>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">한국대학교육협의회도 학술단체에 해당된다는 재무부의 유권해석을 받음.</p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사학진흥기금 융자의 조기집행에 관한 협조 요청 | 1992. 12. 28</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">사학의 교육여건 개선을 위한 사학진흥기금의 저리 융자가 매년 연말에 이루어지고 있음에 따라 사립대학들이 재정운영에 어려움을 겪고 있으므로 동 기금의 융자를 빠른 시일에 집행해 줄 것을 사학진흥재단에 협조 요청</p>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">정부의 재정투융자 특별회계의 자금이 정부 보유주식판매 부진 등 세입재원 확보의 어려움으로 그동안 매년 연도 말에 배정받아 융자금을 집행하고 있는 바, 향후에는 동 융자를 조기에 집행할 수 있도록 최대한 노력할 것임</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">1993학년도 사립대학 시설설비보조금 조기집행을 위한 건의</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">사립대학의 교육여건 개선을 위한 국고보조금의 배정이 매년 후반기에 이루어지고 있음에 따라 보조금 운영의 효율성을 저해하고 있으므로 1993년도에는 동 보조금 예정액을 조기에 배정(통보) 하여 줄 것을 건의</p>


                                                                        </div>
                                                                    </div>
                                                                </li>



                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="tab_inner 1993">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">1993년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">대학재정의 획기적 지원 | 1993. 7. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">1993년의 경우 사립대학에 대한 국고보조는 사립대학 시설설비 보조 500억원 및 이공계 지원 100억원으로서 사립대학 전체 예산의 2% 수준에 불과함. 적은 규모의 교육예산 중에서 대학교육 비의 비중은 9.4%에 불과한데 비해 외국의 교육예산 중 고등교육예산 비중은 25∼45% 수준으로 서 우리의 3∼5배에 달함. 이에 따라 고등교육의 양적 팽창에 훨씬 못 미치는 재정투자로 대학의 시설은 낙후되어 있고, 연구여건은 후진성을 면치 못하고 있으며, 교수들의 교육 및 연구의욕은 침체됨. 결국 영세한 고등교육비로 인하여 국제경쟁력이 갈수록 악화되고 있음.</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>1997년까지 GNP 대비 교육비 5% 조기 확보(현재 3.9%)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육부 예산 중 대학교육비 16%(학생수비율 기준) 확보(현행 9%)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국립대학 재정 국고 부담 비율의 점진적 확대(현행 60%)<br>
                                                                                        :매년 자연증가분 외에 평균 600억원씩 추가 지원(국립대학 재정의 국고부담 비율을 매년 1%씩 상향 조정)<br>
                                                                                        :당분간 국립대학 시설사업비를 현재 연간 1,080.5억원에서 2,000억원으로 증액하는 등 교육개 혁을 위한 추가재원을 지원함.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사립대학 재정난 완화를 위해 연간 3,000억원(사립대학 재정의 10%) 지원('93년도 600억원)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사립대학 관련 지방세 감면 확대(지방세법 개정)</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">사립대학 보조금 500억원 및 국·공·사립 공통의 자구노력지원 500억원, 국책대학 육성지원 400억원 확보</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국공립대학 교수 연구보조비 100% 인상 | 1993. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>1993학년도의 교원연구보조비는 교수 14만원, 부교수 15만원, 조교수 12만원, 전임강사 11만원 으로서 전년도와 같이 동결됨에 따라 국공립대학 교수의 사기 저하 및 사립대학과의 보수 격차 문제가 발생하였음(특히 1993년도에는 예산안에 교육부와 교총간 협의 결과(50% 인상)가 반영 되지 못함에 따라 물의를 일으켰으며, 1994년도 교육부와 교총의 협의에서도 50% 인상하는 것 으로 결정되었음).</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>중등교원의 교직수당 수준에도 미치지 못하는 연구보조비</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교수는 그 직무의 특성상 부단한 연구를 필요로 하며, 그를 위해서는 실소요 경비의 지원이 필 요하나, 교원연구보조비 인상은 물가인상률에도 전혀 미치지 못함은 물론 근 20년 동안 2배 인상에 그침.</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">1994학년도 국공립대학 교원 연구보조비는 100% 인상되어 계상되었음.</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학 예산운영의 자율성 신장 | 1993. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">국립대학 예산 운영의 경직성이 문제됨</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">국립대학의 특수성을 감안하여 재정운영에 상당한 정도의 신축성과 탄력성이 부여되어야 할 것으 로 보나, 포괄예산제도나 특별회계제도의 도입에 따른 관련 문제점(국고부담의 제도적 보장, 기 성회직원의 신분보장, 이·전용권 대폭 위임, 학생납입금 현실화 등)에 있어 부처간의 현격한 차이 및 대학재정의 안정적 재원확보를 저해하는 부정적 요인도 상존하고 있으므로 관계부처와 충분 한 협의를 거쳐 추진해야 할 사항임.</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학 교직원 증원 및 전문성 제고 | 1993. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text"></p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>우리 나라 국립대학의 교수당 학생수는 1992년 현재 26.3명으로서 비록 사립대학보다는 양호하 지만, 여전히 선진국에 비하여는 현저히 높은 편이며, 교수의 연구 및 각종 업무를 보좌할 조교 도 부족하여 조교당 교수의 수도 1992년 현재 4.2명으로서 이는 최소한 교수 2명당 1명의 유급조교를 두도록 해야 할 것임.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>실험실습 및 연구활동 강화를 위한 기술직 직원은 현저히 부족한 실정임. 특히 교직원의 법정정원과 각 대학 배정 정원과의 차이로 인한 문제가 발생하며, 적재적소에 인원이 배치되지 못함.</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">국립대학의 전임교원과 일반직 공무원 등을 매년 증원해 오고 있으나, 정부의 정원 증원 억제방침 과 국가재정 형편상 일시에 많은 인력을 확보하기는 어려운 실정임. 앞으로 국립대학의 소요정원 이 최대한 확보되도록 노력하겠음</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">교육대학에 교육대학원 설치 | 1993. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>초등교사들의 대학원 진학은 세계적 추세임에도 불구하고, 초등교육에 관한 체계적 연구와 초등 교과교육을 전담할 대학원 부재</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>이미 설립되어 있는 교육대학원 등은 초등교육이나 초등교과교육에 관한 연구 체제가 갖추어 져 있지 않음.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>초등교육 내실화를 위해 초등교육 전공 대학원 설치 요구 등</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>특히 교육대학의 교수들도 여타 4년제 대학 교원들 못지 않은 자질을 구비하고 있으며, 개방 적 성격의 산업대학들에도 산업대학원을 설치하고 있음에도 불구하고 교육대학에는 아직도 대학원이 없음.</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">"교육대학의 초등교육대학원 설치방안 연구" 결과를 분석하고 각계의 의견을 수렴하여 초등교육 대학원 설치 여부를 결정할 계획임.</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학 총(학)장 임기 만료시 교수직 복귀절차 간소화 | 1993. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">임용 전에 교수로 근무한 총·학장이 정년 전에 퇴임할 경우 교수직에 복귀하기 위해서는 신규임용 절차를 거쳐야 함. 다만, 총(학)장으로 재직하다가 정년 전에 퇴임하였을 경우 대학인사위원회의 동의와 대학 총(학)장의 임용 제청이 있을 경우에는 연구실적물 200% 제출 의무가 면제되며, 별 도 조치 임용이 가능함.</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">현행 법령 하에서 별도 조치 임용이 가능</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학의 총장 명칭 사용문제에 관한 건의 | 1993. 9</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">1992. 12 교육법 개정 이전의 단과대학들은 총장을 새로이 선임한 경우를 제외하고는 여전히 학장 의 명칭을 사용하고 있음에 따라 갖가지 문제가 야기됨</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">조속히 해결될 수 있도록 적극적으로 관계부처와 협의</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학에 부총장제 확대 | 1993. 5</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text"></p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>사립의 경우 일정규모 이상의 대학에는 대부분 부총장을 두고 업무의 전문화 및 효율화를 도모하 고 있으며, 경우에 따라서는 교무부총장, 학생부총장, 의무부총장 등 여러 명의 부총장을 두고 있 으나, 국립대학의 경우 서울대학에만 부총장제를 두고 있으며, 규모가 서울대에 못지 않은 많은 국립대학들에는 부총장제가 없음에 따라 총장 혼자서 막대한 업무를 추진하기에 여러 가지 어려 움이 있음.</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">교육부 회신: 국립대학에 부총장을 두는 직제 개편 문제는 총장의 기능과 업무량 및 대학 하부 조직 등에 대한 종합적인 타당성을 검토한 후 관계부처와 협의하여 조치되어야 할 사항</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학교원 연구보조비의 비과세 기준 협의에 대한 건의 | 1993. 11</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">최근 재무부는 교원 연구보조비의 비과세 범위를 매년 하향 조정하려는 움직임을 보이고 있는데, 이는 교원의 사기를 저하시킴은 물론 대학의 재정난을 가중시키는 것임.</p>


                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학 시설설비의 확충</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">대학의 실험실습 설비의 노후화로 열악한 교육여건 심화</p>

                                                                            <span class="title">- 결과</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>교육부문 예산의 GNP에 대한 비율 상향 추진에 따라 대학의 외곽시설 및 내부시설 확충을 위한 예산이 적극 반영되도록 추진할 계획임.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1994년도 1,248억원으로 149억원 증액</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">개방제 산업대학의 발전을 위한 지원체제 정비 및 시설투자 확충</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>개방제 산업대학의 교육이념과 교육목표의 정립 미흡</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>개방제 산업대학에 대한 행·재정 지원 부족</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육부 관할부처가 대학관계 부서로 일원화되어 있지 않음.</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학, 산업계와 협의 등 필요한 절차를 밟아 교육목표 개정을 추진할 것임.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>행·재정 지원 및 시설투자는 계속 확대되도록 노력할 것임.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>개방제 산업대학은 입법취지상 평생교육기관</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">개발제한구역 완화</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">개발제한구역이 지정된 구역 내에서는 구역 지정의 목적에 위배되는 건축물의 건축, 공작물의 설치, 토지의 형질변경 등이 원칙적으로 금지됨. 도시계획법시행령 제20조에 의해 제한적으로 신축 및 증축이 허용되나 절차의 복잡성과 허가의 기피로 사실상 거의 불가능함. 대학의 교육환경 개선을 위한 시설 개선 및 대학 규모 팽창에 따른 시설 확충이 요구됨에도 불구하고 건물 신·증축 을 제한당함. 대학설치기준령에 의한 시설설비를 갖출 수 없게 됨으로써 대학평가와 관련하여 교육여건이 낙후된 대학으로 전락하고 학내 분규 초래함. 농지, 공원 등으로 묶여 있어 시설 확충 이 불가능함. 건축 등이 제한당함으로써 시설 확충을 위해서는 캠퍼스를 이전하여야 하는 문제 발생</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>학교 구내에는 개발제한구역을 설정하지 않도록 개정(도시계획법 제21조의 2) 건의</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>개발제한구역 내 허가사항의 대상으로 대학설치기준령의 시설을 갖추기 위한 건물 등을 추가 (도시계획법 시행령 제20조 개정) 건의</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>시장, 군수에게 신고만으로 행할 수 있는 '경미한 행위'의 범위의 확대(도시계획법 시행규칙 제 7조 제3항) 건의</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">건설부에서는 사안에 따라 심의하여 대학에 유리하도록 조치할 것이며, 각 시도에서는 건설부와
                                                                                협의하여 적극 협조하겠다는 회신을 받음.</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="tab_inner 1994">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">1994년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">

                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">대학재정 확보를 위한 건의 | 1994. 2</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">현재 우리 대학은 열악한 재정여건과 낙후된 교육연구 환경으로 인하여 본연의 사명을 충실히 수행하기 어려운 실정에 있음. 최근에 회원 대학은 나름대로 여러 가지 자구노력을 경주하고 있 으나국가의 획기적인 재정투자를 포함한 정책적 조치가 없이는 대학교육의 국가경쟁력 강화라 는 시대적 요청에 부응하기 어려운 형편임. 이 때문에 우리 협의회는 대학 재정 확보를 최우선 으로 삼아 정부, 정당, 각종 관련단체를 통해 GNP 대비 5% 교육예산 확보와 교육예산 중 16% 수준의 대학 교육비 확보를 위해 다각적인 노력을 기울여 온 결과, 목표 수준에는 미달하지만 1995년도 대학관련 예산은 1994년에 비해 약 50% 증가되는 성과를 거둠</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">1995년도 교육부 예산 중 대학교육 관련 예산으로서 사립대학 시설설비 확충 지원비 875억원 (1994년 400억원), 국책대학 지원비 400억원, 국·사립대학 자구노력 지원비 500억원, 대학원 국책지원 사업비 200억원, 국립교육 기관 실습기자재 확충비 450억원(1994년 167억원), 학술 연구조성비 600억원(94년 400억원) 등을 확보</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">교육부 직제 개편에 관한 의견 제출 | 1994. 2. 16</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text"></p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>1993학년도의 교원연구보조비는 교수 14만원, 부교수 15만원, 조교수 12만원, 전임강사 11만원 으로서 전년도와 같이 교육부 기구 중 대학교육관련 조직의 합리적 개편을 통해 대학행정의 효율화와 정책적 지원을 강 화해 줄 것을 건의</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교직국 소관의 교육대학 및 사범대학의 설폐, 운영 및 지도에 관한 업무를 대학정책실로 이관</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학정책실의 학사지도담당관을 정책기획담당관으로 개편</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사학정책 담당관제를 신설하여 사학의 육성과 지원 기능 강화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>기획관리실에 교육통계담당관제의 신설</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1994. 4. 19일자 교육부에 대한 건의서에서도 대학수준의 교육기관을 통합적으로 관리하고 조정할 수 있도록 4년제 대학 관장 부서의 일원화와 교육통계 담당 기구의 신설을 건의</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>전문대학 및 개방대학에 대한 관할이 대학교육지원국으로 통합됨.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육정책실이 신설되어 정책개발 기능 강화 기획관리실에 전산담당관 신설</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">1994년도 대학교원 연구조성비 비과세 기준에 대한 건의 | 1994. 2. 26</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>열악한 대학의 연구여건을 고려하여 기성회 연구보조비에 대한 비과세 범위를 축소 조정하려는 방안을 철회 건의</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>기성회 연구보조비에 대한 비과세 기준을 보수 총액의 45% 한도에서 1994년에 35% 수준으 로 하향 조정하려는 방안을 철회해 줄 것</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">기성회 연구보조비에 대한 비과세 기준을 보수 총액의 40% 한도로 정함</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학 총장명칭 사용에 관한 건의 | 1994. 3. 4</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text"></p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>현재 학장의 명칭을 사용하고 있는 국립대학에서도 총장의 명칭을 사용할 수 있도록 관계법령개정 건의</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육법 개정으로 대학교와 대학, 총장과 학장의 명칭 구분이 사실상 폐지되었으므로, 이러한 교육법의 개정 취지를 살려 모든 대학에서 총장 명칭을 사용할 수 있도록 관계법령 개정</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">교육공무원법 개정(94. 12. 31)으로 현재 학장을 임기중에 총장으로 임명하고자 할 때에는 대학의 추천을 거치지 않아도 가능하도록 함으로써 총장 명칭 사용을 가능하게 함</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학교육의 정상화를 위한 제도개혁 건의 | 1994. 4. 19</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text"></p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>68차 이사회에서 대학의 현안과제에 관하여 건의하기로 한 결과 교육부 및 교육개혁위원회에 건의</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학신입생 선발제도의 개선: 다양한 전형자료의 사용 및 내신성적 산출방법과 반영방법의 자율화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국립대학의 예산회계제도를 개선하여 대학총장이 예산운용에 책임을 지고 효율적으로 운영 할 수 있도록 장단기 방안 마련</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학운영의 자율성 확대<br>
                                                                                        :대학의 입학, 수료, 졸업에 관한 사항의 자율성 확대<br>
                                                                                        :대학설치기준의 탄력적 적용<br>
                                                                                        :사립대학 재무회계 운영에 관한 자율성 확대</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학교육의 국제화·개방화 지원: 외국인 교수나 총장의 초청, 외국대학과 공동 학위수여, 학점 및 학기단위의 교환강의 등을 지원할 수 있는 관련 규정 정비 초등교원에 대한 계속교육기회를 제공하고</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>초등교육에 대한 종합연구를 수행할 수 있도록 교육여건이 갖추어진 교육대학에 교육대학원 설치</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국립대학 총장 임기 만료시 교수직 복귀 절차 간소화(교육공무원법 제24조 개정)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학교직원의 연수체제를 확대 강화하기 위하여 대학교육협의회에 설치 예정인 고등교육연수원의 경비 지원</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>교육부에서 대학학사 관련 자율화 계획 발표</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학입시의 집행적 업무를 대학교육협의회로 이관</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육대학에 대학원 설치 근거 마련(1995년 1월 교육법 개정)</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학교육 발전을 위한 개선의견 제출 협조에 대한 회신 | 1994. 4. 19</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>교육부에서 요청한 대학교육 발전을 위한 개선의견 제출</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학생선발제도의 단계적 자율화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학정원의 단계적 자율화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학의 시대적 역할 수행에 장애가 되는 대학설치기준의 개정 및 사회변화에 비추어 부적합한 기준 폐지</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국립대학 예산회계제도의 개선</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교과 및 학점에 관한 규정을 폐지하여 대학의 자율에 일임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학위종별에 관한 규칙을 폐지하여 학문의 발전 추세에 따라 대학이 자율적으로 정하도록 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학칙 개정에 대한 포괄적 인가권을 제한하여 학교설립의 목적, 학교 명칭, 학교 위치, 학생 정원 등에 관해서만 인가를 받도록 함</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학입시의 집행적 업무를 대학교육협의회로 이관</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학사관련 자율화 계획 발표(학기제, 학점 제한, 교과구분 등)</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">산업기술대학 설립계획 중지 건의 | 1994. 6. 21</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">통산산업부가 추진해 온 산업기술대학 설립계획의 철회를 건의</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>산업기술대학의 역기능에 비추어 그 신설계획의 철회 요구</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>신설할 경우 교육법 체계에 통합 관리</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>기존 대학에 대한 중점 투자 요구</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">교육법체계 내에서 신설할 수 있도록 추진</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고교내신성적 반영방법에 관한 연구계획 관련 협조 의뢰 회신 | 1994. 7. 12</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">고교내신성적 반영의 자율화에 관한 연구를 추진하는 과정에서 협조를 의뢰한 사항에 대한 의견제출</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>자율화는 대학의 욕구 충족, 학생의 교육기회 확대, 국가사회의 요구를 충족하는 역할을 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>자율화의 범위는 내신성적의 반영 비율의 범위를 정하는 것을 제외하고는 모든 사항을 대학에 일임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>자율화의 요구 영역은 내신성적의 산출방법과 반영방법임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>단계적 자율화 방안으로는 1995년에는 내신성적 반영방법의 2∼3개 방안 중 선택하도록하고 이후 산출방법과 반영방법의 대안을 확대해 감</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">공과대학 국책지원 사업에 대한 건의 | 1994. 7. 14</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">공과대학 국책지원 대상교 수의 확대 건의</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>주요 산업권역별로 지역 특성에 맞게 시도별로 구분하여 지원대학수를 8∼10개 대학으로 확대</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국책대학 지원대상에서 제외된 대학들을 위한 가시적인 지원방안 마련</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>GNP 대비 교육 예산의 5% 확대와 고등교육예산의 확충</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">국책대학 지원 대학수를 8개교로 확대</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학개혁 추진을 위한 재정 확충 및 제도개선 건의 | 1994. 7. 17</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">하계총장 세미나에서 논의된 내용을 중심으로 대학개혁의 추진을 위한 개선방안 건의</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>각 대학 개혁사업의 지원</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학재정의 획기적 확충</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학총장 선출제의 개선(직선제의 폐해를 줄이고 대학총장 선출제의 합리적인 개선과 정착을 지원)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학자율화를 위한 제도 개선 국비 연구보조비의 합리적 배분(생활비의 성격을 가지고 있는 연구보조비의 차등 배분 반대)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>통상산업부 산하 산업기술대학 신설 억제</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국책대학 지원 대상 대학의 확대(4개교 지원계획을 8∼10개교 지원으로 대상학교수 확대)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국립대학 총장이 해외 출장 규제 완화 총장 퇴임후 교수 복귀 절차 간소화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1994년도 교수 정원 확보</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국립대학 실험실습 기자재 확충</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육환경 보존을 위한 관련법규 개정</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교원양성기관 지원 강화</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학총장 선출제도의 연구 추진</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학자율화 계획(학사 및 정원관련) 발표</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국책대학 지원 대학수를 8개교로 확대</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학 규제완화와 제도개선을 위한 건의 | 1994. 7. 25</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">사립대학의 자율적이고 창의적인 발전을 지원·조성하기 위해 대학 규제 법령의 개정과 관련제도의 개선 건의</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>그린벨트의 완화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사학의 국유지 취득 및 환지 절차 간소화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교통영향평가제 폐지</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대형건축물의 조형물 설치 폐지</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학설치기준령상 교지면적의 축소</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학설치기준령상 체육장(운동장) 기준면적의 축소</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사립대학 회계운영의 자율성 부여</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>건축물 고도제한 완화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학교 건축물 허가절차 완화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>제반 세제에 대한 감면 및 제외</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학직원 임명권을 총장에게 위임 등 기타사항</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">1994년 10월 28일자 교육부에서 회신한 주요내용</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>개발제한구역의 해제는 건설교통부에서 곤란하다는 의견</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>모든 국유지는 국유재산법상 관리청이 지정되어 있으며 국가가 매각 또는 교환하고자 할 때는 해당 관리청의 사용계획 유무가 우선적으로 고려되어야 하므로 법을 개정하여 일률적으 로 매각 또는 교환을 보장할 수는 없음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교통영향평가는 교통유발 영향을 최소화하기 위한 것으로 제외하기는 곤란</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>조형물의 설치는 학교 등 공공시설이 적극 설치 선도해야 할 사항으로 폐지 곤란</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>체육장 기준면적에 관해서는 그 적정성을 검토할 것임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>풍치지구내 고도제한의 해제는 곤란함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학교건축물 허가절차 완화 및 제반 세제에 관한 감면 조치 등은 관계부처에 법령 개정을 요구한 상태</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">교육환경 보전에 관한 건의 | 1994. 7. 25 / 11. 17</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">대학 주변 대형건축물의 신·증축으로 인한 교육환경 저해를 방지하기 위해 관계법령 개정 건의</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>교육재정 확보와 교육환경 개선에 적극적인 관심과 노력을 요청</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육환경 보전을 위해 필요한 관계법령의 보완, 정비 요구</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육환경 침해로 인하여 야기된 갈등의 해소를 위하여 정책대안 마련</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>관계법령의 개정안(11. 27 건의내용 - 제1안: 도시계획법 제19조 제2항을 개정하여 일정 규 모 이상의 건축물을 신·증축하고자 할 때에는 교육부장관의 협의를 거치도록 함. 제2안: 학 교보건법 일부를 개정하여 학교 주위에 교육환경 보전구역을 설치할 수 있도록 함)</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">전문대학 졸업자 학위수여에 대한 의견서 제출 | 1994. 8. 29</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">전문대학 졸업자 학위수여 제도에 관한 연구를 추진하는 과정에서 대학교육협의회의 의견을 요청 하여 왔기에 '학사'학위 수여에 대해서는 신중한 검토가 필요하다는 의견서 제출</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>전문대학의 성격, 전문대학 설치운영자 및 그 재학생이나 졸업생의 학위 수여 요구에 비추어 적절한 학위수여 방법을 모색할 필요가 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학위수여의 전제조건으로서 고등교육기관간 성격구분과 역할분화를 저해하지 않는 방향으로 도입하고, 전문대학의 교육목표와 학교특성을 적극적으로 표현할 수 있는 방식 채택</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>전문대학 졸업생에게 '전문학사(○○전공)' 학위 수여 방안 검토 가능</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학 발전을 위한 세제조정 건의 | 1994. 9. 14</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">대학교육의 국제경쟁력 강화 차원에서 사립대학의 발전을 지원하기 위하여 사립대학 관련 세제측 면의 지원 확대</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>개인 기부금 공제한도액(5%)의 폐지(소득세법 제66조의 3)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학교법인을 다른 비영리법인과 구별하여 주식보유 비율에 관계없이 학교법인에 대한 증여는 상속세 및 증여세를 비과세하도록 개정</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>의과대학 부속병원 법인세 비과세</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사립대학 예금이자 소득 비과세(원천 비과세)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학교법인 수익용 재산에 대한 지방세 비과세</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고용보험법 시행령 제정(안)에 대한 건의 | 1994. 11. 14 / 12. 30</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">사립대학 직원은 고용보험법 적용대상에서 제외해 줄 것을 건의</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>고용보험법의 목적에 비추어 사립대학 직원은 고용보험법이 적용대상으로 부적합하고, 사립대 학 직원의 고용실태를 고려할 때 동법상의 혜택을 받을 수 있는 범위가 극히 제한적으로 되어 있어 과중한 부담만을 지고 혜택을 받지 못하는 불합리한 점이 있기 때문에 적용대상 제외를 건의</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">외국인의 대학교원 임용 문제에 대한 협조 요청 | 1994. 11. 25</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">연세대학교 총장이 선임 당시 무국적자라는 이유로 법원에서 선임 무효 판결이 나옴에 따라 이 판 결의 부당성을 지적하고 교육부의 협조를 구함과 동시에 관계법령의 개정을 요구</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>국적과 관련하여 사립학교 교원의 자격을 국공립학교 교원의 자격과 동일시한 법원의 판단은 관계법령의 이해 부족에서 나온 것으로 부당함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국제화, 개방화 시대를 맞이하여 대학교육의 국제경쟁력 확보 차원에서 외국인 교원 임용제 도의 합리적인 수용이 필요함</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">1995학년도 학술연구조성 사업계획에 관한 건의 | 1994. 11. 27</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">1995년도 학술연구조성 사업계획에 '대학교육 개혁과제 연구' 항목을 신설해 줄 것을 건의</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>21세기를 대비한 대학교육의 전반적 검토가 필요하고, 대학교육을 통하여 질 높은 인재양성을 도모하기 위한 종합적인 연구사업이 요청되는 바 이를 학술 연구 조성 사업에 반영하여야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학술연구조성비 특정연구의 세부항목에 '대학교육 개혁과제 연구'를 위한 항목을 신설</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>개혁과제 연구의 주요 연구영역과 1995년도 예시적 사업계획을 제시함(14개 과제 총 연구비 5억원)</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="tab_inner 1995">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">1995년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">사학진흥법 제정에 관한 입법 추진 | 1995. 11. 4</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">사학진흥법 제정에 관한 입법 추진 건의</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">정부나 국회 등은 본 협의회의 여러 가지 활동에도 불구하고 아직 사학진흥법 제정 문제를 적극적으로 착수하지 않고 있는 실정임.</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">교육환경보전에 관한 입법 추진 | 1995. 7</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">교육환경보전에 관한 입법 추진 건의</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">동 법안 발의 서명을 완료하였으나, 민자당의 당무 회의가 개최되지 않아 민자당과 공동 발의할 수 없어 다음 회기에 상정할 것으로 보임</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립학교 교원연금법 개정에 관한 건의 | 1995. 11. 2</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>교육발전과 교원의 복지향상을 위하여 사립학교 교원의 연금재정 안정을 위한 사립학교 교원연금법 개정을 건의</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사립학교 교원연금법 개정에 따른 추가 소요 재원 중 교원개인부담금을 제외한 금액은 공무원연 금재원의 부족분과 같이 국가 재정에서 추가로 지원해 줄 것을 건의</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>공무원연금법 개정에 맞추어 사학연금 재정의 안정적 확보를 위하여 현행 보수월액 기준으로 개 인 1,000분의 55, 법인 1,000분의 55(교원의 경우에는 법인 1,000분의 35, 국가 1,000분의 20)인 부담률을 각각 1,000분의 75의 범위 안에서 대통령령으로 정하도록 사립학교교원연금법을 개 정함(법 제44조 제4항, 제46조 1항 및 제47조 제2항)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>이와 관련하여 유족의 요건 조정, 재직기간 합산제도의 개선, 재직기간 계산방법, 연금지급개시 연령제 신설, 유족연금의 감액 지급 등의 관련조항도 개정함.</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학원 교육제도 개선안에 대한 검토의견 확인 | 1995. 9. 14</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">교육부에서 추진중인 대학원 교육제도 개선안에 대한 검토 의견</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학원의 유형 구분</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학원의 학위 이원화</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>단설대학원 제도</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text"></p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>교육법을 개정하여 대학원만을 둔 대학(단설대학원) 설치를 허용(법 제103조의 3): 사회의 다양 화·전문화 추세에 부응하여 특정 분야의 전문인력을 양성할 수 있도록 필요한 경우 학사과정 없 이 대학원만을 두는 대학의 설립이 가능하도록 대학원의 설립·운영을 다양화 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>석·박사학위 통합 운영 및 수업연한 단축 운영 허용(법 제112조)</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>명예박사학위 수여제도 개선(법 제115조 제4항): 박사과정이 있는 대학원을 둔 대학원에서만 수여 할 수 있도록 함</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국립대학교 기성회노조 파업관련 건의 | 1995. 9. 20</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">대교협 소속 국립 7개 대학교(경북대, 군산대, 목포대, 서울대, 전남대, 전북대, 제주대)가 기성회 노동조합의 파업으로 인하여 대학의 학사 및 행정업무가 크게 지장을 받고 있는 등 정상적인 대학 운영과 교육에 막대한 혼란을 초래하는 심각한 사태에 직면함에 따라 동 대학교 총장들이 공동으 로 마련한 건의서를 제출하여 이 문제가 조속한 시일 내에 해결될 수 있도록 가능한 방안을 마련 하여 주도록 건의</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>국립대학 기성회직을 공무원관련법 및 규정을 준용하여 준공무원으로 대우하고 점차 기능직 공무원으로 전환하는 기회를 확대</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국립대학 기성회직원 관련 노동법을 개정하여 철도노조 등과 같이 단체행동권을 제한하거나 특 별법을 제정하여 합리적인 노조활동이 보장될 수 있도록 조치</p>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학지원방식의 개선 및 대학 자율화 추진에 관한 건의 | 1995. 2. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학지원방식의 개선</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학자율화 시책의 적극적 추진</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사립대학에 대한 세제지원의 강화</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사대학 이전 및 재원 지원 확대 건의 | 1995. 1. 16</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text"></p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>교지 확보 등에 어려움을 겪고 있는 수도권(특히 과밀억제권역) 소재 대학들의 경기도(성장관리 권 및 자연보호권역) 이전이 가능하도록 조치</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사립대학의 시설 및 설비자금의 확보를 위한 국고지원: 사립대 시설 및 설비자금의 장기융자 확대</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>


                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="tab_inner 1996">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">1996년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">1997년도 대학재정관련 국고지원 확충 건의 | 1996. 4. 29</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학교육의 질을 향상시키고 국가경쟁력을 강화하기 위한 공공재정 확충 노력은 세계적 추세로 서 현재 우리 나라 대학은 열악한 재정 여건과 낙후된 교육·연구환경 때문에 국제경쟁력 확보가 어려운 실정에 있으며, 학생 등록금 인상도 학생들의 저항 분위기가 갈수록 격렬해져 한계점에 도달하였음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>근간 교육예산 확충과 함께 대학교육 예산 증가율도 다른 분야보다 다소 높아졌으나, 선진 외국 의 대학 투자 예산에 비하면 크게 미흡한 상태이므로 GNP 대비 5% 교육예산의 확충과 더불어 대학교육부문 예산의 획기적인 증액이 요망됨</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>1997년도 대학교육예산 총액은 적어도 학생수에 비례할 수 있도록 교육부 예산의 13.2% 수준인 24,268억원으로 확충할 것을 건의</p>
                                                                                </li>

                                                                            </ul>
                                                                            <span class="title">- 결과</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>건의활동과 더불어 누차에 걸친 회장단의 재경원장관과의 협의 및 당정협의과정에 참여 등을 통 하여 대학의 재정난 해소에 노력한 결과, 대학 자구노력 지원이 1,300억원(전년 대비 116.7% 증액), 국립대학실습기자재 확충이 1,230억원(64.0% 증가)으로 대폭 증가되었고, 사립대학 시 설·설비 확충이 1,250억원, 대학시설지원이 2,381억원, 학술연구조성사업이 1,200억원으로 증 가되는 등 대학관련 주요 예산의 전년 대비 증가율이 20∼30% 수준으로 크게 증액되었음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>이러한 대학관련 예산의 대폭적인 증액은 충분한 수준에 미치지는 못하지만 한정된 정부예산 사 정을 감안하면 지극히 고무적인 일이라 할 수 있으며, 앞으로도 대학재정난을 극복해 가는 것은 우리 대학 사회의 가장 시급한 공동과제임</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학교육재정의 합리적 배분을 위한 건의 | 1996. 9. 20</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>열악한 대학재정 여건과 낙후된 교육·연구환경의 개선에 필요한 재정을 확보하기 위하여 1996년 도 교육부 예산 중 고등교육관련 주요 예산이 전년도 대비 40∼60% 수준으로 획기적으로 증가 되고, 많은 사업이 신설되었으나, 공과대학중점지원, 대학원중점지원, 자구노력지원, 교육개혁 우수대학지원, 국제대학원지원 등의 사업을 선별적으로 지원함으로써 심각한 부작용과 폐해를 낳고 있음.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>그동안 시행과정에서 나타난 바와 같이 이러한 차등지원으로 대학간 빈익빈 부익부 현상이 점차 심화되고, 더 높은 점수를 얻으려는 데서 오는 대학간의 지나친 경쟁으로 인하여 대학 공동체마 저 와해될 위기에 처해 있으며, 시장경제원리에 따른 적자생존과 자연도태를 유발하는 지원방 식은 자율화·다양화를 유도하기보다는 오히려 대학의 획일화를 부추기고 대학에 대한 불필요한 규제와 통제를 심화시킬 가능성이 높음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>더구나 교육활동의 효과는 장기간에 걸쳐서 나타난다는 점에서 교육개혁이 시작된 지 불과 일년 이 지난 시점에서 그 추진실적과 효과를 평가한다면, 이것은 진정한 의미의 교육적 기준에 의한 평가라기보다는 가시적이고 외형중심의 교육외적 기준에 의한 평가가 될 가능성이 높음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>장기적인 안목에서 본다면 대학에 대한 차등 지원이 불가피할 수 있으나, 단기적으로는 대학이 적응하고 준비할 수 있는 유예기간이 필요하며, 따라서 현재의 평가에 의한 차등지원방식을 완 화하는 조치가 필요함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육적 원칙을 등한시하고 경제논리에 따른 대학간 경쟁을 통해서만 교육의 질이 제고되거나 국 제경쟁력을 신장할 수 있다는 논리는 합당하다고 볼 수 없고, 국민의 세금을 재원으로 하는 대 학재정 지원방식은 대학간 균형을 우선하는 방향으로 전환되어야 하며, 대학의 자율성을 최대 한 보장하는 방식으로 이루어져야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>따라서 대학에 대한 정부재정지원은 총 예산의 75%는 대학의 학생 규모를 기준으로 하여 균형 배분하고 나머지 25%는 차등 배분하되, 균형감각과 객관적이고 합리적인 방안에 의해 이루어져야 함</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">지방대학지원을 목적으로 지방대학 특성화 지원 사업이 신설되고, 재정배분기준 및 과정의 합리 화를 위한 보완조치가 취해지고 있으나, 정부나 국회 등에 대한 본 협의회의 여러 가지 노력에도 불구하고 아직까지 대학재정지원정책이 기본방향이 전환되지 않고 있는 실정임</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사립대학 발전을 위한 세제조정 건의 | 1996. 2. 18</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text"></p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학에 대한 직접적인 재정지원과 더불어 조세 감면을 통한 간접적인 지원이 대폭 확대되어야 하며, 특히 국·공립대학에 비하여 차등을 두고 있는 사립대학에 대한 각종 조세관련법령이 조속히 개정되어야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>현재의 세법체제에서는 영리법인과 비영리법인을 구분하는 이원적 체제로 되어 있으나, 학교법 인을 일반 비영리법인에서 별도로 분리·규정하여 원칙적으로 국·공립학교와 같이 비과세하도록 조세구조를 개편</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육법상 동일한 교육기관이면서도 국·공립학교는 비과세하면서 교육의 비중이 큰 사립학교에 는 과세하는 것은 세제상 모순이고, 교육의 공공성을 차별하는 것이며, 국가나 지방자치단체가 충분한 교육기관을 설립하지 못하였기 때문에 학부모들은 사립학교에 보낼 수밖에 없는 상황에 서 사립학교에 대한 차등과세는 결과적으로 국민(학부모)의 부담을 가중시켜 궁극적으로는 일 반적 조세부담과 더불어 이중 부담을 가져오게 됨</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p> 따라서 조세감면규제법상의 특별부가세 면제, 소득세법상의 개인기부금 전액 소득공제, 상속세 법상의 증여세 전액 면제, 법인세법상의 예금이자소득에 대한 원천징수 폐지, 고정자산 처분수입이 법인세면세 등 조세감면 지원방안을 실현해야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>이밖에도 농지보전이용법률상의 학교시설을 위하여 농지 및 산지를 전용하는 경우, 새로운 농지 조성소요비용의 부담 감면, 건축사법상의 학교의 직원중 건축사 면허소지자가 있는 경우 자체 건물의 건축, 장애인 고용촉진 등에 관한 법률상의 장애인 의무 고용 비율, 국가유공자 예우 등 에 관한 법률상의 국가유공자의 의무고용비율 및 고용대상직종 등에 적용되고 있는 차별 조항 을 개정해야 하고, 토지초과이득세법상의 비업무용 토지 과세, 인지세법상의 증서 통장 및 장부 의 과세, 증권거래세법상의 증권 양도 과세, 교육세법상의 자동차세에 부과되는 교육세 과세, 기 타 학교법인의 각종 수익사업 운영에 따른 지방세, 학교법인 소유 토지 중 농장, 연습림 등에 대 한 종토세 등에 대하여도 전향적인 검토가 요구됨</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">교육부 등으로부터 세부사항에 대한 추가 요구가 있어 관련자료를 송부하였으며, 교육개혁위원회 에서는 사학진흥을 위한 방안의 일환으로 조세감면규제법, 소득세법, 상속세법, 법인세법 등의 국 · 사립대학간 차등 조항의 조정을 제안하였으나, 아직까지 관련법령이 개정되지는 않고 있음</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">등록금 불반환 조항 관련 공정거래위원회의 조사.심의 활동에 관한 건의 | 1996. 5. 10</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>공정거래위원회가 대학의 신입생 및 편입생 입시요강 중 등록금 불반환 조항과 관련하여 각 대 학에 자료 제출을 요구하고 조사중이나, 대학은 그 성격상 교육법 제7조에 규정한 바대로 "국가 의 公器로서 법령의 정하는 기준에 의하여 설립"되었으며, 대학교육은 교육법, 사립학교법 등 교육관련법령에 의하여 운영되고 있는 비영리 공익사업으로서 일반 영리를 목적으로 하는 사업 과는 명확히 구분되어야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학교를 포함한 정규 교육기관이 공정거래법 제2조에서 적용대상으로 하고 있는 사업자에 포 함이 되지 않고, 공정거래법의 입법취지가 영리를 목적으로 하고 있는 사업자간의 공정하고 자 유로운 경쟁을 촉진하여 시장 경제의 활성화를 달성하고자 하는 것이므로 학교교육을 일반적인 재화 및 서비스의 거래와 같은 차원의 시장거래로 규정하여 공정거래위원회의 업무영역에 포함 시키고자 하는 것은 공정거래제도의 취지를 확대 해석한 것이고, 대학은 동 법 제2조에서 상정 하고 있는 표준산업분류상 어디에도 해당되지 않음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>설사 학교를 공정거래법의 적용대상으로 본다 하더라도 교육정책의 최종 책임을 지고 있는 교육 부와의 협의를 거쳐 처리하거나 교육부로 이첩하여 처리하는 등의 교육정책적 고려가 반영되어야 할 것임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>또한 대학의 등록금 환불제도는 일반 상거래 관계에서 이루어지는 문제와 같은 맥락에서만 보아 서는 안 되고, 중도 포기자가 학생 정원을 잠식함에 따라 진학이 불가능해지는 다수의 피해자와 대학의 재정문제 등을 함께 고려의 대상으로 해서 보다 심도있게 심의하여 정책을 결정해야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>따라서 공정거래위원회가 대학의 신입생 및 편입생 입시요강 중 등록금 불반환 조항에 관한 심 사 과정에서 헌법 제31조 제4항, 교육법 제7조 사립학교법 제1조, 약관의 규제에 관한 법률 제 30조, 그리고 학교 수업료 및 입학금에 관한 규칙 제2조, 제3조 및 제6조의 제 규정을 존중하여 대학교육의 공공성과 대학의 자율성을 훼손하지 않도록 세심하게 배려할 것을 요청함</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">학교 수업료 및 입학금에 관한 규칙 개정령에 대한 반대의견 건의 | 1996. 7. 31 / 8. 28</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>우리 나라의 대학은 대통령령으로 제정한 대학 학생 정원령에 따라 정해진 인원만을 선발할 수 있으며, 대학은 이를 근거로 예산을 편성, 교육부에 보고하고 예산범위 내에서 최소한의 경비로 최대의 성과(교육)를 거두어야 하는 의무를 갖고 있는 기관이며, 현행 입학(편입학 포함) 제도는 일정한 기간 내에 학생을 선발하여야 하며 한 수험생이 수 개 대학에 응시하여 복수 합격이 가능하도록 보장되어 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>이와 같은 상황에서 충원기간이 경과된 후까지 타 대학에 합격했다는 이유만으로 등록금을 환불 해 주는 것은 첫째, 정부에서 정해 준 대학 학생 정원상 결원이 있음에도 불구하고 이중 합격자 의 등록 포기에 따라 상당수의 학생들이 대학에서 교육받을 수 있는 기회를 갖지 못하게 될 것 이고, 이들 선의의 피해자들은 회복이 불가능한 손실을 입게 될 것이며,</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>둘째 대학학생정원령이 국가의 인력수급계획과 적정 진학률을 감안하여 제정한 것임을 감안한 다면 등록포기로 인하여 생긴 결원의 미보충은 결국 국가인력수급계획에도 큰 차질을 가져오게 될 것이며,</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>셋째 학생 결원을 보충하지 못한다면 부족한 예산을 보충할 방법이 없으므로 이 피해는 결국 재 학생에게 돌아갈 수밖에 없고,</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>넷째 등록금의 부제한적 환불허용은 지원자들로 하여금 제도의 남용을 가능하게 하여 학사 행정 의 원활한 수행에 심대한 차질을 빚게 될 것임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>따라서 등록금 환불에 관한 학교 수업료 및 입학금에 관한 규칙의 개정을 제고해야 함</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학 인접 개발제한구역내 행위제한 완화에 관한 관련 법령 개정 건의 | 1996. 4. 29</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학교육은 국가의 경쟁력과 국민생활의 질적 수준을 결정짓는 핵심요소로서 현재 우리 대학들 은 어려운 여건 속에서도 대학교육의 질적 향상과 국제 경쟁력 강화를 위한 다양한 발전방안과 투자계획을 수립·추진하고 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>이와 관련하여 많은 대학들이 교육시설의 확충을 계획하고 있으나, 대학 교지의 상당 부분이 개 발제한 구역에 인접하거나 이를 포함하고 있어서 대학교육에 필수적인 건물·시설의 확보마저 매우 어려운 형편임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>따라서 대학들이 대학설치기준령상 최소한의 교육시설을 확보함으로써 대학이 교육환경을 개선 하고 질적 향상을 도모할 수 있도록 '도시계획법시행규칙'을 개정할 필요가 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p> 제7조 제2항 제3호 라목(1) 학교시설의 증축의 조항 중 문구 삭제: "개발제한 구역안 또는 개발 제한구역의 인접지에 이미 설치된 학교로서···"('이미' 삭제)</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">1997년도 대교협 부설 고등교육연구소의 연구비 지원 건의 | 1996. 11. 14</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>신교육개혁 중 대학교육 개혁과제의 효과적이고 원활한 추진과 대학교육과 관련된 현안문제의 해결을 위하여 시급히 수행해야 할 과제들을 교육부의 교육정책과제 연구비 지원대상으로 신청함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>11개 연구과제(연구비 신청총액 2억4천만원): 국·공립대학교의 국제 경쟁력 강화를 위한 중·장기 발전전략, 국제문화이해를 위한 대학생 교육 프로그램 개발에 관한 연구, 대학 학생자치조직의 발전방안에 관한 연구, 대학재정정책 국제비교 연구, 대학 장·단기 발전계획 수립방안에 관한 연 구, 대학 학생정원 자율화 이후 정원책정방안에 관한 연구, 대학교육여건 국제비교 연구, 대 학헌장 제정 및 운영에 관한 연구, 대학 교직원 현황에 관한 분석 연구, 대학교직원 보수체계에 관한 연구, 대학교수 채용 및 승진제도 개선에 관한 연구 등</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">대교협 고등교육연구소에 대한 별도의 교육정책과제 연구비 일괄 지원은 불가하나, 개별 과제를 관련 부서별로 검토하기로 회신함</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="tab_inner 1997">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">1997년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">전국 각 대학의 균형발전을 위한 건의 | 1997. 3. 6</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>대학교육의 질을 향상시키고 국가경쟁력을 강화하기 위한 공공재정 확충 노력은 세계적 추세로 서 현재 우리 나라 * 대학교육을 위한 정부의 행·재정 지원에서는 무엇보다도 국민의 교육기회 보장과 균등한 교 육발전을 위한 배려가 우선되어야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>국·공립대학의 교육연구여건을 개선하기 위한 종합적이고 획기적인 지원방안을 마련해야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육개혁을 효과적으로 추진하고 교육경쟁력을 높이기 위해서는 사학에 대한 재정지원을 확 충하고, 이를 위해서 '사학진흥법'을 제정해야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사학에 대한 직접적 재정지원 이외에 조세감면 등을 통한 간접지원이 확대되어야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학 편입학의 확대로 인한 대학의 재정적 혼란, 정상적인 학사운영의 저해와 같은 부작용을 최소화하기 위한 개선책을 시급히 마련해야 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>지방 소재 대학을 육성하기 위한 방안을 마련해야 함</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>'사학진흥법' 제정, 사학조세감면 등이 새정치국민회의 대선공약에 포함됨</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교육부에서 대학 편입학제도 개선방안을 수립중임</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법(안) 중 대학평가 관련 규정에 대한 건의 | 1997. 10 .24</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>고등교육법(안) 제7조 2항 및 제8조 2항은 교육부장관에 의한 대학평가 실시와 그 평가결과 를 반영한 재정지원을 규정한 것으로서 시행시 심각한 문제들을 야기할 우려가 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학의 건전한 발전과 대학교육의 질 제고를 위하여 대학사회 스스로가 상호 협력하여 자체 의 문제점을 파악하고 그 개선방안을 강구하도록 하는 데 필수적인 자율적 대학평가인정체제 의 구축은 모든 대학이 공통적으로 희망하는 과제이며, 선진 외국에서도 인간적 자율통제 기 능으로 실시되고 있는 대학평가가 정부 기능으로 강화되는 입법상의 오류를 미연에 방지한다 는 점에서 고등교육법(안) 제7조 2항 및 제8조 2항의 삭제를 건의</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">고등교육법(안) 제7조 1, 2항 및 제8조 2항이 삭제됨</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">경기도 지역 [교육대학 신설] 허용에 대한 건의 | 1997. 10 .29</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>4년제 대학은 수도권내 인구집중 유발 시설로 간주하여 신설을 금지해 왔으나, 그 후 경기도 내 교육대학 설립 허용에 관한 입법 예고가 있었음(수도권정비계획법시행령 중 개정령(안))</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>경기도내 교육대학 설립허용은 국가재정의 낭비초래와 교육의 질 저하 우려, 타 시·도의 교육 대학 설립요구 확산 우려 등의 문제가 있으므로 그 유보를 건의</p>
                                                                                </li>
                                                                            </ul>
                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">경기도 지역 [교육대학 신설] 허용이 유보됨</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국책연구기관의 대학원대학 설립추진 중지에 관한 건의 | 1997. 4. 3</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">기존 대학내 전문대학원 기능의 활성화, 대학원대학 설립조정위원회의 설치 운영 등</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">정보통신부(정보통신전문대학원대학)를 제외한 타 부처의 대학원대학 설립 추진 중지</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">국공립대학 교원연구보조비 인상에 관한 건의 | 1997. 7.16</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">교육부 : 한국교총의 정기교섭안대로 국·공립대학 교원연구보조비 25% 인상</p>



                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학등록금 인상 5%선 억제에 따른 문제점 및 대안 건의 | 1997. 1. 10</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>정부의 5%선 등록금 인상억제는 대학 자율화정책에 역행, 교육의 질적 향상 저해, 대학교육 개혁 추진과정에 장애, 학생소요 유발 등과 같은 부작용과 폐해가 심각함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>획일적인 5% 억제는 현실적으로 불가능하므로 각 대학이 자율적으로 인상폭을 결정하도록 함</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>


                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="tab_inner 1998">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">1998년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">대학설립·운영규정 시행 규칙 개정령(안)에 대한 건의 | 1998. 1. 16</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">교육부 장관의 대학설립 인가일을 개교예정일 3월 전까지로 한 것은 다음의 여러 가지 문제를 유발할 수 있음</p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>신설대학의 개교관련 사항을 미리 홍보함으로써 신입생을 정상적으로 선발할 시간적 여유가 없음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학신입생 모집계획 수립 및 시행일정이 지나치게 촉박하여 입시업무 수행에 혼선 초래 우려</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교수 및 직원 임용, 수업준비 등 제반 학사운영 정상화를 위한 기간이 짧아 개학준비에 차질이 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>따라서 교육부 장관의 대학설립 인가일은 개교예정일 6월 전까지로 변경해야 함</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">조세감면규제법 개정안 중 대학관련 사항에 관한 건의 | 1998. 1. 20</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>경제난에 따른 긴축재정과 세수확대 차원에서 비영리 법인인 대학에서 운용되고 있는 고유목적 사업준비금의 손비인정한도를 축소하려는 것은 사학을 위축시키고 자구적인 발전노력을 저해할 수 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사학의 재정 감소와 이에 따른 등록금 감소로 인하여 국민 교육비 부담은 가중될 것이며, 교육의 질적 저하를 초래할 것임. 따라서 본 안의 삭제를 건의</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법 시행령(안)에 대한 건의 | 1998. 1. 26 / 2. 2</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text"></p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>학생모집단위를 복수의 학과로 구성되는 단위별로 모집하는 것은 고교의 입시지도에 혼란을 초 래하고, 입시후 학과별로 분할하는 과정에서 많은 부작용을 초래할 우려가 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학입학지원 방법·제한 및 등록, 대학입학전형 기본계획의 수립·공포에 관한 업무수행과정의 일부를 대교협에 위임할 수 있다는 규정을 신설했으나, 이는 현재 수행중인 대교협의 입시업무 에 대한 법적 근거를 미비하게 함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>전문대학 및 기술대학의 대학 명칭 사용은 혼란을 야기할 우려가 있으며, 전문대학의 특성화 정 책추진에 저해요소가 될 수 있음</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">사범대학 평가 유보에 대한 재건의 | 1998. 3. 4</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text"></p>
                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>교육부의 사범대학 평가는 대학의 자율성 보장 규정에 저촉될 뿐만 아니라 대학의 학문의 자유, 자주성을 침해할 우려가 큼</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>정부주도의 평가는 대학에 불필요하고 과중한 부담을 주게 됨은 물론 대학에 대한 재정지원의 차등화로 대학의 부익부 빈익빈 현상을 심화시키고 대학의 다양화, 특성화를 저해하게 되는 등 많은 문제를 야기시킬 수 있는 바 유보를 건의</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학교육 정책조정협의회 운영 건의 | 1998. 6. 9</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>우리나라 대학교육의 건전한 발전을 도모하기 위하여 교육부와 대교협이 상호협조체제를 공공 히 하는 것은 필수적임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>대학교육 정책관련 현안문제들을 체계적이고 심도있게 논의함으로써 합리적인 해결방안을 도출 하고 그에 따른 정책의 방향을 정립하거나 조정하기 위하여 교육부와 대교협이 공동으로 참여 하는 '대학교육 정책조정협의회'를 운영할 것을 건의</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">우수 해외교포의 이중국적 허용범위 확대 건의 | 1998. 6. 22</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>21세기에 능동적으로 대처하기 위해서는 우수인력양성이 요청되나 해외교포의 실질적인 교원
                                                                                        임용이 금지되고 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>이미 국내 대학에 많은 교포가 이중국적을 밝히지 않고 교수로 활동하고 있으며, 법적인 문제로 이들을 제약할 경우 대학교육을 위축시킬 수 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>해외교포의 이중국적허용을 과학계, 예·체능계에만 허용할 경우 파급효과가 작을 뿐 아니라 대 학현실을 도외시하는 결과가 될 것이므로 이중국적의 허용범위를 모든 학문계열로 대폭 확대해 줄 것을 건의</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학인접 개발제한구역내 행위제한 완화에 관한 관련 법령 개정 건의 | 1998. 6. 26</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>현재 많은 대학이 교육시설의 확충을 계획하고 있으나 대학교지의 상당부분이 개발제한구역에 인접하거나 이를 포함하고 있어 대학교육의 필수적인 건물과 시설의 확보가 불가능한 실정임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>학교는 공익성을 고려할 때, 보건소, 파출소, 우체국 등에 버금가는 것으로 학교시설(특히 대학)에 대해서만 일률적인 행위제한규정을 두고 있는 것은 부당함</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p> 따라서, 최소한의 교육시설은 확보할 수 있도록 도시계획법시행규칙 제7조제1항 제3호 라목 (1)의 '이미'규정을 삭제해 줄 것을 건의</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">고등교육법, 교육공무원법 및 사립학교법 중 개정법률안 입법예고에 대한 건의 | 1998. 11. 13</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>

                                                                            <ul class="list" style="margin-top:30px; margin-bottom:30px;">
                                                                                <li>
                                                                                    <p>정부의 고등교육법 등 교육관련 법률 개정안은 정부의 개혁 구상이 정도를 지나쳐 대학의 자율 성을 정면으로 무시하고 있으며 대학운영의 파행을 초래할 수 있는 조항이 포함되어 있음</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>고등교육법 개정법률안 중 교무위원회의 구성과 운영을 대통령령으로 강제하는 규정은 대학에 제도적으로 파벌을 조성하고 운영을 마비시킬 것임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>사립학교법 개정 법률안 중 학교법인의 임원으로 공익대표를 3분의1이상 선임토록 한 것은 사학 에 대한 아무런 기여도 없고 책임도지지 않는 인사를 의결권을 갖는 임원의 자리에 영입하라는 것으로 의무와 권한의 관계를 위배하는 것임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>교수의 근무시간, 근무조건 등을 정하여 교수를 임용하는 소위 계약제를 사립대학에서까지 준용 실시토록 하는 조항은 사립대학의 자율성을 침해하는 것임</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>특정대학 학사학위 소지자를 신규교수 임용에서 1/2이 넘지 못하게 하는 규정은 특정 대학 출신 이라는 이유로 차별대우를 받아야 한다는 위헌의 소지가 있음</p>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="tab_inner 1999">
                                                        <h3 style="font-size:17px; margin-bottom:15px; font-weight:bold;">1999년 정책건의 사항</h3>
                                                        <div class="dropdown_wrap">
                                                            <ul class="dropdown_list">
                                                                <li class="item on">
                                                                    <div class="box">
                                                                        <span class="title">대학 인접 개발제한 구역내 행위제한 완화 재건의 | 1999. 1. 21</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">현재 정부에서 추진중인 '개발제한구역제도개선'에서 대학 인접 개발제한 구역내 행위제한이 완 화되고, 최소한의 교육시설을 확보할 수 있도록 도시계획법 시행규칙 제7조 제1항 제3호 라목 (1)의 "이미" 삭제를 재건의</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">"제도개선시 참고" 회신(건설교통부 관리 58430-285)</p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="box">
                                                                        <span class="title">대학교지 중 농업구역 해제 건의 | 1999. 5. 11</span>
                                                                        <div class="icon">
                                                                            <i class="axi axi-angle-down down"></i>
                                                                            <i class="axi axi-angle-right right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info">
                                                                        <div class="textbox">
                                                                            <span class="title">- 개요 및 건의내용</span>
                                                                            <p class="text">일부 대학의 교지가 농업보호 구역 또는 농업진흥구역을 포함하고 있으므로, 이들 대학이 필요로 하는 교육시설을 확보할 수 있도록 농업구역 해제를 건의</p>

                                                                            <span class="title">- 결과</span>
                                                                            <p class="text">해당 농업진흥지역 지정권자(시·도지사)가 농업지역 변경 승인 요청을 할 경우, 농림부가 당해 토 지를 종합 검토하여 타당성이 인정될 경우에 승인할 수 있는 것이므로, 그 절차 등 자세한 사항은 해당 지역 시·도지사에게 문의바람(농림부 농지 51311-647)</p>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

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
                                                <li>
                                                    <p>담당부서 : 기획혁신팀</p>
                                                </li>
                                                <li>
                                                    <p>문의전화 : 02) 6919-3817</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
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
