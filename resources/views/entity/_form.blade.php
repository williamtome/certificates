@csrf
<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            <label for="prefix">Prefixo</label>
            <select name="prefix" class="form-control">
                <option value="">Selecione</option>
                <option value="{{old('prefix', 'A')}}"  {{$entity->prefix == 'A' ? 'selected' : ''}}>A</option>
                <option value="{{old('prefix', 'O')}}"  {{$entity->prefix == 'O' ? 'selected' : ''}}>O</option>
            </select>
            @error('prefix')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name', $entity->name)}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

