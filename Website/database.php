<?php
$connection = mysqli_connect("localhost","root","")
or die ("Couldn't connect to server");
$query = "create database if not exists LoginInformation";
mysqli_query($connection, $query)
    or die("Error creating database: " . mysqli_error($connection));
$query = "use LoginInformation";
mysqli_query($connection, $query)
    or die("Error using database");
$query = "create table if not exists Info(username varchar(50) primary key not null ,email varchar(100) not null,password varchar(200) not null)";
mysqli_query($connection, $query)
    or die("Error creating table");
?>