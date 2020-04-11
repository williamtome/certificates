@csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name', $city->name)}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="state">Estado (UF)</label>
            <select name="state" class="form-control">
                <option value="">Selecione</option>
                @foreach($states as $state)
                    <option value="{{old('state', $state->id)}}" {{$city->state_id == $state->id ? 'selected' : ''}}>{{$state->name}}</option>
                @endforeach
            </select>
            @error('state')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

