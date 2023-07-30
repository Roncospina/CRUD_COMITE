@extends('layouts.app')

@section('template_title')
Instructore
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Instructore') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('instructore.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
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
                                    <th>No</th>

                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Documento</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Area</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($instructores as $instructore)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $instructore->nombres }}</td>
                                    <td>{{ $instructore->apellidos }}</td>
                                    <td>{{ $instructore->documento }}</td>
                                    <td>{{ $instructore->correo }}</td>
                                    <td>{{ $instructore->telefono }}</td>
                                    <td>{{ $instructore->area->nombre }}</td>

                                    <td>
                                        <form action="{{ route('instructore.destroy',$instructore->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('instructore.show',$instructore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('instructore.edit',$instructore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $instructores->links() !!}
        </div>
    </div>
</div>
@endsection