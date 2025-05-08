<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>

    <form action="{{ route('user.store') }}" method='POST'>
         @csrf
         <label for="name">Nome: </label>
         <Input type='text' name='name' id='name' placeholder='Nome do Usuário' 
         value = "{{ old('name') }}" required > <br><br>

         <label for="email">Email: </label>
         <Input type='email' name='email' id='email' placeholder='Email do Usuário' 
         value = "{{ old('email') }}" required > <br><br>

          <label for="password">Senha: </label>
         <Input type='password' name='password' id='password' placeholder='Senha do Usuário' 
         value = "{{ old('password') }}" required > <br><br>

         <button type='submit'>Cadastrar</button>

    </form>
</body>
</html>