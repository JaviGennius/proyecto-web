<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$con = mysqli_connect("localhost","root","","Hospital_Felipe_VI","3306");



if (mysqli_connect_errno()){
    //echo "Failed to connect to MySQL: "; 
    //mysqli_connect_errorno();
};
//mysql_select_db($con, "Hospital_Felipe_VI");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);



