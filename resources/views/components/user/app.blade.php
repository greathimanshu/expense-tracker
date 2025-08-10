<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @include('components.user.partials.styles')
    @stack('styles')
</head>

<body>
    <div class="main-wrapper">
        <livewire:components.user.partials.header />
        <livewire:components.user.partials.sidebar />
        {{ $slot }}
    </div>
    @include('components.user.partials.scripts')
    @stack('scripts')
</body>

</html>
