<?php include_once('Produto_btoPesquisa.php')?>
<form action="" class="form-control" method="POST">
<div class="row">
        <div class="col-sm-12">
            <h1 text-align="">Criar Produto</h1>
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
    <div class="row"><!--bloco nome, id_Produto(combo),  Status-->
        <div class="col-sm-4">
            <label for="Nome">Nome Produto*</label>
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Informe o Nome"value="<?=$nome_Produto?>">
        </div>
        <div class="col-sm-4">
        <label for="Nome">Categoria Produto*</label>
            <select type="list" class="form-control" name="txtNomeCategoria" id="txtNomeCategoria"value="<?=$id_Categoria_Produto?>">
                <?php include_once('Produto_Categoria.php')?>
            </select>
        </div>
        <div class="col-sm-4">
                <label for="Nome">Status*</label>
                <select name="txtStatus" id="txtStatus" class="form-control">
                    <option value=""<?=($status_Produto=="" ? 'selected' : '')?>> ->Selecione<-</option>
                    <option value="Ativo"<?=($status_Produto=="Ativo" ? 'selected' : '')?>>Ativo</option>
                    <option value="Inativo"<?=($status_Produto=="Inativo" ? 'selected' : '')?>>Inativo</option>
                </select>        
        </div>
    </div>
    <div class="row"><!--bloco custo, venda-->
        <div class="col-sm-4">
            <label for="Nome">Preço de Custo*</label>
            <input type="number" class="form-control" name="txtVcusto" id="txtVcusto" placeholder="Informe o Preço"value="<?=$vcusto_Produto?>">
        </div>        
        <div class="col-sm-4">
            <label for="Nome">Preço de Venda*</label>
            <input type="number" class="form-control" name="txtVvenda" id="txtVvenda" placeholder="Informe o Preço"value="<?=$vvenda_Produto?>">
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row mt-1"><!-- Descrição -->
        <div class="col-sm-12">
            <label for="Nome">Descrição</label>
            <textarea name="txtDescricao" id="txtDescricao" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo Obrigatório)"><?=$descricao_Produto?></textarea>
        </div>
    </div>
    <div class="row mt-1"><!-- Observação -->
        <div class="col-sm-12">
            <label for="Nome">Observação</label>
            <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"><?=$obs_Produto?></textarea>
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-12">
            <button name="btoPesquisa" class="btn btn-primary"formaction="Login_sistema.php?Tela=Produto">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-success"formaction="Produto_btoCadastrar.php?Tela=Produto">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning"formaction="Produto_btoAlterar.php?Tela=Produto">Alterar</button>
            <a type="reset" name="btoLimpar" class="btn btn-dark"href="Login_sistema.php?Tela=Produto">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger"formaction="Produto_btoExcluir.php?Tela=Produto">Excluir</button>
            <button name="btotabela" class="btn btn-info"formaction="Login_sistema.php?Tela=Ptabela">Tabela</button>
        </div>
    </div>
</form>
