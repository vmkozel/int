<!--1) под php v7.3
    2) Нужно ли ограничивать количество людей, дверей, окон в комнате?
    3) В функции removeDoor проверку делать так $this->door > 0, или правильнее $this->door>=1?
    4) Пока не работает removePerson
-->

<?php


class Room
{
    protected $person;
    protected $window;
    protected $door;


    public function __construct(array $person, int $window, int $door)
    {
        $this->person = $person;
        $this->window = $window;
        $this->door = $door;
    }

    public function addPerson(string $name)
    {
        if ($this->door > 0) {
            $this->person[] = $name;
        } else {
            return "В комнате нет дверей! В нее нельзя добавить человека.";
        }
        return $this->person;
    }

    public function removePerson(string $name)
    {
        if ($this->door > 0) {
            /* if (count($this->person) == 0) {
                 return "В комнате нет людей";
             } else {*/
            foreach ($this->person as $key => $personName) {
                if ($personName == $name) {
                    $this->person = array_splice($this->person, $key, 1);
//                    unset($this->person[$key]);
                } else {
                    return "В комнате нет человека с именем {$name}";
                }
            }
//            }
        } else return "В комнате нет дверей!";
        return $this->person;
    }

    public
    function addWindow()
    {
        return ++$this->window;
    }

    public
    function removeWindow()
    {
        if ($this->window > 0) {
            $out = --$this->window;
        } else {
            $out = "В комнате нет окон";
        }
        return $out;
    }

    public
    function addDoor()
    {
        return ++$this->door;
    }

    public
    function removeDoor()
    {
        if ($this->door > 0) {
            $out = --$this->door;
        } else {
            $out = "В комнате нет дверей";
        }
        return $out;
    }

    public
    function checkLight()
    {
        if ($this->person > 0) {
            $out = "Свет включен!";
        } else {
            $out = "Свет выключен!";
        }
        return $out;
    }

    public
    function roomStatus()
    {
        $personCount = count($this->person);
        $lightStatus = $this->checkLight();
        return "Количество человек в комнате {$personCount}. $lightStatus";
    }

    public
    function pre($var)
    {
        echo "<pre>";
        print_r($var);
        echo "<pre>";
    }
}

$room1 = new Room([], 2, 1);
$room1->addPerson('Ivan');
$room1->pre($room1);
$room1->pre($room1);
$room1->removePerson("Ivan");
$room1->pre($room1);
$room1->removeWindow();
$room1->pre($room1);
$room1->removeDoor();
$room1->removeDoor();
$room1->pre($room1);
$room1->pre($room1->roomStatus());
