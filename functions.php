<?php
session_start();
require_once 'DB.php';
function loggedIn() {
  if(isset($_SESSION['staff']) && !empty($_SESSION['staff'])) {
    return true;
  } else {
    return false;
  }
}

if (loggedIn()) {
  $id = $_SESSION['staff'];
  $staff = $db->query("SELECT * FROM staffs WHERE id = '$id' ");
  $row = $staff->fetch_assoc();
  $id = $row['id'];
  $username = $row['username'];
  $name = $row['name'];
  $level = $row['level'];
  $branch = $row['branch'];
}


function logout(){
  session_unset();
  $_SESSION['user'] = '';
  header('location: index');
}
 ?>
