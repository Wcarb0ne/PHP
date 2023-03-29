//codigo teste pra validação

$('#frm_Usuario.php').validate({
    errorLabelContainer: ".containerError",
    wrapper: "li",
    rules:
    {
        txtNome: {
            required: true
        },
        txtdataNasc: {
            required: true
        },
        txtCpf: {
            required: true
        },
    },
    messages:{
        txtNome:{
            required: "O campo nome é Obrigatório"
        },
        txtdataNasc: {
            required: "O campo nome é Obrigatório"
        },
        txtCpf: {
            required: "O campo nome é Obrigatório"
        }
    }
});

//formulario exemplo pra validação

//Perceba que os campos com * (asterisco) são obrigatório e você deve usar a lógica para escolher
//os campos que você deve ou não validar. Por exemplo, o campo Ativo é obrigatório mas pelo fato de
//ser um checkbox não tem como o usuário não preencher, pois ou ele está marcado ou não está, sendo
//assim qual a finalidade de verificar se este campo está preenchido ? Nenhuma. Outro exemplo é o 
//campo Perfil, pelo fato de ser um combobox e sempre vai ter algum item selecionado, não tem como
//o usuário não selecionar um item, pois sempre haverá um item selecionado mesmo que ele nem mexa 
//neste campo.

<form action="" enctype="multipart/form-data" method="post" name="form_cad_usuario"
id="form_cad_usuario">

    <label for="ativo">Ativo:</label>
    <input type="checkbox" name="ativo" id="ativo" value="s" <?php
    if (isset($pojoUsuario)) {
        if ($pojoUsuario->getAtivo() == 's')
            echo "checked";
    }
    else
        echo "checked";
    ?> /><br /><br />

    <label for="cod_perfil">Perfil:</label>
    <select name="cod_perfil">
        <?php
        $list_perfis = ControllerPerfil::getInstance()->BuscarTodos();

        if (isset($pojoUsuario)) {
            if ($pojoUsuario->getPerfil() != null) {
                $cod_perfil_selected = $pojoUsuario->getPerfil()->getCod_perfil();
            }
            else
                $cod_perfil_selected = 0;
        }
        else
            $cod_perfil_selected = 0;

        foreach ($list_perfis as $l) {
            $nome = $l->getNome();
            $cod = $l->getCod_perfil();
            if ($cod == $cod_perfil_selected)
                echo "<option value='$cod' selected>$nome</option>";
            else
                echo "<option value='$cod'>$nome</option>";
        }
        ?>
    </select><br/><br/>

    <label for="nome">Nome*:</label>
    <input placeholder="Informe o Nome" type="text" name="nome" id="nome"
    value="<?php
    if (isset($pojoUsuario)) {
        echo $pojoUsuario->getNome();
    }
    ?>" /><br />

    <label for="email">E-mail*:</label>
    <input placeholder="Informe o Email" type="text" name="email" id="email"
    value="<?php
    if (isset($pojoUsuario)) {
        echo $pojoUsuario->getEmail();
    }
    ?>" /><br />

    <div class="acoes">
        <input type="submit" name="salvar" value="Salvar" />
        <input type="reset" name="cancelar" value="Cancelar"
        onclick="dialogoConfirm('Cancelar', 'Deseja Cancelar ?')" />
    </div>
</form>

//https://www.devmedia.com.br/validacao-de-dados-em-php-com-jquery-validate/28544