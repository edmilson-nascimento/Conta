<?php

try {

    $conn = new PDO('mysql:host=localhost;dbname=conta', 'root', '1234');
    $result = $conn->prepare('select * from item');
    $result->execute();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

$test = $result->fetchAll();

foreach ($test as & $t) {

    $total = $t[2] * $t[3];
    array_push($t, $total);
    
    //$new = array_push($t, "garantia" => $total);
    
}

    //array_push($test, array("garantia" => $total ));

print '<pre>';
print_r($test);
print '</pre>';

//$array = array('foo');
//foreach ($array as $k => &$item) {
//  $array[$k] = 'bar';
//}

$array = array_map('perform_changes_on', $test);
print_r($array);