@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Alterar Registros do Evento</h2>
    <form method="post" action="{{ route('altera-evento', $registrosEvento->idEvento) }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nomeEvento">Nome do Evento:</label>
            <input type="text" class="form-control" id="nomeEvento" name="nomeEvento" placeholder="Digite o nome do evento" required value="{{ $registrosEvento->nomeEvento }}">
        </div>
        <div class="form-group">
            <label for="dataEvento">Data do Evento:</label>
            <input type="date" class="form-control" id="dataEvento" name="dataEvento" required value="{{ $registrosEvento->dataEvento }}">
        </div>
        <div class="form-group">
            <label for="localEvento">Local do Evento:</label>
            <input type="text" class="form-control" id="localEvento" name="localEvento" placeholder="Digite o local do evento" required value="{{ $registrosEvento->localEvento }}">
        </div>
        <div class="form-group">
            <label for="imgEvento">Imagem do Evento (URL):</label>
            <input type="text" class="form-control" id="imgEvento" name="imgEvento" placeholder="URL da imagem do evento" required value="{{ $registrosEvento->imgEvento }}">
        </div>
        <button type="submit" class="btn btn-primary">Alterar Evento</button>
    </form>
</div>

@endsection
