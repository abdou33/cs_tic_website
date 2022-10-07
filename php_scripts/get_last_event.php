
<?php

// php populate html table from mysql database

$servername = "localhost";
$username = "root";
$password = "stores33";

// Create connection
$connect = new mysqli($servername, $username, $password);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully\n";

$db = "USE cs_club";
if ($connect->query($db) === TRUE) {
  echo "Database selected successfully\n";
} else {
  echo "Error selecting database: \n" . $conn->error;
}


$sql = "SELECT * FROM  events  ORDER BY date, time desc LIMIT 1";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "date: " . $row["date"]. " - title: " . $row["title"]. "bodytext " . $row["bodytext"]. "\n";
    }
  } else {
    echo "0 results";
  }
  return $result;
?>