<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina de Edição da Aplicação </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Formulario de edição</h2><br  />
        <form method="post" action="{{action('PessoaController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" value="{{$pessoa->name}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Sobrenome:</label>
            <input type="text" class="form-control" name="surname" value="{{$pessoa->name}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{$pessoa->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Número de Telefone:</label>
              <input type="text" class="form-control" name="number" value="{{$pessoa->number}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Endereço</lable>
                <select name="office">
                  <option value="Mumbai"  @if($pessoa->office=="Mumbai") selected @endif>Mumbai</option>
                  <option value="Chennai"  @if($pessoa->office=="Chennai") selected @endif>Chennai</option>
                  <option value="Delhi" @if($pessoa->office=="Delhi") selected @endif>Delhi</option>  
                  <option value="Bangalore" @if($pessoa->office=="Bangalore") selected @endif>Bangalore</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Atualizat</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>