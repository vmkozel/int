<?php


class Products
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var float
     */
    private $price;
    /**
     * @var Category
     */
    private $category;
    /**
     * @var int
     */
    private $amount;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return Category
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }


    /**
     * Products constructor.
     * @param string $title
     * @param float $price
     * @param Category $category
     * @param int $amount
     */
    public function __construct(string $title, float $price, Category $category, int $amount)
    {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->amount = $amount;
    }
}


class Category
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $title;

    /**
     * Category constructor.
     * @param int $id
     * @param string $title
     */
    public function __construct(int $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


}

$categoryIt = new Category(1, "it");
$categoryProduct = new Category(2, "product");
$categoryParfum = new Category(3, "parfum");

$categories = [$categoryIt, $categoryProduct, $categoryParfum];

$products = [
    new Products('keyboard', 23, $categoryIt, 12),
    new Products('mouse genius', 19, $categoryIt, 2),
    new Products('bread', 2, $categoryProduct, 50),
    new Products('Chanel', 50, $categoryParfum, 7),
];

class ProductWriter
{
    /**
     * @var Products
     */
    private $product;

    /**
     * @return Products
     */
    public function getProduct(): Products
    {
        return $this->product;
    }

    public function writeProduct($product)
    {
        /*   <div class="product-item">
     <img src="../lesson_4/testdata/images/standsrd.jpeg">
     <div class="product-list">
       <h3>Маленькое черное платье</h3>
         <span class="price">₽ 1999</span>
         <a href="" class="button">В корзину</a>
     </div>
   </div>*/
    }

}