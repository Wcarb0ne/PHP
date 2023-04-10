const Uvalidacao =document.getElementById('Uvalidacao');
const campos = document.querySelectorAll('required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i;

Uvalidacao.addEventListener('btoCadastrar',(event)=>{
    event.preventDefault();
    nomeValidade();
    emailValidade();
    senhaValidade();
    confirmarsenhaValiade();
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
    if(campos[0].ariaValueMax.length < 10)
    {
        setError(0);
        //console.log('NOME DEVE CONTER 10 CARACTERES')
    }
    else
    {
        removeEroor(0);
        //console.log('NOME VALIDADO');
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
    function senhaValidade(){
        if(campos[2].value.length < 8)
        {
            setError(2);
        }
        else {
            removeEroor(2);
            confirmarsenhaValiade();
        }
    }
    function confirmarsenhaValiade(){
        if(campos[2].value == campos[3].value && campos[3].value.length >= 8)
        {
            removeEroor(3);
        }
        else
        {
            setError(3);
        }
    }

}