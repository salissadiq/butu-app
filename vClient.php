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
            <h1 class="h2">Clients <i class="fa fa-users"></i></h1>
          </div>

          <div class="col-lg-12 col-md-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>

                      <th>S/N</th>
                      <th>AGENT</th>
                      <th>GROUP</th>
                      <th>PASSPORT NO</th>
                      <th>NAME</th>
                      <th>PACKAGE</th>
                      <th>GENDER</th>
                      <th>PHONE</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                      $sn = 0;
                    $getClient = $db->query("SELECT * FROM clients WHERE regBy = '$name' ");
                    foreach ($getClient as $key => $value) {
                      $sn ++;
                      echo "
                      <tr>
                      <td>".$sn."</td>
                      <td>".$value['agent']."</td>
                        <td>";
                          if ($value['cGroup'] != '') {
                            echo " 
                                <a href='viewgroup.php?group=".$value['cGroup']."&page=1' class='btn btn-outline-danger rounded-0'>". $value['cGroup'] ."<br> Click to View </a>
                            ";
                          } else {
                            echo "
                              No Group
                            ";
                          }
                        
                      echo "</td> <td>".strtoupper($value['passport']) ."</td>
                        <td> ".strtoupper($value['surname'] ) . " " . strtoupper($value['gnames']). "</td>
                        <td>".strtoupper($value['serviceT']) ."</td>
                        <td>".$value['gender']."</td>
                        <td>".$value['phone']."</td>
                        <td><a href='cProfile?client=".$value['id']."' class='btn btn-outline-danger rounded-0 mb-2'>Profile</a> <a href='cpay?client=".$value['id']."' class='btn btn-outline-danger rounded-0'> Payment</a></i></td>
                      </tr>
                      ";
                    }

                     ?>

                  </tbody>
                </table>
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
