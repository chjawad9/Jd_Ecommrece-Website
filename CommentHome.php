<!DOCTYPE html>
<html>

<head>

  <!-- txtanitmiton -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- <title>Comment System using PHP and Ajax</title> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
  <br />
  <!-- <h2 align="center"><a href="#">Comment System using PHP and Ajax</a></h2> -->
  <br />
  <div class="container">
    <form method="POST" id="comment_form">
      <div class="form-group" data-aos="fade-right">
        <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
      </div>
      <div class="form-group" data-aos="fade-left">
        <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment"
          rows="5"></textarea>
      </div>
      <div class="form-group" data-aos="fade-up">
        <input type="hidden" name="comment_id" id="comment_id" value="0" />
        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
      </div>
    </form>
    <span id="comment_message"></span>
    <br />
    <div id="display_comment"></div>
  </div>
</body>

<!-- text animiton -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>

  AOS.init({
    offset: 300,
    duration: 1000,
  });
</script>

</html>

<script>
  $(document).ready(function () {

    $('#comment_form').on('submit', function (event) {
      event.preventDefault();
      var form_data = $(this).serialize();
      $.ajax({
        url: "add_comment.php",
        method: "POST",
        data: form_data,
        dataType: "JSON",
        success: function (data) {
          if (data.error != '') {
            $('#comment_form')[0].reset();
            $('#comment_message').html(data.error);
            $('#comment_id').val('0');
            load_comment();
          }
        }
      })
    });

    load_comment();

    function load_comment() {
      $.ajax({
        url: "fetch_comment.php",
        method: "POST",
        success: function (data) {
          $('#display_comment').html(data);
        }
      })
    }

    $(document).on('click', '.reply', function () {
      var comment_id = $(this).attr("id");
      $('#comment_id').val(comment_id);
      $('#comment_name').focus();
    });

  });
</script>