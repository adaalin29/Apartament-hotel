@component('mail::message')
# Rezervare noua

@component('mail::panel')
{{-- <div style="width:100%; text-align:center; font-size:30px; font-height:bold;">
Rezervare noua
</div>   --}}

Name: {{$message['nume']}}<br>
Telefon: {{$message['telefon']}}<br>
Email: {{$message['email']}}<br>
Data Sosire: {{$message['data_sosire']}}<br>
Data Plecare: {{$message['data_plecare']}}<br>
Apartament: {{$message['apartament']}}<br>
Numar de persoane: {{$message['numar_persoane']}}<br>
Mesaj: {{$message['mesaj']}}<br>


@endcomponent

Thanks from,<br>
Team {{ config('app.name') }}
@endcomponent
