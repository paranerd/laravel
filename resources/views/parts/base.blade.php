<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <style>
        .table > tbody > tr > td,
        .table > tbody > tr > th, {
             vertical-align: middle !important;
        }
        </style>
    </head>
    <body>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
          <a href="http://localhost/test1/public" class="navbar-brand">My App</a>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
              @guest
              <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
              <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
              @endguest
              @auth
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
