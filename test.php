<?php

echo 'Hello!!'."<br>\n";

//Змінні
$name='Joe';
$goodbye='Bye-bye';
$age=30;

//Конкатенація
$greeting='Hi, I am '.$name.'. I am '.$age.' years old.';

//Доступ до змінних через подвійні лапки
echo "$greeting $goodbye"."<br>\n";

//Масиви
$colors = array("red", "green", "blue");

//Асоціативні масиви
$person=array("name"=>$name, "lastName"=>"Brown", "age"=>$age);

//explode, implode
$listOfFriends = "Mike, Will, El, Lucas";
$friendsArr = explode(",",$listOfFriends);
$friendsStr = implode(", ", $friendsArr);
echo $friendsStr."<br>\n";

//розіменування змінних
$cityVariable = 'city';
$$cityVariable='Paris'; //city = Paris

//порівняння
if($city==='Paris') {
    echo 'Bonjour!'."<br>\n";
} else {
    echo "Hello!"."<br>\n";
}

//приведення типів
$floatNum = 25.4;
$floatNum = (int)$floatNum;
echo $floatNum."<br>\n";
echo '<a href="oop_basics.php">Go to OOP</a>';
