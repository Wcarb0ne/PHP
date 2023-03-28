<?php include_once('Usuario_btoPesquisa.php')?>
<form action="" class="form-control" method="POST">
    <div class="row">
        <div class="col-sm-12">
            <h1 text-align="">Formulário de Cadastro de Usuários</h1>
        </div>
    </div>
    <hr>
    <div class="row"><!--bloco id e data de cadastro-->
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario"value="<?=$id_Usuario?>">
        </div>
        <div class="col-sm-6"></div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro"value="<?=$cadastro_Usuario?>">
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!--bloco NOME , NASC., CPF, GENERO-->
        <div class="col-sm-3">
            <label for="Nome">Nome*</label>
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Completo"value="<?=$nome_Usuario?>">
        </div>
        <div class="col-sm-3">
        <label for="Nome">Data Nascimento*</label>
            <input type="date" class="form-control" name="txtDataNasc" id="txtDataNasc" placeholder="Data Nascimento"value="<?=$dataNasc_Usuario?>">
        </div>
        <div class="col-sm-3">
        <label for="Nome">CPF*</label>
            <input type="tel" class="form-control" name="txtCpf" id="txtCpf" placeholder="Informe seu CPF"value="<?=$cpf_Usuario?>">
        </div>
        <div class="col-sm-3">
        <label for="Nome">Gênero*</label>
            <select name="txtGenero" id="txtGenero" class="form-control">
                <option value=""<?=($genero_Usuario=="" ? 'selected' : '')?>>-- Selecione seu Gênero --</option>
                <option value="Masculino"<?=($genero_Usuario=="Masculino" ? 'selected' : '')?>>Masculino</option>
                <option value="Feminino"<?=($genero_Usuario=="Feminino" ? 'selected' : '')?>>Feminino</option>
            </select>
        </div>
    </div>
    <div class="row mt-1"><!--bloco  email tel1 tel 2-->
        <div class="col-sm-4">
        <label for="Nome">E-mail*</label>
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Insira seu Email"value="<?=$email_Usuario?>">
        </div>
        <div class="col-sm-4">
        <label for="Nome">Telefone*</label>
            <input type="tel" class="form-control" name="txtTelefone1" id="txtTelefone1" placeholder="Insira um telefone"value="<?=$telefone1_Usuario?>">
        </div>
        <div class="col-sm-4">
        <label for="Nome">Telefone2</label>
            <input type="tel" class="form-control" name="txtTelefone2" id="txtTelefone2" placeholder="Insira um telefone 2"value="<?=$telefone2_Usuario?>">
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!--LOGRADOURO, CIDADE , estado(UF) , CEP-->
        <div class="col-sm-3">
        <label for="Nome">Logradouro*</label>
            <input type="text" class="form-control" name="txtLogradouro" id="txtLogradouro" placeholder="Ex: Rua Luiz Faccini, 132. "value="<?=$logradouro_Usuario?>">
        </div>
        <div class="col-sm-2">
        <label for="Nome">Cep*</label>
            <input type="tel" class="form-control" name="txtCep" id="txtCep" placeholder="Informe seu Cep"value="<?=$cep_Usuario?>">
        </div>
        <div class="col-sm-3">
        <label for="Nome">Cidade*</label>
            <input type="text" class="form-control" name="txtCidade" id="txtCidade" placeholder="Inform sua Cidade"value="<?=$cidade_Usuario?>">
        </div>
        <div class="col-sm-2">
        <label for="Nome">UF*</label>
            <select name="txtUF" id="txtUF" class="form-control">
                <option value=""<?=($uf_Usuario=="" ? 'selected' : '')?>> -->Selecione<--</option>
                <option value="Acre"<?=($uf_Usuario=="Acre" ? 'selected' : '')?>>AC</option>
                <option value="Alagoas"<?=($uf_Usuario=="Alagoas" ? 'selected' : '')?>>AL</option>
                <option value="Amapá"<?=($uf_Usuario=="Amapá" ? 'selected' : '')?>>AP</option>
                <option value="Amazonas"<?=($uf_Usuario=="Amazonas" ? 'selected' : '')?>>AM</option>
                <option value="Bahia"<?=($uf_Usuario=="Bahia" ? 'selected' : '')?>>BA</option>18
                <option value="Ceará"<?=($uf_Usuario=="Ceará" ? 'selected' : '')?>>CE</option>17
                <option value="Minas gerais"<?=($uf_Usuario=="Minas gerais" ? 'selected' : '')?>>DF</option>
                <option value="Espírito Santo"<?=($uf_Usuario=="Espírito Santo" ? 'selected' : '')?>>ES</option>16
                <option value="Goiás"<?=($uf_Usuario=="Goiás" ? 'selected' : '')?>>GO</option>15
                <option value="Maranhão"<?=($uf_Usuario=="Maranhão" ? 'selected' : '')?>>MA</option>14
                <option value="Mato Grosso"<?=($uf_Usuario=="Mato Grosso" ? 'selected' : '')?>>MT</option>15
                <option value="Minas gerais"<?=($uf_Usuario=="Minas gerais" ? 'selected' : '')?>>MG</option>13
                <option value="Pará"<?=($uf_Usuario=="Pará" ? 'selected' : '')?>>PA</option>12
                <option value="Paraíba"<?=($uf_Usuario=="Paraíba" ? 'selected' : '')?>>PB</option>8
                <option value="Paraná"<?=($uf_Usuario=="Paraná" ? 'selected' : '')?>>PR</option> 9
                <option value="Pernambuco"<?=($uf_Usuario=="Pernambuco" ? 'selected' : '')?>>PE</option>10
                <option value="Piauí"<?=($uf_Usuario=="Piauí" ? 'selected' : '')?>>PI</option>11
                <option value="Rio de Janeiro"<?=($uf_Usuario=="Rio de Janeiro" ? 'selected' : '')?>>RJ</option>7
                <option value="Rio Grande do Norte"<?=($uf_Usuario=="Rio Grande do Norte" ? 'selected' : '')?>>RN</option>6
                <option value="Rio Grande do Sul"<?=($uf_Usuario=="Rio Grande do Sul" ? 'selected' : '')?>>RS</option>7
                <option value="Rondônia"<?=($uf_Usuario=="Rondônia" ? 'selected' : '')?>>RO</option>1
                <option value="Minas gerais"<?=($uf_Usuario=="Minas gerais" ? 'selected' : '')?>>RR</option>
                <option value="Santa Catarina"<?=($uf_Usuario=="Santa Catarina" ? 'selected' : '')?>>SC</option>5
                <option value="São Paulo"<?=($uf_Usuario=="São Paulo" ? 'selected' : '')?>>SP</option>2
                <option value="Sergipe"<?=($uf_Usuario=="Sergipe" ? 'selected' : '')?>>SE</option>4
                <option value="Tocantins"<?=($uf_Usuario=="Tocantins" ? 'selected' : '')?>>TO</option>3
            </select>
        </div>
        <div class="col-sm-2">
        <label for="Nome">Status*</label>
            <select name="txtStatus" id="txtStatus" class="form-control">
                <option value="" selected> -->Selecione<--</option>
                <option value="Ativo"<?=($status_Usuario=="Ativo" ? 'selected' : '')?>>Ativo</option>
                <option value="Inativo"<?=($status_Usuario=="Inativo" ? 'selected' : '')?>>Inativo</option>
            </select>
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!--LOGIN , SENHA , CONFIRMAR SENHA , STATUS -->
        <div class="col-sm-4">
        <label for="Nome">Login*</label>
            <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário"value="<?=$login_Usuario?>">
        </div>
        <div class="col-sm-4">
        <label for="Nome">Senha*</label>
            <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a senha"value="<?=$senha_Usuario?>">
        </div>
        <div class="col-sm-4">
        <label for="Nome">Confirmar Senha*</label>
            <input type="password" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Informe a senha"value="<?=$confirmarSenha_Usuario?>">
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!-- Observação -->
        <div class="col-sm-12">
        <label for="Nome">Observação</label>
            <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"value="<?=$obs_Usuario?>"></textarea>
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-12">
            <button name="btoPesquisa" class="btn btn-dark"formaction="index.php">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-dark"formaction="Usuario_btoCadastrar.php">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-dark"formaction="Usuario_btoAlterar.php">Alterar</button>
            <button type="reset" name="btoLimpar" class="btn btn-dark">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger"formaction="Usuario_btoExcluir.php">Excluir</button>
        </div>
    </div>
</form>