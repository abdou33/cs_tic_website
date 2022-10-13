<!DOCTYPE html>
<style>
    @font-face {
            font-family: 'cairo';
            src: url(fonts/Cairo/Cairo-VariableFont_wght.ttf);
    }
    *{
        background-color: #ffffff;
        margin: 0;
        padding: 0;
        font-family: 'cairo';
    }
    .logo{
        width: 4vw;
        margin: 1vw;
    }
    .navbar{
        margin: 0 5% 0 8%;
        width: 85%;
        display: flex;
        align-items: center;
        justify-content: left;
    }
    .left-options{
        list-style: none;
        display: inline;
        position: absolute;
        right: 8%;
    }
    .navbar_left_text{
        font-size: 1.7vw;
        list-style: none;
        display: inline;
        margin: 0 18px;
    }
    a {
        color: #2596be;
        text-decoration: none;
    }
    .principal{
        margin: 5vw;
    }
    p{
        font-family: 'cairo';
        color: #1b607a;
        text-align: center;
        font-size: 2vw;
        margin: 0;
    }
    #line1 p::first-letter{
        font-size: 4vw;
        text-align: center;
    }
    #line2 p::first-letter{
        font-size: 4vw;
        text-align: center;
    }
    .principal p{
        display: inline-block;
    }
    #line1{
        margin-bottom: 0;
        padding-bottom: 0;
    }
    #line1 p{
        margin: 0;
        padding: 0 1% 0 1%;
    }
    #line2 p{
        margin: 0;
        padding: 0 1% 0 1%;
    }
    div{
        text-align: center;
    }
    #location{
        color: #1d7da0;
        font-size: 2vw;
    }
    .social{
        width: 3vw;
        padding: 7px;
        margin-top: 2%;
    }
    #connect, .news, .Events, .goals{
        text-align: left;
        width: 40%;
        margin: 0 5% 4% 5%;
    }
    #connect h3, .news h3, .Events h3, .goals h3{
        color: #1b607a;
        font-size: 2.6vw;
    }
    #connect p, .news p, .Events p, .goals p{
        font-size: 1.2vw;
        color: black;
        text-align: left;
    }
    #socials2{
        margin: 0;
    }
    footer .foot {
        width: 97vw;
        background-color: #1d7da0;
        color: white;
        text-decoration: none;
        font-size: 1.5vw;
        padding: 1vw;
    }
    .dropdown-about {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 2vw;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-lang{
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 4vw;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }
    .dropdown-about a, .dropdown-lang p {
        float: none;
        color: #1b607a;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: center;
        font-size: 1.2vw;
    }
    #aboutdiv:hover .dropdown-about, #langdiv:hover .dropdown-lang {
        display: block;
    }
    #aboutdiv, #langdiv{
        display: inline-block;
    }
    .dropdown-lang img{
        width: 2vw;
        float: left;
        margin: 0.65vw;
    }
    .dropdown-lang p:hover, .asss:hover{
        background-color: #cfcfcf;
    }
    .navbar_left_text:hover{
        font-size: 1.7vw;
        font-weight: bold;
    }
    .ar, .en, .fr{
        display: none;
    }
    .infos{
        display: flex;
        flex-wrap: wrap;
    }
    #newstime, #eventtime{
        color: black;
        font-size: 1.4vw;
        margin-top: 2%;
    }
    #newstitle, #eventtitle{
        color: #1b607a;
        font-size: 1.4vw;
        margin-top: 3%;
    }
