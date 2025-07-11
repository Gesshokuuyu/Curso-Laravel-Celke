@extends('layouts.admin')

@section('content')

   

        <div class='content'>
            <div class='content-title'>
                 <h1 class="page-title">Cadastrar Usuário</h1>
                 <a href="#" class="btn-primary">Listar</a>
            </div>   
        @if(session('success'))
            <div class='alert-success'>
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class='alert-error'>
                {{ session('error') }}
            </div>
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
                    <label class="form-label" for="password">Senha:</label>
                    <input type="password" name="password" id="password"  class="form-input"
                    placeholder="Senha do Usuário" value="{{ old('password') }}" required>
                </div>

                <button type='submit' class="form-button">Cadastrar</button>
            </form> 
        </div>
        
@endsection