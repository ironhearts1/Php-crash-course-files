<?php
// From PHP5 onwards you can write either in procedural or OOP 

class User{
    // properties are attributes that belong to classes
    // Access modifiers = public/private/protected
    // public - can be accessed anywhere
    // private - can only be accessed inside class
    // protected - can only be accessed fron inside the class or by inheritance 
    public $name;
    public $email;
    public $password;

    //Methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

    // Constructors are a method that run initially when class instant is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}

// instatiate(create) a user object
// $user1 = new User();
// var_dump($user1);
// echo "<br>";
// $user1->name = 'Josh';
// var_dump($user1);
// echo "<br>";
// $user1->set_name('Joe');
// var_dump($user1);
// echo "<br>";
// $user2 = new User();
// $user2->set_name('John');
// var_dump($user2);
// echo "<br>";
// echo $user1->get_name();
// echo $user2->get_name();

$user1 = new User('Josh', "Josh@josh.com", "the big J");
echo $user1->email;
echo $user1->name;

//inheritence
class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    public function get_title(){
        return $this->title;
    }
}
$employee1 = new Employee('Jane', 'Jane@Jane.com', '12345', 'Manager');
echo $employee1 -> get_title();
?>