<?php
include_once '../autoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$username = $_POST['username'];
$photo = $_POST['photo'];

// Upload ptofile photo			
$data = move($_FILES['photo'], '../photos/');

// get function 
$unique_name = $data['unique_name'];

create("INSERT INTO students (name,email,cell,username,photo)VALUES('$name','$email','$cell','$username','$unique_name')");
