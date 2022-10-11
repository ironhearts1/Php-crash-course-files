<?php 

    $string= 'Hello world';
    echo strlen($string);
    echo "<br>";
    echo strpos($string, 'o');
    echo strrpos($string, 'o');
    echo strtolower($string);
    echo strtoupper($string);
    echo str_replace('world', 'everyone', $string);
    echo "<br>";
    echo substr($string, 0, 5);
    echo "<br>";
    echo substr($string, 5);
    if (str_starts_with($string, "Hello")){
        echo 'Yes!';
    }
    if (str_ends_with($string, 'ld')){
        echo '<br>';
        echo 'also yes';
    }
    $string2 = '<script>alert(1)</script>';
    echo htmlspecialchars($string2);
    printf('%s likes to %s', 'Brad', "code");
    printf('1+1 = %d', 1+1);
?>