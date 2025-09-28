<?php
session_start();

$connection = mysqli_connect(
    "localhost",
    "root",
    "root",
    "tuckshop"
);
if(!$connection) die("Cannot connect to DB");
?>