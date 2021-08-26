<?php

$alunos = [
    "1" => [
        "nome" => "Maria",
        "idade" => 16,
        "nota" => 85
    ],
    "2" => [
        "nome" => "Artur",
        "idade" => 16,
        "nota" => 92
    ],
    "3" => [
        "nome" => "Gustavo",
        "idade" => 16,
        "nota" => 80
    ],
    "4" => [
        "nome" => "Isabela",
        "idade" => 17,
        "nota" => 95
    ]

];

echo "Nota da(o) aluno ";
echo $alunos["1"]["nome"];
echo " - ";
echo $alunos["1"]["nota"];

echo "<br> <br>";

echo "Nota da(o) aluno ";
echo $alunos["2"]["nome"];
echo " - ";
echo $alunos["2"]["nota"];

echo "<br> <br>";

echo "Nota da(o) aluno ";
echo $alunos["3"]["nome"];
echo " - ";
echo $alunos["3"]["nota"];

echo "<br> <br>";

echo "Nota da(o) aluno ";
echo $alunos["4"]["nome"];
echo " - ";
echo $alunos["4"]["nota"];

echo "<br> <br>";

echo "<br> <br>";

$soma = 0;
$qtdeAlunos = 0;
foreach($alunos as $aluno){
    $soma = $soma + $aluno["nota"];
    $qtdeAlunos++;
}

$media = $soma / count($alunos);

// $qtdeAlunos;

echo "A média geral das notas dos alunos é: $media";





//nome do aluno com chave 4
// echo $alunos["4"]["nome"];

// echo "<br> <br>";

//print_r serve para retornar vetores e strings
// print_r($alunos);

//a soma da nota do aluno 1 e 3
// echo $alunos["1"]["nota"] + $alunos["3"]["nota"];

//imprimir a media de todos os alunos
// echo "A média geral das notas dos alunos é ";

// echo ($alunos["1"]["nota"] + 
// $alunos["2"]["nota"] + 
// $alunos["3"]["nota"] + 
// $alunos["4"]["nota"]) / 4;

