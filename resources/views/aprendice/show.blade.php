@extends('layouts.app')

@section('template_title')
    {{ $aprendice->name ?? "{{ __('Show') Aprendice" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Aprendice</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aprendice.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $aprendice->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $aprendice->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $aprendice->documento }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $aprendice->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $aprendice->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Antecedentes:</strong>
                            {{ $aprendice->antecedentes }}
                        </div>
                        <div class="form-group">
                            <strong>Programa Formacion:</strong>
                            {{ $aprendice->programa_formacion }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $aprendice->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Ficha Id:</strong>
                            {{ $aprendice->ficha_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
