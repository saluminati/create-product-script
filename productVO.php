<?php class ProductVO
{
  public $name;
  public $description;
  public $price;

  public function __construct($name, $description, $price) {
    $this->name = strip_tags($name);
    $this->description = strip_tags($description);
    $this->price = $price;
  }
}

?>
