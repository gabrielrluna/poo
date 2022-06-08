<?php

class Cliente{
    //Propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;

    // Método Construtor
    // public function __construct(string $nome, string $email)
    // {
    //     // $this é uma variavel especial, sempre apontando para 
    //     // a referência da classe atualmente manipulada
    //     $this->nome = $nome;
    //     $this->email = $email;
    //     // echo "Construtor chamado!";
    // }

        public function exibirDados(){
            echo "<h3> $this -> nome</h3>";
            echo  "<ul>";
            echo "<li>$this->email </li>";
            echo "<li>". implode(',',$this->telefones) ."</li>";
            echo  "</ul>";
        }

}


?>