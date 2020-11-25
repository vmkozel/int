<!--
    Журнал с списком дат загрузки и приемки товара. Выделить !
отдельно храним приемку и отгрузку товара
храним время в которое произошла приемка или отгрузка, дату и грузовик
можем получить список всех отгрузок/приемок за введенный день
можем получить список всех отгрузок/приемок за введенный день  и с определенным весом
Создать класс Грузовик - марка, грузоподъемность, фио водителя.

-->

<?php


/**
 * Class Journal
 */
class Journal
{
    /**
     * @var Shipment
     */
    protected $shipmentJournal;
    /**
     * @var Receipt
     */
    protected $receiptJournal;
    /**
     * @var Truck
     */
    protected $truckJournal;

}

/**
 * Class Shipment
 */
class Shipment
{
    protected $time;
    /**
     * @var
     */
    protected $date;
    /**
     * @var Truck
     */
    protected $truck;

}


class Truck
{
    /**
     * @var string
     */
    protected $truckModel;
    /**
     * @var float
     */
    protected $liftingCapacity;
    /**
     * @var string
     */
    protected $driver;

    /**
     * Truck constructor.
     * @param string $truckModel
     * @param float $liftingCapacity
     * @param string $driver
     */
    public function __construct(string $truckModel, float $liftingCapacity, string $driver)
    {
        $this->truckModel = $truckModel;
        $this->liftingCapacity = $liftingCapacity;
        $this->driver = $driver;
    }

    /**
     * @return string
     */
    public function getTruckModel(): string
    {
        return $this->truckModel;
    }

    /**
     * @param string $truckModel
     */
    public function setTruckModel(string $truckModel): void
    {
        $this->truckModel = $truckModel;
    }

    /**
     * @return float
     */
    public function getLiftingCapacity(): float
    {
        return $this->liftingCapacity;
    }

    /**
     * @param float $liftingCapacity
     */
    public function setLiftingCapacity(float $liftingCapacity): void
    {
        $this->liftingCapacity = $liftingCapacity;
    }

    /**
     * @return string
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * @param string $driver
     */
    public function setDriver(string $driver): void
    {
        $this->driver = $driver;
    }


}

function pre($var)
{
    echo "<hr><pre>";
    print_r($var);
    echo "<hr></pre>";
}

$truck1 = new Truck("Volvo", 7.8, "Иванов Иван Иванович");

