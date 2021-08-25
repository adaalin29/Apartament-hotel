@extends('parts.template') @section('content')
 <div class="galerie-background">

                    <div class="mascagri">

                    </div>

                </div>

                <div class="container_contact">

                    <div class="vezi-apartamentele"> Ai intrebari? </div>
                    <div class="titlu-galerie"> Contacteaza-ne </div>



                    <div class="adresa-parinte">
                        <div class="scris-contact">adresa:</div>
                        <div class="informatii-contact"> {{setting('site.adresa')}}</div>
                    </div>

                    <div class="adresa-parinte">
                        <div class="scris-contact">Telefon:</div>
                        <div class="informatii-contact">{{setting('site.telefon')}}</div>
                    </div>

                    <div class="adresa-parinte">
                        <div class="scris-contact">E-mail:</div>
                        <div class="informatii-contact"><a style = "text-decoration: none;" href = "mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></div>
                    </div>

                </div>

                <div class="container_harta">

                   <div class="squares-contact">
                       <div id="map">  </div>
                       <div class="map_overlay"> 
                            <div class="map_popup"> 
                                <div class="map_popup_title">Adresa: </div>
                                <div class="map_popup_text">{{setting('site.adresa')}}</div>
                            </div>
                         </div>
                        
                        <div class="yellow-square1"></div>
                        <div class="yellow-square2"></div>

                   </div>

                </div>
@endsection

@push("scripts")
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmM1P-D5Zka0kPEbZSrsR90gpBlDxgm18&callback=initMap"
    async defer></script>

<script>
 var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: {{setting('site.latitude')}}, lng: {{setting('site.longitude')}}},
          zoom: 17,
          disableDefaultUI: true
        });
 
        var marker = new google.maps.Marker({
            position: {lat: {{setting('site.latitude')}}, lng: {{setting('site.longitude')}}},
            icon: "images/marker.svg",
            map: map,
          });
      }
</script>
@endpush