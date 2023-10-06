<?php

class Cadastro {
    private $nome;
    private $email;
    private $telefone;
    private $estados;
    private $cidades;
    private $conf_email;
    private $cpf;
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEstados(){
        return $this->estados;
    }
    public function getCidades(){
        return $this->cidades;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getConfirmaEmail(){
        return $this->conf_email;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setTelefone($telefone){
        $this->telefone=$telefone;
    }
    public function setCidades($cidades){
        $this->cidades=$cidades;
    }
    public function setEstados($estados){
        $this->estados=$estados;
    }
    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    public function setConfirmaEmail($conf_email){
        $this->conf_email=$conf_email;
    }
}
?>