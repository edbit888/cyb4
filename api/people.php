<?php
//симуляция - обычно здесь программый код,
//который извлекает данные БД
$people = [
    array("firstName" => "Yuri", "lastName" => "Andrienko", "salary" => 123456),
    array("firstName" => "Yasya", "lastName" => "Pipkin", "salary" => 77777),
    array("firstName" => "Yulia", "lastName" => "Yulkina", "salary" => 300000),
    array("firstName" => "Andry", "lastName" => "Andreev", "salary" => 300000)

];

$leettes = strtolower($_REQUEST["letters"]);

$results = [];
foreach($people as $person){
    if(str_starts_with(strtolower($person["lastName"]), $leettes)){
        array_push($results, $person);

    }


}

echo(json_encode($results));