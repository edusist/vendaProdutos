@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    <!-- Link para voltar -->
    <a href="{{route('pedidos.index')}}" class="btn btn-primary">Voltar</a>
<div class="row align-items-center">
    <div class="col-md-12 offset-md-3">    
        <form class="needs-validation" novalidate>
        <div class="form-row">
                <div class="col-md-6 mb-3">

                <select  name="cliente_id" id="cliente_id" class="form-control">  
                            <option value="">Escolha o cliente:</option>                        
                            @foreach($clientes as $valor)
                            <option value="{{$valor->id}}"                                     
                                    >{{$valor->nome}}
                        </option> 
                        @endforeach
                    </select>
                </div>
        </div>    
        
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <select  name="produto_id" id="produto_id" class="form-control">  
                            <option value="">Escolha o produto:</option>                        
                            @foreach($produtos as $valor)
                            <option value="{{$valor->id}}"                                     
                                    >{{$valor->nome}} - Valor R${{ number_format($valor->valor_unitario, 2, ',', '.') }}
                        </option> 
                        @endforeach
                    </select>
                </div>

            </div>
             <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Quantidade:</label>
                    <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $pedido->quant ?? old('quantidade') }}"
                        placeholder="Somente números">
                </div>
            </div>

        

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>  
    </div>
</div>
