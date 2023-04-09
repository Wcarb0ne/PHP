<?php
include_once('Conexao.php');
if($_POST)
{   
    $nome_Produto = $_POST['txtNome'];
    $id_Categoria_Produto = $_POST['txtNomeCategoria'];
    $status_Produto = $_POST['txtStatus'];
    $vcusto_Produto = $_POST['txtvcusto'];
    $vvenda_Produto = $_POST['txtvvenda'];
    $descricao_Produto = $_POST['txtDescricao']; 
    $obs_Produto = $_POST['txtObs'];

    try 
    {
       
        $sql = $conn->prepare('update Produto set
    
        nome_Produto =:nome_Produto,
        id_Categoria_Produto =:id_Categoria_Produto,
        status_Produto =:status_Produto,
        vcusto_Produto =:vcusto_Produto,
        vvenda_Produto =:vvenda_Produto,
        descricao_Produto =:descricao_Produto,  
        obs_Produto =:obs_Produto
        where id_Produto=:id_Produto'
        );   

        $sql->execute(array(
            ':nome_Produto'=>$nome_Produto,
            ':id_Categoria_Produto'=>$id_Categoria_Produto,
            ':status_Produto'=>$status_Produto,
            ':vcusto_Produto'=>$vcusto_Produto,
            ':vvenda_Produto'=>$vvenda_Produto,
            ':descricao_Produto'=>$descricao_Produto,
            ':obs_Produto'=>$obs_Produto
        ));
        if($sql->rowCount()==1)
        {
            echo "<p>Dados alterados com sucesso</p>";
            echo'<a href="Login_sistema.php?Tela=Produto">Voltar</a>';
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>
    