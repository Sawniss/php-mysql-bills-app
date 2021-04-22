<?php

include_once('./connection.php');

$sql = "SELECT date FROM statement";

$result = mysqli_query($conn, $sql) or die("Query Uncessful");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['date'];
}

$monthNum = 1;
$month = '';
$months = ["Baisakh", "Jestha", "Asad", "Shrawan", "Bhadra", "Ashoj", "Kathik", "Mangsir", "Poush", "Magh", "Falgun", "Chitra"];


for ($i = 0; $i < 12; $i++) {
    $month = $months[$monthNum];
}

echo "<br> 2 means" . " " . $month;

?>