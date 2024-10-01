<?php

include_once '../config/config.php';
include_once '../models/classUnidade.php';
include_once '../dao/unidadeDao.php';

//instanciando a classe Unidade
$unidade = new Unidade();
//instancia a classe UnidadeDao
$unidadeDao = new unidadeDao();

//pega os dados passados pelo método post
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//verifica se o botão salvar foi acionado
if(!empty($dados['btnSalvar'])){
    //seta os valores do objeto
    $unidade->setNomeUnidade($dados['nome']);
    //chama a função create da classe UnidadeDao
    $unidadeDao->create($unidade);
}


?>