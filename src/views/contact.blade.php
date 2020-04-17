@component('mail::message')


{{ $name }}<br>
{{ $email }}<br>
{{ $massege }}<br>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
