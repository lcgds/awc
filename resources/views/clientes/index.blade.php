<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    @include('bootstrap')
</head>

<body>
    <main class="container my-5">
        <h1>Clientes</h1>

        <h2 class="my-3">Tabela de clientes</h2>
        <table class="table table-hover">
            <thead>
                <td>#</td>
                <td>Nome</td>
                <td>Endereço</td>
                <td>E-mail</td>
                <td>Data de nascimento</td>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->data_de_nascimento }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if(Auth::check())
            <a class="btn btn-primary my-3" href="{{route('clientes.create')}}">Cadastrar novo cliente</a>
        @endif
    </main>
</body>

</html>
