<nav class="navbar navbar-inverse" id="navi">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('home')}}">Series.com</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('home')}}">Home<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Series <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Drama</a></li>
            <li><a href="#">Terror</a></li>
            <li><a href="#">Romantic</a></li>
            <li><a href="#">Others</a></li>
            <li class="divider"></li>
            <li><a href="#">Popular Ones</a></li>
          </ul>
        </li>
        <li><a href="#">Music</a></li>
        <li><a href="#">Comics</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          <li><a href="{{route('logout')}}">Logout</a></li>
          @else
          <li><a href="{{route('usersite')}}">Login</a></li>
          @endif
      </ul>
    </div>
  </div>
</nav>
