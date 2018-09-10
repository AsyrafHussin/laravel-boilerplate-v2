<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Laravel Boilerplate</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Laravel boilerplate</h1>
    <script src="{{ mix('js/app.js') }}"></script>
    @include('errors.messages')
</body>
</html>
