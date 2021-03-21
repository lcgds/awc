<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CV - @yield('nome')</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.5;
        }

        p, a, span {
            font-size: 1.2rem;
        }

        body {
            margin: 0;
            padding: 3cm 2cm 2cm 3cm;
            background-color: #f3f2ef;
            height: 100%;
        } 

        main {
            width: 29%;
            background-color: #0a66c2;
            color: white;
            text-align: right;
            padding: 1.25rem 2.5rem 3rem 0;
            height: calc(100%);
        }

        main a {
            color: white!important;
        }

        aside {
            padding: 1.25rem;
            width: 66%;
            background-color: white;   
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .clear {
            clear: both;
        }

        .inline {
            display: inline;
        }

        .block {
            display: block;
        }

        table {
            width: 90%;
        }

        tr {
            text-align: left;
            vertical-align: middle;
        }

        section {
            margin: 2.5rem 0;
        }
    </style>

</head>
<body>
    
    <main class="inline right">
        <h1>@yield('nome')</h1>
        <p>@yield('objetivo')</p>

        <h2>Informações de contato</h2>
        <p>Telefone</p>
        <a target="_blank" href="tel: @yield('tel')">@yield('tel_formatado')</a>

        <p>E-mail</p>
        <a target="_blank" href="mailto: @yield('email')">@yield('email')</a>

        <p>Linkedin</p>
        <a target="_blank" href="https://www.linkedin.com/in/@yield('linkedin')/">linkedin.com/in/@yield('linkedin')</a>
    </main>

    <aside class="inline left">
        <section>
            <p>Minha carreira está no início, mas estou em busca de uma oportunidade para demonstrar meu talento e minhas habilidades. Acredito que possa compensar a falta de experiência com dedicação e empenho.</p>
        </section>
        
        @if($possuiExperiencia)
        <section>
            <hr>
                <h2>Experiência</h2>
            <hr>

            <table>
                @foreach($experiencias as $experiencia)
                <tr>
                    <td>
                        <span>{{ $experiencia['periodo'] }}</span> 
                    </td>
                    <td>
                        <h3>{{ $experiencia['cargo'] }}</h3>
                        <span>{{ $experiencia['empresa'] }}</span>
                    </td>
                </tr>
                @endforeach

            </table>
        </section>
        @endif

        <section>
            <hr>
                <h2>Educação</h2>
            <hr>

            <table>
                @foreach($formacoes_academicas as $formacao)
                <tr>
                    <td>
                        <span>{{ $formacao['periodo'] }}</span>
                    </td>
                    <td>
                        <h3>{{ $formacao['curso'] }}</h3>
                        <span>{{ $formacao['instituicao'] }}</span>
                    </td>
                </tr>
                @endforeach
            </table>
        </section>
        
        <section>
            <hr>
                <h2>Competências</h2>
            <hr>

            @foreach($competencias as $competencia)
            <p>{{ $competencia['nome'] }}</p>
            <progress style="width: 90%" value="{{ $competencia['nivel'] }}" max="100"></progress>
            @endforeach
        </section>
        
        <section>
            <hr>
            <h2>Cursos e Certificados</h2>
            <hr>

            <table>
                @foreach($certificados as $certificado)
                <tr>
                    <td>
                        <span>{{ $certificado['periodo'] }}</span>
                    </td>
                    <td>
                        <h3>{{ $certificado['titulo'] }}</h3>
                        <span>{{ $certificado['instituicao'] }}</span>
                    </td>
                </tr>
                @endforeach
            </table>
        </section>
    </aside>
    
</body>
</html>