@extends('parts.template') @section('content')

 
            <div class="galerie-background">

                <div class="mascagri">

                </div>

            </div>

            <div class="container_swiper_apartamente">

                <div class="vezi-apartamentele"> Exploreaza </div>
                <div class="titlu-galerie"> Apartamentele noastre </div>

                <div class="text_apartamente">{!!$descriere->content!!}</div>

            </div>
            {{-- @foreach($category as $apartament)
            @if(count($apartament->apartamente)>0)
            <div class="container_apartamente">

                <div class="squares-contact">

                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            
                            @foreach($apartament->apartamente as $item)
                            <div class="swiper-slide">
                                <img class="apartamente_swiper_imagine" src="{{ route('thumb', ['width:800',($item->image)]) }}" />
                                <div class="apartamente_swiper_container">
                                <div class="ap_swi_title">{{$item->name}}</div>
                                    <ul>
                                        <li>Dimensiune apartament: {{$item->dimensiune}} m2</li>
                                        <li>Persoane: {{$item->persoane}}</li>
                                        <li>Paturi: {{$item->paturi}}</li>
                                        <li>Camere: {{$item->camere}}</li>
                                        <li>Baie:{{$item->baie}}</li>
                                    </ul>
                                    <a href="{{$item->url}}" target="_blank">Afla mai multe</a>
                                </div>
                            </div>
                            @endforeach
                            

                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="yellow-square-nou"> </div>
                    <div class="yellow-square-nou2"> </div>

                </div> --}}

            </div>


            @foreach($apartamente as $item)
            <div class="container_apartamente">

                <div class="squares-contact">

                    <img class="apartamente_swiper_imagine" src="{{ route('thumb', ['width:1920',($item->image)]) }}" />
                    <div class="apartamente_swiper_container">
                    <div class="ap_swi_title">{{$item->name}}</div>
                        {{-- <ul>
                            <li>Dimensiune apartament: {{$item->dimensiune}} m2</li>
                            <li>Persoane: {{$item->persoane}}</li>
                            <li>Paturi: {{$item->paturi}}</li>
                            <li>Camere: {{$item->camere}}</li>
                            <li>Baie:{{$item->bai}}</li>
                        </ul> --}}
                        <a href="{{$item->url}}" target="_blank">Afla mai multe</a>
                    </div>

                    <div class="yellow-square-nou"> </div>
                    <div class="yellow-square-nou2"> </div>

                </div>

            </div>
            @endforeach

@endsection
@push('scripts')
<script>
        var swiper = new Swiper('.swiper-container', {

            loop: true,
            pagination: {
                el: '.swiper-pagination',
            }
        });
</script>
@endpush