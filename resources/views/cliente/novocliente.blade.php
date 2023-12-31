@extends('layout.app', ['current' => 'novocliente'])

@section('title', 'Cadastro de Cliente')

@section('body')
    <div class="row">
        <div class="container col-md-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        Cadastro de Cliente
                    </div>
                </div>
                <div class="card-body">
                    <form action="/cliente/clientes" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome do Cliente</label>
                            <input type="text" id="nome"
                                class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome"
                                placeholder="Nome do cliente">
                            @if ($errors->has('nome'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nome') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="idade">Idade do Cliente</label>
                            <input type="text" id="idade"
                                class="form-control {{ $errors->has('idade') ? 'is-invalid' : '' }} " name="idade"
                                placeholder="Idade do cliente">
                            @if ($errors->has('idade'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('idade') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço do Cliente</label>
                            <input type="text" id="endereco"
                                class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }} " name="endereco"
                                placeholder="Endereço do cliente">
                            @if ($errors->has('endereco'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('endereco') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail do Cliente</label>
                            <input type="text" id="email"
                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} " name="email"
                                placeholder="E-mail do cliente">
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button type="button" class="btn btn-secondary btn-sm">Cancelar</button>
                    </form>
                </div>
                @if ($errors->any())
                    <div class="card-footer">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
