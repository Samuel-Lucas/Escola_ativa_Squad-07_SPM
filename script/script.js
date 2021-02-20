function validaForm(form) {
    let nome = form.nome.value
    let sobrenome = form.sobrenome.value
    let email = form.email.value
    let perfil = form.perfil.value
    let senha = form.senha.value
    let confirmasenha = form.confirmasenha.value
    let radios = document.getElementsByName('genero')

    if(nome == '') {
        alert('Preencha seu Nome')
        form.nome.focus()
        return false
    }

    if(nome.length > 25) {
        alert('Ultrapassou o limite do campo nome')
        form.nome.focus()
        return false
    }

    if (!/^[a-zA-Z]*$/g.test(nome)) {
        alert("Seu nome possui caracteres inválidos")
        form.nome.focus()
        return false
    }

    if(sobrenome == '') {
        alert('Preencha seu sobrenome')
        form.sobrenome.focus()
        return false
    }

    if(sobrenome.length > 25) {
        alert('Ultrapassou o limite do campo sobrenome')
        form.sobrenome.focus()
        return false
    }

    if (!/^[a-zA-Z]*$/g.test(sobrenome)) {
        alert("Seu sobrenome possui caracteres inválidos")
        form.sobrenome.focus()
        return false
    }

    if(!validateRadio(radios)) {
        alert('Selecione o seu gênero')
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
    let metodologias = document.getElementsByName('metodologia')
    let checkbox = form.termo


    if (disciplina == '') {
        alert('Selecione uma disciplina.')
        form.disciplina.focus()
        return false
    }
    if (!validateRadio(metodologias)){
        alert('Selecione uma metodologia.')
        return false
    }

    if (titulo.length > 30) {
        alert('Limite máximo de caracteres para o título ultrapassado.')
        form.titulo.focus()
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

    if (descricao.length > 1000) {
        alert('Limite máximo de caracteres para a descrição ultrapassado.')
        form.descricao.focus()
        return false
    }

    if (links == '') {
        alert('Informe links de referência.')
        form.links.focus()
        return false
    }

    if (links.length > 100) {
        alert('Limite máximo de caracteres para as referências ultrapassado.')
        form.links.focus()
        return false
    }

    if (!validateRadio(metodologias)){
        alert('Selecione uma metodologia.')
        return false
    }

    if (!checkbox.checked){
        alert('É necessário aceitar o termo de conteúdo para prosseguir.')
        return false
    }
}

function validateRadio(radios) {

    for (i = 0; i < radios.length; ++ i) {
        if (radios[i].checked) return true
    }

    return false
}