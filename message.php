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
            <h1 class="h2">Staff message area <i class="fa fa-bar-chart-"></i></h1>
          </div>
            <div class="card">
        <div class="card-header bg-danger">
             <h3 class="h4">Staff Message<br>  <a href="compose.php" class="btn btn-info">Compose Message</a></h3>
           </div> 
           <div class="card-body"> 
              <div class="col-md-12">
                <div class="row">
                  <?php
                    if(isset($_GET['page']))
                      $page = $_GET['page'];
                    if($page=='' || $page=='1'){
                      $page1 = 0;
                    } else {
                      $page1 = ($page*5)-5;
                    }
                    $getMessages = $db->query("SELECT * FROM message  WHERE receiver_id = '$id' ORDER BY id DESC LIMIT $page1,5");
                        while($msg = $getMessages->fetch_object()) {
                      echo "
                  <div class='card'>
                    <div class='card-header'> From: <b>" . $msg->sender."</b></div>
                    <div class='card-body'>
                      <p>".$msg->subject."</p>
                    </div>
                    <div class='card-footer'>On " . $msg->time . " <div class='pull-right'> <a href='readm?m=".$msg->id."'> Read Message</a></div> </div>
                  </div>
                      ";
                    }
                 $getRowCount = $db->query("SELECT * FROM message WHERE receiver_id = '$id' ");
                 $count = $getRowCount->num_rows;
                $a = $count / 5;

                $a = ceil($a);
              echo " <nav class='  pagination'>";
                for($b=1; $b<=$a; $b++){
                ?>  <li><a href="message?page=<?php echo $b ?>"><?php echo $b .''; ?></a></li> <?php
                }
              echo "  </nav>";
                 ?>
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
