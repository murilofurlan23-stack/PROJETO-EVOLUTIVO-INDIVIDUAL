<?php

require_once "Pessoa.php";
require_once "Aluno.php";
require_once "Professor.php";
require_once "Plano.php";
require_once "Matricula.php";
require_once "Pagamento.php";
require_once "Treino.php";
require_once "Exercicio.php";

echo "<h1>Sistema de Academia</h1>";

echo "<h2>Aluno</h2>";

$aluno = new Aluno(
    "Murilo",
    17,
    "A001"
);

$aluno->apresentar();

echo "<hr>";

echo "<h2>Professor</h2>";

$professor = new Professor(
    "Eduardo",
    30,
    "Musculação"
);

$professor->apresentar();

echo "<hr>";

echo "<h2>Plano</h2>";

$plano = new Plano(
    "Premium",
    120.00
);

$plano->mostrarPlano();

echo "<hr>";

echo "<h2>Matrícula</h2>";

$matricula = new Matricula(
    $aluno,
    $plano,
    "27/09/2026"
);

$matricula->mostrarMatricula();

echo "<hr>";

echo "<h2>Pagamento</h2>";

$pagamento = new Pagamento(
    $matricula,
    $plano->getValor()
);

echo "Status: " . $pagamento->verificarPagamento() . "<br>";

$pagamento->realizarPagamento();

echo "Status: " . $pagamento->verificarPagamento() . "<br>";

echo "<hr>";

echo "<h2>Treino</h2>";

$treino = new Treino("Treino A");

$exercicio1 = new Exercicio(
    "Supino",
    "Peito",
    4
);

$exercicio2 = new Exercicio(
    "Rosca direta",
    "Bíceps",
    3
);

$treino->adicionarExercicio($exercicio1);
$treino->adicionarExercicio($exercicio2);

$treino->mostrarTreino();

?>