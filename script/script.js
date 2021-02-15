function validaForm(form) {
    let nome = form.nome.value
    let sobrenome = form.sobrenome.value
    let email = form.email.value
    let perfil = form.perfil.value
    let senha = form.senha.value
    let confirmasenha = form.confirmasenha.value

        if(nome == '') {
            alert('Preencha seu Nome')
            form.nome.focus()
            return false
        }

        if(nome.length > 50) {
            alert('Ultrapassou o limite do campo nome')
            form.nome.focus()
           return false
        }

        if(sobrenome == '') {
            alert('Preencha seu sobrenome')
            form.nome.focus()
            return false
        }

        if(sobrenome.length > 50) {
            alert('Ultrapassou o limite do campo sobrenome')
            form.nome.focus()
           return false
        }

        if(perfil == '') {
            alert('Escolha o seu Perfil')
            form.perfil.focus()
            return false
        }

        if(email == '' || email.indexOf('@') == -1 || email.indexOf('.') == -1) {
            alert('Preencha o campo E-mail')
            form.email.focus()
            return false
        }

        if(senha == '') {
            alert('Preencha o campo senha')
            form.senha.focus()
            return false
        }

        if(confirmasenha == '') {
            alert('Confirme sua senha')
            form.confirmasenha.focus()
            return false
        }

        if(senha.length < 6) {
            alert('Sua senha precisa ter no mínimo 6 caracteres')
            form.senha.focus()
            return false

        }

        if(senha != confirmasenha) {
            alert('Sua senha digitada e na confirmação estão diferentes')
            form.senha.focus()
            form.confirmasenha.focus()
            return false
        }         

}


function validaAtividade(form){
    let disciplina = form.disciplina.value
    let titulo = form.titulo.value
    let descricao = form.descricao.value
    let links = form.links.value


    if (disciplina == '') {
        alert('Selecione uma disciplina.')
        form.disciplina.focus()
        return false
    }

    
    if (titulo == '') {
        alert('Informe um titulo.')
        form.titulo.focus()
        return false
    }
    if (descricao == '') {
        alert('Faça uma descrição do seu projeto.')
        form.descricao.focus()
        return false
    }
    if (links == '') {
        alert('Informe um link de referência.')
        form.links.focus()
        return false
    }
}



