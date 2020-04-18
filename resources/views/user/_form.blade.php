@csrf
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" class="form-control" value="{{old('cpf', $user->cpf)}}">
            @error('cpf')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name', $user->name)}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="{{old('email', $user->email)}}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="confirm_password">Confirmar Senha</label>
        <input type="password" name="confirm_password" id="confirm_password" class="form-control" value="{{old('confirm_password')}}">
        @error('confirm_password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="signature">Assinatura</label>
        <input type="file" name="signature" id="signature" class="form-control">
        @error('signature')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

