<?php
//get data through URLS and forms using $_GET and $_Post
if (isset($_POST['sumbit'])){
    echo $_POST["name"];
    echo $_POST["age"]; 
}

?>

<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?name=Josh&age=30">Click</a>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Sumbit" name="sumbit">
</form>