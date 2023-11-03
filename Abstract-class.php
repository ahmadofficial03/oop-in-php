<?php 

abstract class DataModel {
    protected string $tableName = 'random-table-name';

    public function save() {
        print_r('Saving data to table: ' . $this->tableName);
    }
}

class Product extends DataModel {
    private string $name;
    private float $price;
    protected string $tableName = 'product';               //Property Overriding.

    public function getName():string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getPrice():int {
        return $this->price;
    }

    public function setPrice(int $price): void {
        $this->price = $price;
    }
}

$product = new Product();
print $product->save();

?>