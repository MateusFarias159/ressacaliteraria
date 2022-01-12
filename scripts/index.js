function handleSubmit(e) {
  e.preventDefault();
  $("#submitModal").modal("show");
}

function deletar(id){
  if(window.confirm("tem certeza que deseja excluir este item?")){
    window.location.href = "ws/deletar-livro.php?id="+id;
  }
}