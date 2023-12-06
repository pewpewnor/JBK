<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Profile</title>
</head>
<body>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="underline-remover">
     <a href="/"><h1 class="title">JBK.</h1></a>   
    </div>
    
    <div class="container text-center">
        <div class="row align-items-center">
          <div class="col col-md-4">
            <center>
            <img class="logo-regist" src="{{asset('Assets/logo.jpg')}}">
            </center>
          </div>
          <div class="col col-md-4 offset-md-4">
            <div class="container">
                <p class="create-acc-text">Update Your Profile?</p>
               
                <p class="current-data">Current Data:</p>
                <p class="current-data">Username: {{$username}}</p>
                <p class="current-data">Email: {{$email}}</p>

                <form method="POST" action="{{route('users.update')}}">
                    @csrf
                    @method('PUT')
                    <label for="username">Username</label>
                    <input class="input-style" type="text" id="username" name="username" required>
                    
                    <label for="email">Email</label>
                    <input class="input-style" type="email" id="email" name="email" required>
                    
                    <label for="password">Password</label>
                    <input class="input-style" type="password" id="password" name="password" required>
                    
                    <button class="button-style" type="submit">Update profile</button>
                </form>

                @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                   <button class="button-style logout-color" type="submit">Log out</button> 
                </form>
                @endauth
            </div>
          </div>
        </div>
      </div>
</body>
</html>