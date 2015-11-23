@extends('main.template.main')
@section('title', 'Administración de usuarios')
@section('content')	
	<div class="row">
		<div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <a class="btn btn-success btn-xs pull-left" href="{{ route('admin.users.create') }}">
                        <i class="fa fa-plus"></i>
                        <span>Crear usuario</span>
                    </a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Perfil</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->Perfil }}</td>
                                <td>
                                    {{ $user->Estado }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-success btn-xs btn-rounded">
                                        <i class="fa fa-search"></i>
                                        &nbsp;
                                        Ver
                                        &nbsp;
                                    </a>
                                    <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger btn-xs btn-rounded btnEliminar">
                                        <i class="fa fa-trash"></i>
                                        &nbsp;
                                        Eliminar
                                        &nbsp;
                                    </a>
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info btn-xs btn-rounded">
                                        <i class="fa fa-pencil"></i>
                                        &nbsp;
                                        Editar
                                        &nbsp;
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    {!! $users->render() !!}
                </div>
            </div>

		</div>
	</div>
@endsection

@section('scripts')
<script>
	$(function() {
		$('.btnEliminar').on('click', function(e) {
			if(!confirm('¿Desea eliminar el usuario indicado?')){			
				e.preventDefault();
				e.stopPropagation();
			}
		});
	});
</script>
@endsection