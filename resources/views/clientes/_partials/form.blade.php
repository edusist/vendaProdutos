@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    <!-- Link para voltar -->
    <a href="{{route('clientes.index')}}" class="btn btn-primary">Voltar</a>
<div class="row align-items-center">
    <div class="col-md-12 offset-md-3">    
        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" value="{{ $cliente->nome ?? old('nome') }}"
                        placeholder="Nome:">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationTooltip02">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="email"
                        value="{{ $cliente->email ?? old('email') }}" placeholder="meu-mail@mail.com:">
                </div>
            </div>
             <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Cpf:</label>
                    <input type="text" name="cpf" id="cpf" minlength="11" maxlength="11" class="form-control" value="{{ $cliente->cpf ?? old('cpf') }}"
                        placeholder="Somente números">
                </div>
            </div>
            
            <div class="form-row">                     
                <div class="col-md-6 mb-3">
                <label for="validationTooltip04">Endereço Completo:</label>
                    <input type="text" name="endereco" id="endereco" class="form-control" value="{{ $cliente->endereco ?? old('endereco') }}" placeholder="Av/Rua, n, complemento, bairro, Cidadade e Estado"/>
                        
                </div>
            </div>           
        

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>  
    </div>
</div>
