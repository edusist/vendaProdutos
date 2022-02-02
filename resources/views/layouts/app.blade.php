<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas de produtos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>
<div class="content">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Menu</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('pedidos.index') }}">Home</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Pedidos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">             
                    <li><a class="dropdown-item" href="{{ route('pedidos.index') }}">Lista de pedidos</a></li>        
                      <li><a class="dropdown-item" href="{{ route('pedidos.create') }}">Cadastrar pedido</a></li>
                    </ul>
                  </li>


                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Clientes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{ route('clientes.index') }}">Lista de Clientes</a></li>
                      <li><a class="dropdown-item" href="{{ route('clientes.create') }}">Cadastrar Cliente</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Produtos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">        
                    <li><a class="dropdown-item" href="{{ route('produtos.index') }}">Lista de produtos</a></li>             
                      <li><a class="dropdown-item" href="{{ route('produtos.create') }}">Cadastrar produto</a></li>
                    </ul>
                  </li>

               


              </div>
            </div>
          </nav>
 
    @yield('content')
</div>
</body>
</html>