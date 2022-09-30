<?php 
//simple arrays
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');
var_dump($numbers);
echo $fruits[1];
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green',
];
var_dump($colors);
$person = [
    'first_name' => 'Josh',
    'last_name' => 'Massanopoli',
    'email' => 'josh@email.com'
];
$people = [
    [
        'first_name' => 'Josh',
        'last_name' => 'Massanopoli',
        'email' => 'josh@email.com'
    ],
    [
        'first_name' => 'john',
        'last_name' => 'doe',
        'email' => 'johndoe@email.com'
    ],
    [
        'first_name' => 'jane',
        'last_name' => 'duh',
        'email' => 'janeduh@email.com'
    ],

];
echo "<br>";
echo $people[1]['email'];
echo "<br>";
var_dump(json_encode($people))
?>