<?php

class Paciente {
    private $id, $nome, $codPac, $dtAtend, $dtAlta, $dtNasc, $tipoAtend, $ativo, $unidade_id;

    // Getters and Setters
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCodPac(){
        return $this->codPac;
    }

    public function setCodPac($codPac){
        $this->codPac = $codPac;
    }

    public function getDtAtend(){
        return $this->dtAtend;
    }

    public function setDtAtend($dtAtend){
        $this->dtAtend = $dtAtend;
    }

    public function getDtAlta(){
        return $this->dtAlta;
    }

    public function setDtAlta($dtAlta){
        $this->dtAlta = $dtAlta;
    }

    public function getDtNasc(){
        return $this->dtNasc;
    }

    public function setDtNasc($dtNasc){
        $this->dtNasc = $dtNasc;
    }

    public function getTipoAtend(){
        return $this->tipoAtend;
    }

    public function setTipoAtend($tipoAtend){
        $this->tipoAtend = $tipoAtend;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }

    public function getUnidade_id(){
        return $this->unidade_id;
    }

    public function setUnidade_id($unidade_id){
        $this->unidade_id = $unidade_id;
    }


}