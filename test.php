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

//підрахувати кількість входжень підрядка у рядок
$str = "apple, banana, orange, apple";
$count = substr_count($str, "apple"); // $count = 2

//замінити всі входження підрядка на інший підрядок
$str = "Hello world!";
$new_str = str_replace("world", "everybody", $str); // $new_str = "Hello everybody!"



//розіменування змінних
$cityVariable = 'city';
$$cityVariable='Paris'; //city = Paris

//порівняння
if($city==='Paris') {
    echo 'Bonjour!'."<br>\n";
} else {
    echo "Hello!"."<br>\n";
}

$a = 5;
$b = "5";

// Нестроге порівняння
if ($a == $b) {
    echo "\$a == \$b: true" . "<br>\n";
} else {
    echo "\$a == \$b: false" . "<br>\n";
}

// Строге порівняння
if ($a === $b) {
    echo "\$a === \$b: true" . "<br>\n";
} else {
    echo "\$a === \$b: false" . "<br>\n";
}


//приведення типів
$floatNum = 25.4;
$floatNum = (int)$floatNum;
echo $floatNum."<br>\n";
echo '<a href="oop_basics.php">Go to OOP</a>';
