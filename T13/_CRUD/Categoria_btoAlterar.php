<?php
include_once('Conexao.php');
if($_Post)
{
    $nome_Categoria = $_POST['txtNome'];
    $status_Categoria = $_POST['txtStatus'];
    $descricao_Categoria = $_POST['txtDescricao']; 
    $obs_Categoria = $_POST['txtObs'];

    try 
    {
       
        $sql = $conn->prepare('UPDATE Categoria SET
    
        $nome_Categoria =:nome_Categoria, 
        $status_Categoria =:status_Categoria, 
        $descricao_Categoria =:descricao_Categoria,  
        $obs_Categoria =:obs_Categoria
        where id_Categoria=:id_Categoria'
        );   

        $sql->execute(array(
            ':nome_Categoria'=>$nome_Categoria,
            ':status_Categoria'=>$status_Categoria,
            ':descricao_Categoria'=>$descricao_Categoria,
            ':obs_Categoria'=>$obs_Categoria
        ));
        if($sql->rowCount()==1)
        {
            echo "<p>Dados alterados com sucesso</p>";
            echo '<a href="index.php">Voltar</a>';
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>
    