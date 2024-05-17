@isset($governingBodie)
   <div class="col-12 mb-4">
        <div class="row">
            <div class="col-md-12 text-left mt-2">
                <h4>Imagem</h4>
            </div>
            <div class="col-md-12 rounded"
                style='background-image:url("/storage/{{ $governingBodie->image }}");background-position:center;background-size:cover;height:400px;'>
            </div>
        </div>
    </div>
@endisset

<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome Completo</label>
        <input type="text" name="name" id="name" value="{{ isset($governingBodie->name) ? $governingBodie->name : '' }}"
            class="form-control border-secondary" placeholder="Nome Completo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
        <div class="form-group">
            <label for="Função">Função/Cargo </label>

            <select type="text" name="function" id="function" class="form-control border-secondary rounded" required>

                @if (isset($governingBodie->function))
                    <option value="{{ $governingBodie->function }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $governingBodie->function }}
                    </option>
                @else
                    <option disabled selected value="">Selecione uma Função/Cargo</option>
                @endif
                <option>Decano</option>
                <option>Vice-Decano P/A Academicos</option>
                <option>Vice-Decano P/A Científicos</option>
                <option>Chefe DEI LLA</option>
                <option>Chefe DEI LLLP</option>
                <option>Chefe DEI LLLI </option>
                <option>Chefe DEI LLLF</option>
                <option>Chefe DEI Sec.Executivo</option>
                <option>Chefe DEI Filosofia</option>
            </select>
        </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <label for="image">Selecione a foto de capa</label>
        <input value="{{ isset($governingBodie->image) ? $governingBodie->image : '' }}" class="form-control border-secondary"
            type="file" name="image" id="image">
    </div>
</div> <!-- /.col -->
