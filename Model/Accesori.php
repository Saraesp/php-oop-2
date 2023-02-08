<?php
    class Accessori extends Prodotto{
        public $size;
        public $material;

        public function __construct($name, $price, $image, Categoria $category, $material, $size){
            parent::__construct($name, $price, $image, $category);
            $this->material = $material;
            $this->size = $size;
        }
    }
?>