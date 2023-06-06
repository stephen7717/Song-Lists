<?php

include_once('connection/connection.php');
$conn = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM song_list WHERE id = '$id'";
$songs = $conn->query($sql) or die($conn->error);
$row = $songs->fetch_assoc();


if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $song_lyrics = mysqli_real_escape_string($conn,$_POST['song_lyrics']);
    $date_created = $_POST['date_created'];

    $sql = "UPDATE `song_list` SET title = '$title', artist = '$artist', song_lyrics = '$song_lyrics', date_created = '$date_created' WHERE id = '$id'";

    $conn->query($sql) or die ($conn->error);

    echo header("Location: index.php?id=".$id);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=H1, initial-scale=1.0">
    <title>Song Update</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>


<body>
<div class="mx-auto col-10 col-md-8 col-lg-6">
  <form action="" method="POST">

<div class="form-group row">
  <label for="">Title</label>
    <div class="col-sm-10">
    <input type="text" name="title" id="title" class="form-control" value="<?php echo $row['title'];?>">
    </div>
</div>

<div class="form-group row">    
    <label for="">Artist</label>
    <div class="col-sm-10">
    <input type="text" name="artist" id="artist" class="form-control" value="<?php echo $row['artist'];?>">
    </div>
</div>
<div class="form-group row">
    <label for="">Song Lyrics</label>
    <div class="col-sm-10">
    <input type="text" name="song_lyrics" id="song_lyrics" class="form-control" value="<?php echo $row['song_lyrics'];?>">
    </div>
</div>

<div class="form-group row">
    <label for="">Date Created</label>
    <div class="col-sm-10">
    <input type="date" name="date_created" id="date_created" class="form-control" value="<?php echo $row['date_created'];?>">
    </div>
</div>
<br>
    <input type="submit" value="Update" name="submit" class="btn btn-primary">
    
  </form>
</div>
</body>

</html>