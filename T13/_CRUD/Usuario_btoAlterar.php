<?php
include_once('Conexao.php');
if($_POST)
{
$id_Usuario = $_POST['txtID'];    
$nome_Usuario = $_POST['txtNome'];
$login_Usuario = $_POST['txtLogin'];
$senha_Usuario = $_POST['txtSenha'];
$confirmarSenha_Usuario = $_POST['txtConfirmarSenha'];
$email_Usuario = $_POST['txtEmail']; 
$dataNasc_Usuario = $_POST['txtDataNasc'];
$cpf_Usuario = $_POST['txtCpf']; 
$genero_Usuario = $_POST['txtGenero']; 
$telefone1_Usuario = $_POST['txtTelefone1']; 
$telefone2_Usuario = $_POST['txtTelefone2'];
$logradouro_Usuario = $_POST['txtLogradouro']; 
$cidade_Usuario = $_POST['txtCidade']; 
$uf_Usuario = $_POST['txtUF']; 
$cep_Usuario = $_POST['txtCep']; 
$status_Usuario = $_POST['txtStatus'];
$obs_Usuario = $_POST['txtObs'];

    try 
    {
       
        $sql = $conn->prepare('UPDATE Usuario SET
    
        $nome_Usuario =:nome_Usuario, 
        $nome_Usuario =:nome_Usuario, 
        $senha_Usuario =:senha_Usuario, 
        $confirmarSenha_Usuario =:confirmarSenha_Usuario, 
        $email_Usuario =:email_Usuario, 
        $dataNasc_Usuario =:dataNasc_Usuario, 
        $cpf_Usuario =:cpf_Usuario,  
        $genero_Usuario =:genero_Usuario,  
        $telefone1_Usuario =:telefone1_Usuario,  
        $telefone2_Usuario =:telefone2_Usuario, 
        $logradouro_Usuario =:logradouro_Usuario,  
        $cidade_Usuario =:cidade_Usuario,  
        $uf_Usuario =:uf_Usuario,  
        $cep_Usuario =:cep_Usuario,  
        $status_Usuario =:status_Usuario, 
        $obs_Usuario =:obs_Usuario
        where id_usuario=:id_usuario'
        );   

        $sql->execute(array(
            'id_usuario'=>$id_usuario,
            ':nome_Usuario'=>$nome_Usuario,
            ':login_Usuario'=>$login_Usuario,
            ':senha_Usuario'=>$senha_Usuario,
            ':confirmarSenha_Usuario'=>$confirmarSenha_Usuario,
            ':email_Usuario'=>$email_Usuario,
            ':dataNasc_Usuario'=>$dataNasc_Usuario,
            ':cpf_Usuario'=>$cpf_Usuario,
            ':genero_Usuario'=>$genero_Usuario,
            ':telefone1_Usuario'=>$telefone1_Usuario,
            ':telefone2_Usuario'=>$telefone2_Usuario,
            ':logradouro_Usuario'=>$logradouro_Usuario,
            ':cidade_Usuario'=>$cidade_Usuario,
            ':uf_Usuario'=>$uf_Usuario,
            ':cep_Usuario'=>$cep_Usuario,
            ':status_Usuario'=>$status_Usuario,
            ':obs_Usuario'=>$obs_Usuario
        ));
        if($sql->rowCount()==1)
        {
            echo "<p>Dados alterados com sucesso</p>";
            echo '<a href="Login_sistema.php">Voltar</a>';
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>
    