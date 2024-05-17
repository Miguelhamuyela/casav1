<div class="col-md-6">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ isset($curricularPlanGraduated->title) ? $curricularPlanGraduated->title : old('title') }}"
            class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Selecione o Arquivo</label>
            <input type="file" class="form-control border-secondary" name="doc" value="{{ old('doc') }}" id="doc">
            <small class="text-danger">
                Extensões Permitidas: jpg,png,jpeg,pdf,docx || Tamanho Máximo: 10MB

            </small>
        </div>
    </div>
</div> <!-- /.col -->
