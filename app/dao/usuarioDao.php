<?php

require_once 'config.php';


class UsuarioDao {

    //função para inserir um usuário com try catch
    public function create(Usuario $u){
    
        try{
        $sql = "INSERT INTO usuario (nome) VALUES (?)";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $u->getNome());
        $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao inserir usuário: ".$e->getMessage();
        }
    }

    //função para listar todas os usuários com try catch
    public function read(){
        try{
            $sql = "SELECT * FROM usuario";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao listar usuario: ".$e->getMessage();
        }

    }
    
    //função para atualizar um usuário com try catch
    public function update(Usuario $u){
        try{
            $sql = "UPDATE usuario SET nome = ?, email = ?, senha = ?, cpf = ?, dtNasc = ?, tipo = ?, ativo = ? WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt-> bindValue(1, $u->getNome());
            $stmt-> bindValue(2, $u->getEmail());
            $stmt-> bindValue(3, $u->getSenha());
            $stmt-> bindValue(4, $u->getCpf());
            $stmt-> bindValue(5, $u->getDtNasc());
            $stmt-> bindValue(6, $u->getTipo());
            $stmt-> bindValue(7, $u->getAtivo());
            $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao atualizar usuário: ".$e->getMessage();
        }
    }

    //função para deletar um usuário com try catch
    public function delete($id){
        try{
            $sql = "UPDATE usuario SET ativo = ? WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt-> bindValue(1, 0);
            $stmt-> bindValue(2, $id);
            $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao desativar o usuário: ".$e->getMessage();
        }
    }
}