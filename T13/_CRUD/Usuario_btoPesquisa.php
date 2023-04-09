<?php
include_once('Conexao.php');

$id_Usuario="";
$nome_Usuario ="";
$login_Usuario ="";
$senha_Usuario ="";
$confirmarSenha_Usuario ="";
$email_Usuario ="";
$dataNasc_Usuario ="";
$cpf_Usuario =""; 
$genero_Usuario =""; 
$telefone1_Usuario =""; 
$telefone2_Usuario ="";
$logradouro_Usuario =""; 
$cidade_Usuario =""; 
$uf_Usuario =""; 
$cep_Usuario ="";
$cadastro_Usuario=""; 
$status_Usuario ="";
$obs_Usuario ="";

if($_POST)
{
    $id_Usuario =$_POST['txtID'];
    try
    {
        $sql = $conn->query('select * from Usuario where id_Usuario='.$id_Usuario);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_Usuario=$linha[0];
                $nome_Usuario =$linha[1];
                $login_Usuario =$linha[2];
                $senha_Usuario =$linha[3];
                $confirmarSenha_Usuario =$linha[4];
                $email_Usuario =$linha[5];
                $dataNasc_Usuario =$linha[6];
                $cpf_Usuario =$linha[7]; 
                $genero_Usuario =$linha[8]; 
                $telefone1_Usuario =$linha[9]; 
                $telefone2_Usuario =$linha[10];
                $logradouro_Usuario =$linha[11]; 
                $cidade_Usuario =$linha[12]; 
                $uf_Usuario =$linha[13]; 
                $cep_Usuario =$linha[14];
                $cadastro_Usuario=$linha[15]; 
                $status_Usuario =$linha[16];
                $obs_Usuario =$linha[17];
            }
        } 
        else
        {
            echo "<p>Erro, dados não encontrados</p>";
            
        }

    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }

}

?>