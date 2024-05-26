<?php 

echo "<pre>";

// require_once './classes/Person.php';
// require_once './classes/Phone.php';
require_once './classes/Db.php';

// echo "<pre>";

// $me = new Person('pai',23,'male');
// print_r($me);
// echo $me->speak('japanese');

$db = new Db();
$students =  $db->all('select * from students LIMIT 10');
print_r($students);


// $myPhone = new Phone;

// $myPhone->brand = 'Iphone';
// $myPhone->model = 'Iphone 8 plus';
// echo($myPhone->usingInternet());



