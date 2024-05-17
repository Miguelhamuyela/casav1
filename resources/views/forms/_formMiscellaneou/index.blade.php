@isset($miscellaneous)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $miscellaneous->cover }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-8">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($miscellaneous->title) ? $miscellaneous->title : old('title') }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="date">Data</label>
        <input type="date" name="eventDate" id="date" value="{{ isset($miscellaneous->eventDate) ? $miscellaneous->eventDate : old('date') }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="link">Selecione o Arquivo</label>
        <input type="file" class="form-control border-secondary mb-1" name="link" value="{{ old('link') }}" id="link">
        <small class="text-danger">
            Extensões Permitidas: jpg,png,jpeg,pdf,docx || Tamanho Máximo: 10MB
        </small>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="cover">Selecione a Capa</label>
            <input type="file" class="form-control border-secondary mb-1" name="cover" value="{{ old('cover') }}" id="cover">
            <small class="text-danger">
                Extensões Permitidas: jpg,png,jpeg,pdf,docx || Tamanho Máximo: 10MB

            </small>
        </div>
    </div>
</div> <!-- /.col -->
