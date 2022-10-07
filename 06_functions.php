<?php
    $y = 12;
    function registerUser($email){
        global $y;
        echo $y;
        echo 'User register'; 
        echo $email . ' registered';
    }
    // registerUser();
    registerUser("@something");
    echo "<br>";
    function sum($n1, $n2){
        return $n1 + $n2;
    }
    sum(5, 5);
    $number = sum(5, 5);
    echo $number;
    // could do it this way function sum($n1 = 4, $n2 = 5) <- would return 9 always
    echo "<br>";
    $multiply = fn($n1, $n2) => $n1 * $n2;
    echo $multiply(9, 9);
?>