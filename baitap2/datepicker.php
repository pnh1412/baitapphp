<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $(function() {
      $('#datepicker').datepicker({
        onSelect: function(dateText, inst) {
          $('#date').val(dateText);
        }
      });
    });
  </script>
</head>

<body>
  <section class="container">
    <h2 class="py-2">Datepicker Form</h2>
    <form class="row" method="post">
      <!-- Di chuyển đoạn mở thẻ <form> xuống đây -->
      <label for="date" class="col-1 col-form-label">Date</label>
      <div class="col-5">
        <div class="input-group date" id="datepicker">
          <input type="text" class="form-control" id="date" name="date" />
          <span class="input-group-append">
            <span class="input-group-text bg-light d-block">
              <i class="fa fa-calendar"></i>
            </span>
          </span>
        </div>
      </div>
      <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </section>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $date = $_POST["date"];
  echo "Ngày bạn vừa chọn là: " . $date;
} else {
  echo "Không có dữ liệu ngày được gửi.";
}


?>
