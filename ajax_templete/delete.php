<?php
include_once '../autoload.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $photo_id = $_POST['photo_id'];
    unlink('../photos/' . $photo_id);
    delete('students', $id);
}

