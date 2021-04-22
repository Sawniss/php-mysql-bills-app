<?php 

$title = 'Home'; 
include_once('./includes/header.php'); 
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
<div class="container">
    <h2 class="bg-info p-2 text-white">Products By Month - <?php echo $year ?></h2>
    <form action="./index.php" method="post">
        <div class="mx-auto">
            <input type="text" name="year" class="mb-3" style="width: 18rem;" placeholder="Enter Year...">
            <button type="submit" name="submit" class="btn btn-primary mb-10 mx-auto">Submit</button>
        </div>
    </form>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
            <th scope="col">S.N</th>
            <th scope="col">Months</th>
            <th scope="col">Bills</th>
            <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Baisakh</td>
            <td></td>
            <td>
                <form action="./bills-by-month.php" method="post">
                    <div class="mx-auto">
                        <button type="submit" name="date" value="<?php echo $year?>-01-" class="btn btn-primary mb-10 mx-auto">View</button>
                    </div>
                </form>
            </td>
            </tr>

            <tr>
            <th scope="row">2</th>
            <td>Jestha</td>
            <td></td>
            <td>
                <form action="./bills-by-month.php" method="post">
                    <div class="mx-auto">
                        <button type="submit" name="date" value="<?php echo $year?>-02-" class="btn btn-primary mb-10 mx-auto">View</button>
                    </div>
                </form>
            </td>
            </tr>

            <tr>
            <th scope="row">3</th>
            <td>Asar</td>
            <td></td>
            <td>
                <form action="./bills-by-month.php" method="post">
                    <div class="mx-auto">
                        <button type="submit" name="date" value="<?php echo $year?>-03-" class="btn btn-primary mb-10 mx-auto">View</button>
                    </div>
                </form>
            </td>
            </tr>

            <tr>
            <th scope="row">4</th>
            <td>Shrawn</td>
            <td></td>
            <td>
                 <form action="./bills-by-month.php" method="post">
                    <div class="mx-auto">
                        <button type="submit" name="date" value="<?php echo $year?>-04-" class="btn btn-primary mb-10 mx-auto">View</button>
                    </div>
                </form>
            </td>
            </tr>

            <tr>
            <th scope="row">5</th>
            <td>Bhadra</td>
            <td></td>
            <td>
                <form action="./bills-by-month.php" method="post">
                    <div class="mx-auto">
                        <button type="submit" name="date" value="<?php echo $year?>-05-" class="btn btn-primary mb-10 mx-auto">View</button>
                    </div>
                </form>
            </td>
            </tr>

            <tr>
            <th scope="row">6</th>
            <td>Asoj</td>
            <td></td>
            <td>
            <form action="./bills-by-month.php" method="post">
                <div class="mx-auto">
                    <button type="submit" name="date" value="<?php echo $year?>-06-" class="btn btn-primary mb-10 mx-auto">View</button>
                </div>
            </form>
            </td>
            </tr>

            <tr>
            <th scope="row">7</th>
            <td>Karthik</td>
            <td></td>
            <td>
            <form action="./bills-by-month.php" method="post">
                <div class="mx-auto">
                    <button type="submit" name="date" value="<?php echo $year?>-07-" class="btn btn-primary mb-10 mx-auto">View</button>
                </div>
            </form>
            </td>
            </tr>

            <tr>
            <th scope="row">8</th>
            <td>Mangsir</td>
            <td></td>
            <td>
            <form action="./bills-by-month.php" method="post">
                <div class="mx-auto">
                    <button type="submit" name="date" value="<?php echo $year?>-08-" class="btn btn-primary mb-10 mx-auto">View</button>
                </div>
            </form>
            </td>
            </tr>

            <tr>
            <th scope="row">9</th>
            <td>Poush</td>
            <td></td>
            <td>
            <form action="./bills-by-month.php" method="post">
                <div class="mx-auto">
                    <button type="submit" name="date" value="<?php echo $year?>-09-" class="btn btn-primary mb-10 mx-auto">View</button>
                </div>
            </form>
            </td>
            </tr>

            <tr>
            <th scope="row">10</th>
            <td>Magh</td>
            <td></td>
            <td>
            <form action="./bills-by-month.php" method="post">
                <div class="mx-auto">
                    <button type="submit" name="date" value="<?php echo $year?>-10-" class="btn btn-primary mb-10 mx-auto">View</button>
                </div>
            </form>
            </td>
            </tr>

            <tr>
            <th scope="row">11</th>
            <td>Falgun</td>
            <td></td>
            <td>
            <form action="./bills-by-month.php" method="post">
                <div class="mx-auto">
                    <button type="submit" name="date" value="<?php echo $year?>-11-" class="btn btn-primary mb-10 mx-auto">View</button>
                </div>
            </form>
            </td>
            </tr>

            <tr>
            <th scope="row">12</th>
            <td>Chaitra</td>
            <td></td>
            <td>
                <form action="./bills-by-month.php" method="post">
                    <div class="mx-auto">
                        <button type="submit" name="date" value="<?php echo $year?>-12-" class="btn btn-primary mb-10 mx-auto">View</button>
                    </div>
                </form>
            </td>
            </tr>

        </tbody>
    </table>
</div>
<?php include_once('./includes/footer.php'); ?>
