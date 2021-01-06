<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Project-Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          {{-- activated state --}}
      <li class="nav-item {{request()->is('home') ? 'active' : ''}}"> 
          <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{request()->is('login') ? 'active' : ''}}">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item {{request()->is('contact') ? 'active' : ''}}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
  </nav>