<?php 
// data types : string, int, float, bool, array, obj, NULL, resourse
// variables must be prefixed with $ and start with letter or underscore

$name = "brad";
echo $name;
$age = 40;
echo $age;
$has_kids = true;
$do_not_have_kids = false;
echo $has_kids;
var_dump($do_not_have_kids);
echo "<br>";
echo '$name is $age years old';
echo "<br>";
echo $name . " is " . $age . " years old";
echo "<br>";
echo "${name} is ${age} years old";
echo "<br>";
echo 5+5;
echo '5' + '5';
/*how to make constants */  //convention is to use uppcase for name;
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo "<br>";
echo HOST;
echo DB_NAME;
?>