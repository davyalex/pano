<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <style>
                .logo{
                    width: 150px;
                   
                    margin-top: -16px
                }
            </style>
            <a class="navbar-brand" href="/">
                <img class="img-fluid img-responsive figure-img logo" src="{{ asset('images/pano NSF.png') }}" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li><a href="/" class=""><i class="fa fa-home" aria-hidden="true"></i> Acceuil</a></li>
                  
                        
                   
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-list" aria-hidden="true"></i> Annonces<b class="caret"></b></a>
                    <ul class="dropdown-menu" >
                             <li><a href="/"style="text-transform:capitalize;">Toutes les annonces</a> <span class=""></span></li>
                             <li class="divider"></li>
                             <li><a href="/categoryList"style="text-transform:capitalize;">Annonces par categorie</a> <span class=""></span></li>

                    </ul>
                </li>
               <style>
                  .publier {
                      background-color: #f39c12;
                     border-radius: 70px
                   }
               </style>
                <li><a href="{{ route('post.create') }}" class="publier" ><i class="fa fa-plus" aria-hidden="true"></i> Publier</a></li>
                    @guest
                      @if (Route::has('register')&&('login'))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> Mon compte <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('login') }}">Connexion</a></li>
                             <li class="divider"></li>
                        <li><a href="{{ route('register') }}">Creer un compte</a></li>
                          
                    </ul>
                </li>
                @endif
                @endguest
                    @auth
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                         
                                 <li><a href="{{ route('post.mesposts') }}"><i class="fa fa-list" aria-hidden="true"></i><strong class=""> Mes annonces </strong> <span class="">{{ Auth::user()->posts->count() }}</span></a></li>
                                 <li class="divider"></li>
                                 
                                 @if (Auth::user()->role==1 OR Auth::user()->email=="alexkouamelan96@gmail.com" )
                                 <li><a href="{{ route('admin') }}"><i class="fa fa-clipboard" aria-hidden="true"></i> Dasboard</a></li>
                                 @endif
     
                            <li class="divider"></li>
                            <li>
                                <a class="text-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 <i class="fa fa-sign-out"></i> <strong class=" ">{{ __('Deconnexion') }}</strong>
                             </a>
     
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                            </li>
                        </ul>
                    </li>
                    @endauth
                     
               
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="tel:+225"><strong>Contact: </strong>+225-077-961-3593</a></li>
                       
                        <li><a href="mailto:info@pano.com"><strong>Mail: </strong>info@pano.com</a></li>
                      
                        <li class="divider"></li>
                        <li><a href="#"><strong>Address: </strong>
                            <div>
                                Abidjan,<br />
                               Cocody, Ci
                            </div>
                        </a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="search" method="GET" action="{{ route('post.search') }}">
                    @csrf
                <div class="form-group">
                    <input type="text" name="q" placeholder="Entrer une categorie ..." class="form-control">
                </div>
                &nbsp; 
                <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    
      
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
{{-- <div class="header">
    <div class="container">
       
    </div>
</div> --}}