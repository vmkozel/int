<!--
   - Создать 10 классов.
   + должно быть 3 характерных ему свойства.
   + должны быть описаны типы свойств в аннотациях.
   + должны быть сеттеры и геттеры для всех свойст
   + должны быть 2 публичных метода характерных этому классу и один приватный
   - 5 классов должны содержать в себе в свойстве другой класс ( например класс клавиатура содержит свойство - массив классов кнопок, или класс машина содержит в себе свойство двигатель(другой класс)

-->


<?php


class Cat
{
    /**
     * @var float $weight
     */
    private $weight;
    /**
     * @var string $name
     */
    private $name;
    /**
     * @var string $color
     */
    private $color;

    /**
     * Cat constructor.
     * @param float $weight
     * @param string $name
     * @param string $color
     */
    public function __construct(float $weight, string $name, string $color)
    {
        $this->weight = $weight;
        $this->name = $name;
        $this->color = $color;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setEat(string $name): void
    {
        $this->name = $name;
    }

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

    public function wantEat()
    {
        return "Meow";
    }

    public function petTheCat()
    {
        return "Purrs";
    }

    private function feedCat()
    {
        $catWeight = $this->getWeight();
        $catWeight += 0.1;
        $this->setWeight($catWeight);
    }
}