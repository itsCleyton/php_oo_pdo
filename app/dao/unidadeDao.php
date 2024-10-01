<?php

require_once 'config.php';


class UnidadeDao {

    //função para inserir uma unidade com try catch
    public function create(Unidade $u){
    
        try{
        $sql = "INSERT INTO unidades (nomeUnidade) VALUES (?)";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $u->getNomeUnidade());
        $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao inserir unidade: ".$e->getMessage();
        }
    }

    //função para listar todas as unidades com try catch
    public function read(){
        try{
            $sql = "SELECT * FROM unidades";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao listar unidades: ".$e->getMessage();
        }

    }
    
    //função para atualizar uma unidade com try catch
    public function update(Unidade $u){
        try{
            $sql = "UPDATE unidades SET nomeUnidade = ? WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt-> bindValue(1, $u->getNomeUnidade());
            $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao atualizar unidade: ".$e->getMessage();
        }
    }

    //função para deletar uma unidade com try catch
    public function delete($id){
        try{
            $sql = "DELETE FROM unidades WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt-> bindValue(1, $id);
            $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao deletar unidade: ".$e->getMessage();
        }
    }
}