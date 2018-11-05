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

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="logo.png" rel="icon" type="image/jpg" />
  </head>

  <body>
    <?php require_once 'navbar.php' ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Staff Profile <i class="fa fa-user"></i></h1>
          </div>
          <div class="row">
          <div class="col-md-6">
          <div class="card rounded-0">
            <div class="card-header bg-danger"><h4 style="color: white;">Staff  Info</h4></div>
            <div class="card-body mb-4">
              <ul class="list-group mb-3">
                <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Name: <strong><?php  echo strtoupper($name);?></strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Username: <strong><?php echo strtoupper($username) ?> </strong>
              </li>
              <li class="list-group-item  justify-content-between lh-condensed bg-light">
                Branch: <strong><?php echo strtoupper($branch) ?></strong>
              </li>
              </ul>
               <a class="btn btn-outline-danger rounded-0 " href="editsprofile"> Edit Profile <i class="fa fa-edit"></i></a>
               <a class="btn btn-outline-danger rounded-0 float-right" href="cpassword"> Change Password <i class="fa fa-lock"></i></a>
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
