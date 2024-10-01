<? 
$_dep = array(4,4,3);
$_tit = array('대학교육소식','대교협 소식', '구독신청');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page news-page sub04 under03">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/svis.php"; ?>

            <article class="cont cont1">
                <div class="inner w1300">
                    <div class="kr-topTitle-wrap">
                        <span class="title"><?=$_tit[2]?></span>
                        <ul class="sub-list">
                            <li class="home">
                                <i class="axi axi-home"></i>홈</li>
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
                                    <div class="subscription-wrap">
                                        <form action="?" method="post" name="ssfrm" id="ss_frm" class="ss_frm">
                                            <div class="top">
                                                <ul class="frmbox">
                                                    <li>
                                                        <div class="lef">
                                                            <span class="title">신청자<p class="imp">*</p></span>
                                                        </div>
                                                        <div class="rig">
                                                            <input type="text" name="sub-name" id="sub_name" class="input" placeholder="신청자명을 입력해주세요.">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="lef">
                                                            <span class="title">이메일<p class="imp">*</p></span>
                                                        </div>
                                                        <div class="rig">
                                                            <div class="emailbox">
                                                                <div class="inputbox">
                                                                    <input type="text" name="sub-email1" id="sub_email1" class="sub_email1 input" placeholder="">
                                                                    <span>@</span>
                                                                    <input type="text" name="sub-email2" id="sub_email2" class="sub_email2 input" placeholder="">
                                                                </div>

                                                                <select name="selectEmail" id="select-email" class="select-email">
                                                                    <option value="1">직접입력</option>
                                                                    <option value="naver.com">naver.com</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="lef">
                                                            <span class="title">그룹선택<p class="imp">*</p></span>
                                                        </div>
                                                        <div class="rig">
                                                            <select name="sub-group" id="sub_group" class="sub_group input">
                                                                <option value="">기타(학생·학부모·교사 등)</option>
                                                                <option value="">대학 관계자</option>
                                                                <option value="">언론사</option>
                                                                <option value="">유관기관 및 직능단체</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="lef">
                                                            <span class="title">소속<p class="imp">*</p></span>
                                                        </div>
                                                        <div class="rig">
                                                            <input type="text" name="sub-aff" id="sub_aff" class="input" placeholder="소속을 입력해주세요.">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="bot">
                                                <div class="information-box">
                                                    <ul class="depth1-list">
                                                        <li>
                                                            <span class="in-title"># 개인정보의 수집·이용 목적</span>
                                                            <ul class="depth2-list">
                                                                <li>1. 한국대학교육협의회 발간 대교협 소식(Weekly News) 구독 신청</li>
                                                                <li>2. 공지사항 전달 및 신규 서비스 등 정보 안내</li>
                                                                <li>3. 기타 원활한 양질의 서비스 제공 등</li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <span class="in-title"># 수집하는 개인정보의 항목</span>
                                                            <ul class="depth2-list">
                                                                <li>4. 필수항목 : 성명, 소속, 그룹, 이메일</li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <span class="in-title"># 개인정보의 보유 및 이용 기간</span>
                                                            <ul class="depth2-list">
                                                                <li>- 수신 거부 등록 시 까지.</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="checkbox-wrap">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="frmCheck" id="frmCk" class="frmCk">
                                                        <label for="frmCk">개인정보 수집 동의</label>
                                                    </div>
                                                    
                                                    <button type="submit" class="submitbtn_">신청하기</button>
                                                </div>
                                            </div>
                                        </form>
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
                                        <li><p>문의전화 : 02) 6919-3815</p></li>
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
<script>
    $('#select-email').change(function () {
        $("#select-email option:selected").each(function () {
            if ($(this).val() == '1') {
                $("#sub_email2").val('');
                $("#sub_email2").attr("disabled", false);
            } else {
                $("#sub_email2").val($(this).text());
                $("#sub_email2").attr("disabled", true);
            }
        });
    });
</script>
</html>