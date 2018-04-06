<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <div id="mobile-menu">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
            </div>
            <a class="navbar-brand" href="index.html">
                RR - App
                <span>v.1.0</span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="left-nav-toggle">
                <a href="">
                    <i class="stroke-hamburgermenu"></i>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                @if(Sentinel::check())                   
                    <li>
                        <a href="#">
                            <span class="profile-address">Hola {{Sentinel::getUser()->first_name}}</span>                                                        
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="document.getElementById('logout-form').submit()">
                            <i class="fa fa-sign-out"></i> Salir                      
                        </a>
                    </li>
                    <li role="presentation">
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                                {{csrf_field()}}                                
                        </form> 
                    </li>                    
                @endif
            </ul>
        </div>
    </div>
</nav>