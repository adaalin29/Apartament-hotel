@extends('parts.template') @section('content')

<div class="banner parallax-window" data-parallax="scroll"
    data-image-src="{{ route('thumb', ['width:1920',($bannerImage->image)]) }}">

    <div class="mascagri">

    </div>

    <div class="banner_content">
        <div class="banner_container_inside lower">

            <div class="titlu_banner">{!!strip_tags($indexBannerTitlu->content, '<p>')!!}</div>
            <div class="subtitlu_banner">{!!strip_tags($indexBannerSubtitlu->content, '<p>')!!}</div>

        </div>
    </div>


</div>

<form class = "send_reservation">
        <div class="container container_formular_desktop_child">
            <div class="container_formular_contact">

                <div class="first_row">
                    <div class="first_element_row">

                        <input name = "data_sosire" type='text' placeholder="Data sosirii" data-language='en' class="datepicker-here form_input" onkeypress="return false;" />

                        <img class="sageata_imagine" src="images/right-chevron.png">

                    </div>

                    <div class="first_element_row">

                        <input name = "data_plecare" type='text' placeholder="Data plecarii" data-language='en' class="datepicker-here form_input" />

                        <img class="sageata_imagine" src="images/right-chevron.png">

                    </div>

                    <div class="first_element_row">
                        <select name = "numar_persoane" class="form_input">
                            <option selected="selected" disabled>Numar de persoane</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <img class="sageata_imagine" src="images/right-chevron.png">
                    </div>
                    <div class="first_element_row">
                        <select name = "apartament" class="form_input">
                            <option value="" disabled selected>Alege apartamentul</option>
                            @foreach($category as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        <img class="sageata_imagine" src="images/right-chevron.png">
                    </div>

                </div>

                <div class="second_row">

                    <div class="second_element_row">
                        <input name = "nume" placeholder="Nume si prenume" type="text" class="form_input" />
                    </div>

                    <div class="second_element_row">
                        <input name = "telefon" placeholder="Telefon" type="number" class="form_input" />
                    </div>
                    <div class="second_element_row">
                        <input name = "email" placeholder="E-mail" type="email" class="form_input" />
                    </div>

                </div>

                <div class="second_row_mesaj">
                    <div class="second_element_row_mesaj">
                        <textarea name = "mesaj" placeholder="Mesaj" class="form_input"></textarea>
                    </div>

                </div>

                <div class="third_row">

                    <button type="button" class="cerere_formular">Trimite cererea</button>

                </div>

            </div>
        </div>
    </form>
</main>

<div class="container container-beneficii">

    <div class="beneficii">

        <div class="element-beneficii">

            <div class="poze-beneficii">
                <img class="imagine-dimensiuni" src="images/bicicleta.png"> </div>

            <div class="text-beneficii"> Parcuri in apropiere </div>

        </div>

        <div class="element-beneficii">

            <div class="poze-beneficii"> <img class="imagine-dimensiuni" src="images/wifi.png"> </div>

            <div class="text-beneficii">Wi-fi gratuit </div>

        </div>

        <div class="element-beneficii">

            <div class="poze-beneficii"> <img class="imagine-dimensiuni" src="images/parcare.png"> </div>

            <div class="text-beneficii">Parcare inclusa </div>

        </div>

        <div class="element-beneficii">

            <div class="poze-beneficii"> <img class="imagine-dimensiuni" src="images/siguranta.png"> </div>

            <div class="text-beneficii">Siguranta si intimitate </div>

        </div>

    </div>


    <div class="swiper_elemente">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="element-beneficii">

                        <div class="poze-beneficii">
                            <img class="imagine-dimensiuni" src="images/bicicleta.png"> </div>

                        <div class="text-beneficii"> Parcuri in apropiere </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="element-beneficii">

                        <div class="poze-beneficii"> <img class="imagine-dimensiuni" src="images/wifi.png"> </div>

                        <div class="text-beneficii">Wi-fi gratuit </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="element-beneficii">

                        <div class="poze-beneficii"> <img class="imagine-dimensiuni" src="images/parcare.png"> </div>

                        <div class="text-beneficii">Parcare inclusa </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="element-beneficii">

                        <div class="poze-beneficii"> <img class="imagine-dimensiuni" src="images/siguranta.png"> </div>

                        <div class="text-beneficii">Siguranta si intimitate </div>

                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination-elemente swiper-pagination"></div>
        </div>
    </div>

</div>

<div class="container container-despre">
    <div class="container_despre_noi_child">
        <div class="container_text_prezentare">
            <div class="despre-noi">Despre noi</div>
            <div class="titlu-apartamente">{!!strip_tags($despreTitlu->content, '<p>')!!}</div>
            <div class="descriere-apartament">{!!strip_tags($despreDescriere->content, '<p>')!!}</div>
            <div class="afla-mai-multe">
                <a href="apartamente" class="buton-afla">Afla mai multe </a>
            </div>
        </div>

        <div class="container_poza">
            <img class="poza-square-nou" src="{{ route('thumb', ['width:800',($desprePoza->image)]) }}" />
            <div class="yellow-square-nou"> </div>
            <div class="yellow-square-nou2"> </div>

        </div>
    </div>
</div>

<div class="background-gri">
    <div class="subtitlu-prezentare"> Exploreaza </div>
    <div class="titlu-prezentare"> Apartamentele noastre </div>
    <div class=  "container">
            <div class="prezentare_swiper">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            @foreach($category as $apartament)
                            <div class="swiper-slide">
            
                                <div class="container_centru_swiper">
            
                                    <div class="container_text_swiper">
                                    <div class="city-center-river">{{$apartament->name}}</div>
                                        <div class="scris-city-center">{!!strip_tags($apartament->descriere, '<p>')!!}</div>
                                        <div class="buton">
                                            <a class="buton_index" href="{{$apartament->url}}"
                                                target="_blank">Afla mai multe</a>
                                        </div>
                                    </div>
            
                                    <div class="container_poza_swiper">
                                        <div class="poza_swiper"> <img class="room_swiper" src="{{ route('thumb', ['width:800',($apartament->imagine)]) }}" /></div>
                                    </div>
            
                                </div>
            
                            </div>
                            @endforeach
            
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination-index swiper-pagination"></div>
                    </div>
                </div>
    </div>
    <div class = "awards">
            <div class = "awards-container">
                <img class = "award-image" src = "images/award1.png">
                <img class = "award-image" src = "images/award2.png">
            </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {

        var swiper = new Swiper('.swiper_elemente .swiper-container', {
        slidesPerView: 2,
      pagination: {
        el: '.swiper-pagination-elemente',
      },
    });
        var swiper2 = new Swiper('.prezentare_swiper .swiper-container', {
            pagination: {
                loop:false,
                el: '.swiper-pagination-index',
                dynamicBullets: true,
            },
        });
    });

   
</script>

<script>
        document.addEventListener("DOMContentLoaded", function () {
          $.ajaxSetup({
      
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
          });
          var $formContact = $('.send_reservation');
          $('.cerere_formular').on('click', function (event) {
            event.preventDefault();
            $.ajax({
              method: 'POST',
              url: '{{ action("IndexController@send_message") }}',
              data: $formContact.serializeArray(),
              context: this,
              async: true,
              cache: false,
              dataType: 'json'
            }).done(function (res) {
              console.log(res);
              if (res.success == true) {
                $.notify(res.successMessage, "success");
                setTimeout(function () {
                  window.location.reload();
                
                }, 4000);
              } else {
                var eroare = res.error;
              for (var i = 0; i < eroare.length; i++) {
                eroare[i] = eroare[i] + "\n";
              }
                $.notify(res.error, {
                  type: "error",
                  breakNewLines: true,
                  gap:2
                });
              }
            });
            return;
          });
      
        });
      </script>


@endpush