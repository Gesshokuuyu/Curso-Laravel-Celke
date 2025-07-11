<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css'])

</head>
<body>
    <div class="main-container">
        <header class='header'>
            <div class='content-header'>
                <h2 class='title-logo'>
                    <a href="{{ route('Shinsei') }}">Shinsei</a>
                </h2>
                <ul class='list-nav-link'>
                    <li><a class='nav-link' href="#">Usuarios</a></li>
                    <li><a class='nav-link' href="{{ route('Shinsei') }}">Sair</a></li>
                </ul>
            </div>
        </header>

        <div class='content'>
            <div class='content-title'>
                 <h1 class="page-title">Cadastrar Usuário</h1>
                 <a href="#" class="btn-primary">Listar</a>
            </div>   
            <h1>Cadastrar Usuário</h1>
        @if(session('success'))
            <p style='color:green;'>
                {{ session('success') }}
            </p>
        @endif
        @if(session('error'))
            <p style='color:red;'>
                {{ session('error') }}
            </p>
        @endif
        <form action="{{ route('user.store') }}" method='POST' class='form-container'>
             @csrf
            <div class="mb-4">
                <label class="form-label" for="name">Nome:</label>
                <input type="text" name="name" id="name"  class="form-input"
                placeholder="Nome do Usuário" value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label" for="email">Email:</label>
                <input type="email" name="email" id="email"  class="form-input"
                placeholder="Email do Usuário" value="{{ old('email') }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label" for="pass">Senha:</label>
                <input type="password" name="pass" id="pass"  class="form-input"
                placeholder="Senha do Usuário" value="{{ old('pass') }}" required>
            </div>

             <button type='submit' class="form-button">Cadastrar</button>
        </form> 
        </div>

        
    </div>
</body>
</html>