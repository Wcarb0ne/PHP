<?php
include_once('conexao.php');

    try {
       
        $stmt = $pdo->prepare('DELETE FROM Usuario WHERE id = :id');
        
        $stmt->blindParam(':id',SID);
        $stmt->execute();

        echo $stmt->rowCount();
        
    } catch (PDOException $ex) {
        echo 'Erro ' . $ex->getMessage();
    }

?>