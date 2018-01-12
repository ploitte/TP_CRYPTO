<h2>REGISTER</h2>

<form id="registerForm" method="POST" action="{{route('register')}}">

    {{ csrf_field() }}
    
    <input type="text"  name="name" value="{{old('name')}}" placeholder="Name..." required autofocus>
    <input  type="email" name="email" value="{{ old('email') }}" placeholder="Email..." required>
    <input  type="password" name="password" placeholder="Password..." required>
    <input class="last" type="password" name="password_confirmation" placeholder="Confirm password..." required>

    <button type="submit">Register</button>
</form>