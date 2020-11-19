<!--1) под php v7.3
    2) Нужно ли ограничивать количество людей, дверей, окон в комнате?
         check
        +    добавляем человека
        +    удаляем человека
        +    добавляем окна
        +    удаляем окна
        +    удаляем двери
        +    добавляем двери
        +    проверяем свет
        +    провеярем статус комнаты

-->

<?php


class Room
{
    private $person;
    private $window;
    private $door;

    /**
     * @return array
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param array $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }

    /**
     * @return int
     */
    public function getWindow()
    {
        return $this->window;
    }

    /**
     * @param int $window
     */
    public function setWindow($window)
    {
        $this->window = $window;
    }

    /**
     * @return int
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * @param int $door
     */
    public function setDoor($door)
    {
        $this->door = $door;
    }


    public function __construct(array $person, int $window, int $door)
    {
        $this->person = $person;
        $this->window = $window;
        $this->door = $door;
    }

    public function addPerson(array $name) //добавляем человека
    {
        $personInRoom = $this->getPerson();
        if ($this->getDoor() > 0) {
            foreach ($name as $key => $person) {
                $personInRoom[] = $person;
            }
            $this->setPerson($personInRoom);
        } else {
            return "В комнате нет дверей! В нее нельзя добавить человека.";
        }
        return $this->person;
    }

    public function removePerson(array $name)  //удаляем человека
    {
        $personInRoom = $this->getPerson();
        foreach ($name as $key => $value) {
            foreach ($personInRoom as $inRoomKey => $person) {
                if ($value == $person) {
                    array_splice($personInRoom, $inRoomKey, 1);
                }
            }
        }
        return $this - $this->setPerson($personInRoom);
    }

    public function addWindow(int $quantity = 1)  //добавляем окна
    {
        $window = $this->getWindow();
        $window += $quantity;
        $this->setWindow($window);
        return $this->getWindow();
    }

    public function removeWindow(int $quantity = 1)     //удаляем окна
    {
        $window = $this->getWindow();
        if ($window > 0) {
            $out = $window - $quantity;
        } else {
            $out = "В комнате нет окон";
        }
        return $out;
    }

    public function addDoor(int $quantity = 1)  //добавляем двери
    {
        $door = $this->getDoor();
        $door += $quantity;
        $this->setDoor($door);
        return $door;
    }

    public function removeDoor(int $quantity = 1)   //удаляем двери
    {
        $door = $this->getDoor();
        if ($door > 0) {
            $door = $door - $quantity;
            if ($door < 0) {
                $door = 0;
            }
            $this->setDoor($door);
        } else {
            return "В комнате нет дверей";
        }
        return $door;
    }

    public function checkLight()    //проверяем свет
    {
        if (count($this->getPerson()) > 0) {
            $out = "Свет включен!";
        } else {
            $out = "Свет выключен!";
        }
        return $out;
    }

    public function roomStatus()    //проверяем статус комнаты
    {
        $personCount = count($this->getPerson());
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
$room1->addPerson(["Ivan", "Oleg", "Helen"]);
$room1->addPerson(["Ivan", "Oleg", "Helen"]);
$room1->addWindow(3);
$room1->pre($room1);
$room1->removePerson(["Ivan"]);
$room1->addDoor(4);
$room1->pre($room1);
$room1->removeDoor(10);
echo $room1->checkLight();
echo $room1->roomStatus();
$room1->pre($room1);
