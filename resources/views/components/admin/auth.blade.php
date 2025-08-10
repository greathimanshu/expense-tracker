<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @include('components.admin.partials.styles')
    @stack('styles')
</head>

<body class="bg-white">
    {{ $slot }}
    @include('components.admin.partials.scripts')
    @stack('scripts')
</body>

</html>
