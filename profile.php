<?php
  include_once 'autoload.php';

  if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $student = find('students', $id);
    
}


?>

<div class="mx-auto" style="width:450px">
  <div class="card shadow">
    <div class="card-body">
      <h5 class="m-3 text-center">User profile</h5>
      <img class="simg shadow mb-4" src="photos/<?php echo $student->photo ?>"  alt="">
      <div class="text-center">
      <h3><?php echo $student->name ?></h1>
      <h5><?php echo $student->username ?></h3>
      </div>

      <table class="table">


        <tr>
          <td>Email</td>
          <td><?php echo $student->email ?></td>
        </tr>

        <tr>
          <td>Phone</td>
          <td><?php echo $student->cell ?></td>
        </tr>
      </table>
      <a id="back" href="#" class="btn btn-sm btn-primary">Back</a>
    </div>
  </div>
</div>