<?php
include_once('conexao.php');

    if($_POST)
    {
            $id_Categoria = $_POST['txtID'];
        
        try 
        {
        
            $sql = $conn->prepare (
                'DELETE FROM Categoria WHERE id_Categoria = :id_Categoria');
            
            $sql->execute(array(

                ':id_Categoria'=>$id_Categoria

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