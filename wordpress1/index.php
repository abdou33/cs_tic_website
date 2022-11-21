<?php get_header(); ?>
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
                <a href="https://facebook.com/cstic"><img class="social" src="<?php echo get_template_directory_uri().'/assets/media/facebook2.png'; ?>"></a>
                <a href="https://discord.gg/"><img class="social" src="<?php echo get_template_directory_uri().'/assets/media/discord.png'; ?>"></a>
                <a href="https://youtube.com/"><img class="social" src="<?php echo get_template_directory_uri().'/assets/media/yt.png'; ?>"></a>
                <a href="https://github.com/cstic"><img class="social" src="<?php echo get_template_directory_uri().'/assets/media/github.png'; ?>"></a>
            </div>
        </div>
        <div class="infos">
            <div class="Events">
                <h3 class="en">Events</h3>
                <h3 class="fr">événements</h3>
                <h3 class="ar needstoberightaligned">الأحداث</h3>

                <p class="en">See past events <a href="events.php">here</a></p>
                <p class="fr">Voir les événements passés <a href="events.php">ici</a></p>
                <p class="ar needstoberightaligned">الأحداث الماضية<a href="events.php">هنا</a></p>
                <!--events-->
                <?php

                require_once ('assets/php_scripts/connection.php');
                
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

                <p class="en">See past news <a href="news.php">here</a></p>
                <p class="fr">les nouvelles passées <a href="news.php">ici</a></p>
                <p class="ar needstoberightaligned">الأخبار السابقة,<a href="news.php">هنا</a></p>
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
                    <a href="https://facebook.com/cstic"><img class="social" src="<?php echo get_template_directory_uri().'/assets/media/facebook2.png'; ?>"></a>
                    <a href="https://discord.gg/"><img class="social" src="<?php echo get_template_directory_uri().'/assets/media/discord.png'; ?>"></a>
                    <a href="https://youtube.com/"><img class="social" src="<?php echo get_template_directory_uri().'/assets/media/yt.png'; ?>"></a>
                    <a href="https://github.com/cstic"><img class="social" src="<?php echo get_template_directory_uri().'/assets/media/github.png'; ?>"></a>
                </div>
                <p class="en">Send feedback through our <a href="feedback.html">Feedback Form</a></p>
                <p class="ar needstoberightaligned">تفضل بزيارة أي من وسائل التواصل الاجتماعي الخاصة بنا لمعرفة المزيد عنا ، <a href="feedback.html">نموذج الملاحظات</a></p>
                <p class="fr">Envoyez vos commentaires via notre<a href="feedback.html">Formulaire de commentaires</a></p>
            </div>
        </div>
        <form  method="get" src="get_last_event.php">
        </form>
</body>
<?php get_footer(); ?>