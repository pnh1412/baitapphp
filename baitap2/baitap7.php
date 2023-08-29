<!DOCTYPE html>
<html>

<head>
  <title>JSON Decoder</title>
</head>

<body>
  <form method="post" action="">
    <label for="array_input">Nhập vào một mảng:</label>
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
    print_r($map_array);

    function count_array_values($map_array)
    {
      // tao 1 cai mang xet neu value cua array ma giong voi ben counted_values thi + len 1 
      $counted_values = array();
      foreach ($map_array as $value) {
        if (array_key_exists($value, $counted_values)) {
          $counted_values[$value]++;
        } else {
          $counted_values[$value] = 1;
        }
      }

      return $counted_values;
    }

    $result = count_array_values($map_array);

    foreach ($result as $value => $count) {
      echo "Value $value xuat hien $count trong mang.<br>";
    }
  }
  ?>

</body>

</html>
