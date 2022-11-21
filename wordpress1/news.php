<?php get_header(); ?>
<body>
<div class="news">
        <!--tests-->
        <h3 class="en">news</h3>
        <h3 class="fr">information</h3>
        <h3 class="ar needstoberightaligned">الأخبار</h3>
        <hr>

        <?php
        require_once ('assets/php_scripts/connection.php');

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
<?php get_footer(); ?>