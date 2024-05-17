@extends('layouts.merge.dashboard')
@section('titulo', 'Lista dos Festivais')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista dos Festivais
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">

            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>TEMA DO FESTIVAL</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($festivals as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }} </td>

                            @csrf
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/festival/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                        <a href='{{ url("admin/festival/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>
                                        <a href='{{ url("admin/festival/delete/{$item->id}") }}'
                                            class="dropdown-item">Eliminar</a>


                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>



@endsection
