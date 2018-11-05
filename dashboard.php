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
            <h1 class="h2 text-danger">Dashboard <i class="fa fa-dashboard"></i></h1>
          </div>
              <?php  
                if($level == 2)  {
                  $hajj = 'Hajj ' . date('Y');
        $umraRamadan = 'Umrah Ramadan ' . date('Y');
        $umraNomarl = 'Umrah ' . date('Y');
        $tour = 'Tour' . date('Y');
$total = $db->query("SELECT * FROM clients");
$abj = $db->query("SELECT * FROM clients WHERE branch = 'Abuja'");
$abjM = $db->query("SELECT * FROM clients WHERE gender = 'Male' AND branch = 'Abuja' ");
$abjF = $db->query("SELECT * FROM clients WHERE gender = 'Female' AND branch = 'Abuja' ");
$abjUR = $db->query("SELECT * FROM clients WHERE serviceT = '$umraRamadan' AND branch = 'Abuja' ");
$abjUN = $db->query("SELECT * FROM clients WHERE serviceT = '$umraNomarl' AND branch = 'Abuja' ");
$abjH = $db->query("SELECT * FROM clients WHERE serviceT = '$hajj'AND branch = 'Abuja' ");
$abjT = $db->query("SELECT * FROM clients WHERE serviceT = '$tour' AND branch = 'Abuja' ");


$yola = $db->query("SELECT * FROM clients WHERE branch = 'Yola' ");
$yolaM = $db->query("SELECT * FROM clients WHERE gender = 'Male' AND branch = 'Yola' ");
$yolaF = $db->query("SELECT * FROM clients WHERE gender = 'Female' AND branch = 'Yola' ");
$yolaUR = $db->query("SELECT * FROM clients WHERE serviceT = '$umraRamadan' AND branch = 'Yola' ");
$yolaUN = $db->query("SELECT * FROM clients WHERE serviceT = '$umraNomarl'AND branch = 'Yola' ");
$yolaH = $db->query("SELECT * FROM clients WHERE serviceT = '$hajj' AND branch = 'Yola' ");
$yolaT = $db->query("SELECT * FROM clients WHERE serviceT = '$tour' AND branch = 'Yola' ");
                ?>
                            <div class="col-md-12">
            <div   class="row">
            <div class="col-md-5">
              <div class="card rounded-0">
            <div class="card-header bg-danger">
              <h6 class="h3 text-light">Abuja Clients <i class="fa fa-users"></i></h6>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item bg-light">
                   <h1 class="h6"><a class="nav-link" href="viewb?branch=Abuja">Total Clients [ <?php echo $abj->num_rows ?> ]</a></h1>
                </li>
                <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=Male&branch=Abuja"><h1 class="h6">Males [ <?php echo $abjM->num_rows ?> ]</h1></a></li>
                  <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=Female&branch=Abuja"><h1 class="h6">Females [ <?php echo $abjF->num_rows ?> ]</h1></a></li>
                  <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=<?php echo $hajj ?>&branch=Abuja"><h1 class="h6">Hajj [ <?php echo $abjH->num_rows ?> ]</h1></a></li>
                  <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=<?php echo $umraRamadan ?>&branch=Abuja"><h1 class="h6">Umrah Ramadan [ <?php echo $abjUR->num_rows ?> ]  </h1></a></li>
                  <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=<?php  echo $umraNomarl ?>&branch=Abuja"><h1 class="h6"> Umrah [ <?php echo $abjUN->num_rows ?> ]</h1></a></li>
                  <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=<?php  echo  $tour ?>&branch=Abuja"><h1  class="h6">Tour [ <?php echo $abjT->num_rows ?> ]</h1></a></li>
              </ul>
            </div>
          </div>
            </div>
            <div class="col-md-2">
              <div class="card rounded-0">
            <div class="card-header bg-success">
             <center> <h6 class="h3 text-light">Total</i></h6></center>
            </div>
            <div class="card-body"> 
             <center> <h2 class="h2">[ <?php echo $total->num_rows ?> ]</h2></center>
            </div>
          </div>
            </div>

            <div class="col-md-5">
              <div class="card rounded-0">
            <div class="card-header bg-warning">
              <h6 class="h3 text-light">Yola Clients <i class="fa fa-users"></i></h6>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item bg-light">
                   <h1 class="h6"><a class="nav-link" href="viewb?branch=Yola"> Total Clients [ <?php echo $yola->num_rows ?> ]</a></h1>
                </li>
                <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=Male&branch=Yola"><h1 class="h6">Males [ <?php echo $yolaM->num_rows ?> ]</h1></a></li>
                  <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=Female&branch=Yola"><h1 class="h6">Females [ <?php echo $yolaF->num_rows ?> ]</h1></a></li>
                  <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=<?php echo $hajj ?>&branch=Yola"><h1 class="h6">Hajj [ <?php echo $yolaH->num_rows ?> ]</h1></a></li>
                  <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=<?php echo $umraRamadan ?>&branch=Yola"><h1 class="h6">Umrah Ramadan [ <?php echo $yolaUR->num_rows ?> ] </h1></a></li>
                  <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=<?php echo $umraNomarl ?>&branch=Yola"><h1 class="h6"> Umrah Normal Season [ <?php echo $yolaUN->num_rows ?> ]</h1></a></li>
                  <li class="list-group-item bg-light"><a class="nav-link" href="view?pack=<?php echo $tour ?>&branch=Yola"><h1  class="h6">Tour <?php echo $yolaT->num_rows ?></h1></a></li>
              </ul>
            </div>
          </div>
            </div>
          </div>
          </div>
                <?php
                }else {
                  $name;
                    $totalClient = $db->query("SELECT * FROM clients WHERE regBy = '$name'");
                    $totalMale = $db->query("SELECT * FROM clients WHERE gender ='male' AND regBy ='$name' ");
                    $totalFemale = $db->query("SELECT * FROM clients WHERE gender = 'female' AND regBy ='$name' ");
                    $hajj = 'Hajj ' . date('Y');
                    $umraRamadan = 'Umrah Ramadan ' . date('Y');
                    $umraNomarl = 'Umrah Normal ' . date('Y');
                    $tour = 'Tour ' . date('Y');
                    $totalHajj = $db->query("SELECT * FROM clients WHERE serviceT ='$hajj'  AND regBy = '$name' ");
                    $totalUmrahRamadan = $db->query("SELECT * FROM clients WHERE serviceT ='$umraRamadan'  AND regBy ='$name' ");
                    $totalUmrahNomarl = $db->query("SELECT * FROM clients WHERE serviceT ='$umraNomarl'  AND regBy ='$name' ");
                    $totalTour = $db->query("SELECT * FROM clients WHERE serviceT ='$tour'  AND regBy ='$name' ");
                ?>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-3">
                        <a class="nav-link" href="viewb?branch=<?php echo $branch ?>">
                          <div class="card mb-3">
                        <div class="card-body bg-primary">
                          <h1 class="h4 text-light"> TOTAL CLIENTS<br><center> <?php echo $totalClient->num_rows  ?>  <i class="fa fa-users"></i></center></h1>
                        </div>
                        <div class="card-footer"></div>
                      </div>
                        </a>
                        
                      </div>

                      <div class="col-md-3">
                        <a class="nav-link" href="view?pack=Male&branch=<?php echo $branch ?>">
                          <div class="card">
                        <div class="card-body bg-warning">
                          <h1 class="h4 text-light"> TOTAL MALE<br><center> <?php echo $totalMale->num_rows  ?>  <i class="fa fa-male"></i></center></h1>
                        </div>
                        <div class="card-footer"></div>
                      </div>
                        </a>
                        
                      </div>

                      <div class="col-md-3">
                        <a class="nav-link" href="view?pack=Female&branch=<?php echo $branch ?>">
                          <div class="card">
                        <div class="card-body bg-success">
                          <h1 class="h4 text-light"> TOTAL FEMALE<br><center> <?php echo $totalFemale->num_rows  ?>  <i class="fa fa-female"></i></center></h1>
                        </div>
                        <div class="card-footer"></div>
                      </div>
                        </a>
                        
                      </div>

                      <div class="col-md-3">
                        <a class="nav-link" href="view?pack=<?php echo $hajj ?>&branch=<?php echo $branch ?>">
                          <div class="card">
                        <div class="card-body bg-warning">
                          <h1 class="h4 text-light"> HAJJ CLIENTS<br><center> <?php echo $totalHajj->num_rows  ?> <i class="fa fa-users"></i></center></h1>
                        </div>
                        <div class="card-footer"></div>
                      </div>
                        </a>
                        
                      </div>

                      <div class="col-md-3">
                        <a class="nav-link" href="view?pack=<?php echo $umraRamadan ?>&branch=<?php echo $branch ?>">
                          <div class="card">
                        <div class="card-body bg-success">
                          <h1 class="h5 text-light"> UMRAH RAMADAN CLIENTS<br><center> <?php echo $totalUmrahRamadan->num_rows  ?> <i class="fa fa-users"></i></center></h1>
                        </div>
                        <div class="card-footer"></div>
                      </div>
                        </a>
                        
                      </div>

                      <div class="col-md-3">
                        <a class="nav-link" href="view?pack=<?php echo $umraNomarl ?>&branch=<?php echo $branch ?>">
                          <div class="card">
                        <div class="card-body bg-warning">
                          <h1 class="h5 text-light"> UMRAH CLIENTS<br><center> <?php echo $totalUmrahNomarl->num_rows  ?> <i class="fa fa-users"></i></center></h1>
                        </div>
                        <div class="card-footer"></div>
                      </div>
                        </a>
                        
                      </div>

                      <div class="col-md-3">

                        <a class="nav-link" href="view?pack=<?php echo $tour ?>&branch=<?php echo $branch ?>">
                          <div class="card">
                        <div class="card-body bg-primary">
                          <h1 class="h5 text-light"> TOUR CLIENTS<br><center> <?php echo $totalTour->num_rows  ?> <i class="fa fa-users"></i></center></h1>
                        </div>
                        <div class="card-footer"></div>
                      </div>
                        </a>
                      </div>

                    </div>
                  </div>
                <?php
                }
              ?>
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
