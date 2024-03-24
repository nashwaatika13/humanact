<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #fb6f92">
  <div class="container">
    <a class="navbar-brand" href="#">Nashwa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ( $title == 'Home' ) ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        <li class="nav-item">
          <a class="nav-link {{ ( $title == 'Contacts' ) ? 'active' : ''}}" href="{{route('contacts.create')}}">Ask Your Help Here</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route ('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('register')}}">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>