alert("Ola bem vindo a pagina de contato do site  The North's Birds");

function validaDados (){
    if(document.form1.nome.value=="") 
        { 
            alert( " Preencha o campo NOME corretamente!" ); document.form1.nome.focus(); return false; 
        } 

    if( document.form1.email.value.indexOf('.')==-1)
        { 
            alert( "Preencha campo E-MAIL como o exemplo:xxxxx@xxxx.xxx " ); document.form1.email.focus(); return false; 
        }
        
        if (document.form1.mensagem.value=="") 
            { 
                alert( "Preencha o campo MENSAGEM!" ); document.form1.mensagem.focus(); return false; 
            } 
     if (document.form1.mensagem.value.length < 20 ) 
        { 
            alert( "É necessario preencher o campo MENSAGEM com mais de 20 caracteres!" ); document.form1.mensagem.focus(); return false; 
        }
        
    return true  && alert ("Obrigado pela sua opinião,atenciosamente equipe The North's Birds ");
 }