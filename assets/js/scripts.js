(function ($) {
  $(document).ready(function () {

    $('#student_photo').change(function (e) {
      let file_url = URL.createObjectURL(e.target.files[0]);
      $('#load_student_photo').attr('src', file_url);
      $('#student_up').hide();
    });

  });
})(jQuery);
