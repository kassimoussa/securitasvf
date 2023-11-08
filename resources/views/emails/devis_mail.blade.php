<x-mail::message>


Vous avez une nouvelle demande de devis de la part de <strong> {{ $name }}</strong>

<x-mail::button :url="'http://securitasv3.test/admin'">
Voir la demande de devis
</x-mail::button>


{{ config('app.name') }}
</x-mail::message>
