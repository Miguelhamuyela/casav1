@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes Sobre o Plano de Acção')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Detalhes Sobre o Plano de Acção
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($actionPlan)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/plano-de-accao/edit/{$actionPlan->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar Sobre o Plano de Acção
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>

    @isset($actionPlan)
        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">

                        <div class="col-md-9 mb-2">
                            <h5 class="mb-1">
                                <b>Título:</b><br>
                                {{ $actionPlan->title}}
                            </h5>

                        </div>

                        <div class="col-md-3">
                            <a class="btn btn-sm btn-primary text-white" href="{{route('admin.actionPlanRoles.create')}}">Cadastrar Plano de Acção</a>
                        </div>


                        <div class="col-md-12 mb-2">

                            <b>Descrição:</b><br>
                            <p class="mb-1 text-dark">
                                {!! html_entity_decode($actionPlan->body) !!}
                            </p>
                        </div>




                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $actionPlan->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $actionPlan->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset






@endsection

