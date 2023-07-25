<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('no_ficha') }}
            {{ Form::text('no_ficha', $ficha->no_ficha, ['class' => 'form-control' . ($errors->has('no_ficha') ? ' is-invalid' : ''), 'placeholder' => 'No Ficha']) }}
            {!! $errors->first('no_ficha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio_lectiva') }}
            {{ Form::date('fecha_inicio_lectiva', $ficha->fecha_inicio_lectiva, ['class' => 'form-control' . ($errors->has('fecha_inicio_lectiva') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fecha_inicio_lectiva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin_lectiva') }}
            {{ Form::date('fecha_fin_lectiva', $ficha->fecha_fin_lectiva, ['class' => 'form-control' . ($errors->has('fecha_fin_lectiva') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fecha_fin_lectiva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio_productiva') }}
            {{ Form::date('fecha_inicio_productiva', $ficha->fecha_inicio_productiva, ['class' => 'form-control' . ($errors->has('fecha_inicio_productiva') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fecha_inicio_productiva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin_productiva') }}
            {{ Form::date('fecha_fin_productiva', $ficha->fecha_fin_productiva, ['class' => 'form-control' . ($errors->has('fecha_fin_productiva') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fecha_fin_productiva', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('modalidad') }}
            {{ Form::select('modalidad', ['Presencial' => 'Presencial', 'Virtual' => 'Virtual'], $ficha->modalidad, ['class' => 'form-control' . ($errors->has('modalidad') ? ' is-invalid' : '')]) }}
            {!! $errors->first('modalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('jornada') }}
            {{ Form::select('jornada', ['Diurna' => 'Diurna', 'Mixta' => 'Mixta', 'Nocturna' => 'Nocturna'], $ficha->jornada, ['class' => 'form-control' . ($errors->has('jornada') ? ' is-invalid' : '')]) }}
            {!! $errors->first('jornada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gru_programa') }}
            {{ Form::select('gru_programa', $programas, $ficha->gru_programa, ['class' => 'form-control' . ($errors->has('gru_programa') ? ' is-invalid' : '')]) }}
            {!! $errors->first('gru_programa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>