<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./files/nepali.datepicker.v3.5.min.css">
    <link rel="stylesheet" href="./files/style.css">
    <title>S.S.B Store - <?php echo $title ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow p-3 mb-3">
  <div class="container-fluid">
  <a class="navbar-brand" href="./index.php">
    <img src="./images/jjb-store-logo.png" width="200" height="45" class="d-inline-block align-top" alt="">
  </a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add-bills.php">Add Bills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view-bills.php">Recently Added</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recent-bills.php">Bills By Month</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>