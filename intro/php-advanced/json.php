<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

// The json_encode() function is used to encode a value to JSON format.
echo json_encode($age) . "<br>";

// encode an indexed array into json
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars) . "<br>";

// json decode - used to decode a JSON object into a PHP object or an associative array.
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj, true));
echo "<br>";

// accessing the decoded values
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter . "<br>";
echo $obj->Ben . "<br>";
echo $obj->Joe . "<br>";

// accessing values from an associative array
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

echo $arr["Peter"] . "<br>";
echo $arr["Ben"] . "<br>";
echo $arr["Joe"] . "<br>";

// looping through the decoded values
foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}

// looping through the values of an associative array
foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>