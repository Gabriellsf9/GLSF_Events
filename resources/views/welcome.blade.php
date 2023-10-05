    @extends('layouts.main')

    @section('title', 'GLSF Events')

    @section('content')

    <h1>algum titulo</h1>
    <a href="/contact">Contatos</a>
    <a href="/products">Produtos</a>
    <img src="/img/events.png" alt="banner">
    @if(10 > 15)
    <p>A condição é true</p>
    @endif

    <p>{{ $name }}</p>

    @if($name == "pedro")
    <p>O nome é pedro</p>
    @elseif($name == "Matheus")
    <p>O nome é {{ $name }} e ele tem {{ $age }} anos, e trabalha como {{ $profession }}</p>

    @else
    <p>O nome não é Pedro</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)

        <p> {{ $arr[$i] }} - {{$i}}</p>

    @endfor

    @endsection
