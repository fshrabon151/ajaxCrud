<?php
include_once 'autoload.php';



/**
 * Isseting Student add form
 */


if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $edit_id = find('students', $id);
}
if(isset($_POST['submit']))
    $$edit_id="";

?>

<div class="container">
    <div class="card shadow">
        <?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>
        <div class="card-body">
            <h2>Edit Student</h2>
            <form id="student_form_edit" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input name="name" type="text" value="<?php echo $edit_id->name; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="<?php echo $edit_id->email; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Cell</label>
                    <input type="text" name="cell" value="<?php echo $edit_id->cell; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" value="<?php echo $edit_id->username; ?>" name="username">
                </div>

                <div class="form-group">
                    <label for="">Profile Photo</label> <br>
                    <img id="load_student_photo" style="max-width:300px ;" src="photos/<?php echo $edit_id->photo; ?>" alt="">
                    <br>
                    <label for="student_photo" id="student_up"> <img width="100" src="media/uloadphoto.png" alt=""></label>
                    <input id="student_photo" name="new_photo" value="" style="display:none;" class="form-control" type="file">
                    <input type="hidden" value="<?php echo $edit_id->photo; ?>" name="old_photo">
                    <input type="hidden" value="<?php echo $edit_id->id; ?>" name="id">
                </div>

                <div class="form-group mt-2">
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#student_photo').change(function(e) {
        let file_url = URL.createObjectURL(e.target.files[0]);
        $('#load_student_photo').attr('src', file_url);
        $('#student_up').hide();
    });
</script>