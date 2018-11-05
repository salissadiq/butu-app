<?php
require_once 'functions.php';
if(!loggedIn()) {
  header('location: ./');
}
if(isset($_GET['client'])) {
  $id = $_GET['client'];
  $records = $db->query("SELECT * FROM paymentsrecord WHERE client_id =$id ");
  $client = $db->query("SELECT * FROM clients WHERE id =$id ");
  $client = $client->fetch_object();  

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
            <h1 class="h2">Client Payment Deatails <i class="fa fa-bar-chart-"></i></h1>
          </div>
          <div class="row">
          <div class="col-md-6">
          <div class="card rounded-0">
            <div class="card-header bg-danger"><h4 style="color: white;">Payment History</h4></div>
            <div class="card-body mb-4">
              <ul class="list-group mb-3">
               <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Name: <strong><?php  echo strtoupper($client->surname) . ' ' . strtoupper($client->gnames) ?></strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Passport No: <strong><?php echo strtoupper($client->passport) ?> </strong>
              </li>
                <?php
              while($record = $records->fetch_object()) {
                echo "<li class='list-group-item  justify-content-between lh-condensed bg-light'>
                            Paid: ".$record->amount." <br>
                            Date: ".$record->dop."<br>
                            By: ".$record->payt."<br>
                            Bank: ".$record->bank."
                          </li>"
                          ;
              }
              ?>
              </ul>
            </div>
         
          </div>
          </div>
          </div>
        </main>
      </div>
    </div>

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
