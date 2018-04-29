<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>O-S-C</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">O-S-C v.2</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="/home">Home</a>
            <a class="nav-link" href="/products">Products</a>
            <a class="nav-link" href="/contact">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Online Store Concept v.2</h1>
        <p class="lead">Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum.</p>
        <p class="lead">
          @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="btn btn-lg btn-secondary">Home</a>
	        @else
	            <a href="{{ route('login') }}" class="btn btn-lg btn-primary">Login</a>
	            <a href="{{ route('register') }}" class="btn btn-lg btn-secondary">Register</a>
	            @endauth
	        @endif
        </p>

      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Home template 4 <a href="{{ url('/home') }}">OSC</a></p>
        </div>
      </footer>
    </div>
  </body>
</html>
