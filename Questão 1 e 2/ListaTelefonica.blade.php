<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Telefonica</title>
</head>
<body>
    <form action="{{ route('criar') }}" method="post">
        @csrf
        <div>
            <label>Nome</label>
            <input type="text" name="nome" id="" placeholder="Digite seu nome">
        </div>
    
        <div>
            <label>DDD</label>
            <input type="text" name="ddd" id="" placeholder="Digite seu DDD">
        </div>
    
        <div>
            <label>Telefone</label>
            <input type="text" name="numero" id="" placeholder="Digite seu telefone">
        </div>
        <div>
            <button type="submit">Criar</button>
        </div>
    </form>

    <div>
        <ul>
            @foreach ($lista as $item)
                <li>Nome: {{ $item->nome }}</li>
                <li>DDD: {{ $item->ddd }}</li>
                <li>Numero: {{ $item->numero }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>