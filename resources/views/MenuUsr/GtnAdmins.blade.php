@extends('DashPpal')

<!--CONTENIDO SUPERIOR: TABLA-->

@section('cont_InfoDsh_sup')

<h1 class="text-center">Gestor de administradores</h1> <br />

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<table class="table table-striped table-danger">
  <thead class="thead-dark">
    <tr class="text-center">
      <th scope="col">Nombre</th>
      <th scope="col">Cargo</th>
      <th scope="col"></th>
      <th scope="col" colspan="2">Acciones</th>
    </tr>
  </thead>
  <tbody>

 @foreach ($adms as $items)

 @if ($items->is_Admin==1)
 	<tr class="align-middle">

      <td>{{ $items->name }}</td>
      <td>{{ $items->role }}</td>
      <td class="container-fluid"></td>
      <td>
        <a href="{{ route('GtnAdmin.edit', $items->id) }}" class="btn btn-primary">Modificar</a>
          </td>
          <td>
          <form action="{{ route('GtnAdmin.destroy', $items->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>
      </td>     
    </tr>
 @endif
 @endforeach
  </tbody>
</table>
@endsection

<!--CONTENIDO INFERIOR-->

@section('cont_InfoDsh_dwn')

<br /><h3>Acciones para ejecutar</h3><br />

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

  <div>
    <a href="{{ route('GtnAdmin.create')}}" class="btn btn-primary">Agregar Administrador</a>
  </div>

@endsection