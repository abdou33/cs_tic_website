<?php get_header(); ?>
<div class="events">
            <div class="upcoming_events">
                <!--tests-->
                <h3 class="en">upcoming events</h3>
                <h3 class="fr">évènements à venir</h3>
                <h3 class="ar needstoberightaligned">الأحداث القادمة</h3>
                <hr>
                <div class="coming">

                <?php
                require_once ('connection.php');

                //get news
                $sql = "SELECT * FROM  events WHERE date > CURDATE() ORDER BY date, time";
                $result = $connect->query($sql);
                $cpt = 0;
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_array($result)) {
                        if ($cpt % 2 == 1){
                            echo '<div class="newss2">';
                        }
                        else {
                            echo '<div class="newss">';
                        }
                        
                        echo '<h5 id="eventtime"> '. date('F j, Y',strtotime($row['date'])).' | '. date("g:i A", strtotime($row["time"])).' </h5>';
                        echo '<p id="eventtitle">'. $row["title"].'</p>';
                        echo '<p id="eventbody">'. $row["bodytext"].'</p>';
                        echo '</div>';
                        $cpt +=1;
                    }
                    $cpt =0;
                } 
                else {
                        echo '<script>console.log("no events");</script>';
                        echo '<p>no events  👀</p>';
                }
                ?>
                </div>
            </div>
            <div class="past_events">
                 <!--tests-->
                 <h3 class="en">past events</h3>
                 <h3 class="fr">événements passés</h3>
                 <h3 class="ar needstoberightaligned">الأحداث الماضية</h3>
                 <hr>
                 <div class="past">
                 <?php

                //get news
                $sql = "SELECT * FROM  events WHERE date < CURDATE() ORDER BY date, time desc";
                $result = $connect->query($sql);
                $cpt =0;
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_array($result)) {
                        if ($cpt % 2 == 1){
                            echo '<div class="newss2">';
                        }
                        else {
                            echo '<div class="newss">';
                        }
                        echo '<h5 id="eventtime"> '. date('F j, Y',strtotime($row['date'])).' | '. date("g:i A", strtotime($row["time"])).' </h5>';
                        echo '<p id="eventtitle">'. $row["title"].'</p>';
                        echo '<p id="eventbody">'. $row["bodytext"].'</p>';
                        echo '</div>';
                        $cpt +=1;
                    }
                    $cpt =0;
                } 
                else {
                        echo '<script>console.log("no events");</script>';
                        echo '<p>no events  👀</p>';
                }
                ?>
                 </div>
            </div>
        </div>
        <?php get_footer(); ?>