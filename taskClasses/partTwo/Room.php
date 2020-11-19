<!--1) под php v7.3
    2) Нужно ли ограничивать количество людей, дверей, окон в комнате?
    3) Пока не работает removePerson, нужно ли менять регистр при проверке имени?
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

    public function addWindow(int $quantity = 1)
    {
        $window = $this->getWindow();
        $window += $quantity;
        $this->setWindow($window);
        return $this->getWindow();
    }

    public function removeWindow($quantity)
    {
        $window = $this->getWindow();
        if ($window > 0) {
            $out = --$this->window;
        } else {
            $out = "В комнате нет окон";
        }
        return $out;
    }

    /*
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
          if (count($this->person) > 0) {
              $out = "Свет включен!";
          } else {
              $out = "Свет выключен!";
          }
          return $out;
      }*/

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
$room1->addPerson(["Ivan", "Oleg", "Helen"]);
$room1->addPerson(["Ivan", "Oleg", "Helen"]);
$room1->addWindow(3);
$room1->pre($room1);
$room1->removePerson(["Ivan"]);
