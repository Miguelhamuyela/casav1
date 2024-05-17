
@isset($masterCourse)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $masterCourse->image }}");background-position:center;background-size:cover;height:800px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset



<div class="col-md-6">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ isset($masterCourse->title) ? $masterCourse->title : old('title') }}"
            class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Selecione a Capa</label>
            <input type="file" class="form-control border-secondary" name="image" value="{{ old('image') }}" id="image">

        </div>
    </div>
</div> <!-- /.col -->





<div class="col-md-12 mb-4">

        <div class="card-masterCourse">
            <h5 class="card-title">Corpo da Matéria</h5>
            <p>Digite o corpo da matéria</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($masterCourse->body) ? $masterCourse->body : old('body') }}
            </textarea>
        </div>

</div>


<div class="col-md-12 mb-4">

    <div class="card-masterCourse">
        <h5 class="card-title">Corpo da Matéria Sobre os Mestrados</h5>
        <p>Digite o corpo da matéria Sobre os Mestrados</p>
        <!-- Create the editor container -->
        <textarea name="body_Text" id="editor2" style="min-height:300px; min-width:100%">
            {{ isset($masterCourse->body_Text) ? $masterCourse->body_Text : old('body_Text') }}
        </textarea>
    </div>

</div>




