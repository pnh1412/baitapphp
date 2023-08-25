!<?php
//bai tap 1
$date1 = new DateTime('2023-08-02');
$date2 = new DateTime('2023-08-22');

//diff() là phương thức của lớp DateTime dùng để tính khoảng thời gian giữa hai đối tượng DateTime.
$interval = $date2->diff($date1);
echo $interval->days; // Kết quả: 22
echo "<br>"; 


// bai tap 2
$startdate = '2023-08-08';
$dayBefore = -40;
$dayAfter = 40;
$dateAfter = date('Y-m-d' , strtotime($startdate . "$dayAfter days"));
$dateBefore = date('Y-m-d', strtotime($startdate . "$dayBefore days"));
echo "Ngày hiện tại: $startdate\n";
echo "40 ngày trước: $dateBefore\n";
echo "40 ngày sau: $dateAfter\n";

//bai tap 3
echo "today is " . date('Y-m-d') . "<br>";

//bai tap 4
$json = '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": { "Publisher": "Little Brown" }}';

$data = json_decode($json, true);

echo "Title : " . $data['Title'] . "\n";
echo "Author : " . $data['Author'] . "\n";
echo "Publisher : " . $data['Detail']['Publisher'] . "\n";
?>

