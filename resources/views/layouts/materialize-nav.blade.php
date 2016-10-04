<nav>
  <div class="nav-wrapper">
    <a href="{{ url('/') }}" class="brand-logo">Logo</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Registre-se</a></li>
      @else
          <li><a href="{{ url('/temas') }}">Temas</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}
                <i class="material-icons right">arrow_drop_down</i>
              </a>
          </li>
          
              <ul id="dropdown1" class="dropdown-content">
                <li><a href="{{ url('/profile') }}">Perfil</a></li>
                <li class="divider"></li>
                <li>
                  <a href="{{ url('/logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Sair
                  </a>

                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
              </ul>
      @endif
    </ul>

    <ul class="side-nav" id="mobile-demo">
      @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Registre-se</a></li>
      @else
          <li><div class="userView">
                <a href="#!user"><img class="circle" src="/img/no-picture.jpg"></a>
                <a href="#!name"><span class="name">{{ Auth::user()->name }}</span></a>
                <a href="#!email"><span class="email">{{ Auth::user()->email }}</span></a>
              </div>
          </li>
          <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
          <li><a href="#!">Second Link</a></li>
          <li><div class="divider"></div></li>         
          <li>
            <a class="waves-effect" href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Sair
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
      @endif
    </ul>
  </div>
</nav>
