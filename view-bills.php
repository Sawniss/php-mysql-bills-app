
<?php $title = 'Recently Added'; 

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


<h2 class="bg-info p-2 text-white">Recently Added Bills of <?php echo $year ?></h2>

<?php
$sql = "SELECT * FROM bills ORDER BY sn DESC";

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
            </tr>
        </thead>
        <tbody>
        <?php
            $i = 1;
            while($row = mysqli_fetch_assoc($result)) {?>
            <tr>
                <th scope="row"><?php echo $i;?></th>
                <td><?php echo $row['date']; ?></td>

                <?php

                // $nepali_date = new nepali_date();

                // $day = date('d', strtotime($row['date']));
                // $month = date('m', strtotime($row['date']));
                // $year = date('Y', strtotime($row['date']));                
                // $date_ne = $nepali_date->get_nepali_date($year, $month, $day);
                // echo ($date_ne['y'] . "-" . $date_ne['m'] . "-" . $date_ne['d']);

                // $day = date('d', strtotime($row['date']));
                // echo $day . "<br>";
                // $month = date('m', strtotime($row['date']));
                // echo $month . "<br>";
                // $year = date('Y', strtotime($row['date']));
                // echo $year . "<br>";</td> ?>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['products']; ?></td>
                <td><?php echo $row['amount']; ?></td>
            </tr>
        
            <?php $i++; } ?>
        </tbody>
    </table>
    </div>
    <?php
    } else {
        echo "<h2>No Record Found</h2>"; }?>

<?php include_once('./includes/footer.php'); ?>