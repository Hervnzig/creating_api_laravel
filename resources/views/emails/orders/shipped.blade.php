@component('mail::message')
# Introduction

- one 

- Two

- Three

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::button', ['url' => ''])
Buy Product
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
