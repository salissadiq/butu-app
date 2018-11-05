<?php
require_once 'functions.php';
if(!loggedIn()) {
  header('location: ./');
}
 
      $id = $_GET['client'];
      $getInvoice = $db->query("SELECT * FROM invoice WHERE client_id = '$id' ");
      if (!$getInvoice) {
        $addInvoice = $db->query("INSERT INTO invoice(client_id) VALUES('$id')");
      }
      $client = $db->query("SELECT * FROM clients WHERE id = '$id' ");
      $client = $client->fetch_object();

     ?>
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
            <h1 class="h2">Client Profile <i class="fa fa-user"></i></h1>
          </div>
          <div class="row">
          <div class="col-md-6">
          <div class="card rounded-0 mb-4">
            <div class="card-header bg-danger"><h4 style="color: white;">Client Personal Details</h4></div>
            <div class="card-body">
              <ul class="list-group mb-3">
                <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Agent: <strong><?php  echo strtoupper($client->agent) . '</strong> Phone:  <strong>' . $client->agentphone ?></strong>
              </li>
                <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Name: <strong><?php  echo strtoupper($client->surname) . ' ' . strtoupper($client->gnames) ?></strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Passport No: <strong><?php echo strtoupper($client->passport) ?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                 Nationality: <strong><?php echo strtoupper($client->nationality) ?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                 Date of Birth: <strong><?php echo strtoupper($client->dob) ?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                 Gender: <strong><?php echo strtoupper($client->gender) ?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                 Place of birth: <strong><?php echo strtoupper($client->pobirth) . '</strong> Place of Issue: <strong>' . strtoupper($client->poissue) ?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                 Issue Date: <strong><?php echo strtoupper($client->isdate) . '</strong>  Expiry Date: <strong>'. strtoupper($client->exdate)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                 Phone: <strong><?php echo strtoupper($client->phone) . '</strong> Email: <strong>' . $client->email ?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
               Group: <strong><?php echo strtoupper($client->cGroup) ?></strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Dependent: <strong><?php echo strtoupper($client->dependent). '</strong> Relationship: <strong>' . $client->drelation . '</strong> Phone: <strong>' . $client->dphone ?></strong>
              </li>
              </ul>
            </div>
          </div>
          </div>

          <div class="col-md-6">
            <div  class="card rounded-0">
              <div class="card-header bg-warning"><h4 class="mb-0 " style="color: white">Client Personal Details </h4></div>
              <div class="card-body">
                <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Package Type: <strong> <?php echo strtoupper($client->serviceT)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Visa: <strong> <?php echo strtoupper($client->visa)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Ticket: <strong> <?php echo strtoupper($client->ticket)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Accomodation: <strong> <?php echo strtoupper($client->accomodation)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Destination: <strong> <?php echo strtoupper($client->destination)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Provider: <strong> <?php echo strtoupper($client->provider)?> </strong>
              </li>
            </div>
            </div>
          </div>

          <div class="col-md-6">
            <div  class="card rounded-0">
              <div class="card-header bg-success"><h4 class="mb-0 " style="color: white">Client Travel Details </h4></div>
              <div class="card-body">
                <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Proposed Travel Date: <strong> <?php echo strtoupper($client->ptravel)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Proposed Return Date: <strong> <?php echo strtoupper($client->preturn)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Actual Travel Date: <strong> <?php echo strtoupper($client->atravel)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Actual Return Date: <strong> <?php echo strtoupper($client->areturn)?> </strong>
              </li>
            </div>
            </div>
          </div>

          <div class="col-md-6">
            <div  class="card rounded-0">
              <div class="card-header bg-primary"><h4 class="mb-0 " style="color: white">Client Payment Details </h4></div>
              <div class="card-body">
                <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Payment Method: <strong> <?php echo strtoupper($client->paymentT)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
               Cost: <strong> <?php echo strtoupper($client->tcost)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Paid: <strong> <?php echo strtoupper($client->pay)?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Date of Payment: <strong> <?php echo strtoupper($client->dop)?> </strong>
              </li>
            </div>
            </div>
          </div>

        </div>
        <div class="card rounded-0 mb-3">

            <div class="card-body">
                     <a class="btn btn-outline-danger rounded-0 float-right" href="eClient?client=<?php echo$client->id?>">Edit Client <i class="fa  fa-edit"></i></a>
              <a class="btn btn-outline-danger rounded-0 float-left" href="invoice_print?client=<?php echo trim($client->id)?>">Generate Invoice <i class="fa fa-print"></i></a>
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
