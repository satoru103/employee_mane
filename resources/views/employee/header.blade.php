<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('index')}}">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('create')}}">社員追加</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">ログアウト</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{route('index')}}">
      <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="検索" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
    </form>
  </div>
</nav>
