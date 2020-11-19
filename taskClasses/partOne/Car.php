<!--
   - Создать 10 классов.
   + должно быть 3 характерных ему свойства.
   + должны быть описаны типы свойств в аннотациях.
   + должны быть сеттеры и геттеры для всех свойст
   + должны быть 2 публичных метода характерных этому классу и один приватный
   - 5 классов должны содержать в себе в свойстве другой класс ( например класс клавиатура содержит свойство - массив классов кнопок, или класс машина содержит в себе свойство двигатель(другой класс)

-->
<?php


class Car
{
    /**
     * @var string $color
     */
    private $color;
    /**
     * @var string $model
     */
    private $model;
    /**
     * @var float $price
     */
    public $price;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function __construct(string $color, string $model, float $price)
    {
        $this->color = $color;
        $this->model = $model;
        $this->price = $price;
    }

    /**
     * @param string $newColor
     */
    public function changeColor(string $newColor)
    {
        $this->setColor($newColor);
    }

    /**
     * @param int $discount
     */
    public function calculatePrice(int $discount)
    {
        $price = $this->getPrice();
        $price -= $price * ($discount / 100);
        $this->setPrice($price);
    }

}
