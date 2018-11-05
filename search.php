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
            <h1 class="h2">Search Result <i class="fa fa-search"></i></h1>
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
                if (isset($_POST['submit'])) {
                  $search = $_POST['search'];
                  $results = $db->query("SELECT * FROM clients WHERE passport = '$search' OR surname = '$search' OR phone = '$search' OR agent = '$search' ");
                  while ($result = $results->fetch_object()) {
                    echo "
                    <tr>
                      <td width='160px'>". $result->passport."</td>
                      <td>". $result->surname ."  ". $result->gnames ."</td>
                      <td>". $result->gender ."</td>
                      <td>". $result->phone."</td>
                      <td>". $result->serviceT ."</td>
                      <td width='220px'><a href='cProfile.php?client=".$result->id."' class='btn btn-outline-danger rounded-0'>Profile</a> | <a href='cpay.php?client=".$result->id."' class='btn btn-outline-danger rounded-0'> Payment</a></i></td>
                    </tr>
                    ";
                  }
                } else {
                  header('location: dashboard');
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
