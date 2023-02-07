<?php
    class Cibo extends Prodotto{
        public $weight;
        public $ingredients;

        public function __construct($name, $price, $image, Categoria $category, $weight, $ingredients) {
            parent::__construct($name, $price, $image);
            $this->weight = $weight;
            $this->ingredients = $ingredients;
        }
    }
?>