@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes Sobre o Departamento da Biblioteca')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Detalhes Sobre o Departamento da Biblioteca
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($LibraryDepartment)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/departamento-da-biblioteca/edit/{$LibraryDepartment->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar Sobre Departamento da Biblioteca
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>

    @isset($LibraryDepartment)
        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">

                        <div class="col-md-12 mb-2">
                            <h5 class="mb-1">
                                <b>Título:</b><br>
                                {{ $LibraryDepartment->title}}
                            </h5>
                        </div>


                        <div class="col-md-12 mb-2">

                            <b>Corpo:</b><br>
                            <p class="mb-1 text-dark">
                                {!! html_entity_decode($LibraryDepartment->body) !!}
                            </p>
                        </div>





                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $LibraryDepartment->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $LibraryDepartment->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset


    @isset($LibraryDepartment)
    <div class="card shadow mt-2">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="page-title">Capa</h2>
                            </div>

                        </div>
                        <div class="card-deck mb-4">

                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top img-fluid rounded"
                                    style='background-image:url("/storage/{{ $LibraryDepartment->image }}");background-position:center;background-size:cover;height:400px;'>
                                </div>

                            </div> <!-- .card -->


                        </div> <!-- .card-deck -->


                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </div>
    @endisset


        <div class="card mb-2 mt-5">
            <div class="card-body">
                <div class="row align-items-center my-4">
                    <div class="col">
                        <h2 class="page-title h4">Funcionários</h2>
                    </div>
                    <div class="col-auto">
                        <a type="button" class="btn btn-lg btn-primary text-white"
                            href="{{ url("admin/funcionario-do-departamento-da-biblioteca/create/{$LibraryDepartment->id}") }}">
                            <span class="fa fa-plus fa-16 mr-3"></span>Novo Funcionário
                        </a>
                    </div>
                </div>


                <div class="page-category pb-5">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable-1">
                            <thead class="bg-primary thead-dark">
                                <tr class="text-center">


                                    <th>NOME</th>
                                    <th>FUNÇÃO</th>


                                    <th class="text-left">ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($LibraryDepartment->departmentMember as $item)
                                    <tr class="text-center text-dark">
                                        <td class="text-left">{{ $item->name }}</td>
                                        <td class="text-left">{{ $item->function}}</td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary text-white dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fa fa-navicon fa-sm" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                    <a href='{{ url("admin/funcionario-do-departamento-da-biblioteca/delete/$item->id") }}'
                                                        class="dropdown-item text-danger">Eliminar</a>

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

