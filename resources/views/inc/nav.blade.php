<nav class="navbar navbar-expand-md bg-dark navbar-dark">

  @if (Auth::check())
    @
  <a class="navbar-brand" href="/profile/{{Auth()->User()->username}}">Navbar</a>
  @else
  <a class="nav-link" href="/admin/requests">Link</a>
  @endif

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>
  @if (Auth::check())
    <form class="form-inline " >
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>

  @endif
  @if (Auth::check())
    <ul class="navbar-nav navbar-right">
      <li class="nav-item"><a href="/profile/{{Auth()->User()->username}}" class="nav-link">{{Auth::User()->getName()}}</a> </li>
      <li class="nav-item"><a href="/logout" class="nav-link">Logout</a> </li>
    </ul>
  @endif



</nav>
