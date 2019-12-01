@extends('DashPpal')

@section('cont_InfoDsh_dwn')

  <div class="row">
   <div class="col-sm-8 offset-sm-2">
      <h1 class="display-3">Añadir usuario</h1>
    <div>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif

        <form method="post" action="{{ route('GtnAdmin.store') }}">
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
            <input type="text" class="form-control" name="name" required />
          </div>

          <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="text" class="form-control" name="email" required />
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
  </div>
@endsection