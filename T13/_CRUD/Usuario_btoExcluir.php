<?php
include_once('conexao.php');

    if($_POST)
    {
            $id_Usuario = $_POST['txtID']
        
        try 
        {
        
            $sql = $conn->prepare (
                'DELETE FROM Usuario WHERE id_Usuario = :id_Usuario');
            
            $sql->execute(array(

                ':id_Usuario'=>$id_Usuario

            ));
            if($sql->rowCount()==1)
            {
                echo"<p>Dados ecluidos com Sucesso</p>";
                echo'<p><a href="index.php">Voltar</p>';
            }
            
        } 
        catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

?>