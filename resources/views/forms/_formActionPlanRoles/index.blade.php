
<div class="col-md-6">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ isset($actionPlanRoles->title) ? $actionPlanRoles->title : old('title') }}"
            class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="doc">Anexar Plano de Acção</label>
            <input type="file" class="form-control border-secondary" name="doc" value="{{ old('doc') }}" id="doc" >
            <small class="text-danger">
                Extensões Permitidas: jpg,png,jpeg,pdf,docx || Tamanho Máximo: 10MB

            </small>
        </div>
    </div>
</div> <!-- /.col -->




<div class="col-md-12 mb-4">

        <div class="card-actionPlanRoles">
            <h5 class="card-title">Corpo da Matéria</h5>
            <p>Digite o corpo da matéria</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($actionPlanRoles->body) ? $actionPlanRoles->body : old('body') }}
            </textarea>
        </div>

</div>
