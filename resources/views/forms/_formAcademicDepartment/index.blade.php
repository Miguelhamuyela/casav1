
@isset($AcademicDepartment)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $AcademicDepartment->image }}");background-position:center;background-size:cover;height:800px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset


<div class="col-md-6">
    <div class="form-group">
        <label for="name">Título</label>
        <input type="text" name="title" id="title" value="{{ isset($AcademicDepartment->title) ? $AcademicDepartment->title : '' }}"
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
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo do Anúncio</h5>
            <p>Digite o corpo do Anúncio</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
           {{ isset($AcademicDepartment->body) ? $AcademicDepartment->body : '' }}
            </textarea>
        </div>
    </div>
</div>



