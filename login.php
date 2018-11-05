<?php 

require_once 'functions.php';

if(isset($_POST['username'], $_POST['password'])) {

  $username = $db->real_escape_string(trim($_POST['username']));
  $password =$db->real_escape_string(trim($_POST['password'])) ;

    if(empty($username) && empty($password)) {
      echo "
          <div class='alert alert-danger'>
          <strong>Field missing!!</strong>.
          </div>
          ";
    } else {
      $check = $db->query("SELECT * FROM staffs WHERE username = '$username' AND password = '$password' ");

      if ($check->num_rows) {
          $row = $check->fetch_assoc();
          if($row['status'] == 'a') {
            $_SESSION['staff'] = $row['id'];
            echo "<div><meta HTTP-EQUIV='Refresh' CONTENT='0; URL=dashboard'></div>";
          } else {
            echo "
          <div class='alert alert-danger'>
          <strong>Authentication Failed!</strong>.
          </div>
          ";
          }
      } else {
        echo "
          <div class='alert alert-danger'>
          <strong>Invalid credentials!!</strong>.
          </div>
          ";
      }
    }
}