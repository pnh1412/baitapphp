


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
    echo "Số bạn vừa nhập là: " . $number;  // khai bao so hang.
  }
  echo "</br>";
  echo("Ve tam giac can:\n");
  echo "</br>";
  for($i = 1; $i <= $number; $i++) {
     for($j = 1; $j <= ($number-$i); $j++)
        echo" ";
        echo "</br>";

     for($j = 1; $j <= $i; $j++)
        echo"* ";
     echo"\n";
  }
?>
