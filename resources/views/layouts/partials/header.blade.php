<header>
    <ul>
        <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">home</a></li>
        <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">cursos</a></li>
        <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">nosotros</a></li>
        <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">contactanos</a></li>
    </ul>
</header>