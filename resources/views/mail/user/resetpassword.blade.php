<x-mail::message>
# Hello!

    You see this mail because you forgot your password and reset it.
    You can see your new auto-generate password.
    Please use it.

    Your new password is: {{$password}}

{{--    If you want to change your password directly use this link:--}}
{{--<x-mail::button :url="'http://127.0.0.1:8000/en'">--}}
{{--Press me--}}
{{--</x-mail::button>--}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
