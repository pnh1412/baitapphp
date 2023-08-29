<!DOCTYPE html>
<html>
<head>
    <title>JSON Decoder</title>
</head>
<body>
    <form method="post" action="">
        <label for="json_input">Nhập chuỗi JSON:</label>
        <input type="text" name="json_input" id="json_input" required>
        <button type="submit">Giải mã</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $json_input = $_POST["json_input"];
        $decoded_data = json_decode($json_input, true);

        if ($decoded_data === null) {
            echo "Không thể giải mã chuỗi JSON.";
        } else {
            echo "<h2>Kết quả giải mã:</h2>";
            foreach ($decoded_data as $key => $value) {
                if (is_array($value)) {
                    echo "<h3>$key</h3>";
                    foreach ($value as $sub_key => $sub_value) {
                        echo "$sub_key : $sub_value<br>";
                    }
                } else {
                    echo "$key : $value<br>";
                }
            }
        }
    }
    ?>
</body>
</html>
