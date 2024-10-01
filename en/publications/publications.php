<? 
$_dep = array(4,1);
$_tit = array('PUBLICATIONS','Publications');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/header.php"; ?>

    <div class="wrap">
        <section class="en_main-page publications-page">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1350">
                    <div class="en_textbox relative">
                        <span class="title">Publications</span>
                        <span class="line"></span>

                        <div class="search-box">
                            <form action="?" name="searchFrm" id="search_frm" class="search_frm" method="post">
                                <div class="row">
                                    <select name="searchSelect" id="search_select" class="search_select">
                                        <option value="sfrm01">Subject</option>
                                        <option value="sfrm02">Subject</option>
                                    </select>

                                    <div class="Input-box">
                                        <input type="text" name="searchSubject" id="search_subject" class="input search_subject">
                                        <button type="submit" class="searchBtn">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </article>

            <article class="cont cont2">
                <div class="inner w1350">
                    <div class="publications-box">
                        <div class="count">
                            <p class="count-page">SearchPage 1/1 (Total: 9 Count)</p>
                        </div>

                        <ul class="publications-list">
                            <li class="publications-item">
                                <a href="<?=DIR?>/en/publications/publications_view.php" class="view">
                                    <div class="imgbox">
                                        <img src="<?=DIR?>/img/en/publications/publications_img.png" alt="publications img">
                                    </div>
                                    <div class="infobox">
                                        <span class="title">[Issue Paper] Digital Qualification and [Issue Paper] Digital Qualification and</span>
                                        <p class="date">2023-02-24</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/pagenation.php"; ?>
            </article>

            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/footer.php"; ?>
        </section>
    </div>
</body>
<script src="<?=DIR?>/en/js/main.js"></script>
<script src="<?=DIR?>/en/js/header.js"></script>
</html>