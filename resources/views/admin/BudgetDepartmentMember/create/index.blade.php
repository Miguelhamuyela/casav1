@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Novo Funcionário no Departamento de Administração e Gestão do Orçamento')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <b><a href="{{ url('admin/funcionario-do-departamento-de-admnistracao-e-gestao-do-orcamento/show') }}">Detalhes Sobre o Funcionário </a>
                    > Funcionário -
                    {{ $BudgetDepartment->name }}
                </b>
            </h2>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{url('admin/funcionario-do-departamento-de-admnistracao-e-gestao-do-orcamento/store/'.$BudgetDepartment->id)}}" method="POST" enctype="multipart/form-data" class="row">
                @csrf
                @include('forms._formMemberOfBudgetDepartment.index')
                <div class="col-md-12">
                    <div class="form-group text-center">
                        <button type="submit" class="btn px-5 col-md-4 btn-success">
                            Salvar
                            <span class="fe fe-chevron-right fe-16"></span>
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection
