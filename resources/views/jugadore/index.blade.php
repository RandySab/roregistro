@extends('layouts.app')

@section('template_title')
    Jugadore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('LISTA DE JUGADORES') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('jugadores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                       <!--  <th>No</th> -->
                                        
										<th>EQUIPO</th>
										<!-- <th>User Id</th> -->
										<th>NOMBRE</th>
										<th>APELLIDOS</th>
										<th>NICK-NAME</th>
										<th>EDAD</th>
										<th>SEXO</th>
										<!-- <th>Telefono</th>
										<th>Email</th> -->
										<th>CIUDAD NATAL</th>
										<th>RESIDENCIA</th>
										<!-- <th>Estudiante</th>
										<th>Escuela</th> -->
										<th>PROFESION/OFICIO</th>
										<!-- <th>Hoby</th> -->
										<!-- <th>Foto</th> -->
										<!-- <th>Ficha</th> -->

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jugadores as $jugadore)

                                        @if(auth()->id() == $jugadore->user_id)
                                            <tr>
                                            <!--  <td>{{ ++$i }}</td> -->

                                                <td>{{ $jugadore->equipo->nombre }}</td>
                                                
                                                <!-- <td>{{ $jugadore->equipos_id }}</td> -->
                                                <!-- <td>{{ $jugadore->user_id }}</td> -->
                                                <td>{{ $jugadore->nombre }}</td>
                                                <td>{{ $jugadore->apellidos }}</td>
                                                <td>{{ $jugadore->nick }}</td>
                                                <td>{{ $jugadore->edad }}</td>
                                                <td>{{ $jugadore->sexo }}</td>
                                                <!-- <td>{{ $jugadore->telefono }}</td> -->
                                                <!-- <td>{{ $jugadore->email }}</td> -->
                                                <td>{{ $jugadore->ciudadnac }}</td>
                                                <td>{{ $jugadore->ciudadres }}</td>
                                                <!-- <td>{{ $jugadore->estudiante }}</td> -->
                                                <!-- <td>{{ $jugadore->escuela }}</td> -->
                                                <td>{{ $jugadore->profesion }}</td>
                                                <!-- <td>{{ $jugadore->hoby }}</td> -->
                                                <!-- <td>{{ $jugadore->foto }}</td> -->
                                                <!-- <td>{{ $jugadore->ficha }}</td> -->

                                                <td>
                                                    <form action="{{ route('jugadores.destroy',$jugadore->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('jugadores.show',$jugadore->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('jugadores.edit',$jugadore->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>

                                        @elseif(auth()->user()->rol == 'Administrador')

                                            <tr>
                                                <!--  <td>{{ ++$i }}</td> -->
                                                    
                                                    <td>{{ $jugadore->equipo->nombre }}</td>
                                                    <!-- <td>{{ $jugadore->equipos_id }}</td> -->
                                                    <!-- <td>{{ $jugadore->user_id }}</td> -->
                                                    <td>{{ $jugadore->nombre }}</td>
                                                    <td>{{ $jugadore->apellidos }}</td>
                                                    <td>{{ $jugadore->nick }}</td>
                                                    <td>{{ $jugadore->edad }}</td>
                                                    <td>{{ $jugadore->sexo }}</td>
                                                    <!-- <td>{{ $jugadore->telefono }}</td> -->
                                                    <!-- <td>{{ $jugadore->email }}</td> -->
                                                    <td>{{ $jugadore->ciudadnac }}</td>
                                                    <td>{{ $jugadore->ciudadres }}</td>
                                                    <!-- <td>{{ $jugadore->estudiante }}</td> -->
                                                    <!-- <td>{{ $jugadore->escuela }}</td> -->
                                                    <td>{{ $jugadore->profesion }}</td>
                                                    <!-- <td>{{ $jugadore->hoby }}</td> -->
                                                    <!-- <td>{{ $jugadore->foto }}</td> -->
                                                    <!-- <td>{{ $jugadore->ficha }}</td> -->

                                                    <td>
                                                        <form action="{{ route('jugadores.destroy',$jugadore->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary " href="{{ route('jugadores.show',$jugadore->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                            <a class="btn btn-sm btn-success" href="{{ route('jugadores.edit',$jugadore->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $jugadores->links() !!}
            </div>
        </div>
    </div>
@endsection
