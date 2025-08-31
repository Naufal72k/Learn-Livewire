<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <nav>
        <a href="/counter">counter</a>
        <a href="/create-post">created-post</a>
        <a href="/show-post">show-post</a>
    </nav>
    {{ $slot }}
</body>

</html>
