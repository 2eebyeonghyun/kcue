<? 
$_dep = array(6,2);
$_tit = array('사이트도우미','저작권정책');
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
                                <p class="text">한국대학교육협의회 홈페이지에서 제공하는 모든 콘텐츠 즉, 웹문서, 첨부파일, DB정보 등은 저작권법에 의하여 보호받는 저작물로써, 별도의 저작권 표시 또는 다른 출처를 명시한 경우를 제외하고는 원칙적으로 한국대학교육협의회에 저작권이 있습니다.</p>
                                <p class="text">
                                    따라서 저희 협의회에서 제공하는 콘텐츠를 무단 복제, 배포하는 경우에는 저작권법 제97조 5에 의한 저작재산권 침해죄에 해당함을 유념하시기 바랍니다.<br> 
                                    저희 협의회에서 제공하는 콘텐츠로 수익을 얻거나 이에 상응하는 혜택을 누리고자 하는 경우에는 저희 협의회와 사전에 별도의 협의를 하거나 허락을 득하여야 하며, 협의 또는 허락을 얻어 자료의 내용을 게재하는 경우에도 출처가 한국대학교육협의회임을 반드시 명시하여야 합니다.
                                </p>
                                <p class="text">
                                    저희 협의회의 콘텐츠를 적법한 절차에 따라 다른 인터넷 사이트에 게재하는 경우에도 단순한 오류 정정 이외에 내용의 무단변경을 금지하며, 이를 위반할 때에는 형사 처벌을 받을 수 있습니다.<br> 
                                    다른 인터넷 사이트에서 저희 협의회 홈페이지로 링크하는 경우에도 링크 사실을 저희 협의회에 통지하여야 합니다.
                                </p>
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