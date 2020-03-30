@component('mail::message')
# Introduction

The Receipe Has Been Updated Successfully.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
