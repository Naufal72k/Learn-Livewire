<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Hotel App' }}</title>
</head>

<body>
    <nav>
        <a wire:navigate href="/test/nopal">test</a>
        <a wire:navigate href="/about">about</a>
        <a wire:navigate href="/contact">contact</a>
    </nav>
    {{ $slot }}
</body>

</html>
