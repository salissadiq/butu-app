<?php
require_once 'functions.php';
if(!loggedIn()) {
  header('location: ./');
}
$pack = $_GET['pack'];
$branch = $_GET['branch'];
if($pack == 'Male' or $pack == 'Female') {
  $clients = $db->query("SELECT * FROM clients WHERE gender ='$pack' AND branch ='$branch' ");
} else {
  $clients = $db->query("SELECT * FROM clients WHERE serviceT ='$pack' AND branch = '$branch'");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Butu Travels & Tours LTD</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="logo.png" rel="icon" type="image/jpg" />
  </head>

  <body>
    <?php require_once 'navbar.php' ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><?php echo $pack .' ' . $branch .' Clients'; ?> Result <i class="fa fa-search"></i></h1>
          </div>
          <div class="col-md-12">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>PASSPORT NUMBER</th>
                  <th>NAME</th>
                  <th>GENDER</th>
                  <th>PHONE</th>
                  <th>PACKAGE TYPE</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                while ($client = $clients->fetch_object()) {
                  echo "
                  <tr>
                  <td>".$client->passport."</td>
                  <td>".strtoupper($client->surname) ." " .strtoupper( $client->gnames) ."</td>
                  <td>".strtoupper($client->gender)."</td>
                  <td>".$client->phone."</td>
                  <td>".strtoupper($client->serviceT)."</td>
                  <td><a href='cProfile?client=".$client->id."' class='btn btn-outline-danger rounded-0'>Profile</a> | <a href='cpay?client=".$client->id."' class='btn btn-outline-danger rounded-0'> Payment</a></i></td>
                  </tr>
                  ";
                }
                ?>
                
              </tbody>
            </table>

    </div>
        </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
