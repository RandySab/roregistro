@extends('layouts.app')

@section('template_title')
    {{ $jugadore->name ?? 'Show Jugadore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">INFORMACION DEL JUGADOR</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('jugadores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Equipo:</strong>
                            {{ $jugadore->equipo->nombre }}
                            <!-- {{ $jugadore->equipos_id }} -->
                        </div>
                        <!-- <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $jugadore->user_id }}
                        </div> -->
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $jugadore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $jugadore->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Nick:</strong>
                            {{ $jugadore->nick }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $jugadore->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $jugadore->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $jugadore->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $jugadore->email }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudadnac:</strong>
                            {{ $jugadore->ciudadnac }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudadres:</strong>
                            {{ $jugadore->ciudadres }}
                        </div>
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $jugadore->estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Escuela:</strong>
                            {{ $jugadore->escuela }}
                        </div>
                        <div class="form-group">
                            <strong>Profesion:</strong>
                            {{ $jugadore->profesion }}
                        </div>
                        <div class="form-group">
                            <strong>Hoby:</strong>
                            {{ $jugadore->hoby }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $jugadore->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Ficha:</strong>
                            {{ $jugadore->ficha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
