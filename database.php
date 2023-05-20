<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "practice";
$conn = "";

try {
    $conn = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

}
catch(mysqli_sql_exception){
 echo"Could Not Connect";
}

?>