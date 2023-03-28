<?php
include_once('Conexao.php');

$id_Categoria="";
$cadastro_Categoria=""; 
$nome_Categoria ="";
$status_Categoria ="";
$descricao_Categoria=""; 
$obs_Categoria ="";

if($_POST)
{
    $id_Categoria =$_POST['txtID'];
    try
    {
        $sql = $conn->query('select * from Categoria where id_Categoria='.$id_Categoria);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_Categoria=$linha[0];
                $cadastro_Categoria=$linha[2]; 
                $nome_Categoria =$linha[3];
                $status_Categoria =$linha[4];
                $descricao_Categoria =$linha[5];                
                $obs_Categoria =$linha[6];
            }
        } 
        else
        {
            echo "<p>Erro, dados não encontrado</p>";
        }

    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }

}

?>