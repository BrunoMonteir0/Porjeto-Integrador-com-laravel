<h1>Lista de Serviços</h1>
<a href="{{ route('servicos.create') }}">Criar Serviço</a>
<ul>
    @foreach($servicos as $servico)
    <li>
        {{ $servico->nome }} - R${{ $servico->preco }}
        <a href="{{ route('servicos.edit', $servico->id) }}">Editar</a>
        <form method="POST" action="{{ route('servicos.destroy', $servico->id) }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
    @endforeach
</ul>