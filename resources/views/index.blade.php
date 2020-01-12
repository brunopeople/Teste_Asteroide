<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina de Cadastro</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Data de Nascimento</th>
        <th>Email</th>
        <th>Número de Telefone</th>
        <th>Endereço</th>
        <th colspan="2">Ações</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($pessoa as $pessoa)
      @php
        $date=date('Y-m-d', $pessoa['date']);
        @endphp
      <tr>
        <td>{{$pessoa['id']}}</td>
        <td>{{$pessoa['name']}}</td>
        <td>{{$pessoa['surname']}}</td>
        <td>{{$date}}</td>
        <td>{{$pessoa['email']}}</td>
        <td>{{$pessoa['number']}}</td>
        <td>{{$pessoa['adress']}}</td>
        
        <td><a href="{{action('PessoaController@edit', $pessoa['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PessoaController@destroy', $pessoa['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>