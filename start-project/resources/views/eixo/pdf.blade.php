<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Geral</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Relatório Geral</h1>
    <hr>

    <!-- Seção de Eixos -->
    <h2>Eixos Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eixos as $eixo)
                <tr>
                    <td>{{ $eixo->id }}</td>
                    <td>{{ $eixo->nome }}</td>
                    <td>{{ $eixo->descricao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Seção de Cursos -->
    <h2>Cursos Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Eixo Relacionado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td>{{ $curso->eixo_id  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Seção de Disciplinas -->
    <h2>Disciplinas Cadastradas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Curso Relacionado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
                <tr>
                    <td>{{ $disciplina->id }}</td>
                    <td>{{ $disciplina->nome }}</td>
                    <td>{{ $disciplina->curso_id ?? 'Não relacionado' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
