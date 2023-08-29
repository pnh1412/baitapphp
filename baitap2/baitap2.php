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
    $dayBefore = new DateInterval('P40D');
    $dayAfter = new DateInterval('P40D');

    $dateBefore = clone $end_date;
    $dateBefore->sub($dayBefore);

    $dateAfter = clone $end_date;
    $dateAfter->add($dayAfter);

    echo "Ngày hiện tại: " . $end_date->format('Y-m-d H:i:s');
    echo "</br>";
    echo "40 ngày trước: " . $dateBefore->format('Y-m-d H:i:s');
    echo "</br>";
    echo "40 ngày sau: " . $dateAfter->format('Y-m-d H:i:s');
    echo "</br>";
  }
  ?>
</body>

</html>
