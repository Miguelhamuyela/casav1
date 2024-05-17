<div class="col-md-12">
    <div class="form-group">
        <label for="totalDoctorate">Quantidade de Estudantes Mestres</label>
        <input type="text" name="totalDoctorate" id="totalDoctorate" value="{{ isset($doctorate->totalDoctorate) ? $doctorate->totalDoctorate : old('totalDoctorate') }}"
            class="form-control border-secondary" placeholder="Quantidade de Estudantes Mestres" required>
    </div>
</div> <!-- /.col -->

