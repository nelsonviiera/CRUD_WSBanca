@extends('layouts.master')

@section('header')
	<h2>Bancas registradas</h2>
@stop

@section('content')
	<a href  = "banca/create" class="btn btn-primary"> Adicionar Banca </a>
	<table class="table table-bordered table-responsive" style="margin-top: 10px">
		<thead>
			<tr>
				<th>ID</th>
				<th>Apresentador</th>
				<th>título</th>
				<th>Palavras-chave</th>
				<th>Membros da banca</th>
				<th>Horário</th>
				<th>Resumo</th>
				<th colspan="2">Operação</th>
			</tr>
		</thead>
		<tbody>
		@foreach($bancas as $banca)
			<tr>
				<td>{{ $banca->id }}</td>
				<td>{{ $banca->apresentador }}</td>
				<td>{{ $banca->titulo }}</td>
				<td>{{ $banca->palavras_chave }}</td>
				<td>{{ $banca->membros_banca }}</td>
				<td>{{ $banca->horario }}</td>
				<td>{{ $banca->resumo }}</td>
				<td>
					<a href="{{ route('banca.edit', $banca->id) }}" class="btn btn-success">Editar</a>
				</td>
				<td>
					{!! Form::open(['method'=>'delete', 'route'=>['banca.destroy', $banca->id]]) !!}
					{!! Form::submit('Delete', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Deseja excluir esta Banca?")']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop