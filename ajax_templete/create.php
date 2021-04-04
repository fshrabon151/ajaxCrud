<?php
include_once '../autoload.php';

 $name = $_POST['name'];
 $email = $_POST['email'];
 $cell = $_POST['cell'];
 $username = $_POST['username'];
create("INSERT INTO students (name,email,cell,username)VALUES('$name','$email','$cell','$username')");