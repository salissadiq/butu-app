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
            <h1 class="h2">Edit Profile <i class="fa fa-edit"></i></h1>
          </div>
          <div class="row">
          <div class="col-md-5">
          <div class="card rounded-0">
            <div class="card-header bg-danger"><h4 style="color: white;">Edit your profile</h4></div>
            <div class="card-body ">
              <form class="form ajaxform" action="upass.php" method="post">
                <div class="form-group">
                  <label for="oldpass">Old Password</label>
                  <input type="password" name="oldpass" class="form-control rounded-0"  required>
                </div>
                <div class="form-group">
                  <label for="npass">New Password</label>
                  <input type="password" name="npass" class="form-control rounded-0" required>
                </div>
                <div class="form-group">
                  <label for="cpass">Confirm New Password</label>
                  <input type="password" name="cpass" class="form-control rounded-0" required>
                </div>
                <button  type='submit' class="btn btn-outline-danger float-right rounded-0">Update <i class="fa fa-check" ></i></button>
                <div id="feedback"></div>
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
        
      feather.replace()
    </script>
  </body>
</html>
