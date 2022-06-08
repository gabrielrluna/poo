<?php

class Cliente{
    //Propriedades (ou atributos)
    private string $nome;
    private string $email;
    private string $senha = ""; //valor inicial padrão
    // public array $telefones;

    // Métodos getter e setter 
    public function getNome():string{
        return $this->nome;
    }
    public function getEmail():string{
        return $this->email;
    }
    public function getSenha():string{
        return $this->senha;
    }
    
    public function setNome(string $nome){
        $this -> nome = $nome;
    }
    public function setEmail(string $email){
        $this -> email = $email;
    }
    public function setSenha(string $senha){
        $senhaSegura = password_hash($senha, PASSWORD_DEFAULT); 
        $this -> senha = $senhaSegura;

        // ou
        // $this -> senha = password_hash($senha,PASSWORD_DEFAULT)

    }
  
}


?>