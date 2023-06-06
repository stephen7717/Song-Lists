<?php
    include_once('connection/connection.php');

    $conn = connection();

    $sql = 'SELECT * FROM song_list ORDER BY id DESC';
    $songs = $conn->query($sql) or die ($conn->connect_error);
    $row = $songs->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Lists</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<h1>Song Lists</h1>
<table>
        <thead>
            
            <tr>
                <th>Artist</th>
                <th>Song Title</th>
                <th>Date Created</th>
                
            </tr>
        </thead>
        <tbody>
            <?php do {; ?>
                <tr>
                    
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['artist'] ?></td>
                    <td><?php echo $row['date_created'] ?></td>
                    <td><a class="Update" href="edit.php?id=<?php echo $row['id'];?> "> <button class="btn btn-success" type="button">Update</button></a></td>
                    <td><a class="Delete" href="delete.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger" type="button">Delete</button></td>
                    </form>
                </tr>
            <?php } while ($row = $songs->fetch_assoc()) ?>
        </tbody>
    </table>
    <br>
    <a class="primary" href="add.php"><button class="btn btn-primary" type="button">Add New</button></a>
</body>
</html>

