<?php

$frutas = [
    "Morango",
    "Uva",
    "Banana",
    "Melão",
    "Mamão",
    "Framboesa",
    "Amora",
    "Manga",
    "Melancia",
    "Pera",
    "Goiaba",
    "Kiwi"
];

$frutaAProcurar = "Limão";

$encontrei = false;
foreach($frutas as $chave => $fruta){
    if($fruta == $frutaAProcurar){
        echo "A fruta $fruta foi deletada";

        echo "<br> <br>";

        unset($frutas[$chave]);
        $encontrei = true;
    }
}

if(!$encontrei){
    echo "Fruta não encontrada";
}

echo "<br> <br>";

print_r($frutas);