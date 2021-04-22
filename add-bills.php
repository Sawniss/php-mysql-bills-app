<?php
$title = 'Add Bills'; 
include_once('./includes/header.php');
include_once('./includes/connection.php');

$date = '';
$company = '';
$amount = '';
$products = '';

# Null variable for warning or success message

$date_result = '';
$regx_products_result = '';
$products_result = '';
$company_result = '';
$amount_result = '';
$inserted_result = '';

if(isset($_POST['submit'])) {

        if(empty($_POST['date'])) {
            $date_result =  '<div class="bg-danger mb-5">Date field is required! <br></div>';
        } else {
                $date = $_POST['date'];
        }

        if(empty($_POST['products'])) {
            $products_result = '<div class="bg-danger mb-5">Products field is required! <br></div>';
        } else {
            $products = $_POST['products'];
            echo $products;
        }

        if(empty($_POST['company'])) {
            $company_result =  '<div class="bg-danger mb-5">Company field is required! <br></div>';
        } else {
                $company = $_POST['company'];
        }

        if(empty($_POST['amount'])) {
            $amount_result = '<div class="bg-danger mb-5">Amount field is required! <br></div>';
        } else {
                $amount = $_POST['amount'];
        }

        if(!empty($date) && !empty($company) && !empty($products) && !empty($amount)) {
            $sql = "INSERT INTO `bills` (`sn`, `date`, `products`, `company`, `amount`)
            VALUES ('', '$date', '$products', '$company', '$amount');";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                    $inserted_result = '<div class="alert alert-success" role="alert">Record Added Sucessfully!</div>';
            } else {
                    die($inserted_result = '<div class="alert alert-danger" role="alert">Record Added Sucessfully!</div>');
            }
        }
}

mysqli_close($conn);

?>
<?php $title = "Add Bills"; ?>
<div class="container">
    <div class="card text-white mb-2" style="background-color: #4f96ff !important; height: 90vh;">
        <div class="card-header"><h2>Add Bills</h2></div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <form class="bg-light p-4 text-dark mb-10" action="" method="post">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" id="nepali-datepicker"  required class="form-control mb-3" name="date" placeholder="Select Nepali Date"/>
                            </div>

                            <div class="form-group">
                                <label for="amount">Company Name</label>
                                <input type="text" class="form-control mb-3" required id="amount" name="company" placeholder="Enter Company...">
                            </div>

                            <div class="form-group">
                                <label for="products">Products</label>
                                <input type="text" required class="form-control mb-3" name="products" placeholder="Enter products sep by comma.."/>
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="float" class="form-control mb-3" required id="amount" name="amount" placeholder="Enter Amount...">
                            </div>
                            <div class="mx-auto">
                                <button type="submit" name="submit" class="btn btn-primary mb-10 mx-auto">Add To Database</button>
                            </div>
                    </form>
                    </div>
                    <div class="col-sm bg-light text-dark">
                        <?php

                        echo $date_result;
                        echo $regx_products_result;
                        echo $products_result;
                        echo $company_result;
                        echo $amount_result;
                        echo $inserted_result;

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('./includes/footer.php'); ?>
