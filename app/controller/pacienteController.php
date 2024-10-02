<?php
include_once '../config/config.php';
include_once '../models/classPaciente.php';
include_once '../dao/pacienteDao.php';

//instanciando a classe Paciente
$paciente = new Paciente();
//instancia a classe PacienteDao
$pacienteDao = new PacienteDao();

//pega os dados passados pelo método post
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//verifica se o botão salvar foi acionado
if(!empty($dados['btnSalvar'])){
    //seta os valores do objeto
    $paciente->setNome($dados['nome']);
    $paciente->setCodPac($dados['codPac']);
    $paciente->setDtAtend($dados['dtAtend']);
    $paciente->setDtAlta($dados['dtAlta']);
    $paciente->setDtNasc($dados['dtNasc']);
    //chama a função create da classe UsuarioDao
    $usuarioDao->create($usuario);
}
?>