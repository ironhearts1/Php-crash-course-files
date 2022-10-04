<?php
    for($x = 0; $x < 10; $x++){
        echo 'Number ' . $x . '<br>';
    }
    $x = 1;
    while ($x <= 15) {
        echo 'While Number ' . $x . '<br>';
        $x = $x + 1;
    }
    // do ... while are same as JS not including that

    $posts = ['First post', 'Second post', 'Third post'];

    for ($x = 0; $x < count($posts); $x++){
        echo $posts[$x] . "<br>";
    }

    foreach($posts as $post){
        echo 'foreach ' . $post . '<br>';
    }
    foreach($posts as $index => $post){
        echo $index . ' foreach ' . $post . '<br>';
    }

    $person =[
        'first_name' => 'bob',
        'last_name' => 'mcdoogle',
        'email' => 'bobbymc@gmail.com',
    ];
    foreach ($person as $key => $value){
        echo "$key - $value<br>";
    }
?>