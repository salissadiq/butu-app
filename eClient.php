<?php
require_once 'functions.php';
if(!loggedIn()) {
  header('location: ./');
} 
    $id = $_GET['client'];
      $client = $db->query("SELECT * FROM clients WHERE id= '$id' ");
      $client = $client->fetch_object();
       
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
  </head>

  <body>
    <?php require_once 'navbar.php' ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">Edit Client <i class="fa fa-edit"></i></h2>
            </div>
            <div class="col-md-12">
              <form class="form ajaxform" action="eupdate.php" method="post">
              <div class="row">
              <div class="card round-0">
                <div class="card-header bg-danger">
  		            <h4 class="mb-0 " style="color: white">Client Personal details </h4>
    		        </div>
                <div class="card-body">
                  
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="agent">Introduced by:</label>
                      <input type="text" name="agent" class="form-control rounded-0" id="agent" placeholder="Agent Name" value="<?php echo $client->agent ?>" required>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="agentphone">Agent phone</label>
                      <input type="text" name="agentphone" class="form-control rounded-0" id="agentphone" placeholder="Agent phone" value="<?php echo $client->agentphone ?>" >
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="passport">Passport No</label>
                      <input type="text" name="passport"  class="form-control rounded-0" id="passport" placeholder="Passport  No" value="<?php echo $client->passport ?>" required>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="surname">Surname</label>
                      <input type="text" name="surname" class="form-control rounded-0" id="surname" placeholder="Surname" value="<?php echo $client->surname ?>" required>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="gnames">Given names</label>
                      <input type="text" name="gnames" class="form-control rounded-0" id="gnames" placeholder="Given names" value="<?php echo $client->gnames ?>" required>
                    </div>

                    <div class="col-md-2 mb-3">
                      <label for="nationality">Nationalty</label>
                      <input type="text" name="nationality" class="form-control rounded-0" id="nationality" placeholder="Nationalty" value="<?php echo $client->nationality ?>" required>
                    </div>

                     <div class="col-md-2 mb-3">
                      <label for="dob">D O B</label>
                      <input type="text" name="dob" class="form-control rounded-0" id="dob" placeholder="Date of birth" value="<?php echo $client->dob ?>" required>
                    </div>

                    <div class="col-md-2 mb-3">
                      <label for="gender">Gender</label>
                      <select id="gender" name="gender" class="form-control rounded-0">
                        <option ><?php echo $client->gender ?></option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="pobirth">Place of birth</label>
                      <input type="text" name="pobirth" class="form-control rounded-0" id="pobirth" placeholder="Place of birth" value="<?php echo $client->pobirth ?>" required>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="poissue">Place of issue</label>
                      <input type="text" name="poissue" class="form-control rounded-0" id="poissue" placeholder="Place of issue" value="<?php echo $client->poissue  ?>"  required>
                    </div>

                      <div class="col-md-2 mb-3">
                      <label for="isdate">Issue Date</label>
                      <input type="text" name="isdate" class="form-control rounded-0" id="isdate" placeholder="Issue Date" value="<?php echo $client->isdate ?>" required>
                    </div>

                    <div class="col-md-2 mb-3">
                      <label for="exdate">Expiry Date</label>
                      <input type="text" name="exdate" class="form-control rounded-0" id="exdate" placeholder="Expiry Date" value="<?php echo $client->exdate ?>" required>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" class="form-control rounded-0" id="phone" placeholder="Phone" value="<?php echo $client->phone ?>">
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="email">Email</label>
                      <input type="text" name="email" class="form-control rounded-0" id="email" placeholder="Email" value="<?php echo $client->email ?>">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="group">Group</label>
                      <input type="text" name="cGroup" class="form-control rounded-0" id="group" placeholder="Group" value="<?php echo $client->cGroup ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="dependent">Dependent name</label>
                      <input type="text" name="dependent" class="form-control rounded-0" id="dependent" placeholder="Dependent" value="<?php echo $client->dependent ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="drelation">Relationship</label>
                      <input type="text" name="drelation" class="form-control rounded-0" id="drelation" placeholder="Relationship" value="<?php echo $client->drelation ?>">
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="dphone">Dependent Phone</label>
                      <input type="text" name="dphone" class="form-control rounded-0" id="dphone" placeholder="Dependent phone" value="<?php echo $client->dphone ?>">
                    </div>

                  </div>
              </div>
              </div>
              </div>
                <hr>
              <div class="row">
              <div class="card round-0">
                <div class="card-header bg-primary">
                  <h4 class="mb-0 " style="color: white">Client Service Details </h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="service">Service type</label>
                      <select name="serviceT" class="form-control rounded-0" required>
                        <option><?php echo $client->serviceT ?></option>
                        <option>Hajj <?php echo date('Y')?></option>
                        <option>Umrah ramadan season <?php echo date('Y')?></option>
                        <option>Umrah normal season <?php echo date('Y')?></option>
                        <option>Tour <?php echo date('Y')?></option>
                      </select>
                      
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="visa">Visa</label>
                      <input type="text" name="visa" class="form-control rounded-0" id="visa" placeholder="Visa" value="<?php echo $client->visa ?>" required>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="ticket">Ticket</label>
                      <input type="text" name="ticket"  class="form-control rounded-0" id="ticket" placeholder="Ticket " value="<?php echo $client->ticket ?>" >
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="accomodation">Accomodation</label>
                      <input type="text" name="accomodation" class="form-control rounded-0" id="accomodation" placeholder="Accomodation" value="<?php echo $client->accomodation ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="destination">Destination</label>
                      <input type="text" name="destination" class="form-control rounded-0" id="destination" placeholder="Destination" value="<?php echo $client->destination ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="provider">Provider</label>
                      <input type="text" name="provider" class="form-control rounded-0" id="provider" placeholder="Provider" value="<?php echo $client->provider ?>">
                    </div>
                  </div>
              </div>
              </div>
              </div>
              <hr>

              <div class="card round-0">
                <div class="card-header bg-success">
                  <h4 class="mb-0 " style="color: white">Client Travel Details </h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="ptrave">Proposed Travel Date</label>
                      <input type="date" name="ptravel" class="form-control rounded-0" id="ptrave" placeholder="Proposed Travel Date" value="<?php echo $client->ptravel ?>">
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="preturn">Proposed return date</label>
                      <input type="date" name="preturn"  class="form-control rounded-0" id="preturn" placeholder="Proposed return date " value="<?php echo $client->preturn ?>">
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="atravel">Actual travel date</label>
                      <input type="date" name="atravel" class="form-control rounded-0" id="atravel" placeholder="Actual travel date" value="<?php echo $client->atravel ?>">
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="areturn">Actual return date</label>
                      <input type="date" name="areturn" class="form-control rounded-0" id="areturn" placeholder="Actual return date" value="<?php echo $client->areturn ?>">
                    </div>
                  </div>
              </div>
              </div>
                <hr>
              <div class="card round-0">
                <div class="card-header bg-warning">
                  <h4 class="mb-0 " style="color: white">Client Payment Details </h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="paymentT">Payment Type</label>
                      <select name="paymentT" class="form-control rounded-0">
                        <option><?php echo $client->paymentT ?></option>
                        <option>Full payment</option>
                        <option>Installment payment</option>
                      </select>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="tcost">Total cost</label>
                      <input type="text" name="tcost"  class="form-control rounded-0" id="tcost" placeholder="Total cost " value="<?php echo $client->tcost ?>">
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="pay">Amount paid</label>
                      <input type="text" name="pay" class="form-control rounded-0" id="pay" placeholder="Amount paid" value="<?php echo $client->pay ?>">
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="dop">Payment date</label>
                      <input type="date" name="dop" class="form-control rounded-0" id="dop" placeholder="Date of payment" value="<?php echo $client->dop ?>">
                    </div>
                    <input type="hidden" name="client" value="<?php echo $id ?>">
                  </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-outline-danger rounded-0 float-right">Submit <i class="fa fa-check"></i></button>
                <div class="col-md-10">
              <div  id="feedback"></div>
              </div>
              </div>

              </div>
            </form>
            </div>
            
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

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
x</html>
