@extends('layouts.externo')

@section('title','Quadro de Avisos da Empresa')

@section('sidebar')
    @parent
    <p>^^Barra superior adicionada do layout pai/m&atilde;e^^</p>
@endsection

@section('content')
    <p>Quadro de Avisos da Empresa</p>
    <p>Olá, {{ $nome }}</p>
    @if($mostrar)
        @foreach($avisos as $aviso)
            <p>Aviso # {{ $aviso['id'] }}</p>
            <p>{{ $aviso['texto'] }}</p>
        @endforeach
    @else
        <p>O aviso não será exibido!</p>
    @endif
@endsection

