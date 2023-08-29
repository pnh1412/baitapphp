<!DOCTYPE html>
<html>

<head>
  <title>JSON Decoder</title>
</head>

<body>
  <form method="post" action="">
    <label for="array_input">Nhập vào một mảng nhiet do:</label>
    <input type="text" name="array_input" id="array_input" required>
    <button type="submit">Giải mã</button>
  </form>

  <?php
  function displayArray($label, $array)
  {
    echo "<h3>$label</h3>";
    print_r($array);
    echo "<br>";
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array_input = trim($_POST["array_input"]);
    displayArray("Mảng ban đầu", $array_input);
    echo "</br>";
    $array = trim($array_input, "[]");
  // Tách chuỗi thành mảng các số nguyên
    $numberStrings = explode(", ", $array);
    $map_array = array_map('intval', $numberStrings);
    $unique_array = array_unique($map_array);
    asort($unique_array);
    print_r($unique_array);
    echo "</br>";
    $sum = array_sum($unique_array);
    echo $sum;
    echo "</br>";
    $count = count($unique_array);
    echo $count;
    echo "</br>";
    echo $avg = $sum / $count;
    echo "</br>";
    $getFirstArray = array_slice($unique_array, 0, 5, true);
    print_r($getFirstArray);
    echo "</br>";
    $getLastArray = array_slice($unique_array, -5, 5, true);
    print_r($getLastArray);
  }
  ?>

</body>

</html>
