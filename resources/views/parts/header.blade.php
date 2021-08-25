<header id="header">

        <div id="meniu" class="meniu">
            <div id="inner_meniu">
                <div id="close_menu" class="container_close_menu">
                    <img src="images/x.png" style=" cursor:pointer; width:30px; height:30px;" />

                    <span>Inchide</span>
                </div>
                <div class="meniu_logo_container">
                    <a href="/"><img class="imgwidth" src="images/logo_blue.png"></a>
                </div>
                <ul>
                    <li><a href="">Acasa</a></li>
                    <li><a href="apartamente">Apartamente</a></li>
                    <li><a href="galerie">Galerie</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
                <div class="meniu_linie"></div>
                <div class="meniu_phone">{{setting('site.telefon')}}</div>
                <div class="meniu_mail"><a href = "mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></div>
            </div>
        </div>

        <div id="open_menu" class="menu">

            <div class="designsvg"><img class="svg" style="cursor:pointer;" src="images/3.svg" /> </div>

            <div class="scris">
                <div class='scrismeniu' style="cursor:pointer;">Menu</div>
            </div>

        </div>

        <div class="logo">
            <a href=""><img class="imgwidth" src="images/logo_white.png"></a>
        </div>

        <div class="headar_social_container">
            
            <div class="facebook">
            <a href="{{setting('site.facebook-link')}}"><img class="facebooklogo" src="images/facebook-12.png"> </a>
            </div>

        </div>

    </header>
    @push('scripts')
    <script>
        $('#open_menu').click(function() {
            $("#meniu").css('height', '600px');
            $("#inner_meniu").css('display', 'flex');
            setTimeout(() => {
                $("#inner_meniu").css('opacity', '1');
            }, 600);

        });
        $('#close_menu').click(function() {
            $("#inner_meniu").css('opacity', '0');
            setTimeout(() => {
                $("#inner_meniu").css('display', 'none');
                $("#meniu").css('height', 0);
            }, 400);

        });
    </script>
    @endpush