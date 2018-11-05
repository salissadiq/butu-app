<?php 

require_once 'functions.php';

if (isset($_POST['oldpass'], $_POST['npass'], $_POST['cpass'])) {

	$oldpass = $_POST['oldpass'];
	$npass = $_POST['npass'];
	$cpass = $_POST['cpass'];
	$check = $db->query("SELECT password FROM staffs WHERE id ='$id' ");
	$check = $check->fetch_object();
	if($check->password == $oldpass) {
		if($npass == $cpass) {
			$update = $db->query("UPDATE staffs SET password = '$npass' WHERE id = '$id' ");
			if($update) {
				echo "
		<div class=' col-md-9 float-left'>
          <div class='alert alert-success rounded-0'>
        	<strong>Update was success</strong>
        	<div><meta HTTP-EQUIV='Refresh' CONTENT='1; URL=sprofile'></div>
        	</div>
        </div>
		";
			}
		} else {
			echo "
		<div class=' col-md-9 float-left'>
          <div class='alert alert-danger rounded-0'>
        	<strong>Password Not match !!!</strong>
        	</div>
        </div>
		";
		}
	} else {
		echo "
		<div class=' col-md-9 float-left'>
          <div class='alert alert-danger rounded-0'>
        	<strong>Your old password is incorrect !!!</strong>
        	</div>
        </div>
";
	}
}