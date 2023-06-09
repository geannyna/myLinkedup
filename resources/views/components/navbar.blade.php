<nav class="navbar mi_nav navbar-expand-lg fixed-top">
  <div class="container">
    
      <a class="navbar-brand nav_letra fs-5" href="{{ url('/') }}">
       <img src="{{ asset ('./img/chat111.png')}}" style="height: 1.5em">
      </a>    
        <form action="" method="GET" role="search">
           <div class="input_group">
            {{-- action="{{route('search')}}" --}}
                <input type="search" name="q" class="mi_search" placeholder="{{__('Buscar por cargo')}}" >
                <input type="search" name="qq" class="mi_search" placeholder="{{__('Buscar por localizacion')}}" >    
         </div>   
        </form>
     
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">            
              <li class="nav-item">   
                  <a class="nav-link nav_letra" href="./home"> <img class='nav_img' src="./img/home1.png" alt="">
                    <p>Inicio</p>
                  </a> 
              </li>
              <li class="nav-item">
                <a class="nav-link nav_letra" href="">
                  <img class='nav_img' src="./img/group1.png">
                  <p>Mi red</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_letra" href="">
                  <img class='nav_img' src="./img/briefcase1.png">
                  <p>Empleos</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_letra"{{-- href="{{ route('contact') }}"--}}>
                    <img class='nav_img' src="./img/chat1.png">
                    <p>Mensajes</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav_letra" {{--href="{{ route('revisor.become') }}"--}}>
                    <img class='nav_img' src="./img/notification1.png">
                    <p>Notificaciones</p>
                  </a>
              </li>             
          </ul>

          <!-- Right Side Of Navbar --> 
           <ul class="navbar-nav me-auto"> 
              <!-- Authentication Links -->
           
            @guest
               @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}"><span>Entrar</span></a>
                    </li>  
               @endif
               @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}"><span>Registrate</span></a>
                    </li>  
                @endif 
             @else
            <li class="nav-item">
                <form id="logoutForm" action="{{route('logout')}}" method="post">
                @csrf
                </form>
                <a id="logoutBtn" class="nav-link nav_letra" href="#" >{{ __('Salir') }}
                </a>
            </li> 
           @endguest      
          </ul> 
      </div>
  </div>
</nav>