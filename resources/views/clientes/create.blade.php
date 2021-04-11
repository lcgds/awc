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
        <h2 class="my-3">Cadastro de clientes</h2>

        <form method="post" action="{{route('clientes.store')}}">
            @csrf

            <div class="form-floating my-3">
                <input class="form-control" name="nome" type="text" focused>
                <label class="form-label" for="nome">Nome</label>
            </div>

            <div class="form-floating my-3">
                <input class="form-control" name="endereco" type="text">
                <label class="form-label" for="endereco">Endereço</label>
            </div>

            <div class="form-floating my-3">
                <input class="form-control" name="email" type="email">
                <label class="form-label" for="email">E-mail</label>
            </div>

            <div class="form-floating my-3">
                <input class="form-control" name="data_de_nascimento" type="date">
                <label class="form-label" for="data_de_nascimento">Data de nascimento</label>
            </div>

            <button class="btn btn-success" type="submit">Cadastrar</button>
        </form>

        <a class="btn btn-secondary my-3" href="{{route('clientes.index')}}">Voltar</a>
    </main>

    

</body>

</html>
