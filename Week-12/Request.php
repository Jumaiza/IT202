<?php 

$servername = "sql1.njit.edu";
$username = "zma4";
$password = "Z_viper908";
$dbname = "zma4";
$con = mysqli_connect($servername,$username,$password,$z2a4);

$a[] = "Internet Applications";
$a[] = "Computer Science II";
$a[] = "Statistics";
$a[] = "Computer Science I";
$a[] = "Astronomy";
$a[] = "History";

    $q=$_REQUEST["q"];

    $course = "";

    if ($q !== "") {
        $q = strtolower($q);
        $len=strlen($q);
        foreach($a as $name) {
            if (stristr($q, substr($name, 0, $len))) {
                if ($course === "") {
                    $course = $name;
                } else {
                    $course .= ", $name";
                }
            }
        }
    }

    echo $course === "" ? "Course not found" : $course;



?>