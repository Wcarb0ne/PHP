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
    <div class="row mt-4"><!--bloco NOME , NASC., CPF, GENERO-->
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Completo">
        </div>
        <div class="col-sm-3">
            <input type="date" class="form-control" name="txtDataNasc" id="txtDataNasc" placeholder="Data Nascimento">
        </div>
        <div class="col-sm-3">
            <input type="tel" class="form-control" name="txtCpf" id="txtCpf" placeholder="Informe seu CPF">
        </div>
        <div class="col-sm-3">
            <select name="txtGenero" id="txtGenero" class="form-control">
                <option value="" selected>-- Selecione seu Gênero --</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
        </div>
    </div>
    <div class="row mt-4"><!--bloco  email tel1 tel 2-->
        <div class="col-sm-4">
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Insira seu Email">
        </div>
        <div class="col-sm-4">
            <input type="tel" class="form-control" name="txtTelefone1" id="txtTelefone1" placeholder="Insira um telefone">
        </div>
        <div class="col-sm-4">
            <input type="tel" class="form-control" name="txtTelefone2" id="txtTelefone2" placeholder="Insira um telefone 2">
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-4"><!--LOGRADOURO, CIDADE , estado(UF) , CEP-->
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtLogradouro" id="txtLogradouro" placeholder="Logradouro">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtCidade" id="txtCidade" placeholder="Inform sua Cidade">
        </div>
        <div class="col-sm-3">
            <select name="txtUF" id="txtUF" class="form-control">
                <option value="" selected>-- Selecione Seu Estado --</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Minas gerais">Minas gerais</option>
            </select>
        </div>
        <div class="col-sm-3">
            <input type="tel" class="form-control" name="txtCep" id="txtCep" placeholder="Informe seu Cep">
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-4"><!--LOGIN , SENHA , CONFIRMAR SENHA , STATUS -->
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário">
        </div>
        <div class="col-sm-3">
            <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a senha">
        </div>
        <div class="col-sm-3">
            <input type="password" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirmar senha">
        </div>
        <div class="col-sm-3">
            <select name="txtStatus" id="txtStatus" class="form-control">
                <option value="" selected>-- Selecione o status --</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-4"><!-- Observação -->
        <div class="col-sm-12">
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