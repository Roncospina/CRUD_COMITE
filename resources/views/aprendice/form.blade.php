<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $aprendice->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $aprendice->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('documento') }}
            {{ Form::text('documento', $aprendice->documento, ['class' => 'form-control' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
            {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $aprendice->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $aprendice->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('antecedentes') }}
            {{ Form::text('antecedentes', $aprendice->antecedentes, ['class' => 'form-control' . ($errors->has('antecedentes') ? ' is-invalid' : ''), 'placeholder' => 'Antecedentes']) }}
            {!! $errors->first('antecedentes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('programa_formacion', 'Programa Formación') }}
            {{ Form::select('programa_formacion', $programas, $aprendice->programa_formacion, ['class' => 'form-control' . ($errors->has('programa_formacion') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un programa']) }}
            {!! $errors->first('programa_formacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $aprendice->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ficha_id', 'Ficha Id') }}
            {{ Form::select('ficha_id', $fichas->pluck('no_ficha', 'id'), $aprendice->ficha_id, ['class' => 'form-control' . ($errors->has('ficha_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una ficha']) }}
            {!! $errors->first('ficha_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <br>
    <div class="box-footer mt20">
        <button class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>