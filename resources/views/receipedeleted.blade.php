@component('mail::message')
# Introduction

The Receipe Has Been Deleted Successfully.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
