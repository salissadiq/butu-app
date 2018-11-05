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
        <div class="card-header">
             <h3 class="h3">Staff Message</h3>
           </div> 
           <div class="card-body"> 
              <div class="col-md-12">
                <div class="row">
                  <form method="post">
                    <?php  
                      $staffs = $db->query("SELECT * FROM staffs");

                        if(isset($_POST['send'])) {
                          $receiver = $_POST['receiver'];
                          $subject = $_POST['subject'];
                          $message = $_POST['message'];
                          $time = date('d/m/y H:i:sa');
                          $sender = $name;

                          $sendMessage = $db->query("INSERT INTO message (sender, receiver_id, subject, message, time, status) VALUES('$sender', '$receiver', '$subject', '$message', '$time', 0)");

                          if ($sendMessage) {
                            echo "
                            <div class='alert alert-success'>
                              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                              <strong>Message Sent!</strong>
                            </div>
                            ";
                          }
                        }
                    ?>
                    <div class="form-group">
                      <label for="receiver">To</label>
                    <select name="receiver" id="receiver" class="form-control" required>
                      <option></option>
                      <?php
                        while ($staff = $staffs->fetch_object()) {
                          echo "<option value='".$staff->id."'>". strtoupper($staff->name) ."</option>";
                        }
                      ?>
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea  name="message" id="message" class="form-control" rows="7" placeholder="Write Your Message here" required></textarea>
                      </div>
                      <button class="btn btn-success" type="submit" name="send">Send <i class="fa fa-send"></i> </button>
                  </form>
             

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
