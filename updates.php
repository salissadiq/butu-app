<?php
require_once 'functions.php';

if(isset($_POST['username'], $_POST['name'])){

$username = $_POST['username'];
$name = $_POST['name'];
$update = $db->query("UPDATE staffs SET username ='$username', name = '$name' WHERE id = '$id' ");

	if($update) {
		echo "
		<div class=' col-md-9 float-left'>
          <div class='alert alert-success rounded-0'>
        	<strong><h5>Successfully!!</h5></strong>
        	</div>
        </div>
        <div><meta HTTP-EQUIV='Refresh' CONTENT='1; URL=sprofile'></div>
		";
	} else {
		echo "
		<div class=' col-md-9 float-left'>
          <div class='alert alert-danger rounded-0'>
        	<strong><h5>Failed to update</h5></strong>
        	</div>
        </div>
";
	}

}

?>