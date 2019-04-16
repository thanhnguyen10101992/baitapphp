<?php
namespace Controller;

use function Couchbase\defaultDecoder;
use Model\Product;
use Model\ProductDB;
use Model\DBConnection;


class ProductController {

    public $productDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=manage_product", "root", "");
        $this->productDB = new ProductDB($connection->connect());
    }


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // echo 'ok'.$_SERVER['REQUEST_METHOD'];
            include 'view/add.php';
        } else {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $product = new Product($name, $price, $description);
            $this->productDB->create($product);
            $message = 'product created';
            include 'view/add.php';
        }
    }
    public function index()
    {
        $products = $this->productDB->getAll();
        include 'view/listproduct.php';
    }


}


?>