@component('mail::message')
# Introduction

Hello !

Your Company has been successfully added on our CRM!

@component('mail::button', ['url' => '/company', 'color' => 'success'])

Check Listing

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
