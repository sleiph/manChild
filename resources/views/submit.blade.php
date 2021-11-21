@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Adicionar um link</h1>
        </div>
        <div class="row">
            <form action="/submit" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Arrume os seguintes erros:
                    </div>
                @endif
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Título" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" placeholder="Url" value="{{ old('url') }}">
                    @error('url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Descrição</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Descrição">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="seguradordeBotao">
                    <button type="submit" class="btn btn-primary">Submeter</button>
                </div>
            </form>
        </div>
    </div>
@endsection