<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random</title>
</head>
<body>
    <h1>Random</h1>
    <p>This is your random string: {{ $random }}</p>

    @if (session()->has('myflash'))
        <p>{{ session()->get('myflash') }}</p>
    @endif
</body>
</html>