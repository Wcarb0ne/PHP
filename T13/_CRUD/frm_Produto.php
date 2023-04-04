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
                <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Produto"value="<?=$id_Produto?>">
            </div>
            <div class="col-sm-6"></div>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro"value="<?=$cadastro_Produto?>">
            </div>
        </div>
        <div class="row"><!--bloco nome, categoria,   Status-->
            <div class="col-sm-4">
                <label for="Nome">Nome*</label>
                <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome do Produto"value="<?=$nome_Produto?>">
            </div>
            
            <div class="col-sm-4">
            <label for="Nome">Nome Categoria*</label>
                <input type="text" class="form-control" name="txtCategoria" id="txtCategoria" placeholder="Nome do Produto"value="<?=$Categoria_Produto?>">  
            </div>
            
            <div class="col-sm-4">
                    <label for="Nome">Status*</label>
                    <select name="txtStatus" id="txtStatus" class="form-control">
                        <option value=""<?=($status_Produto=="" ? 'selected' : '')?>> -->Selecione<--</option>
                        <option value="Ativo"<?=($status_Produto=="Ativo" ? 'selected' : '')?>>Ativo</option>
                        <option value="Inativo"<?=($status_Produto=="Inativo" ? 'selected' : '')?>>Inativo</option>
                    </select>        
            </div>     
        </div>

        <div class="row">
            <div class="col-sm-4"><!--bloco custo, venda, data validade-->
                    <label for="custo">Custo</label>
                    <input type="number" class="form-control" name="txtCusto" id="txtCusto" placeholder="valor de custo"value="<?=$custo_Produto?>">
                </div>
                
                <div class="col-sm-4">
                <label for="number">Venda</label>
                    <input type="text" class="form-control" name="txtVenda" id="txtVenda" placeholder="valor de venda"value="<?=$venda_Produto?>">  
                </div>
                
                <div class="col-sm-4">
                    <label for="Nome">Data validade*</label>
                    <input type="date" class="form-control" name="txtValidade" id="txtValidade" placeholder="Data de Validade"value="<?=$validade_Produto?>">            
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
                <textarea name="txtObs" id="txtObs" class="form-control" rows="3" placeholder="Insira a observação do cadastro (campo não obrigatório)"value="<?=$obs_Produto?>"></textarea>
            </div>
        </div>
        <div class="row mt-4 mb-4"><!--botoes-->
            <div class="col-sm-12">
                <button name="btoPesquisa" class="btn btn-dark"formaction="Login_sistema.php?Tela=Produto">Pesquisar</button>
                <button name="btoCadastrar" class="btn btn-dark"formaction="Produto_btoCadastrar.php?Tela=Produto">Cadastrar</button>
                <button name="btoAlterar" class="btn btn-dark"formaction="Produto_btoAlterar.php?Tela=Produto">Alterar</button>
                <a type="reset" name="btoLimpar" class="btn btn-dark"href="Login_sistema.php?Tela=Produto">Limpar</a>
                <button name="btoExcluir" class="btn btn-danger"formaction="Produto_btoExcluir.php?Tela=Produto">Excluir</button>
            </div>
        </div>
        </div>
    </div>    
</form>