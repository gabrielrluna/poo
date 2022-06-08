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
    <li>Encapsulamento</li>
    <li>Modificadores de visibilidade</li>
    <li>Métodos de acesso: Getters e Setters</li>
    </ul>

<?php
require_once "src/Cliente.php";

// criar objetos/instâncias
$clienteA = new Cliente;
$clienteB = new Cliente;

// Atribuindo dados via setters do objeto 
$clienteA -> setNome("Tiago");
$clienteA -> setEmail("tiago@gmail.com");
$clienteA -> setSenha("12345");

$clienteB -> setNome("Bernardo");
$clienteB -> setEmail("bernardo@hotmail.com");
$clienteB -> setSenha("54321");

?>

<h2>Dados dos Objetos (leitura via Getters)</h2>
<h3><?= $clienteA->getNome()?></h3>
<p>Email: <?= $clienteA->getEmail() ?></p>
<p>Senha: <?= $clienteA->getSenha() ?></p>


<h3><?= $clienteB->getNome()?></h3>
<p>Email: <?= $clienteB->getEmail() ?></p>
<p>Senha: <?= $clienteB->getSenha() ?></p>



<h2>Chamando método "exibirDados"</h2>
<?= $clienteA->exibirDados()?>
<?= $clienteB->exibirDados()?>



?>


<pre><?=var_dump($clienteA, $clienteB)?></pre>

</body>


</html>
