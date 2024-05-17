@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes Sobre o Total de Estudantes Doutorados')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Detalhes Sobre o Total de Estudantes Doutorados
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($doctorate)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/doutoramentos/edit/{$doctorate->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar Sobre Estudantes Doutorados
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>

    @isset($doctorate)
        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">

                        <div class="col-md-12 mb-2">
                            <h5 class="mb-1">
                                <b>Total de Estudantes Licenciados:</b><br>
                                {{ $doctorate->totalDoctorate}}
                            </h5>
                        </div>





                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $doctorate->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $doctorate->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset




@endsection

