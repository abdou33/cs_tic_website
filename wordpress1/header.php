<!DOCTYPE html>
<head>
    <?php wp_head(); ?>
    <?php wp_footer(); ?>
</head>
<header>
        <script src="js/jquery.min.js"></script>
        <div class="navbar">
                <a href="index.html"><img class="logo" src="<?php echo get_template_directory_uri().'/assets/media/logo.png'; ?>" ></a>
            <div class="left-options">
                <div id="langdiv">
                    <a class="navbar_left_text en" id="lang">language</a>
                    <a class="navbar_left_text fr" id="lang">Langue</a>
                    <a class="navbar_left_text ar" id="lang">اللغة</a>
                    <div class="dropdown-lang">
                        <p href="" onclick="change_lang('ar')"><img src="<?php echo get_template_directory_uri().'/assets/lang/alg.png'; ?>">العربية</p>
                        <p href="" onclick="change_lang('en')"><img src="<?php echo get_template_directory_uri().'/assets/lang/uk.png'; ?>"> english</p>
                        <p href="" onclick="change_lang('fr')"><img src="<?php echo get_template_directory_uri().'/assets/lang/france.png'; ?>"> français</p>
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

                        <a href="wp-content/themes/wordpress1/members.html" class="asss en">members</a>
                        <a href="wp-content/themes/wordpress1/members.html" class="asss fr">members</a>
                        <a href="wp-content/themes/wordpress1/members.html" class="asss ar">الأعضاء</a>

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
    </header>