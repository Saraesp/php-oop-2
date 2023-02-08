<?php
    class Gioco extends Prodotto{
        public $size;
        public $features;

        public function __construct($name, $price, $image, Categoria $category, $size, $features){
            parent::__construct($name, $price, $image, $category);
            $this->size = $size;
            $this->features = $features;
        }
    }
?>