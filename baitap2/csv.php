<!DOCTYPE html>
<html>

<head>
    <title>Upload CSV File</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

</head>

<body>
    <h1>Upload a CSV File</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="csvFile">Select a CSV file:</label>
        <input type="file" name="csvFile" id="csvFile" accept=".csv">
        <br>
        <button type="submit">Upload</button>
    </form>
    <table style="border:1px solid black">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_FILES["csvFile"]) && $_FILES["csvFile"]["error"] == UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES["csvFile"]["tmp_name"];
                $fileName = $_FILES["csvFile"]["name"];
                $fileSize = $_FILES["csvFile"]["size"];

                // Kiểm tra định dạng tệp
                $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
                if ($fileExtension !== "csv") {
                    echo "Only CSV files are allowed.";
                } else {
                    // Đọc và xử lý dữ liệu từ tệp CSV
                    $fileContent = file_get_contents($fileTmpPath);
                    $lines = explode("\n", $fileContent);

                    // Bắt đầu tạo bảng HTML
                    echo "<h2>CSV Content:</h2>";
                    echo "<table border='1'>";
                    echo "<thead>
            <tr>
                <th><b>ID</b></th>
                <th><b>Brand Name</b></th>     
                <th><b>Register</b></th>
                <th><b>Time</b></th>
                <th><b>Enterprise</b></th>
            </tr>
        </thead>";
                    foreach ($lines as $line) {
                        $fields = str_getcsv($line);
                        echo "<tr>";
                        foreach ($fields as $field) {
                            echo "<td>" . htmlspecialchars($field) . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>"; // Kết thúc bảng HTML
                }
            } else {
                echo "Error uploading file.";
            }
        }
        ?>
</body>

</html>
