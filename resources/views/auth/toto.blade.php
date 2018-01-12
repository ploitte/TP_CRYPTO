
<h2>LOGIN</h2>

<form id="loginForm" method="POST" action="{{route('login')}}">

    {{ csrf_field() }}
    
    <input type="email" name="email" value="{{old('email')}}" placeholder="Email..." required autofocus>
    <input class="last" type="password" name="password" placeholder="Password..." required>
    <button type="submit">Login</button>
</form>