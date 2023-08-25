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
        <label>Input your number</label>
        <input type="text" class="form-control" placeholder="Enter your number" name="number" autocomple="off">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number = $_POST["number"];
  echo "Ky tu bạn vừa nhập là: " . $number; // khai bao so hang.
}
echo "</br>";
echo ("Nhap so bang tieng anh output ra so\n");
echo "</br>";
function word_to_number($word) {
  $numbers = array(
      'zero' => '0',
      'one' => '1',
      'two' => '2',
      'three' => '3',
      'four' => '4',
      'five' => '5',
      'six' => '6',
      'seven' => '7',
      'eight' => '8',
      'nine' => '9'
  );
  // check xem co phan tu hay k neu k tra ve rong
  return isset($numbers[$word]) ? $numbers[$word] : '';
}
// xoa ; trong input nhan duoc
$a = explode(';', $number);
// implode noi cac phan tu cua mang lai voi nhau
// array map de ap dung function kia vao mang
$result = implode('', array_map('word_to_number', $a));
echo $result;
?>

