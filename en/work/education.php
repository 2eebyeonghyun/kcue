<? 
$_dep = array(2,6);
$_tit = array('WORK','General Education');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/header.php"; ?>

    <div class="wrap">
        <section class="en_main-page work-page education-page">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1350">
                    <div class="en_textbox relative">
                        <span class="title">Korea National Institute for General Education</span>
                        <span class="line"></span>
                        <a href="https://konige.kr/" class="linkbtn" target="_blank"><i class="axi axi-language"></i>konige.kr</a>
                    </div>

                    <div class="contents">
                        <div class="row">
                            <span class="title">OBJECTIVE</span>
                            <ul class="subject_box">
                                <li>
                                    To achieve extensive reform of university education system by<br> 
                                    - Enhancing content offerings in general courses<br> 
                                    - Promoting general courses to raise positive awareness<br> 
                                    - Implementing integrated curriculum encompassing general and major courses
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <article class="cont cont2">
                <div class="inner w1350">
                    <div class="en_textbox">
                        <span class="title">KEY DESCRIPTIONS</span>
                        <span class="line"></span>
                    </div>

                    <div class="contents">
                        <div class="row">
                            <div class="block-list">
                                <div class="block-item">
                                    <div class="block">R&D in general<br> education</div>
                                    <div class="textbox">
                                        <p>Conduct research on general education</p>
                                    </div>
                                </div>
                                <div class="block-item">
                                    <div class="block">Support for<br> general education<br> improvement</div>
                                    <div class="textbox">
                                        <p>Organize leadership workshop on general education</p>
                                        <p>Support workshop for teachers on general education</p>
                                        <p>Provide general education consulting</p>
                                        <p>Support to develop curriculum in Basic Science & Mathematics</p>
                                    </div>
                                </div>
                                <div class="block-item">
                                    <div class="block">Greater awareness<br> of general education</div>
                                    <div class="textbox">
                                        <p>Organize forum to promote cooperation on general education</p>
                                        <p>Host academic conferences</p>
                                        <p>Build an archive on general education</p>
                                        <p>Publish e-journal ‘Durunae’</p>
                                        <p>Promote general education</p>
                                    </div>
                                </div>
                            </div>

                            <div class="imgbox">
                                <img src="<?=DIR?>/img/en/work/education_img.png" alt="education img">
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