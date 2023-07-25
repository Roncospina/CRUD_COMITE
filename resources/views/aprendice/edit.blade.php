@extends('layouts.app')

@section('template_title')
    @if ($aprendice->exists)
        {{ __('Update') }} Aprendice
    @else
        {{ __('Create') }} Aprendice
    @endif
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">
                            @if ($aprendice->exists)
                                {{ __('Update') }} Aprendice
                            @else
                                {{ __('Create') }} Aprendice
                            @endif
                        </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ $aprendice->exists ? route('aprendice.update', $aprendice->id) : route('aprendice.store') }}"  role="form" enctype="multipart/form-data">
                            @if ($aprendice->exists)
                                {{ method_field('PATCH') }}
                            @endif
                            @csrf

                            @include('aprendice.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
