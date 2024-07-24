<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de eixos</title>
</head>
<body>
    <h1>Tabela de eixos</h1>
    <hr>
    <a href="{{route('eixo.create')}}">Cadastrar</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->descricao}}</td>
                    <td><a href={{route('eixo.show', $item->id)}}>INFO</a></td>
                    <td><a href={{route('eixo.edit', $item->id)}}>EDIT</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>