<?php
require_once 'functions.php';
if(!loggedIn()) {
  header('location: ./');
}
$client = $_GET['client'];
$clientI = $db->query("SELECT * FROM clients WHERE id ='$client' ");
$clientI = $clientI->fetch_object();
$invoice = $db->query("SELECT * FROM invoice WHERE client_id ='$client' ");
$invoice = $invoice->fetch_object();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title><?php echo strtoupper($clientI->surname) . ' ' .strtoupper($clientI->gnames) ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="logo.png" rel="icon" type="image/jpg" />
  </head>

  <body onload="window.print()">
        <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
          <div id="print_div">
          <div class="row ">
            <div class="col-md-12">
              <div class="card rounded-0 mb-3 bg-light">
                <div class="card-body">
                  <img src="logohead.jpg" width="100%" height="200px">
                  <div class="row">
                  <div class="col-md-6">
                  <div class="card rounded-0 ">
                    <div class="card-body">
                      <ul class="list-group">
                        <li class="list-group-item bg-light">
                          Head Office: <b> Suite 405, Kano House Complex, Plot 73 Ralph Sodeinde Street, 
                          Central Business District, [Jaiz Bank Headquarters Building]</b>
                        </li>
                        <li class="list-group-item bg-light">
                          Phone: <b> +234 8035831117, +234 0788887773</b>
                        </li>
                        <li class="list-group-item bg-light">
                          email: <b>bututours@gmail.com, bututours@outlook.com</b>
                        </li>
                        <li class="list-group-item bg-light">
                          Website: <b>www.bututours.com</b>
                        </li>
                      </ul>
                    </div>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="card rounded-0">
                    <div class="card-body">
                      <center><h2 class="h2 text-danger">Pro-Forma client/Qoute</h2></center>
                      <ul class="list-group">
                        <li class="list-group-item bg-light">
                            Date: <b><?php echo $invoice->doi ?></b>
                        </li>
                        <li class="list-group-item bg-light">
                          Invoice Number: <b>#BTTI<?php echo $invoice->id ?> </b>
                        </li>
                        <li class="list-group-item bg-light">
                          Name: <b><?php echo strtoupper($clientI->surname) . '  ' . strtoupper($clientI->gnames)  ?></b>
                        </li>
                        <li class="list-group-item bg-light">
                          Passport Number: <b> <?php echo strtoupper($clientI->passport)  ?></b>
                        </li>
                      </ul>
                    </div>
                  </div>
                  </div>
                  </div>
                  <hr>
                  <ul class="list-group">
                    <li style="color: white"  class="list-group-item d-flex justify-content-between bg-danger ">DESCRIPTION: <strong style="color: white"><?php echo strtoupper($clientI->serviceT)  ?></strong></li>
                  </ul>
                  <hr>
              <table class="table table-bordered">
              <tr>
                <th>PRODUCT</th>
                <th>COUNTRY</th>
                <th>QUANTITY</th>
                <th>RATE</th>
                <th>TOTAL AMOUNT</th>
              </tr>
              <tr>
                <td>
                  <ul class="list-group">
                    <?php
                      
                      $hajj = 'Hajj ' . date('Y');
                      if ($clientI->serviceT == $hajj) {
                        if($clientI->tcost == 1700000 or $clientI->tcost == 1650000) {
                          echo "<li class='list-group-item'><b>TENT A  HAJJ PACKAGE </b></li>";
                        } elseif($clientI->tcost == 1300000) {
                          echo "<li class='list-group-item'><b>TENT B HAJJ PACKAGE </b> </li>";
                        }
                      }
                    ?>
                </ul>
                </td>
                <td>
                  <b><?php echo strtoupper($clientI->destination)  ?></b>
                </td>
                <td>
                 <b> 1 PERSON</b>
                </td>
                <td><b>NGN<?php echo strtoupper($clientI->tcost)  ?></b></td>
                <td><b>NGN<?php echo strtoupper($clientI->tcost)  ?> </b></td>
              </tr>
              
            </table>
            <div class="col-md-5">
                <div class="card rounded-0">
                  <div class="card-body">
                   <center> <h4 class="text-danger">Our Bank Details</h4></center>
                    <ul class="list-group">
                      <li class="list-group-item">Bank: <strong>UBA Bank</strong></li>
                      <li class="list-group-item">Account Name: <strong>Butu Travel and Tours Ltd</strong></li>
                      <li class="list-group-item">Account Number: <strong>1019439656</strong></li>
                    </ul>
                  </div>
                </div>

                </div>
                </div>
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
  </body>
  <div><meta HTTP-EQUIV='Refresh' CONTENT='1; URL=cprofile?client=<?php echo $client ?>'></div>