<?php
session_start();

$connection = mysqli_connect(
    "localhost", //因數據庫而異
    "root", //因數據庫而異
    "root", //因數據庫而異
    "tuckshop" //因數據庫而異
);
if(!$connection) die("Cannot connect to DB");

?>
