@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    <!-- Link para voltar -->
    <a href="{{route('produtos.index')}}" class="btn btn-primary">Voltar</a>
<div class="row align-items-center">
    <div class="col-md-12 offset-md-3">    
        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Nome Produto:</label>
                    <input type="text" name="nome_produto" class="form-control" id="nome_produto" value="{{ $produto->nome ?? old('nome_produto') }}"
                        placeholder="Nome:">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Valor:</label>
                    <input type="text" name="valor_unitario" class="form-control" id="valor_unitario"
                        value="{{ $produto->valor_unitario ?? old('valor_unitario') }}" placeholder="99,99">
                </div>
            </div>
             
        

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>  
    </div>
</div>
