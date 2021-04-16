<?php
include_once '../autoload.php';

$data = all('students');
$i=1;
while($student = $data->fetch_object()):
?>


<tr>
<td><?php echo $i;
$i++ ?></td>
<td><?php echo $student->name?></td>
<td><?php echo $student->email?></td>
<td><?php echo $student->cell?></td>
<td><?php echo $student->username?></td>
<td><img src="photos/<?php echo $student->photo ?>" width="80" height="80" alt=""></td>


<td>
    <a id="profile" profile_id="<?php echo $student->id?>" class="btn btn-sm btn-info view-btn" href="">View</a>
    <a id="edit" edit_id="<?php echo $student->id?>" class="btn btn-sm btn-warning" href="">Edit</a>
    <a delete_id="<?php echo $student->id?>" delete_photo_fileName="<?php echo $student->photo?>" class="btn btn-sm btn-danger delete-btn" href="">Delete</a>
</td>
</tr>

<?php
endwhile;
