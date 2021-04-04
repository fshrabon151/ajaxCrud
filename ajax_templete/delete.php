<?php
include_once '../autoload.php';

$id = $_POST['id'];
delete('students',$id);

