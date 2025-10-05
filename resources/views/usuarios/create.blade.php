<!DOCTYPE html>
<html>
<head>
    <title>Criar Usuário</title>
</head>
<body>
    <h1>Criar Usuário</h1>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <label>Nome:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Criar</button>
    </form>

    <br>
    <a href="{{ route('usuarios.index') }}">Voltar</a>
</body>
</html>
