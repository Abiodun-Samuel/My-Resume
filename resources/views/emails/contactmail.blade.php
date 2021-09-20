@component('mail::message')
Hi, 
I'm {{$mail['name']}}

<p>{{$mail['subject']}}</p>

<p>{{$mail['message']}}</p>

@component('mail::button', ['url' => 'mailto:' . $mail['email']])
Reply
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
