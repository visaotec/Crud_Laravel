<!--Crud com Laravel 8
   Autor: Isaias Oliveira
   visaotec.com@gmail.com
 -->
@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
<?php
@session_start();
if(@$_SESSION['id_usuario'] == null){
  echo "<script language='javascript'> window.location='./' </script>";
}
if(!isset($id)){
  $id = "";

}

?>
<div class="container">

<a href="{{route('produtos.inserir')}}" type="button" class="mt-4 mb-4 btn btn-success">Inserir Produto</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Valor</th>
          <th>Estoque</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>
      @foreach($produtos as $produto)
         <tr>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->valor}}</td>
            <td>{{$produto->estoque}}</td>
            <td>
            <a title="Detalhes do Produto" href="{{route('produtos.descricao', $produto->id)}}"><i class="fas fa-eye text-primary mr-1"></i></a>
            <a href="{{route('produtos.edit', $produto)}}"><i class="fas fa-edit text-info mr-1"></i></a>
            <a href="{{route('produtos.modal', $produto)}}"><i class="fas fa-trash text-danger mr-1"></i></a>
            </td>
        </tr>
        @endforeach
      </tbody>
  </table>
</div>
</div>
</div>


    <!-- {{$produtos->links()}} -->


</div>

<script type="text/javascript">
  $(document).ready(function () {
    $('#dataTable').dataTable({
      "ordering": false
    })

  });
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja Realmente Excluir este Registro?

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form method="POST" action="{{route('produtos.delete', $id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
if(@$id != ""){
  echo "<script>$('#exampleModal').modal('show');</script>";
}
?>

@endsection


