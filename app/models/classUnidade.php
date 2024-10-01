<?php



class Unidade{
    private $id, $nomeUnidade;

    // Getters and Setters
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNomeUnidade(){
        return $this->nomeUnidade;
    }

    public function setNomeUnidade($nomeUnidade){
        $this->nomeUnidade = $nomeUnidade;
    }
}