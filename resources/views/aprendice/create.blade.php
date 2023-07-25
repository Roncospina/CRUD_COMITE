@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Aprendice
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Aprendice</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('aprendice.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('aprendice.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
