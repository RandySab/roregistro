@extends('layouts.app')

@section('template_title')
    Equipo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('LISTA DE EQUIPOS') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('equipos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('CREAR NUEVO') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <!-- <th>No</th> -->
                                        
										<!-- <th>User Id</th> -->
										<th>NOMBRE DEL EQUIPO</th>
										<th>RAMA</th>
										<th>CIUDAD</th>
										<th>ESTADO</th>
										<th>PAIS</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipos as $equipo)

                                    @if(auth()->id() == $equipo->user_id) 
                                        <tr>
                                            <!-- <td>{{ ++$i }}</td> -->
                                            
											<!-- <td>{{ $equipo->user_id }}</td> -->
											<td>{{ $equipo->nombre }}</td>
											<td>{{ $equipo->rama }}</td>
											<td>{{ $equipo->ciudad }}</td>
											<td>{{ $equipo->estado }}</td>
											<td>{{ $equipo->pais }}</td>

                                            <td>
                                                <form action="{{ route('equipos.destroy',$equipo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('equipos.show',$equipo->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('equipos.edit',$equipo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>

                                    @elseif(auth()->user()->rol == 'Administrador')
                                        <tr>
                                            <!-- <td>{{ ++$i }}</td> -->
                                            
											<!-- <td>{{ $equipo->user_id }}</td> -->
											<td>{{ $equipo->nombre }}</td>
											<td>{{ $equipo->rama }}</td>
											<td>{{ $equipo->ciudad }}</td>
											<td>{{ $equipo->estado }}</td>
											<td>{{ $equipo->pais }}</td>

                                            <td>
                                                <form action="{{ route('equipos.destroy',$equipo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('equipos.show',$equipo->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('equipos.edit',$equipo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif


                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $equipos->links() !!}
            </div>
        </div>
    </div>
@endsection
