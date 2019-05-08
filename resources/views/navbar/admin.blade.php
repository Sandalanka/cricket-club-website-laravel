<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Baduraliya Cricket Clube</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('admin')}}">Schedule</a></li>
      <li><a href="{{route('result')}}">Result</a></li>
      <li><a href="{{route('teamshow')}}">Team Player</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">

      <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
    </ul>
  </div>
</nav>