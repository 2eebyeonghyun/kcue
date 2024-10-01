<? 
$_dep = array(1,4);
$_tit = array('KCUE','Organization');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/header.php"; ?>

    <div class="wrap">
        <section class="en_main-page kcue-page organization-page">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1350">
                    <div class="en_textbox">
                        <span class="title">Organization Chart</span>
                        <span class="line"></span>
                    </div>

                    <div class="contents">
                        <div class="chart_row top_row">
                            <ul class="list">
                                <li><span>General Assembly</span></li>
                                <li><span>Board of Trustees</span></li>
                                <li><span>Chairperson</span></li>
                            </ul>
                        </div>

                        <div class="chart_row mid_row">
                            <ul class="list">
                                <li><span>Secretary General</span></li>
                                <li><span>Deputy Secretary General</span></li>
                            </ul>
                        </div>

                        <div class="chart_row bot_row">
                            <div class="list">
                                <ul class="dep1_list dep1_list_01">
                                    <li><span>Dep. of Management Support</span></li>
                                </ul>

                                <ul class="dep1_list dep1_list_02">
                                    <li><span><b>Office of</b> University Innovation Support</span></li>
                                    <ul class="dep2_list">
                                        <li><span>Planning &amp; Innovation Team</span></li>
                                        <li><span>Future Strategy Team</span></li>
                                        <li><span>International Cooperation Team</span></li>
                                        <li><span>PR &amp; Communication TFT</span></li>
                                    </ul>
                                </ul>

                                <ul class="dep1_list dep1_list_03">
                                    <li><span><b>Office of</b> University Admissions Support</span></li>
                                    <ul class="dep2_list">
                                        <li><span>Admissions Planning Team</span></li>
                                        <li><span>Admissions Management Team</span></li>
                                        <li><span>Admissions Counseling Center</span></li>
                                        <li><span>Admissions Fairness Support Team</span></li>
                                    </ul>
                                </ul>

                                <ul class="dep1_list dep1_list_04">
                                    <li><span>Institute of University Education Information</span></li>
                                    <ul class="dep2_list">
                                        <li><span>Center of University Information Disclosure</span></li>
                                        <li><span>Information Service Support Team</span></li>
                                    </ul>
                                </ul>

                                <ul class="dep1_list dep1_list_05">
                                    <li><span>Research Institute of Higher Education</span></li>
                                    <ul class="dep2_list">
                                        <li class="add2_box"><span>Policy Research Team</span></li>
                                    </ul>
                                </ul>

                                <ul class="dep1_list dep1_list_06">
                                    <li><span>Higher Education Training Institute</span></li>
                                    <ul class="dep2_list">
                                        <li class="add2_box"><span>Training Support Team</span></li>
                                    </ul>
                                </ul>

                                <ul class="dep1_list dep1_list_07">
                                    <li><span>Korea National Institute for General Education</span></li>
                                    <ul class="dep2_list">
                                        <li class="add2_box"><span>Korea National Institute for General Education</span></li>
                                    </ul>
                                </ul>

                                <ul class="dep1_list dep1_list_08">
                                    <li><span>Korean University Accreditation Institute</span></li>
                                    <ul class="dep2_list">
                                        <li><span>University Accreditation Team</span></li>
                                        <li><span>Korea Academic Recognition Information Center</span></li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/footer.php"; ?>
        </section>
    </div>
</body>
<script src="<?=DIR?>/en/js/main.js"></script>
<script src="<?=DIR?>/en/js/header.js"></script>
</html>