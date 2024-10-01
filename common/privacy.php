<? 
$_dep = array(6,1);
$_tit = array('사이트도우미','개인정보처리방침');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="help-page privacy-page">
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
                            <div class="headtext_wrap">
                                <p class="text">한국대학교육협의회는 개인정보보호법 등 관련 법령상의 개인정보보호 규정을 준수하여 정보주체의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 정보주체의 고충을 신속하고 원활하게 처리할 수 있도록 『개인정보보호법』제30조 제1항 및 같은 법 『시행령』제31조 제1항의 규정에 따라 해당 홈페이지에『개인정보처리방침』을 정하여 운영하고 있습니다. <b>이 방침은 별도의 설명이 없는 한 KCUE 홈페이지(www.kcue.or.kr) 등 협의회에서 운용하는 모든 웹 사이트에 적용됨을 알려드립니다.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="cont cont3">
                <div class="inner w1300">
                    <div class="contents">
                        <div class="row">
                            <span class="title">[주요 개인정보 처리 표시(라벨링)]</span>
                            <ul class="label_list">
                                <li>
                                    <a href="#gl_01">
                                        <div class="icon_zone">
                                            <div class="img"><img src="<?=DIR?>/img/privacy/privacy_icon1.png" alt="개인정보처리방침 아이콘"></div>
                                        </div>
                                        <div class="text_zone">
                                            <p class="text">일반 개인정보 수집</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#none">
                                        <div class="icon_zone">
                                            <div class="img"><img src="<?=DIR?>/img/privacy/privacy_icon2.png" alt="개인정보처리방침 아이콘"></div>
                                        </div>
                                        <div class="text_zone">
                                            <p class="text">개인정보 처리 목적</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#none">
                                        <div class="icon_zone">
                                            <div class="img"><img src="<?=DIR?>/img/privacy/privacy_icon3.png" alt="개인정보처리방침 아이콘"></div>
                                        </div>
                                        <div class="text_zone">
                                            <p class="text">개인정보 보유 기간</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#none">
                                        <div class="icon_zone">
                                            <div class="img"><img src="<?=DIR?>/img/privacy/privacy_icon4.png" alt="개인정보처리방침 아이콘"></div>
                                        </div>
                                        <div class="text_zone">
                                            <p class="text">개인정보의 위탁</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#none">
                                        <div class="icon_zone">
                                            <div class="img"><img src="<?=DIR?>/img/privacy/privacy_icon5.png" alt="개인정보처리방침 아이콘"></div>
                                        </div>
                                        <div class="text_zone">
                                            <p class="text">개인정보 열람청구</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#none">
                                        <div class="icon_zone">
                                            <div class="img"><img src="<?=DIR?>/img/privacy/privacy_icon6.png" alt="개인정보처리방침 아이콘"></div>
                                        </div>
                                        <div class="text_zone">
                                            <p class="text">고충사항 처리 부서</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <p class="in_text">※ 아이콘을 클릭하시면 해당 위치로 이동하여 상세내용을 바로 확인하실 수 있습니다.</p>
                        </div>

                        <div class="row">
                            <span class="title">목차</span>

                            <ul class="chapter_list">
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon2.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_01" class="title">제 1조 개인정보의 처리 목적</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon3.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_02" class="title">제 2조 개인정보의 처리 및 보유기간</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon1.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_03" class="title">제 3조 처리하는 개인정보 항목</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon7.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_04" class="title">제 4조 개인정보의 제3자 제공</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon4.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_05" class="title">제 4조 개인정보 처리의 위탁</a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="<?=DIR?>/img/privacy/privacy_icon8.png" alt="개인정보처리방침 아이콘">
                                        <img src="<?=DIR?>/img/privacy/privacy_icon9.png" alt="개인정보처리방침 아이콘">
                                    </div>
                                    <a href="#gl_06" class="title">제 6조 정보주체와 법정대리인 권리·의무 및 행사방법</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon10.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_07" class="title">제 7조 개인정보의 파기절차 및 파기방법</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon11.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_08" class="title">제 8조 개인정보의 안전성 확보조치</a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="<?=DIR?>/img/privacy/privacy_icon12.png" alt="개인정보처리방침 아이콘">
                                        <img src="<?=DIR?>/img/privacy/privacy_icon6.png" alt="개인정보처리방침 아이콘">
                                    </div>
                                    <a href="#gl_09" class="title">제9조 개인정보 보호책임자 및 담당자 안내</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon5.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_10" class="title">제10조 개인정보의 열람청구 접수·처리</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon13.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_11" class="title">제11조 정보주체의 권익침해에 대한 구제방법</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon14.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_12" class="title">제12조 개인정보 자동 수집 장치의 설치·운영 및 거부에 관한 사항</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon15.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_13" class="title">제13조 개인정보의 추가적 이용·제공의 기준</a>
                                </li>
                                <li>
                                    <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon16.png" alt="개인정보처리방침 아이콘"></div>
                                    <a href="#gl_14" class="title">제14조 개인정보 처리방침의 변경</a>
                                </li>
                            </ul>
                        </div>

                        <div class="row" id="gl_01">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon2.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제1조 개인정보 처리 목적</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회(www.kcue.or.kr)는 각 분야에서 운영하는 웹 사이트를 다음과 같이 운영 하고 있습니다.</span>
                                    </div>

                                    <div class="scroll_wrap">
                                        <table class="privacy_table">
                                            <thead>
                                                <tr>
                                                    <th class="rt01"></th>
                                                    <th class="rt02"></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>한국대학교육협의회 국문홈페이지</td>
                                                    <td><a href="http://www.kcue.or.kr/" target="_blank">http://www.kcue.or.kr/</a></td>
                                                </tr>
                                                <tr>
                                                    <td>한국대학교육협의회 영문홈페이지</td>
                                                    <td><a href="http://english.kcue.or.kr" target="_blank">http://english.kcue.or.kr</a></td>
                                                </tr>
                                                <tr>
                                                    <td>한국대학교육협의회 문헌정보실</td>
                                                    <td><a href="http://library.kcue.or.kr" target="_blank">http://library.kcue.or.kr</a></td>
                                                </tr>
                                                <tr>
                                                    <td>대학교육지</td>
                                                    <td><a href="http://magazine.kcue.or.kr/" target="_blank">http://magazine.kcue.or.kr/</a></td>
                                                </tr>
                                                <tr>
                                                    <td>대학알리미 홈페이지</td>
                                                    <td><a href="http://academyinfo.go.kr/" target="_blank">http://academyinfo.go.kr/</a></td>
                                                </tr>
                                                <tr>
                                                    <td>대입상담포털</td>
                                                    <td><a href="http://sam.adiga.kr" target="_blank">http://sam.adiga.kr</a></td>
                                                </tr>
                                                <tr>
                                                    <td>한국고등교육정보센터 홈페이지</td>
                                                    <td><a href="http://karic.kr" target="_blank">http://karic.kr</a></td>
                                                </tr>
                                                <tr>
                                                    <td>고등교육연수원 홈페이지</td>
                                                    <td><a href="http://hrd.kcue.or.kr/" target="_blank">http://hrd.kcue.or.kr/</a></td>
                                                </tr>
                                                <tr>
                                                    <td>한국교양기초교육원 홈페이지</td>
                                                    <td><a href="http://konige.kr/" target="_blank">http://konige.kr/</a></td>
                                                </tr>
                                                <tr>
                                                    <td>통합과학 온라인 교육 플랫폼 홈페이지</td>
                                                    <td><a href="https://bsm-konige.kr/" target="_blank">https://bsm-konige.kr/</a></td>
                                                </tr>
                                                <tr>
                                                    <td>교∙강사 온라인 교육 플랫폼 홈페이지</td>
                                                    <td><a href="https://www.libedu.kr/" target="_blank">https://www.libedu.kr/</a></td>
                                                </tr>
                                                <tr>
                                                    <td>대학기관평가인증 홈페이지</td>
                                                    <td><a href="http://aims.kcue.or.kr/" target="_blank">http://aims.kcue.or.kr/</a></td>
                                                </tr>
                                                <tr>
                                                    <td>대학기관평가인증 시스템</td>
                                                    <td><a href="http://aimsys.kcue.or.kr" target="_blank">http://aimsys.kcue.or.kr</a></td>
                                                </tr>
                                                <tr>
                                                    <td>캠퍼스아시아 홈페이지</td>
                                                    <td><a href="http://campusasiaprogram.kr/index.do" target="_blank">http://campusasiaprogram.kr/index.do</a></td>
                                                </tr>
                                                <tr>
                                                    <td>고등교육학술지 홈페이지</td>
                                                    <td><a href="https://jher.jams.or.kr" target="_blank">https://jher.jams.or.kr</a></td>
                                                </tr>
                                                <tr>
                                                    <td>공통원서관리시스템</td>
                                                    <td><a href="https://pams.kcue.or.kr/" target="_blank">https://pams.kcue.or.kr/</a></td>
                                                </tr>
                                                <tr>
                                                    <td>대입정보포털 홈페이지</td>
                                                    <td><a href="http://www.adiga.kr" target="_blank">http://www.adiga.kr</a></td>
                                                </tr>
                                                <tr>
                                                    <td>대학입학전형 종합지원시스템</td>
                                                    <td><a href="http://assist.kcue.or.kr" target="_blank">http://assist.kcue.or.kr</a></td>
                                                </tr>
                                                <tr>
                                                    <td>대입정보포털 모바일서비스</td>
                                                    <td><a href="http://m.adiga.kr" target="_blank">http://m.adiga.kr</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">②</p>
                                        <span class="title">한국대학교육협의회에서 『개인정보보호법』제32조에 따라 등록·공개하는 개인정보에 대한 처리목적은 다음과 같습니다.</span>
                                    </div>
                                </div>

                                <div class="pdf-btn-wrap">
                                    <a href="<?=DIR?>/img/privacy/down_07.pdf" class="pdf_btn" target="_blank">개인정보파일현황</a>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_02">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon3.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제2조 개인정보의 처리 및 보유기간</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회에서 처리하는 개인정보는 수집·이용 목적으로 명시한 범위 내에서 처리하며, 개인정보보호법 및 관련법령에서 정하는 보유기간을 준용하여 이행하고 있습니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">②</p>
                                        <span class="title">한국대학교육협의회에서『개인정보보호법』제32조에 따라 등록·공개하는 개인정보의 처리 및 보유기간은 본 방침 <b>제1조 ②항의 '개인정보파일 현황'에서 조회하실 수 있습니다.</b></span>  
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">③</p>
                                        <span class="title">개인정보보호위원회 개인정보 포털(<a href="www.privacy.go.kr" target="_blank">www.privacy.go.kr</a>) 에서도 확인 가능합니다. (‘개인정보파일 검색’에서 기관명 “한국대학교육협의회”로 검색)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_03">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon1.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제3조 처리하는 개인정보 항목</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회에서 처리하는 개인정보는 소관업무 및 법령에서 정한 최소한의 개인정보만을 처리하며, 정보주체의 동의를 받아 개인정보를 수집하는 경우 필요한 최소한의 정보 외의 개인정보 수집에는 동의하지 아니할 수 있다는 사실을 구체적으로 알리고 개인정보를 수집합니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">②</p>
                                        <span class="title">한국대학교육협의회에서 처리하는 개인정보의 항목은 본 방침 <b>제1조 ②항의 ‘개인정보파일 현황’에서 조회하실 수 있습니다.</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_04">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon7.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제4조 개인정보의 제3자 제공</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회는 원칙적으로 정보주체의 개인정보를 수집·이용 목적으로 명시한 범위 내에서 처리하며, 정보주체의 동의, 법률의 특별한 규정 등 개인정보 보호법 제17조 및 제18조에 해당하는 다음의 경우를 제외하고는 정보주체의 사전 동의 없이는 본래의 목적 범위를 초과하여 처리하거나 제3자에게 제공하지 않습니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">②</p>
                                        <span class="title">한국대학교육협의회에서는 개인정보를 다음과 같이 제3자 제공하고 있습니다.</span>
                                    </div>
                                </div>

                                <div class="pdf-btn-wrap">
                                    <a href="<?=DIR?>/img/privacy/down_08.pdf" class="pdf_btn" target="_blank">개인정보 제3자 제공 현황</a>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_05">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon4.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제4조 개인정보 처리의 위탁</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회는 개인정보의 처리 업무를 위탁하는 경우에는 『개인정보보호법』제26조(업무위탁에 따른 개인정보의 처리 제한)에 따라 위탁하고 있습니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">②</p>
                                        <span class="title">한국대학교육협의회는 위탁계약 체결 시 『개인정보보호법』제26조에 따라 위탁업무 수행목적 외 개인정보 처리금지, 기술적·관리적 보호조치, 재위탁 제한, 수탁자에 대한 관리·감독, 손해배상 등 책임에 관한 사항을 계약서 등 다음 각 호의 내용이 포함된 문서에 명시하고, 수탁자가 개인정보를 안전하게 처리하는지를 감독하고 있습니다.</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>1. 위탁업무 수행 목적 외 개인정보의 처리 금지에 관한 사항</li>
                                        <li>2. 개인정보의 기술적·관리적 보호조치에 관한 사항</li>
                                        <li>
                                            3. 그 밖에 개인정보의 안전한 관리를 위하여 다음과 같이 대통령령으로 정한 사항
                                            <ul class="dep3_text_wrap">
                                                <li>가. 위탁업무의 목적 및 범위</li>
                                                <li>나. 재위탁 제한에 관한 사항</li>
                                                <li>다. 개인정보에 대한 접근 제한 등 안전성 확보 조치에 관한 사항</li>
                                                <li>라. 위탁업무와 관련하여 보유하고 있는 개인정보의 관리 현황 점검 등 감독에 관한사항</li>
                                                <li>마. 수탁자가 준수하여야 할 의무를 위반한 경우의 손해배상 등 책임에 관한 사항</li>
                                            </ul>
                                        </li>
                                        <li>4. 위탁하는 업무의 내용과 개인정보 처리업무를 위탁받아 처리하는 자(“수탁자”)에 대하여 해당 홈페이지에 공개하고 있습니다.</li>
                                    </ul>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">③</p>
                                        <span class="title">한국대학교육협의회는 개인정보 처리를 위탁하는 경우 관련사항은 각 분야에서 운영하는 소관 홈페이지에 게재하여 정보주체가 확인할 수 있도록 안내를 하고 있습니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">④</p>
                                        <span class="title">위탁업무의 내용이나 수탁자가 변경될 경우에는 지체 없이 본 개인정보 처리방침을 통하여 공개하도록 하겠습니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">⑤</p>
                                        <span class="title">한국대학교육협의회에서는 원활한 개인정보 업무처리를 위하여 개인정보 처리업무를 위탁하고 있는 현황은 다음과 같습니다.</span>
                                    </div>
                                </div>

                                <div class="pdf-btn-wrap">
                                    <a href="<?=DIR?>/img/privacy/down_09.pdf" class="pdf_btn" target="_blank">개인정보처리 위탁 현황</a>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_06">
                            <div class="row-title-box">
                                <div class="icon">
                                    <img src="<?=DIR?>/img/privacy/privacy_icon8.png" alt="개인정보처리방침 아이콘">
                                    <img src="<?=DIR?>/img/privacy/privacy_icon9.png" alt="개인정보처리방침 아이콘">
                                </div>
                                <span class="title">제5조 정보주체와 법정대리인 권리·의무 및 행사방법</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">정보주체는 한국대학교육협의회에 대해 다음과 같은 권리를 행사할 수 있으며 만 14세미만 아동의 법정대리인은 해당 아동의 개인정보에 대한 열람, 정정, 삭제, 처리정지를 요구할 수 있습니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">②</p>
                                        <span class="title">개인정보 열람 요구</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>
                                            1. 한국대학교육협의회에서 보유하고 있는 개인정보파일은 『개인정보보호법』제35조에 따라 본인의 개인정보에 대한 열람을 요구할 수 있습니다. 다만, 개인정보 열람 요구는 『개인정보보호법』 제35조제4항에 의하여 다음과 같이 제한될 수 있습니다.
                                            <ul class="dep3_text_wrap">
                                                <li>- 법률에 따라 열람이 금지되거나 제한되는 경우</li>
                                                <li>- 다른 사람의 생명·신체를 해할 우려가 있거나 다른 사람의 재산과 그 밖의 이익을 부당하게 침해할 우려가 있는 경우</li>
                                                <li>
                                                    - 공공기관이 다음 각 목의 어느 하나에 해당하는 업무를 수행할 때 중대한 지장을 초래하는 경우
                                                    <ul class="dep4_text_wrap">
                                                        <li>가. 조세의 부과·징수 또는 환급에 관한 업무</li>
                                                        <li>나. 「초·중등교육법」및「고등교육법」에 따른 각급 학교,「평생교육법」에 따른 평생교육시설, 그 밖의 다른 법률에 따라 설치 된 고등교육기관에서의 성적 평가 또는 입학자 선발에 관한 업무</li>
                                                        <li>다. 학력·기능 및 채용에 관한 시험, 자격 심사에 관한 업무</li>
                                                        <li>라. 보상금·급부금 산정 등에 대하여 진행 중인 평가 또는 판단에 관한 업무</li>
                                                        <li>마. 다른 법률에 따라 진행 중인 감사 및 조사에 관한 업무</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">③</p>
                                        <span class="title">개인정보 정정·삭제 요구</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>- 한국대학교육협의회에서 보유하고 있는 개인정보파일은 『개인정보보호법』제36조(개인정보의 정정·삭제)에 따라 정정·삭제를 요구할 수 있습니다. 다만, 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.</li>
                                    </ul>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">④</p>
                                        <span class="title">개인정보 처리정지 요구</span>
                                    </div>
                                    
                                    <ul class="dep2_text_wrap">
                                        <li>
                                            한국대학교육협의회에서 보유하고 있는 개인정보파일은 『개인정보보호법』제37조에 따라 처리정지를 요구할 수 있습니다. 다만, 개인정보 처리정지 요구 시 『개인정보보호법』제37조제2항에 의하여 처리정지 요구가 거절될 수 있습니다.
                                            <ul class="dep3_text_wrap">
                                                <li>- 법률에 특별한 규정이 있거나 법령상 의무를 준수하기 위하여 불가피한 경우</li>
                                                <li>- 다른 사람의 생명·신체를 해할 우려가 있거나 다른 사람의 재산과 그 밖의 이익을 부당하게 침해할 우려가 있는 경우</li>
                                                <li>- 공공기관이 개인정보를 처리하지 아니하면 다른 법률에서 정하는 소관업무를 수행할 수 없는 경우</li>
                                                <li>- 개인정보를 처리하지 아니하면 정보주체와 약정한 서비스를 제공하지 못하는 등 계약의 이행이 곤란한 경우로서 정보주체가 그 계약의 해지의사를 명확하게 밝히지 아니한 경우</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">⑤</p>
                                        <span class="title">개인정보 열람 등 요구방법</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>- 제1항에 따른 권리 행사는 개인정보 처리 방법에 관한 고시 별지 제8호 서식에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며, 한국대학교육협의회는 신청자의 신분을 확인 후 지체 없이 조치하겠습니다.</li>
                                        <li>- 정보주체 본인의 '열람/증명' 접수 처리 시에는 고객의 신분을 나타내는 주민등록증, 여권, 운전면허증 등의 신분증명서를 제출하여 본인 여부를 확인합니다.</li>
                                        <li>- 정보주체의 대리인이 방문하여 개인정보의 열람/증명을 요구하는 경우에는 대리관계를 나타내는 위임장 및 명의 고객의 인감증명서와 대리인의 신분증명서 등의 증표를 제시받아 진정한 대리인인지 여부를 확인합니다.</li>
                                        <li>- 개인정보의 전부 또는 일부에 대하여 열람/증명 또는 정정을 거절할 이유가 있는 경우에는 고객에게 이를 통지하고 그 이유를 설명합니다.</li>
                                    </ul>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">⑥</p>
                                        <span class="title">정보주체가 개인정보의 오류 등에 대한 정정 또는 삭제를 요구한 경우에는 정정 또는 삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">⑦</p>
                                        <span class="title">정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 제1항에 대한 권리 행사를 하는 경우 개인정보 처리 방법에 관한 고시 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.</span>
                                    </div>
                                </div>

                                <div class="pdf-btn-wrap">
                                    <a href="<?=DIR?>/img/privacy/down_05.hwp" class="pdf_btn" target="_blank">[서식] : 개인정보(열람, 정정 · 삭제, 처리정지) 요구서</a>
                                    <a href="<?=DIR?>/img/privacy/down_06.hwp" class="pdf_btn" target="_blank">[서식] : 위임장</a>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_07">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon10.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제7조 개인정보 파기절차 및 파기방법</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회는 개인정보 보유기간의 경과, 처리목적 달성 등 개인정보가 불필요하게 되었을 때에는 지체 없이 해당 개인정보를 파기합니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">②</p>
                                        <span class="title">파기의 절차 및 방법은 다음과 같습니다.</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>
                                            1. 파기절차
                                            <ul class="dep3_text_wrap">
                                                <li>- 불필요한 개인정보 및 개인정보파일은 개인정보파기 계획을 수립하여 파기합니다. 파기 사유가 발생한 개인정보(또는 개인정보파일)을 선정하고, 개인정보책임자의 승인을 받아 개인정보(또는 개인정보파일)을 파기합니다. 개인정보는 목적 달성 후 즉시 또는 별도 공간에 옮겨져 내부방침 및 기타 관련법령에 따라 일정기간 보유한 후 파기되며, 별도의 공간으로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 다른 목적으로 이용되지 않습니다.</li>
                                                <li>
                                                    - 개인정보의 파기
                                                    <ul class="dep4_text_wrap">
                                                        <li>보유기간이 경과하거나 처리목적 달성한 개인정보는 종료일로부터 지체 없이 파기합니다.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    - 개인정보파일의 파기
                                                    <ul class="dep4_text_wrap">
                                                        <li>개인정보파일의 보유기간이 만료되었거나 처리 목적 달성, 해당 서비스의 폐지, 사업의 종료 등 그 개인정보파일이 불필요하게 되었을 때에는 지체 없이 그 개인정보파일을 파기합니다.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            2. 파기방법
                                            <ul class="dep3_text_wrap">
                                                <li>- 전자적 파일 형태로 기록·저장된 개인정보는 기록을 재생할 수 없도록 로우레밸포멧(Low Level Format) 등의 방법을 이용하여 파기합니다.</li>
                                                <li>- 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">③</p>
                                        <span class="title">정책고객, 홈페이지회원 등의 홍보 및 대국민서비스 목적의 외부고객 명부는 특별 한 경우를 제외하고는 2년을 주기로 정보주체의 재동의 절차를 거쳐 동의한 경우에만 계속적으로 보유합니다.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_08">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon11.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제8조 개인정보의 안전성 확보조치</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회는 개인정보보호법 제29조에 따라 다음과 같이 개인정보의 안전성 확보를 위하여 개인정보보호지침에 의거한 관리적, 기술적, 물리적 대책으로 여러 보안장치를 마련하고 있습니다.</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>
                                            1. 개인정보 취급 직원의 최소화 및 교육
                                            <ul class="dep3_text_wrap">
                                                <li>- 개인정보를 취급하는 직원은 반드시 필요한 인원에 한하여 지정·관리하고 있으며 취급직원을 대상으로 안전한 관리를 위한 교육을 실시하고 있습니다.</li>
                                            </ul> 
                                        </li>
                                        <li>
                                            2. 정기적인 자체 점검 실시
                                            <ul class="dep3_text_wrap">
                                                <li>- 개인정보 취급 관련 안정성 확보를 위해 정기적(월1회)으로 자체 점검을 실시하고 있습니다.</li>
                                            </ul> 
                                        </li>
                                        <li>
                                            3. 개인정보에 대한 접근 제한
                                            <ul class="dep3_text_wrap">
                                                <li>- 개인정보를 처리하는 데이터베이스시스템에 대한 접근권한의 부여·변경·말소를 통하여 개인정보에 대한 접근 통제를 위한 필요한 조치를 하고 있으며 침입차단시스템을 이용하여 외부로부터의 무단접근을 통제하고 있습니다.</li>
                                            </ul> 
                                        </li>
                                        <li>
                                            4. 접속기록의 보관
                                            <ul class="dep3_text_wrap">
                                                <li>- 개인정보처리시스템에 접속한 기록(웹로그, 요약정보 등)을 최소 2년 이상 보관·관리하고 있으며, 접속 기록이 위변조 및 도난, 분실되지 않도록 보안기능 사용하고 있습니다.</li>
                                            </ul> 
                                        </li>
                                        <li>
                                            5. 개인정보의 암호화
                                            <ul class="dep3_text_wrap">
                                                <li>- 개인정보는 암호화 등을 통해 안전하게 저장 및 관리되고 있습니다. 또한 중요한 데이터는 저장 및 전송 시 암호화하여 사용하는 등의 별도 보안기능을 사용하고 있습니다.</li>
                                            </ul> 
                                        </li>
                                        <li>
                                            6. 보안 프로그램 설치 및 주기적 점검·갱신
                                            <ul class="dep3_text_wrap">
                                                <li>- 해킹이나 컴퓨터 바이러스 등에 의한 개인정보 유출 및 훼손을 막기 위하여 보안 프로그램을 설치하고 주기적으로 갱신·점검하고 있으며, 접근이 통제된 구역에 시스템을 설치하고 기술적/물리적으로 감시 및 차단하고 있습니다.</li>
                                            </ul> 
                                        </li>
                                        <li>
                                            7. 비인가자에 대한 출입 통제
                                            <ul class="dep3_text_wrap">
                                                <li>- 개인정보를 보관하고 있는 개인정보시스템의 물리적 보관 장소를 별도로 두고 이에 대해 출입통제 절차를 수립, 운영하고 있습니다.</li>
                                            </ul> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_09">
                            <div class="row-title-box">
                                <div class="icon">
                                    <img src="<?=DIR?>/img/privacy/privacy_icon12.png" alt="개인정보처리방침 아이콘">
                                    <img src="<?=DIR?>/img/privacy/privacy_icon6.png" alt="개인정보처리방침 아이콘">
                                </div>
                                <span class="title">제9조 개인정보 보호책임자 및 담당자 안내</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회는 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 관련 문의사항 및 정보주체의 불만처리, 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자 및 담당자를 두고 있습니다.</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>
                                            ▶ 개인정보보호 책임자
                                            <ul class="dep3_text_wrap">
                                                <li>- 부서명 : 대학교육정보실</li>
                                                <li>- 성  명 : 이동규</li>
                                                <li>- 직  책 : 대학교육정보실장</li>
                                                <li>- 연락처 : ☎02-6919-3870</li>
                                            </ul> 
                                        </li>

                                        <li>
                                            ▶ 개인정보보호 담당자
                                            <ul class="dep3_text_wrap">
                                                <li>- 부서명 : 정보화지원팀</li>
                                                <li>- 성  명 : 최용규</li>
                                                <li>- 직  책 : 정보화지원팀장</li>
                                                <li>- 연락처 : 02-6919-3871</li>
                                                <li>- 이메일 : cyk@kcue.or.kr</li>
                                                <li>- 팩  스 : 02-6919-3880</li>
                                            </ul> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_10">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon5.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제10조 개인정보의 열람청구 접수·처리</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회에서는 다음과 같이 개인정보 열람청구 접수부서를 운영하고 있으므로 정보주체는『개인정보보호법』제35조에 따른 개인정보의 열람청구를 아래의 부서에 할 수 있습니다. (14세 미만 아동은 법적 대리인의 동의를 통해 가능함)</span>
                                    </div>
                                </div>

                                <div class="pdf-btn-wrap">
                                    <a href="<?=DIR?>/img/privacy/down_10_1.pdf" class="pdf_btn" target="_blank">개인정보 열람청구 접수부서 현황</a>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_11">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon13.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제11조 정보주체의 권익침해에 대한 구제방법</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">정보주체는 아래의 기관에 개인정보 침해에 대한 피해구제, 상담 등을 문의할 수 있습니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">②</p>
                                        <span class="title">아래의 기관은 한국대학교육협의회와 별개의 기관으로서, 한국대학교육협의회의 자체적인 개인정보 불만처리, 피해 구제 결과에 만족 하지 못하시거나 보다 자세한 도움이 필요하시면 문의하여 주시기 바랍니다.</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>
                                            ▶ 개인정보 포털 (한국인터넷진흥원 운영)
                                            <ul class="dep3_text_wrap">
                                                <li>- 소관업무 : 개인정보 침해사실 신고, 상담 신청, 자료제공</li>
                                                <li>- 홈페이지 : www.privacy.go.kr</li>
                                                <li>- 전화 : 02-2100-3043</li>
                                                <li>- 주소 : (03171)서울특별시 종로구 세종대로209 (정부서울청사 4층 개인정보보호위원회)</li>
                                            </ul> 
                                        </li>

                                        <li>
                                            ▶ 개인정보침해 신고센터 (한국인터넷진흥원 운영)
                                            <ul class="dep3_text_wrap">
                                                <li>- 소관업무 : 개인정보 침해사실 신고, 상담 신청</li>
                                                <li>- 홈페이지 : privacy.kisa.or.kr</li>
                                                <li>- 전화 : (국번없이) 118</li>
                                                <li>- 주소 : (58324) 전남 나주시 진흥길 9 한국인터넷진흥원 개인정보침해신고센터</li>
                                            </ul> 
                                        </li>

                                        <li>
                                            ▶ 개인정보 분쟁조정
                                            <ul class="dep3_text_wrap">
                                                <li>- 소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결)</li>
                                                <li>- 홈페이지 : www.privacy.go.kr</li>
                                                <li>- 전화 : 1833-6972</li>
                                                <li>- 주소 : (03171) 서울특별시 종로구 세종대로 209 정부서울청사 12층</li>
                                            </ul> 
                                        </li>

                                        <li>
                                            ▶ 경찰청 사이버범죄 신고시스템
                                            <ul class="dep3_text_wrap">
                                                <li>- 소관업무 : 개인정보 침해 관련 형사사건 문의 및 신고</li>
                                                <li>- 홈페이지 : ecrm.police.go.kr</li>
                                                <li>- 전화 : (국번없이) 182</li>
                                                <li>- 주소 : (03739) 서울특별시 서대문구 통일로 97</li>
                                                <li>- 유관 기관 : 대검찰청 사이버수사과 (국번없이)1301</li>
                                            </ul> 
                                        </li>
                                    </ul>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">③</p>
                                        <span class="title">또한 개인정보의 열람, 정정·삭제, 처리정지 등에 대한 정보주체의 요구에 대하여 공공기관의 장이 행한 처분 또는 부작위로 인하여 권리 또는 이익을 침해 받은 자는 행정심판법이 정하는 바에 따라 행정심판을 청구할 수 있습니다.</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>☞ 중앙행정심판위원회(www.simpan.go.kr)의 전화번호 안내 참조.</li>
                                    <ul>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_12">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon14.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제12조 개인정보 자동 수집 장치의 설치·운영 및 거부에 관한 사항</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회는 정보주체의 이용정보를 저장하고 수시로 불러오는 '쿠키(cookie)'를 사용하지 않습니다.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_13">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon15.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제13조 개인정보의 추가적 이용·제공의 기준</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">한국대학교육협의회는 개인정보보호법 시행령 제14조의2에 따라 정보주체의 동의없이 개인정보의 추가적인 이용 및 제공할 경우 아래 각 호에 따른 판단기준을 마련하여 적용하고 있습니다.</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>1. 당초 수립 목적과 관련성이 있는지 여부</li>
                                        <li>2. 개인정보를 수집한 정황 또는 처리 관행에 비추어 볼 때 개인정보의 추가적인 이용 또는 제공에 대한 예측 가능성이 있는지 여부</li>
                                        <li>3. 정보주체의 이익을 부당하게 침해하는지 여부</li>
                                        <li>4. 가명처리 또는 암호화 등 안정성 확보에 필요한 조치를 하였는지 여부</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gl_14">
                            <div class="row-title-box">
                                <div class="icon"><img src="<?=DIR?>/img/privacy/privacy_icon16.png" alt="개인정보처리방침 아이콘"></div>
                                <span class="title">제14조 개인정보 처리방침의 변경</span>
                            </div>

                            <div class="row-contents">
                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">①</p>
                                        <span class="title">이 개인정보처리방침은 2023년 12월 XX일부터 적용됩니다.</span>
                                    </div>
                                </div>

                                <div class="dep2_row">
                                    <div class="h_text">
                                        <p class="num">②</p>
                                        <span class="title">이전의 개인정보 처리방침은 아래에서 확인하실 수 있습니다.</span>
                                    </div>

                                    <ul class="dep2_text_wrap">
                                        <li>- 공고일자 : 2014년 3월 2일</li>
                                        <li>- 시행일자 : 2014년 03월 02일</li>
                                        <li><a href="#none" target="_blank">- 개정일자 : 2015년 09월 07일</a></li>
                                        <li>- 개정일자 : 2016년 10월 31일</li>
                                        <li><a href="#none" target="_blank">- 개정일자 : 2019년 07월 31일</a></li>
                                        <li><a href="#none" target="_blank">- 개정일자 : 2020년 09월 08일</a></li>
                                        <li><a href="#none" target="_blank">- 개정일자 : 2022년 10월 24일</a></li>
                                        <li><a href="#none" target="_blank">- 개정일자 : 2023년 03월 31일</a></li>
                                        <li><a href="#none" target="_blank">- 개정일자 : 2023년 10월 06일</a></li>
                                        <li><a href="#none" target="_blank">- 개정일자 : 2024년 03월 08일</a></li>
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