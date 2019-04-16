<?php
namespace Model;


class ProductDB {
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($product){

        {
            $sql = "INSERT INTO product(name, price, description) VALUES (?, ?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $product->name);
            $statement->bindParam(2, $product->price);
            $statement->bindParam(3, $product->description);
            return $statement->execute();
        }

    }

    public function getAll(){
        $sql= "SELECT * FROM product";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['name'], $row['price'], $row['description']);
            $product->id = $row['id'];
            $products[] = $product;
        }
        return $products;
    }

    public function update(){

    }

    public function delete(){


    }

}

?>