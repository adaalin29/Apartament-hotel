@extends('parts.template') @section('content')

<div class="galerie-background">

                <div class="mascagri">

                </div>

            </div>

            <div class="container_titluri_galerie">

                <div class="vezi-apartamentele"> Vrei sa vezi apartamentele? </div>
                <div class="titlu-galerie"> Galerie </div>

            </div>

            <div class="container_galerie">

                <div class="mobile_scroll">
                    <div class="gallery-categories">
                        @foreach($category as $cat)
                        <div class="gallery-parent">
                            <div class="gallery-category" category_id = {{$cat->id}} >{{$cat->name}}</div>
                            {{-- <div class="linie-gri"></div> --}}
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="gallery-container">
                    @foreach($gallery as $gal)
                        @foreach($gal['images'] as $item)
                        <a class="fancybox-width gallery-item" data-fancybox="gallery" href="{{ route('thumb', ['width:1920',($item)]) }}" item_category={{$gal->category}}>
                            <img class="full-width gallery-image" src="{{ route('thumb', ['width:800',($item)]) }}">
                        </a>
                        @endforeach
                    @endforeach

                    <i aria-hidden="true" class = "hidden-elements"></i>
                    <i aria-hidden="true" class = "hidden-elements"></i>
                    <i aria-hidden="true" class = "hidden-elements"></i>
                </div>

            </div>


@endsection

@push('scripts')
<script>
        $(document).ready(function () {
            $('.gallery-category').click(function () {
                $('.gallery-category').removeClass('gallery-title-active');
                $(this).toggleClass('gallery-title-active');
                var categorie_curenta = $(this).attr('category_id');
                $(".fancybox-width").hide();
                $(".fancybox-width[item_category=" + categorie_curenta + "]").fadeIn("slow");
            });
        });
    </script>
@endpush