
<?php $title = 'Recently Bills By Month'; 

include_once('./includes/header.php'); ?>
<?php include_once('./includes/connection.php');

include('./includes/nepali-date.php');


$nepali_date = new nepali_date();
$year_en = date("Y",time());
$month_en = date("m",time());
$day_en = date("d",time());

$date_ne = $nepali_date->get_nepali_date($year_en, $month_en, $day_en);

$current_nepali_year = $date_ne['y'];
$current_nepali_month = $date_ne['m'];
$current_nepali_day = $date_ne['d'];


$year = '';

if(isset($_POST['year'])) {
    $year = $_POST['year'];
} else {
    $year = $current_nepali_year;
}

?>

<h2 class="bg-info p-2 text-white">Bills Sorted by Month - <?php echo $year ?></h2>

<?php
$sql = "SELECT * FROM bills ORDER BY date DESC";

$result = mysqli_query($conn, $sql) or die("Query Uncessful");

if(mysqli_num_rows($result) > 0 ) {
?>
<div class="container" style="min-height: 70vh;">
<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td scope="col">S.N</th>
                <th scope="col">Date</th>
                <th scope="col">Company Name</th>
                <th scope="col">Products</th>
                <th scope="col">Amount</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i = 1;
            while($row = mysqli_fetch_assoc($result)) {?>
            <tr>
                <th scope="row"><?php echo $i;?></th>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['products']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><a href="update-bills.php?id=<?php echo $row['sn'] ?>"><button type="button" class="btn btn-success mb-1">Edit</button></a>
                <a href="delete-bills.php?id=<?php echo $row['sn'] ?>"><button type="button" class="btn btn-danger">Delete</button></td></a>
            </tr>
        
            <?php $i++; } ?>
        </tbody>
    </table>
    </div>
    <?php
    } else {
        echo "<h2>No Record Found</h2>"; }?>

<?php include_once('./includes/footer.php'); ?>