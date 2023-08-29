<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="mb-3">
        <label>Input your first array</label>
        <input type="text" class="form-control" placeholder="Enter your number" name="arr1" autocomple="off">
      </div>
      <div class="mb-3">
        <label>Input your second array</label>
        <input type="text" class="form-control" placeholder="Enter your number" name="arr2" autocomple="off">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$arr1 = $_POST["arr1"];
$arr2 = $_POST["arr2"];
  echo "Mang bạn vừa nhập là: " . $arr1; // khai bao so hang.
  echo "Mang bạn vừa nhập là: " .$arr2; // khai bao so hang.
}

$arr1 = json_decode($arr1);
echo"</br>";
$arr2 = json_decode($arr2);
echo"</br>";

function removeDuplicates($arr1, $arr2) {
    $result = array_diff($arr1, $arr2);
    return array_values($result);
}

$output = removeDuplicates($arr1, $arr2);

echo "Output: Array ([0]=>".implode(", ", $output).")";
?>

