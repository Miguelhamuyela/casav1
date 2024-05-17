<div class="col-md-12">
    <div class="form-group">
        <label for="totalGraduated">Quantidade de Estudantes Licenciados</label>
        <input type="text" name="totalGraduated" id="totalGraduated" value="{{ isset($graduation->totalGraduated) ? $graduation->totalGraduated : old('totalGraduated') }}"
            class="form-control border-secondary" placeholder="Quantidade de Estudantes Licenciados" required>
    </div>
</div> <!-- /.col -->

