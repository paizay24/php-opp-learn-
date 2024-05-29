<?php 

echo "<pre>";

// require_once './classes/Person.php';
// require_once './classes/Phone.php';
// require_once './classes/Db.php';
// require_once'./classes/Db.php';
// require_once "./classes/QueryBuilder.php";
// require_once './classes/TextFilter.php';
// require_once "./classes/BankAccount.php";
require_once "./autoload.php";



// $BankAcc = new BankAccount('pai zay oo',3000);
// $BankAcc->deposit(2000);
// $BankAcc->withdraw(4000);
// echo $BankAcc->onlineDeposit("kpay",5000);

$course = new Course;
print_r($course->select()->all());

// echo $BankAcc->checkBalance();

// $child = new ChildClass();
// print_r($child);

// $m = new Model();
// print_r($m->select()->limit(10)->all());



// $queryBuilder = new QueryBuilder('students');
// $sql = $queryBuilder->select()
//       ->limit(10)
//       ->sql();
// $text = '   Pai Zay Oo     ';
// $tf = new TextFilter($text);
// print_r($tf->trimWhitespace()->toUpperCase());
// $db = new Db();
// $students = $db->all($sql);
// print_r($students);

// // echo "<pre>";

// // $me = new Person('pai',23,'male');
// // print_r($me);
// // echo $me->speak('japanese');

// $db = new Db();
// $students =  $db->all('select * from students LIMIT 10');
// print_r($students);


// $myPhone = new Phone;

// $myPhone->brand = 'Iphone';
// $myPhone->model = 'Iphone 8 plus';
// echo($myPhone->usingInternet());



