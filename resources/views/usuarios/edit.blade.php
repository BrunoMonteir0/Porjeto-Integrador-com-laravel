<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label><br>
        <input type="text" name="name" value="{{ $usuario->name }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $usuario->email }}" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('usuarios.index') }}">Voltar</a>
</body>
</html>
