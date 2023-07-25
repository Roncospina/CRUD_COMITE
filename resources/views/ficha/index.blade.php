@extends('layouts.app')

@section('template_title')
    Ficha
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ficha') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ficha.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>No Ficha</th>
										<th>Fecha Inicio Lectiva</th>
										<th>Fecha Fin Lectiva</th>
										<th>Fecha Inicio Productiva</th>
										<th>Fecha Fin Productiva</th>
										<th>Modalidad</th>
										<th>Jornada</th>
										<th>Gru Programa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fichas as $ficha)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ficha->no_ficha }}</td>
											<td>{{ $ficha->fecha_inicio_lectiva }}</td>
											<td>{{ $ficha->fecha_fin_lectiva }}</td>
											<td>{{ $ficha->fecha_inicio_productiva }}</td>
											<td>{{ $ficha->fecha_fin_productiva }}</td>
											<td>{{ $ficha->modalidad }}</td>
											<td>{{ $ficha->jornada }}</td>
											<td>{{ $ficha->programa->nombre }}</td>

                                            <td>
                                                <form action="{{ route('ficha.destroy',$ficha->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ficha.show',$ficha->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ficha.edit',$ficha->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $fichas->links() !!}
            </div>
        </div>
    </div>
@endsection
