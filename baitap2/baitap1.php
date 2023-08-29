<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start_date = new DateTime($_POST["start_date"]);
        $end_date = new DateTime($_POST["end_date"]);
        $interval = $start_date->diff($end_date);
        echo "Ngày bắt đầu: " . $start_date->format('Y-m-d H:i:s') . "<br>";
        echo "Ngày kết thúc: " . $end_date->format('Y-m-d H:i:s') . "<br>";
        echo "Khoảng thời gian cach nhau la: " . $interval->format('%y năm, %m tháng, %d ngày, %h giờ, %i phút, %s giây');
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="start_date">Ngày truoc do:</label>
        <input type="datetime-local" id="start_date" name="start_date" required>
        <br>
        <label for="end_date">Ngày hien tai:</label>
        <input type="datetime-local" id="end_date" name="end_date" required>
        <br>
        <input type="submit" value="Tính toán">
    </form>
</body>
</html>
