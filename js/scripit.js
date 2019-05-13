function editar(id,nome){
    // criar form
    let form = document.createElement('form');
    form.action="controller.php?acao=atualizar";
    form.method="POST";
    form.className="row";

    // criar input
    let input = document.createElement('input');
    input.type="text";
    input.className="col-9 form-control";
    input.value=nome;
    input.name="nome";

    let inputId = document.createElement('input');
    inputId.type="hidden";
    inputId.name="id";
    inputId.value=id;
    


    // criar button
    let button = document.createElement('button');
    button.type="submit";
    button.className = "col-3 btn btn-info";
    button.innerHTML = "Atualizar";

    form.appendChild(input);
    form.appendChild(inputId);
    form.appendChild(button);
    
    var tarefa =document.getElementById("nome_"+id);
    tarefa.innerHTML="";
    tarefa.insertBefore(form,tarefa[0]);
    
}

function remover(id){
    window.location='controller.php?acao=remover&id='+id;

}