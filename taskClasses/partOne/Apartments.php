<!--
    Создать 10 классов.
    + У каждого класса должно быть 3 характерных ему свойства.
    + У каждого класса должно быть должны быть описаны типы свойств в аннотациях.
    + У каждого класса должно быть сеттеры и геттеры для всех свойст
    + У каждого класса должны быть 2 публичных метода характерных этому классу и один приватный
    5 классов должны содержать в себе в свойстве другой класс ( например класс клавиатура содержит свойство - массив классов кнопок, или класс машина содержит в себе свойство двигатель(другой класс)
Квартира и комнаты

-->

<?php


class Apartments
{
    /**
     * @var int
     */
    protected $numOfRooms;
    /**
     * @var int
     */
    protected $floor;
    /**
     * @var int
     */
    protected $balcony;
    /**
     * @var string
     */
    protected $address;

    /**
     * Apartment constructor.
     * @param int $numOfRooms
     * @param int $floor
     * @param int $balcony
     * @param string $address
     */
    public function __construct(int $numOfRooms, int $floor, int $balcony, string $address)
    {
        $this->numOfRooms = $numOfRooms;
        $this->floor = $floor;
        $this->balcony = $balcony;
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getNumOfRooms(): int
    {
        return $this->numOfRooms;
    }

    /**
     * @param int $numOfRooms
     */
    public function setNumOfRooms(int $numOfRooms): void
    {
        $this->numOfRooms = $numOfRooms;
    }

    /**
     * @return int
     */
    public function getFloor(): int
    {
        return $this->floor;
    }

    /**
     * @param int $floor
     */
    public function setFloor(int $floor): void
    {
        $this->floor = $floor;
    }

    /**
     * @return int
     */
    public function getBalcony(): int
    {
        return $this->balcony;
    }

    /**
     * @param int $balcony
     */
    public function setBalcony(int $balcony): void
    {
        $this->balcony = $balcony;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    private function checkBalcony()
    {
        if ($this->getBalcony() > 0) {
            $out = "количество балконов {$this->getBalcony()}";
        } else {
            $out = "у нее нет балконов";
        }
        return $out;
    }

    public function getApartmentInfo()
    {
        return "В квартире {$this->getNumOfRooms()} комнаты, она находится на {$this->getFloor()} этаже, 
        {$this->checkBalcony()}, квартира находится по адресу {$this->getAddress()}.";
    }

}

$apartment1 = new Apartments(3, 4, 2, "Горького 74");
echo $apartment1->getApartmentInfo();

class Rooms extends Apartments
{
    /**
     * @var int
     */
    private $roomPurpose = 8;
    /**
     * @var float
     */
    private $roomSquare;
    /**
     * @var int
     */
    private $roomSunnySide;

    /**
     * Rooms constructor.
     * @param int $numOfRooms
     * @param int $floor
     * @param int $balcony
     * @param string $address
     * @param int $roomPurpose
     * @param float $roomSquare
     * @param int $roomSunnySide
     */
    public function __construct(int $numOfRooms, int $floor, int $balcony, string $address, int $roomPurpose, float $roomSquare, int $roomSunnySide)
    {
        parent::__construct($numOfRooms, $floor, $balcony, $address);
        $this->roomPurpose = $roomPurpose;
        $this->roomSquare = $roomSquare;
        $this->roomSunnySide = $roomSunnySide;
    }


    /**
     * @return int
     */
    public function getRoomPurpose(): int
    {
        return $this->roomPurpose;
    }

    /**
     * @param int $roomPurpose
     */
    public function setRoomPurpose(int $roomPurpose): void
    {
        $this->roomPurpose = $roomPurpose;
    }

    /**
     * @return float
     */
    public function getRoomSquare(): float
    {
        return $this->roomSquare;
    }

    /**
     * @param float $roomSquare
     */
    public function setRoomSquare(float $roomSquare): void
    {
        $this->roomSquare = $roomSquare;
    }

    /**
     * @return int
     */
    public function getRoomSunnySide(): int
    {
        return $this->roomSunnySide;
    }

    /**
     * @param int $roomSunnySide
     */
    public function setRoomSunnySide(int $roomSunnySide): void
    {
        $this->roomSunnySide = $roomSunnySide;
    }

    /**
     * @return string
     */
    public function writeRoomPurpose()
    {
        switch ($this->getRoomPurpose()) {
            case 1:
                echo "гостинная";
                break;
            case 2:
                echo "детская";
                break;
            case 3:
                return "ванная";
                break;
            case 4:
                return "туалет";
                break;
            case 5:
                return "кухня";
                break;
            case 6:
                return "прихожая";
                break;
            case 7:
                return "кладовка";
                break;
            case 8:
                return "коридор";
                break;
            default;
                echo "свободного назначения";
        }
    }

    /**
     * @return string
     */
    private function checkSunnySide()
    {
        if ($this->getRoomSunnySide() == 0) {
            return "солнечная";
        } else {
            return "теневая";
        }
    }

    /**
     * @return string
     */
    public function getRoomInfo()
    {
        parent::getApartmentInfo();
        return "Назначение комнаты {$this->writeRoomPurpose()} ее площадь {$this->getRoomSquare()} сторона дома {$this->checkSunnySide()}.";
    }
}

$room1 = new Rooms(2, 2, 2, "Свердлова 45", 8, 16.8, 1);
echo "<br>" . $room1->getRoomInfo();