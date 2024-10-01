<? 
$_dep = array(1,5);
$_tit = array('KCUE','Directory');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/header.php"; ?>

    <div class="wrap">
        <section class="en_main-page kcue-page directory-page">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1350">
                    <div class="en_textbox">
                        <span class="title">Directory Chart</span>
                        <span class="line"></span>
                    </div>

                    <div class="contents">
                        <table class="directory_table">
                            <thead>
                                <tr>
                                    <th class="num">No</th>
                                    <th class="type">Type</th>
                                    <th class="u_name">University Name in English</th>
                                    <th class="website">Website</th>
                                    <th class="address">Address</th>
                                    <th class="phone">Phone</th>
                                    <th class="fax">Fax</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="num">1</td>
                                    <td class="type">Private</td>
                                    <td class="u_name">Ajou University</td>
                                    <td class="website"><a href="#none" target="_blank" class="target_link">http://www.ajou.ac.kr/en/</a></td>
                                    <td class="address">206, World cup-ro, Yeongtong-gu, Suwon-si, Gyeounggi-do, Republic of Korea</td>
                                    <td class="phone">82-31-219-2114</td>
                                    <td class="fax">82-31-213-5158</td>
                                </tr>
                                <tr>
                                    <td class="num">2</td>
                                    <td class="type">Private</td>
                                    <td class="u_name">Ajou University</td>
                                    <td class="website"><a href="#none" target="_blank" class="target_link">http://www.ajou.ac.kr/en/</a></td>
                                    <td class="address">206, World cup-ro, Yeongtong-gu, Suwon-si, Gyeounggi-do, Republic of Korea</td>
                                    <td class="phone">82-31-219-2114</td>
                                    <td class="fax">82-31-213-5158</td>
                                </tr>
                                <tr>
                                    <td class="num">3</td>
                                    <td class="type">Private</td>
                                    <td class="u_name">Ajou University</td>
                                    <td class="website"><a href="#none" target="_blank" class="target_link">http://www.ajou.ac.kr/en/</a></td>
                                    <td class="address">206, World cup-ro, Yeongtong-gu, Suwon-si, Gyeounggi-do, Republic of Korea</td>
                                    <td class="phone">82-31-219-2114</td>
                                    <td class="fax">82-31-213-5158</td>
                                </tr>
                                <tr>
                                    <td class="num">4</td>
                                    <td class="type">Private</td>
                                    <td class="u_name">Ajou University</td>
                                    <td class="website"><a href="#none" target="_blank" class="target_link">http://www.ajou.ac.kr/en/</a></td>
                                    <td class="address">206, World cup-ro, Yeongtong-gu, Suwon-si, Gyeounggi-do, Republic of Korea</td>
                                    <td class="phone">82-31-219-2114</td>
                                    <td class="fax">82-31-213-5158</td>
                                </tr>
                            </tbody>
                        </table>
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