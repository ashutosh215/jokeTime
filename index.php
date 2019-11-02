<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOKES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>
<body>

<?php

include "includes/db_connect.php";

?>

<form class="form-horizontal" action="includes/search_keyword.php">
<fieldset>

<!-- Form Name -->
<legend>Search for a keyword</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search keyword</label>
  <div class="col-md-5">
    <input id="keyword" name="keyword" type="search" placeholder="e.g chicken" class="form-control input-md" required="">
    <p class="help-block">search for a keyword in joke</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">submit</button>
  </div>
</div>

</fieldset>
</form>


<form class="form-horizontal" action="includes/add_joke.php">
<fieldset>

<!-- Form Name -->
<legend>Add a Joke</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jokeQues">Joke Question</label>
  <div class="col-md-5">
    <input id="jokeQues" name="jokeQues" type="text" placeholder="" class="form-control input-md" required="">
    <p class="help-block">Add the first part of the joke</p>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jokeAns">Joke Answer</label>
  <div class="col-md-5">
    <input id="jokeAns" name="jokeAns" type="text" placeholder="" class="form-control input-md" required="">
    <p class="help-block">Enter the punchline</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Create</button>
  </div>
</div>

</fieldset>
</form>

<form class="form-horizontal" action="includes/search_display.php">
<fieldset>

<!-- Form Name -->
<legend>Want to see all jokes?</legend>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Show all jokes</button>
  </div>
</div>

<?php

$conn->close();
?> 


</body>
</html>