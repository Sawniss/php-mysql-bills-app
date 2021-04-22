<?php 
include("./includes/header.php");
include("./includes/connection.php");

$user_id = $_GET['id'];

if(isset($_POST['submit'])) {
    $date = $_POST['date'];
    $company = $_POST['company'];
    $amount = $_POST['amount'];
    $products = $_POST['products'];

    $sql = "UPDATE bills SET date = '$date', company = '$company', products = '$products', amount = '$amount'
    WHERE sn = '$user_id'";

    if(mysqli_query($conn, $sql)) {
        header("Location: ./recent-bills.php");
    } else {
        echo "Bills Update Failed";
    }

}

$sql = "SELECT * FROM bills WHERE sn='$user_id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
   
?>               
    <form class="bg-light p-4 text-dark mb-10" action="" method="post">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" id="nepali-datepicker" value="<?php echo $row['date']?>"  required class="form-control mb-3" name="date" placeholder="Select Nepali Date"/>
            </div>

            <div class="form-group">
                <label for="amount">Company Name</label>
                <input type="text" class="form-control mb-3" value="<?php echo $row['company']?>" required id="amount" name="company" placeholder="Enter Company...">
            </div> 

            <div class="form-group">
                <label for="products">Products</label>
                <input type="text" required class="form-control mb-3" value="<?php echo $row['products']?>" name="products" placeholder="Enter products sep by comma.."/>
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="float" class="form-control mb-3" value="<?php echo $row['amount']?>" required id="amount" name="amount" placeholder="Enter Amount...">
            </div>
            <div class="mx-auto">
                <button type="submit" name="submit" class="btn btn-primary mb-10 mx-auto">Update</button>
            </div>
    </form>

    <?php }}?>