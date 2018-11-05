<?php
require_once 'functions.php';
if(!loggedIn()) {
  header('location: ./');
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
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="logo.png" rel="icon" type="image/jpg" />
  </head>

  <body>
    <?php require_once 'navbar.php' ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">Register <i class="fa fa-user-plus"></i></h2>
            </div>
            <div class="col-md-12">
              <form class="ajaxform" action="regClient.php" method="post">
              <div class="row">
              <div class="card round-0">
                <div class="card-header bg-danger">
  		            <h4 class="mb-0 " style="color: white">Client Personal details </h4>
    		        </div>
                <div class="card-body">
                  
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="agent">Introduced by:</label>
                      <input type="text" name="agent" class="form-control rounded-0" id="agent" placeholder="Agent Name" required>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="agentphone">Agent phone</label>
                      <input type="text" name="agentphone" class="form-control rounded-0" id="agentphone" placeholder="Agent phone" >
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="passport">Passport No</label>
                      <input type="text" name="passport"  class="form-control rounded-0" id="passport" placeholder="Passport  No" required>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="surname">Surname</label>
                      <input type="text" name="surname" class="form-control rounded-0" id="surname" placeholder="Surname" required>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="gnames">Given names</label>
                      <input type="text" name="gnames" class="form-control rounded-0" id="gnames" placeholder="Given names" required>
                    </div>

                    <div class="col-md-2 mb-3">
                      <label for="nationality">Nationalty</label>
                      <input type="text" name="nationality" class="form-control rounded-0" id="nationality" placeholder="Nationalty" required >
                    </div>

                     <div class="col-md-2 mb-3">
                      <label for="dob">D O B</label>
                      <input type="date" name="dob" class="form-control rounded-0" id="dob" placeholder="Date of birth" required >
                    </div>

                    <div class="col-md-2 mb-3">
                      <label for="gender">Gender</label>
                      <select id="gender" name="gender" class="form-control rounded-0" required>
                        <option ></option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="pobirth">Place of birth</label>
                      <input type="text" name="pobirth" class="form-control rounded-0" id="pobirth" placeholder="Place of birth" required >
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="poissue">Place of issue</label>
                      <input type="text" name="poissue" class="form-control rounded-0" id="poissue" placeholder="Place of issue" required>
                    </div>

                      <div class="col-md-3 mb-3">
                      <label for="isdate">Issue Date</label>
                      <input type="date" name="isdate" class="form-control rounded-0" id="isdate" placeholder="Issue Date" required>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="exdate">Expiry Date</label>
                      <input type="date" name="exdate" class="form-control rounded-0" id="exdate" placeholder="Expiry Date" required>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" class="form-control rounded-0" id="phone" placeholder="Phone">
                    </div>

                    <div class="col-md-2 mb-3">
                      <label for="email">Email</label>
                      <input type="text" name="email" class="form-control rounded-0" id="email" placeholder="Email" value="">
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="group">Group</label>
                      <input type="text" name="cGroup" class="form-control rounded-0" id="group" placeholder="Group">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="dependent">Dependent name</label>
                      <input type="text" name="dependent" class="form-control rounded-0" id="dependent" placeholder="Dependent">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="drelation">Relationship</label>
                      <input type="text" name="drelation" class="form-control rounded-0" id="drelation" placeholder="Relationship">
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="dphone">Dependent Phone</label>
                      <input type="text" name="dphone" class="form-control rounded-0" id="dphone" placeholder="Dependent phone">
                    </div>

                  </div>
                  </div>
              
              </div>
              </div>

           
            <hr>
                <div class="card rounded-0">
                  <div class="card-header bg-primary"><h4 class="mb-0 " style="color: white">Client Service details </h4></div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="serviceT">Package Type</label>
                      <select id="serviceT" name="serviceT" class="form-control rounded-0" required>
                        <option ></option>
                        <option>Umrah Ramadan <?php echo date("Y") ?></option>
                        <option>Umrah <?php echo date("Y") ?></option>
                        <option>Hajj <?php echo date("Y") ?></option>
                        <option>Tour <?php echo date("Y") ?> </option>
                      </select>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="visa">Visa</label>
                      <input type="text" name="visa" id="visa" class="form-control rounded-0" placeholder="Visa" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="ticket">Ticket</label>
                      <input type="text" name="ticket" id="ticket" class="form-control rounded-0" placeholder="Ticket">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="accomodation">Accmodation</label>
                      <input type="text" name="accomodation" id="accomodation" class="form-control rounded-0" placeholder="Accmodation">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="destination">Destination</label>
                      <input type="text" name="destination" id="destination" class="form-control rounded-0" placeholder="Destination" required>
                    </div>
                      <div class="col-md-8 mb-3">
                      <label for="provider">Service Provider</label>
                      <input type="text" name="provider" id="provider" class="form-control rounded-0" placeholder="Service Provider" required>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
                   <div class="card round-0">
                <div class="card-header bg-warning">
                  <h4 class="mb-0 " style="color: white">Client Travel Details </h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="ptravel">Proposed Travel Date</label>
                      <input type="date" name="ptravel" id="ptravel" class="form-control rounded-0" >
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="preturn">Proposed return date</label>
                      <input type="date" name="preturn"  class="form-control rounded-0" id="preturn" >
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="atravel">Actual travel date</label>
                      <input type="date" name="atravel" class="form-control rounded-0" id="atravel" >
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="areturn">Actual return date</label>
                      <input type="date" name="areturn" class="form-control rounded-0" id="areturn" >
                    </div>
                  </div>
              </div>
              </div>
                  <hr>
              <div class="card rounded-0">
                <div class="card-header bg-success">
                  <h4 class="mb-0 " style="color: white">Client Payment details </h4>
                </div>
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-2 mb-3">
                  <label for="paymentT">Payment Type</label>
                  <select name="paymentT" id="paymentT" class="form-control rounded-0">
                    <option></option>
                    <option>Full Payment</option>
                    <option>Installment</option>
                  </select>
                  </div>

                   <div class="col-md-2 mb-3">
                  <label for="tcost">Total cost</label>
                    <input type="number" name="tcost" id="tcost" class="form-control rounded-0" placeholder="Total Cost">
                  </div>
                  <div class="col-md-2 mb-3">
                  <label for="pay">Amount Paid</label>
                    <input type="number" name="pay" id="pay" class="form-control rounded-0" placeholder="Amount Paid">
                  </div>
                  <div class="col-md-2 mb-3">
                  <label for="payt">Paid By</label>
                  <select name="payt" id="payt" class="form-control rounded-0">
                    <option></option>
                    <option>Cash</option>
                    <option>Transfer</option>
                    <option>POS</option>
                    <option>Cheque</option>
                  </select>
                  </div>
                  <div class="col-md-2 mb-3">
                  <label for="bank">Bank</label>
                    <input type="text" name="bank" id="bank" class="form-control rounded-0" placeholder="Bank">
                  </div>
                  <div class="col-md-2 mb-3">
                  <label for="dop">Date of payment</label>
                    <input type="date" name="dop" id="dop" class="form-control rounded-0" >
                  </div>
                    </div>
                    </div>
                    <div class="card-footer">
                <button type="submit" id="reg" name="submit" class="btn btn-outline-danger rounded-0 float-right">Register <i class="fa fa-user-plus"></i></button>
                <div id="feedback"></div>
              </div>
                </div>
            </form>
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
