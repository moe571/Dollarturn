<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul id="navbar-nav" class="navbar-nav mx-auto">
    <li class="nav-item dropdown active">
      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hacer dinero</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item p-3 text-center" href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'lanza-libre']) }}">Lanza libre</a>
        <a class="dropdown-item p-3 text-center" href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'aplicaciones-de-dinero']) }}">Aplicaciones de dinero</a>
        <a class="dropdown-item p-3 text-center" href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'trabajos-en-linea']) }}">Trabajos en línea</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Iniciar un negocio</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item p-3 text-center" href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'hacer-un-sitio-web']) }}">Hacer un sitio web</a>
        <a class="dropdown-item p-3 text-center" href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'negocios-en-linea']) }}">Negocios en línea</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'ahorrar-dinero']) }}">Ahorrar dinero</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Invertir</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item p-3 text-center" href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'acciones-y-forex']) }}">Acciones y forex</a>
        <a class="dropdown-item p-3 text-center" href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'criptomonedas']) }}">Criptomonedas</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Idioma</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item p-3 text-center" href="/en">Inglés &nbsp; <span class="flag-icon flag-icon-us"></a>
        <a class="dropdown-item p-3 text-center" href="/ar">Arábica &nbsp; <span class="flag-icon flag-icon-sa"></a>
        <a class="dropdown-item p-3 text-center" href="/es">Español &nbsp; <span class="flag-icon flag-icon-es"></a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('contact', app()->getLocale()) }}">Contactos</a>
    </li>

  </ul>
  <!-- Desktop search form -->
  <!-- <form action="{{ route('search', app()->getLocale()) }}" class="d-none d-sm-block search-form">
    <input type="search" placeholder="Buscar..." name="term" value="{{ request('term') }}">
    <i class="fas fa-search"></i>
  </form> -->

  <div class="aa-input-container" id="aa-input-container">
      <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Buscar..." name="search" autocomplete="off" />
      <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
          <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
      </svg>
  </div>

  <!-- Mobile search form -->
  <!-- <form action="{{ route('search', app()->getLocale()) }}" class="d-block d-flex flex-column d-sm-none form-inline my-2 my-lg-0 mobile-search">
  <input class="form-control mr-sm-2" name="term" value="{{ request('term') }}" type="search" placeholder="Buscar" aria-label="Search">
  <button class="btn btn-success mt-3" type="submit">Buscar</button> -->
</form>
</div>
