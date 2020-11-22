<?php


class Car
{
    /**
     * @var CarBrand
     */
    public $carBrand;

    public $carColor;
    /**
     * @var  CarEngines
     */
    public $carEngine;

    /**
     * @param carEngines $carEngine
     */
    public function setCarEngine(carEngines $carEngine): void
    {
        $this->carEngine = $carEngine;
    }

    /**
     * @param CarBrand $carBrand
     */
    public function setCarModel(CarBrand $carBrand): void
    {
        $this->carBrand = $carBrand;
    }

}

class CarBrand
{

    /**
     * @var string
     */
    protected $carBrandName;
    /**
     * @var string
     */
    protected $dealerAddress;
    /**
     * @var int
     */
    protected $warrantyPeriod;

    /**
     * @return string
     */
    public function getCarBrandName(): string
    {
        return $this->carBrandName;
    }

    /**
     * @param string $carBrandName
     */
    public function setCarBrandName(string $carBrandName): void
    {
        $this->carBrandName = $carBrandName;
    }

    /**
     * @return string
     */
    public function getDealerAddress(): string
    {
        return $this->dealerAddress;
    }

    /**
     * @param string $dealerAddress
     */
    public function setDealerAddress(string $dealerAddress): void
    {
        $this->dealerAddress = $dealerAddress;
    }

    /**
     * @return int
     */
    public function getWarrantyPeriod(): int
    {
        return $this->warrantyPeriod;
    }

    /**
     * @param int $warrantyPeriod
     */
    public function setWarrantyPeriod(int $warrantyPeriod): void
    {
        $this->warrantyPeriod = $warrantyPeriod;
    }

    /**
     * CarModels constructor.
     * @param string $carBrandName
     * @param string $dealerAddress
     * @param int $warrantyPeriod
     */
    public function __construct(string $carBrandName, string $dealerAddress, int $warrantyPeriod)
    {
        $this->carBrandName = $carBrandName;
        $this->dealerAddress = $dealerAddress;
        $this->warrantyPeriod = $warrantyPeriod;
    }

    public function getBrandInfo()
    {
        return "<br>Марка авто: {$this->getCarBrandName()}<br>Гарантийный период: {$this->getWarrantyPeriod()}
месяцев <br>Адрес диллера: {$this->getDealerAddress()}";
    }

    public function checkWarranty(int $buyDate, int $now)   //условно, для нормальной реализации метода нужно разбираться с временными функциями
    {
        $out = "<br>У вас еще ";
        $out .= $now - $buyDate . " месяцев гарантия";
        return $out;
    }
}


class CarEngines
{
    /**
     * @var float
     */
    protected $engineVolume;
    /**
     * @var string
     */
    protected $engineFuelType;
    /**
     * @var int
     */
    protected $enginePower;

    /**
     * carEngines constructor.
     * @param float $engineVolume
     * @param string $engineFuelType
     * @param int $enginePower
     */
    public function __construct(float $engineVolume, string $engineFuelType, int $enginePower)
    {
        $this->engineVolume = $engineVolume;
        $this->engineFuelType = $engineFuelType;
        $this->enginePower = $enginePower;
    }

    /**
     * @return float
     */
    public function getEngineVolume(): float
    {
        return $this->engineVolume;
    }

    /**
     * @param float $engineVolume
     */
    public function setEngineVolume(float $engineVolume): void
    {
        $this->engineVolume = $engineVolume;
    }

    /**
     * @return string
     */
    public function getEngineFuelType(): string
    {
        return $this->engineFuelType;
    }

    /**
     * @param string $engineFuelType
     */
    public function setEngineFuelType(string $engineFuelType): void
    {
        $this->engineFuelType = $engineFuelType;
    }

    /**
     * @return int
     */
    public function getEnginePower(): int
    {
        return $this->enginePower;
    }

    /**
     * @param int $enginePower
     */
    public function setEnginePower(int $enginePower): void
    {
        $this->enginePower = $enginePower;
    }

    public function getEngineInfo(): string
    {
        return sprintf('<hr><br>
Объем двигателя %s
Тип топлива %s
Мощность %s л.с.',
            $this->getEngineVolume(),
            $this->getEngineFuelType(),
            $this->getEnginePower());
    }
}

$car1 = new Car();
$brand1 = new CarBrand('BMW', 'г.Гродно ул.горького 49', 36);
$car1->setCarModel($brand1);
echo "<pre>";
print_r($car1);
print_r($brand1);

echo $brand1->checkWarranty(21, 22);
echo $brand1->getBrandInfo();
$engine1 = new CarEngines('3.5', 'дизель', 280);
$car1->setCarEngine($engine1);
echo $engine1->getEngineInfo();