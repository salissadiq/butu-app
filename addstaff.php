<?php
require_once 'functions.php';

$username = $_POST['username'];
$name = $_POST['name'];
$branch = $_POST['branch'];

$insert = $db->query("INSERT INTO staffs (username, password, name, branch, status, level) VALUES('$username', 'butu', '$name', '$branch', 'd', 1)");

if ($insert) {
	echo "
          <div class='alert alert-success'>
          <strong>Successfully Added</strong>.
          </div>
          <div><meta HTTP-EQUIV='Refresh' CONTENT='0; URL=mstaffs'></div>
          ";
}