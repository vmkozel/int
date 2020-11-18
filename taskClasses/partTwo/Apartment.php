<?php

class Apartment
{
    private $room;
    private $address;
    private $owner;

    /**
     * Apartment constructor.
     * @param $room
     * @param string $address
     * @param string $owner
     */
    public function __construct(array $room, string $address, string $owner)
    {
        $this->room = $room;
        $this->address = $address;
        $this->owner = $owner;
    }

    public function addRoom()
    {

    }
}