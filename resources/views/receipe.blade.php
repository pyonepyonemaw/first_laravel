@component('mail::message')
# Introduction

<li>Name - {{$receipe->name}}</li>
<li>Ingredients - {{$receipe->ingredient}}</li>

The Receipe Has Been Stored Successfully.
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
