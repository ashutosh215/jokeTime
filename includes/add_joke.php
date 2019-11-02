<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>
<?php

include "db_connect.php";
$ques = $_GET["jokeQues"];
$ans = $_GET["jokeAns"];

$ques = addslashes($ques);
$ans = addslashes($ans);
$sql = "INSERT INTO jokes_table ( jokeQues, jokeAns)
VALUES ('$ques', '$ans')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<br><br><br><br>
<a href="../index.php" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back?</a>
