<?php
class Person {
    use AgeConverter;
    public $name;
    private $age;
    private $city;
    /**
     * @param $name
     * @param $age
     * @param $city
     */
    public function __construct($name, $age, $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }
    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    public function welcomePerson() {
        echo "Hello, $this->name!";
    }
    public static function isAdult($age) {
        return $age>=18;
    }

    public function __toString()
    {
        return "$this->name, $this->age. Location: $this->city";
    }

}
class Student extends Person implements Celebrate {
    private $points;
    /**
     * @param $name
     * @param $age
     * @param $city
     * @param $points
     */
    public function __construct($name, $age, $city, $points)
    {
        parent::__construct($name, $age, $city);
        $this->points = $points;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    public function celebrateBirthday()
    {
        $currAge = $this->getAge();
        $this->setAge($currAge+1);
        echo 'You\'re '.$this->getAge().' now!';
    }
}

interface Celebrate {
    public function celebrateBirthday();
}
trait AgeConverter {
    public function getAge() {
        return $this->getAge();
    }
    public function getAgeInMonth() {
        return $this->getAge()*12;
    }
    public function getAgeInWeeks() {
        return $this->getAgeInMonth()*4;
    }
}

$person1 = new Person("Mike", 15, "London");
$student1 = new Student("Alice", 20, "Barcelona", "95");

$student1->celebrateBirthday();
echo "<br>\n";
echo $person1->getAgeInMonth();