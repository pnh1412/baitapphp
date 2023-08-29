!<?php
//bai tap 1
$date1 = new DateTime('2023-08-02');
$date2 = new DateTime('2023-08-22');
$interval = $date2->diff($date1);
echo $interval->days; 
echo "<br>"; 


// bai tap 2
$startdate = '2023-08-08';
$dayBefore = -40;
$dayAfter = 40;
$dateAfter = date('Y-m-d' , strtotime($startdate . "$dayAfter days"));
$dateBefore = date('Y-m-d', strtotime($startdate . "$dayBefore days"));
echo "Ngày hiện tại: $startdate";
echo "</br>";
echo "40 ngày trước: $dateBefore";
echo "</br>";
echo "40 ngày sau: $dateAfter";
echo "</br>";

//bai tap 3
echo "today is " . date('Y-m-d') . "<br>";

//bai tap 4
$json = '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": { "Publisher": "Little Brown" }}';

$data = json_decode($json, true);

echo "Title : " . $data['Title'];
echo "</br>";
echo "Author : " . $data['Author'];
echo "</br>";
echo "Publisher : " . $data['Detail']['Publisher'];
echo "</br>";

//bai tap 5
$array = array('a' => 31, 'b' => 41, 'c' => 39, 'd' => 40); 
asort($array);
print_r($array);
echo "</br>";

arsort($array);
print_r($array);
echo "</br>";

ksort($array);
print_r($array);
echo "</br>";

krsort($array);
print_r($array);
echo "</br>";


// baitap 6
$baitap6 = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62 , 62, 65, 64, 68, 73, 75, 79, 73 
);
// loai bo phan tu 0 hoac rong ra = array filter
echo array_sum($baitap6) / count(array_filter($baitap6));
echo "</br>";
// sap xep lai mang tu value thap nhat den lon nhat sau do loai bo nhung phan tu lap lai = unique
asort($baitap6);
$unique_array = array_unique($baitap6);
print_r($unique_array);
echo "</br>";
$getFirstArray = array_slice($unique_array, 0, 5, true);
print_r($getFirstArray);
echo "</br>";
$getLastArray = array_slice($unique_array, -5, 5, true);
print_r($getLastArray);

//bai tap 7
function count_array_values($array) {
  // tao 1 cai mang xet neu value cua array ma giong voi ben counted_values thi + len 1 
  $counted_values = array();
  foreach ($array as $value) {
      if (array_key_exists($value, $counted_values)) {
          $counted_values[$value]++;
      } else {
          $counted_values[$value] = 1;
      }
  }
  
  return $counted_values;
}

$array = [1, 2, 3, 4, 2, 2, 5, 6, 2];
$result = count_array_values($array);

foreach ($result as $value => $count) {
  echo "Value $value xuat hien $count trong mang.<br>";
}

?>

