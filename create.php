<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <h2>Add Student</h2>
            <form id="student_form" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input id="name" name="name" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Cell</label>
                    <input type="text" name="cell" id="cell" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>

                <div class="form-group">
                    <label for="">Profile Photo</label> <br>
                    <img id="load_student_photo" style="max-width:300px;" src="" alt="">
                    <br>
                    <label for="student_photo" id="student_up"> <img width="100" src="media/uloadphoto.png" alt=""></label>
                    <input id="student_photo" name="photo" value="" style="display:none;" class="form-control" type="file">
                </div>

                <div class="form-group mt-2">
                    <input type="submit" class="btn btn-primary" value="Sign Up">
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