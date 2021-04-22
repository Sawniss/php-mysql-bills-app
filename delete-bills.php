<?php 
include ("./includes/header.php");
include("./includes/connection.php");


$id = $_GET['id'];

if(isset($_POST['delete'])) {
    $sql = "DELETE FROM bills where sn = '$id'";
    if(mysqli_query($conn, $sql)) {
        header("Location: ./recent-bills.php");
    } else {
        echo "Error while deleting!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <p>Are you sure you want to remove the record?<p>
    <form action="" method="POST">
        <button type="submit" class="btn btn-danger" name="delete">Yes</button>
        <a href="./recent-bills.php"><button class="btn btn-danger">No</button></a>
    </form>
</div>
</body>
</html>



