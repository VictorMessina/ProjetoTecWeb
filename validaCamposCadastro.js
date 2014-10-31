function validaDados(){
    if(document.form.tia.value.length < 8 || document.form.tia.value.length >=9 ){ 
            alert( " Preencha o campo tia corretamente, com os oito digitos necessarios" ); document.form.tia.focus(); return false; 
        } 

    if( document.form.nome.value==""){ 
            alert( "Preencha campo nome corretamente" ); document.form.nome.focus(); return false; 
        }
        
        if (document.form.sobrenome.value==""){ 
                alert( "Preencha o campo sobrenome corretamente" ); document.form.sobrenome.focus(); return false; 
            } 
     if (document.form.email.value.indexOf('.')==-1){ 
         alert( "Preencha campo e-mail como o exemplo:xxxxx@xxxx.xxx " ); document.form.email.focus(); return false; 
        }
        
        if( document.form.curso.value=="" || document.form.curso.value.length < 12){ 
            alert( "Preencha curso corretamente, exemplo: faculdade de... "); document.form.curso.focus(); return false; 
        }
        
        if(document.form.senha.value=="" || document.form.senha.value.length < 6){ 
            alert( "Preencha campo senha corretamente, com mais de 6 caracteres" ); document.form.senha.focus(); return false; 
        }
        
    return true && alert ("cadastro efetuado com sucesso, faça o login na pagina principal");
}