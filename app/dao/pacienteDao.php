<?php

require_once 'config.php';


class PacienteDao {

    //função para inserir um paciente com try catch;
    //o campo ativo por padrão é 1, ou seja, o paciente está ativo;
    //o campo tipoAtend equilave a 1 para atendimento eletivo, 2 para clínico e 3 para grave;
    //o campo chave estrangeira unidade_id é a referência para a tabela unidades e é preenchido automaticamente conforme o campo tipoAtend;
    public function create(Paciente $p){
    
        try{
        $sql = "INSERT INTO pacientes (nome, codPac, dtAtend, dtAlta, dtNasc, tipoAtend, ativo, unidade_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getCodPac());
        $stmt->bindValue(3, $p->getDtAtend());
        $stmt->bindValue(4, $p->getDtAlta());
        $stmt->bindValue(5, $p->getDtNasc());
        $stmt->bindValue(6, $p->getTipoAtend());
        $stmt->bindValue(7, 1);
        $stmt->bindValue(8, $p->getUnidade_id());
        $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao inserir paciente: ".$e->getMessage();
        }
    }

    //função para listar todas as unidades com try catch
    public function read(){
        try{
            $sql = "SELECT * FROM pacientes";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao listar unidades: ".$e->getMessage();
        }

    }
    
    //função para atualizar um paciente com try catch e bind de valores de outra forma;
    public function update(Paciente $p){
        try{
            $sql = "UPDATE pacientes SET nome = :nome, codPac = :codPac, dtAtend = :dtAtend, dtAlta = :dtAlta, dtNasc = :dtNasc, tipoAtend = :tipoAtend, ativo = :ativo, unidade_id = :unidade_id WHERE id = :id";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(":nome", $p->getNome());
            $stmt->bindValue(":codPac", $p->getCodPac());
            $stmt->bindValue(":dtAtend", $p->getDtAtend());
            $stmt->bindValue(":dtAlta", $p->getDtAlta());
            $stmt->bindValue(":dtNasc", $p->getDtNasc());
            $stmt->bindValue(":tipoAtend", $p->getTipoAtend());
            $stmt->bindValue(":ativo", $p->getAtivo());
            $stmt->bindValue(8, $p->getUnidade_id());
            $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao atualizar paciente: ".$e->getMessage();
        }
    }

    //função para deletar uma unidade com try catch
    public function delete($id){
        try{
            $sql = "DELETE FROM pacientes WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt-> bindValue(1, $id);
            $stmt->execute();
        } catch(PDOException $e){
            echo "Erro ao deletar paciente: ".$e->getMessage();
        }
    }
}