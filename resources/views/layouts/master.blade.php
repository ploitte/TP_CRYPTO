<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title or "CryptoTp"}}</title>

    <link rel="stylesheet" href="css/master.css">
</head>
<body>

    @include("includes.header")

    <div id="main">
        @yield("content")
    </div>
    
    @include("includes.footer")
<script src="js/jquery.js"></script>
<script src="js/master.js"></script>
</body>
</html>