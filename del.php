<?php
require_once 'functions.php';

$s = $_GET['s'];

$del = $db->query("DELETE FROM staffs WHERE id = '$s' ");
header('location: mstaffs');