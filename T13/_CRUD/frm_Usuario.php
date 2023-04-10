<?php include_once('Usuario_btoPesquisa.php')?>
<form id="frm_Usuario"  action="" class="form-control" method="POST">
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
            <span class="span-required">Preencha o campo nome</span>
        </div>
        <div class="col-sm-3">
            <label for="Nome">Data Nascimento*</label>
            <input type="date" class="form-control" name="txtDataNasc" id="txtDataNasc" placeholder="Data Nascimento"value="<?=$dataNasc_Usuario?>">
            <span class="span-required">Preencha o campo data</span>
        </div>
        <div class="col-sm-3">
            <label for="Nome">CPF*</label>
            <input type="tel" class="form-control" name="txtCpf" id="txtCpf" placeholder="Informe seu CPF"value="<?=$cpf_Usuario?>">
            <span class="span-required">Preencha o campo Cpf</span>
        </div>
        <div class="col-sm-3">
            <label for="Nome">Gênero*</label>
            <select name="txtGenero" id="txtGenero" class="form-control">
                <option value=""<?=($genero_Usuario=="" ? 'selected' : '')?>> ->Selecione seu Gênero<-</option>
                <option value="Masculino"<?=($genero_Usuario=="Masculino" ? 'selected' : '')?>>Masculino</option>
                <option value="Feminino"<?=($genero_Usuario=="Feminino" ? 'selected' : '')?>>Feminino</option>
            </select>
            <span class="span-required">selecione o campo genero</span>
        </div>
    </div>
    <div class="row mt-1"><!--bloco  email tel1 tel 2-->
        <div class="col-sm-4">
            <label for="Nome">E-mail*</label>
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Insira seu Email"value="<?=$email_Usuario?>">
            <span class="span-required">insira um email valido</span>
        </div>
        <div class="col-sm-4">
            <label for="Nome">Telefone*</label>
            <input type="tel" class="form-control" name="txtTelefone1" id="txtTelefone1" placeholder="Insira um telefone"value="<?=$telefone1_Usuario?>">
            <span class="span-required">Preencha o campo telefone</span>
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
            <span class="span-required">Preencha o campo logradouro</span>
        </div>
        <div class="col-sm-2">
            <label for="Nome">Cep*</label>
            <input type="tel" class="form-control" name="txtCep" id="txtCep" placeholder="Informe seu Cep"value="<?=$cep_Usuario?>">
            <span class="span-required">Preencha o campo Cep</span>
        </div>
        <div class="col-sm-3">
            <label for="Nome">Cidade*</label>
            <input type="text" class="form-control" name="txtCidade" id="txtCidade" placeholder="Inform sua Cidade"value="<?=$cidade_Usuario?>">
            <span class="span-required">Preencha o campo cidade</span>
        </div>
        <div class="col-sm-2">
            <label for="Nome">UF*</label>
            <select name="txtUF" id="txtUF" class="form-control">
                <option value=""<?=($uf_Usuario=="" ? 'selected' : '')?>> ->Selecione<- </option>
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
            <span class="span-required">selecione o campo uf</span>
        </div>
        <div class="col-sm-2">
            <label for="Nome">Status*</label>
            <select name="txtStatus" id="txtStatus" class="form-control">
                <option value="" selected> ->Selecione<- </option>
                <option value="Ativo"<?=($status_Usuario=="Ativo" ? 'selected' : '')?>>Ativo</option>
                <option value="Inativo"<?=($status_Usuario=="Inativo" ? 'selected' : '')?>>Inativo</option>
            </select>
            <span class="span-required">selecione o status</span>
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!--LOGIN , SENHA , CONFIRMAR SENHA , STATUS -->
        <div class="col-sm-4">
            <label for="Nome">Login*</label>
            <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário"value="<?=$login_Usuario?>">
            <span class="span-required">Preencha o campo login</span>
        </div>
        <div class="col-sm-4">
            <label for="Nome">Senha*</label>
            <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a senha"value="<?=$senha_Usuario?>">
            <span class="span-required">Preencha o campo senha</span>
        </div>
        <div class="col-sm-4">
            <label for="Nome">Confirmar Senha*</label>
            <input type="password" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Informe a senha"value="<?=$confirmarSenha_Usuario?>">
            <span class="span-required">Preencha o campo confirmar senha</span>
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!-- Observação -->
        <div class="col-sm-12">
        <label for="Nome">Observação</label>
            <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"><?=$obs_Usuario?></textarea>
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-12">
            <button name="btoPesquisa" class="btn btn-primary"formaction="Login_sistema.php?Tela=Usuario">Pesquisar</button>
            <button type="submit" name="btoCadastrar" class="btn btn-success"formaction="Usuario_btoCadastrar.php?Tela=Usuario">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning"formaction="Usuario_btoAlterar.php?Tela=Usuario">Alterar</button>
            <a type="reset" name="btoLimpar" class="btn btn-dark"href="Login_sistema.php?Tela=Usuario">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger"formaction="Usuario_btoExcluir.php?Tela=Usuario">Excluir</button>
            <button name="btotabela" class="btn btn-info"formaction="Login_sistema.php?Tela=Ctabela">Tabela</button>
        </div>
    </div>
