<?php

    $fruits = ['apple', 'orange', 'pear'];

    //get length
    echo count($fruits);
    echo "<br>";

    //search array
    var_dump(in_array('apple', $fruits));
    echo "<br>";

    // add to array
    $fruits[] = 'grape';
    print_r($fruits);
    array_push($fruits, 'blueberry', 'strawberry');
    echo "<br>";
    print_r($fruits);
    array_unshift($fruits, "mango");
    echo "<br>";
    print_r($fruits);

    //remove from array
    array_pop($fruits);
    echo "<br>";
    print_r($fruits);
    array_shift($fruits);
    echo "<br>";
    print_r($fruits);
    // unset($fruits[2]);
    echo "<br>";
    // print_r($fruits);

    // split into 2 chunks
    $chunked_array[] = array_chunk($fruits, 2);
    print_r($chunked_array);
    echo "<br>";

    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];
    $arr3 = array_merge($arr1, $arr2);
    print_r($arr3);
    echo "<br>";
    $arr4 = [...$arr1, ...$arr2];
    print_r($arr4);
    echo "<br>";

    // basically takes 2 arrays and turns them into an object
    
    $a = ['green', 'red', 'yellow'];
    $b = ['avacado', 'apple', 'banana'];

    $c = array_combine($a, $b);
    print_r($c);
    echo "<br>";

    $keys = array_keys($c);
    print_r($keys);
    echo "<br>";

    //flips the keys with the values
    $flipped = array_flip($c);
    print_r($flipped);
    echo "<br>";

    //get all nums within range
    $numbers = range(1, 20);
    print_r($numbers);
    echo "<br>";

    //array map
    $newNumbers = array_map(function($number){
        return "Number ${number}";
    }, $numbers);
    print_r($newNumbers);
    echo "<br>";

    //array filter
    $lessThan10 = array_filter($numbers, fn($number)=>
    $number <=10);
    print_r($lessThan10);
    echo "<br>";

    //array reduce
    $sum = array_reduce($numbers, fn($carry, $number) =>
    $carry + $number);
    var_dump($sum);


?>