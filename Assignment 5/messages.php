<?php

$servername = "sql1.njit.edu";
$username = "zma4";
$password = "Z_viper908";
$dbname = "zma4";
$con = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = array();
$message = isset($_POST['message']) ? $_POST['message'] : null;
$from = isset($_POST['from']) ? $_POST['from'] : null;

if(!empty($message) && !empty($from)){
    $sql = "INSERT INTO `messages`(`message`,`from`) VALUES ('".$message."','".$from."')";
    $result['send_status'] = $con->query($sql);
}

$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $con->query("SELECT * FROM `messages` WHERE `id` > " . $start);
while($row = $items->fetch_assoc()){
    $result['items'][] = $row;
}

$con->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);