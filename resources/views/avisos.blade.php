@extends('layouts.externo')
@section('title', 'Quadro de Avisos da Empresa')
@section('sidebar')
    @parent
    <p>^ ^ Barra superior adicionada do layout pai/mãe ^ ^ </p>
@endsection
@section('content')
    <p>Quadro de Avisos da Empresa</p>
    <br>
    <p>Ola, {{$nome}}! Veja abaixo aos avisos de hoje</P>

    @if ($motrar)
        @foreach($avisos as $aviso)
        <p>Aviso #{{$aviso['id']}} : {{$aviso ['texto']}} </p>
        @endforeach
    @else
        O aviso não será exibido!
    @endif
@endsection
