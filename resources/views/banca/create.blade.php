@extends('layouts.master')

@section('header')
	<h2>Adicionar nova Banca</h2>
@stop

@section('content')

	{!! Form::open(['url'=>'banca','class'=>'form-horizontal']) !!}
		<div class="form-group">
			{!! Form::label('apresentador','Apresentador',['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('apresentador',null,['class'=>'form-control']) !!}
				{!! $errors->has('apresentador')?$errors->first('apresentador'):'' !!}
			</div>
		</div>
		
		<div class="form-group">
			{!! Form::label('titulo','Título',['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('titulo',null,['class'=>'form-control']) !!}
				{!! $errors->has('titulo')?$errors->first('titulo'):'' !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('palavras_chave','Palavras-chave',['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('palavras_chave',null,['class'=>'form-control']) !!}
				{!! $errors->has('palavras_chave')?$errors->first('palavras_chave'):'' !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('membros_banca','Membros da Banca',['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('membros_banca',null,['class'=>'form-control']) !!}
				{!! $errors->has('membros_banca')?$errors->first('membros_banca'):'' !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('horario','Horário',['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('horario',null,['class'=>'form-control']) !!}
				{!! $errors->has('horario')?$errors->first('horario'):'' !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('resumo','Resumo',['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::textarea('resumo',null,['class'=>'form-control']) !!}
				{!! $errors->has('resumo')?$errors->first('resumo'):'' !!}
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
			{!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
			</div>
		</div>
	{!! Form::close() !!}

@stop