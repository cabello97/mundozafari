<nav class="navbar navbar-expand-lg navbar-light" style="background:#879056" >
    <div class="container">
        <a class="navbar-brand" href={{url('/collection')}} style="color:#FFF"><span style="font-size:15pt">&#x1F30D</span> Mundo Zafari</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('collection') && ! Request::is('collection/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/collection')}}">
                            <span >&#x1F981</span>
                            Colección
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('collection/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/collection/create')}}">
                            <span>&#10010</span> Añadir animal
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('collection/gallery') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/collection/gallery')}}">
                            <span>&#x1F5BC</span> Galería
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('upload') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/upload')}}">
                            <span>&#10010</span> Subir imagenes
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav><br>
