<?php

class Conexao{

    public static function delete($tabela, $id){
        $sql = "DELETE FROM $tabela WHERE id=$id";
        self::getConexao()->exec($sql);
    }

    public static function update($tabela, $valores, $id){
        $sql = "UPDATE $tabela SET $valores
        WHERE id=$id;";
        $resource = Conexao::getConexao()
        ->prepare($sql);
        $resource->execute();
    }

    public static function selectById($tabela, $projecao, $id){
        $sql = "SELECT $projecao FROM $tabela
            WHERE id=$id;";
        $resource = Conexao::getConexao()
        ->prepare($sql);
        $resource->execute();
        return $resource->fetchAll();
    }

    public static function select($tabela, $projecao){
        $sql = "SELECT $projecao FROM $tabela;";
        $resource = Conexao::getConexao()
        ->prepare($sql);
        $resource->execute();
        return $resource->fetchAll();
    }

    public static function insert($tabela, $parametros,
    $valores){
        $sql = "INSERT INTO " . $tabela . " (" .
            $parametros . ") VALUES (" .
            $valores . ");";
        self::getConexao()->exec($sql);
        echo $sql;
    }

    private static function getConexao(){
        try{
            $conexao = new PDO(
                "pgsql:host=ec2-3-232-22-121.compute-1.amazonaws.com;port=5432;dbname=da4kle2leiegf7",
                "szzprnbkudylyd",
                "db161577a81fc9de21fb14335a048e51537071135477d0debaee573dbb021038"
            );
            $conexao->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
            //echo "Voilá !";
            return $conexao;
        }
        catch(PDOException $e){
            echo "Deu erro: " . $e->getMessage();
        }
    }
}
