@csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{old('title', $template->title)}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="front">Template de Frente:</label>
            <file-pond allow-multiple="true" max-files="3"></file-pond>
            <br><br>
            <label for="back">Template de Verso:</label>
            <file-pond allow-multiple="true" max-files="3"></file-pond>
        </div>
    </div>
</div>

