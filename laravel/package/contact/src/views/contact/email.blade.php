<x-mail::message>
# Introduction

This a message from: {{$name}}

Body: {{ $message }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
