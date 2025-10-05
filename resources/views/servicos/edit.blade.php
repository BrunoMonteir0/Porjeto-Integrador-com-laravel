<h1>Editar Serviço</h1>
<form method="POST" action="{{ route('servicos.update', $servico->id) }}">
    @csrf
    @method('PUT')
    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $servico->nome }}" required><br><br>
    <label>Descrição:</label>
    <textarea name="descricao">{{ $servico->descricao }}</textarea><br><br>
    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" value="{{ $servico->preco }}" required><br><br>
    <button type="submit">Atualizar</button>
</form>
