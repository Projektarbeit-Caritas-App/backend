<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="3;url={{ config('caritas.frontend_url') }}"/>

    <title>{{ env('APP_NAME') }}</title>

    <link href="{{ asset('styles/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<main>
    <div class="wrapper">
        <a href="{{ config('caritas.frontend_url') }}">
            <section class="logo">
                <img src="{{ asset('logo.png') }}" alt="Logo">
            </section>

            <section>
                Redirecting to Admin-Dashboard...
            </section>
        </a>
    </div>
</main>
</body>
</html>
