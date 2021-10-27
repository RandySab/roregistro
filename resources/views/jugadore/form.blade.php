<div class="box box-info padding-1">
    <div class="box-body">
        

        
        <div class="form-group">
            {{ Form::label('equipos_id') }}
            {{ Form::select('equipos_id', $equipos, $jugadore->id, ['class' => 'form-control' . ($errors->has('equipos_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciones el equipo al que pertence el jugador...']) }}
            {!! $errors->first('equipos_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
        
            {{ Form::hidden('user_id', $player_team, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('NOMBRE') }}
            {{ Form::text('nombre', $jugadore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('APELLIDOS') }}
            {{ Form::text('apellidos', $jugadore->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('NICKNAME') }}
            {{ Form::text('nick', $jugadore->nick, ['class' => 'form-control' . ($errors->has('nick') ? ' is-invalid' : ''), 'placeholder' => 'Apodo o sobrenombre']) }}
            {!! $errors->first('nick', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EDAD') }}
            {{ Form::text('edad', $jugadore->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <!-- <div class="form-group">
            {{ Form::label('SEXO') }}
            {{ Form::text('sexo', $jugadore->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
        </div> -->

        <div class="form-group">
            {{ Form::label('SEXO') }}
            {{ Form::select('sexo', ['Masculino' => 'MASCULINO', 'Femenino' => 'FEMENINO'] , ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('ESTATURA') }}
            {{ Form::text('estatura', $jugadore->estatura, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Captura tu estarura como 1.65']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NUMERO DE JUGADOR') }}
            {{ Form::text('num', $jugadore->num, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Número que usa el jugador en su uniforme']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('TELEFONO') }}
            {{ Form::text('telefono', $jugadore->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('E-MAIL') }}
            {{ Form::text('email', $jugadore->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CIUDAD NATAL') }}
            {{ Form::text('ciudadnac', $jugadore->ciudadnac, ['class' => 'form-control' . ($errors->has('ciudadnac') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad donde nació']) }}
            {!! $errors->first('ciudadnac', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CIUDAD DONDE RESIDE') }}
            {{ Form::text('ciudadres', $jugadore->ciudadres, ['class' => 'form-control' . ($errors->has('ciudadres') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad donde reside']) }}
            {!! $errors->first('ciudadres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ESTUDIANTE') }}
            {{ Form::text('estudiante', $jugadore->estudiante, ['class' => 'form-control' . ($errors->has('estudiante') ? ' is-invalid' : ''), 'placeholder' => 'SI o NO']) }}
            {!! $errors->first('estudiante', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ESCUELA') }}
            {{ Form::text('escuela', $jugadore->escuela, ['class' => 'form-control' . ($errors->has('escuela') ? ' is-invalid' : ''), 'placeholder' => 'Escriba la escuela en caso de estar cursando estudios...']) }}
            {!! $errors->first('escuela', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('OFICIO Y/O PROFESION') }}
            {{ Form::text('profesion', $jugadore->profesion, ['class' => 'form-control' . ($errors->has('profesion') ? ' is-invalid' : ''), 'placeholder' => 'Oficio y/o Profesión']) }}
            {!! $errors->first('profesion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PASATIEMPOS') }}
            {{ Form::textarea('hoby', $jugadore->hoby, ['class' => 'form-control' . ($errors->has('hoby') ? ' is-invalid' : ''), 'placeholder' => 'Pasatiempos predilectos del jugador aparte del Voleibol...']) }}
            {!! $errors->first('hoby', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <!-- {{ Form::label('foto') }} -->
            {{ Form::hidden('foto', $jugadore->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('FICHA TECNICA') }}
            {{ Form::textarea('ficha', $jugadore->ficha, ['class' => 'form-control' . ($errors->has('ficha') ? ' is-invalid' : ''), 'placeholder' => 'Antecedentes, formación, participaciones, logros del jugador en el deporte..']) }}
            {!! $errors->first('ficha', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">GUARDAR</button>
    </div>
</div>