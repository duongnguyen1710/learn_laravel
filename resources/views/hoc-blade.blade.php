<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học blade</title>
</head>
<body>
    @include('includes.header')
    <h2>Tiêu đề template </h2>
    @yield('content')
    @include('includes.footer')
</body>
</html>