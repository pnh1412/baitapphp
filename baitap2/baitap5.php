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
function displayArray($label, $array) {
    echo "<h3>$label</h3>";
    print_r($array);
    echo "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array_input = trim($_POST["array_input"]);
    $array_input = preg_replace('/\s+/', ' ', $array_input); // Loại bỏ khoảng trắng thừa
    $array_pairs = explode(' ', $array_input);

    // Tạo mảng liên hợp từ cặp key-value
    $array = [];
    for ($i = 0; $i < count($array_pairs); $i += 3) {
        $key = trim($array_pairs[$i], "'");
        $key = ltrim($key, "("); // Loại bỏ dấu "(" nếu có
        $key = ltrim($key, "'"); // Loại bỏ dấu "'" nếu có
        $value = intval($array_pairs[$i + 2]);
        $array[$key] = $value;
    }

    displayArray("Mảng ban đầu", $array);

    // Sắp xếp mảng theo giá trị tăng dần
    asort($array);
    displayArray("Tăng dần theo giá trị", $array);

    // Sắp xếp mảng theo key tăng dần
    ksort($array);
    displayArray("Tăng dần theo key", $array);

    // Sắp xếp mảng theo giá trị giảm dần
    arsort($array);
    displayArray("Giảm dần theo giá trị", $array);

    // Sắp xếp mảng theo key giảm dần
    krsort($array);
    displayArray("Giảm dần theo key", $array);
}
?>

</body>
</html>
