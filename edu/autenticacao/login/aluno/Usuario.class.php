<?php

class Usuario{
    public function login($matricula, $senha){
        global $pdo;

        $sql = "SELECT * FROM alunos WHERE matricula = :matricula AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("matricula", $matricula);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $_SESSION ['idUser'] = $dado ['idusuario'];
            return true;
        }else{
            return false;
            exit();
        }
    }

    public function logged($id){
        global $pdo;
        $array = array();
        $sql = "SELECT nome FROM alunos WHERE idusuario = :idusuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idusuario", $id);
        $sql->execute();

        if ($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }
}

?>