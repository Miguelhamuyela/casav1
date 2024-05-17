@isset($fairs)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $fairs->image}}");background-position:center;background-size:cover;height:700px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-8">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($fairs->title) ? $fairs->title : old('title') }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="date">Data</label>
        <input type="date" name="dateEvent" id="date" value="{{ isset($fairs->dateEvent) ? $fairs->dateEvent : old('date') }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="localization">Localização</label>
            <input type="text" class="form-control border-secondary" name="localization" placeholder="Localização"
                value="{{ isset($fairs->localization) ? $fairs->localization : old('localization') }}"
                id="localization">

        </div>
    </div>
</div> <!-- /.col -->


<div class="col-md-3">
    <div class="form-group">
        <label for="startTime">Horário Inicio</label>
        <input type="time" name="startTime" id="startTime"
            value="{{ isset($fairs->startTime) ? $fairs->startTime : old('startTime') }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-3">
    <div class="form-group">
        <label for="endTime">Horário Termino</label>
        <input type="time" name="endTime" id="endTime"
            value="{{ isset($fairs->endTime) ? $fairs->endTime : old('endTime') }}"
            class="form-control border-secondary" placeholder="Autor da Matéria" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="cover">Selecione a Capa</label>
            <input type="file" class="form-control border-secondary mb-1" name="image" value="{{ old('image') }}" id="image">

        </div>
    </div>
</div> <!-- /.col -->
<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo do Anúncio</h5>
            <p>Digite o corpo do Anúncio</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
           {{ isset($fairs->body) ? $fairs->body : '' }}
            </textarea>
        </div>
    </div>
</div>
