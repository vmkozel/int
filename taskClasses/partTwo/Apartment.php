<?php

class Apartment
{
    /**
     * @var Room
     */
    protected $room;

    /**
     * @param Room $room
     */
    public function setRoom(Room $room): void
    {
        $this->room = $room;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @param string $owner
     */
    public function setOwner(string $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @var string
     */
    protected $address;
    /**
     * @var string
     */
    protected $owner;


    public function addRoom()
    {

    }
}

interface IApartment
{

}