@isset($cultureAndSport)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $cultureAndSport->path }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-8">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($cultureAndSport->title) ? $cultureAndSport->title : old('title') }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="date">Data de Inserção</label>
        <input type="date" name="date" id="date" value="{{ isset($cultureAndSport->date) ? $cultureAndSport->date : old('date') }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-6">
    <div class="form-group">
        <label for="category">Categoria</label>
        <input type="text" name="category" id="category"
            value="{{ isset($cultureAndSport->category) ? $cultureAndSport->category : old('category') }}"
            class="form-control border-secondary" placeholder="Autor da Matéria" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Selecione a Capa</label>
            <input type="file" class="form-control" name="image" value="{{ old('image') }}" id="image">

        </div>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Matéria</h5>
            <p>Digite o corpo da matéria</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($cultureAndSport->body) ? $cultureAndSport->body : old('body')}}
            </textarea>
        </div>
    </div>
</div>
