@extends('layouts.principal')
@section('title','Editar Tanque')
@section('path')
	Piscicultura {{$piscicultura->nome}} > Editar Tanque {{$tanque->id}}
@stop
@section('conteudo')
  <form action="/salvarTanque" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" min="0" value="{{ $tanque->id}}" />
    <div class="form-group">
      <label>Volume</lable>
      <input class="form-control" type="number" step="any" name="volume" value="{{$tanque->volume}}" required/><br/>
    </div>
    <div class="form-group">
      <label>Necessita de Manutenção</label>
      <div class="radio">
        <label><input type="radio" name="manutencao_necessaria" value="Não" checked>Não</label>
        <label><input type="radio" name="manutencao_necessaria" value="Sim">Sim</label>
      </div>
    </div>
    <input class="btn btn-primary" type="submit" value="Salvar" />
  </form>
@stop