<header>
    <div class="container d-flex justify-content-between align-items-center">
        {{-- Logo --}}
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc">
        </div>
        {{-- Navigation --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            {{-- Route for home --}}
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('home') }}">DC COMICS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    {{-- Index route --}}
                    <a class="nav-link active" aria-current="page" href="{{ route('comics.index') }}">COMICS</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <!-- /Container -->
</header>