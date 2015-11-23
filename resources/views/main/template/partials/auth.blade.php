<span>
    <img alt="image" class="img-circle" src="{{ asset('img/profile_small.jpg') }}" />
</span>
<a data-toggle="dropdown" class="dropdown-toggle" href="#">
    <span class="clear">
        <span class="block m-t-xs">
            <strong class="font-bold">{{ Auth::user()->name }}</strong>
        </span>
        <span class="text-muted text-xs block">
            {{ Auth::user()->Perfil }}
            <b class="caret"></b>
        </span>
    </span>
</a>
<ul class="dropdown-menu animated fadeInRight m-t-xs">
    <li>
        <a href="profile.html">Perfíl</a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="{{ route('auth.logout') }}">Desconectar</a>
    </li>
</ul>