</style>
<html>
    <link rel="icon" href="media/logo.png">
    <title>cs_Tic</title>
    <head>
        <script src="js/jquery.min.js"></script>
        <div class="navbar">
                <a href="index.html"><img class="logo" src="media/logo.png" ></a>
            <div class="left-options">
                <div id="langdiv">
                    <a href="" class="navbar_left_text en" id="lang">language</a>
                    <a href="" class="navbar_left_text fr" id="lang">Langue</a>
                    <a href="" class="navbar_left_text ar" id="lang">اللغة</a>
                    <div class="dropdown-lang">
                        <p href="" onclick="change_lang('ar')"><img src="media/lang/alg.png">العربية</p>
                        <p href="" onclick="change_lang('en')"><img src="media/lang/uk.png"> english</p>
                        <p href="" onclick="change_lang('fr')"><img src="media/lang/france.png"> français</p>
                    </div>
                </div>
                <a href="" class="navbar_left_text en" >Home</a>
                <a href="" class="navbar_left_text fr" >Accueil</a>
                <a href="" class="navbar_left_text ar" >الرئيسية</a>
                <div id="aboutdiv">
                    <a href="" class="navbar_left_text en" id="about">About</a>
                    <a href="" class="navbar_left_text fr" id="about">sur nous</a>
                    <a href="" class="navbar_left_text ar" id="about">من نحن؟</a>
                    <div class="dropdown-about">
                        <a href="about_us.html" class="asss en">About US</a>
                        <a href="about_us.html" class="asss fr">sur nous</a>
                        <a href="about_us.html" class="asss ar">من نحن؟</a>

                        <a href="members.html" class="asss en">members</a>
                        <a href="members.html" class="asss fr">members</a>
                        <a href="members.html" class="asss ar">الأعضاء</a>

                        <a href="supporters.html" class="asss en">our supporters</a>
                        <a href="supporters.html" class="asss fr">nos supporters</a>
                        <a href="supporters.html" class="asss ar">داعمينا,</a>
                    </div>
                </div>
                <a href="join_form.html" class="navbar_left_text en">Join us</a>
                <a href="join_form.html" class="navbar_left_text fr">Rejoignez-nous</a>
                <a href="join_form.html" class="navbar_left_text ar">انضم إلينا</a>

                <a href="http://cstic.dz/events.php" class="navbar_left_text en">events</a>
                <a href="http://cstic.dz/events.php" class="navbar_left_text fr">événements</a>
                <a href="http://cstic.dz/events.php" class="navbar_left_text ar">الأحداث</a>
            </div>
        </div>
    </head>
    <body>
        <div class="principal">
            <div id="line1">
                <p><b>Club</b></p><p><b>Scientifique</b></p>
            </div>
            <div id="line2">
                <p><b>Technologies De L'</b></p><p><b>information et De La</b></p><p><b>communication</b></p>
            </div>
            <p id="location" class="ar">طلاب المركز الجامعي إليزي</p>
            <p id="location" class="en">students of Centre Universitaire Illizi</p>
            <p id="location" class="fr">étudiants du Centre Universitaire Illizi</p>
            <div id="socials">
                <a href="https://facebook.com/cstic"><img class="social" src="media/facebook2.png"></a>
                <a href="https://discord.gg/"><img class="social" src="media/discord.png"></a>
                <a href="https://youtube.com/"><img class="social" src="media/yt.png"></a>
                <a href="https://github.com/cstic"><img class="social" src="media/github.png"></a>
            </div>
        </div>
        <div class="infos">
            <div class="Events">
                <h3 class="en">Events</h3>
                <h3 class="fr">événements</h3>
                <h3 class="ar needstoberightaligned">الأحداث</h3>

                <p class="en">See past events <a href="http://cstic.dz/events.php">here</a></p>
                <p class="fr">Voir les événements passés <a href="http://cstic.dz/events.php">ici</a></p>
                <p class="ar needstoberightaligned">الأحداث الماضية<a href="http://cstic.dz/events.php">هنا</a></p>
                <!--events-->
                <?php

                require_once ('connection.php');
                
                //get event
                $sql = "SELECT * FROM  events  ORDER BY date, time desc LIMIT 1";
                $result = $connect->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo '<h5 id="eventtime"> '. $row["date"].' | '. $row["time"].' </h5>';
                        echo '<p id="eventtitle">'. $row["title"].'</p>';
                        echo '<p id="eventbody">'. $row["bodytext"].'</p>';
                        }
                        } else {
                        echo '<script>console.log("no events");</script>';
                        echo '<p>no events  👀</p>';
                        }
                ?>
            </div>

            <div class="news">
                <h3 class="en">News</h3>
                <h3 class="fr">Information</h3>
                <h3 class="ar needstoberightaligned">الأخبار</h3>

                <p class="en">See past news <a href="http://cstic.dz/news.php">here</a></p>
                <p class="fr">les nouvelles passées <a href="http://cstic.dz/news.php">ici</a></p>
                <p class="ar needstoberightaligned">الأخبار السابقة,<a href="http://cstic.dz/news.php">هنا</a></p>
                <!--news-->
                <?php
                //get news
                $sql = " SELECT * FROM  news  ORDER BY date desc LIMIT 1";
                $result = $connect->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo '<h5 id="newstime"> '. $row["date"].'</h5>';
                        echo '<p id="newstitle">'. $row["title"].'</p>';
                        echo '<p id="newsbody">'. $row["bodytext"].'</p>';
                        }
                        } else {
                        echo '<script>console.log("no news");</script>';
                        echo '<p>no news  👀</p>';
                        }
                ?>

            </div>

            <div class="goals">
                <h3 class="en">our goals</h3>
                <h3 class="fr">nos buts</h3>
                <h3 class="ar needstoberightaligned">أهدافنا</h3>
                <!--change this later-->
                <p>ikjd sesiug hriuhgvui eds ef e ef wewett rgtree rtg rewg re yu jyujm jmyiumnyu jmmyutjmuytmjuy yujm uy myum jytn jhgkg yti nmg nv hgmv hgv nghv gyim vngih vnmg iyvig vhgjv </p>
            </div>

            <div id="connect">
                <h3 class="ar needstoberightaligned">!اتصل بنا</h3>
                <h3 class="en">Connect with us!</h3>
                <h3 class="fr">Connecte-toi avec nous!</h3>

                <p class="en">Drop by any of our social media outlets to learn more about us,<br> keep up-to-date with our upcoming events, or to chat with our members!</p>
                <p class="ar needstoberightaligned">تفضل بزيارة أي من وسائل التواصل الاجتماعي الخاصة بنا لمعرفة المزيد عنا ،<br> ابق على اطلاع بأحداثنا القادمة ، أو للدردشة مع أعضائنا!</p>
                <p class="fr">Passez par l'un de nos médias sociaux pour en savoir plus sur nous,<br> tenez-vous au courant de nos événements à venir ou discutez avec nos membres!</p>
                <div id="socials2">
                    <a href="https://facebook.com/cstic"><img class="social" src="media/facebook2.png"></a>
                    <a href="https://discord.gg/"><img class="social" src="media/discord.png"></a>
                    <a href="https://youtube.com/"><img class="social" src="media/yt.png"></a>
                    <a href="https://github.com/cstic"><img class="social" src="media/github.png"></a>
                </div>
                <p class="en">Send feedback through our <a href="feedback.html">Feedback Form</a></p>
                <p class="ar needstoberightaligned">تفضل بزيارة أي من وسائل التواصل الاجتماعي الخاصة بنا لمعرفة المزيد عنا ، <a href="feedback.html">نموذج الملاحظات</a></p>
                <p class="fr">Envoyez vos commentaires via notre<a href="feedback.html">Formulaire de commentaires</a></p>
            </div>
        </div>
        <form  method="get" src="get_last_event.php">
        </form>

        <footer>
            <p class="foot en">Have questions? Email us at <a class="foot" href="mailto:cstic@cuillizi.d">cstic@cuillizi.dz</a></p>
            <p class="foot fr">Avoir des questions? Envoyez-nous un courriel à<a class="foot" href="mailto:cstic@cuillizi.d">cstic@cuillizi.dz</a></p>
            <p class="foot ar"><a class="foot" href="mailto:cstic@cuillizi.d">cstic@cuillizi.dz</a>هل لديك أسئلة؟ راسلنا على</p>
        </footer>
    </body>
    <script>
        $(document).ready(function() { 
            // if there is no languages saved in localstorage => do browser preference
            // else use the language saved
            if(localStorage.getItem("language") == null){
                lang = navigator.language || navigator.userLanguage;
                console.log(lang);

                if(lang.includes("ar")){
                    change_lang("ar")
                }
                if(lang.includes("en")){
                    change_lang("en")
                }
                if(lang.includes("fr")){
                    change_lang("fr")
                }
            }
            else {
                change_lang(localStorage.getItem("language"))
            }
        });

                
        function change_lang(lang){
            if(lang == "ar"){
                localStorage.setItem("language", "ar");
                $('.en').hide();
                $('.fr').hide();
                $('.ar').show();
                $('.needstoberightaligned').css('text-align','right');
            }
            if(lang == "en"){
                localStorage.setItem("language", "en");
                $('.en').show();
                $('.fr').hide();
                $('.ar').hide();
            }
            if(lang == "fr"){
                localStorage.setItem("language", "fr");
                $('.en').hide();
                $('.fr').show();
                $('.ar').hide();
            }
            let x = localStorage.getItem("language");
        }
    </script>
</html>
<!--needstoberightaligned => ar words-->