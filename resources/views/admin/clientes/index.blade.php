@extends('main.template.main')
@section('title', 'Administración de clientes')
@section('content')	
	<div class="row">
		<div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <a class="btn btn-success btn-xs pull-left" href="{{ route('admin.clientes.create') }}">
                        <i class="fa fa-plus"></i>
                        <span>Crear cliente</span>
                    </a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Nombre contacto</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->Nombre }}</td>
                                <td>{{ $cliente->NombreContacto }}</td>
                                <td>{{ $cliente->Email }}</td>
                                <td>{{ $cliente->Direccion }}</td>
                                <td>{{ $cliente->Estado }}</td>
                                <td>
                                    <a href="{{ route('admin.clientes.show', $cliente->id) }}" class="btn btn-success btn-xs btn-rounded">
                                        <i class="fa fa-search"></i>
                                        &nbsp;
                                        Ver
                                        &nbsp;
                                    </a>
                                    <a href="{{ route('admin.clientes.destroy', $cliente->id) }}" class="btn btn-danger btn-xs btn-rounded btnEliminar">
                                        <i class="fa fa-trash"></i>
                                        &nbsp;
                                        Eliminar
                                        &nbsp;
                                    </a>
                                    <a href="{{ route('admin.clientes.edit', $cliente->id) }}" class="btn btn-info btn-xs btn-rounded">
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
                    {!! $clientes->render() !!}
                </div>
            </div>

		</div>
	</div>
@endsection

@section('scripts')
<script>
	$(function() {
		$('.btnEliminar').on('click', function(e) {
			if(!confirm('¿Desea eliminar el cliente indicado?')){
				e.preventDefault();
				e.stopPropagation();
			}
		});
	});
</script>
@endsection