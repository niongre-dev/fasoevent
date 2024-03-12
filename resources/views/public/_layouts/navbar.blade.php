<nav id="navbar" class="navbar">
    <ul>
      <li>
        <a class="nav-link scrollto {{ request() -> routeIs('acceuil') ? 'active' : ''}} " href="{{ route('acceuil') }}">Accueil</a>
      </li>
      @if (request() -> routeIs('public.evenements') == false)
      
      <li><a class="nav-link scrollto" href="#about">A propos</a></li>
      <li>
        <a class="nav-link scrollto" href="#portfolio">Portfolio</a>
      </li>
      <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
      <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      @endif
      <li><a class="nav-link scrollto {{ request() -> routeIs('public.evenements') ? 'active' : ''}}" href="{{ route('public.evenements') }}">Evenements</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>