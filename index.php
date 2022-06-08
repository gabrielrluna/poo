<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>PHP POO = Exemplo 1</h1>
    <hr>
    <h2>Assuntos</h2>
    <hr>

    <ul>
    <li>Acesso direto à propriedades</li>
    <li>Atribuição dos dados e leitura</li>
    </ul>

<?php
require_once "src/Cliente.php";

// criar objetos/instâncias
$clienteA = new Cliente;
$clienteB = new Cliente;

$clienteA -> nome = "Bernardo";
$clienteA -> email = "bernardo@hotmail.com";
$clienteA -> telefones = ["11-2345-6789", "21-9876-4532"];

$clienteB -> nome = "Tiago";
$clienteB -> email = "Tiago@gmail.com";
$clienteB -> telefones = array("37-6789-2345");
?>

<h2>Dados dos Objetos (leitura)</h2>
<h3><?= $clienteA->nome?></h3>
<p>Email: <?= $clienteA->email ?></p>
<p>Telefones: <?= implode(",",$clienteA->telefones )?></p>

<h3><?= $clienteB->nome?></h3>
<p>Email: <?= $clienteB->email ?></p>
<p>Telefones: <?= implode(",",$clienteB->telefones ) ?></p>

<h2>Chamando método "exibirDados"</h2>
<?= $clienteA->exibirDados()?>
<?= $clienteB->exibirDados()?>



?>


<pre><?=var_dump($clienteA, $clienteB)?></pre>

</body>


</html>