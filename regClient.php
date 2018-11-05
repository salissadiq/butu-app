<?php
require_once 'functions.php';
if(!loggedIn()) {
  header('location: ./');
}
if(isset($_POST['submit'])) {
	
	$agent = $_POST['agent'];
	$agentphone = $_POST['agentphone'];
	$passport = $_POST['passport'];
	$surname = $_POST['surname'];
	$gnames = $_POST['gnames'];
	$nationality = $_POST['nationality'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$pobirth = $_POST['pobirth'];
	$poissue = $_POST['poissue'];
	$isdate = $_POST['isdate'];
	$exdate = $_POST['exdate'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$cGroup = $_POST['cGroup'];
	$dependent = $_POST['dependent'];
	$drelation = $_POST['drelation'];
	$dphone = $_POST['dphone'];
	$serviceT = $_POST['serviceT'];
	$visa = $_POST['visa'];
	$ticket = $_POST['ticket'];
	$accomodation = $_POST['accomodation'];
	$destination = $_POST['destination'];
	$provider = $_POST['provider'];
	$ptravel = $_POST['ptravel'];
	$preturn = $_POST['preturn'];
	$atravel = $_POST['atravel'];
	$areturn = $_POST['areturn'];
	$paymentT = $_POST['paymentT'];
	$tcost = $_POST['tcost'];
	$pay = $_POST['pay'];
	$payt = $_POST['payt'];
	$bank = $_POST['bank'];
	$dop = $_POST['dop'];
	$name;
	$branch;


	if($checkClient = $db->query("SELECT * FROM clients WHERE passport = '$passport' ")->num_rows) {
		echo "
          <div class=' col-md-10 float-left'>
          <div class='alert alert-danger rounded-0'>
        <strong><h5>Error!!! Client Already Exist</h5></strong>
        </div>
        </div>
          ";
	} else {
		$sql = "INSERT INTO clients (agent, agentphone, passport, surname, gnames, nationality, dob, gender, pobirth, poissue, isdate, exdate, phone, email, cGroup, dependent, drelation, dphone, serviceT, visa, ticket, accomodation, destination, provider, ptravel, preturn, atravel, areturn, paymentT,tcost, pay, dop, regBy, branch) VALUES('$agent', '$agentphone', '$passport', '$surname', '$gnames', '$nationality', '$dob', '$gender', '$pobirth', '$poissue', '$isdate', '$exdate', '$phone', '$email', '$cGroup', '$dependent', '$drelation', '$dphone', '$serviceT', '$visa', '$ticket', '$accomodation', '$destination', '$provider', '$ptravel', '$preturn', '$atravel', '$areturn', '$paymentT', '$tcost', '$pay', '$dop', '$name', '$branch')";
		
		
		if($db->query($sql) === TRUE) {
		$client = $db->insert_id;
		$doi = date('d/M/Y');
		
		$doi = date('d/M/Y');
		$invoice = $db->query("INSERT INTO invoice(client_id, doi) VALUES('$client','$doi')");
		$receipt = $db->query("INSERT INTO receipt(client_id, dor) VALUES('$client','$doi')");
		$payrec = $db->query("INSERT INTO paymentsrecord(client_id, amount, bank, dop, payt) VALUES('$client', '$pay', '$bank', '$dop', '$payt')");
		if($payrec ) {
		    echo "
		<div class=' col-md-10 float-left'>
          <div class='alert alert-success rounded-0'>
        <strong><h5>Successfully Registered</h5></strong>
        </div>
        </div>
        <div><meta HTTP-EQUIV='Refresh' CONTENT='1; URL=cProfile?client=".$client."'></div>
       
        ";
		}else {
		    echo $db->error;
		}
			
		} else {
			echo "
			<div class=' col-md-10 float-left'>
          <div class='alert alert-danger rounded-0'>
        <strong><h5>Registration Failed</h5></strong>
        </div>
        </div>
			";
		}
	}

}

?>

