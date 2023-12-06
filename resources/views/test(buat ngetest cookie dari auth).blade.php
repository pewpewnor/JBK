<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <h1>hi</h1>
    @if($isLoggedIn)
        <a href="/UpdateProfile">profile</a>
    @else
        <a href="/LoginUser">Login</a>
    @endif
    
</body>
</html>