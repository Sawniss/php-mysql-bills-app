<?php
$title = "Bills By Month";
include('./includes/header.php');
include('./includes/connection.php');

?>
<body>
<div style="min-height: 72vh">
<?php
$dateInput = $_POST['date'];

$date_sql = "SELECT * FROM bills
WHERE date LIKE '%$dateInput%' ORDER BY `date` ASC";

$result = mysqli_query($conn, $date_sql) or die("Query Uncessful");

if(Mysqli_num_rows($result) > 0) { ?>
<div class="container">
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Date</th>
      <th scope="col">Company</th>
      <th scope="col">Products</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $amount = 0;
  $i = 1;
  while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row['date']; ; ?></td>
      <td><?php echo $row['company']; ; ?></td>
      <td><?php echo $row['products']; ; ?></td>
      <td><?php echo $rowAmount = $row['amount']; ?></td>
    </tr>
<?php $i++; $amount = $rowAmount + $amount; }?>
  </tbody>
</table>
</div>
 
<?php

echo '<div class="alert alert-success" role="alert">
                 Total : <b>' . $amount . 
        '</b></div>';
} else {
        echo '<img src="./files/not-found-computer.png" class="rounded mx-auto d-block mb-5" height="200">
        <div class="alert alert-danger" role="alert">
                <h4>No Records Found!!</h4>
        </div>';
}
?>
</div>

<?php include('./includes/footer.php'); ?>