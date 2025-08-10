<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @include('components.admin.partials.styles')
    @stack('styles')
</head>

<body>
    <div class="main-wrapper">
        <livewire:components.admin.partials.header />
        <livewire:components.admin.partials.sidebar />
        {{ $slot }}
    </div>
    @include('components.admin.partials.scripts')
    @stack('scripts')
</body>

</html>
