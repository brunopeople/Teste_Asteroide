@extends('layout')

@section('content')

<style>
	.uper{
		margin-top:40px;
</style>

<div class="card uper">
	<div class="card-header">
		Add Students
</div>

<div class="card-body">
	@if($erros->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($erros->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>	
		</div><br/>
	@endif

	<form method="post" action="{{route('student.store') }}">
		<div class="form-group">
			@crsf
			<label for="name">Nome do Aluno:</label>
			<input type="text" class="form-control" name="student_name"/>
		</div>

	<div class="form-group">
		<label for="price">Sobrenome do Aluno:</label>
		<input type="text" class="form-control" name="student_surname"/>
	</div>

	<div class="form-group">
		<label for="price">Email Aluno:</label>
		<input type="text" class="form-control" name="student_email"/>
	</div>

	<div class="form-group">
		<label for="price">Telefone do Aluno:</label>
		<input type="text"  class="form-control" name="student_phone">
	</div>

	<div class="form-group">
		<label for="price">Data Nascimento do Aluno:</label>
		<input type="text" class="form-control" name="student_data">
	</div>

	<div class="form-group">
		<label for="price">Curso do Aluno:</label>
		<input type="text" class="form-control" name="student_course">
	</div>

	<div class="form-group">
		<label for="price">Endereço do Aluno:</label>
		<input type="text" class="form-control" name="student_adress">
	</div>
</div>
@endsection