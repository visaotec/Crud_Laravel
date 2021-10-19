<!--Crud com Laravel 8
   Autor: Isaias Oliveira
   visaotec.com@gmail.com
 -->
@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')
<div class="container mt-4">
    <form method="POST" action="{{route('produtos.insert')}}">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="" name="nome" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Valor</label>
                    <input type="text" class="form-control" id="" name="valor">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Estoque</label>
                    <input type="text" class="form-control" id="" name="estoque">
                </div>
            </div>
        </div>




        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" id="" name="descricao" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection

