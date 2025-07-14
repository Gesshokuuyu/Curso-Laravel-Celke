@extends('layouts.admin')

@section('content')

   

        <div class='content'>
            <div class='content-title'>
                 <h1 class="page-title">Listar Usuário</h1>
                 <a href="{{ route('user.create') }} " class="btn-success">Cadastrar</a>
            </div>   

            <x-alert/>

            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr class="table-header">
                            <th class="table-header">ID</th>
                            <th class="table-header">Nome</th>
                            <th class="table-header">E-mail</th>
                            <th class="table-header center">Ações</th>
                        </tr>
                    </thead>
                    <tbdody class="table-body">
                        @forelse($users as $user)
                            <tr class="table-row">
                                <td class="table-cell">{{ $user->id }}</td>
                                <td class="table-cell">{{ $user->name }}</td>
                                <td class="table-cell">{{ $user->email }}</td>
                                <td class="table-actions">Visualizar Editar Deletar</td>
                            </tr>
                        @empty
                           <div class="alert-error">
                               <p>Nenhum usuário cadastrado</p>
                           </div>
                        @endforelse
                    </tbdody>
                </table>
            </div>
        </div>
        
        <div class="pagination">
            {{ $users->links() }}
        </div>
@endsection