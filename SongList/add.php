<?php
include_once('connection/connection.php');

$conn = connection();

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $song_lyrics = mysqli_real_escape_string($conn,$_POST['song_lyrics']);
    $date_created = $_POST['date_created'];

$sql = "INSERT INTO `song_list`(`title`, `artist`, `song_lyrics`, `date_created`) VALUES ('$title','$artist','$song_lyrics','$date_created')";

$conn->query($sql) or die ($conn->error);
echo header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=H1, initial-scale=1.0">
    <title>Song Add</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
<div class="mx-auto col-10 col-md-8 col-lg-6">
  <form action="" method="POST">

<div class="form-group row">
    <label for="">Title</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="title" id="title">
    </div>
</div>

<div class="form-group row">
    <label for="">Artist</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="artist" id="artist">
    </div>
</div>
<div class="form-group row">
    <label for="">Song Lyrics</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="song_lyrics" id="song_lyrics">
    </div>
</div>
<div class="form-group row">
    <label for="">Date Created</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" name="date_created" id="date_created">
    </div>
</div>
<br>
    <input type="submit" value="Submit Form" name="submit" class="btn btn-primary">
    
  </form>
</div>
</body>

</html>