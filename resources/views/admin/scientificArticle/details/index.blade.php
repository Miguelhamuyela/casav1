@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes Sobre o Artigo Científico')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.scientificArticle.index') }}"><u>Listar Artigos Científicos</u></a> > {{ $scientificArticle->title }}
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
                                            <b>Título do Arquivo Científico :</b><br>
                                            {{ $scientificArticle->title}}
                                        </h5>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Link:</b><br>
                                            <a target="_blank" href="/storage/{{$scientificArticle->link}}">Visualisar Conteúdo do Link</a>

                                        </h5>
                                    </div>


                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Data:</b><br>
                                            {{ date('d.m.Y', strtotime($scientificArticle->eventDate)) }}
                                        </h5>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $scientificArticle->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $scientificArticle->updated_at }}
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

                                <div class="card border-0 bg-transparent">
                                    <img class="img-fluid rounded" src="/storage/{{ $scientificArticle->cover }}" alt="">
                                </div> <!-- .card -->


                            </div> <!-- .card -->


                        </div> <!-- .card-deck -->


                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </div>



@endsection
