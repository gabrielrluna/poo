<?php

class Cliente{
    //Propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha;
    public int $telefones;

    // Método Construtor
    public function __construct(string $nome, string $email)
    {
        // $this é uma variavel especial, sempre apontando para 
        // a referência da classe atualmente manipulada
        $this->nome = $nome;
        $this->email = $email;
        echo "Construtor chamado!";
    }

}


?>