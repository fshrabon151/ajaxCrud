<?php
include_once '../autoload.php';



/**
 * Isseting Student add form
 */

// get value 
$name = $_POST['name'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$username = $_POST['username'];
$updated_at = date('Y-m-d g:i:h', time());
$id = $_POST['id'];


/**  
 * Form validation
 */

if (!empty($_FILES['new_photo']['name'])) {
    $data = move($_FILES['new_photo'], '../photos/');
    $photo_name = $data['unique_name'];
    unlink('../photos/' . $_POST['old_photo']);
} else {
    $photo_name = $_POST['old_photo'];
}

connect()->query("UPDATE students SET name='$name', email='$email',cell='$cell',username='$username',photo='$photo_name', updated_at='$updated_at' WHERE id='$id'");
