
<header>
    
    <img id="logo" src="img/logo.png">


    <div id="menu">
        <a class="{{$name === 'home' ? 'active' : ''}}"    href="{{url('home')}}">Home</a>
        <a class="{{$name === 'wallets' ? 'active' : ''}}" href="{{url('wallets')}}">Wallets</a>
        <a class="{{$name === 'orders' ? 'active' : ''}}" href="{{url('orders')}}">Orders</a>
        <a class="{{$name === 'profil' ? 'active' : ''}}" href="{{url('profil')}}">Profil</a>

    </div>

</header>

