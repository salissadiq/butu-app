<?php
require_once 'functions.php';
	$amount = $_POST['amount'];
	$payt = $_POST['payt'];
	$bank = $_POST['bank'];
	$dop = $_POST['dop'];
	$oldpay = $_POST['oldpay'];
	$client = $_POST['client'];

	$oldpay += $amount;
	$updatePay = $db->query("UPDATE clients SET pay = '$oldpay' WHERE id = '$client' ");

	$payrec = $db->query("INSERT INTO paymentsrecord(client_id, amount, bank, dop, payt) VALUES ('$client', '$amount', '$bank', '$dop', '$payt')");

	if($updatePay & $payrec)  {
		echo "
          <div class='alert alert-success'>
          <strong>Successfully updated</strong>.
          </div>
          <div><meta HTTP-EQUIV='Refresh' CONTENT='0; URL=cpay?client=".$client."'></div>
          ";
	} else {
		  echo "
          <div class='alert alert-danger'>
          <strong>Failed!</strong>.
          </div>
          ";
	}
