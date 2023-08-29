<!DOCTYPE html>
<html>

<head>
  <title>Calculator</title>
</head>

<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="end_date">Ngày hiện tại:</label>
    <input type="datetime-local" id="end_date" name="end_date" required>
    <br>
    <input type="submit" value="Tính toán">
  </form>

  <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $end_date = new DateTime($_POST["end_date"]);

    // Lấy số ngày trong tháng của ngày hiện tại
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $end_date->format('m'), $end_date->format('Y'));

    echo "Ngày hiện tại: " . $end_date->format('Y-m-d H:i:s');
    echo "</br>";
    echo "Số ngày trong tháng là: " . $daysInMonth;
}
  ?>
</body>

</html>
