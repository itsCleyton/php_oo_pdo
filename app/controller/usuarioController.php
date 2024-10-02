<?php
include_once '../config/config.php';
include_once '../models/classUsuario.php';
include_once '../dao/usuarioDao.php';

//instanciando a classe Usuário
$usuario = new Usuario();
//instancia a classe UsuarioDao
$usuarioDao = new UsuarioDao();

//pega os dados passados pelo método post
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//verifica se o botão salvar foi acionado
if(!empty($dados['btnSalvar'])){
    //seta os valores do objeto
    $usuario->setNome($dados['nome']);
    $usuario->setEmail($dados['email']);
    $usuario->setSenha($dados['senha']);
    //chama a função create da classe UsuarioDao
    $usuarioDao->create($usuario);
}
?>