<?php

    class Prodotto{
        public $product_name;
        public $price;
        public $image;
        public $category;

        public function __construct($name, $price, $image, Categoria $category){
            $this->product_name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->category = $category;
        }
    }
?>
