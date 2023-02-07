<?php
    class Accessori extends Prodotto{
        public $size;
        public $material;

        public function __construct($name, $price, $image, Categoria $category, $material, $size){
            parent::__construct($name, $price, $image);
            $this->material = $material;
            $this->size = $size;
        }
    }
    $products = [
        //CIBO
        new Cibo('Royal Canin Mini Adult', 35.99, 'https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg', $categories['cane'], '545g' , ['Taccchino', 'Pollo']),
        new Cibo('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, 'https://m.media-amazon.com/images/I/6140DtuW+nL._AC_SX425_.jpg', $categories['cane'], '600g' , ['Manzo', 'Cereali']),
        new Cibo('Almo Nature Cat Daily Lattina', 34.99, 'https://www.amoreanimaleshop.it/wp-content/uploads/2021/02/Almo-Nature-Cat-Daily-Manzo-400.jpg', $categories['gatto'], '400g' , ['Tonno', 'Pollo', 'Prosciutto']),
        new Cibo('Mangime per Pesci Guppy in Fiocchi', 2.95, 'https://m.media-amazon.com/images/I/81A1J1l2kqL._AC_SY741_.jpg', $categories['pesce'], '30g' , ['Pesci e sotto prodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']),

        //ACCESSORI
        new Accessori('Voilera Wilma in Legno', 184.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610', $categories['uccello'], 'Legno' , 'M: L 83 x P 67 x H 153 cm'),
        new Accessori('Cartucce Filtranti per Filtro EasyCrystal', 2.29, 'https://www.koi-franciacorta.it/pimages/TETRA-EASYCRYSTAL-FILTERPACK-CON-CARBONE-CONFEZIONE-DA-3-PEZZI-E-extra-big-5544-824.jpg', $categories['pesce'], 'Materiale espanso' , 'ND'),

        //GIOCO
        new Cibo('Kong Classic', 13.49, 'https://www.naturepetshop.it/wp-content/uploads/T1_1_1000x1000.jpg', $categories['cane'], 'Galleggia e rimbalza' , '8,5 cm x 10 cm'),
        new Cibo('Topini di peluche Trixie', 4.99, 'https://shop-cdn-m.mediazs.com/bilder/topino/in/peluche/con/catnip/trixie/2/400/26383_PLA_Trixie_Plueschmaus_mit_Catnip_Katzenspielzeug_7_cm_2.jpg', $categories['gatto'], 'Morbido con codina in corda' , '8,5 cm x 10 cm')
    ]; 
?>