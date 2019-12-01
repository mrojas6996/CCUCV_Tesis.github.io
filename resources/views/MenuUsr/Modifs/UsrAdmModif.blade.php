@extends('DashPpal')

@section('cont_InfoDsh_dwn')
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <h1 class="display-4">Actualizar Administrador:</h1>
      <p class="pt-4"><b>Nombre actual:</b> {{ $adms->name }}</p>
      <p><b>Correo actual: </b>{{ $adms->email }}</p><br />

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        <br /> 
      @endif

      <form method="post" action="{{ route('GtnAdmin.update', $adms->id) }}">
        @method('PATCH') 
        @csrf
        <div class="form-group">    
          <label for="role">Rol:</label>
          <select class="form-control" name="role">
            <option value="admin">Administrador</option>
            <option value="mod">Moderador</option>
            <option value="user">Usuario</option>
          </select>
        </div>

        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" class="form-control" name="name" value="{{ $adms->name }}"/>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" name="email" value="{{ $adms->email }}"/>
        </div>             

        <div class="form-check form-check-inline">
          <!--CHECKBOX PARA ADMINISTRADORES, SELECCIONABLE-->
          <input class="form-check-input" type="checkbox" name="is_Admin" id="checkAdmin" value="1">
          <label class="form-check-label" for="is_Admin">¿Administrador?</label>
        </div>

        <br /> <br />
          <button type="submit" class="btn btn-success">Añadir</button>
          <a class="btn text-white btn-info ml-2" href="javascript: history.back(-1)">Volver atrás</a>
      </form>
    </div>
  </div>
@endsection