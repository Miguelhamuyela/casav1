<div class="col-md-8">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ isset($departmentExecutiveMember->name) ? $departmentExecutiveMember->name : old('name') }}"
            class="form-control border-secondary" placeholder="Nome" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="degree">Grau</label>
        <input type="text" name="degree" id="degree" value="{{ isset($departmentExecutiveMember->degree) ? $departmentExecutiveMember->degree : old('degree') }}"
            class="form-control border-secondary" placeholder="Grau" required>
    </div>

</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="category">Categoria</label>
        <input type="text" name="category" id="category" value="{{ isset($departmentExecutiveMember->category) ? $departmentExecutiveMember->category : old('category') }}"
            class="form-control border-secondary" placeholder="Categoria" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="category">Disciplina</label>
        <input type="text" name="subject" id="subject" value="{{ isset($departmentExecutiveMember->subject) ? $departmentExecutiveMember->subject : old('subject') }}"
            class="form-control border-secondary" placeholder="Disciplina" required>
    </div>
</div> <!-- /.col -->
