@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes Sobre a História')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Detalhes Sobre a História
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($history)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/historia/edit/{$history->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar Sobre a História
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>

    @isset($history)
        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">

                        <div class="col-md-12 mb-2">
                            <h5 class="mb-1">
                                <b>Título da História:</b><br>
                                {{ $history->title}}
                            </h5>
                        </div>

                        <div class="col-md-12 mb-2">

                            <b>Corpo:</b><br>
                            <p class="mb-1 text-dark">
                                {!! html_entity_decode($history->body) !!}
                            </p>
                        </div>


                        <div class="col-md-12 mb-2">

                            <b>Descrição Sobre o Reitor:</b><br>
                            <p class="mb-1 text-dark">
                                {!! html_entity_decode($history->Dean_body) !!}
                            </p>
                        </div>

                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $history->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $history->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset



        @isset($history)
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
                                        style='background-image:url("/storage/{{ $history->image }}");background-position:center;background-size:cover;height:400px;'>
                                    </div>

                                </div> <!-- .card -->


                            </div> <!-- .card-deck -->


                        </div>
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->
            </div>
        </div>
        @endisset



@endsection

