<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" id="nav">
            <div class="container">
                
                <div class="navbar-header" > 
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" id="banner" >
                       Quiz--8t---Now
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    
                    <!-- Left Side Of Navbar -->
                    @guest
                    <!-- If not looged In-->
                    @else
                    <!-- If looged In-->
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('quiz')}}">Quiz</a> </li>
                        <li><a href="{{route('e-learning')}}">E-learning </a></li>
                        <li><a href="#">Trending</a> </li>
                        <li><a href="{{route('article')}}">Articles</a> </li>
                        <li><a href="#">Tips</a> </li>
                        <li><a href="#">Contact</a> </li>
                    </ul>
                     @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                        <!-- If not looged In-->
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <!-- If looged In-->
                            <li class="dropdown">
                                <a href="#"  data-toggle="collapse" data-target="#demo">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>
                                 <div  class="collapse" id="demo">
                                    
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    
                                </div>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>



        <div >
        @yield('content')
        </div>
        <hr>
        <footer>
           <div class="col-lg-3 col-lg-offset-1">
            <h4 >How are we?</h4>
           
                Quiz8Tnow is s e-leanring site where you can learn various programming languages.
                Each language has its our quiz and mock test.All the usefull knowlegde is free of cost.
                Our motive is to encourage more software developer by providing them a platform to learn 
                new stuff
           
        </div>
        <div class="col-lg-3 col-lg-offset-1">
            <h4 >Where are we?</h4>
             Harpal Singh<br>
                Software Developer</br>
                Contact: 905-867-6640<br>
                Email: harpals122@gmail.com
                <br>LinkedIn: <a href="https://www.linkedin.com/in/harpal-singh-a05271ab/">Harpal Singh</a>
             </div>
             <div class="col-lg-4 ">
            <h4 >Feedbacks Are Appreciated.</h4>
               <input id="email" type="email" class=" col-lg-7" placeholder="Enter Email"name="email"  >
                <br>
<br>

                <input id="text" type="text" class=" col-lg-7" placeholder="Enter Contact Number" name="contact"  r>
                <br>
<br>

                <textarea row=" 2"placeholder="Describe yourself here..."  class=" col-lg-7"></textarea>

<br>

                <input id="submit" type="Submit" class=" col-lg-7" Value="submit" >
            
            
             </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
