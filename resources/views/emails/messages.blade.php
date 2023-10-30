<x-mail::message>


Vous avez un nouveau message de <strong> {{ $name }}</strong>

<x-mail::button :url="'http://securitasv3.test/admin'">
Voir le message
</x-mail::button>

{{ config('app.name') }}
</x-mail::message>
