<div class="container">

    <div class="Logo">
        <h1 class>JBK</h1>
    </div>

    @if($isLoggedIn)
        <div class="navbar-container">
            <ul class="ul-container">
                <li><a href="/">Home</a></li>
            </ul>
            <ul class="ul-container">
                <li><a href="/UpdateProfile">Profile</a></li>
            </ul>
        </div>
    @else
        <div class="navbar-container">
            <ul class="ul-container">
                <li><a href="/">Home</a></li>
            </ul>
            <ul class="ul-container">
                <li><a href="/LoginUser">Login</a></li>
            </ul>
        </div>
    @endif

</div>

@yield('container')