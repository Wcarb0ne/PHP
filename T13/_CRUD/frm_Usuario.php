<form action="" class="form-control" method="POST">
    <div class="row">
        <div class="col-sm-12">
            <h1 text-align="">Formulário de Cadastro de Usuários</h1>
        </div>
    </div>
    <hr>
    <div class="row"><!--bloco id e data de cadastro-->
        <div class="col-sm-3">
            <input type="number" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario">
        </div>
        <div class="col-sm-6"></div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!--bloco NOME , NASC., CPF, GENERO-->
        <div class="col-sm-3">
            <label for="Nome">Nome*</label>
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Completo">
        </div>
        <div class="col-sm-3">
        <label for="Nome">Data Nascimento*</label>
            <input type="date" class="form-control" name="txtDataNasc" id="txtDataNasc" placeholder="Data Nascimento">
        </div>
        <div class="col-sm-3">
        <label for="Nome">CPF*</label>
            <input type="tel" class="form-control" name="txtCpf" id="txtCpf" placeholder="Informe seu CPF">
        </div>
        <div class="col-sm-3">
        <label for="Nome">Gênero*</label>
            <select name="txtGenero" id="txtGenero" class="form-control">
                <option value="" selected>-- Selecione seu Gênero --</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
        </div>
    </div>
    <div class="row mt-1"><!--bloco  email tel1 tel 2-->
        <div class="col-sm-4">
        <label for="Nome">E-mail*</label>
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Insira seu Email">
        </div>
        <div class="col-sm-4">
        <label for="Nome">Telefone*</label>
            <input type="tel" class="form-control" name="txtTelefone1" id="txtTelefone1" placeholder="Insira um telefone">
        </div>
        <div class="col-sm-4">
        <label for="Nome">Telefone2</label>
            <input type="tel" class="form-control" name="txtTelefone2" id="txtTelefone2" placeholder="Insira um telefone 2">
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!--LOGRADOURO, CIDADE , estado(UF) , CEP-->
        <div class="col-sm-3">
        <label for="Nome">Logradouro*</label>
            <input type="text" class="form-control" name="txtLogradouro" id="txtLogradouro" placeholder="Ex: Rua Luiz Faccini, 132. ">
        </div>
        <div class="col-sm-2">
        <label for="Nome">Cep*</label>
            <input type="tel" class="form-control" name="txtCep" id="txtCep" placeholder="Informe seu Cep">
        </div>
        <div class="col-sm-3">
        <label for="Nome">Cidade*</label>
            <input type="text" class="form-control" name="txtCidade" id="txtCidade" placeholder="Inform sua Cidade">
        </div>
        <div class="col-sm-2">
        <label for="Nome">UF*</label>
            <select name="txtUF" id="txtUF" class="form-control">
                <option value="" selected> -->Selecione<--</option>
                <option value="Acre">AC</option>
                <option value="Alagoas">AL</option>
                <option value="Amapá">AP</option>
                <option value="Amazonas">AM</option>
                <option value="Bahia">BA</option>18
                <option value="Ceará">CE</option>17
                <option value="Minas gerais">DF</option>
                <option value="Espírito Santo">ES</option>16
                <option value="Goiás">GO</option>15
                <option value="Maranhão">MA</option>14
                <option value="Mato Grosso">MT</option>15
                <option value="Minas gerais">MG</option>13
                <option value="Pará">PA</option>12
                <option value="São Paulo">PB</option>8
                <option value="Paraná">PR</option> 9
                <option value="Pernambuco">PE</option>10
                <option value="Piauí">PI</option>11
                <option value="Rio de Janeiro">RJ</option>7
                <option value="Rio Grande do Norte">RN</option>6
                <option value="Rio Grande do Sul">RS</option>7
                <option value="Rondônia">RO</option>1
                <option value="Minas gerais">RR</option>
                <option value="Santa Catarina">SC</option>5
                <option value="São Paulo">SP</option>2
                <option value="Sergipe">SE</option>4
                <option value="Tocantins">TO</option>3
            </select>
        </div>
        <div class="col-sm-2">
        <label for="Nome">Status*</label>
            <select name="txtStatus" id="txtStatus" class="form-control">
                <option value="" selected> -->Selecione<--</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!--LOGIN , SENHA , CONFIRMAR SENHA , STATUS -->
        <div class="col-sm-4">
        <label for="Nome">Login*</label>
            <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário">
        </div>
        <div class="col-sm-4">
        <label for="Nome">Senha*</label>
            <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a senha">
        </div>
        <div class="col-sm-4">
        <label for="Nome">Confirmar Senha*</label>
            <input type="password" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Informe a senha">
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!-- Observação -->
        <div class="col-sm-12">
        <label for="Nome">Observação</label>
            <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"></textarea>
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-12">
            <button name="btoPesquisa" class="btn btn-primary"formaction="Usuario_btoPesquisa.php">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-success"formaction="Usuario_btoCadastrar.php">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning"formaction="Usuario_btoAlterar.php">Alterar</button>
            <button type="reset" name="btoLimpar" class="btn btn-dark">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger"formaction="Usuario_btoExcluir.php">Excluir</button>
        </div>
    </div>
</form>