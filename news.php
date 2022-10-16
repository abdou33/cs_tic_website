<!DOCTYPE html>
<style>
    @font-face {
            font-family: 'cairo';
            src: url(fonts/Cairo/Cairo-VariableFont_wght.ttf);
    }
    @font-face {
            font-family: 'passion_one';
            src: url(fonts/Passion_One/PassionOne-Bold.ttf);
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
    div{
        text-align: center;
    }
    #location_eng{
        color: #1d7da0;
        font-size: 2vw;
    }
    footer .foot {
        width: 97vw;
        background-color: #1d7da0;
        color: white;
        text-decoration: none;
        font-size: 1.5vw;
        padding: 1vw;
    }
    footer{
        bottom:0px;
        margin:0;
        padding:0;
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
    /*delete this later*/
    .en{
        display: inline-block;
    }
    .news{
        width: 50%;
        padding: 0;
        margin: 0 25% 0 25%;;
        display: block;
        white-space: initial;
    }
    .news, .past_events{
        text-align: left;
        margin-bottom: 2%;
    }
    .news h3, .past_events h3{
        color: #1b607a;
        font-size: 3vw;
        font-family: 'passion_one';
    }
    #newstime{
        color: black;
        font-size: 1.4vw;
        margin-top: 2%;
        text-align: left;
    }
    #newstitle{
        color: #1b607a;
        font-size: 1.6vw;
        margin-top: 1%;
        text-align: left;
    }
    #newsbody {
    	color: black;
        font-size: 1.2vw;
    }
</style>
<html>
    <link rel="icon" href="media/logo.png">
    <title>cs_Tic</title>
    <head>
        <script src="js/jquery.min.js"></script>
        <div class="navbar">
            <a href="index.php"><img class="logo" src="media/logo.png" ></a>
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
                <a href="index.html" class="navbar_left_text en" >Home</a>
                <a href="index.html" class="navbar_left_text fr" >Accueil</a>
                <a href="index.html" class="navbar_left_text ar" >الرئيسية</a>
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
        <div class="news">
                <!--tests-->
                <h3 class="en">news</h3>
                <h3 class="fr">information</h3>
                <h3 class="ar needstoberightaligned">الأخبار</h3>
                <hr>

                <?php
                require_once ('connection.php');

                //get news
                $sql = "SELECT * FROM news ORDER BY date desc";
                $result = $connect->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_array($result)) {

                        echo '<h5 id="newstime"> '. date('F j, Y',strtotime($row['date'])).'</h5>';
                        echo '<p id="newstitle">'. $row["title"].'</p>';
                        echo '<p id="newsbody">'. $row["bodytext"].'</p>';
                    }
                } 
                else {
                        echo '<script>console.log("no events");</script>';
                        echo '<p>no news  👀</p>';
                }
                ?>
        </div>
    </body>
    <footer>
        <p class="foot en">Have questions? Email us at <a class="foot" href="mailto:cstic@cuillizi.dz">cstic@cuillizi.dz</a></p>
        <p class="foot fr">Avoir des questions? Envoyez-nous un courriel à<a class="foot" href="mailto:cstic@cuillizi.dz">cstic@cuillizi.dz</a></p>
        <p class="foot ar"><a class="foot" href="mailto:cstic@cuillizi.dz">cstic@cuillizi.dz</a>هل لديك أسئلة؟ راسلنا على</p>
    </footer>
    <script>

$(document).ready(function() { 
            // if there is no languages saved in localstorage => use browser preference
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