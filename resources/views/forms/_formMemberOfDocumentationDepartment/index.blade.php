<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ isset($DocumentationDepartmentMember->name) ? $DocumentationDepartmentMember->name : old('name') }}"
            class="form-control border-secondary" placeholder="Nome" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-6">
    <div class="form-group">
        <label for="Função">Função</label>
        <input type="text" name="function" id="function" value="{{ isset($DocumentationDepartmentMember->function) ? $DocumentationDepartmentMember->function : '' }}"
            class="form-control border-secondary" placeholder="Função" required>
    </div>
</div> <!-- /.col -->
