@extends('parts.template') @section('content')

<div class="galerie-background">

    <div class="mascagri">

    </div>

</div>

<div class="container_titluri">

    <div class="vezi-apartamentele"> Vrei sa aflii mai multe? </div>
    <div class="titlu-galerie"> POLITICA DE COOKIES </div>

</div>

<div class="container_termeni_conditii">

    <div class="scris-termeni-conditii">

        <div class="conditii">{!!setting('site.cookies')!!}</div>

    </div>

</div>

@endsection