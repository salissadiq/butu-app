<?php
require_once 'functions.php';
if(!loggedIn()) {
  header('location: ./');
}
if(isset($_GET['client'])) {
  $id = $_GET['client'];
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
            <div class="card-header bg-danger"><h4 style="color: white;">Payment record</h4></div>
            <div class="card-body mb-4">
              <ul class="list-group mb-3">
                <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Name: <strong><?php  echo strtoupper($client->surname) . ' ' . strtoupper($client->gnames) ?></strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Passport No: <strong><?php echo strtoupper($client->passport) ?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Package Type: <strong><?php echo strtoupper($client->serviceT) ?></strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Package Cost: <strong><?php echo $client->tcost ?>.00</strong>
              </li>
              <li class="list-group-item justify-content-between lh-condensed bg-light">
                 Amount Paid: <strong><?php echo $client->pay ?>.00</strong><br>
                 Date: <?php echo $client->dop ?>
              </li>
               <li class="list-group-item justify-content-between lh-condensed bg-light">
                 Payment Status: 
                 <?php 
                 $unpaid = $client->tcost - $client->pay;
                    if($unpaid == 0) 
                      echo strtoupper("<strong>Payment completed</strong>") ;
                    else 
                      echo strtoupper("<strong>Unpaid balance is ") . ' NGN' . $unpaid . '.00 </strong>';
                 ?>
              </li>
              </ul>
               <a class="btn btn-outline-danger rounded-0 " href="payrec?client=<?php echo $id ?>"> View payment record</a>
               <a class="btn btn-outline-danger rounded-0 float-right" href="receipt?client=<?php echo $id ?>"> Print Receipt <i class="fa fa-print"></i></a>
            </div>
         
          </div>
          </div>
          <?php 
            if($client->tcost != $client->pay) {
          ?>
                      <div class="col-md-6">
            <form class="form ajaxform" action="updatepay.php" method="post">
            <div class="card rounded-0">
              <div class="card-header bg-warning"><h4 style="color: white;">Update client payment</h4></div>
              <div class="card-body">
                  
                    <label for="amount">Amount</label>
                    <input type="number" id="amount" name="amount" class="form-control rounded-0">
                  <div class="form-group">
                    <label for="payt">Payment type</label>
                    <select name="payt" id="payt" class="form-control rounded-0">
                      <option></option>
                      <option>Cash</option>
                      <option>Transfer</option>
                      <option>POS</option>
                      <option>Cheque</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="bank">Bank</label>
                    <input type="text" id="bank" name="bank" class="form-control rounded-0">
                  </div>
                  <div class="form-group">
                    <label for="dop">Date of payment</label>
                    <input type="date" id="dop" name="dop" class="form-control rounded-0">
                  </div>
                  <input type="hidden" name="client" value="<?php echo $id ?>">
                  <input type="hidden" name="oldpay" value="<?php echo $client->pay ?>">
                  <button type="submit" class="btn btn-outline-danger rounded-0 float-right">Update <i class="fa fa-check"></i></button>
                  <div id="feedback"></div>
              </div>

            </div>
          </form>
          </div>
            <?php
            }
           ?>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="jquery.min.js"></script>
     <script>
      $(document).ready(function() {

          $('form.ajaxform').on('submit', function() {

        var that = $(this);
        url = that.attr('action');
        type = that.attr('method');
        data = {};

        that.find('[name]').each(function(index, value){
          var that = $(this);
              name = that.attr('name');
              value = that.val();
          data[name] = value;
        });

        $.ajax({
          url: url,
          type: type,
          data: data,
          success: function(response){
            $('#feedback').html(response);
          }
        });

  return false;
});


      })
        

    </script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
