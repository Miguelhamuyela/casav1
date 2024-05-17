@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes Sobre O Plano de Acção')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.actionPlanRoles.index') }}"><u>Listar Planos de Acção</u></a> > {{ $actionPlanRoles->title }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Título:</b><br>
                                            {{ $actionPlanRoles->title }}
                                        </h5>
                                    </div>


                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Plano de Acção:</b>
                                        </h5>
                                        <p class="text-dark text-justify">{!! html_entity_decode($actionPlanRoles->body) !!}</p>

                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Documento:</b><br>
                                            <a class="text-dark" target="_blank" href="/storage/{{$actionPlanRoles->doc}}">Ver Documento</a>
                                        </h5>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $actionPlanRoles->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $actionPlanRoles->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>



@endsection
