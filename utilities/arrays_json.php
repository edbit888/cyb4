<?php


$nums = [1,2,3,44,7,6,5];
//echo $nums[3];
//$summa = 0;
//foreach($nums as $x) {
//echo "$x<br />";
//$summa = $summa + $x;
//$summa += $x;
//}
//echo ($summa);
//вывести только те числа, которые больше 6
foreach($nums as $x) {
if ($x > 6) {
    echo "$x<br />";

}

}

//$people = ["Yuri","Vasya","Yilia"];
//Вывести только тех, чье имя начинается на Y
//    foreach($people as $name) {
//    if (str_starts_with($name, "Yu")) {
//echo "$name<br />";
//
 //   }
//}

//$people = [
  //  ["Yuri","Andrienco",123456],
  //  ["Yuri1","Vasya1",777777],
  //  ["Yuri2","Vasya",300000]
//];

   // foreach($people as $person) {
    //    $firsName = person[0];
   //     $lastName = person[1];
   //     $salary = person[2];
   //     echo "$firsName $lastName has salary $salary";
   // }
    
$people = [
    array("firstName" => "Yuri", "lastName" => "Andrienko", "salary" => 123456),
    array("firstName" => "Yasya", "lastName" => "Pipkin", "salary" => 77777),
    array("firstName" => "Yulia", "lastName" => "Yulkina", "salary" => 300000)

];
       
//foreach($people as $person) {
  //  $firstName = $person["firstName"];
   // $lastName = $person["lastName"];
    //$salary = $person["salary"];
//echo "$firstName $lastName has salary $salary<br />";
//}

echo(json_encode($people));


