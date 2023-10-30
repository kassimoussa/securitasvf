<x-mail::message>

<img src="{{ asset('images/logo_securitas.png') }}" alt="" srcset="">

Vous avez une nouvelle demande de devis de la de <strong> {{ $name }}</strong>

<x-mail::button :url="'http://securitasv3.test/admin'">
Voir le message
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
