<x-mail::message>

<div class="text-center">
    <img src="{{ asset('images/logo_securitas.png') }}" alt="" srcset="" height="50" width="100%">
</div>

Vous avez un nouveau message de <strong> {{-- {{ $name }} --}} kassim</strong>

<x-mail::button :url="'http://securitasv3.test/admin'">
Voir le message
</x-mail::button>

{{ config('app.name') }}
</x-mail::message>
