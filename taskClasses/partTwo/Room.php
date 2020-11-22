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
    /**
     * @var array
     */
    private $person;
    /**
     * @var int
     */
    private $window;
    /**
     * @var int
     */
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
    public function setPerson(array $person)
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
    public function setWindow(int $window)
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
    public function setDoor(int $door)
    {
        $this->door = $door;
    }


    /**
     * Room constructor.
     * @param array $person
     * @param int $window
     * @param int $door
     */
    public function __construct(array $person, int $window, int $door)
    {
        $this->person = $person;
        $this->window = $window;
        $this->door = $door;
    }

    /**
     * @param array $name
     * @return array|string
     */
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

    /**
     * @param array $name
     * @return Room|void
     */
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

    /**
     * @param int $quantity
     * @return int
     */
    public function addWindow(int $quantity = 1)  //добавляем окна
    {
        $window = $this->getWindow();
        $window += $quantity;
        $this->setWindow($window);
        return $this->getWindow();
    }

    /**
     * @param int $quantity
     * @return int|string
     */
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

    /**
     * @param int $quantity
     * @return int
     */
    public function addDoor(int $quantity = 1)  //добавляем двери
    {
        $door = $this->getDoor();
        $door += $quantity;
        $this->setDoor($door);
        return $door;
    }

    /**
     * @param int $quantity
     * @return int|string
     */
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

    /**
     * @return string
     */
    public function checkLight()    //проверяем свет
    {
        if (count($this->getPerson()) > 0) {
            $out = "Свет включен!";
        } else {
            $out = "Свет выключен!";
        }
        return $out;
    }

    /**
     * @return string
     */
    public function roomStatus()    //проверяем статус комнаты
    {
        $personCount = count($this->getPerson());
        $lightStatus = $this->checkLight();
        return "Количество человек в комнате {$personCount}. $lightStatus";
    }

    /**
     * @param $var
     */
    public function pre($var)
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
