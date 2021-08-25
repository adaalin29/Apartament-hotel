@extends('parts.template') @section('content')

<div class="galerie-background">

    <div class="mascagri">

    </div>

</div>

<div class="container_titluri">

    <div class="vezi-apartamentele"> Vrei sa aflii mai multe? </div>
    <div class="titlu-galerie"> TERMENI SI CONDITII </div>

</div>

<div class="container_termeni_conditii">

    <div class="scris-termeni-conditii">

    <div class="conditii">{!!setting('site.termeni')!!}</div>

    </div>

</div>

@endsection