</form>
<script>

const Uvalidacao =document.getElementById('Uvalidacao');
const campos = document.querySelectorAll('required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i;

Uvalidacao.addEventListener('submit',(event)=>{
    event.preventDefault();
    nomeValidade();
});

function setError(frm_Usuario){
    campos(frm_Usuario).style.border = '2px solid red';
    spans(frm_Usuario).style.display = 'block';
}

function removeEroor(frm_Usuario){
    campos(frm_Usuario).style.border = '';
    spans(frm_Usuario).style.display = 'none';
}

function nomeValidade(){
    if(campos[2].ariaValueMax.length < 5)
    {
        setError(2);
        //console.log('NOME DEVE CONTER 10 CARACTERES')
    }
    else
    {
        removeEroor(2);
        //console.log('NOME VALIDADO');
    }
}
function dataValidade(){
    if(campos[3].ariaValueMax.length < 5)
    {
        setError(3);
    }
    else
    {
        removeEroor(3);
    }
}
function cpfValidade(){
    if(campos[4].ariaValueMax.length < 5)
    {
        setError(4);
    }
    else
    {
        removeEroor(4);
    }
}
function generoValidade(){
    if(campos[5].ariaValueMax.length < 5)
    {
        setError(5);
    }
    else
    {
        removeEroor(5);
    }
}
emailValidade(){
 if(emailRegex.test(campos[1].value))
        {
            setError(1);
            //console.log('Email validado');
        }
        else
        {
            removeEroor(1);
            //console.log('Email não validado');
        }
}
function telefone1Validade(){
    if(campos[7].ariaValueMax.length < 11)
    {
        setError(7);
    }
    else
    {
        removeEroor(7);
    }
}
function telefone2Validade(){
    if(campos[8].ariaValueMax.length < 11)
    {
        setError(8);
    }
    else
    {
        removeEroor(8);
    }
}
function logradouroValidade(){
    if(campos[9].ariaValueMax.length < 5)
    {
        setError(9);
    }
    else
    {
        removeEroor(9);
    }
}
function cepValidade(){
    if(campos[10].ariaValueMax.length < 5)
    {
        setError(10);
    }
    else
    {
        removeEroor(10);
    }
}
function cidadeValidade(){
    if(campos[11].ariaValueMax.length < 5)
    {
        setError(11);
    }
    else
    {
        removeEroor(11);
    }
}
function ufValidade(){
    if(campos[12].ariaValueMax.length < 5)
    {
        setError(12);
    }
    else
    {
        removeEroor(12);
    }
}
function statusValidade(){
    if(campos[13].ariaValueMax.length < 5)
    {
        setError(13);
    }
    else
    {
        removeEroor(13);
    }
}
function loginValidade(){
    if(campos[14].ariaValueMax.length < 10)
    {
        setError(14);
        //console.log('LOGIN DEVE CONTER 10 CARACTERES')
    }
    else
    {
        removeEroor(14);
        //console.log('LOGIN VALIDADO');
    }
}
function senhaValidade(){
        if(campos[15].value.length < 3)
        {
            setError(15);
        }
        else {
            removeEroor(15);
            confirmarsenhaValiade();
        }
}
function confirmarsenhaValiade(){
        if(campos[15].value == campos[16].value && campos[16].value.length >= 3)
        {
            removeEroor(16);
        }
        else
        {
            setError(16);
        }
}



</script>