<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>home Page</title>
</head>
<body>
    <x-nav  href="/"> Home</x-nav>
    <x-nav  href="/about">About</x-nav>
    <x-nav  href="/contact">Contact</x-nav>

    {{ $slot }}
</body>
</html>
