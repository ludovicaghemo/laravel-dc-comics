<header>
    <div class="container d-flex justify-content-between align-items-center">
        {{-- Logo --}}
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc">
        </div>
        {{-- Navigation --}}
        <nav>
            <ul>
                {{-- @foreach ($nav_links as $single_link) --}}
                <li>
                  <a href="">COMICS</a>
                </li> 
                {{-- @endforeach --}}
            </ul>
          </nav>
    </div>
    <!-- /Container -->
</header>