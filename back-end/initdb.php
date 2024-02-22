<?php
$con = mysqli_connect("localhost","hospital_felipeVI","1234","hospital_felipe_vi","3308");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
};
mysqli_select_db($con, "hospital_felipe_vi");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>