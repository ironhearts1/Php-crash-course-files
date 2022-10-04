<?php

$age = 20;
if ($age >= 18){
    echo 'you are old enough to vote';
} else {
    echo 'sorry, you arent old enough to vote';
}
echo "<br>";
$t = date("H");
if($t < 12){
    echo 'Good Morning';
}
elseif($t < 17){
    echo 'Good Afternoon';
}
else {
    echo 'Good Evening';
}
echo $t;

$posts = ['First Post'];
// if(!empty($posts)){
//     echo $posts[0];
// }else{
//     echo 'No posts';
// }
echo !empty($posts) ? $posts[0] : 'No posts';
$firstPost = $posts[0] ?? null;
echo $firstPost;
echo "<br>";

$favcolor = 'red';
switch($favcolor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    default:
        echo 'Your favorite color is not red or blue';
}


?>