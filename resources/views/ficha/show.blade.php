@extends('layouts.app')

@section('template_title')
    {{ $ficha->name ?? "{{ __('Show') Ficha" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ficha</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ficha.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>No Ficha:</strong>
                            {{ $ficha->no_ficha }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Lectiva:</strong>
                            {{ $ficha->fecha_inicio_lectiva }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Lectiva:</strong>
                            {{ $ficha->fecha_fin_lectiva }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Productiva:</strong>
                            {{ $ficha->fecha_inicio_productiva }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Productiva:</strong>
                            {{ $ficha->fecha_fin_productiva }}
                        </div>
                        <div class="form-group">
                            <strong>Modalidad:</strong>
                            {{ $ficha->modalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Jornada:</strong>
                            {{ $ficha->jornada }}
                        </div>
                        <div class="form-group">
                            <strong>Gru Programa:</strong>
                            {{ $ficha->programa->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
