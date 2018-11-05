<?php
require_once 'functions.php';

$s = $_GET['s'];

$check = $db->query("SELECT status FROM staffs WHERE id ='$s' ");
$check = $check->fetch_object();

if($check->status == 'a') {

	$update  = $db->query("UPDATE staffs SET status = 'b' WHERE id = '$s' ");
	header('location: mstaffs');
} elseif($check->status == 'b') {
	$update  = $db->query("UPDATE staffs SET status = 'a' WHERE id = '$s' ");
	header('location: mstaffs');
}