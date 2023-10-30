<x-mail::message>
{{-- # Introduction --}}

<img src="{{ asset('images/logo_securitas.png') }}" alt="" srcset="">

Bonjour {{ $name }}
Merci pour nous avoir contacter. Nous vous repondrons sous peu !

<x-mail::button :url="'http://securitasv3.test'">
Visiter le site
</x-mail::button>

 
{{ config('app.name') }}
</x-mail::message>
