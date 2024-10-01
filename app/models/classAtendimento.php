<?php

class Atendimento{

    private $id, $dt_atend, $dt_alta, $tipo_atend, $paciente_id;

    // Getters and Setters
    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getDtAtend(){
        return $this->dt_atend;
    }

    public function setDtAtend($dt_atend){
        $this->dt_atend = $dt_atend;
    }

    public function getDtAlta(){
        return $this->dt_alta;
    }

    public function setDtAlta($dt_alta){
        $this->dt_alta = $dt_alta;
    }

    public function getTipoAtend(){
        return $this->tipo_atend;
    }

    public function setTipoAtend($tipo_atend){
        $this->tipo_atend = $tipo_atend;
    }

    public function getPacienteId(){
        return $this->paciente_id;
    }

    public function setPacienteId($paciente_id){
        $this->paciente_id = $paciente_id;
    }
}