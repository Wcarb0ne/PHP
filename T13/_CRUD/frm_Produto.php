<?php include_once('Produto_btoPesquisa.php')?>
<form action="" class="form-control" method="POST">
<div class="row">
        <div class="col-sm-12">
            <h1 text-align="">Tela de Cadastro de Produtos</h1>
        </div>
    </div>
    <hr>
    <div class="row"><!--bloco id e data de cadastro-->
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario"value="<?=$id_Produto?>">
        </div>
        <div class="col-sm-6"></div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro"value="<?=$cadastro_Produto?>">
        </div>
    </div>
    <div class="row"><!--bloco nome,  Status-->
    <div class="col-sm-3">
            <label for="Nome">Nome*</label>
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Completo"value="<?=$nome_Produto?>">
        </div>
        <div class="col-sm-6"></div>
        <div class="col-sm-3">
            <label for="Nome">Status*</label>
                <select name="txtStatus" id="txtStatus" class="form-control">
                    <option value=""<?=($status_Produto=="" ? 'selected' : '')?>> -->Selecione<--</option>
                    <option value="Ativo"<?=($status_Produto=="Ativo" ? 'selected' : '')?>>Ativo</option>
                    <option value="Inativo"<?=($status_Produto=="Inativo" ? 'selected' : '')?>>Inativo</option>
                </select>        
        </div>
    </div>
    <div class="row mt-1"><!-- Descrição -->
        <div class="col-sm-12">
        <label for="Nome">Descrição</label>
            <textarea name="txtDescricao" id="txtDescricao" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo Obrigatório)"value="<?=$descricao_Produto?>"></textarea>
        </div>
    </div>
    <div class="row mt-1"><!-- Observação -->
        <div class="col-sm-12">
        <label for="Nome">Observação</label>
            <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"value="<?=$obs_Produto?>"></textarea>
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-12">
            <button name="btoPesquisa" class="btn btn-dark"formaction="index.php">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-dark"formaction="Produto_btoCadastrar.php">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-dark"formaction="Produto_btoAlterar.php">Alterar</button>
            <button type="reset" name="btoLimpar" class="btn btn-dark"formaction="index.php">Limpar</button>
            <button name="btoExcluir" class="btn btn-danger"formaction="Produto_btoExcluir.php">Excluir</button>
        </div>
    </div>
</form>