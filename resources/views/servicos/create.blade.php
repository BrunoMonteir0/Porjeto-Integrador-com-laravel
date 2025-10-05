<h1>Criar Serviço</h1>
<form method="POST" action="{{ route('servicos.store') }}">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>
    <label>Descrição:</label>
    <textarea name="descricao"></textarea><br><br>
    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" required><br><br>
    <button type="submit">Salvar</button>
</form>
