@extends('layouts.default')

@section('title', 'Cadastrar Usuário')

@section('content')
    <h1 class="mb-5">Cadastrar Usuario</h1>

    <form class="row g-4" method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <div class="col-md-4">
            <label for="name" class="form-label fs-5 fs-5">Nome</label>
            <input type="text" class="form-control form-control-lg bg-light" id="name" name="name" required>
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label fs-5 fs-5">E-mail</label>
            <input type="text" class="form-control form-control-lg bg-light" id="email" name="email" required>
        </div>
        <div class="col-md-4">
            <label for="password" class="form-label fs-5 fs-5">Senha</label>
            <input type="text" class="form-control form-control-lg bg-light" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-danger btn-lg"> Cancelar</a>
        </div>
    </form>
@endsection