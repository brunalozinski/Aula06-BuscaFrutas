<?php

function calcularMedia($turma){
    $soma = 0;
    foreach($turma as $aluno){
        $soma = $soma + $aluno["nota"];
    }
    
    $media = $soma / count($turma);

    return $media;
}

//escreva a função que calcule o aluno com a maior nota

function alunoComMaiorNota(array $turma) {

    $melhorAluno = null;
    foreach($turma as $aluno){
        if($melhorAluno == null){
            $melhorAluno == $aluno;
        } elseif ($aluno["nota"] > $melhorAluno["nota"]){
            $melhorAluno = $aluno;
        }
    } 

    return $melhorAluno;
}

function alterarNotaAluno(array $turma, $nota, $novaNota) {

    $alterarNota = null;
    foreach($turma as $chave => $aluno){
        if($aluno["nome"] == $nome) {
            $turma[$chave]["nota"] = $novaNota;
            return;
        } 
    }
}
     
$alterarNota = alterarNotaAluno($alunos);
echo "A nota ". $alterarNota["nota"] ." deve ser alterada para 100 "." . ";

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

// echo "A média geral das notas dos alunos é: $media";

$alunos = [
    "1" => [
        "nome" => "Kelly",
        "idade" => 17,
        "nota" => 100
    ],
    "2" => [
        "nome" => "Paulo",
        "idade" => 16,
        "nota" => 85
    ],
    "3" => [
        "nome" => "Gabriel",
        "idade" => 16,
        "nota" => 82
    ],
    "4" => [
        "nome" => "Mateus",
        "idade" => 16,
        "nota" => 83
    ],
    "5" => [
        "nome" => "Bruna",
        "idade" => 16,
        "nota" => 90
    ]

];

$mediaTurmaB = calcularMedia($alunosTurmaB);

echo "A média dos alunos da turma B é: $mediaTurmaB";

echo "<br> <br>";

$media = calcularMedia($alunos);

echo "A média da sala é: $media";

echo "<br> <br>";

$melhorAluno = alunoComMaiorNota($alunos);

echo "Melhor estudante é " . $melhorAluno["nome"]
         . " com a nota " . $melhorAluno["nota"] . ".";

