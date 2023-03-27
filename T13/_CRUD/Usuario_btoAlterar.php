<?php
include_once('Conexao.php');

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

#$nome = $_POST['txtNome'];
#$login = $_POST['txtLogin'];
#$senha = $_POST['txtSenha'];
#$confirmarSenha = $_POST['txtConfirmarSenha'];
#$email = $_POST['txtEmail']; 
#$dataNasc = $_POST['txtDataNasc'];
#$cpf_Usuario = $_POST['txtCpf']; 
#$genero = $_POST['txtGenero']; 
#$telefone1 = $_POST['txtTelefone1']; 
#$telefone2 = $_POST['txtTelefone2'];
#$logradouro = $_POST['txtLogradouro']; 
#$cidade = $_POST['txtCidade']; 
#$uf = $_POST['txtUF']; 
#$cep = $_POST['txtCep']; 
#$status = $_POST['txtStatus'];
#$obs = $_POST['txtObs'];


    try {
       
        $stmt = $pdo->prepare('UPDATE Usuario SET
        nome =:nome, 
        login =:login,
        senha =:senha,
        confirmasenha =:ConfirmarSenha,
        email =:email,
        dataNasc =:dataNasc,
        cpf =:cpf,
        genero =:genero,
        telefone1 =:telefone1,
        telefone2 =:telefone2,
        logradouro =:logradouro,
        cidade =:cidade,
        uf =:uf
        cep =:cep,
        status =:status,
        obs =:obs, WHERE id = :id');
          
        $stmt->execute(array(
            ':nome'=>$nome_Usuario,
            ':login'=>$login_Usuario,
            ':senha'=>$senha_Usuario,
            ':ConfirmarSenha'=>$confirmarSenha_Usuario,
            ':email'=>$email_Usuario,
            ':dataNasc'=>$dataNasc_Usuario,
            ':cpf'=>$cpf_Usuario,
            ':genero'=>$genero_Usuario,
            ':telefone1'=>$telefone1_Usuario,
            ':telefone2'=>$telefone2_Usuario,
            ':logradouro'=>$logradouro_Usuario,
            ':cidade'=>$cidade_Usuario,
            ':uf'=>$uf_Usuario,
            ':cep'=>$cep_Usuario,
            ':status'=>$status_Usuario,
            ':obs'=>$obs_Usuario
        ));
        echo $stmt->rowCount();
        
    } catch (PDOException $ex) {
        echo 'Erro ' . $ex->getMessage();
    }

?>
