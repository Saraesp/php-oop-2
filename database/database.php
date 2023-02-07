<?php
    include __DIR__ . '/../Model/Prodotto.php';
    include __DIR__ . '/../Model/Categoria.php';
    include __DIR__ . '/../Model/Gioco.php';
    include __DIR__ . '/../Model/Cibo.php';
    include __DIR__ . '/../Model/Acessori.php';

    $categories = [
        'cane' => new Categoria('Cane', '<i class="fa-solid fa-dog"></i>'),
        'gatto' => new Categoria('Gatto', '<i class="fa-solid fa-cat"></i>'),
        'uccello' => new Categoria('Uccello', '<i class="fa-solid fa-dove"></i>'),
        'pesce' => new Categoria('Pesce', '<i class="fa-solid fa-fish"></i>'),
    ];



?>