@extends('layouts.default')

@section('title', 'Cadastrar Funcionário')

@section('conteudo')
    <div class="container-fluid shadow bg-white p-4">
        <h1 class="mb-3">Cadastrar Funcionário</h1>
        <form class="row g-4" method="post" action="{{ route('funcionarios.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="1" name="id_user">
            <div class="row mt-5 mb-4">
                <div class="col">
                    <div>
                        <label for="nome" class="form-label fw-bold">Nome</label>
                        <input type="text" name="nome" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="data_nasc" class="form-label fw-bold">Data de Nascimento</label>
                        <input type="date" name="data_nasc" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="sexo" class="form-label fw-bold">Sexo</label>
                        <select name="sexo" id="sexo" class="form-select form-select-lg bg-light" required>
                            <option value="">--</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div>
                        <label for="cpf" class="form-label fw-bold">CPF</label>
                        <input type="text" name="cpf" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="email" class="form-label fw-bold">E-mail</label>
                        <input type="text" name="email" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="telefone" class="form-label fw-bold">Telefone</label>
                        <input type="text" name="telefone" class="form-control form-control-lg bg-light" value=""
                            placeholder="(DDD) XXXXX-XXXX" required>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div>
                        <label for="id_departamento" class="form-label fw-bold">Departamento</label>
                        {{-- <input type="text" name="departamento" class="form-select form-select-lg bg-light" value="" --}}
                        {{-- required> --}}
                        <select name="id_departamento" id="id_departamento" class="form-select form-select-lg"
                            aria-label=".form-select-lg example">
                            <option value="">--</option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}">{{ $departamento->nome }}</option>
                            @endforeach
                            {{-- <option selected> </option>
                            <option value="1">Departamento de Tecnologia</option>
                            <option value="2">Departamento Financeiro</option>
                            <option value="3">Departamento Comercial</option>
                            <option value="4">Zeladoria</option>
                            <option value="5">Recursos Humanos</option> --}}
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="id_cargo" class="form-label fw-bold">Cargo</label>
                        {{-- <input type="text" name="cargo" class="form-select form-select-lg bg-light" value=""
                            required> --}}
                        <select name="id_cargo" id="id_cargo" class="form-select form-select-lg"
                            aria-label=".form-select-lg example">
                            <option value="">--</option>
                            @foreach ($cargos as $cargo)
                                <option value="{{ $cargo->id }}">{{ $cargo->descricao }}</option>
                            @endforeach
                            {{-- <option selected> </option>
                            <option value="1">Gerente de Tecnologia</option>
                            <option value="2">Gerente Financeiro</option>
                            <option value="3">Gerente Comercial</option>
                            <option value="4">Supervisor</option>
                            <option value="5">Auxiliar de Limpeza</option>
                            <option value="6">Auxiliar Administrativo</option>
                            <option value="7">Técnico de Informática</option>
                            <option value="8">Assistente Comercial</option> --}}
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="salario" class="form-label fw-bold">Salário</label>
                        <input type="text" name="salario" class="form-control form-control-lg bg-light" value=""
                            placeholder="R$" required>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Foto</label>
                <input class="form-control" type="file" id="formFile" name="foto">
            </div>

            <div class="col">
                <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                <a href="{{ route('funcionarios.index') }}" class="btn btn-danger btn-lg">Cancelar</a>
                {{-- <button type="button" class="btn btn-danger">Cancelar</button> --}}
            </div>
        </form>
    </div>
@endsection
