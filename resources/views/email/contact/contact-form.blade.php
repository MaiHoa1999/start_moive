@component('mail::message')
<strong>Name</strong> {{$data['name']}}
<strong>email</strong> {{$data['email']}}
<strong>Message</strong>
{{isset($data['message'])?$data['message']:$data['content']}}
@endcomponent
