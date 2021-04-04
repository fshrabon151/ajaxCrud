<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Title</title>

  <!-- Animate CSS  -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- icons -->
  <link rel="stylesheet" href="assets/fonts/icons/font-awesome/css/all.css">
  <!-- owl carousel  -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Main css file  -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Responsive css  -->
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

  <div class="menu my-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <a id="all" class="btn btn-primary btn-sm" href="">All Student</a>
          <a id="add_student" class="btn btn-primary btn-sm" href="">Add New Student</a>
          <a id="profile" class="btn btn-primary btn-sm" href="">Profile</a>
        </div>
      </div>
    </div>
  </div>


  <app></app>











  <!-- jQuery  -->
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <!-- sweetalert js  -->
  <script src="assets/js/sweetalert.min.js"></script>
  <!-- Bootstrap 5  -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!-- Owl carousel  -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- jQuery Filter Plugins  -->
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <!-- wow js  -->
  <script src="assets/js/wow.js"></script>
  <!-- Main script  -->
  <script src="assets/js/scripts.js"></script>

  <script>
    // showing data from create.php file 
    $('#add_student').click(function() {

      $.ajax({
        url: 'create.php',
        success: function(data) {
          $('app').html(data);
        }
      });

      return false;
    });

    // showing data from all.php file 

    $('#all').click(function() {
      tableData();
      allData();
      return false;
    });


    // showing data from profile.php file 

    $('#profile').click(function() {
      $.ajax({
        url: 'profile.php',
        success: function(data) {
          $('app').html(data);
        }
      });

      return false;
    });

    // for showing table data 
    tableData();

    function tableData() {
      $.ajax({
        url: 'all.php',
        success: function(data) {
          $('app').html(data);
        }
      });
    }


    // taking data from form 

    $(document).on('submit', '#student_form', function() {
      let name = $('#name').val();
      let email = $('#email').val();
      let cell = $('#cell').val();
      let username = $('#username').val();

      if (name == '' || email == '' || cell == '' || username == '') {

        swal({
          title: 'Opps',
          text: 'All feilds are requred !',
          icon: 'warning',
          button: 'Go'
        });
      } else {

        $.ajax({

          url: 'ajax_templete/create.php',
          method: 'POST',
          data: {
            name: name,
            email: email,
            cell: cell,
            username: username
          },
          success: function(data) {
            swal('Done', 'Student added successful !', 'success');
            $('#name').val('');
            $('#email').val('');
            $('#cell').val('');
            $('#username').val('');
          }



        });
      }
      return false;
    });

    // showing data from databse 

    allData();

    function allData() {
      $.ajax({
        url: 'ajax_templete/all_student.php',
        success: function(data) {
          $('#all_student_data').html(data);
        }
      });
    }

    // deleting data from database

    $(document).on('click', 'a.delete-btn', function() {

      let id = $(this).attr('delete_id');

      swal({
        title: 'Are you sure?',
        text: 'Delete student data',
        icon: 'warning',
        buttons: true,
        dangerMode: true
      }).then((conf) => {

        if (conf) {

          $.ajax({
            url: 'ajax_templete/delete.php',
            method: 'POST',
            data: {
              id: id
            },
            success: function(data) {
              swal({
                title: 'Done',
                text: 'Student Data Deleted successfully',
                icon: 'success'
              });

              allData();
            }

          });

        } else {
          swal({
            title: 'Safe',
            text: 'Student data safe now',
            icon: 'success'
          });
        }
      });

      return false;

    });
  </script>

</body>



</html>