@component('mail::message')
# {{ $details['title'] }}

{{ $details['reply'] }}

@component('mail::button', ['url' => $details['url']])
الرخصة السودانية لتشغيل الحاسوب
@endcomponent

ولكم جزيل الشكر والتقدير <br>
{{ config('app.name') }}
@endcomponent
