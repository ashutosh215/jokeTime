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