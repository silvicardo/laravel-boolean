<nav class="navbar navbar-expand-lg navbar-light bg-light px-5 fixed-top">
  <a class="navbar-brand" href=" {{ route('homePage') }}">
    <img src="https://www.boolean.careers/images/common/logo.png" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample05">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('homePage') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('corso') }}">corso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('metodo') }}">metodo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dopoIlCorso') }}">dopo il corso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('faq') }}">faq</a>
      </li>
    </ul>
    <a class="btn_orange text-capitalize" href="#">iscriviti</a>
  </div>
</nav>
