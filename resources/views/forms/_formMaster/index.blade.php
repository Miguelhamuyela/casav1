<div class="col-md-12">
    <div class="form-group">
        <label for="totalMaster">Quantidade de Estudantes Mestres</label>
        <input type="text" name="totalMaster" id="totalMaster" value="{{ isset($master->totalMaster) ? $master->totalMaster : old('totalMaster') }}"
            class="form-control border-secondary" placeholder="Quantidade de Estudantes Mestres" required>
    </div>
</div> <!-- /.col -->

