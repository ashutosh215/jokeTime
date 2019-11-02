<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>

<?php
include 'db_connect.php';
$sql = "SELECT jokeId, jokeQues, jokeAns FROM jokes_table";
$result = $conn->query($sql);
?>

<div id="accordion">

<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<h3>';
        echo $row["jokeQues"];
        echo '</h3>';
        echo '<div><p>';
        echo $row["jokeAns"];
        echo '</p></div>';
    }
} else {
    echo "0 results";
}

?>