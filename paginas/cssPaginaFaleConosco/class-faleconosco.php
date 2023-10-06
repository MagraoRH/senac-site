<?php

class Faleconosco {
    private $nome;
    private $email;
    private $telefone;
    private $estados;
    private $cidades;
    private $cemail;
    private $cpf;
    private $ddd;
    private $modalidade;
    private $assunto;
    private $mensagem;
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
        return $this->cemail;
    }
    public function getDdd(){
        return $this->ddd;
    }
    public function getModalidade(){
        return $this->modalidade;
    }
    public function getAssunto(){
        return $this->assunto;
    }
    public function getMensagem(){
        return $this->mensagem;
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
    public function setConfirmaEmail($cemail){
        $this->cemail=$cemail;
    }
    public function setDdd($ddd){
        $this->ddd=$ddd;
    }
    public function setModalidade($modalidade){
        $this->modalidade=$modalidade;
    }
    public function setAssunto($assunto){
        $this->assunto=$assunto;
    }
    public function setMensagem($mensagem){
        $this->mensagem=$mensagem;
    }
}
?>